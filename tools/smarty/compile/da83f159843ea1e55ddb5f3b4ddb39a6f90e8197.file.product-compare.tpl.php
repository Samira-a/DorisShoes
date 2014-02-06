<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 05:09:08
         compiled from "/home/a2012616/public_html/themes/theme138/./product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20791460464f3095d44b73c2-63575791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da83f159843ea1e55ddb5f3b4ddb39a6f90e8197' => 
    array (
      0 => '/home/a2012616/public_html/themes/theme138/./product-compare.tpl',
      1 => 1327934622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20791460464f3095d44b73c2-63575791',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('comparator_max_item')->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product.','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->getVariable('comparator_max_item')->value;?>
 <?php echo smartyTranslate(array('s'=>'product(s) in the product comparator','js'=>1),$_smarty_tpl);?>
";
//]]>
</script>
<form class="product_compare" method="get" action="products-comparison.php" onsubmit="return checkBeforeComparison();">
	<input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" style="float:right" />
	<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
</form>
<?php }?>