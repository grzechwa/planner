{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=header}HEADERLOCAL{/block}
{block name=footer}FOOTERLOCAL{/block}

{block name=content}
<div class="page_menu">
	<a href="#">zaloguj</a>
</div>
Zapraszamy na zajęcia w bieżącym miesiącu
<table>
	<caption>
		Aktualny miesiac:
	</caption>
	<thead>
		<th>Pon</th>
		<th>Wt</th>
		<th>Sr</th>
		<th>Czw</th>
		<th>Pt</th>
		<th>Sob</th>
		<th>Nd</th>
	</thead>
	<tbody>
		<tr><td></td></tr>
	</tbody>
</table>


{/block}
