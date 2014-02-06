{*

<div id="tmflashblock">
	<a href="http://www.adobe.com/go/EN_US-H-GET-FLASH"><img src="http://www.adobe.com/images/shared/download_buttons/get_adobe_flash_player.png" alt="" /></a>
	<script type="text/javascript">
		var fo = new FlashObject("{$base_dir}modules/tmflashblock/flash/header_v8.swf?xmlUrl={$base_dir}modules/tmflashblock/flash/", "head", "780", "882", "7", "");
		fo.addParam("quality", "high");
		fo.addParam("scale", "noscale");
		fo.addParam("wmode", "transparent");
		fo.write("flashcontent");
	</script>
</div>
*}

				{if $page_name=='index'}
<script type="text/javascript" src="{$module_dir}flashobject.js"></script>
				<div id="tmflashblock">
					<div id="flashcontent">
						<div class="aligncenter">
							<a href="http://www.adobe.com/go/EN_US-H-GET-FLASH"><img src="http://www.adobe.com/images/shared/download_buttons/get_adobe_flash_player.png" alt="" /></a>
						</div>
					</div>
					<script type="text/javascript">
						var fo = new FlashObject("{$base_dir}modules/tmflashblock/flash/header_v8.swf?xmlUrl={$base_dir}modules/tmflashblock/flash/", "head", "780", "882", "7", "");
						fo.addParam("quality", "high");
						fo.addParam("scale", "noscale");
						fo.addParam("wmode", "transparent");
						fo.write("flashcontent");
					</script>
				</div>
{/if}