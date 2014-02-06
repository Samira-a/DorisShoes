<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 20:57:33
         compiled from "/home/a2012616/public_html/modules/tmspecials/tmspecials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2200485234f31741d51e064-89019758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eba06487484e5177d49a78e2203ee286ae9995b7' => 
    array (
      0 => '/home/a2012616/public_html/modules/tmspecials/tmspecials.tpl',
      1 => 1327934526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2200485234f31741d51e064-89019758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/a2012616/public_html/tools/smarty/plugins/modifier.escape.php';
?><!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<h4><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('prices-drop.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'tmspecials'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'tmspecials'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content ajax_block_product">
<?php if ($_smarty_tpl->getVariable('special')->value){?>
		<a class="product_image" href="<?php echo $_smarty_tpl->getVariable('special')->value['link'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->getVariable('special')->value['link_rewrite'],$_smarty_tpl->getVariable('special')->value['id_image'],'home_small');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('special')->value['legend'],'html','UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('special')->value['name'],'html','UTF-8');?>
" /></a>
		<h5><a href="<?php echo $_smarty_tpl->getVariable('special')->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('special')->value['name'],'html','UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('special')->value['name'],'html','UTF-8');?>
</a></h5>
		<span class="price-discount"><?php if (!$_smarty_tpl->getVariable('priceDisplay')->value){?><?php echo Product::displayWtPrice(array('p'=>$_smarty_tpl->getVariable('special')->value['price_without_reduction']),$_smarty_tpl);?>
<?php }else{ ?><?php echo Product::displayWtPrice(array('p'=>$_smarty_tpl->getVariable('priceWithoutReduction_tax_excl')->value),$_smarty_tpl);?>
<?php }?></span>
		<span class="price"><?php if (!$_smarty_tpl->getVariable('priceDisplay')->value){?><?php echo Product::displayWtPrice(array('p'=>$_smarty_tpl->getVariable('special')->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo Product::displayWtPrice(array('p'=>$_smarty_tpl->getVariable('special')->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span>
<div>
		<?php if (($_smarty_tpl->getVariable('special')->value['id_product_attribute']==0||(isset($_smarty_tpl->getVariable('add_prod_display',null,true,false)->value)&&($_smarty_tpl->getVariable('add_prod_display')->value==1)))&&$_smarty_tpl->getVariable('special')->value['available_for_order']&&!isset($_smarty_tpl->getVariable('restricted_country_mode',null,true,false)->value)&&!$_smarty_tpl->getVariable('PS_CATALOG_MODE')->value){?>
			<?php if (($_smarty_tpl->getVariable('special')->value['quantity']>0||$_smarty_tpl->getVariable('special')->value['allow_oosp'])&&$_smarty_tpl->getVariable('special')->value['customizable']!=2){?>
			<a class="button_large ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->getVariable('special')->value['id_product'];?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php');?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->getVariable('special')->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->getVariable('static_token')->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeatured'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'tmspecials'),$_smarty_tpl);?>
</a>
			<?php }else{ ?>
			<span class="button_large"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'tmspecials'),$_smarty_tpl);?>
</span>
			<?php }?>
		<?php }?>
</div>
<?php }else{ ?>
		<p><?php echo smartyTranslate(array('s'=>'No specials at this time','mod'=>'tmspecials'),$_smarty_tpl);?>
</p>
<?php }?>
	</div>
</div>
<!-- /MODULE Block specials -->