<?php ob_start() ?>
<!DOCTYPE html>
<html class="no-js" lang="de">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo @$title ?></title>
        <meta name="description" content="<?php echo @$description ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" href="/img/favicon.png">

        <link rel="stylesheet" href="/css/normalize.css">
        <link href="/css/froala_editor.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/lightbox.css">
		<link rel="stylesheet" href="/css/jquery.cookiebar.css">
        <?php if(@$slider): ?>
        <link href="/css/jquery.bxslider.css" rel="stylesheet" />
        <?php endif ?>
		
        <link rel="stylesheet" href="<?php echo $css ?>">
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
		
        <?php if(@$show_kalender): ?>
		<link href="/elements/filter.css?<?php echo filemtime('./elements/filter.css') ?>1" rel="stylesheet" />
		<link href="/elements/bootstrap.css?<?php echo filemtime('./elements/bootstrap.css') ?>1" rel="stylesheet" />		
		<link href="/elements/bootstrap-select.css?<?php echo filemtime('./elements/bootstrap-select.css') ?>1" rel="stylesheet" />
		
		<?php endif;?>
        
        <?php /*
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
        </script> */
		?>
        <script src="/js/vendor/jquery-1.9.1.min.js"></script>
    </head>
    <body>
        <?php if(isset($chromeFrame)): ?>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <?php endif ?>

        <?php echo $body ?>
        <div class="modal"><div><img src="/img/loader.png"><br>Suchergebnisse werden geladen<br><span id="load-dots">&nbsp;</span></div></div>
        
        
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js?<?php echo filemtime('./js/main.js') ?>"></script>
        <script src="/js/jquery.bxslider.min.js"></script>
        <script src="/js/jquery.session.js"></script>
        <script src="/js/jquery-cookie/src/jquery.cookie.js"></script>
		<script src="/js/jquery.cookiebar.js"></script>
		<script type="text/javascript">
		  $(document).ready(function(){
			 $.cookieBar({
			fixed: true,
			message: 'Mit der Nutzung unserer Dienste erklären Sie sich damit einverstanden,dass wir Cookies verwenden.',
			acceptText: 'OK',
			policyButton: true,
			policyText: 'Mehr Informationen',
			policyURL: '/datenschutz',
			/*forceShow: true,*/
			bottom: true
			 });
		  });
		</script>
        <?php if(@$slider): ?>
        <script src="/js/lightbox.min.slider.js"></script>
        <script>
        	$(document).ready(function(){
			  $('.bxslider').bxSlider({
			  	controls: true,
			  	adaptiveHeight: true,
			  	auto: false
			  });
			});
        </script>
        <?php else: ?>
        <script src="/js/lightbox.min.js"></script>
        <?php endif ?>
        
        <?php if(@$show_kalender): ?>
        <script src="/js/veranstaltungskalender.js?<?php echo filemtime('./js/veranstaltungskalender.js') ?>1"></script>
		<script src="/elements/bootstrap.js?<?php echo filemtime('./elements/bootstrap.js') ?>1"></script>
		<script src="/elements/bootstrap-select.js?<?php echo filemtime('./elements/bootstrap-select.js') ?>1"></script>
        <?php endif ?>
        
        <?php /*<script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script> */ ?>
        <?php /* <script src="/js/vendor/galleria/galleria-1.2.9.min.js"></script>
        <script>
            if($('.galleria').length > 0) {
                Galleria.loadTheme('<?php echo $config['webroot'] ?>js/vendor/galleria/themes/classic/galleria.classic.min.js');
                Galleria.run('.galleria');
            }
        </script> */ ?>
    </body>
</html>

<?php $html = ob_get_clean();

// interne links mit webroot ersetzen
$html = preg_replace(
    '#(href|src|action)="/([^/].*?|)"#',
    '\1="'.$config['webroot'].'\2"',
    $html
);

// eigennamen etc. sichern
$html = preg_replace(
    '#((Pastor|M\.|Dr\.|Matthias)\s*)Wünsche#',
    '\1<span class="notranslate">Wünsche</span>',
    $html
);

$html = preg_replace(
    '#((Lars|L\.)\s*)Palme#',
    '\1<span class="notranslate">Palme</span>',
    $html
);

echo $html;