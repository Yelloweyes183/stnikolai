<?php 
header("Expires: Mon, 12 Jul 1995 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 

if(!@$start) {
	require 'setup.php';
    require 'elements/veranstaltungen_getconfig.php';
}
    
        $events = $app->db->events()->where('visible', '1')->where('(date >= CURDATE() - INTERVAL archiv DAY) or (archiv IS NULL)')->order($get['order'].' '.$get['dir']);

        // Monat und Jahr
        if(!empty($get['month']) && $get['month'] != '0' && $get['month'] != '-1') $events->where('MONTH(date)', $get['month']);
        if(!empty($get['year']) && @$get['month'] != '-1') $events->where('YEAR(date)', $get['year']);
        
        // Vergangene Veranstaltungen
        
        	if($get['old'] == 'old') {
        		$events->where('date <= CURDATE()');
        	} elseif($get['old'] == 'nold') {
        		$events->where('date >= CURDATE()');
        	}
        	$old= $get['old'];

        if(strlen($get['words']) > 0) {
            $words = str_replace('_', ' ', $get['words']);

            $or = array();
            $or[] = "title LIKE '%".$words."%'";
            $or[] = "titleadd LIKE '%".$words."%'";
            $or[] = "ort LIKE '%".$words."%'";
            $or[] = "kurztext LIKE '%".$words."%'";
            $or[] = "text LIKE '%".$words."%'";
            
            $events->where(implode(' OR ', $or));
        } else {
        	$words= null;
        }
        
        // Kategorisierung
        
        /*if($get['cats'] != 'all') {
        	$selcats= str_replace('_', ',', $get['cats']);
			$app->selcats= explode(',', $selcats);
			
			$addcats= array();
			foreach($app->selcats as $cat) {
				$addcats= $app->getCatChildren($cat, $addcats);
			}
			
			$app->searchcats= array_merge($app->selcats, $addcats);
			
			$app->db->event_rel()->select('event_id')->where('cat_id', $app->searchcats);
									
			$events->where('id', $app->db->event_rel()->select('event_id')->where('cat_id', $app->searchcats));
        } else {
        	$app->searchcats= null;
        }*/
		if( !isset($get['tags']) || empty($get['tags']) ) $get['tags'] = 'all';
		if( isset($get['chor']) && $get['chor'] == 'true' )
		{
			$fset_preselect = 	$app->db->tagging_preselect()->select('tag_id')->where('cat_id', 1);
			foreach($fset_preselect as $p)
			{
				$fset_tags[] = $p['tag_id'];
			}
			
			$get['tags'] = implode('_', $fset_tags);
		}
		
		if($get['tags'] != 'all') {
        	$selcats= str_replace('_', ',', $get['tags']);
			$app->searchcats= explode(',', $selcats);
						
			if( isset($_GET['andor']) && $_GET['andor'] == 'and' )
			{
				//$events->where('id', $app->db->tagging_rel()->select('event_id')->where('tag_id', implode(' AND ', $app->searchcats)));
				$events->where('id', $app->db->tagging_rel()->select('event_id')->where('event_id IS NOT NULL')->where('tag_id', $app->searchcats)->group('event_id', 'COUNT(DISTINCT tag_id) = '.count($app->searchcats)));
			}
			else
			{
				$events->where('id', $app->db->tagging_rel()->select('event_id')->where('tag_id', $app->searchcats));
			}
        } else {
        	$app->searchcats= null;
        }
        
        /*if(!is_null(@$get['acats'])) {
        	$selacats= str_replace('_', ',', $get['acats']);
			$app->selacats= explode(',', $selacats);
			
			$evids= array();
			$addacats= array();
			foreach($app->selacats as $acat) {
				$evids[]= $app->db->event_rel()->select('event_id')->where('cat_id', $acat);
			}			
			
			foreach($evids as $evid) {
				$evidarr= array();
				foreach($evid as $evidres) $evidarr[]= $evidres['event_id'];
				$addacats= array_merge($addacats, $evidarr);
			}
									
			echo $events->where('id', $addacats);
        }
        
        if(!is_null(@$get['ncats'])) {
        	$selncats= str_replace('_', ',', $get['ncats']);
			$app->selncats= explode(',', $selncats);
			
			$remcats= array();
			foreach($app->selncats as $ncat) {
				$remcats= $app->getCatChildren($ncat, $remcats);
			}
			
			$app->searchncats= array_merge($app->selncats, $remcats);
									
			$events->where('id NOT', $app->db->event_rel()->select('event_id')->where('cat_id', $app->searchncats));
        }*/
        
        foreach($events as $ev) {
        	if(!@$hidechorlink && @$get['hidechorlink'] != 'true') $ev['chor']= $app->isChor($ev['id']);
        	$ev['kritiken']= $app->getKritiken($ev['id']);
        	$ev['hoerproben']= $app->getHoerproben($ev['id']);
        }
       
        if($get['reg'] == 'nreg') {
        	$events->where('reg_id IS NULL');
        } else {
        	if($get['reg'] == 'reg') {
        		$events->where('reg_id IS NOT NULL');
        	}
        	$events= $app->addRegEvents($events, $get['month'], $get['year'], $old, null, $words);
        }

require 'elements/veranstaltungen_db.php';
?>