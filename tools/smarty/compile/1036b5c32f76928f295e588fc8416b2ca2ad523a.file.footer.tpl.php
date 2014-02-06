<?php /* Smarty version Smarty-3.0.7, created on 2012-01-29 14:24:18
         compiled from "/home/a2012616/public_html/themes/prestashop_alt/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232355144f259ce21613d5-13526374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1036b5c32f76928f295e588fc8416b2ca2ad523a' => 
    array (
      0 => '/home/a2012616/public_html/themes/prestashop_alt/footer.tpl',
      1 => 1327864767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232355144f259ce21613d5-13526374',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;?>

				</div>
			</div>

<!-- Footer -->
			<div class="flatclear">&nbsp;</div>
		</div>
		<div id="v2-footer">
			<div id="v2-footer_content" style="padding-top:2px">
				<div style="width:200px;text-align:left;float:left;margin:5px 10px 0 0">
					<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
v2-logo.png" style="margin:4px 0 0 20px;height:36px" alt="PrestaShop" /><br />
					<div style="margin:8px 12px"><?php echo smartyTranslate(array('s'=>'Powered by'),$_smarty_tpl);?>
 PrestaShop&trade;</div>
					<a href="http://www.prestashop.com/" style="margin:4px 12px;text-decoration:underline">www.prestashop.com</a>
				</div>
				<div class="float" style="width:200px;margin:5px 10px 0 0">
					<h4 style="border-bottom:2px solid #384855;margin-bottom:5px;padding-bottom:5px"><?php echo smartyTranslate(array('s'=>'Sitemap'),$_smarty_tpl);?>
</h4>
					<ul class="v2-ulfooter">
						<li><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php',true);?>
"><?php echo smartyTranslate(array('s'=>'Contact us'),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('sitemap.php');?>
"><?php echo smartyTranslate(array('s'=>'Sitemap'),$_smarty_tpl);?>
</a></li>
					</ul>
				</div>
				<div class="float" style="width:200px;margin:5px 10px 0 0">
					<h4 style="border-bottom:2px solid #384855;margin-bottom:5px;padding-bottom:5px"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</h4>
					<ul class="v2-ulfooter">						
						<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('history.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My orders'),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-slip.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My credit slips'),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('addresses.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('identity.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My personal information'),$_smarty_tpl);?>
</a></li>
					</ul>
				</div>
				<div class="float" style="width:200px;margin:5px 10px 0 0">
					<?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>

				</div>
			</div>
		</div>
	<?php }?>
	</body>
</html>
