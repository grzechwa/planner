
<div id="header_content">

	<div id="left_header" class="col-md-4"> 
		<img src="{$conf->app_url}/res/images/zum2_mini.png" alt="logo" />
	</div>
	<div id="center_header" class="col-md-4 text-center">
		<h1>SIMPLE PLANNER</h2>
		<h3>Fitness</h3>
	</div>
	<div id="right_header" class="col-md-4">
		{if $smarty.session.usertest}
			<div>jestes zalogowany jako {$smarty.session.usertest}</div>
			<br />
			<div>wyloguj</div>
		{else}
		 	zaloguj
		{/if}
	</div>
</div>
<div class="clear" ></div>