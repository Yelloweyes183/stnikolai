<?php

require_once 'setup.php';

$raum = true;
$architektur = true;

$titelbild= array('/img/_MG_0647_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>


# Architektur
<hr>
<div>
		<video controls="" poster="/img/nikolai_v2_-_youtube.jpg" preload="metadata" style="margin-top: 10px; width:100%">
    <source src="/downloads/Nikolaikirche-Kiel-Video-V1_43MB.mp4" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video.
  </video>
<p>

<strong>Video von St. Nikolai zu Kiel, erstellt von Thomas, Caspar und Ulrich Stephani (2022 / 23), z.T. mit Fotografien von Alexander Voss</strong><br>
<em>Musik: „Verleih uns Frieden gnädiglich“, gespielt vom Kieler Blechbläserensemble (Leitung: Frank Hennig) und „Fuga a 5 con pedale pro Organo pleno“ in Es, BWV 552, 2, Johann Sebastian Bach gespielt von KMD Volkmar Zehner an der Orgel
</em>
</p>
</div>

<hr>

<strong>St. Nikolai</strong> - nach dem Schutzheiligen der Schiffer und Kaufleute benannt  entstand zugleich mit der Stadt Kiel um 1242. Ein genaues Datum ist urkundlich nicht belegt, und auch über die ursprüngliche Form der Kirche sind wir nur schlecht unterrichtet. Erst in der 2. Hälfte des 14. Jh. wird der Bau als Backsteinhallenkirche fertig gestellt worden sein. Dabei war der Turm bis zum Bau der beiden Seitenkapellen zu Beginn des 16. Jh. nur an seiner Ostseite mit dem dreischiffigen, nahezu quadratischen Langhaus und dem einschiffigen Chor verbunden.


In den Jahren 1877 bis 1884 wurde das Bauwerk neugotisch restauriert und mit Maschinenziegeln verblendet. Die meisten Kapellenanbauten wurden abgebrochen und die Westseite mit dem Portal neu gestaltet.


1943/44 wurde die Kirche fast vollständig zerstört. Aber bereits 1950 wurde sie nach Plänen von Gerhard Langmaack, Hamburg, wieder aufgebaut, geleitet von der Überzeugung, nur das alte Mauerwerk habe geschichtlichen Zeugniswert und sei in der Formensprache der Gegenwart zu ergänzen. So wurde bewußt auf die Wiederherstellung der Gewölbe verzichtet, und der Außenbau erhielt ein schlichtes, alle drei Schiffe zusammenfassendes Satteldach. Bei der Renovierung im Jahre 1986 durch Peter Kahlcke, Kiel, wurde bei der Gestaltung der Innenräume an dieser Überzeugung festgehalten. 
Die meisten Kunstschätze waren nach den ersten Bombenschäden in die Klosterkirche in Bordesholm ausgelagert worden und konnten so vor der Zerstörung bewahrt werden.

<strong>1 - Die Bronzetaufe von Johann Apengeter (1344)</strong>  
Nach künstlerischem Rang und theologischer Aussage ist sie Apengeters gelungenstes Werk. Das Becken, das auf vier aufgerichteten Löwen ruht, umschließt zwei Bildreihen mit Hochreliefs, die Szenen aus dem Leben Jesu darstellen. Im unteren Zyklus wird die Reihe durch die Darstellung des Heiligen Nikolaus als Bischof unterbrochen. Ursprünglich wurde der Täufling ganz in den Kessel eingetaucht. Die Messingschale stammt aus dem 16. Jh. Der hölzerne barocke Taufdeckel hängt seit 1674 über der Taufe. 

<strong>2 - Die Freskomalereien (um 1410)</strong>
Der Durchgang von der Turmhalle zur Pommernkapelle führte früher zur HeiligKreuzKapelle. Dargestellt sind Szenen aus der Legende von der Auffindung des Kreuzes Christi durch Kaiserin Helena, der Mutter Kaiser Konstantins des Großen. 

<strong>3 - Der Flügelaltar (1460)</strong> 
Der Flügelaltar wurde von einem unbekannten Meister für das Franziskanerkloster geschaffen. Nach dessen Auflösung stellte man ihn 1541 in der SanktNikolaiKirche auf. Die zwei beweglichen Flügel erlauben drei Wandlungen. Die geschnitzte und bemalte Festtagsseite zeigt oben Szenen aus der Passions und Ostergeschichte Christi und unten aus dem Marienleben. Bei geschlossenen Innenflügeln beschreibt die bemalte Sonntagsseite (heute Advents und Passionszeit) 16 Ereignisse aus dem alten Testament von Noah bis zu den Josephsgeschichten. Der am Karfreitag geschlossene Schrein zeigt sechs FranziskanerHeilige. Im Untersatz, der Predella, befinden sich Darstellungen von acht Propheten. 

<strong>4 - Das Triumphkreuz (1490)</strong> 
Der Kruzifixus vor einem großen Balkenkreuz, das mit seinen goldenen Kreuzblumen auf den Sieg des Lebens hinweist. An den Kreuzenden die Symbole der Evangelisten, denen wir die Botschaft von Jesu Tod und Auferstehung verdanken. Das heute den Kirchenraum prägende Triumphkreuz  wahrscheinlich in Lübeck geschaffen  gehörte ursprünglich mit dem Lettner zur Begrenzung von Gemeinde und Altarraum.

<strong>5 - Der Taufaltar (um 1490)</strong> 
In der neugotischen Nebenkapelle steht der zweite Flügelschrein der Kirche, in dessen Mittelfeld die Taufe Christi dargestellt ist. Auf die Flügel sind innen Bilder der vier Evangelisten, außen vier Heilige gemalt. 

<strong>6 - Das RantzauGestühl (1543)</strong> 
Erhalten sind von diesem ältesten Ausstattungsstück aus der Zeit nach der Reformation die Gestühlswangen und die Rückwand. Die Reliefs der Wangen zeigen u.a. die Opferung Isaaks, den Sündenfall und die Kreuzigung.

<strong>7 -  Die Leuchter (16./17. Jh.)</strong> 
Das <strong>Altarleuchterpaar</strong> mit drei sitzenden Löwen als Stützen aus der Zeit um 1550. Der <strong>große Kronleuchter</strong> (1638) zeigt Christus und die Apostel, im Abschluss einen sich opfernden Pelikan. Der <strong>kleinere Kronleuchter</strong> (1661) wird von einer Figur des Bischofs Nikolaus bekrönt. Der <strong>Wandleuchter</strong> von 1655 zeigt St. Georgs Kampf mit dem Drachen. Alle Leuchter sind aus Gelbguss. Die beiden <strong>Silberleuchter</strong> In der Taufkapelle stammen aus dem Jahre 1702. 



<?php $main = ob_get_clean();

require 'layouts/main.php';

