<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-04 18:21:31
         compiled from "/home/greg/www_pv/plannersmarty/app/welcome/Welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93117161555e8bdaba64564-53798380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f1f57f8290205f3e224c1bcde4ef2b219935efe' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/welcome/Welcome.tpl',
      1 => 1441383687,
      2 => 'file',
    ),
    'b8f53d7dd0dd9cb25cf4d2b53469db3cab0bbd71' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/templates/main.tpl',
      1 => 1441320066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93117161555e8bdaba64564-53798380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55e8bdabc17d77_44822538',
  'variables' => 
  array (
    'conf' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e8bdabc17d77_44822538')) {function content_55e8bdabc17d77_44822538($_smarty_tpl) {?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

</head>

<body>
	<div id="wrapper">
		<div id="header">
			HEADERLOCAL
		</div>
		<div id="content">
			
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



		</div>
		<div id="footer">
			FOOTERLOCAL
		</div>
	</div>
</body>

</html>
<?php }} ?>