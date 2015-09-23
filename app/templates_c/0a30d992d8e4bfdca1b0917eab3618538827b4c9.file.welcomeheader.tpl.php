<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-23 09:13:53
         compiled from "D:\_programs\xampp\htdocs\plannersmarty\app\snip\welcomeheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3246155ffbaf04625e4-33816503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a30d992d8e4bfdca1b0917eab3618538827b4c9' => 
    array (
      0 => 'D:\\_programs\\xampp\\htdocs\\plannersmarty\\app\\snip\\welcomeheader.tpl',
      1 => 1442991778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3246155ffbaf04625e4-33816503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55ffbaf049cf68_35327545',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffbaf049cf68_35327545')) {function content_55ffbaf049cf68_35327545($_smarty_tpl) {?><div id="header_content">
	<div id="left_header" class="col-md-4"> 
		<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/res/images/zum2_mini.png" alt="logo" />
	</div>
	<div id="center_header" class="col-md-4 text-center">
		<h3>SIMPLE PLANNER</h3>
		<h5 style="padding-left: 16%">Fitness</h5>
	</div>
	<div id="right_header" class="col-md-4">
		<?php if ($_SESSION['usertest']){?>
			<div>jestes zalogowany jako <?php echo $_SESSION['usertest'];?>
</div>
			<br />
			<div><a href="?typcal=1">wyloguj</a></div>
		<?php }else{ ?>
			<a href="?typcal=2">zaloguj</a>
		<?php }?>
	</div>
</div>
<div class="clear" ></div><?php }} ?>