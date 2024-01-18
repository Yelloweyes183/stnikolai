<?php

require_once 'setup.php';

$kirchenpaedagogik = true;
$angebot = true;

ob_start() ?>

# Angebot

<hr>

<img src="/img/kipae 4f.jpg" alt="Foto einer gruppe vor der Kirche" class="gallerypic r">
<img src="/img/kipae 5f.jpg" alt="Foto einer gruppe vor der Kirche" class="gallerypic r">
<img src="/img/kipae 3f.jpg" alt="Foto einer gruppe vor der Kirche" class="gallerypic r">

<h4>Die St. Nikolai-Kirche in Kiel bietet<br>
Begegnungen mit dem Kirchenraum<br>
für Schulklassen und andere Gruppen an.</h4>

 

 
Kirchenpädagogik heißt, unter Anleitung

- Kirche als Lernort erleben
- altersgemäße Erkundung mit allen Sinnen durchführen
- Erfahrungen mit Texten und Symbolen sammeln
- Gelegenheit für eigene Aktivitäten bieten
- Zeit für Stille einräumen
- handlungsorientiert und fächerübergreifend arbeiten

\- ca. 3 Stunden sollte sich jede Klasse Zeit nehmen.<br>
\- Materialkosten: 1,50 Euro  pro Kind<br>
\- Termine nach vorheriger Vereinbarung:

<br> 

Kirchenpädagoginnen siehe <a href="/kontakt">Kontakt</a>.

<?php $main = ob_get_clean();

require 'layouts/main.php';

