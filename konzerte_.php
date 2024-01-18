<?php

require_once 'setup.php';

$musik = true;
$konzerte = true;

$titelbild= array('/img/_MG_0656_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>

# Konzerte

<!--
<hr>

<?php require 'elements/klappinfo_maenner.php'; ?>
-->

<hr style="margin-top: 2em;">

Die Termine und Programme zu unseren Konzerten finden Sie in unserem <a href="/veranstaltungen/konzerte">Veranstaltungskalender</a>.

Karten für Konzerte mit Vorverkauf sind erhältlich in unserem <a href="https://st-nikolai-kiel.reservix.de/events" target="_blank">Ticketshop</a> und an den lokalen Vorverkaufsstellen. Details dazu finden Sie bei den einzelnen Veranstaltungen im <a href="/veranstaltungen/konzerte">Veranstaltungskalender</a>.


<?php $main = ob_get_clean();

require 'layouts/main.php';
