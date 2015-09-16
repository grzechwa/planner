<div class="container text-center">


	<div class="left _fL" >
	<table class="table " width="80%">
		<caption>Usery</caption>
	<tbody>
	{foreach item=item key=key from=$users}
	{strip}
	<form action="{$conf->action_root}delUser" method="post" >
		<tr>
			<td>
				{$item.imie} 
			</td>
			<td>
				
			<input type="hidden" name="idel" value="{$item.id_user}"/>	
			<button type="submit">usun</button>
			</td>
		</tr>
	{/strip}
	</form>
	{/foreach}
	</tbody>
	<tr><td><a href="?action=goAddUser" >Dodaj nowego uzytkownika</a></td></tr>
	</table>

	</div>
	<div class="right _fL">
	<table class="table " width="80%">
		<caption>Zajecia</caption>
	<tbody>
	{foreach item=i key=k from=$activs}
	{strip}
	<form action="{$conf->action_root}delActiv" method="post" >

		<tr>
			<td>
				{$i.nazwa}
			</td>
			<td>
				<input type="hidden" name="idelact" value="{$i.id}"/>
				<button>usun</button></td>
		</tr>

	{/strip}
	</form>
	{/foreach}
	</tbody>
	<tr><td><a href="?action=goAddActiv" >Dodaj nowe zajecia</a></td></tr>
	</table>

	</div>

	<div class ="clear" ></div>
</div>