<div id="header_content">
	<div id="left_header" class="col-md-4"> 
		<img src="{$conf->app_url}/res/images/zum2_mini.png" alt="logo" />
	</div>
	<div id="center_header" class="col-md-4 text-center">
		<h3>SIMPLE PLANNER</h3>
		<h5 style="padding-left: 16%">Fitness</h5>
	</div>
	<div id="right_header" class="col-md-4">
		{if isset($smarty.session.isLogged)}	
			{if isset($smarty.session.user)}
				{*{if $smarty.session.user === true}*}
				<div>jestes zalogowany jako
				{$smarty.session.user}<div>
				{*{/if}*}
			{/if}
			<br />
				<a href="?action=logout&date={$getYear},{$getMonth},{$getDay}" >wyloguj</a>
		{else}
			<br />
				<a href="?action=goLogin&date={$getYear},{$getMonth},{$getDay}">zaloguj</a>
		{/if}
	</div>
</div>
<div class="clear" ></div>