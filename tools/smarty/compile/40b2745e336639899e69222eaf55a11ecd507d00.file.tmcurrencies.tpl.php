<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 20:57:32
         compiled from "/home/a2012616/public_html/modules/tmcurrencies/tmcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5222113514f31741c48d306-51010003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40b2745e336639899e69222eaf55a11ecd507d00' => 
    array (
      0 => '/home/a2012616/public_html/modules/tmcurrencies/tmcurrencies.tpl',
      1 => 1327934486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5222113514f31741c48d306-51010003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- TM Currencies module -->
<div id="tmcurrencies">
	<form id="setCurrency" action="<?php echo $_smarty_tpl->getVariable('request_uri')->value;?>
" method="post">
		<label><?php echo smartyTranslate(array('s'=>'Currency','mod'=>'tmcurrencies'),$_smarty_tpl);?>
:</label>
		<select onchange="setCurrency(this.value);">
			<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('currencies')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
				<option  value="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
"<?php if ($_smarty_tpl->getVariable('id_currency_cookie')->value==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
</option>
			<?php }} ?>
		</select>
		<input type="hidden" name="id_currency" id="id_currency" value=""/>
		<input type="hidden" name="SubmitCurrency" value="" />
	</form>
</div>
<!-- /TM Currencies module -->