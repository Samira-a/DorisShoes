<?php /* Smarty version Smarty-3.0.7, created on 2012-01-29 14:24:17
         compiled from "/home/a2012616/public_html/themes/prestashop_alt/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11639725374f259ce17ce196-11705072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0481769208798a9492c517f31141d2f44e645641' => 
    array (
      0 => '/home/a2012616/public_html/themes/prestashop_alt/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1327864814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11639725374f259ce17ce196-11705072',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block permanent links module HEADER -->
<div class="v2-header_links float" style="margin:7px 30px 0 150px;font-weight:700;color:#FFFFFF">
	<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
	| <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('sitemap.php');?>
" title="<?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
	| <script type="text/javascript">writeBookmarkLink('<?php echo $_smarty_tpl->getVariable('come_from')->value;?>
', '<?php echo addslashes(addslashes($_smarty_tpl->getVariable('meta_title')->value));?>
', '<?php echo smartyTranslate(array('s'=>'Bookmark','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
');</script>
</div>
<!-- /Block permanent links module HEADER -->
