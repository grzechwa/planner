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
	{foreach name=outer item=cal from=$calendar}
		<tr>
		{foreach key=key item=item from=$cal}

			{foreach item=value from=$item}
				<td align="center">
				{$value}
				</td>
			{/foreach}
		</tr>
		{/foreach}
	{/foreach}
</table>
