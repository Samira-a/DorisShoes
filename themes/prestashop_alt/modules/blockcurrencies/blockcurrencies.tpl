{*
* 2007-2010 PrestaShop 
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
*  @author Prestashop SA <contact@prestashop.com>
*  @copyright  2007-2010 Prestashop SA
*  @version  Release: $Revision: 1.4 $
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*}

{if $currencies|@count}
<!-- Block currencies module -->
<form class="float" action="" style="margin:5px 0 0 10px">
	<select style="width:150px" onchange="setCurrency(this.options[this.selectedIndex].value)">
	{foreach from=$currencies key=k item=f_currency}
		<option
			value="{$f_currency.id_currency}"
			{if $id_currency_cookie == $f_currency.id_currency}selected="selected"{/if}>
			{$f_currency.name}
		</option>
	{/foreach}
	</select>
	<input type="hidden" name="id_currency" id="id_currency" value="" />
	<input type="hidden" name="SubmitCurrency" value="" />
</form>
<!-- /Block currencies module -->
{/if}