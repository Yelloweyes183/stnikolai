<?php

require_once 'setup.php';

$stellenausschreibungen= true;
//$information = true;

$titelbild= array('/img/_MG_0656_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>

# Stellenausschreibungen

<hr>
Die Ev.-Luth. Kirchengemeinde St. Nikolai in Kiel sucht zum 1. Oktober 2023 (oder zu einem späteren Zeitpunkt) für ihr Gemeindebüro 

### einen Gemeindesekretär (m/w/d)                                          

## <a href="/doc/Stellenauschreibung Gemeindesekretär.pdf" title="Stellenauschreibung Gemeindesekretär (PDF)">Stellenauschreibung Gemeindesekretär (PDF)</a>

<hr>
Die Ev.-Luth. Kirchengemeinde St. Nikolai in Kiel sucht zum nächstmöglichen Zeitpunkt

### einen Raumpfleger (m/w/d)

## <a href="/doc/Stellenausschreibung Reinigungskraft.pdf" title="Stellenausschreibung Reinigungskraft (PDF)">Stellenausschreibung Reinigungskraft (PDF)</a>

<hr>


<?php $main = ob_get_clean();

require 'layouts/main.php';

