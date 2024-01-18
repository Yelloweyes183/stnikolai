<?php

require_once 'setup.php';

$aktuell = true;
$gemeindebrief = true;

$titelbild= array('/img/GBr_Kopfbild.jpg', false);

ob_start() ?>

# Gemeindebrief

<hr>

Der aktuelle Gemeindebrief steht hier als PDF-Datei zum <a href="/doc/GemBr_16_3.pdf" title="PDF-Download">Download bereit.</a>

### Archiv:
<ul> <!-- möglicher Weise schicker anordnen -->
<li><a href="/doc/GemBr_16_3.pdf" title="PDF-Download">Mitten in der Stadt - 3/2016</a></li>
<li><a href="/doc/GemBr_16_2.pdf" title="PDF-Download">Mitten in der Stadt - 2/2016</a></li>
<li><a href="/doc/GemBr_16_1.pdf" title="PDF-Download">Mitten in der Stadt - 1/2016</a></li>
</ul>
<hr>
<ul> <!-- möglicher Weise schicker anordnen -->
<li><a href="/doc/GemBr_15_4.pdf" title="PDF-Download">Mitten in der Stadt - 4/2015</a></li>
<li><a href="/doc/GemBr_15_3.pdf" title="PDF-Download">Mitten in der Stadt - 3/2015</a></li>
<li><a href="/doc/GemBr_15_2.pdf" title="PDF-Download">Mitten in der Stadt - 2/2015</a></li>
<li><a href="/doc/GemBr_15_1.pdf" title="PDF-Download">Mitten in der Stadt - 1/2015</a></li>
</ul>
<hr>
<ul> <!-- möglicher Weise schicker anordnen -->
<li><a href="/doc/GemBr_14_4.pdf" title="PDF-Download">Mitten in der Stadt - 4/2014</a></li>
<li><a href="/doc/GemBr_14_3.pdf" title="PDF-Download">Mitten in der Stadt - 3/2014</a></li>
<li><a href="/doc/GemBr_14_2.pdf" title="PDF-Download">Mitten in der Stadt - 2/2014</a></li>
<li><a href="/doc/GemBr_14_1.pdf" title="PDF-Download">Mitten in der Stadt - 1/2014</a></li>
</ul>
<hr>
<ul>
<li><a href="/doc/GBr_Nik_13_4.pdf" title="PDF-Download">Mitten in der Stadt - 4/2013</a></li>
<li><a href="/doc/GBr_Nik_13_3.pdf" title="PDF-Download">Mitten in der Stadt - 3/2013</a></li>
<li><a href="/doc/GBr_Nik_13_2.pdf" title="PDF-Download">Mitten in der Stadt - 2/2013</a></li>
<li><a href="/doc/GBr_Nik_13_1.pdf" title="PDF-Download">Mitten in der Stadt - 1/2013</a></li>
</ul>
<hr>
<ul>
<li><a href="/doc/GBr_Nik_12_4.pdf" title="PDF-Download">Mitten in der Stadt - 4/2012</a></li>
<li><a href="/doc/GBr_Nik_12_3.pdf" title="PDF-Download">Mitten in der Stadt - 3/2012</a></li>
<li><a href="/doc/GBr_Nik_12_2.pdf" title="PDF-Download">Mitten in der Stadt - 2/2012</a></li>
<li><a href="/doc/GBr_Nik_12_1.pdf" title="PDF-Download">Mitten in der Stadt - 1/2012</a></li>
</ul>
<hr>
<ul>
<li><a href="/doc/GBr_Nik_11_4.pdf" title="PDF-Download">Mitten in der Stadt - 4/2011</a></li>
<li><a href="/doc/GBr_Nik_11_3.pdf" title="PDF-Download">Mitten in der Stadt - 3/2011</a></li>
<li><a href="/doc/GBr_Nik_11_2.pdf" title="PDF-Download">Mitten in der Stadt - 2/2011</a></li>
<li><a href="/doc/GBr_Nik_11_1.pdf" title="PDF-Download">Mitten in der Stadt - 1/2011</a></li>
</ul>
<hr>
<ul> <!-- möglicher Weise schicker anordnen -->
<li><a href="/doc/GBr_Nik_10_4.pdf" title="PDF-Download">Mitten in der Stadt - 4/2010</a></li>
<li><a href="/doc/GBr_Nik_10_3.pdf" title="PDF-Download">Mitten in der Stadt - 3/2010</a></li>
<li><a href="/doc/GBr_Nik_10_2.pdf" title="PDF-Download">Mitten in der Stadt - 2/2010</a></li>
<li><a href="/doc/GBr_Nik_10_1.pdf" title="PDF-Download">Mitten in der Stadt - 1/2010</a></li>
</ul>
<hr>

<?php $main = ob_get_clean();

require 'layouts/main.php';

