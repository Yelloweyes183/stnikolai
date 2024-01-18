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
        
$pdf = new \fpdf\FPDF();
$pdf->SetMargins(11, 12);
$pdf->SetAutoPageBreak(true, 18); 
$pdf->AddPage();
$pdf->Image('img/veranstaltungskalender-dina4.jpg', 0, 0, 210);

// Monat und Jahr
$timestr= (($get['month']==0)?'':$months[$get['month'] - 1]).' '.$get['year'];

$pdf->SetFont('Helvetica', '', 12);
$pdf->setXY(112, 14);
//$pdf->Cell(100, 6, 'Offene Kirche Sankt Nikolai zu Kiel', 0, 0, 'L');
$pdf->SetFont('Helvetica', 'B', 12);
$pdf->Cell(86, 6, 'Veranstaltungen '.$timestr, 0, 1, 'R');
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
			$pdf->SetDrawColor(119, 0, 119);
			$pdf->SetTextColor(119, 0, 119);
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
		$pdf->SetFont('Helvetica', '', 10);
		$pdf->Cell(22, 6, date("d.m.Y", strtotime($event['date'])), 0, 0, 'L');
		$pdf->SetFont('Helvetica', '', 10);
	} else {
		$pdf->SetX(41);
	}
	
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