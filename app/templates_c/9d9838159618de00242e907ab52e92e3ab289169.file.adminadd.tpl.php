<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-17 00:49:49
         compiled from "/home/greg/www_pv/plannersmarty/app/admin/adminadd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34448228955f9f20da65216-53940433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d9838159618de00242e907ab52e92e3ab289169' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/admin/adminadd.tpl',
      1 => 1442443583,
      2 => 'file',
    ),
    'b8f53d7dd0dd9cb25cf4d2b53469db3cab0bbd71' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/templates/main.tpl',
      1 => 1441832621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34448228955f9f20da65216-53940433',
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
  'unifunc' => 'content_55f9f20dad3c41_54292841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f9f20dad3c41_54292841')) {function content_55f9f20dad3c41_54292841($_smarty_tpl) {?><!doctype html>
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
	<?php if ($_smarty_tpl->tpl_vars['showid']->value==1){?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/admin/adminAddUser.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/admin/adminAddActiv.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
	<hr />

		</div>
		<div class="footer">
			FOOTERLOCAL
		</div>
	</div>
</body>

</html>
<?php }} ?>