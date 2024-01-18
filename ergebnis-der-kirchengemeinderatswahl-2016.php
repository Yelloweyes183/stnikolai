<?php

require_once 'setup.php';

$kirchenwahl= true;
//$information = true;

$titelbild= array('/img/_MG_0656_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>

# Wahlergebnis der Kirchenwahl vom 27. November 2016

Gewählt haben: <strong>183</strong><br>
Wahlbeteiligung: <strong>8,1 %</strong>

Es konnten <strong>7 von 11</strong> vorgeschlagenen Kandidaten gewählt werden.

## Gewählt wurden:
Prof. Dr. Klaus Blaschke<br>
Annette Fink<br>
Dr. Peter von Gerlach<br>
Nicole Hansen<br>
Pastor i.R. Ferdinand Ohms<br>
Prof. Dr. Ulrich Stephani<br>
KMD Volkmar Zehner

<hr>

### <a target="_blank" href="/downloads/Ergebnis_der_Kirchengemeinderatswahl_2016.pdf" title="Das Wahlergebnis als PDF-Datei">Das Wahlergebnis als PDF-Datei</a>

<hr>

<?php $main = ob_get_clean();

require 'layouts/main.php';

