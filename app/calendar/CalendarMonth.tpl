{* przerobicn na link *}
<div id="prevm"> <a href="?date={$getYear},{$getMonth},{$getDay}&prev">PREV</a> </div>


<div class="calendarMonth" >
<table class="table" width="100%" class="_fL" border="0" cellspacing="0" cellpadding="0">
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
	{foreach name=outer item=cal from=$calendar}
		<tr>
		{foreach key=key item=item from=$cal}

			{foreach item=value from=$item}
				{assign var="day" value="-"|explode:$value}
				{if $getTime == $value}
				<td id="{$day[2]}" align="center" style="background-color: silver">
				{$day[2]}
				</td>
				{else}
				<td id="{$day[2]}" align="center">
				{$day[2]}
				</td>
				{/if}
			{/foreach}
		</tr>
		{/foreach}
	{/foreach}
</table>
</div>

<div id="nextm"> <a href="?date={$getYear},{$getMonth},{$getDay}&next">NEXT</a> </div>

<div class="json" style="clear:both" ></div>

<script>
// dane z tablicy plan
var test = {json_encode($plan)};

$(document).ready( function() {
    $('.table td').hover( 
    	function() {

		var tmp1 = test[$(this).attr("id")];
		$(this).html("<span>" + test[$(this).attr("id")] + "</span><br />");

		for(var i in test[tmp1]) {
			$(this).append("<span>" + test[tmp1][i].nazwa + " : " + test[tmp1][i].count + "</span><br />");
		}


    	},
    	function() {
		$(this).html($("<span>" + $(this).attr("id") + "</span>"));
	}
    );
});
</script>