<?php

require_once 'setup.php';

$title2 = 'Ausstattung';
$raum = true;
$ausstattung = true;

ob_start() ?>

# Ausstattung

<hr>

<img src="/img/Altar.jpg" alt="Austattung der Sankt Nikolai Kirche" class="gallerypic">
<img src="/img/OrgelCavCol.jpg" alt="Austattung der Sankt Nikolai Kirche"class="gallerypic">
<img src="/img/schreiter.jpg" alt="Austattung der Sankt Nikolai Kirche" class="gallerypic">
<img src="/img/kanzel.jpg" alt="Austattung der Sankt Nikolai Kirche" class="gallerypic">
<img src="/img/Nagelkreuz.jpg" alt="Austattung der Sankt Nikolai Kirche" class="gallerypic">
<img src="/img/taufaltar.jpg" alt="Austattung der Sankt Nikolai Kirche" class="gallerypic">
<img src="/img/taufe.jpg" alt="Austattung der Sankt Nikolai Kirche" class="gallerypic">
<img src="/img/triumphkreuz.jpg" alt="Austattung der Sankt Nikolai Kirche" class="gallerypic">



<?php $main = ob_get_clean();

require 'layouts/main.php';

