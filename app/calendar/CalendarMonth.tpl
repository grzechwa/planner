<div class="calendarMonth" >
<table width="100%" class="_fL" border="0" cellspacing="0" cellpadding="0">
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
				<td align="center">
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
<script>
$(document).ready( function() {

    $('#8').hover( 
    	function() {
        // alert("The paragraph was clicked.");
	$(this).append($("<span> HOVERING!!!!! </span>"));
    },
    	function() {
		$(this).html($("8"));
	}
	);
	
});
</script>
