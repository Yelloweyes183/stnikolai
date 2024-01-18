<?php

require_once 'setup.php';

$aktuell = true;
$home = true;

$show_kalender= true;

$titelbild= array('/img/_MG_0647_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>

# Herzlich willkommen!

auf der Internetseite der Offenen Kirche St. Nikolai zu Kiel.<br>
Offene Kirche - das ist Kennzeichen und Programm zugleich.

Offen - für alle, aber beileibe nicht für alles<br>
Offen - auf alle Fälle täglich von 10:00 - 18:00<br>
Offen - natürlich sonntags zu den Gottesdiensten um 10:00 und 19:00

<hr style="margin-top: 2em;">
## Reformation in Kiel
Ende April hat der Reformationstruck, der im Rahmen des "Europäischen Stationenwegs" Geschichten der Reformation aus 19 Ländern und 67 Städten sammelt und präsentiert, in Kiel Station gemacht. Den Stationenfilm, der für diese Gelegenheit gedreht wurde und nun mit dem Truck weitergereist ist, können Sie hier noch einmal sehen.

<video style="max-width: 100%; margin-top: 1em;" controls="">
	<source type="video/mp4" src="/downloads/Reformation_Kiel_Final_01_Mbit.mp4">
</video>

<hr style="margin-top: 2em;">
## Kiels alte Seele – die St. Nikolai Kirche
Ein Filmprojekt <em>(The first cut ist the deepest)</em> im Rahmen des Masterstudiengangs Medienwissenschaften an der CAU.<br>
<em>Mitwirkende: Borris Blumenau, Christoph Fiedler, Lukas Knaack und Sabrina Santoro</em>

<video style="max-width: 100%; margin-top: 1em;" controls="">
	<source type="video/mp4" src="/downloads/The_first_cut_ist_the_deepest.mp4">
</video>

<hr style="margin-top: 2em;">
<?php 
	$events= $app->todayEvents();
?>

<?php if(sizeof($events) > 0): ?>
## Heute: <?php echo $app->days[date("w")].', '.date("d").'. '.$app->months[date("n")-1].' '.date("Y") ?>

<table id="veranstaltungen_today" class="veranstaltungen">
<?php 
	$show_today= true;
	require 'elements/veranstaltungen_db.php';
	$show_today= false;
?>
</table>

<?php endif ?>
	
## Kommende Veranstaltungen
	
<table id="veranstaltungen" class="veranstaltungen">

<?php $events= $app->indexEvents(); $hide_kw= true; require 'elements/veranstaltungen_db.php'; ?>

</table>

Alle weiteren Veranstaltungen finden Sie in unserem<br><a style="margin-top: 0.2em;" href="veranstaltungen">Veranstaltungskalender</a>.

<?php $main = ob_get_clean();

require 'layouts/main.php';

