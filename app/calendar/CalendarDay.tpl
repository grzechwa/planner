<table width="20%" style="float:left">
	<caption>
<br />
<br />
	</caption>
	<thead>
		<th>
		Godz
		</th>
	</thead>
	<tr
	{foreach item=item from=$getAllHours}
		<tr><td align="center">
		{$item.od} 
		</td></tr>

	{/foreach}
</table>





{* na razie dla akutalnego dnia, przerobic dla get *}
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

	</tr>

</table>
