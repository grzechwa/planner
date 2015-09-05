<table width="20%">
	<caption>
		Aktualny tydzien: {$actualWeek}
	</caption>
	<thead>
		{foreach item=name from=$nameDayPl}
		<th>
			{$name}
		</th>
		{/foreach}
	</thead>
	<tr>
	{foreach name=outer key=key item=cal from=$calendar[0][$actualWeek-1]}
		<td align="center">
			{$cal}
		</td>	
	{/foreach}
	</tr>
</table>
