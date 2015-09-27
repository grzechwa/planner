<div class="container text-center">

	<div class="col-md-3 text-center" >
	<table class="table" width="60%" >
	<caption class="text-center"">Uzytkownicy</caption>
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
		</form>
		{/strip}
	{/foreach}
	</tbody>
	</table>
	<span class="row"><a href="?action=goAddUser" >Dodaj nowego uzytkownika</a></span>
	</div>

	<div class="col-md-offset-1 col-md-3">
	<table class="table "  >
	<caption class="text-center">Zajecia</caption>
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
				<button>usun</button>
			</td>
		</tr>
	</form>
	{/strip}
	{/foreach}
	</tbody>
	</table>
	<span class="row"><a href="?action=goAddActiv" >Dodaj nowe zajecia</a></span>
	</div>

	<div class="col-md-offset-1 col-md-3  text-center">
	<table class="table col-md-offset-1 col-md-3 "  >
	<caption class="text-center">Rozklad zajec</caption>
	<tbody>
	{foreach item=i key=k from=$activs}
		{strip}
		<form action="{$conf->action_root}delActiv" method="post" >
			<tr>
				<td>
					{$i.nazwa}
				</td>
				<td>
					test1
				</td>
				<td>
					test2
				</td>
				<td>
					test3
				</td>
				<td>
					<input type="hidden" name="idelact" value="{$i.id}"/>
					<button>usun</button>
				</td>
			</tr>
		</form>
		{/strip}
	{/foreach}
	</tbody>
	</table>
	<span class="row"><a href="?action=goAddActiv" >Dodaj nowy rozkald zajec</a></span>
	</div>
	
	<div class ="clear" ></div>
</div>