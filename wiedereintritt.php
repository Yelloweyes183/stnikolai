<?php

require_once 'setup.php';

$wiedereintritt= true;
//$information = true;

$titelbild= array('/img/_MG_0656_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>

# Wiedereintritt

<hr>

## <a href="/doc/Wiedereintritt.pdf" title="Formular zum Wiedereintritt (PDF)">Formular zum Wiedereintritt (PDF)</a>

<hr>

Sie möchten wieder in die Kirche eintreten?

### Herzlich willkommen!

In der Folge möchte ich Ihnen einige Fragen beantworten, von denen ich weiß, daß sie solch einen Schritt mit Sicherheit begleiten:

### An wen muß ich mich wenden, wenn ich wieder in die Kirche eintreten will?

Die Möglichkeit zum Wiedereintritt wird Ihnen bei uns in der zentralen "Wiedereintrittsstelle an St. Nikolai" eröffnet - und zwar nicht nur für Kiel oder die Nordelbische Kirche, sondern für das ganze Gebiet der Evangelischen Kirche Deutschlands. Rufen Sie einfach kurz an (0431/982 69 10) und vereinbaren Sie einen Termin mit mir.

### Muß ich mich prüfen lassen, wenn ich wieder in die Kirche eintrete?

Nein!! Vorgesehen ist ein kurzes Gespräch, das zum größten Teil dem gegenseitigen Kennenlernen dient. Wir sind interessiert daran - was Sie vor Zeiten bewogen hat, aus der Kirche auszutreten und was Sie nun dazu bewegt, wieder dazu gehören zu wollen. Mit "Glaubensprüfung" hat das nichts zu tun. Außerdem brauchen wir Ihre persönlichen Daten und Ihre Unterschrift...

### Werde ich noch einmal getauft?

Die Taufe ist einmalig. Sie wird grundsätzlich von allen Kirchen gegenseitig anerkannt. Darum werden Sie bei einem Kircheneintritt nicht noch einmal getauft.

### Und wenn ich gar nicht getauft bin?

Dann werden Sie durch die Taufe in die evangelische Kirche aufgenommen. Der Taufe geht in der Regel ein Gespräch voraus. Über die Gestaltung der Tauffeier werden wir dabei dann auch Absprachen treffen.

### Werde ich der Gemeinde vorgestellt?

Nicht automatisch. Wenn Sie es allerdings gerne möchten, kann in einem Gottesdienst Ihrer Ortsgemeinde Ihr Eintritt in die evangelische Kirche bekannt gegeben werden und Sie sich selbst auf diese Weise der Gemeinde bekannt machen. Nähere Absprachen sollten Sie dann mit Ihrem Ortspastor oder Ihrer Ortspastorin führen.

### Welche Unterlagen werden benötigt?

Ihren Personalausweis sollten Sie dabei haben. Ihre Tauf- und/oder Konfirmationsurkunde wäre gut, um die Taufe dokumentieren zu können. Sollten Sie wissen, wann aus der Kirche ausgetreten sind und das noch nachweisen können, dann bringen Sie diese Unterlagen doch bitte auch mit.

### Was kostet mich der Eintritt?

Der Eintritt in die evangelische Kirche ist, im Unterschied zum Austritt bei den staatlichen Stellen, natürlich kostenlos.

### Zu welcher Gemeinde gehöre ich dann?

Zu der Gemeinde, die für Ihren Wohnort zuständig ist - es sei denn, Sie wünschen ausdrücklich eine Umgemeindung in die St. Nikolai-Gemeinde. Sie können sich nach Ihrem Eintritt aber auch in jede andere Gemeinde umgemeinden lassen - wir helfen Ihnen selbstverständlich bei diesem Schritt.

Sie können das <a href="/doc/Wiedereintritt.pdf" title="Formular zum Wiedereintritt (PDF)">Formular zum Wiedereintritt (PDF)</a> hier herunterladen.

<?php $main = ob_get_clean();

require 'layouts/main.php';

