<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-22 21:38:12
         compiled from "/home/greg/www_pv/plannersmarty/app/welcome/Welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113461336855f70d8fbb2527-73490271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f1f57f8290205f3e224c1bcde4ef2b219935efe' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/welcome/Welcome.tpl',
      1 => 1442950666,
      2 => 'file',
    ),
    'b8f53d7dd0dd9cb25cf4d2b53469db3cab0bbd71' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/templates/main.tpl',
      1 => 1442950078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113461336855f70d8fbb2527-73490271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55f70d8fc1eee1_35105079',
  'variables' => 
  array (
    'conf' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f70d8fc1eee1_35105079')) {function content_55f70d8fc1eee1_35105079($_smarty_tpl) {?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/res/css/my.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<script src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/res/js/calendar.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container">
		<div class="navheader">
			
	<div class="row">
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/snip/welcomeheader.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>


		</div>
		<div id="content">
			
	<hr />
	<?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/calendar/CalendarMonth.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/calendar/CalendarDay.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
	<hr />

		</div>
		<div class="footer">
			
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/snip/welcomefooter.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		</div>
	</div>
</body>

</html>
<?php }} ?>