<?php /* Smarty version Smarty-3.0.7, created on 2012-02-12 19:28:23
         compiled from "/home/a2585048/public_html/themes/theme138/./product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11804271094f37f6b75beab1-59545555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c55eaf8f3321c1157420f58265db539e9ff929d3' => 
    array (
      0 => '/home/a2585048/public_html/themes/theme138/./product-compare.tpl',
      1 => 1328655513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11804271094f37f6b75beab1-59545555',
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