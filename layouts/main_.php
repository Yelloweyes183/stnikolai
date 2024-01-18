<?php

if(empty($_SESSION['presentation'])) {
    $_SESSION['presentation'] = array(
        'color' => 0,
        'size' => 0
    );
}

$redirect = false;

$colors = array(
    'default',
    'black',
    'white'
);

$sizes = array(
    1.0,
    1.25,
    1.5,
    2.0
);

if(isset($_GET['color'])) {
    if(isset($colors[$_GET['color']])) {
        $_SESSION['presentation']['color'] = $_GET['color'];
    } else {
        $_SESSION['presentation']['color'] = 0;
    }
    unset($_GET['color']);
    $redirect = true;
}

if(isset($_GET['size'])) {
    if(isset($sizes[$_GET['size']])) {
        $_SESSION['presentation']['size'] = $_GET['size'];
    } else {
        $_SESSION['presentation']['size'] = 0;
    }
    unset($_GET['size']);
    $redirect = true;
}

if($redirect) {
    $uri = preg_replace('/\?.*$/', '', $_SERVER['REQUEST_URI']);
    $query = http_build_query($_GET);
    if(strlen($query) > 0) {
        $uri .= $query;
    }
    header('Location: '.$uri);
}

$presentation = $_SESSION['presentation'];

$color = $colors[$presentation['color']];
$size = $sizes[$presentation['size']];

$css = '/css/main.'.$color.'.'.$size.'.css';
$abscss = $config['root'].$css;
if(!file_exists($abscss) ||
        filemtime($abscss) <= filemtime($config['root'].'/css/main.css')) {
    ob_start();
    require_once($config['root'].'/css/main.css');
    $contents = ob_get_clean();
    file_put_contents($abscss, $contents);
}

$css = str_replace('.css', '.v'.filemtime($abscss).'.css', $css);

if(!isset($title) && isset($title2))
    $title = $title2 . ' | Offene Kirche Sankt Nikolai zu Kiel';
if(!isset($js)) $js = null;
if(!isset($title)) $title = 'Offene Kirche Sankt Nikolai zu Kiel';
if(!isset($description)) $description = '';
if(!isset($lang)) $lang = 'de';

ob_start() ?>

<div id="bg" data-size="<?php echo $size ?>">
<div class="container">
    <header id="header">
           
        <div id="site">
            <h3><a href="/">Offene Kirche Sankt Nikolai zu Kiel</a></h3>
        </div>
        
        <p id="access">
            <a href="#nav">Navigation</a>
        </p>
        
        <p id="logo">
            <a href="/" class="img">
                <img class="r" alt="Offene Kirche Sankt Nikolai zu Kiel" 
                    src="/img/logo.<?php echo $color ?>.png" width="<?php echo 430 * $size ?>">
            </a>
        </p>
    </header>

    <div id="main">
        <?php echo Markdown($main) ?>
    </div>
    
    <nav id="nav">
        <h3 class="narrow">Navigation</h3>
        <div id="nav-top">
        <ul class="top">
        <li class="top<?php ecco(@$aktuell, ' selected') ?>">
            <a href="/">Aktuell</a>
            
            <ul class="sub">
            <li class="<?php ecco(@$home, 'selected') ?>">
                <a href="/">Gottesdienste aktuell</a>
            </li>
            <li class="<?php ecco(@$gemeindebrief, 'selected') ?>">
                <a href="/gemeindebrief">Gemeindebriefe</a>
            </li>
            <li class="<?php ecco(@$veranstaltungen, 'selected') ?>">
                <a href="/veranstaltungen">Veranstaltungen</a>
            </li>
            <li class="<?php ecco(@$ausstellungen, 'selected') ?>">
                <a href="/ausstellungen">Ausstellungen</a>
            </li>
            <li class="<?php ecco(@$stadtakademie, 'selected') ?>">
                <a href="/stadtakademie">Ev. Stadtakademie</a>
            </li>
            </ul>
        </li>
        
         <li class="top<?php ecco(@$musik, ' selected') ?>">
            <a href="/musik">Musik</a>
            
            <ul class="sub">
            	<li class="<?php ecco(@$sanktnikolaichor, 'selected') ?>">
					<a href="/sanktnikolaichor">SanktNikolaiChor</a>
				</li>
				<li class="<?php ecco(@$konzerte, 'selected') ?>">
					<a href="/konzerte">Konzerte</a>
				</li>
				<li class="<?php ecco(@$halbestunde, 'selected') ?>">
					<a href="/halbestunde">Halbe Stunde</a>
				</li>
			
				 <li class="<?php ecco(@$choralschola, 'selected') ?>">
					<a href="/choralschola">Choralschola</a>
				</li>
				<li class="<?php ecco(@$knabenchor, 'selected') ?>">
					<a href="/knabenchor">Kieler Knabenchor</a>
				</li>
				<li class="<?php ecco(@$blechblaeserensemble, 'selected') ?>">
					<a href="/blechblaeserensemble">Kieler Blechbläserensemble</a>
				</li>
				<!--
				<li class="<?php ecco(@$rezensionen, 'selected') ?>">
					<a href="/rezensionen">Rezensionen</a>
				</li>
				-->
            </ul>
        </li>
        
        <!--
        <li class="top<?php ecco(@$veranstaltungen, ' selected') ?>">
            <a href="/veranstaltungen">Veranstaltungen</a>
        </li>
        -->
        
        <li class="top<?php ecco(@$wiedereintritt, ' selected') ?>">
            <a href="/wiedereintritt">Wiedereintritt</a>
        </li>
    
        <li class="top<?php ecco(@$raum, ' selected') ?>">
            <a href="/raum">Raum</a>
           
            <ul class="sub">
            <li class="<?php ecco(@$architektur, 'selected') ?>">
                <a href="/raum">Architektur</a>
            </li>
            <li class="<?php ecco(@$ausstattung, 'selected') ?>">
                <a href="/ausstattung">Ausstattung</a>
            </li>
            <li class="<?php ecco(@$schreiter, 'selected') ?>">
                <a href="/schreiter">Schreiter</a>
            </li>
             <li class="<?php ecco(@$orgeln, 'selected') ?>">
                <a href="/orgeln">Orgeln</a>
            </li>
            <li class="<?php ecco(@$geschichte, 'selected') ?>">
                <a href="/geschichte">Geschichte</a>
            </li>
            </ul>
            
        </li>
        
        <li class="top<?php ecco(@$konzept, ' selected') ?>">
            <a href="/konzept">Konzept</a>
            
            <ul class="sub">
            <li class="<?php ecco(@$blitzlichter, 'selected') ?>">
                <a href="/raum">Blitzlichter</a>
            </li>
            <li class="<?php ecco(@$material, 'selected') ?>">
                <a href="/material">Material</a>
            </li>
            <li class="<?php ecco(@$statistik, 'selected') ?>">
                <a href="/statistik">Statistik</a>
            </li>
            </ul>
        </li>
        
        <li class="top<?php ecco(@$kirchenpaedagogik, ' selected') ?>">
            <a href="/kirchenpaedagogik">Kirchenpädagogik</a>
            <ul class="sub">
            <li class="<?php ecco(@$angebot, 'selected') ?>">
                <a href="/kirchenpaedagogik">Angebot</a>
            </li>
            <li class="<?php ecco(@$thesen, 'selected') ?>">
                <a href="/thesen">Thesen</a>
            </li>
            </ul>

        </li>

        <li class="top<?php ecco(@$links, ' selected') ?>">
            <a href="/links">Links</a>
        </li>
        
      <!--  <li class="top<?php ecco(@$spenden, ' selected') ?>">
            <a href="/spenden">Spenden</a>
        </li> -->
        
        <li class="top<?php ecco(@$kontakt, ' selected') ?>">
            <a href="/kontakt">Kontakt</a>
        </li>
        
        <li class="top<?php ecco(@$impressum, ' selected') ?>">
            <a href="/impressum">Impressum</a>
        </li>
        </ul>
        
        <p class="menubuttonp"><a class="menubutton veranstbutton<?php ecco(@$veranstaltungen, ' veranstselected') ?>" href="veranstaltungen">Veranstaltungen</a></p>
        
        <p class="menubuttonp"><a class="menubutton webcambutton<?php ecco(@$webcam, ' webcamselected') ?>" href="webcam">Live Webcam's</a></p>
        
        <p id="presentation"><a href="?color=<?php echo ($presentation['color']+1) % 3 ?>">Kontrast ändern</a><br>
            Größe: <a href="?size=0">100%</a><span class="wide"><br></span>
            <a href="?size=1">125%</a><span class="wide"><br></span>
            <a href="?size=2">150%</a><span class="wide"><br></span>
            <a href="?size=3">200%</a></p>
            
        <div class="wrap">
        <div id="google_translate_element"></div>
        </div>
        </div>
    </nav>
    
    
            
    
</div>
</div>

<?php $body = ob_get_clean();

require 'base.php';