<?php

require_once 'setup.php';

$corona = true;
$coronaMWOstern = true;

//$titelbild= array('/img/_MG_0656_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>

# Musik und Wort zur Passion und Ostern

<hr style="margin-top: 2em;">

<h2 style="margin-top: 35px;">Osterandacht: Maria!</h2>

<p>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Ostern.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video.
  </video>
</p>


<h2 style="margin-top: 35px;">Passionsandacht: Siehe, das ist dein Sohn</h2>

<p>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Passion05.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video.
  </video>
</p>


<h2 style="margin-top: 35px;">Passionsandacht: Im Garten</h2>

<p>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Passion04.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video.
  </video>
</p>


<h2 style="margin-top: 35px;">Passionsandacht: Petrus, ein Mensch</h2>

<p>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Passion03.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video.
  </video>
</p>

<h2 style="margin-top: 35px;">Passionsandacht: Ich denke dir nach, schöner Judas... </h2>

<p>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Passion02.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video.
  </video>
</p>

<h2 style="margin-top: 35px;">Passionsandacht: Die Salbung</h2>

<p>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Passion01.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video.
  </video>
</p>

<?php $main = ob_get_clean();

require 'layouts/main.php';

