<?php 
if(!@$start) {
	require 'setup.php';
    require 'elements/veranstaltungen_getconfig.php';
}
    
        $events = $app->db->events()->where('visible', '1')->where('(date >= CURDATE() - INTERVAL archiv DAY) or (archiv IS NULL)')->order($get['order'].' '.$get['dir']);

        // Monat und Jahr
        if(!empty($get['month']) && $get['month'] != '0') $events->where('MONTH(date)', $get['month']);
        if(!empty($get['year'])) $events->where('YEAR(date)', $get['year']);
        
        // Vergangene Veranstaltungen
        
        	if($get['old'] == 'old') {
        		$events->where('date <= CURDATE()');
        	} elseif($get['old'] == 'nold') {
        		$events->where('date >= CURDATE()');
        	}
        	$old= $get['old'];

        if(strlen($get['words']) > 0) {
            $words = preg_split('/\s+/', $get['words']);

            $or = array();
            foreach($words as $word) {
                 $or[] = "title LIKE '%".$word."%'";
                 $or[] = "ort LIKE '%".$word."%'";
                 $or[] = "text LIKE '%".$word."%'";
            }
            
            $events->where(implode(' OR ', $or));
        }
        
        
        // Kategorisierung
        
        if($get['cats'] != 'all') {
        	$selcats= str_replace('_', ',', $get['cats']);
			$app->selcats= explode(',', $selcats);
			
			$addcats= array();
			foreach($app->selcats as $cat) {
				$addcats= $app->getCatChildren($cat, $addcats);
			}
			
			$app->searchcats= array_merge($app->selcats, $addcats);
			
			//print_r($app->searchcats);
									
			$events->where('id', $app->db->event_rel()->select('event_id')->where('cat_id', $app->searchcats));
        } else {
        	$app->searchcats= null;
        }
       
        if($get['reg'] == 'nreg') {
        	$events->where('reg_id IS NULL');
        	//$count= $events->count('*');
        	//$events->limit($get['perpage'], ($get['page'] - 1) * $get['perpage'])->order($get['order'].' '.$get['dir']);
        } else {
        	if($get['reg'] == 'reg') {
        		$events->where('reg_id IS NOT NULL');
        	}
        	$events= $app->addRegEvents($events, $get['month'], $get['year'], $old);
        	//$count = sizeof($events);
        	//$events= array_slice($events, ($get['page'] - 1) * $get['perpage'], $get['perpage']);
        }

require 'elements/veranstaltungen_db.php';
?>