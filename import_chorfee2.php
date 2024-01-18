<?php 
header("Expires: Mon, 12 Jul 1995 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 

require 'setup.php';

?>
<!DOCTYPE html>
<html class="no-js" lang="de">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Offene Kirche Sankt Nikolai zu Kiel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" href="/img/favicon.png">

        <link rel="stylesheet" href="/css/normalize.css">
        <link href="/css/froala_editor.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/lightbox.css">
                <link rel="stylesheet" href="/css/main.default.1.v1480505585.css">
        <script type="text/javascript" src="http://ff.kis.v2.scr.kaspersky-labs.com/BB4C3819-9FBA-404C-8D1B-179031788B48/main.js" charset="UTF-8"></script><script src="/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <meta name="google-translate-customization" content="be098ee3c2060d81-6dadc9f12b6e1ec9-g3d1c14f2c647885f-12">
        
        <script>
            var gaProperty = 'UA-48017532-1';
            var disableStr = 'ga-disable-' + gaProperty;
            if (document.cookie.indexOf(disableStr + '=true') > -1) {
              window[disableStr] = true;
            }
            function gaOptout() {
              document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
              window[disableStr] = true;
            }
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-48017532-1', 'st-nikolai-kiel.de');
            ga('set', 'anonymizeIp', true);
            ga('send', 'pageview');
        </script>
        
    </head>
    <body>
<?php
$app->importChorFee2();

?>
</body>
</html>