{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=header}HEADERLOCAL{/block}
{block name=footer}FOOTERLOCAL{/block}

{block name=content}
<div class="page_menu">
	Menu: <a href="#">zaloguj</a>
</div>
Skrocony rozklad zajec:
Aktualny miesiac:

{/block}
