<?php /* Smarty version Smarty-3.0.7, created on 2012-02-13 19:14:48
         compiled from "/home/a2585048/public_html/modules/tmflashblock/tmflashblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5520249774f3945088f48b5-99210763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1666bc0e1b774ecc59cf63e4e1eebb0922c56cc5' => 
    array (
      0 => '/home/a2585048/public_html/modules/tmflashblock/tmflashblock.tpl',
      1 => 1328653033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5520249774f3945088f48b5-99210763',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


				<?php if ($_smarty_tpl->getVariable('page_name')->value=='index'){?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('module_dir')->value;?>
flashobject.js"></script>
				<div id="tmflashblock">
					<div id="flashcontent">
						<div class="aligncenter">
							<a href="http://www.adobe.com/go/EN_US-H-GET-FLASH"><img src="http://www.adobe.com/images/shared/download_buttons/get_adobe_flash_player.png" alt="" /></a>
						</div>
					</div>
					<script type="text/javascript">
						var fo = new FlashObject("<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
modules/tmflashblock/flash/header_v8.swf?xmlUrl=<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
modules/tmflashblock/flash/", "head", "780", "500", "7", "");
						fo.addParam("quality", "high");
						fo.addParam("scale", "noscale");
						fo.addParam("wmode", "transparent");
						fo.write("flashcontent");
					</script>
				</div>
<?php }?>