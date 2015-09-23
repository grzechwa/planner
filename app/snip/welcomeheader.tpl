<div id="header_content">
	<div id="left_header" class="col-md-4"> 
		<img src="{$conf->app_url}/res/images/zum2_mini.png" alt="logo" />
	</div>
	<div id="center_header" class="col-md-4 text-center">
		<h3>SIMPLE PLANNER</h3>
		<h5 style="padding-left: 16%">Fitness</h5>
	</div>
	<div id="right_header" class="col-md-4">
		
		{if $type eq 2}
			{$smarty.session.typcal = !$type}
			{if $smarty.session.usertest}
			<div>jestes zalogowany jako {$smarty.session.usertest}</div>
			{/if}
			<br />
			<div><a href="?action=logout" >wyloguj</a></div>
		{else}
			
			{$smarty.session.typcal = !$type}
			<br /><a href="?action=login">zaloguj</a>
		
		 	
		{/if}
	</div>
</div>
<div class="clear" ></div>