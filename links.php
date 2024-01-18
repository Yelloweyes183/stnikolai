<?php

require_once 'setup.php';

$links = true;

ob_start() ?>

# Links

<hr>

<img src="/img/links 2.jpg" alt="Foto des Treppenaufganges der Kirche">

<a href="http://www.ekd.de/" target="_blank">Evangelische Kirche Deutschlands

<a href="http://www.nordkirche.de/" target="_blank">Nord Kirche</a>

<a href="http://www.kirchenkreis-altholstein.de/index.php" target="_blank">Kirchenkreis Altholstein</a>

<a href="http://www.interrel-kiel.de/" target="_blank">Interreligiöser Arbeitskreis Kiel</a>

<a href="http://www.city-pastoral-kiel.de/" target="_blank">KirchenKai - City-Pastoral Kiel</a>

 
Die "Offene Kirche St. Nikolai" ist Mitglied der CityKirchenKonferenz (CKK), einem losen Zusammenschluß all derer Kirchen Deutschlands, der Schweiz und der Niederlande, die in vergleichbaren Situationen arbeiten. Sie finden im Anschluß eine Link-Liste solcher Kirchen, die beständig erweitert werden wird. Erfolgreiches Stöbern - und denken Sie daran: nicht jeder muß alles machen, und nicht immer muß das Rad neu erfunden werden...

 

<a href="http://www.citykirchen.eu/" target="_blank">CityKirchenKonferenz</a>

<a href="http://www.citykirchenprojekte.de/" target="_blank">Netzwerk Citykirchen-Projekte</a>

<a href="http://www.offenekirche.ch/" target="_blank">Offene Kirche in der Schweiz</a>

 

<a href="http://www.sankt-petri.de/" target="_blank">St. Petri, Hamburg</a>

<a href="http://www.st-petri-luebeck.de/" target="_blank">St. Petri, Lübeck</a>

<a href="http://www.hauptkirche-stnikolai.de/" target="_blank">St. Nikolai am Klosterstern, Hamburg</a>

<a href="http://www.jacobus.de/" target="_blank">St. Jacobi, Hamburg</a>

<a href="http://www.st-michaelis.de/" target="_blank">St. Michaelis, Hamburg</a>

<a href="http://www.katharinen-hamburg.de/" target="_blank">St. Katharinen, Hamburg</a>

<a href="http://www.offener-st-jakob.ch/" target="_blank">Offener St. Jakob, Zürich</a>

<a href="http://www.frauenkirche-dresden.de/" target="_blank">Frauenkirche, Dresden</a>

<a href="http://www.gedaechtniskirche-berlin.de/KWG/index.php" target="_blank">Kaiser-Wilhelm-Gedächtnis-KIrche, Berlin</a>

<a href="http://www.marienkirche-berlin.de/" target="_blank">St. Marien, Berlin</a>

<a href="http://www.alte-nikolaikirche.de/" target="_blank">St. Nikolai-Kirche, Frankfurt</a>

<a href="http://www.antonitercitykirche.de/" target="_blank">Antoniterkirche, Köln</a>

<a href="http://www.kirche-hannover.de/marktkirche/index.php" target="_blank">Marktkirche Hannover</a>

<a href="http://www.sankt-peter-koeln.de/wp/" target="_blank">Sankt Peter, Köln (Kunst-Station)</a>

<a href="http://www.offenekirche.ch/" target="_blank">Offene Kirche Elisabethen, Basel</a>

<?php $main = ob_get_clean();

require 'layouts/main.php';

