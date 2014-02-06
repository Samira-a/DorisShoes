<?php /* Smarty version Smarty-3.0.7, created on 2012-01-29 14:24:17
         compiled from "/home/a2012616/public_html/themes/prestashop_alt/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9504998364f259ce1886a19-48529076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '252f310288d45a17bb6ca1ad8060202761092c43' => 
    array (
      0 => '/home/a2012616/public_html/themes/prestashop_alt/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1327864818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9504998364f259ce1886a19-48529076',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block user information module HEADER -->
<?php if ($_smarty_tpl->getVariable('logged')->value){?>
	<div class="v2-header_links floatr" style="margin:7px 30px 0 0;font-weight:700;color:#FFFFFF;height:37px">
		<?php echo $_smarty_tpl->getVariable('customerName')->value;?>
 (<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>)
	</div>
<?php }else{ ?>
	<div class="floatr">
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
" class="v2-signin">
			<span><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
		</a>
	</div>
<?php }?>
<div class="flatclear">&nbsp;</div>
<!-- /Block user information module HEADER -->
