<?php

require_once 'setup.php';

$corona = true;
$coronaJohannespassion = true;

//$titelbild= array('/img/_MG_0656_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>

# Musik und Wort zu Advent und Weihnachten

<hr style="margin-top: 2em;">

<h2 style="margin-top: 35px;">Musik und Wort zum 1. Advent</h2>

<p><strong>"Siehe, dein König kommt zu dir, ein Gerechter und ein Helfer"</strong>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Advent1.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video. Sie können die Andacht gerne <a href="/downloads/Advent1.mp4">hier herunterladen</a> und direkt auf ihrem Computer ansehen.
  </video></p>


<h2 style="margin-top: 35px;">Musik und Wort zum 2. Advent</h2>

<p><strong>"Seht auf und erhebt eure Häupter, weil sich eure Erlösung naht"</strong>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Advent02.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video. Sie können die Andacht gerne <a href="/downloads/Advent1.mp4">hier herunterladen</a> und direkt auf ihrem Computer ansehen.
  </video></p>


<h2 style="margin-top: 35px;">Musik und Wort zum 3. Advent</h2>

<p><strong>"Bereitet dem HERRN den Weg; denn siehe, der HERR kommt gewaltig."</strong>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Advent03.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video. Sie können die Andacht gerne <a href="/downloads/Advent1.mp4">hier herunterladen</a> und direkt auf ihrem Computer ansehen.
  </video></p>


<h2 style="margin-top: 35px;">Musik und Wort zum 4. Advent</h2>

<p><strong>"Freuet euch in dem Herrn allewege, und abermals sage ich: Freuet euch! Der Herr ist nahe!"</strong>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Advent04.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video. Sie können die Andacht gerne <a href="/downloads/Advent1.mp4">hier herunterladen</a> und direkt auf ihrem Computer ansehen.
  </video></p>


<h2 style="margin-top: 35px;">Musik und Wort zum Weihnachtsfest</h2>

<p><strong>"Das Wort ward Fleisch und wohnte unter uns, und wir sahen seine Herrlichkeit."</strong>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 10px;" width="600" height="338">
    <source src="/downloads/Weihnachten.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video. Sie können die Andacht gerne <a href="/downloads/Advent1.mp4">hier herunterladen</a> und direkt auf ihrem Computer ansehen.
  </video></p>


<h2 style="margin-top: 35px;">Musik und Wort zum Jahreswechsel</h2>

<p><strong>"Meine Zeit steht in deinen Händen."</strong>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 10px;" width="600" height="338">
    <source src="/downloads/Jahreswechsel.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video. Sie können die Andacht gerne <a href="/downloads/Advent1.mp4">hier herunterladen</a> und direkt auf ihrem Computer ansehen.
  </video></p>



<?php if( time() > 1609866000|| isset($_GET['preview']) ): ?>

<h2 style="margin-top: 35px;">Musik und Wort zum Epiphanisfest</h2>

<p><strong>"Die Finsternis vergeht und das wahre Licht scheint schon."</strong>
  <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 10px;" width="600" height="338">
    <source src="/downloads/Epiphanias.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video. Sie können die Andacht gerne <a href="/downloads/Advent1.mp4">hier herunterladen</a> und direkt auf ihrem Computer ansehen.
  </video></p>

<?php endif;?>


<?php $main = ob_get_clean();

require 'layouts/main.php';

