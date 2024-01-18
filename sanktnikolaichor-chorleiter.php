<?php

require_once 'setup.php';

$sanktnikolaichor = true;
$chor_chorleiter = true;

ob_start() ?>

<img class="r" src="/img/volkmar-zehner-300px.jpg" alt="Volkmar Zehner">

# SanktNikolaiChor - Chorleiter

<hr>

## Volkmar Zehner

erhielt seine erste musikalische Ausbildung in Emmendingen.

Von 1986 bis 1993 studierte er an der Musikhochschule Hannover Evangelische Kirchenmusik (Dirigieren bei Prof. Heinz Hennig und Prof. Peter Winkler, weitere Anregungen bei Prof. Volker Hempfling, Prof. Jörg Straube und Prof. Cornelius Trantow) und schloss mit der Kirchenmusik-A-Prüfung ab.

Seine Ausbildung als Organist vervollständigte Volkmar Zehner in Lyon (Médaille d‘ Or) und Hamburg (Konzertexamen) sowie auf diversen Meisterkursen.

Im Januar 1995 gründete Volkmar Zehner das Vocalensemble ars nova, dessen Schwerpunkt auf der Interpretation von a cappella-Chormusik von der Renaissance bis hin zur Klassischen Moderne liegt.

Von Mai 1995 bis April 2013 war Volkmar Zehner Kirchenmusiker der Ev.-luth. Kirchengemeinde Hamburg-Volksdorf; seit 1997 zusätzlich Kreiskantor im Kirchenkreis Hamburg-Ost. 2011 wurde er von der Kirchenleitung der Nordelbischen Kirche zum Kirchenmusikdirektor ernannt.

Seit April 2013 ist Volkmar Zehner Kantor und Organist an der Offenen Kirche St. Nikolai zu Kiel. Er verantwortet damit die umfangreiche Arbeit mit dem SanktNikolaiChor, die in der Aufführung von Oratorien, Bach-Kantaten, a cappella-Werken vom Frühbarock bis in die Moderne und anglikanischer Chormusik für die Gestaltung der Evensongs ein breites Spektrum findet. Dazu kommt ein vielseitiges Wirken als Organist, die Entwicklung und Organisation der „Konzerte für Kinder“ sowie die Ausarbeitung und Koordination des kirchenmusikalischen Gesamtprogrammes.

<?php $main = ob_get_clean();

require 'layouts/main.php';

