<?php //netteCache[01]000410a:2:{s:4:"time";s:21:"0.86067300 1347614286";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:88:"/data/web/virtuals/14338/virtual/www/subdom/new/app/MobileModule/templates/@layout.latte";i:2;i:1347614243;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: /data/web/virtuals/14338/virtual/www/subdom/new/app/MobileModule/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '60gsug88h7')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>mobilni verze</title>

	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.1.1.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>
	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/mobile/screen.css" type="text/css" />  
	
</head>
<body>
<div data-role="page" class="type-home">
	<div data-role="content">
  
	<script> document.body.className+=' js' </script>
<?php $iterations = 0; foreach ($flashes as $flash): ?>	<div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
  
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
  
	</div>

	<div data-role="footer" class="footer-docs" data-theme="c">
			<p>Mobilni verze</p>
	</div>

</div>
</body>
</html>
