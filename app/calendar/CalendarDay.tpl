<div class="calendarday _fL" >

	<div id="navday" class="container">
		<div id="prevd" class="col-md-2"> 
			<a href="?date={$getYear},{$getMonth},{$getDay}&prevm">PREVMONTH</a>  <br />
			<a href="?date={$getYear},{$getMonth},{$getDay}&prevd">PREVDAY</a>  <br />
		</div>
		<div id="nextd" class="col-md-3"> 
			<a href="?date={$getYear},{$getMonth},{$getDay}&nextm">NEXTMONTH</a> <br >
			<a href="?date={$getYear},{$getMonth},{$getDay}&nextd">NEXTDAY</a> <br >
		</div>
		<div class="col-md-7"></div>
	</div>
	<div class="clear"></div>
	
	<div class="container">
	{* godziny *}
	<table width="30%" class=" _fL col-md-2" border="0" cellspacing="0" cellpadding="0">
		<thead class="header ">
			<th class="text-center">
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
	<table width="40 %" class="tab _fL col-md-3" border="0" cellspacing="0" cellpadding="0">
		<thead class="header ">
			<th class="text-center">
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

	{* dane *}
	<div class="dane _fR col-md-offset-2 col-md-5" >
		<div class="danetop row" >
			<h3 class="">Lista zapisanych</h3>
		</div>
		<div class="danemiddle row" >
	     	</div>

		<div class="danebottom row" >

			<form action="{$conf->action_root}add" method="post">
			    {*TODO validacja danych *}
			    <button type="submit"> Dopisz sie </button>
			</form>
		</div>
	</div>
	</div>

	</div>

<div class="clear" ></div>

<script>
// dane z tablicy plan
var jqplan = {json_encode($plan.$day)};

$(document).ready( function() {
    $('.tab td').click( 
	function() {
		var item = jqplan[$(this).attr("id")];
		// alert('hej');
		if(typeof item !== 'undefined') {
		// dodanie ukrytych pol do formularza
		// TODO: usuwanie ukrytych pol przed jq
		$('div.danebottom form').append('<input type="hidden" value="'+ item.planid + '" name="planid" id="' + item.planid +  '"/>');
		$('div.danebottom form').append('<input type="hidden" value="2" name="userid" id="aaa" />');

		// przygotowanie do wyswietlenia imion
		var itemName = new Array();
		itemName = item.imie.toString().split(",");
		$('.danemiddle').html("<br /><span></span>");


		var formstart = {json_encode($conf->action_root)};
		// alert(formstart);
		// wyswietlenie imion w obszarze danemiddle
		if(itemName !== 'undefined') {
			for(var i in itemName) {
				$('.danemiddle').append("<br /><span>" + itemName[i] + "</span>");
			}

			if(".danemiddle:contains('aaa')"){
				$('.danebottom button').html("Ususn sie");
				$('.danebottom form').attr('action', formstart+ 'del');
			} 
		} 

		} else {
			// alert(item);
			$('.danemiddle').html("<span></span>");
			$('.danebottom button').html("<div>Dodaj sie</di>");
		}


		// $('.danemiddle').change();
	}
    ),
    $('.danemiddle').change(
    	function() {
		// alert('hej');
		// $( ".danemiddle:contains('aaa')" ).css( "text-decoration", "underline" );
			// if($(".danemiddle").contains("aaa")){
			if(".danemiddle:contains('aaa')"){
				$('.danebottom').html("<div>Wypisz sie</di>");
			} else {
				$('.danebottom').append("<div>bee !!!</di>");
			}   		
		}
	);
});
</script>