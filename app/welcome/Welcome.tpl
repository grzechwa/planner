{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=header}
	<div class="row">
	{include file=$conf->root_path|cat:"/app/snip/welcomeheader.tpl"}
	</div>

{/block}
{block name=footer}
	{include file=$conf->root_path|cat:"/app/snip/welcomefooter.tpl"}
{/block}

{block name=content}
	<hr />
	{if $type eq 1}
	{include file=$conf->root_path|cat:"/app/calendar/CalendarMonth.tpl"}
	{else}
	{include file=$conf->root_path|cat:"/app/calendar/CalendarDay.tpl"}
	{/if}
	<hr />
{/block}
