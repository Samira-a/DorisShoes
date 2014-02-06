<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<h4><a href="{$link->getPageLink('prices-drop.php')}" title="{l s='Specials' mod='tmspecials'}">{l s='Specials' mod='tmspecials'}</a></h4>
	<div class="block_content ajax_block_product">
{if $special}
		<a class="product_image" href="{$special.link}"><img src="{$link->getImageLink($special.link_rewrite, $special.id_image, 'home_small')}" alt="{$special.legend|escape:html:'UTF-8'}" title="{$special.name|escape:html:'UTF-8'}" /></a>
		<h5><a href="{$special.link}" title="{$special.name|escape:html:'UTF-8'}">{$special.name|escape:html:'UTF-8'}</a></h5>
		<span class="price-discount">{if !$priceDisplay}{displayWtPrice p=$special.price_without_reduction}{else}{displayWtPrice p=$priceWithoutReduction_tax_excl}{/if}</span>
		<span class="price">{if !$priceDisplay}{displayWtPrice p=$special.price}{else}{displayWtPrice p=$special.price_tax_exc}{/if}</span>
<div>
		{if ($special.id_product_attribute == 0 OR (isset($add_prod_display) AND ($add_prod_display == 1))) AND $special.available_for_order AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
			{if ($special.quantity > 0 OR $special.allow_oosp) AND $special.customizable != 2}
			<a class="button_large ajax_add_to_cart_button" rel="ajax_id_product_{$special.id_product}" href="{$link->getPageLink('cart.php')}?qty=1&amp;id_product={$special.id_product}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='homefeatured'}">{l s='Add to cart' mod='tmspecials'}</a>
			{else}
			<span class="button_large">{l s='Add to cart' mod='tmspecials'}</span>
			{/if}
		{/if}
</div>
{else}
		<p>{l s='No specials at this time' mod='tmspecials'}</p>
{/if}
	</div>
</div>
<!-- /MODULE Block specials -->