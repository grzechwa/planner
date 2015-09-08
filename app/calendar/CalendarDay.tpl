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
{$var = array()}
{foreach key=key item=item from=$getDay}
	{$var[] = $item.id}
	{$zaj[] = $item.nazwa}
{/foreach}

{$count=0}
	{for $foo=1 to 8}
		<tr><td>
		{if in_array($foo, $var)}
			{$zaj[$count++]}
			{else}
			&nbsp;
		{/if}
		</td></tr>
	{/for}

</table>
