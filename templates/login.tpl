<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{$page_title|default:"Tytuł domyślny"}</title>
	<link rel="stylesheet" href="{$conf->app_url}/res/css/my.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<script src="{$conf->app_url}/res/js/calendar.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="navheader">
			{block name=header} Domyślna treść nagłówka .... {/block}
		</div>
		<div id="content">
			{block name=content} Domyślna treść zawartości .... {/block}
		</div>
		<div class="footer">
			{block name=footer} Domyślna treść stopki .... {/block}
		</div>
	</div>
</body>

</html>
