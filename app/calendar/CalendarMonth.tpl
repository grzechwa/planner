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
<div class="json" style="clear:both" ></div>
{$plan|@var_dump}

<script>
	
var test = {json_encode($plan)};

$(document).ready( function() {
    $('.table td').hover( 
    	function() {
	for(var i in test["2015-9-7"]) {
		$('.json').append("<span> " + test["2015-9-7"][i].nazwa + " </span>");
	}

	// alert("\""+test[$(this).attr("id")]+"\"");

	var tmp1 = test[$(this).attr("id")];
	// var tmp2 = "2015-9-7";
	// alert(tmp1 +  " : " + tmp2) ;
	// alert(tmp1 === tmp2) ;
	// alert(tmp);
         // alert(tmp);
	 $(this).html("<span>" + test[$(this).attr("id")] + "</span><br />");

	for(var i in test[tmp1]) {
	 $(this).append("<span>" + test[tmp1][i].nazwa + "</span><br />");
	 }

    },
    	function() {
		$(this).html($("<span>" + $(this).attr("id") + "</span>"));
	}
	);
	
// $(this).attr($(this).attr("id"))
});
</script>