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
	{$count=0}
	{for $y=0 to 6}
	<tr>
		{if isset($var.$y)}

		<td id={$count++} align='center' class="today">	
		
		{$var.$y}


		{else}
		<td align='center' class="today">	
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
	<form action="?add" >
	    {*TODO validacja danych *}
	    <button type="submit"> Dodaj sie </button>
	</form>
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
		
		// alert(loops.imie[0]);
		var a = new String(); 
		a = loops.imie.toString();
		var x = new Array();
		x = a.split(",");

		// alert(x[1]);

	
	 
		for(var i in x) {
			$('.danetop').append("<br /><span>" + x[i] + "</span>");
		}

		

		$.map(loops.imie, function(value, key) {
		  // console.log(key, value);
			  $('.danetop').append("<br /><span>" + j   +  "</span>");
		// $('.danetop').append("<br /><span>" + value + key  +  "</span>");
		// ss = value;
		});




    	}
    );
});
</script>