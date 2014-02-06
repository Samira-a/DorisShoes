<?php /* Smarty version Smarty-3.0.7, created on 2012-01-29 14:24:25
         compiled from "/home/a2012616/public_html/themes/prestashop_alt/./category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10131825474f259ce95bebe2-89281826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5164ef73a825f455b4395abb1227658c2a946fb' => 
    array (
      0 => '/home/a2012616/public_html/themes/prestashop_alt/./category-count.tpl',
      1 => 1327864766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10131825474f259ce95bebe2-89281826',
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