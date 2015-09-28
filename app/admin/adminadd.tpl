{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=header}
	HEADERLOCAL
{/block}
{block name=footer}
	FOOTERLOCAL
{/block}

{block name=content}
	<hr />
	{if $showid eq 1}
		{include file=$conf->root_path|cat:"/app/admin/adminAddUser.tpl"}
	{elseif $showid eq 2}
		{include file=$conf->root_path|cat:"/app/admin/adminAddActiv.tpl"}
	{else}
		{include file=$conf->root_path|cat:"/app/admin/adminAddPlan.tpl"}
	{/if}
	<hr />
{/block}