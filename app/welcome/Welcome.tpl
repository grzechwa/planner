{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=header}HEADERLOCAL{/block}
{block name=footer}FOOTERLOCAL{/block}

{block name=content}
	<hr />
	{include file=$conf->root_path|cat:"/app/calendar/CalendarDay.tpl"}
	<hr />
{/block}
