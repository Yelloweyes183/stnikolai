<?php

require_once 'setup.php';

$subtitle = 'Nicht gefunden';

status(404);

ob_start() ?>
# Nicht gefunden

Die angeforderte Seite wurde nicht gefunden.
<?php $main = ob_get_clean();

require 'layouts/main.php';