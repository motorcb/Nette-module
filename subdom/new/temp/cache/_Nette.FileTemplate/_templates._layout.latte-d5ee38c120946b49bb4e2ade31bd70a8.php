<?php //netteCache[01]000412a:2:{s:4:"time";s:21:"0.66498000 1346851228";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:90:"/data/web/virtuals/14338/virtual/www/subdom/new/app/NeznasovModule/templates/@layout.latte";i:2;i:1346851120;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: /data/web/virtuals/14338/virtual/www/subdom/new/app/NeznasovModule/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'w2tca054cp')
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
	<title>demo</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.1.1.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
	<script src="js/jquery.js"></script>
	<script src="docs/_assets/js/jqm-docs.js"></script>
	<script src="js/jquery.mobile-1.1.1.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>
	
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
			<p>&copy; 2012 neznasov</p>
	</div>

</div>
</body>
</html>
