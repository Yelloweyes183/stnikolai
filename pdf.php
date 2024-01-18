<?php 
if(!@$start) {
	require 'setup.php';
    require 'elements/veranstaltungen_getconfig.php';
}

	$months= array(	'Januar',
        			'Februar',
        			'März',
        			'April',
        			'Mai',
        			'Juni',
        			'Juli',
        			'August',
        			'September',
        			'Oktober',
        			'November',
        			'Dezember');
        			
    $days= array(	'So.',
        			'Mo.',
        			'Di.',
        			'Mi.',
        			'Do.',
        			'Fr.',
        			'Sa.',);
    
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

        /*if(strlen($get['words']) > 0) {
            $words = preg_split('/\s+/', $get['words']);

            $or = array();
            foreach($words as $word) {
                 $or[] = "title LIKE '%".$word."%'";
                 $or[] = "ort LIKE '%".$word."%'";
                 $or[] = "text LIKE '%".$word."%'";
            }
            
            $events->where(implode(' OR ', $or));
        }*/
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
			
			//print_r($app->searchcats);
									
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
        
$pdf = new \fpdf\FPDF();
$pdf->SetMargins(11, 12);
$pdf->SetAutoPageBreak(true, 18); 
$pdf->AddPage();
$pdf->Image('img/veranstaltungskalender-dina4.jpg', 0, 0, 210);

// Monat und Jahr
$timestr= (($get['month']==0)?'':$months[$get['month'] - 1].' ').$get['year'];

$pdf->SetFont('Helvetica', '', 12);
$pdf->setXY(112, 14);
//$pdf->Cell(100, 6, 'Offene Kirche Sankt Nikolai zu Kiel', 0, 0, 'L');
$pdf->SetFont('Helvetica', 'B', 12);
if(@$get['chor']=='true') {
	$chorstr= (@$get['old']=='old')?'Konzertarchiv':'Konzerte';
	$pdf->Cell(86, 6, 'SanktNikolaiChor '.$chorstr.' '.$get['year'], 0, 1, 'R');
} else {
	$pdf->Cell(86, 6, 'Veranstaltungen '.$timestr, 0, 1, 'R');
}
$pdf->SetFont('Helvetica', '', 12);

$pages= 1;
$jumptried= false;
$newday= false;
$oldday= 0;
$kw= 0;
foreach($events as $event) {
	$pdf2= clone $pdf;
	$kwsave= $kw;
	$olddaysave= $oldday;
	
	insertevent:	
	$timestamp= strtotime(date("d.m.Y", strtotime($event['date'])));
	if($timestamp != $oldday or $newday) {
		$oldday= $timestamp;
		$newday= false;
		$pdf->SetFont('Helvetica', 'B', 10);
		$posy= $pdf->GetY()+2;
		$pdf->SetY($posy);
		
		$tempkw= date("W", strtotime($event['date'])+24*60*60);
		if($tempkw != $kw) {
			if(@$get['chor']==true) {
				$pdf->SetDrawColor(200, 17, 19);
				$pdf->SetTextColor(200, 17, 19);
			} else {
				$pdf->SetDrawColor(119, 0, 119);
				$pdf->SetTextColor(119, 0, 119);
			}
			$pdf->SetFont('Helvetica', '', 9);
			$pdf->SetLineWidth(0.1);
			$pdf->Line(12, $posy, 198, $posy);
			$pdf->Cell(0, 5, 'KW '.$tempkw, 0, 0, 'R');
			$pdf->SetDrawColor(0, 0, 0);
			$pdf->SetTextColor(0, 0, 0);
			$pdf->SetFont('Helvetica', 'B', 10);
			$kw= $tempkw;
		}
		
		$pdf->SetX(11);
		$pdf->Cell(8, 6, $days[date("w", strtotime($event['date']))], 0, 0, 'L');
		$pdf->Cell(22, 6, date("d.m.Y", strtotime($event['date'])), 0, 0, 'L');
		
	} else {
		$pdf->SetX(41);
	}
	
	$pdf->SetFont('Helvetica', 'B', 10);
	$pdf->Cell(20, 6, date("H:i", strtotime($event['date'])).' '.$event['zeit_add'], 0, 0, 'L');
	
	
	$pdf->SetFont('Helvetica', 'B', 10);
	$pdf->MultiCell(152, 6, $event['title'], 0, 'L');
	if(!empty($event['titleadd'])) {
		$pdf->SetX(61);
		$pdf->MultiCell(152, 5, $event['titleadd'], 0, 'L');
	}
	$pdf->SetFont('Helvetica', '', 10);
	if(!empty($event['kurztext'])) {
		$pdf->SetFont('Helvetica', '', 10);
		$pdf->SetX(61);
		$pdf->MultiCell(135, 4, preg_replace("/[\r\n]+[\s\t]*[\r\n]+/","\n", $event['kurztext']), 0, 'L');
		$pdf->SetFont('Helvetica', '', 10);
	}
	if(!empty($event['vvk_uebersicht']) && @$event['vvk_uebersicht'] == '1') {
		$pdf->SetFont('Helvetica', '', 10);
		$pdf->SetX(61);
		$yy = $pdf->getY();
		$pdf->MultiCell(124, 4, preg_replace("/[\r\n]+[\s\t]*[\r\n]+/","\n", str_replace('<br>', "\n", strip_tags($event['vvk_info'], '<br>'))), 0, 'L');
		$pdf->Cell( 40, 40, $pdf->Image('img/qr-code.png', 186, $yy, 12, 12), 0, 0, 'R', false );
		$pdf->SetFont('Helvetica', '', 10);
	}
	
	if(count($pdf->pages) > $pages && !$jumptried) {
		$jumptried= true;
		$newday= true;
		$pdf= clone $pdf2;
		$pdf->AddPage();
		$pdf->SetY(20);
		$pdf->Image('img/veranstaltungskalender-dina4.jpg', 0, 0, 210);
		$pages= count($pdf->pages);
		
		// reset
		$kw= $kwsave;
		$oldday= $olddaysave;
		goto insertevent;
	} else {
		$jumptried= false;
	}
}

$pdf->Output('veranstaltungen-st-nikolai.pdf', 'I');
//header('Content-Type: application/pdf');
//$pdf = file_get_contents('pdfex/test.pdf');
//echo $pdf;
?>