<?php

	$cs = Yii::app()->clientScript;
	$cs->registerCssFile($this->getAssetsUrl().'/fonts/fonts.css');
	$cs->registerCssFile($this->getAssetsUrl().'/css/normalize.css');
	$cs->registerCssFile($this->getAssetsUrl().'/css/opentip.css');
	$cs->registerCssFile($this->getAssetsUrl().'/css/style.css');
	$cs->registerCssFile($this->getAssetsUrl().'/js/fancybox/jquery.fancybox.css');
	// //$cs->registerCssFile($this->getAssetsUrl().'/css/fancybox/jquery.fancybox-buttons.css');
	/*<script type="text/javascript" src="/js/modernizr.custom.js"></script>
		<script type="text/javascript" src="/js/moment.min.js"></script>
		<script type="text/javascript" src="/js/jquery.lwtCountdown-1.0.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>
		<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>*/
	//js files
	$cs->registerCoreScript('jquery');
	$cs->registerScriptFile($this->getAssetsUrl().'/js/modernizr.custom.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/moment.min.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/fancybox/jquery.fancybox.pack.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/jquery.lwtCountdown-1.0.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/opentip/opentip.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/opentip/adapter-jquery.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/script.js', CClientScript::POS_END);
	$cs->registerScriptFile('http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU', CClientScript::POS_END);

	// $cs->registerCoreScript('jquery');
	// $cs->registerCoreScript('jquery.ui');
	// $cs->registerScriptFile($this->getAssetsUrl().'/js/lib/jquery.fancybox.js', CClientScript::POS_END);
	// //$cs->registerScriptFile($this->getAssetsUrl().'/js/lib/jquery.fancybox-buttons.js', CClientScript::POS_END);
	// //$cs->registerScriptFile('http://api-maps.yandex.ru/2.0.27/?load=package.standard&lang=ru-RU', CClientScript::POS_HEAD);
	
	// $cs->registerScriptFile($this->getAssetsUrl().'/js/lib/jquery.timepicker.addon.js', CClientScript::POS_END);
	// $cs->registerScriptFile($this->getAssetsUrl().'/js/lib/jquery.ui.timepicker.ru.js', CClientScript::POS_END);
	// $cs->registerScriptFile($this->getAssetsUrl().'/js/common.js', CClientScript::POS_END);
?><!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<title><?php echo (Settings::getOption('title') ? Settings::getOption('title') : $this->title); ?></title>
		<link id="favicon" type="image/x-icon" rel="shortcut icon" href="/favicon.ico"/>
  		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<!-- 		<link rel="stylesheet" type="text/css" href="/fonts/fonts.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/css/normalize.css"> -->
		<!--[if IE]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="header">
			<div class="width_960">
				<div class="logo left"><p class="logo"></p></div>
				<div class="call_us">
					<h2>Звоните нам прямо сейчас</h2>
					<h1>8 (3452) 58-57-17</h1>
                    <h1>8 (3452) 58-57-54</h1>
				</div>
				<div class="logo right"><p class="agency"></p></div>
			</div>
		</div>
		<?php echo $content;?>
		<div class="footer">
        
			<div class="width_960">
            <p style="font-size: 16px; left: 277px; position: absolute; top: 35px;">Посетите наш <a href="http://585717.ru/">официальный сайт</a></p>
				<p class="copyright">Модуль 2008-2013</p>
				<div class="right">
	            <div class="amobile_slogan replace_italic">Всегда только лучшие идеи</div>
	            <a href="http://amobile-studio.ru" class="amobile_logo"></a>
	        </div>
			</div>
		</div> 
		<?/*<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="/js/modernizr.custom.js"></script>
		<script type="text/javascript" src="/js/moment.min.js"></script>
		<script type="text/javascript" src="/js/jquery.lwtCountdown-1.0.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>
		<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>*/?>
	</body>
</html>