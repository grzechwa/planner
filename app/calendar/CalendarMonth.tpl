<div class="calendarMonth" >
<table class="table" width="100%" class="_fL" border="0" cellspacing="0" cellpadding="0">
<caption>
	</caption>
	<thead class="header">
		{foreach item=name from=$nameDayPl}
		<th>
			<br />
			{$name}
			<br />
		</th>
		{/foreach}
	</thead>
	{foreach name=outer item=cal from=$calendar}
		<tr>
		{foreach key=key item=item from=$cal}

			{foreach item=value from=$item}
				{assign var="day" value="-"|explode:$value}
				{if $getTime == $value}
				<td id="{$day[2]}" align="center" style="background-color: silver">
				{$day[2]}
				</td>
				{else}
				<td id="{$day[2]}" align="center">
				{$day[2]}
				</td>
				{/if}
			{/foreach}
		</tr>
		{/foreach}
	{/foreach}
</table>
</div>
<div style="clear:both" ></div>
{$plan|@var_dump}

<script>
	
var test = {json_encode($plan)};
$(document).ready( function() {
    $('.table td').hover( 
    	function() {
	$(this).html("<span>" + test[$(this).attr("id")] + "</span><br />\n\
			<span>" + test[$(this).attr("id")][0]["count"] + "</span>");
	
    },
    	function() {
		$(this).html($("<span>" + $(this).attr("id") + "</span>"));
	}
	);
	
// $(this).attr($(this).attr("id"))
});
</script>