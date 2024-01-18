<?php

require_once 'setup.php';

$aktuell = true;
$home = true;

$show_kalender= true;

//$titelbild= array('/img/KKAH_StNikolai_Fundraising_Webbanner.jpg', true);
//$titelbild= array('/img/Bild_Altar_Spendenaufruf.jpg', true);

$titelbild= array('index_teaser', false);

ob_start() ?>


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


<!--<h3 style="margin-top: 0;">Es hat begonnen…</h3>  In St. Nikolai wird gebaut.
<a href="/doc/AuslageBauInfos._März23_A5.pdf" target="_blank">Aktuelle Informationen zu den Restaurierungs- und Bauarbeiten finden Sie hier</a>.


 <div style="width: 500px; background-color: #f2f0f0; border: 4px solid lightgrey; padding: 10px;">
    <h2>Bauarbeiten/Construction work in St. Nikolai</h2><br>
    <p> 
        Aufgrund umfangreicher Bauarbeiten bleibt die St. Nikolai Kirche<br>
        <p style="color: darkred; font-weight: bold;">vom 11. April – voraussichtlich 30. Oktober 2023 </p style>leider geschlossen.<br>
        <p style="color: darkgrey; font-style: inherit;">Due to extensive construction work, the St. Nikolai Church will unfortunately be closed from April 11<sup>th</sup> to October 30<sup>th</sup> 2023.</p style>

    <audio controls="" preload="metadata" style="margin-top: -10px; margin-bottom: 0;width: 100%">
        <source src="/downloads/Sanierung Nikolaikirche Kiel.mp3" type="audio/mp3">
        Ihr Browser unterstützt leider kein HTML5-Audio.
    </audio>
<em>„ Ein Beitrag von Andrea Ring in der Sendung <strong>"Moin! Schleswig-Holstein - Von Binnenland und Waterkant“</strong> auf NDR 1 Welle Nord“</
    <br>
    <br>
        <hr>
        Wir bleiben für Sie da!<br> <a href="/doc/Informationen zur Schließzeit St. Nikolai.pdf" target="_blank">Informationen zum Gemeindeleben in dieser Zeit finden Sie hier</a>.<br>
        <br>
        Gern halten wir Sie auch per Mail über Gottesdienste und Veranstaltungen an anderen Orten auf dem Laufenden. <a href="/doc/2023_DatenschutzerklärungMailadressen.pdf" target="_blank">Die erforderliche Datenschutzerklärung finden Sie hier</a>.
    </p>
</div> -->


<!-- <div style="background-color: #fff7e6; padding-top: 12px; padding-bottom: 12px; padding-left: 24px; padding-right: 24px; border-radius: 6px; margin-right: 20px; margin-bottom: 12px; display: table;">

    <p style="font-size: 1.8em; font-weight: bold; margin:10px 0 0 0; color: #996600; text-align: center">
        Offene Kirche St. Nikolai öffnet wieder ganz!<br>
        zum Reformationstag 2023

        <img src="/img/Reformationstag-pic.png" style="max-width: 600px"> 

        <p style="text-transform: uppercase; font-size: 1.8em; margin:10px 0 0 0; color: #996600; text-align: center; font-size: 1.8em; ">
                Reformationstag<br>
                31.Oktober 2023<br><br>

         </p>

         <p style="text-transform: uppercase; font-size: 1.4em; margin:10px 0 0 0; color: #996600; text-align: center">
                Festgottesdienst 10.00 Uhr<br></p>

        <p style="margin:10px 0 0 0; color: #996600; text-align: center">
            Pröpstin Almut Witt, Pastorinnen Maren Schmidt und Charlotte Hartwig<br>
            Kieler Blechbläserensemble, Leitung Frank Hennig, <br>
            Sankt Nikolai Chor, Leitung Volkmar Zehner <br><br><br>
        </p>

         <p style="text-transform: uppercase; font-size: 1.4em; margin:10px 0 0 0; color: #996600; text-align: center">
                Orgelkonzert 18.00 Uhr<br>
        </p>

        <p style="margin:10px 0 0 0; color: #996600; text-align: center">
        J. S. BACH: Das Gesamtwerk  <br>
        Konzert 18: Acht kleine Präludien und Fugen, weitere Incerta, <br>
        Volkmar Zehner an der Orgel 
        </p>
    </p>
</div>-->



<div>
			<a href="/downloads/KKAH_StNikolai_Fundraising_FLYER_WEB-1.pdf">
				<img class="r" src="/img/KKAH_StNikolai_Fundraising_Webbanner.jpg" alt="Retten Sie Kiels ältesten Kunstschatz">
			</a>
		</div>
<audio controls="" preload="metadata" style="margin-top: -10px; margin-bottom: 0;width: 100%">
	<source src="/downloads/Beitrag_Altar_St_Nikolai_Michael_Frömter_18_12_2022.mp3" type="audio/mp3">
    Ihr Browser unterstützt leider kein HTML5-Audio.
</audio>
<br>
<em>Ein Beitrag von Michael Frömter vom 18.12.2022, "Gesegneten Sonntag" der Radiokirche im NDR</em>


<h3 style="margin-top: 0;">Jede Spende hilft. Helfen auch Sie.</h3>
Werden Sie Pate und Patin für unseren Altar. <a href="/doc/Informationen Patenschaft Altar St. Nikolai.pdf" target="_blank">Informationen zur Patenschaft finden Sie hier</a>.
<hr>

<!-- # Kirchengemeinderatswahl
Am ersten Advent wurde in St. Nikolai gewählt.<br>
Die Mitglieder des neuen Kirchengemeinderates, der im Gottesdienst am 22. Januar 2023 in sein Amt eingeführt wird, finden Sie <a href="/downloads/Aushang_KGR-2023.pdf" target="_blank">in diesem Aushang</a>. -->


<!-- <hr>
# Tenöre für den Nikolai-Chor gesucht!

Der SanktNikolaiChor sucht noch Tenöre, die unseren Chor verstärken möchten. Wir freuen uns auf Sänger mit Chorerfahrung und Notenkenntnissen, die gerne auf hohem Niveau mit Freude Gottesdienste musikalisch mitgestalten und a cappella- bzw. orchesterbegleitete Geistliche Konzerte singen möchten. Auf Sie warten ein abwechslungsreiches und weites Repertoire, eine konzentriert-herzliche Probenatmosphäre und eine nette und engagierte Chorgemeinschaft. Chorfahrten ins In- und Ausland sind weitere Höhepunkte unserer Chorarbeit. Auf dem Programm für 2022/2023 stehen u.a. Chorreisen nach Dänemark mit englischer Chormusik sowie das Weihnachts-Oratorium und die Johannes-Passion von J.S. Bach wie auch das Requiem von Maurice Duruflé.
<hr>
-->


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
Tel.: 0151 - 74 11 83 58<br>
<a href="mailto:schmidt.nikolai@altholstein.de">schmidt.nikolai@altholstein.de</a>

<strong>Pastorin Dr. Charlotte Hartwig</strong><br>
Tel.: 0176 – 10 41 41 29<br>
<a href="mailto:p.hartwig@st-nikolai-kiel.de">p.hartwig@st-nikolai-kiel.de</a>


<strong>Kirchenbüro der St. Nikolai Gemeinde</strong><br>
Tel.: 0431 - 9 50 98<br>
<a href="mailto:gemeindebuero@st-nikolai-kiel.de">gemeindebuero@st-nikolai-kiel.de</a>

<strong>Nehmen Sie gerne Kontakt zu uns auf!</strong>


<?php $main = ob_get_clean();

require 'layouts/main.php';
