
<div id="header_content">

	<div id="left_header"> 
		brand 
	</div>
	<div id="center_header">
		<h1>HEADER</h2>
	</div>
	<div id="right_header">
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