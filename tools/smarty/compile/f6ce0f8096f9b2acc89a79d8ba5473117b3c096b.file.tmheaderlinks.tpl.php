<?php /* Smarty version Smarty-3.0.7, created on 2012-02-13 19:14:47
         compiled from "/home/a2585048/public_html/modules/tmheaderlinks/tmheaderlinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13651070774f394507ddbe80-37618826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6ce0f8096f9b2acc89a79d8ba5473117b3c096b' => 
    array (
      0 => '/home/a2585048/public_html/modules/tmheaderlinks/tmheaderlinks.tpl',
      1 => 1328653038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13651070774f394507ddbe80-37618826',
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