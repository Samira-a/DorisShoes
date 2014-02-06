<ul>
{foreach from=$virtualProducts item=product}
	<li>
		<a href="{$product.link}">{$product.name}</a>
		{if isset($product.deadline)}
			منقضی میشود در {$product.deadline}
		{/if}
		{if isset($product.downloadable)}
			تعداد {$product.downloadable} دفعه قابل دانلود
		{/if}
	</li>
{/foreach}
</ul>