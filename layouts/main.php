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
<div class="container<?php echo (@$sanktnikolaichor)?' sanktnikolaichor':''; ?>">
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
<?php if(isset($titelbild)): ?>
	<div class="main_fullwidth">
		<?php if( $titelbild[0] == 'index_video' ):?>
		<div>
		<video controls="" poster="/img/nikolai_v2_-_youtube.jpg" preload="metadata" style="margin-top: 10px; width:100%">
    <source src="/downloads/nikolai_v2_-_youtube.mp4" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video.
  </video>
<p>
	<strong>Video von St. Nikolai zu Kiel, erstellt von Thomas Stephani (2022 / 23)</strong><br>
<em>Musik: „Verleih uns Frieden gnädiglich“, gespielt vom Kieler Blechbläserensemble (Leitung: Frank Hennig) </em>
</p>

		<?php elseif( $titelbild[0] == 'index_teaser' ):?>
                        
                            <div style="background-color: #fff7e6; padding-top: 12px; padding-bottom: 12px; padding-left: 24px; padding-right: 24px; border-radius: 6px;margin-bottom: 12px;">

                                <p style="font-size: 1.8em; font-weight: bold; margin:10px 0 0 0; color: #996600; text-align: center">
                                    Johann Sebastian Bach: Kantatenzyklus 2023/24<br>
                                    in der Offenen Kirche St. Nikolai
                                </p>
                                <p style="font-size: 1em; font-weight: bold; margin:10px 0 0 0; color: #996600; text-align: center"
                                "><a href="/downloads/Bachkantaten 2023-24_Flyer.pdf" target="_blank">Das
                                    Programm herunterladen</a></p>
                                <p></p>
                                <p style="margin-top: 0;" class="klappinfo_open klappinfo_right"><a href="#"
                                                                                                    class="klappinfo_open"
                                                                                                    data-id="addinfo_themenwoche"
                                                                                                    style="color: #996600;">▽
                                        Mehr Informationen zum Kantatenzyklus</a></p>
                                <div class="klappinfo" data-id="addinfo_themenwoche" style="display: none;">
                                    <p style="margin:10px 0 0 0; color: #996600; text-align: justify">
                                        <b>Soli Deo Gloria - mit Bach-Kantaten durch das Kirchenjahr</b><br>
<i>„Und als sich die Stimme der Trompeten, Zimbeln und Saitenspiele erhob und man den HERRN
lobte: »Er ist gütig, und seine Barmherzigkeit währt ewig«, da wurde das Haus erfüllt mit einer
Wolke als das Haus des HERRN.“</i> <sub>(2 Chr 5,13)</sub><br>
In der Bibel, in der J.S. Bach während seiner Leipziger Schaffenszeit las und arbeitete, findet sich
neben diesem Vers eine Randnotiz des Komponisten: „Bey einer andächtigen Musique ist allezeit
Gott mit seiner Gnadengegenwart.“<br>
Bachs Kantaten sind heute aus dem Schatz geistlicher Musik nicht mehr wegzudenken – das war zu
seinen Lebzeiten anders. Strömungen des Protestantismus standen der Kirchenmusik
grundsätzlich skeptisch gegenüber – sie lenke vom Wort ab und führe zu emotionalem Aufruhr,
Bachs Kantaten wurden als zu „luxuriös“ und „sinnlich“ abgelehnt.<br>
Zu seinem Glück gab es lutherische Förderer, die verstanden, dass Musik und Glaube sich nicht
widersprechen - im Gegenteil: Was sich in Worten nur nacheinander ausdrücken lässt, erklingt in
Bachs Musik gleichzeitig, widerstreitende Gefühle in ein- und demselben Augenblick. Es vereinen
sich geistliche und weltliche Dimension, lebhafter Ausdruck und strenge Ordnung, kosmische
Weite und Präzision im Detail. Bach ist in der Tradition verwurzelt und experimentiert zugleich mit
neuen musikalischen Formen. Was Generationen von Theolog*innen in Reflexion und Predigt zu
verkündigen und zu ergründen versuchten, scheint der Musik von Johann Sebastian Bach jenseits
der Worte zu gelingen. Bis in die Gegenwart erreichen seine Klänge nicht zuletzt auch Menschen,
die sich schon lange vom Christentum verabschiedet haben.<br>
Ich freue mich darauf, dass diese wunderbare Musik in den kommenden Monaten nicht nur in
Konzerten, sondern auch an ihrem ursprünglichen Ort, dem Gottesdienst, zum Klingen kommen
wird und wir den musikalischen Bibelauslegungen Bachs durch das Kirchenjahr folgen werden.
Möge es so sein, dass unser Haus von der Gegenwart Gottes erfüllt wird und seine Barmherzigkeit
für viele Menschen in Musik und Wort erfahrbar wird.<br>
          <i>Pastorin Maren Schmidt</i><br>
<br>                                                                                                     
<b>Johann Sebastian Bach</b> stellte sich am Sonntag Estomihi, 7. Februar 1723, mit den Kantaten BWV
22 (Jesus nahm zu sich die Zwölfe) und BWV 23 (Du wahrer Gott und Davids Sohn) in Leipzig als
Kantor vor und wurde am 22. April 1723 durch den Rat der Stadt Leipzig zum neuen Thomaskantor
gewählt, ein Amt, das er bis zu seinem Tod 1750 27 Jahre lang innehatte. Am 30. Mai 1723, dem 1.
Sonntag nach Trinitatis, trat er sein neues Amt an. In den darauffolgenden fünf Jahren
komponierte Bach für alle Sonn- und Feiertage in fünf Kantatenjahrgängen den Großteil seiner
erhaltenen Kantaten, alleine 1723-24 39 und 1724-25 56 neue Kantaten – eine geradezu
unglaubliche Arbeitsleistung.<br>
Dieses Jubiläum nehmen wir in der Citykirche St. Nikolai zum Anlass, mit sechs Kantaten Bachs
musikalisch durchs Kirchenjahr zu gehen: am 1. Advent, dem Beginn des Kirchenjahres, am 2.
Weihnachtstag, am Sonntag Estomihi, dem letzten Sonntag vor der Passionszeit mit
„Figuralmusik“, am 2. Ostertag, am Pfingstsonntag und am Abend des Ewigkeitssonntages als
Abschluss des Kirchenjahres.<br>
Drei Kantaten wollen wir jeweils zusätzlich am Vorabend der Aufführung im Gottesdienst in einem
Gesprächskonzert Ihnen theologisch und musikalisch näherbringen: Pastorin Maren Schmidt wird
Sie in die Theologie der Kantatentexte und des Sonntag, ich Sie in die Musik Johann Sebastian
Bachs mit Klangbeispielen durch Chor und Barockorchester einführen. Anschließend wird die
Kantate konzertant aufgeführt. Im Anschluss daran bitten wir ins Südschiff der Kirche zu Wein und
Gebäck.<br>
Alle sechs Kantaten werden im Gottesdienst aufgeführt, dem eigentlichen Ort, für den sie
geschaffen wurden – Liturgie und Predigt werden auf die jeweilige Kantate abgestimmt sein.
Zusammen mit den Mitgliedern des SanktNikolaiChores werden Vokalsolistinnen und -Solisten
sowie das Barockorchester Ensemble 158 unter meiner Leitung die Kantaten für Sie musizieren.
Ich danke dem Förderkreis des SanktNikolaiChores e.V. für die großzügige Unterstützung dieses
Kantatenzyklus‘.<br>
<i>Ihr KMD Volkmar Zehner</i>
                                    </p>
                                </div>

                            </div>
                        	
		<?php elseif( $titelbild[0] != '/img/KKAH_StNikolai_Fundraising_Webbanner.jpg' ):?>
		<div class="<?php echo ($titelbild[1])?'zoomable':''; ?>">
			<img class="r" src="<?php echo $titelbild[0]; ?>"<?php echo (isset($titelbild[2]))?' alt="'.$titelbild[2].'"':''; ?>>
		</div>
		
		<?php else: ?>
		<div>
			<a href="/downloads/KKAH_StNikolai_Fundraising_FLYER_WEB-1.pdf">
				<img class="r" src="<?php echo $titelbild[0]; ?>" alt="Retten Sie Kiels ältesten Kunstschatz">
			</a>
		</div>
		<?php endif; ?>
	</div>
<?php endif ?>

    <div id="main">
        <?php echo Markdown($main) ?>
    </div>
    
    <nav id="nav"<?php echo (@$sanktnikolaichor)?' class="sanktnikolaichor"':''; ?>>
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
                <a href="/newsletter">Newsletter</a>
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
        <!--<li class="top<?php ecco(@$corona, ' selected') ?>">
			<a href="/musik-und-wort-in-zeiten-von-corona">Musik und Wort in Zeiten von Corona</a>
			
			<ul class="sub">
				<li class="<?php ecco(@$coronaMWOstern, ' selected') ?>">
					<a href="/musik-und-wort-in-zeiten-von-corona/musik-und-wort-zur-passion-und-ostern">Musik und Wort zur Passion und Ostern</a>
				</li>

				<li class="<?php ecco(@$coronaJohannespassion, ' selected') ?>">
					<a href="/musik-und-wort-in-zeiten-von-corona/musik-und-wort-zu-advent-und-weihnachten">Musik und Wort zu Advent und Weihnachten</a>
				</li>
				<li class="<?php ecco(@$coronaAdvent, ' selected') ?>">
					<a href="/musik-und-wort-in-zeiten-von-corona/johannes-passion">Gottesdienstreihe zur Johannes-Passion von J.S. Bach</a>
				</li>	
				<li class="<?php ecco(@$coronaKuechentisch, ' selected') ?>">
					<a href="/musik-und-wort-in-zeiten-von-corona/gottesdienst-am-kuechentisch">Gottesdienst am Küchentisch </a>
				</li>
				<li class="<?php ecco(@$coronaHoffnungslaeuten, ' selected') ?>">
					<a href="/musik-und-wort-in-zeiten-von-corona/hoffnungslaeuten">Hoffnungsläuten</a>
				</li>
				<li class="<?php ecco(@$coronaOrgelwerke, ' selected') ?>">
					<a href="/musik-und-wort-in-zeiten-von-corona/orgelwerke">Orgelmusik aus St. Nikolai</a>
				</li>
				<li class="<?php ecco(@$coronaMorgenandachten, ' selected') ?>">
					<a href="/musik-und-wort-in-zeiten-von-corona/morgenandachten">Morgenandachten in der Karwoche</a>
				</li>
			</ul>
		</li>-->
         <li class="top<?php ecco(@$musik, ' selected') ?>">
            <a href="/musik">Musik</a>
            
            <ul class="sub">
				<li class="<?php ecco(@$konzerte, 'selected') ?>">
					<a href="/konzerte">Konzerte</a>
				</li>
				<li class="<?php ecco(@$halbestunde, 'selected') ?>">
					<a href="/halbestunde">DIE HALBE STUNDE</a>
				</li>
				<li class="<?php ecco(@$sanktnikolaichornav, 'selected') ?>">
					<a href="/sanktnikolaichor">SanktNikolaiChor</a>
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
        
        <li class="sanktnikolaichor<?php ecco(@$sanktnikolaichor, ' selected') ?>">
			<a href="/sanktnikolaichor">SanktNikolaiChor</a>
            
            <ul class="sub">
            	<li class="ueb">SanktNikolaiChor</li>
            	<li class="<?php ecco(@$chor_derchor, 'selected') ?>">
					<a href="/sanktnikolaichor">Der Chor</a>
				</li>
				<li class="<?php ecco(@$chor_chorleiter, 'selected') ?>">
					<a href="/sanktnikolaichor/chorleiter">Chorleiter</a>
				</li>
				<li class="<?php ecco(@$chor_aktuelles, 'selected') ?>">
					<a href="/sanktnikolaichor/aktuelles">Aktuelles</a>
				</li>
			
				 <li class="<?php ecco(@$chor_hoerproben, 'selected') ?>">
					<a href="/sanktnikolaichor/hoerproben">Hörproben</a>
				</li>
				<li class="<?php ecco(@$chor_presse, 'selected') ?>">
					<a href="/sanktnikolaichor/presse">Presse</a>
				</li>
				<li class="<?php ecco(@$chor_archiv, 'selected') ?>">
					<a href="/sanktnikolaichor/archiv">Archiv</a>
				</li>
				<li class="<?php ecco(@$foerderkreis, 'selected') ?>">
					<a href="/sanktnikolaichor/foerderkreis">Förderkreis</a>
				</li>
            </ul>
        </li>
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
		
		<li class="top<?php ecco(@$spendenaufruf, ' selected') ?>">
            <a href="/spendenaufruf">Spendenaufruf</a>
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
		
		<li class="top<?php ecco(@$datenschutz, ' selected') ?>">
            <a href="/datenschutz">Datenschutz</a>
        </li>
        
        <li class="top<?php ecco(@$impressum, ' selected') ?>">
            <a href="/impressum">Impressum</a>
        </li>
        </ul>
        <!--
        <p class="menuinfobuttonp"><a class="menuinfobutton<?php ecco(@$kirchenwahl, ' menuinfoselected') ?>" href="/ergebnis-der-kirchengemeinderatswahl-2016">Ergebnis der<br>Kirchengemeinderatswahl 2016</a></p>
        -->
        <p class="menubuttonp"><a class="menubutton veranstbutton<?php ecco(@$veranstaltungen, ' veranstselected') ?>" href="/veranstaltungen">Veranstaltungen</a></p>
		<p class="menubuttonp"><a class="menubutton ticketbutton" href="https://st-nikolai-kiel.reservix.de/events" target="_blank">Konzertkarten</a></p>        
        <p class="menubuttonp"><a class="menubutton webcambutton<?php ecco(@$webcam, ' webcamselected') ?>" href="/webcam">Live Webcams</a></p>
        
        <p id="presentation"><a href="?color=<?php echo ($presentation['color']+1) % 3 ?>">Kontrast ändern</a><br>
            Größe: <a href="?size=0">100%</a><span class="wide"><br></span>
            <a href="?size=1">125%</a><span class="wide"><br></span>
            <a href="?size=2">150%</a><span class="wide"><br></span>
            <a href="?size=3">200%</a></p>
            
        <!--<div class="wrap">
        <div id="google_translate_element"></div>
        </div>-->
        </div>
    </nav>
    
    
            
    
</div>
</div>
<?php $body = ob_get_clean();

require 'base.php';