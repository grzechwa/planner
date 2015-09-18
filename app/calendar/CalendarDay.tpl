<div class="calendarday _fL" >
	<div id="navday">
		<div id="prevd"> 
			<a href="?date={$getYear},{$getMonth},{$getDay}&prevm">PREVMONTH</a>  <br />
			<a href="?date={$getYear},{$getMonth},{$getDay}&prevd">PREVDAY</a>  <br />
		</div>
		<div id="nextd"> 
			<a href="?date={$getYear},{$getMonth},{$getDay}&nextm">NEXTMONTH</a> <br >
			<a href="?date={$getYear},{$getMonth},{$getDay}&nextd">NEXTDAY</a> <br >
		</div>
	</div>
	<div class="clear"></div>
	
	{* godziny *}
	<table width="30%" class="_fL" border="0" cellspacing="0" cellpadding="0">
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

	{* zajecia *}
	{$var = array() }
	<table width="40 %" class="table _fL" border="0" cellspacing="0" cellpadding="0">
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

		{* TODO: podac wielkosc tabeli godziny*}
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
		<div class="danemiddle" >
	     	</div>

		<div class="danebottom" >
			Zapis na zajecia
			<form action="{$conf->action_root}add" method="post">
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

		$('div.danebottom form').append('<input type="hidden" value="'+ loops.planid + '" name="planid" id="' + loops.planid +  '"/>');
		$('div.danebottom form').append('<input type="hidden" value="2" name="userid" id="aaa" />');

		// var a = new String(); 
		var a = loops.imie.toString();
		

		var x = new Array();
		x = a.split(",");
	
		$('.danemiddle').html("<br /><span></span>");

		if(x !== null) {
			for(var i in x) {
				$('.danemiddle').append("<br /><span>" + x[i] + "</span>");
			}
		}
	}
	
    );
});
</script>