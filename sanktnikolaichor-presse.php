<?php

require_once 'setup.php';

$sanktnikolaichor = true;
$chor_presse = true;

$fset_preselect = 	$app->db->tagging_preselect()->select('tag_id')->where('cat_id', 1);
foreach($fset_preselect as $p)
{
	$fset_tags[] = $p['tag_id'];
}

$krids= $app->db->kritiken()->select('distinct eventid')->order('date desc');
$kritiken= array();
foreach($krids as $krid) {
	$konztitle= $app->db->events()->where('id', $krid['eventid'])->select('id, title, date, reg_id')->fetch();
	$krs= $app->db->kritiken()->where('eventid', $krid['eventid']);
	
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
	$kritiken[]= array(
		"eventid" => $krid['eventid'],
		"konztitle" => $konztitle['title'],
		"konzdate" => $konztitle['date'],
		"krs" => $krs
	);
	}
}

ob_start() ?>

# SanktNikolaiChor - Presse

<hr>

<div class="kritiken">

<?php if(count($kritiken) == 0): ?>
<p><em>Bisher stehen keine Presseartikel zur Verfügung.</em></p>
<?php endif ?>

<?php foreach($kritiken as $kritik): ?>
<h2><?php echo date("d.m.Y", strtotime($kritik['konzdate'])) ?>: <?php echo $kritik['konztitle'] ?></h2>

<?php foreach($kritik['krs'] as $krinner): ?>
<?php $temp = explode(".", $krinner['filename']); $extension = strtolower(end($temp)); ?>
<p>
	<a target="_blank" href="/kritiken/<?php echo $kritik['eventid'] ?>/<?php echo $krinner['filename'] ?>">
		<?php echo $krinner['title'] ?>
	</a>
	<?php if(!empty($krinner['publisher'])): ?>
		<br><em>(Herausgegeben von <?php echo $krinner['publisher'] ?> am <?php echo date("d.m.Y", strtotime($krinner['time'])) ?>)</em>
	<?php endif ?>
		<br><em>Dateityp: <?php echo $extension ?></em>
</p>
<?php endforeach ?>

<?php endforeach ?>
</div>

<?php $main = ob_get_clean();

require 'layouts/main.php';

