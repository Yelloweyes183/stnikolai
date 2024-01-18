<?php

require_once 'vendor/autoload.php';

error_reporting(E_ALL);

set_include_path('.');

if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set('Europe/Berlin');
}

if (!function_exists('file_put_contents')) {
    function file_put_contents($filename, $data) {
        $f = @fopen($filename, 'w');
        if (!$f) {
            return false;
        } else {
            $bytes = fwrite($f, $data);
            fclose($f);
            return $bytes;
        }
    }
}

$config = array();

$config['root'] = str_replace('//', '/', str_replace('\\', '/', dirname(__FILE__).'/'));
$config['webroot'] = str_replace('//', '/', preg_replace('#^'.str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']).'#', '/', $config['root']));

@include $config['root'].'app/config.php';

require_once $config['root'].'app/functions.php';

require_once $config['root'].'app/markdown/markdown.php';

require_once $config['root'].'app/App.php';

$app = new App($config);
