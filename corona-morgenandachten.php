<?php

require_once 'setup.php';

$corona = true;
$coronaMorgenandachten = true;

//$titelbild= array('/img/_MG_0656_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>

# Morgenandachten in der Karwoche

<hr style="margin-top: 2em;">

<?php $main = ob_get_clean();

require 'layouts/main.php';

