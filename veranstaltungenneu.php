<?php

require_once 'setup.php';
require 'elements/veranstaltungen_getconfig.php';

$aktuell  = true;
$veranstaltungen = true;

ob_start() ?>

<div class="zoomable">
<img class="r" src="/img/_MG_0675_st nikolai panoAnd6more_tonemapped.jpg">
</div>

<div id="output" style="border: 1px solid; margin-top: 30px;">
</div>

# Veranstaltungen



<?php 
	//$events= $app->kalenderEvents();
	//$today= $app->todayEvents();
	$events= $app->todayEvents();
?>


<?php if(sizeof($events) > 0 && $get['today'] != 'off'): ?>
## Heute: <?php echo $app->days[date("w")].', '.date("d").'. '.$app->months[date("n")].' '.date("Y") ?>

<table id="veranstaltungen_today" class="veranstaltungen">
<?php
	$show_today= true;
	require 'elements/veranstaltungen_db.php';
	$show_today= false;
?>
</table>

<?php endif ?>
	
## Veranstaltungskalender

<button id="filtertoggle">Auswahl eingrenzen</button>

<?php require 'elements/filter.php'; ?>

<table id="veranstaltungen" class="veranstaltungen">

<?php $start= true; require 'kalenderel.php'; ?>

</table>

<?php $main = ob_get_clean();

require 'layouts/main.php';

