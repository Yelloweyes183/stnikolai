<?php

require_once 'setup.php';

$subtitle = 'Kontakt';
$kontakt = true;

$action = '/kontakt';
$session = 'kontakt';
$redirect = 'Location: '.$app->webroot().'kontakt';

if(empty($_SESSION[$session])) {
	$_SESSION[$session] = array(
		'values' => array(),
		'errors' => array(),
		'error' => null,
		'success' => null,
		'posted' => false,
		'debug' => null
	);
}

$values = &$_SESSION[$session]['values'];
$errors = &$_SESSION[$session]['errors'];
$error = &$_SESSION[$session]['error'];
$success = &$_SESSION[$session]['success'];
$posted = &$_SESSION[$session]['posted'];
$debug = &$_SESSION[$session]['debug'];

if(isset($_POST['kontakt'])) {
	$values = $_POST;
	$errors = array();
	$error = null;
	$success = null;
	$posted = true;


  	if(!empty($_POST['homepage'])) {
    	$error = 'Ihre Nachricht konnte nicht gesendet werden.';
    	header($redirect);
    	exit;
  	}

  	if(empty($_POST['nachricht'])) {
    	$errors['nachricht'] = 'Bitte geben Sie eine Nachricht an.';
  	}

  	if(!empty($errors)) {
  		header($redirect);
  		exit;
  	}

  	// kontakt mail
  	$to = 'gemeindebuero@st-nikolai-kiel.de';

  	if(empty($_POST['email'])) {
    	$from = 'kontaktformular@st-nikolai-kiel.de';
  	}
  	else {
    	$from = $_POST['email'];
  	}

  	$name = $_POST['name'];
  	if(empty($name)) {
  	    $name = 'Anonym';
  	}

  	$subject = 'Nachricht von '.$name;

  	$message = "Name:  ".$name."
Telefonnummer: ".$_POST['telefon']."
E-Mail-Adresse: ".$_POST['email']."

Nachricht

".$_POST['nachricht'];

	$headers = "From: ".$from;
	$headers .= "\nContent-Type:text/plain;charset=utf-8";
	$headers .= "\nCC: pwuensche@st-nikolai-kiel.de";
	$ok = @mail($to, $subject, $message, $headers);

    $debug = $subject."\n".$message;

  	if($ok) {
  		$values = array();
    	$success = 'Ihre Nachricht wurde gesendet.';
  	}
  	else {
    	$error = 'Ihre Nachricht konnte nicht gesendet werden. Bitte rufen Sie uns an oder schreiben Sie uns eine E-Mail.';
  	}

  	header($redirect);
  	exit;
}

if($posted) {
	$posted = false;
} else {
	$values = array();
	$errors = array();
	$error = null;
	$success = null;
}

ob_start() ?>


# Kontakt
<hr>
<div class="notranslate" markdown="1">
  <table width="100%" cellspacing="0" cellpadding="5" border="0">
    <colgroup>
    <col width="50%">
    <col width="50%">
  </colgroup>
    <tr>
      <td><b>Pastorin (Gemeinde)</b><br>
      Dr. Charlotte Hartwig<br>
      Büro: Alter Markt, 24103 Kiel<br>
      Tel.: 0176 - 10 41 41 29<br>
      Mail:  <a href="mailto:p.hartwig@st-nikolai-kiel.de">p.hartwig@st-nikolai-kiel.de</a></td><br>
      <td><b>Pastorin (Stadtkirchenarbeit)</b> <br>
         Maren Schmidt<br>
         Büro: Falckstr. 9, 24103 Kiel<br>
         Mobil: 0151 - 74 11 83 58<br>
         Mail: <a href="mailto:schmidt.nikolai@altholstein.de">schmidt.nikolai@altholstein.de</a><br> </td>
    </tr>
    <td></td>
    <td><b>Kirchenmusiker</b><br>
        KMD  Volkmar Zehner<br>
       Büro: Falckstr. 9, 24103 Kiel<br>
       Tel.: 0176 - 15 31 31 35<br>
       Mail: <a href="mailto:zehner.nikolai@altholstein.de">zehner.nikolai@altholstein.de</a><br>
    </td>
    <tr>
    </tr>
    <td><b>Gemeindebüro</b><br>
Eckhard Adamus<br>
Büro: Alter Markt, 24103 Kiel<br>
Tel.: 0431 - 9 50 98<br> 
Fax: 0431 - 9 16 73<br>
Mail: <a href="mailto:gemeindebuero@st-nikolai-kiel.de">gemeindebuero@st-nikolai-kiel.de</a><br>
Sprechzeiten: Di, Mi und Fr von 10 – 12 Uhr<br></td>
    <td><b>Veranstaltungsmanagement</b><br>
Ulrike Maßmann<br>
Büro: Falckstr. 9, 24103 Kiel<br>
Tel.: 0157 - 80 58 36 12<br><br>
Mail: <a href="mailto:veranstaltungen.nikolai@altholstein.de">veranstaltungen.nikolai@altholstein.de</a><br>
Sprechzeiten: nach Vereinbarung<br></td>
    <tr>
    </tr>
    <tr>
    <td><b>Küster</b><br>
Frank Matzat<br>
Tel.: 0431 - 9 82 76 73 (Küsterloge)<br> 
Mail: <a href="mailto:kuester.matzat@st-nikolai-kiel.de">kuester.matzat@st-nikolai-kiel.de</a><br><br>
Frank Hess<br> </td>
    <td>  
      <b>Hausmeister/Veranstaltungsbegleitung</b><br>
Sascha Lohmann<br>
Tel.: 0152 - 22 36 17 20<br>
Mail: <a href="mailto:lohmann.nikolai@altholstein.de">lohmann.nikolai@altholstein.de</a><br>
</td> 
    </tr>
    <tr>
      <td><b>Kirchengemeinderatsvorsitz</b><br>
Nicole Hansen<br>
Tel.: 0176 - 53 67 75 79<br>
Mail: <a href="mailto:n.hansen@st-nikolai-kiel.de">n.hansen@st-nikolai-kiel.de</a></td><br> 
    <td></td>
    </tr>
    <tr>
      <td>
<b>Kirchenpädagogik/Kirchenführungen</b> <br>
Dorte Dela (Grundschullehrerin)<br>
Tel.: 0431 - 8 88 69 29<br>
Mail: <a href="mailto:d.dela@st-nikolai-kiel.de">d.dela@st-nikolai-kiel.de</a><br><br>

        Gerlind Stephani (Kunsthistorikerin)<br>
Tel.: 0431 - 52 94 86<br>
      Mail: <a href="mailto:g.stephani@st-nikolai-kiel.de">g.stephani@st-nikolai-kiel.de</a></td><br>
      <td></td>
    </tr>
  </table>


 
  



</div>
<?php /*
<hr>


<form method="post" action="<?php echo $action ?>">
<?php if(!empty($errors)): ?>
<h3 class="error">Bitte vervollständigen Sie das Formular:</h3>
<ul class="errors">
	<?php foreach($errors as $error): ?>
	<li class="error"><?php echo $error ?></li>
	<?php endforeach ?>
</ul>
<?php elseif(!empty($error)): ?>
<h3 class="error"><?php echo $error ?></h3>
<?php elseif(!empty($success)): ?>
<h3 class="success"><?php echo $success ?></h3>
<?php endif ?>

<p><em>Bei Fragen oder Anregungen verwenden Sie gerne dieses Kontaktformular.<br>
Wir freuen uns auf Ihre Nachricht!</em></p>

<p><label>Ihr Name (optional)<br> <input type="text" name="name" size="40" value="<?php echo h(@$values['name']) ?>"></label></p>

<p><label>Ihre Telefonnummer (optional)<br> <input type="text" name="telefon" size="40" value="<?php echo h(@$values['telefon']) ?>"></label></p>
<p><label>Ihre E-Mail-Adresse (optional)<br> <input type="text" name="email" size="40" value="<?php echo h(@$values['email']) ?>"></label> <br>
<small>Bitte geben Sie Ihre E-Mail-Adresse an, wenn Sie eine Antwort wünschen.</small></p>

<p><label>Ihre Nachricht (erwünscht)<br>
<textarea name="nachricht" cols="39" rows="10"><?php echo h(@$values['nachricht']) ?></textarea></label></p>

<p><input class="submit" type="submit" name="kontakt" value="Absenden"></p>
</form>

*/ ?>
<?php $main = ob_get_clean();

require 'layouts/main.php';
