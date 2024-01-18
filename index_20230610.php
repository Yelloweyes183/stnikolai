<?php

require_once 'setup.php';

$aktuell = true;
$home = true;

$show_kalender= true;

//$titelbild= array('/img/KKAH_StNikolai_Fundraising_Webbanner.jpg', true);
$titelbild= array('/img/Bild_Altar_Spendenaufruf.jpg', true);

ob_start() ?>

<h3 style="margin-top: 0;">Jede Spende hilft. Helfen auch Sie.</h3>
Werden Sie Pate und Patin für unseren Altar. <a href="/doc/Informationen Patenschaft Altar St. Nikolai.pdf" target="_blank">Informationen zur Patenschaft finden Sie hier</a>.

<h3 style="margin-top: 0;">Es hat begonnen…</h3>  In St. Nikolai wird gebaut.
<a href="/doc/AuslageBauInfos._März23_A5.pdf" target="_blank">Aktuelle Informationen zu den Restaurierungs- und Bauarbeiten finden Sie hier</a>.

# Herzlich Willkommen
    <?php if (time()>1680938924):?>
        <p>
            auf der Internetseite der Offenen Kirche St. Nikolai zu Kiel.<br>
            Die Kirche ist für Sie täglich von 10.00 bis 16.00 Uhr geöffnet.
            <hr>
        </p>
    <?php endif; ?>


    <?php if (time()<1619387941):?>
        <p style="font-size: 1.8em; font-weight: bold; margin:10px 0 0 0; color: red; text-align: center">
            <stong>Wichtiger Hinweis:</stong><br>
            Der Gottesdienst am Sonntag, 25.04.2021 um 10:00 Uhr
            muss wegen einer Bombenentschärfung leider ausfallen!<br>
            Die Kirche wird an diesem Tag nicht geöffnet werden können.</p>
    <?php endif; ?>


<div style="width: 500px; background-color: #f2f0f0; border: 4px solid lightgrey; padding: 10px;">
    <h2>Bauarbeiten/Construction work in St. Nikolai</h2><br>
    <p> 
        Aufgrund umfangreicher Bauarbeiten bleibt die St. Nikolai Kirche<br>
        <p style="color: darkred; font-weight: bold;">vom 11. April – voraussichtlich 30. Oktober 2023 </p style>leider geschlossen.<br>
        <p style="color: darkgrey; font-style: inherit;">Due to extensive construction work, the St. Nikolai Church will unfortunately be closed from April 11<sup>th</sup> to October 30<sup>th</sup> 2023.</p style>
      
        <hr>
        Wir bleiben für Sie da!<br> <a href="/doc/Infromationen zur Schließzeit St. Nikolai.pdf" target="_blank">Informationen zum Gemeindeleben in dieser Zeit finden Sie hier</a>.<br>
        <br>
        Gern halten wir Sie auch per Mail über Gottesdienste und Veranstaltungen an anderen Orten auf dem Laufenden. <a href="/doc/2023_DatenschutzerklärungMailadressen.pdf" target="_blank">Die erforderliche Datenschutzerklärung finden Sie hier</a>.
    </p>
</div>


<!-- # Kirchengemeinderatswahl
Am ersten Advent wurde in St. Nikolai gewählt.<br>
Die Mitglieder des neuen Kirchengemeinderates, der im Gottesdienst am 22. Januar 2023 in sein Amt eingeführt wird, finden Sie <a href="/downloads/Aushang_KGR-2023.pdf" target="_blank">in diesem Aushang</a>. -->


<!-- <hr>
# Tenöre für den Nikolai-Chor gesucht!

Der SanktNikolaiChor sucht noch Tenöre, die unseren Chor verstärken möchten. Wir freuen uns auf Sänger mit Chorerfahrung und Notenkenntnissen, die gerne auf hohem Niveau mit Freude Gottesdienste musikalisch mitgestalten und a cappella- bzw. orchesterbegleitete Geistliche Konzerte singen möchten. Auf Sie warten ein abwechslungsreiches und weites Repertoire, eine konzentriert-herzliche Probenatmosphäre und eine nette und engagierte Chorgemeinschaft. Chorfahrten ins In- und Ausland sind weitere Höhepunkte unserer Chorarbeit. Auf dem Programm für 2022/2023 stehen u.a. Chorreisen nach Dänemark mit englischer Chormusik sowie das Weihnachts-Oratorium und die Johannes-Passion von J.S. Bach wie auch das Requiem von Maurice Duruflé. -->


Herzlich Willkommen!

Proben: dienstags 19:30 - 22 Uhr<br>
in der Nikolai-Kirche, Alter Markt<br>
Nähere Informationen bei:<br>
KMD Volkmar Zehner<br>
Tel.: 0172 / 545 17 16<br>
<a href="mailto:zehner@st-nikolai-kiel.de">zehner@st-nikolai-kiel.de</a>
<hr>


<?php
	$events= $app->todayEvents();
?>

<?php if(sizeof($events) > 0): ?>
## Heute: <?php echo $app->days[date("w")].', '.date("d").'. '.$app->months[date("n")-1].' '.date("Y") ?>

<table id="veranstaltungen_today" class="veranstaltungen">
<?php
	$show_today= true;
	require 'elements/veranstaltungen_db.php';
	$show_today= false;
?>
</table>

<?php endif ?>

## Kommende Veranstaltungen

<table id="veranstaltungen" class="veranstaltungen">

<?php $events= $app->indexEvents(); $hide_kw= true; require 'elements/veranstaltungen_db.php'; ?>

</table>

Alle weiteren Veranstaltungen finden Sie in unserem<br><a style="margin-top: 0.2em;" href="veranstaltungen">Veranstaltungskalender</a>.

<strong>Wir freuen uns auf Sie – seien Sie herzlich willkommen!</strong>

<hr>
## Kontakt
<strong>Pastorin Maren Schmidt</strong><br>
0151-74118358<br>
<a href="mailto:p.schmidt@st-nikolai-kiel.de">p.schmidt@st-nikolai-kiel.de</a>


<strong>Kirchenbüro der St. Nikolai Gemeinde</strong><br>
0431-95098<br>
<a href="mailto:gemeindebuero@st-nikolai-kiel.de">gemeindebuero@st-nikolai-kiel.de</a>

<strong>Nehmen Sie gerne Kontakt zu uns auf!</strong>


<?php $main = ob_get_clean();

require 'layouts/main.php';
