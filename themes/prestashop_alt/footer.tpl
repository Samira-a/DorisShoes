{*
* 2007-2011 PrestaShop 
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 6969 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

		{if !$content_only}
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					{$HOOK_RIGHT_COLUMN}
				</div>
			</div>

<!-- Footer -->
			<div class="flatclear">&nbsp;</div>
		</div>
		<div id="v2-footer">
			<div id="v2-footer_content" style="padding-top:2px">
				<div style="width:200px;text-align:left;float:left;margin:5px 10px 0 0">
					<img src="{$img_dir}v2-logo.png" style="margin:4px 0 0 20px;height:36px" alt="PrestaShop" /><br />
					<div style="margin:8px 12px">{l s='Powered by'} PrestaShop&trade;</div>
					<a href="http://www.prestashop.com/" style="margin:4px 12px;text-decoration:underline">www.prestashop.com</a>
				</div>
				<div class="float" style="width:200px;margin:5px 10px 0 0">
					<h4 style="border-bottom:2px solid #384855;margin-bottom:5px;padding-bottom:5px">{l s='Sitemap'}</h4>
					<ul class="v2-ulfooter">
						<li><a href="{$base_dir}">{l s='Home'}</a></li>
						<li><a href="{$link->getPageLink('contact-form.php', true)}">{l s='Contact us'}</a></li>
						<li><a href="{$link->getPageLink('sitemap.php')}">{l s='Sitemap'}</a></li>
					</ul>
				</div>
				<div class="float" style="width:200px;margin:5px 10px 0 0">
					<h4 style="border-bottom:2px solid #384855;margin-bottom:5px;padding-bottom:5px">{l s='My account'}</h4>
					<ul class="v2-ulfooter">						
						<li><a href="{$link->getPageLink('my-account.php', true)}" title="{l s='My account'}">{l s='My account'}</a></li>
						<li><a href="{$link->getPageLink('history.php', true)}" title="{l s='Orders'}">{l s='My orders'}</a></li>
						<li><a href="{$link->getPageLink('order-slip.php', true)}" title="{l s='Credit slips'}">{l s='My credit slips'}</a></li>
						<li><a href="{$link->getPageLink('addresses.php', true)}" title="{l s='Addresses'}">{l s='My addresses'}</a></li>
						<li><a href="{$link->getPageLink('identity.php', true)}" title="{l s='Information'}">{l s='My personal information'}</a></li>
					</ul>
				</div>
				<div class="float" style="width:200px;margin:5px 10px 0 0">
					{$HOOK_FOOTER}
				</div>
			</div>
		</div>
	{/if}
	</body>
</html>
