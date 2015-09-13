<div class="calendarday" >
<table width="40%" class="_fL" border="0" cellspacing="0" cellpadding="0">
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





{* na razie dla akutalnego dnia, przerobic dla get *}
{$var = array() }
<table width="40 %" class="table _fL" border="0" cellspacing="0" cellpadding="0">
	<caption>
	</caption>
	<thead class="header">
		<th>
		{$nameDay}
		<br />
		{$day = $getDate}
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
	{* podac wielkosc tabeli godziny*}
	{for $y=0 to 6}
	<tr>
		<td id={$y} align='center' class="today">	
		{if isset($var.$y)}
		{$var.$y}
		{else}
		&nbsp;
		{/if}
		</td>
	</tr>
	{/for}
</table>

</div>
<div class="dane _fR" >

	<div class="danetop" >
	DANE:
	</div>
	<div class="danebottom" >
	Zapis na zajecia
	</div>
</div>
<div class="clear" ></div>

<script>
// dane z tablicy plan
var test = {json_encode($plan.$day)};

$(document).ready( function() {
    $('.table td').click( 
    	function() {
		var loops = test[$(this).attr("id")];
		
		for(var i in loops.imie[0]) {
			$('.danetop').append("<br /><span>" + loops.imie[0][i] + "</span>");
		}


    	}
    );
});
</script>