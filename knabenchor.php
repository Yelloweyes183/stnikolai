<?php

require_once 'setup.php';

$musik = true;
$knabenchor = true;

ob_start() ?>
# Kieler Knabenchor

<hr>

<div class="zoomable">
<img class="r" src="/img/KielerKnabenchor_2023_0195.jpg">
</div>

 
In den 60er Jahren beschloss die Stadt Kiel die Gründung eines Chores für Jungen aus Kiel und Umgebung und beauftragte mit der Leitung den aus Leipzig stammenden Musikerzieher und Leiter des Nachwuchschores der Regensburger Domspatzen, Guntram Altnöder. Er begann 1968 mit rund 30 Jungen zwischen 9 und 14 Jahren die Aufbauarbeit des Kieler Knabenchores. Heute umfaßt der Chor insgesamt rund 40 Jungen im Alt und Sopran sowie einen etwa 20-köpfigen Männerchor. Den Übergang zwischen diesen beiden Chören bildet ein Chor, in dem die im Stimmbruch befindlichen Sänger zusammengefasst sind. 

Den Nachwuchs suchen der Chorleiter und die Leitung des Nachwuchschores bei Besuchen von Grundschulen in Kiel und Umgebung aus. 1998 übernahm Hans-Christian Henkel die Leitung von Chorgründer Altnöder und begleitete den Kieler Knabenchor bis zu dessen 50-jährigen Jubiläum im Jahr 2018 und übergab die Leitung des Chores anschließend an Michael D. Müller, den langjährigen Leiter der Lübecker Knabenkantorei. Seit Februar 2020 ist Jan-Hendrik Jensch Leiter des Kieler Knabenchores. 

Regelmäßige Proben - im allgemeinen zwei- oder dreimal pro Woche - bereiten die jungen Sänger auf ihre Konzerte vor. Diese Vorbereitung findet im eigenen Probenzentrum in der Legienstraße statt. Hier stehen neben Probenräumen auch Möglichkeiten zu Entspannung und zum Spielen für die Zeit vor und nach den Proben zur Verfügung. Für die Knaben und Männer gehört zu einer aktiven und erfolgreichen Chormitgliedschaft neben dem Spaß und der Freude an Gemeinschaft und Musik auch ein gewisses Maß an Ausdauer, Fleiß und Disziplin. 

Die Konzerte in Kiel finden meist in der Nikolaikirche statt. Gerühmt beim Kenner aus der Landeshauptstadt und aus dem weiteren Schleswig-Holstein sind vor allem das alle zwei Jahre aufgeführte Weihnachts-Oratorium von J.S. Bach und das Weihnachtsliedersingen des Kieler Knabenchores. Diese Veranstaltungen locken immer wieder viele Bürger, darunter auch prominente Freunde des Chors, in die über 750 Jahre alte Kieler Stadtkirche am Alten Markt. Dazu zählen auch der amtierende Ministerpräsident von Schleswig-Holstein, Daniel Günther, der im Jahr 2019 die Schirmherrschaft für den Kieler Knabenchor übernahm. 


<a href="http://www.kieler-knabenchor.de/"> Homepage des Kieler Knabenchores</a>


<?php $main = ob_get_clean();

require 'layouts/main.php';
