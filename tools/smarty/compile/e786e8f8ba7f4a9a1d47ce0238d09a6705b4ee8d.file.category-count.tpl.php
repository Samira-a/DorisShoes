<?php /* Smarty version Smarty-3.0.7, created on 2012-01-30 16:44:57
         compiled from "/home/a2012616/public_html/themes/prestashop/./category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16575209744f26ace9898999-65323461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e786e8f8ba7f4a9a1d47ce0238d09a6705b4ee8d' => 
    array (
      0 => '/home/a2012616/public_html/themes/prestashop/./category-count.tpl',
      1 => 1327812474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16575209744f26ace9898999-65323461',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('category')->value->id==1||$_smarty_tpl->getVariable('nb_products')->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'There is'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are'),$_smarty_tpl);?>
<?php }?>
	<?php echo $_smarty_tpl->getVariable('nb_products')->value;?>

	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'product.'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'products.'),$_smarty_tpl);?>
<?php }?>
<?php }?>