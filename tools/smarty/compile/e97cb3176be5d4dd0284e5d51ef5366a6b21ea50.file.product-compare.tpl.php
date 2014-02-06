<?php /* Smarty version Smarty-3.0.7, created on 2012-01-29 14:24:25
         compiled from "/home/a2012616/public_html/themes/prestashop_alt/./product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7771139474f259ce9921e74-67829268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e97cb3176be5d4dd0284e5d51ef5366a6b21ea50' => 
    array (
      0 => '/home/a2012616/public_html/themes/prestashop_alt/./product-compare.tpl',
      1 => 1327864772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7771139474f259ce9921e74-67829268',
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
	<form method="get" action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('products-comparison.php',true);?>
" onsubmit="true">
		<p>
		<input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" style="float:right" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

