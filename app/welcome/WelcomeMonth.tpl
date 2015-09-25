{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=header}
	<div class="row">
	{include file=$conf->root_path|cat:"/app/snip/welcomeheader.tpl"}
	</div>

{/block}
{block name=footer}
	<div class="row">
	{include file=$conf->root_path|cat:"/app/snip/welcomefooter.tpl"}
	</div>
{/block}

{block name=content}
	{include file=$conf->root_path|cat:"/app/calendar/CalendarMonth.tpl"}
{/block}
