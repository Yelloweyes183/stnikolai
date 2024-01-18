<?php

require_once 'setup.php';

function filemtime_remote($uri)
{
    $uri = parse_url($uri);
    $handle = @fsockopen($uri['host'],80);
    if(!$handle)
        return 0;

    fputs($handle,"GET $uri[path] HTTP/1.1\r\nHost: $uri[host]\r\n\r\n");
    $result = 0;
    while(!feof($handle))
    {
        $line = fgets($handle,1024);
        if(!trim($line))
            break;

        $col = strpos($line,':');
        if($col !== false)
        {
            $header = trim(substr($line,0,$col));
            $value = trim(substr($line,$col+1));
            if(strtolower($header) == 'last-modified')
            {
                $result = strtotime($value);
                break;
            }
        }
    }
    fclose($handle);
    return $result;
}

function getImgDate($src) {
	$time= filemtime_remote($src);
	$result= date("d.m.Y", $time).' um '.date("H:i", $time).' Uhr';
	return $result;
}

$title2 = 'Webcam';
$webcam = true;

$tfsrc= "http://www.camspotting.de/turmfalken/image.jpg";
$tksrc= "http://www.camspotting.de/st-nikolai/image.jpg";

$yesterday_timestr= time() - 60 * 60 * 24;
$yesterday= array(
				"filestr" => date("Y_m_d", $yesterday_timestr),
				"str" => date("d.m.Y", $yesterday_timestr)
			);

ob_start() ?>

# Live Webcam's - In Zusammenarbeit mit <a href="http://kielmonitor.de" target="_blank">kielmonitor.de</a>

<hr>
<!--
## Die Turmfalken von Sankt Nikolai

Live-Bild vom <span id="webcam_tf_time"><?php echo getImgDate($tfsrc); ?></span><br>
<a class="refresh_webcam" data-id="webcam_tf" href="#">Aktualisieren</a>
<div class="zoomable" style="margin-bottom: 3em">
<img id="webcam_tf" class="r" src="<?php echo $tfsrc ?>" alt="Livebild der Turmfalken von St-Nikolai">
</div>

### Zeitraffer (Video) der Turmfalken vom <?php echo $yesterday['str'] ?>
<video style="max-width: 100%; margin-top: 1em;" muted="" controls=""><source type="video/mp4" src="http://www.camspotting.de/turmfalken/film/<?php echo $yesterday['filestr'] ?>_turmfalken.mp4"></source></video>

<hr>-->

## Ausblick vom Kirchturm nach Süden auf den Alten Bootshafen

Live-Bild vom <span id="webcam_tk_time"><?php echo getImgDate($tksrc); ?></span><br>
<a class="refresh_webcam" data-id="webcam_tk" href="#">Aktualisieren</a>
<div class="zoomable" style="margin-bottom: 3em">
<img id="webcam_tk" class="r" src="<?php echo $tksrc ?>" alt="Livebild des Turms von St-Nikolai">
</div>

### Zeitraffer (Video) der Turmkamera vom <?php echo $yesterday['str'] ?>
<video style="max-width: 100%; margin-top: 1em;" muted="" controls=""><source type="video/mp4" src="http://www.camspotting.de/st-nikolai/film/<?php echo $yesterday['filestr'] ?>_st-nikolai.mp4"></source></video>

<hr>

In Zusammenarbeit mit <a target="_blank" href="http://www.kielmonitor.de">kielmonitor.de</a>

<a target="_blank" href="http://www.kielmonitor.de">
<img src="http://www.kielmonitor.de/wpkm/wp-content/uploads/logo.png" alt="kielmonitor.de">
</a>

<?php $main = ob_get_clean();

require 'layouts/main.php';

