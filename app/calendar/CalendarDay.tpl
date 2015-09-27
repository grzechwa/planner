<div class=" _fL" >

<div id="navday" class="container">
  <div id="prevd" class="col-md-2"> 
    <a href="?date={$getYear},{$getMonth-1},{$getDay}&prevmd">PREVMONTH</a>
    <br />
    <a href="?date={$getYear},{$getMonth},{$getDay-1}&prevd">PREVDAY</a> 
    <br />
  </div>
  <div id="nextd" class="col-md-3"> 
    <a href="?date={$getYear},{$getMonth+1},{$getDay}&nextmd">NEXTMONTH</a>
    <br >
    <a href="?date={$getYear},{$getMonth},{$getDay+1}&nextd">NEXTDAY</a>
    <br >
  </div>
  <div class="col-md-7"></div>
</div>
<div class="clear"></div>

  <div class="container line">
		{* godziny *}
		<table class="table tableday _fL col-md-2"  
		       style="width:15%"  border="0" cellspacing="0" cellpadding="0">
			<thead class="header rowgrey">
			<th class="text-center">
				&nbsp;
				<br />
				Godz
			</th>
			</thead>

			{foreach item=idplan from=$getAllHours}
			  <tr><td align="center">
					  {$idplan.od} 
				  </td></tr>
			  {/foreach}
		</table>

		{* zajecia *}
		{$var = array() }
		<table  class="table tab tableday _fL col-md-3" 
			style="width: 25%" border="0" cellspacing="0" cellpadding="0">
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
			    {foreach key=key item=idplan from=$plan.$day}
			      {$var[$idplan.id] = {$idplan.nazwa}}
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
var requestDate = {json_encode($smarty.request.date)};

$(document).ready(function () {
$('.tab td').click(
function () {
	var idplan = jqplan[$(this).attr("id")];
	if (typeof idplan !== 'undefined') {

		// TODO: usuwanie ukrytych pol przed jq
		$('div.danebottom form').html('<input type="hidden" value="' + requestDate + '" name="date" id="date" />');
		$('div.danebottom form').append('<input type="hidden" value="' + idplan.planid + '" name="planid" id="plan_' + idplan.planid + '"/>');
		// TODO: zmienic na zmienne id_user
		$('div.danebottom form').append('<input type="hidden" value="1" name="userid" id="user_1" /><br /><button type="submit">Dopisz sie</button>');

		// przygotowanie do wyswietlenia imion
		var idplanName = new Array();
		idplanName = idplan.imie.toString().split(",");
		$('.danemiddle').html("<span></span>");

		// formularz dla danebottom
		var formstart = {json_encode($conf->action_root)};

		// wyswietlenie imion w obszarze danemiddle
		if (idplanName !== 'undefined') {

													// elementy css
													var tableTd = "";
													var classTable = "table ";
													var classCenter = "text-center";

													for (var i in idplanName) {
																	tableTd += "<tr><td class="
																	+ classCenter + ">"
																	+ idplanName[i]
																	+ "</tr></td>";
													}

													$('.danemiddle').append("<table class="
																	+ classTable + ">"
																	+ tableTd
																	+ "</tableTd>");

													// TODO: zmienic warunek na zmienna
													if ($(".danemiddle:contains('Kalka')").length) {
																	$('.danebottom button').html("Wypisz sie");
																	$('.danebottom form').attr('action', formstart + 'del');
													}
									}
					} else {

												$('.danemiddle').html("<table></table>");
												$('.danebottom form').empty();

								}
				}),
				$('.danemiddle').change(
				function () {
								if (".danemiddle:contains('Kalka')") {
												$('.danebottom').html("<div>Wypisz sie</di>");
								} else {
												$('.danebottom').append("<div>bee !!!</div>");
								}
				});
});
</script>