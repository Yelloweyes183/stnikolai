<?php

require_once 'setup.php';
$show_kalender= true;

$sanktnikolaichor = true;
$chor_aktuelles = true;

$aktuelles_content= file_get_contents('elements/sanktnikolaichor-aktuelles.php');

$fset_preselect = 	$app->db->tagging_preselect()->select('tag_id')->where('cat_id', 1);
$fset_events =		$app->db->tagging_rel()->select('event_id')->where('tag_id', $fset_preselect)->where('event_id != 0');
$fset_years =		$app->db->events->select('DISTINCT(YEAR(date)) as y')->where('YEAR(date) >= '.intval(date('Y')))->where('id', $fset_events)->order('YEAR(date) ASC');
$years_arr =		array();
$fset_tags = 		array();

foreach($fset_years as $y)
{
	$years_arr[] = $y['y'];
}

foreach($fset_preselect as $p)
{
	$fset_tags[] = $p['tag_id'];
}

ob_start() ?>

# SanktNikolaiChor - Aktuelles

<!--
<hr>
__Soprane und ein Bass für den Nikolai-Chor gesucht!__

Der SanktNikolaiChor sucht noch Soprane und einen Bass, die unseren Chor verstärken möchten. Wir freuen uns auf Sängerinnen und Sänger mit Chorerfahrung und Notenkenntnissen, die gerne auf hohem Niveau mit Freude Gottesdienste musikalisch mitgestalten und a cappella- bzw. orchesterbegleitete Geistliche Konzerte singen möchten und vor einem Vorsingen nicht zurückschrecken.
 
Auf Sie warten ein abwechslungsreiches und weites Repertoire, eine konzentriert-herzliche Probenatmosphäre und eine nette und engagierte Chorgemeinschaft. Chorfahrten ins In- und Ausland sind weitere Höhepunkte unserer Chorarbeit.
 
Auf dem Programm für 2018 stehen u.a. die Matthäus-Passion und das Magnificat von J.S. Bach, Evensongs und Bach-Kantaten. 
Herzlich Willkommen!
 
Proben: Dienstags 19:30 - 22 Uhr im<br>
Propstei-Saal, Falckstr. 9
 
Nähere Informationen bei:<br>
KMD Volkmar Zehner,<br>
Tel.: 0172 / 545 17 16<br>
<a href="mailto:zehner@st-nikolai-kiel.de">zehner@st-nikolai-kiel.de</a>


<?php if(!empty($aktuelles_content) && $aktuelles_content != "<p><br></p>"): ?>
<hr>
-->

<?php echo $aktuelles_content ?>
<?php endif ?>

<hr>

## Nächste Veranstaltungen mit dem SanktNikolaiChor

<?php 

$get = array(
            'page' => 1,
            'perpage' => 10,
            'order' => 'date',
            'dir' => 'asc',
            'words' => '',
            'filter' => '',
            'month' => 0,
            'year' => date("Y"),
            'old' => 'nold',
            'reg' => 'all',
            'filter' => 'off',
            'cats' => '15',
            'acats' => null,
            'ncats' => null,
            'today' => 'true',
			'tags'	=> implode('_', $fset_tags)			
        );

$filterzeit= 'kommende';
$getstringold= 'nold';
require 'elements/filter_chor.php';
?>

<table id="veranstaltungen" class="veranstaltungen" data-target="chor" data-old="nold">

<?php
$start= true;
$hidechorlink= true;
require 'kalenderel.php';
?>
</table>

<?php $main = ob_get_clean();

require 'layouts/main.php';

