<?php

require_once 'setup.php';

$subtitle = 'Datenschutz';

$datenschutz = true;

ob_start() ?>

# Datenschutz

<hr>

Sofern innerhalb des Internetangebotes die Möglichkeit zur Eingabe persönlicher oder geschäftlicher Daten (Emailadressen, Namen, Anschriften) besteht, erfolgt die Preisgabe dieser Daten seitens des Nutzers auf ausdrücklich freiwilliger Basis. Die Inanspruchnahme und Bezahlung aller angebotenen Dienste ist - soweit technisch möglich und zumutbar - auch ohne Angabe solcher Daten bzw. unter Angabe anonymisierter Daten oder eines Pseudonyms gestattet.

<?php $main = ob_get_clean();

require 'layouts/main.php';

