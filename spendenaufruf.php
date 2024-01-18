<?php

require_once 'setup.php';


$spendenaufruf = true;

$show_kalender= true;

$titelbild= array('/img/KKAH_StNikolai_Fundraising_Webbanner.jpg', true);

ob_start() ?>

# Retten Sie Kiels ältesten Kunstschatz

Der Altar in der St. Nikolaikirche am Alten Markt in Kiel ist von 1460 und gilt als einer der bedeutendsten und schönsten Altäre, die im Norden Deutschlands noch im Gebrauch sind. Wunderbar kunstvoll geschnitzt und gemalt, ist er mehr als 550 Jahre alt, hat Kriege überdauert und Stadtgeschichte gesehen. Generationen von Kielerinnen und Kielern haben vor ihm gebetet, geheiratet und getrauert. Doch dieser Schatz ist schwer bedroht!

Wir brauchen Ihre Hilfe, um ihn auch für künftige Generationen zu bewahren.

Weitere Informationen finden Sie in unserem <a href="/downloads/KKAH_StNikolai_Fundraising_FLYER_WEB-1.pdf">Flyer zum herunterladen</a>.

## Jede Spende hilft. Helfen auch Sie.
Werden Sie Pate und Patin für unseren Altar. <a href="/doc/Informationen%20Patenschaft%20Altar%20St.%20Nikolai.pdf" target="_blank">Informationen zur Patenschaft finden Sie hier</a>.

Spenden Sie auf das Konto:

Ev.-Luth. Kirchengemeinde St. Nikolai<br>
Evangelische Bank Kiel<br>
<strong>IBAN:</strong> DE87 5206 0410 0206 4270 49<br>
<strong>Verwendungszweck:</strong> Altar-Schatz

Für eine Spendenbescheinigung geben Sie bitte Namen und Adresse an.
Spenden ab 100 € werden im Kirchraum auf Wunsch namentlich gewürdigt. Nehmen Sie dazu <a href="/kontakt">Kontakt mit unserem Gemeindebüro</a> auf.

<?php $main = ob_get_clean();

require 'layouts/main.php';
