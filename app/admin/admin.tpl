<div class="container text-center">


	<div class="left _fL" >
	<table class="table " width="80%">
		<caption>Usery</caption>
	<form action="{$conf->action_root}delUser" method="post" >
	{foreach item=item key=key from=$users}

		<tr>
			<td>
				{$item.imie} 
			</td>
			<td>
				
			<input type="hidden" name="id" value="{$item.id_user}"/>	
				<input type="submit" value="usun" /></td>
		</tr>
	{/foreach}
	</form>
	
	<tr><td><a href="{$conf->action_root}goAddUser" >Dodaj nowego uzytkownika</a></td></tr>
	</table>

	</div>
	<div class="right _fL">
	<table class="table " width="80%">
		<caption>Zajecia</caption>
	{foreach item=i key=k from=$activs}
		<tr>
			<td>
				{$i.nazwa}
			</td>
			<td><button>usun</button></td>
		</tr>
	{/foreach}
	<tr><td><a href="#" >Dodaj nowe zajecia</a></td></tr>
	</table>

	</div>

	<div class ="clear" ></div>
</div>