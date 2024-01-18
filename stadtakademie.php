<?php

require_once 'setup.php';

$aktuell = true;
$stadtakademie = true;

ob_start() ?>
<img src="/img/stadtakademie.jpg" alt="Foto der Evangelischen Stadtakademie">

# Evangelische Stadtakademie Kiel

<hr>

Konzeption (als PDF - Datei)

<hr>

### Veranstaltungen

<div id="blackbox">
<p>Wir freuen uns über die zukünftige Zusammenarbeit mit der
Evangelischen Akademie der Nordkirche
mit Sitz in Hamburg.<br>
An dieser Stelle werden wir Sie über geplante Veranstaltungen informieren.</p>
</div>

Zur Zeit leider keine Termine
<?php $main = ob_get_clean();

require 'layouts/main.php';

