<?php /* Smarty version Smarty-3.0.7, created on 2012-01-29 14:24:17
         compiled from "/home/a2012616/public_html/themes/prestashop_alt/modules/blocklanguages/blocklanguages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5647342374f259ce172e1a2-41868264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87e8665643499360a4029bb72670086416a737f5' => 
    array (
      0 => '/home/a2012616/public_html/themes/prestashop_alt/modules/blocklanguages/blocklanguages.tpl',
      1 => 1327864814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5647342374f259ce172e1a2-41868264',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if (count($_smarty_tpl->getVariable('languages')->value)){?>
<!-- Block languages module -->
<form class="float" action="" style="margin:5px 0 0 0">
	<select style="width:150px" onchange="document.location = this.options[this.selectedIndex].value">
	<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('languages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
		<option
			value="<?php if (isset($_smarty_tpl->getVariable('lang_rewrite_urls',null,true,false)->value[$_smarty_tpl->getVariable('indice_lang',null,true,false)->value])){?><?php echo $_smarty_tpl->getVariable('lang_rewrite_urls')->value[$_smarty_tpl->getVariable('indice_lang')->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('link')->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang'],$_smarty_tpl->tpl_vars['language']->value['name']);?>
<?php }?>"
			<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->getVariable('lang_iso')->value){?>selected="selected"<?php }?>>
			<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

		</option>
	<?php }} ?>
	</select>
</form>
<?php }?>