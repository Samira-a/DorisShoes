<!-- TM Currencies module -->
<div id="tmcurrencies">
	<form id="setCurrency" action="{$request_uri}" method="post">
		<label>{l s='Currency' mod='tmcurrencies'}:</label>
		<select onchange="setCurrency(this.value);">
			{foreach from=$currencies key=k item=f_currency}
				<option  value="{$f_currency.id_currency}"{if $id_currency_cookie == $f_currency.id_currency} selected="selected"{/if}>{$f_currency.name}</option>
			{/foreach}
		</select>
		<input type="hidden" name="id_currency" id="id_currency" value=""/>
		<input type="hidden" name="SubmitCurrency" value="" />
	</form>
</div>
<!-- /TM Currencies module -->