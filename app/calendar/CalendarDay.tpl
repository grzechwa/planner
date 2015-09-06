<table width="20%">
	<caption>

		Aktualny dzien tygodnia: {$actualWeekDay}
		Aktualny tydzien: {$actualWeek}

	</caption>
	<thead>
		<th>

			{$nameDayPl[$actualWeekDay-1]}

		</th>
	</thead>
	<tr>
		<td align="center">

		{$calendar[0][$actualWeek][$actualWeekDay-1]}

		</td>	
	</tr>

	{foreach item=item from=$getDay}
		<tr><td align="center">
		{$item.nazwa} 
		</td></tr>

	{/foreach}

</table>
