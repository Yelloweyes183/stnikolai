<?php

require_once 'setup.php';

$sanktnikolaichor = true;
$chor_hoerproben = true;

$fset_preselect = 	$app->db->tagging_preselect()->select('tag_id')->where('cat_id', 1);
foreach($fset_preselect as $p)
{
	$fset_tags[] = $p['tag_id'];
}

$hpids= $app->db->hoerproben()->select('distinct eventid')->order('date desc');
$hoerproben= array();
foreach($hpids as $hpid) {
	$konztitle= $app->db->events()->where('id', $hpid['eventid'])->select('id, title, date, reg_id')->fetch();
	$hps= $app->db->hoerproben()->where('eventid', $hpid['eventid']);
	
	if( $konztitle['reg_id'] != NULL )
	{
		$show_hp = $app->db->tagging_rel()->where('regevent_id', $konztitle['reg_id'])->where('tag_id', $fset_tags)->count('*');
	}
	else
	{
		$show_hp = $app->db->tagging_rel()->where('event_id', $konztitle['id'])->where('tag_id', $fset_tags)->count('*');
	}
	
	if( $show_hp > 0 )
	{
	
		$hoerproben[]= array(
			"eventid" => $hpid['eventid'],
			"konztitle" => $konztitle['title'],
			"konzdate" => $konztitle['date'],
			"hps" => $hps
		);
	}
}

ob_start() ?>

# SanktNikolaiChor - Hörproben

<hr>

<div class="hoerproben">

<?php if(count($hoerproben) == 0): ?>
<!--<p><em>Bisher stehen keine Hörproben zur Verfügung.</em></p>-->
<?php endif ?>

<p> <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 5px;" width="600" height="338">
    <source src="/downloads/2019_10_03_Oekumenischer_Gottesdienst.mp4#t=1" type="video/mp4">
    Ihr Browser unterstützt leider kein HTML5-Video.
  </video>Der SanktNikolaiChor beim Gottesdienst zum Tag der Deutschen Einheit am 3. Oktober 2019</p>


<?php foreach($hoerproben as $hoerprobe): ?>
<h2><?php echo date("d.m.Y", strtotime($hoerprobe['konzdate'])) ?>: <?php echo $hoerprobe['konztitle'] ?></h2>

<?php foreach($hoerprobe['hps'] as $hpinner): ?>
<p>
	<audio controls="controls">
	<source src="/hoerproben/<?php echo $hoerprobe['eventid'] ?>/<?php echo $hpinner['filename'] ?>" type="audio/mpeg" />
		' + $this + '
	</audio><br>
	<?php echo $hpinner['title'] ?>
</p>
<?php endforeach ?>

<?php endforeach ?>
</div>


<?php $main = ob_get_clean();

require 'layouts/main.php';

