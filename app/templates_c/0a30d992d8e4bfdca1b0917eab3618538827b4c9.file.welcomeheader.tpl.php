<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-23 10:20:03
         compiled from "D:\_programs\xampp\htdocs\plannersmarty\app\snip\welcomeheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3246155ffbaf04625e4-33816503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a30d992d8e4bfdca1b0917eab3618538827b4c9' => 
    array (
      0 => 'D:\\_programs\\xampp\\htdocs\\plannersmarty\\app\\snip\\welcomeheader.tpl',
      1 => 1442995968,
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
    'type' => 0,
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
		
		<?php if ($_smarty_tpl->tpl_vars['type']->value==2){?>
			<?php $_smarty_tpl->createLocalArrayVariable('smarty', null, 0);
$_smarty_tpl->tpl_vars['smarty']->value['session']['typcal'] = !$_smarty_tpl->tpl_vars['type']->value;?>
			<?php if ($_SESSION['usertest']){?>
			<div>jestes zalogowany jako <?php echo $_SESSION['usertest'];?>
</div>
			<?php }?>
			<br />
			<div><a href="?action=logout" >wyloguj</a></div>
		<?php }else{ ?>
			
			<?php $_smarty_tpl->createLocalArrayVariable('smarty', null, 0);
$_smarty_tpl->tpl_vars['smarty']->value['session']['typcal'] = !$_smarty_tpl->tpl_vars['type']->value;?>
			<br /><a href="?action=login">zaloguj</a>
		
		 	
		<?php }?>
	</div>
</div>
<div class="clear" ></div><?php }} ?>