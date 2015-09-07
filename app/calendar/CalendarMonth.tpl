<table witdh="20%">
	<caption>
		Aktualny miesiac: {$actualMonth}
	</caption>
	<thead>
		{foreach item=name from=$nameDayPl}
		<th>
			{$name}
		</th>
		{/foreach}
	</thead>
	{$getTime}
	{foreach name=outer item=cal from=$calendar}
		<tr>
		{foreach key=key item=item from=$cal}

			{foreach item=value from=$item}
				{assign var="day" value="-"|explode:$value}
				{if $getTime == $value}
				<td align="center" style="background-color: silver">
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
