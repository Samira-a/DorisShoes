<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 20:57:31
         compiled from "/home/a2012616/public_html/modules/tmheaderlinks/tmheaderlinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2494415494f31741b99a089-96371920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e515ec09485d8cc8329eb0b160610f98ea655178' => 
    array (
      0 => '/home/a2012616/public_html/modules/tmheaderlinks/tmheaderlinks.tpl',
      1 => 1327934520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2494415494f31741b99a089-96371920',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul id="header_links">
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
"<?php if ($_smarty_tpl->getVariable('page_name')->value=='index'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'home','mod'=>'tmheaderlinks'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('prices-drop.php');?>
"<?php if ($_smarty_tpl->getVariable('page_name')->value=='prices-drop'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'specials','mod'=>'tmheaderlinks'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('sitemap.php');?>
"<?php if ($_smarty_tpl->getVariable('page_name')->value=='sitemap'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'tmheaderlinks'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php');?>
"<?php if ($_smarty_tpl->getVariable('page_name')->value=='contact-form'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'contact','mod'=>'tmheaderlinks'),$_smarty_tpl);?>
</a></li>
</ul>
<!-- /Block permanent links module -->