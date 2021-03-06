<!-- Block user information module HEADER -->
<ul id="header_user">
	<li id="header_user_info">
		{l s='Welcome' mod='blockuserinfo'},
		{if $cookie->isLogged()}
			<span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span>
			<a href="{$link->getPageLink('index.php')}?mylogout" title="{l s='Log me out' mod='blockuserinfo'}">(&nbsp;{l s='Log out' mod='blockuserinfo'}&nbsp;)</a>
		{else}
			<a href="{$link->getPageLink('my-account.php', true)}">(&nbsp;{l s='Log in' mod='blockuserinfo'}&nbsp;)</a>
		{/if}
	</li>
	<li id="your_account"><a href="{$link->getPageLink('my-account.php', true)}" title="{l s='Your Account' mod='blockuserinfo'}">{l s='Your Account' mod='blockuserinfo'}</a></li>
	<li id="shopping_cart">
		{if !$PS_CATALOG_MODE}
		<a href="{$link->getPageLink("$order_process.php", true)}" title="{l s='Your Shopping Cart' mod='blockuserinfo'}">{l s='Cart:' mod='blockuserinfo'}</a>
		<span class="ajax_cart_quantity{if $cart_qties == 0} hidden{/if}">{$cart_qties}</span>
		<span class="ajax_cart_product_txt{if $cart_qties != 1} hidden{/if}">{l s='product' mod='blockuserinfo'}</span>
		<span class="ajax_cart_product_txt_s{if $cart_qties < 2} hidden{/if}">{l s='products' mod='blockuserinfo'}</span>
		{if $cart_qties >= 0}
			<span class="ajax_cart_total{if $cart_qties == 0} hidden{/if}">
				{if $priceDisplay == 1}
					{assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
					{convertPrice price=$cart->getOrderTotal(false, $blockuser_cart_flag)}
				{else}
					{assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
					{convertPrice price=$cart->getOrderTotal(true, $blockuser_cart_flag)}
				{/if}
			</span>
		{/if}
		<span class="ajax_cart_no_product{if $cart_qties > 0} hidden{/if}">{l s='(empty)' mod='blockuserinfo'}</span>
		{/if}
	</li>
</ul>
<!-- /Block user information module HEADER -->