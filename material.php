<?php

require_once 'setup.php';

$konzept = true;
$material = true;

ob_start() ?>


**Hans-Werner Dannowski** <a href="/doc/City-Kirche-Vortrag_Dannowski.pdf"><img src="/img/doc-button2.png" alt="Download-Button" title="PDF-Download"></a>

Auf der Suche nach der Stadt, in der Gott nahe ist.<br>
Zum Profil der City-Kirchen-Arbeit
 

**Wolfgang Grünberg** <a href=""><img src="/img/doc-button2.png" alt="Download-Button" title="PDF-Download"></a>

Kyrie und Gloria.<br>
Die öffentliche Bedeutung der (City-)Kirchen<br>
im zusammenwachsenden Europa
 

**Klaus Blaschke <a href=""><img src="/img/doc-button2.png" alt="Download-Button" title="PDF-Download"></a> /  Matthias Wünsche** <a href=""><img src="/img/doc-button2.png" alt="Download-Button" title="PDF-Download"></a>
	
Kirche - Mittelpunkt aller Gemeindeaktivitäten<br>
in: Systematisch Praktisch. FS Preul, Marburg 2005 


**Matthias Wünsche** <a href="/doc/OffKirche - Erfahrungsthesen.pdf"><img src="/img/doc-button2.png" alt="Download-Button" title="PDF-Download"></a>

Offene Kirche St. Nikolai - Erfahrungsthesen
 
**Matthias Wünsche** <a href="/doc/Kirche in Kiel 2012.pdf"><img src="/img/doc-button2.png" alt="Download-Button" title="PDF-Download"></a>

Kirche in Kiel 2012 - ein Versuch (Sept 06)
 
**Matthias Wünsche** <a href="/doc/Stadtmythen.pdf"><img src="/img/doc-button2.png" alt="Download-Button" title="PDF-Download"></a>
 
Stadtmythen
 

**EKD-Texte 93** <a href="/doc/ekd_texte_93.pdf"><img src="/img/doc-button2.png" alt="Download-Button" title="PDF-Download"></a>

Gott in der Stadt.<br>
Perspektiven evangelischer Kirche in der Stadt


<?php $main = ob_get_clean();

require 'layouts/main.php';

