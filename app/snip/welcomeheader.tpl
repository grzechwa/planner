
<div id="header_content">

	<div id="left_header" class="col-md-4"> 
		brand 
	</div>
	<div id="center_header" class="col-md-4 text-center">
		<h1>HEADER</h2>
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