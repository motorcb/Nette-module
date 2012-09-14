<?php //netteCache[01]000419a:2:{s:4:"time";s:21:"0.27529100 1347614787";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:97:"/data/web/virtuals/14338/virtual/www/subdom/new/app/MobileModule/templates/Homepage/default.latte";i:2;i:1347614784;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: /data/web/virtuals/14338/virtual/www/subdom/new/app/MobileModule/templates/Homepage/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'lwo5zm60na')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb8e5343723_content')) { function _lbb8e5343723_content($_l, $_args) { extract($_args)
?>    <h1>Mobilni verze</h1>
    
    Proč oba obrázky uvedené níže se načítájí ze složky m/obrazek.jpg ????<br />
    Jak jednoduše docílím toho aby <?php echo Nette\Templating\Helpers::escapeHtml($basePath, ENT_NOQUOTES) ?> v tomot modulu odkazoval na stejnou adresu jako v modulu new???</br>
    </br>
    Jde mi o zobrazení obrázku na této pozici: ../new/www/pictures/mobile/obrazek.jpg<br />
    Dokonce ani posledním příkazem ho nezobrazím.
    Hosting mám u Wedosu. Dokázal by někdo poradit?
     
    <br />
    <img src="obrazek.jpg" />
    <hr />
    <img src="<?php echo htmlSpecialChars($basePath) ?>/obrazek.jpg" />
    <hr />
    <img src="/../new/www/pictures/mobile/obrazek.jpg" />
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 