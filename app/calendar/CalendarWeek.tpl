<div class="calendarweek" >
<table width="12%" class="_fL" border="0" cellspacing="0" cellpadding="0">
	<caption>
	</caption>
	<thead class="header">
		<th>
		&nbsp;
		<br />
		Godz
		</th>
	</thead>

	{foreach item=item from=$getAllHours}
		<tr><td align="center">
		{$item.od} 
		</td></tr>
	{/foreach}
</table>

{for $i=0 to 6}
{$var = array() }
<table width="12%" class="_fL" border="0" cellspacing="0" cellpadding="0">
<caption>
	</caption>
	<thead class="header">
		<th>
		{$nameDayPl[$i]}
		<br />
		{$day = $calendar[0][$actualWeek-1][$i]}
		{$day}
		</th>
	</thead>
	{if array_key_exists($day, $plan)}
		{if is_array($plan.$day)}
			{foreach key=key item=item from=$plan.$day}
				{$var[$item.id] = {$item.nazwa}}
			{/foreach}
		{/if}
	{/if}
	{for $y=0 to 6}
	<tr>
	<td align='center'>	
	{if isset($var.$y)}
	{$var.$y}
	{else}
	&nbsp;
	{/if}
	</td>
	</tr>
	{/for}
</table>
{$var=null}
{/for}
</div>
<div style="clear:both" ></div>
