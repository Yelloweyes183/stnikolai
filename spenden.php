<?php

require_once 'setup.php';

$spenden = true;

ob_start() ?>

<div class="zoomable">
<img class="r" src="/img/_MG_0667_st nikolai panoAnd6more_tonemapped.jpg">
</div>

# Spenden

<hr>

__Sie möchten unsere Kirche unterstützen?__ Im folgenden bieten wir Ihnen einfache Möglichkeiten, der St. Nikolai Kirche durch eine Spende zu helfen. Selbstverständlich erhalten Sie auf Wunsch eine Spendenbescheinigung.

- <a href="#">Überweisungsträger zum Download (PDF)</a>

<?php $main = ob_get_clean();

require 'layouts/main.php';

