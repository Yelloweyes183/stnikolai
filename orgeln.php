<?php

require_once 'setup.php';

$raum = true;
$orgeln = true;
$slider= true;

$titelbild= array('/img/titelbild_orgel.jpg', false);

$ho_imgs= array(
	"Hauptorgel.jpg",
	"Große-Orgel-St.-Nikolai-Kiel_Detail-09.jpg",
	"Große-Orgel-St.-Nikolai-Kiel_Detail-15.jpg",
	"Große-Orgel-St.-Nikolai-Kiel_Detail-17.jpg",
	"Große-Orgel-St.-Nikolai-Kiel_Detail-01.jpg",
	"Große-Orgel-St.-Nikolai-Kiel_Detail-04.jpg",
	"Große-Orgel-St.-Nikolai-Kiel_Detail-05.jpg",
	"Große-Orgel-St.-Nikolai-Kiel_Detail-06.jpg",
	"Große-Orgel-St.-Nikolai-Kiel_Detail-08.jpg",
	"Große-Orgel-St.-Nikolai-Kiel_Detail-16.jpg",
);

$co_imgs= array(
	"chororgel.jpg",
	"Chororgel-St.-Nikolai-Kiel_Detail-11.jpg",
	"Chororgel-St.-Nikolai-Kiel_Detail-13.jpg",
	"Chororgel-St.-Nikolai-Kiel_Detail-02.jpg",
	"Chororgel-St.-Nikolai-Kiel_Detail-14.jpg",
	"Chororgel-St.-Nikolai-Kiel_Detail-04.jpg",
	"Chororgel-St.-Nikolai-Kiel_Detail-06.jpg",
	"Chororgel-St.-Nikolai-Kiel_Detail-09.jpg",
	"Chororgel-St.-Nikolai-Kiel_Detail-10.jpg",
);

$to_imgs= array(
	"Truhenorgel_01.jpg",
	"Truhenorgel_04.jpg"
);

$table_ho_disp97= array(
	array("Gedackt 16'", "Rohrflöte 8'", "Prinzipal 8'", "Untersatz 32'"),
	array("Prinzipal 8'", "Prinzipal 4'", "Salicional 8'", "Prinzipal 16'"),
	array("Gemshorn 8'", "Blockflöte 4'", "Schwebung 8'", "Subbaß 16'"),
	array("Oktave 4'", "Oktave 2'", "Holzgedackt 8'", "Oktave 8'"),
	array("Koppelflöte 4'", "Gemsquinte 1 1/3'", "Oktave 4'", "Gedackt 8'"),
	array("Oktave 2'", "Terzflöte 1 3/5'", "Spitzgambe 4'", "Oktave 4'"),
	array("Sesquialtera 2fach", "Scharff 4fach", "Rohrflöte 4'", "Flöte 4'"),
	array("Mixtur 5fach", "Krummhorn 8'", "Rohrnasat 2 2/3'", "Nachthorn 2'"),
	array("Zimbel 3fach", "Regal 4'", "Hohlflöte 2'", "Mixtur 5fach"),
	array("Trompete 8'", "Tremulant", "Oktave 1'", "Posaune 16'"),
	array("Sub I", "Sub II", "Obertöne 3fach", "Trompete 8'"),
	array("8'  ab", "8'  ab", "Rauschpfeife 2fach", "Trompete 4'"),
	array("II/I", "III/II", "Mixtur 3-5fach", "I/P"),
	array("III/I", "", "Dulcian 16'", "II/P"),
	array("Super II/I", "", "Oboe 8'", "III/P"),
	array("Super III/I", "", "Tremulant", "Super III/P"),
	array("Sub II/I", "", "Super III", ""),
	array("Sub III/I", "", "Sub III", ""),
	array("Sub P/I", "", "8'  ab", "")
);

$table_ho_disp= array(
	array("Unda maris 8'", "Rohrflöte 8'", "Prinzipal 8'", "Untersatz 32'"),
	array("Prinzipal 8'", "Prinzipal 4'", "Salizional 8'", "Prinzipal 16'"),
	array("Gemshorn 8'", "Blockflöte 4'", "Schwebung 8'", "Subbaß 16'"),
	array("Oktave 4'", "Oktave 2'", "Holzgedackt 8'", "Oktave 8'"),
	array("Koppelflöte 4'", "Gemsquinte 1 1/3'", "Oktave 4'", "Gedackt 8v"),
	array("Oktave 2'", "Terzflöte 1 3/5'", "Spitzgambe 4'", "Oktave 4'"),
	array("Sesquialtera 2fach", "Scharff 4fach", "Rohrflöte 4'", "Flöte 4'"),
	array("Mixtur 5fach", "Chamade 8'", "Rohrnasat 2 2/3'", "Nachthorn 2‘'"),
	array("Zimbel 3fach", "Krummhorn 8'", "Hohlflöte 2'", "Mixtur 5fach"),
	array("Cornet", "Regal 4'", "Oktave 1'", "Chamade 8'"),
	array("Chamade 8'", "Tremulant", "Obertöne 3fach", "Fagott 32'"),
	array("Trompete 8'", "Sub II", "Rauschpfeife 2fach", "Posaune 16'"),
	array("Sub I", "8'  ab", "Mixtur 3-5fach", "Trompete 8'"),
	array("8'  ab", "III/II", "Chamade 8'", "Trompete 4'"),
	array("II/I", "", "Dulcian 16v", "I/P"),
	array("III/I", "", "Oboe 8'", "II/P"),
	array("Super II/I", "", "Tremulant", "III/P"),
	array("Super III/I", "", "Super III", "Super III/P"),
	array("Sub II/I", "", "Sub III", ""),
	array("Sub III/I", "", "8'  ab", ""),
	array("Sub P/I", "", "", ""),
	array("Großpedal ab", "", "", ""),
	array("Kleinpedal ab", "", "", "")
);

$table_co_disp_hst= array(
	array("Bourdon 16'", "Cor de nuit 8'", "Soubasse 16'"),
	array("Montre 8'", "Salicional 8'", "Basse 8'"),
	array("Bourdon 8'", "Voix céleste", "Basse 4'"),
	array("Prestant 4'", "Flûte octaviante 4'", "Tir G.O."),
	array("Doublette 2'", "Octavin 2'", "Tir REC."),
	array("Plein-Jeu 4rgs", "Trompette 8'", ""),
	array("G.O./I", "Basson Hautbois 8'", ""),
	array("G.O./II", "Voix humaine 8'", ""),
	array("G.O./III", "Tremolo", ""),
	array("", "Appel d’anches", ""),
	array("", "REC./I", ""),
	array("", "REC. en 16' /I", ""),
	array("", "REC./II", ""),
	array("", "REC. en 16' /II", ""),
	array("", "REC./III", ""),
	array("", "REC. en 16' /III", "")
);

$table_co_disp= array(
	array("Bourdon 16'", "Cor de nuit 8'", "Soubasse 16'"),
	array("Montre 8'", "Salicional 8'", "Basse 8'"),
	array("Bourdon 8'", "Voix céleste", "Basse 4'"),
	array("Préstant 4'", "Flûte octaviante 4'", ""),
	array("Doublette 2'", "Octavin 2'", "Tirasse G.O."),
	array("Plein-Jeu 4rgs", "Trompette harm. 8'", "Tirasse Récit"),
	array("", "Basson Hautbois 8'", "Appel d‘anches"),
	array("Accoupl. Récit", "Voix humaine 8'", ""),
	array("Accoupl. Récit 16'", "", ""),
	array("Tremolo", "Octaves graves Récit", "")
);

ob_start() ?>

# Orgeln

<hr>

Die __Hauptorgel__ stammt aus der Orgelbauwerkstatt Detlef Kleuker, Brackwede, und wurde 1965 in St. Nikolai errichtet.

Die __Chororgel__ wurde um 1920 von der bedeutenden französischen Orgelbaufirma Mutin Cavaillé-Coll, Paris, gebaut und im November 2003 an der Ostwand des Südschiffes aufgestellt.

Die Orgelbaufirma Ulrich Babel, Gettorf, erneuerte die Hauptorgel 1997 grundlegend. Aus derselben Werkstatt stammt die __Truhenorgel__, die in Konzerten und im Rahmen unserer langjährigen Veranstaltungsreihe „Die Halbe Stunde“ als Continuoinstrument zum Einsatz kommt. 

<hr>

## Hauptorgel

<div class="orgelslider">
<ul class="bxslider">
	<?php foreach($ho_imgs as $img): ?>
	<li><a href="/img/orgeln/hauptorgel/<?php echo $img ?>" data-lightbox="slider" data-title="Hauptorgel"><img class="r" src="/img/orgeln/thumb/hauptorgel/<?php echo $img ?>" /></a></li>
	<?php endforeach ?>
</ul>
<p style="text-align: center"><i>(Zum Vergrößern Foto anklicken)</i></p>
</div>

Im Jahre 1965 wurde durch die Orgelbauwerkstatt Detlef Kleuker, Brackwede, die heutige Orgel mit drei Manualen und Pedal mit zunächst 45 Registern (Hauptwerk, Schwellwerk, Rückpositiv, Pedal) in den Kirchraum gebaut. Ihre Charakteristika waren Schleifladen, Normalkoppeln, eine mechanische Tontraktur, eine elektrische Registertraktur, elektrische Koppeln und 4 freie Kombinationen.

Abnutzung und Verschleiß führten im Laufe der Jahre zu immer größeren Problemen. Die Mechanik wurde immer schwergängiger, weshalb der Organist einen immer größeren Tastendruck ausüben musste. Die Spannung, mit der die elektrische Anlage betrieben wurde, war zu hoch und nicht mehr zulässig. Es bestand Brandgefahr. Die Tastenbeläge lösten sich, die Registerwippen brachen ab. Die großen Prospektpfeifen sackten in den Füßen ein und drohten, in das Kirchenschiff zu stürzen.

<p style="margin-top: 0;" class="klappinfo_open klappinfo_right"><a href="#" class="klappinfo_open" data-id="addinfo_hauptorgel">&#9661; Mehr Informationen zur Hauptorgel</a></p>

<div class="klappinfo" data-id="addinfo_hauptorgel">

<p>Aufgrund der aufgetretenen Mängel beschloss der Kirchenvorstand von St. Nikolai   einen umfangreichen Umbau des Instruments mit Generalüberholung.</p>

<p>Folgende Arbeiten wurden zwischen Pfingsten 1996 und Ostern 1997 von der Orgelbaufirma Babel, Gettorf, vorgenommen: Die Orgel wurde bis auf das Gehäuse und das eiserne Ständerwerk (das Skelett der Orgel) ausgebaut. Die Windladen wurden zerlegt und gereinigt und Elektromagnete wurden eingebaut. Alle Pfeifen wurden gereinigt und überarbeitet. Die Prospektpfeifen erhielten neue Füße mit Innenfüßen und Halterungen zur Gewichtsentlastung. Die Prospektpfeifen von Hauptwerk und Pedal wurden mit Silberbronze lackiert. Der akustische Untersatz 32' wurde in der tiefen Oktave voll ausgebaut. Die größten sechs der bis zu fünf Meter langen neuen Pfeifen stehen links und rechts neben dem Gehäuse. Durch die Trennung des Prinzipalpiffaro 8'+4' hatte die Orgel dann 46 Register. Dazu benötigte man eine neue Schleife und eine zusätzliche Windlade für die Zungen im Schwellwerk. Der Dulzian 16' und das Krummhorn 8' erhielten aus klanglichen Gründen neu mensurierte Becher. Das Gebläse, das jetzt nur noch Hauptwerk und Pedal mit Wind versorgt, wurde mit einem zusätzlichen Balg unter dem Chorpodest der Orgelempore neu eingebaut. Der Kanal zur Orgel wurde unter den Fußbodendielen verlegt. Wegen der neuen zusätzlichen Koppeln wurde ein zweites Gebläse mit einem Balg für Schwellwerk und Rückpositiv nötig. Der Winddruck wurde für alle Werke erhöht.</p>

<p>Die Orgel ist seit dem Umbau innen sehr gut zugänglich, sodass Stimmungen und Wartungsaufgaben nun wesentlich einfacher durchgeführt werden können. Die Orgel erhielt eine elektrische Tontraktur und auch eine elektrische Registertraktur. Ein elektronischer Setzer und ein MIDI-Anschluss wurden eingebaut. Eine Besonderheit ist, dass der neue Spieltisch zerlegbar und transportabel ist. Die Übertragung der elektrischen Signale erfolgt per Lichtwellenleiter. In der Kirche sind mehrere Anschlussstellen vorhanden, somit kann die Orgel nun von fast allen Stellen innerhalb der Kirche gespielt werden. Der Generalspieltisch war auch für den Anschluss der 1965 von der Firma Führer, Wilhelmshaven, erbauten Chororgel mit 11 Registern auf zwei Manualen und Pedal vorbereitet.</p>

<p>Eddy Ottes (Barcelona) hatte die Orgel neu intoniert. Sie ist gleichschwebend temperiert gestimmt (a' 440 Hz bei 18°C).</p>

<p>Nach diesem Umbau hatte die Orgel 3288 Pfeifen. Der tiefste Ton mit 16,35 Hz ist »C« (das große C) im Register »Untersatz 32'«, der höchste Ton mit 12,54 kHz ist »g'''« (das dreigestrichene g) im Register »Oktave 1'«.</p>

<p>Die Disposition lautete 1997:</p>

<table class="orgeltable">
	<tr>
		<th>Hauptwerk</th>
		<th>Rückpositiv</th>
		<th>Schwellwerk</th>
		<th>Pedal</th>
	</tr>
	<?php foreach($table_ho_disp97 as $td): ?>
	<tr>
		<td><?php echo $td[0]; ?></td>
		<td><?php echo $td[1]; ?></td>
		<td><?php echo $td[2]; ?></td>
		<td><?php echo $td[3]; ?></td>
	</tr>
	<?php endforeach ?>
</table>

<p>Nach dem Einbau der Chororgel 2003 wurden Eingriffe in den Bestand der Hauptorgel notwendig:</p>

<p>Der Spieltisch erhielt eine neue Registratur. Zusätzlich wurde eine Chamade 8' (Horizontalzungenregister) für die Manuale und ein Fagott 32' im Pedal eingebaut. Dazu wurden neue Windladen im Großpedal nötig. Das zu enge Gedackt 16', das ursprünglich eine Quintade 16' war, wurde reversibel in eine Prinzipalschwebung umintoniert. Außerdem erhielt die Orgel einen Zimbelstern.</p>

<p>2010 wurde die Disposition um ein Cornet erweitert, so dass die Hauptorgel nun 52 Register auf 3 Manualen und Pedal besitzt. Insgesamt stehen nun 3500 Pfeifen in dem Instrument. Die gesamte Orgel wurde konserviert und nachintoniert.</p>

<p>Die heutige Disposition lautet:</p>

<table class="orgeltable">
	<tr>
		<th>Hauptwerk</th>
		<th>Rückpositiv</th>
		<th>Schwellwerk</th>
		<th>Pedal</th>
	</tr>
	<?php foreach($table_ho_disp as $td): ?>
	<tr>
		<td><?php echo $td[0]; ?></td>
		<td><?php echo $td[1]; ?></td>
		<td><?php echo $td[2]; ?></td>
		<td><?php echo $td[3]; ?></td>
	</tr>
	<?php endforeach ?>
	<tr>
		<td class="centered" colspan="4">Zimbelstern</td>
	</tr>
</table>

<p>Disposition der Chororgel am Hauptspieltisch:</p>

<table class="orgeltable">
	<tr>
		<th>Grand-Orgue</th>
		<th>Récit</th>
		<th>Pédale</th>
	</tr>
	<?php foreach($table_co_disp_hst as $td): ?>
	<tr>
		<td><?php echo $td[0]; ?></td>
		<td><?php echo $td[1]; ?></td>
		<td><?php echo $td[2]; ?></td>
	</tr>
	<?php endforeach ?>
</table>

</div>

<hr>

## Chororgel

<div class="orgelslider">
<ul class="bxslider">
	<?php foreach($co_imgs as $img): ?>
	<li><a href="/img/orgeln/chororgel/<?php echo $img ?>" data-lightbox="slider" data-title="Chororgel"><img class="r" src="/img/orgeln/thumb/chororgel/<?php echo $img ?>" /></a></li>
	<?php endforeach ?>
</ul>
<p style="text-align: center"><i>(Zum Vergrößern Foto anklicken)</i></p>
</div>

Diese Orgel stammt aus einer 1995 entwidmeten und zur Lagerhalle umgebauten Kirche der Stadt Tourcoing im Norden Frankreichs. Sie ist das größte Instrument aus der Werkstatt Mutin Cavaillé-Coll auf deutschem Boden. Aristide Cavaillé-Coll war weltweit einer der bedeutendsten Orgelbauer. Die meisten seiner großen Instrumente in den Kathedralen Frankreichs sind erhalten und stehen fast alle unter Denkmalschutz. Charles Mutin war der Compagnon von Cavaillé-Coll und führte dessen Firma bis zu ihrer Auflösung in den 1930iger Jahren ganz im Sinne ihres Gründers weiter.

Die Chororgel der St.-Nikolai-Kirche ist ein repräsentatives Beispiel für die Orgelbaukunst Frankreichs im 19.Jahrhundert. Sie besitzt einen vollständig erhaltenen, mechanischen, „seitenspieligen“ Spielschrank. Außerdem ist sie zusätzlich mit dem Spieltisch der Hauptorgel elektrisch verbunden. Dadurch können beide Orgeln gleichzeitig vom Spieltisch der Hauptorgel aus gespielt werden. Die Vorrichtungen der elektrischen Doppeltraktur sind im denkmalpflegerischen Sinn eingebaut. Sie können mit wenigen Handgriffen wieder entfernt werden.

<p style="margin-top: 0;" class="klappinfo_open klappinfo_right"><a href="#" class="klappinfo_open" data-id="addinfo_chororgel">&#9661; Mehr Informationen zur Chororgel</a></p>

<div class="klappinfo" data-id="addinfo_chororgel">

<p>Die Orgelmanufaktur Kern, Straßburg, erwarb 1995 das Instrument. Auf einer Orgelreise ins Elsass entdeckte der damalige Kirchenmusiker von St. Nikolai, KMD Prof. Rainer-Michael Munz, das Instrument und setzte alles daran, dass es nach Kiel kommt. Nach dem Beschluss des Kirchenvorstandes, das Instrument als Chororgel für St. Nikolai zu erwerben, wurde es restauriert, im November 2003 in der Kirche aufgestellt und festlich eingeweiht.</p>

<p>Die Chororgel erweitert die musikalischen Möglichkeiten in St. Nikolai in vielerlei Hinsicht:</p>
<ul>
	<li>Sie dient als „Fernwerk“ der Hauptorgel.</li>
	<li>Sie begleitet den SanktNikolaiChor in Gottesdiensten und Konzerten.</li>
	<li>Sie ermöglicht im Zusammenspiel mit der Hauptorgel einen „surround“-Klang für die Zuhörer.</li>
	<li>Sie bietet authentische Klangfarben zur Interpretation v.a. französischer, aber auch englischer und deutscher Musik der Romantik und Klassischen Moderne.</li>
	<li>Sie ist ein hervorragend geeignetes Instrument für die Orgelkammermusik ab Mitte des 19. Jahrhunderts.</li>
</ul>

<p>Die Chororgel hat 17 Register mit insgesamt 940 Pfeifen, verteilt auf zwei Manuale und Pedale.</p>

<p>Die Disposition der Chororgel lautet:</p>

<table class="orgeltable">
	<tr>
		<th>I Grand-Orgue</th>
		<th>II Récit</th>
		<th>Pédale</th>
	</tr>
	<?php foreach($table_co_disp as $td): ?>
	<tr>
		<td><?php echo $td[0]; ?></td>
		<td><?php echo $td[1]; ?></td>
		<td><?php echo $td[2]; ?></td>
	</tr>
	<?php endforeach ?>
</table>

</div>

<hr>

## Truhenorgel

<div class="orgelslider">
<ul class="bxslider">
	<?php foreach($to_imgs as $img): ?>
	<li><a href="/img/orgeln/truhenorgel/<?php echo $img ?>" data-lightbox="slider" data-title="Truhenorgel"><img class="r" src="/img/orgeln/thumb/truhenorgel/<?php echo $img ?>" /></a></li>
	<?php endforeach ?>
</ul>
<p style="text-align: center"><i>(Zum Vergrößern Foto anklicken)</i></p>
</div>

Die Truhenorgel wurde speziell für die Anforderungen an St. Nikolai konstruiert und gefertigt: Sie besitzt einen tragfähigen Klang, ist um einen Halbton tiefer oder höher transponierbar, der Kammerton ist variabel bis 430 Hertz und es besteht die Möglichkeit, verschiedenste Temperaturen zu legen. Sie hat zwei Register (Gedackt 8' und Rohrflöte 4'), einen Tonumfang von C bis f‘‘‘ und ist in einer leichten Bauweise konstruiert.

Im Jahr 2002 wurde dieses Instrument aus der Gettorfer Orgelbauwerkstatt Babel vom Orgelbauverein St. Nikolai e.V. der Kirchengemeinde übergeben.


<?php $main = ob_get_clean();

require 'layouts/main.php';

