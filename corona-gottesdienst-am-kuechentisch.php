<?php

require_once 'setup.php';

$corona = true;
$coronaKuechentisch = true;

//$titelbild= array('/img/_MG_0656_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>

# Gottesdienst am Küchentisch

<hr style="margin-top: 2em;">

## Auf der Couch. Oder sonstwo
## Gemeinsam unterwegs in besonderen Zeiten

<a href="https://www.st-nikolai-kiel.de/downloads/Gottesdienst-am-Kuechentisch-mit-Texten.pdf" target="_blank">Klicken Sie hier um den Artikel als PDF-Dokument herunterzuladen</a>

<?php $main = ob_get_clean();

require 'layouts/main.php';

