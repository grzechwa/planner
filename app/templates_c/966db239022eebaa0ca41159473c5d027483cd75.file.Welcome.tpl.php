<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-15 09:37:23
         compiled from "D:\_programs\xampp\htdocs\plannersmarty\app\welcome\Welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1869155f7cab35b3af9-22268905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '966db239022eebaa0ca41159473c5d027483cd75' => 
    array (
      0 => 'D:\\_programs\\xampp\\htdocs\\plannersmarty\\app\\welcome\\Welcome.tpl',
      1 => 1442222039,
      2 => 'file',
    ),
    '0a6f48d3bf9f63ea493158a328e72083dd0993cb' => 
    array (
      0 => 'D:\\_programs\\xampp\\htdocs\\plannersmarty\\templates\\main.tpl',
      1 => 1442220292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1869155f7cab35b3af9-22268905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conf' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55f7cab36e45d6_90443303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7cab36e45d6_90443303')) {function content_55f7cab36e45d6_90443303($_smarty_tpl) {?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/res/css/my.css">

	<script src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/res/js/calendar.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

<body>
	<div id="wrapper">
		<div class="navheader">
			HEADERLOCAL
		</div>
		<div id="content">
			
	<hr />
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/calendar/CalendarDay.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<hr />

		</div>
		<div class="footer">
			FOOTERLOCAL
		</div>
	</div>
</body>

</html>
<?php }} ?>