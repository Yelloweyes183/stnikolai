<?php

require_once 'setup.php';
$show_kalender= true;

$sanktnikolaichor = true;
$chor_archiv = true;

$fset_preselect = 	$app->db->tagging_preselect()->select('tag_id')->where('cat_id', 1);
$fset_events =		$app->db->tagging_rel()->select('event_id')->where('tag_id', $fset_preselect)->where('event_id != 0');
$fset_years =		$app->db->events->select('DISTINCT(YEAR(date)) as y')->where('YEAR(date) <= '.intval(date('Y')))->where('id', $fset_events)->order('YEAR(date) DESC');
$years_arr =		array();
$fset_tags = 		array();

foreach($fset_years as $y)
{
	$years_arr[] = $y['y'];
}

foreach($fset_preselect as $p)
{
	$fset_tags[] = $p['tag_id'];
}

ob_start() ?>

# SanktNikolaiChor - Archiv

<hr>

## Vergangene Veranstaltungen mit dem SanktNikolaiChor

<?php 
$get = array(
            'page' => 1,
            'perpage' => 10,
            'order' => 'date',
            'dir' => 'asc',
            'words' => '',
            'filter' => '',
            'month' => 0,
            'year' => date("Y"),
			//'year' => 2014,
            'old' => 'old',
            'reg' => 'all',
            'filter' => 'off',
            'cats' => '15',
            'acats' => null,
            'ncats' => null,
            'today' => 'false',
			'tags'	=> implode('_', $fset_tags)	
        );
        
$filterzeit= 'vergangene';
$getstringold= 'old'; 
$hidechorlink= true;
$f_chorarchiv = true;
require 'elements/filter_chor.php';
?>

<table id="veranstaltungen" class="veranstaltungen" data-target="chor" data-old="old">

<?php
$start= true; 
require 'kalenderel.php';
?>
</table>

<?php $main = ob_get_clean();

require 'layouts/main.php';

