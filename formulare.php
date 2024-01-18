<?php

require_once 'setup.php';

$title2 = 'Wiedereintrittsformulare';
$wiedereintritt = true;
$formulare = true;

ob_start() ?>

# Formulare

<hr>




<?php $main = ob_get_clean();

require 'layouts/main.php';

