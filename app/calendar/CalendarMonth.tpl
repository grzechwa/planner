<div class="calendarMonth" >  {* contentt strony *}

<div id="prevm" class="col-md-4 text-righ"> 
	<a href="?date={$getYear},{$getMonth-1},{$getDay}&prevm">PREV</a> 
</div>

<div id="centerm" class="col-md-4">
	<table class="table table-bordered table-hover" width="100%"  border="0" cellspacing="0" cellpadding="0">
		<thead class="header">
			{foreach item=name from=$nameDayPl}
			<th class="text-center" >
				{$name}
			</th>
			{/foreach}
		</thead>
		{* licznik potrzebny do generowania dat w jquery*}
		{assign var="counter" value=0}
		{foreach name=outer item=cal from=$calendar}
			<tr>
			{foreach key=key item=item from=$cal}
				{foreach item=value from=$item}
					{assign var="day" value="-"|explode:$value}
					{if $getTime == $value}
						<td align="center" valign="middle" 
						    style="background-color: silver; width: 10%" >
							<div id={$counter++} class="inner vcenter" style="height: 100%"
								 data-toggle="popover" data-html="true" title="popver header" 
								 data-content="brak zajec">
								<span>{$day[2]}</span>
							</div>
						</td>
					{else}
						<td  align="center" style="width: 10%">
							<div id={$counter++} class="inner vcenter" style="height: 100%"
								 data-toggle="popover" data-html="true" title="popver header" 
								 data-content="brak zajec">
								<span>{$day[2]}</span>
							</div>
						</td>
					{/if}
				{/foreach}
			</tr>
			{/foreach}
		{/foreach}
	</table>
</div>

<div id="nextm" class="col-md-4 text-left">  
	<a href="?date={$getYear},{$getMonth+1},{$getDay}&nextm">NEXT</a>
</div>
<div class="json" style="clear:both" ></div>

</div> {* final content page *}


<script>
// dane z tablicy plan
var jqplan = {json_encode($plan)};

$(document).ready( function() {
    $('.inner').hover( 
    	function() {
			var idplan = jqplan[$(this).attr("id")];
			var activDayItem = "";

			for(var i in jqplan[idplan]) {
				activDayItem += jqplan[idplan][i].nazwa + "<br />" ;
			}

			$(this).attr("data-content", activDayItem);
			$(this).attr("data-original-title", idplan );
		});

		$('[data-toggle="popover"]').popover();
});
</script>