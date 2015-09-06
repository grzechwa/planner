{$getYear}-{$getMonth} ----<br />

<table width="30%">
	<caption>
		Aktualny tydzien: {$actualWeek}
	</caption>
	<thead>
	<th></th>
		{foreach item=name from=$nameDayPl}
		<th>
			{$name}
		</th>
		{/foreach}
	</thead>
	<tr>
	<td></td>
	{foreach name=outer item=cal from=$calendar[0][$actualWeek-1]}
		<td align="center">
			{foreach key=key item=inner from=$cal}
			{$key} ----- {$inner} 
			{/foreach}
		</td>	


	{/foreach}
	</tr>
{* 
		{foreach item=item from=$getSinceTo}
	<tr>
		<td>
			{$item.od} - {$item.do}<br />
		</td>
		{for $foo=0 to 6 }
		<td>a</td>
		{/for}
	</tr>
	{/foreach}

*}
</table>
{*
{foreach item=item key=key from=$getPlanZajecia}
	 {$item.data} <br />
{/foreach}
*}





