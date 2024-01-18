<?php

require_once 'setup.php';

$raum = true;
$schreiter = true;

ob_start() ?>

# Schreiter - Fenster

<hr>

<img src="/img/schreiter.jpg" alt="Foto des Schreiter Fensters">


Das Licht, von Schreiter geformt, ruft uns zu uns selbst und verweist darauf, dass es auch andere Perspektiven gibt als die des Dunkels und der Lamentation. In der Tat: Schreiter, der Glasmaler von Weltrang, ist für das Verhältnis von Kunst und Kirche ein Lichtblick, weil er in einer hochgradig komplexen Weise Moral und Ästhetik, Theologie und Kunstreflektion, Offenbarung und künstlerisches Schaffen miteinander verbindet.<br>
<div class="zitat">Friedhelm Mennekes, SJ<br>
Kunststation St. Peter, Köln</div>

Der Künstler selbst:

Im rechten Fenster ist eine düstere U‑Form zu sehen, die noch der Todseite zugewandt ist. Ein kleines, glühendes Rot ... signalisiert aber bereits die not‑wendige Umkehr. Sie beginnt mit der sich nach der Geburtsseite hin ausstreckenden U‑Chiffre voller Verletzungen. Heftige Linien – Anfechtungen - scheinen dieser Sinnesänderung den Weg versperren zu wollen.

Im zweiten Fenster ist das dahineilende U‑Zeichen schon viel geheilter, wenngleich die linearen „Querschlägers“ noch immer seine Umkehr attackieren. Ein schmaler weißgoldener „Impuls“ von oben gibt ihm die Kraft zum Durchhalten.

Im dritten Fenster schließlich der Vorgeschmack des vollen göttlichen Lichts: Ein goldgelber „Strahl“ dieser Lichtbahn erreicht bereits den voraneilenden Wanderer.              

Erst im äußersten linken Fenster ein weiterer Richtungswechsel. Die an der (Wieder)geburts‑Seite angekommene Figur streckt sich - nunmehr in Weiß ‑ von allen Verfallserscheinungen gereinigt nach oben aus. Der Dialog mit Gott ist wieder hergestellt.


<?php $main = ob_get_clean();

require 'layouts/main.php';

