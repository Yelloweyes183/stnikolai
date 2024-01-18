<?php

require_once 'setup.php';

$musik = true;
$halbestunde = true;


$titelbild= array('/img/halbe_stunde.jpeg', true);

ob_start() ?>

# DIE HALBE STUNDE

<hr>

DIE HALBE STUNDE wurde mit dem ersten Konzert am 22. September 1999 der Öffentlichkeit vorgestellt. Das Konzept beruht auf einer Idee von Kirchenmusikdirektor Professor Rainer-Michael Munz, basierend auf der Tradition der Ratsmusiken in anderen Städten. Dort wurde an einem festen Tag der Woche nach den anstrengenden Ratssitzungen ein für alle Bürger zugängliches Konzert in der dem Rathaus nahe gelegenen Marktkirche zur Erbauung und Entspannung der Ratsherren gegeben.

Viele berühmte Organisten wie etwa Sweelinck in Amsterdam oder Buxtehude in Lübeck waren deshalb städtische Angestellte oder Beamte.

Die Idee, eine solche Ratsmusik an St. Nikolai zu etablieren, scheiterte in erster Linie an den Finanzen. Hilfe kam durch den Kulturausschuss des Fördererkreises der Kieler Altstadt. Des Weiteren ist Herr Christian Dela zu nennen, der mit einer großzügigen Spende den Anschub für diese »Ratsmusik« leistete. Ein Name für diese Konzertreihe, der gleichzeitig Programm war, wurde schnell gefunden: DIE HALBE STUNDE.

DIE HALBE STUNDE konnte nun erstmals stattfinden. Der Erfolg stellte sich gleich zu Beginn dieser Reihe ein. Offensichtlich war diese Veranstaltungsreihe eine Marktlücke. Eine halbe Stunde Musik zur Entspannung von einem turbulenten Geschäftstag, Mittwoch nachmittags um fünf Uhr bei freiem Eintritt, das hat es in Kiel bis dato nicht gegeben. Unglaublich viele Leute unterschiedlichster Altersklassen und Berufe nutzen das Angebot der St. Nikolai-Gemeinde. Das Angebot reicht von klassischer Musik aller Epochen bis hin zu Jazz-Improvisationen. Jedes Mal musizieren andere Künstler, vom Chor bis zu solistischen Besetzungen. Orgelmusik und Instrumentalmusik unterschiedlichster Art beleben die Vielfalt dieser Konzertreihe.

Bei den Musikern im Kieler Umkreis hat DIE HALBE STUNDE einen ausgezeichneten Ruf. Hier wird mit weniger bekannten Musikstücken, ungewöhnlichen Stilen und Mitteln experimentiert. Das ist möglich, da DIE HALBE STUNDE von einem offenen, interessierten Publikum besucht wird. Gleichwohl setzt sich natürlich die klassische Linie in den Vordergrund. Ohne die Anschubfinanzierung der ersten vier Monate durch Herrn Christian Dela vom Möbelhaus Dela wäre das nicht möglich gewesen.

Am 29. April 2009 fand das 500. Konzert, am 12. Februar 2014 das 750. Konzert und am 28.11.2020 das 1.000. Konzert dieser Reihe statt. Seit Anbeginn ist nie ein Konzert ausgefallen. Nur wenn Heiligabend auf einen Mittwoch fällt, findet stattdessen die übliche Christvesper statt.

Bei einem Besuch von durchschnittlich 200 Zuhörern pro Konzert ergeben sich heute (20. August 2020) statistisch gesehen mehr als 200.000 (zweihunderttausend) Besucher dieser Konzertreihe. Mit besonders reizvollen Programmangeboten konnten durchaus auch bis zu 500 Besucher angelockt werden. Bei durchschnittlich 4 Mitwirkenden pro Konzert sind das 4.000 Musiker, die sich daran beteiligt haben. Auch die Spendeneinnahmen sind so, dass keine weiteren Sponsoren um finanzielle Unterstützung gebeten werden müssen. Das ist deutschlandweit einzigartig. Ein Ende ist hoffentlich nicht abzusehen.
<!--
Am 29. April 2009 fand das 500. Konzert, am 12. Februar 2014 das 750. Konzert dieser Reihe statt. Seit Anbeginn ist nie ein Konzert ausgefallen. Nur wenn Heiligabend auf einen Mittwoch fällt, findet stattdessen die übliche Christvesper statt.

Bei einem Besuch von durchschnittlich 200 Zuhörern pro Konzert ergeben sich heute (2. Juni 2016) statistisch gesehen mehr als 174.000 (hundertvierundsiebzigtausend) Besucher dieser Konzertreihe. Mit besonders reizvollen Programmangeboten konnten durchaus auch bis zu 500 Besucher angelockt werden. Bei durchschnittlich 4 Mitwirkenden pro Konzert sind das
2.000 Musiker, die sich daran beteiligt haben. Auch die Spendeneinnahmen sind so, dass keine weiteren Sponsoren um finanzielle Unterstützung gebeten werden müssen. Das ist deutschlandweit einzigartig. Ein Ende ist hoffentlich nicht abzusehen.
-->
<hr>

Termine und Programme finden Sie in unserem <a href="/veranstaltungen">Veranstaltungskalender</a>.

<?php $main = ob_get_clean();

require 'layouts/main.php';
