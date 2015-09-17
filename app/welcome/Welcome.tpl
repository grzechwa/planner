{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=header}HEADERLOCAL{/block}
{block name=footer}FOOTERLOCAL{/block}

{block name=content}
	<hr />
	{if $type eq 1}
	{include file=$conf->root_path|cat:"/app/calendar/CalendarMonth.tpl"}
	{else}
	{include file=$conf->root_path|cat:"/app/calendar/CalendarDay.tpl"}
	{/if}
	<hr />
{/block}
