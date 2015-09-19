
<div class="calendarMonth" >  {* contentt strony *}

<div id="prevm"> 
	<a href="?date={$getYear},{$getMonth},{$getDay}&prevm">PREV</a> 
</div>

<div id="centerm">
	<table class="table" width="100%"  border="0" cellspacing="0" cellpadding="0">
	<caption>
		</caption>
		<thead class="header">
			{foreach item=name from=$nameDayPl}
			<th>
				<br />
				{$name}
				<br />
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
					<td id="{$counter++}" align="center" style="background-color: silver; width: 10%" data-toggle="popover" data-html="true" title="popver header" data-content="test">
					{$day[2]}
					</td>
					{else}
					<td id="{$counter++}" align="center" style="width: 10%" data-toggle="popover" data-html="true" title="popver header" data-content="aaaa">
					{$day[2]}
					</td>
					{/if}
				{/foreach}
			</tr>
			{/foreach}
		{/foreach}
	</table>
</div>

	<div id="nextm"> 
		<a href="?date={$getYear},{$getMonth},{$getDay}&nextm">NEXT</a>
	</div>
	<div class="json" style="clear:both" ></div>
<div data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Toggle popover</div>
</div> {* final content page *}


<script>
// dane z tablicy plan
var test = {json_encode($plan)};

$(document).ready( function() {
    $('.table td').hover( 
    	function() {
		var tmp1 = test[$(this).attr("id")];
		// alert(tmp1);
		// $(this).html("<span>" + test[$(this).attr("id")] + "</span><br />");
		var result = "";
		for(var i in test[tmp1]) {
			// $(this).append("<span>" + test[tmp1][i].nazwa + " : " + test[tmp1][i].count + "</span><br />");
			result += test[tmp1][i].nazwa + "<br />" ;
		}
		$(this).attr("data-content", result);
		// $('[data-toggle="popover"]').popover();
    	},
    	function() {
		// rozbicie tablicy w celu wyswietlenia tylko wartosci dnia
		var day = test[$(this).attr("id")].split('-');
		
		$(this).html($("<span>" + day[2] + "</span>"));
	}
	// ,$('[data-toggle="popover"]').popover();
    );
	$('[data-toggle="popover"]').popover();
});
</script>