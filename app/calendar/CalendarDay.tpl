<div class=" _fL" >

	<div id="navday" class="container">
		<div id="prevd" class="col-md-2"> 
			<a href="?date={$getYear},{$getMonth-1},{$getDay}&prevmd&typcal=2">PREVMONTH</a>  <br />
			<a href="?date={$getYear},{$getMonth},{$getDay-1}&prevd&typcal=2">PREVDAY</a>  <br />
		</div>
		<div id="nextd" class="col-md-3"> 
			<a href="?date={$getYear},{$getMonth+1},{$getDay}&nextmd&typcal=2">NEXTMONTH</a> <br >
			<a href="?date={$getYear},{$getMonth},{$getDay+1}&nextd&typcal=2">NEXTDAY</a> <br >
		</div>
		<div class="col-md-7"></div>
	</div>
	<div class="clear"></div>
	
	<div class="container line">
	{* godziny *}
	<table class="table _fL col-md-2"  style="width:15%"  border="0" cellspacing="0" cellpadding="0">
		<thead class="header rowgrey">
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
	<table  class="table tab _fL col-md-3" style="width: 25%" border="0" cellspacing="0" cellpadding="0">
		<thead class="header rowgrey">
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
	<div class="dane _fR col-md-offset-2 col-md-3" >
		<div class="danetop " >
			<table class="table" width="100%">
			<thead class="header rowgrey">
			<th class="text-center">
			&nbsp;
			<br />
			Lista zapisanych
			</th>
			</thead>
			</table>
		</div>
		<div class="danemiddle row" >
	     	</div>

		<div class="danebottom row" >

			<form action="{$conf->action_root}add" method="post">
			    {*TODO validacja danych *}
			    {*<button type="submit"> Dopisz sie </button>*}
			</form>
		</div>
	</div>
	</div>

	</div>

<div class="clear" ></div>

<script>
// dane z tablicy plan
var jqplan = {json_encode($plan.$day)};
var reqdate = {json_encode($smarty.request.date)};

$(document).ready( function() {
    $('.tab td').click( 
	function() {
		var item = jqplan[$(this).attr("id")];
		// alert('hej');
		if(typeof item !== 'undefined') {
		// dodanie ukrytych pol do formularza
		// TODO: usuwanie ukrytych pol przed jq
		$('div.danebottom form').html('<input type="hidden" value="' + reqdate +'" name="date" id="date" />');
		$('div.danebottom form').append('<input type="hidden" value="'+ item.planid + '" name="planid" id="plan_' + item.planid +  '"/>');
		$('div.danebottom form').append('<input type="hidden" value="1" name="userid" id="user_1" /><br /><button type="submit">Dopisz sie</button>');

		// przygotowanie do wyswietlenia imion
		var itemName = new Array();
		itemName = item.imie.toString().split(",");
		$('.danemiddle').html("<span></span>");


		var formstart = {json_encode($conf->action_root)};
		// alert(formstart);
		// wyswietlenie imion w obszarze danemiddle
		if(itemName !== 'undefined') {
				// $('.danemiddle').append("<table>");
				var tabtd = "";
				var cltab = "table ";
				var clcen = "text-center";
			for(var i in itemName) {
				// $('.danemiddle').append("<tr><td>" + itemName[i] + "</td></tr>");
				tabtd += "<tr><td class=" + clcen + ">" + itemName[i] + "</tr></td>";

			}
				// $('.danemiddle').append("</table>");
				 $('.danemiddle').append("<table class=" + cltab +">" + tabtd + "</tabtd>");

			if($(".danemiddle:contains('Kalka')").length){
				$('.danebottom button').html("Wypisz sie");
				$('.danebottom form').attr('action', formstart + 'del');
			} 
		} 

		} else {
			// alert(item);
			$('.danemiddle').html("<table></table>");
			$('.danebottom form').empty();



			// $('.danebottom button').html("<div>Dopisz się</di>");
		}


		// $('.danemiddle').change();
	}
    ),
    $('.danemiddle').change(
    	function() {
		// alert('hej');
		// $( ".danemiddle:contains('aaa')" ).css( "text-decoration", "underline" );
			// if($(".danemiddle").contains("aaa")){
			if(".danemiddle:contains('Kalka')"){
				$('.danebottom').html("<div>Wypisz sie</di>");
			} else {
				$('.danebottom').append("<div>bee !!!</div>");
			}   		
		}
	);
});
</script>