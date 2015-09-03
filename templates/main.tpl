<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$page_title|default:"Tytuł domyślny"}</title>

</head>

<body>
	<div id="wrapper">
		<div id="header">
			{block name=header} Domyślna treść nagłówka .... {/block}
		</div>
		<div id="content">
			{block name=content} Domyślna treść zawartości .... {/block}
		</div>
		<div id="footer">
			{block name=footer} Domyślna treść stopki .... {/block}
		</div>
	</div>
</body>

</html>
