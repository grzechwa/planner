{$getYear}-{$getMonth} ----<br />

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

<table width="20%" style="float:left">
	<caption>
		Aktualny tydzien: {$actualWeek}
	</caption>
	<thead>
	<th></th>

		<th>
		{$nameDayPl[0]}
		</th>

	</thead>
	<tr>
	<td>
	{$calendar[0][$actualWeek][0]}
	</td>	
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
	</tr>
</table>

<table width="20%" style="float:left">
	<caption>
		Aktualny tydzien: {$actualWeek}
	</caption>
	<thead>
	<th></th>

		<th>
		{$nameDayPl[1]}
		</th>

	</thead>
	<tr>
	<td>
	{$calendar[0][$actualWeek][1]}
	</td>	
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
	</tr>
</table>
<br />
	-------- {$calendar[0][$actualWeek][0]} -------- <br />
	-------- {$calendar[0][$actualWeek][1]} --------<br />


