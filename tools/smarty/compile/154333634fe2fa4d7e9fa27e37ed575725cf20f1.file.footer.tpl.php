<?php /* Smarty version Smarty-3.0.7, created on 2012-01-30 16:44:58
         compiled from "/home/a2012616/public_html/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1789067444f26aceab7dca5-21628652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154333634fe2fa4d7e9fa27e37ed575725cf20f1' => 
    array (
      0 => '/home/a2012616/public_html/themes/prestashop/footer.tpl',
      1 => 1327812476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1789067444f26aceab7dca5-21628652',
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
			<div id="footer"><?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>
</div>
		</div>
	<?php }?>
	</body>
</html>
