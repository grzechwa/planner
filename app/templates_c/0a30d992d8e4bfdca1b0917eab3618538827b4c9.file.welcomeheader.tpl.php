<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-21 10:08:16
         compiled from "D:\_programs\xampp\htdocs\plannersmarty\app\snip\welcomeheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3246155ffbaf04625e4-33816503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a30d992d8e4bfdca1b0917eab3618538827b4c9' => 
    array (
      0 => 'D:\\_programs\\xampp\\htdocs\\plannersmarty\\app\\snip\\welcomeheader.tpl',
      1 => 1442817308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3246155ffbaf04625e4-33816503',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55ffbaf049cf68_35327545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffbaf049cf68_35327545')) {function content_55ffbaf049cf68_35327545($_smarty_tpl) {?>
<div id="header_content">

	<div id="left_header" class="col-md-4"> 
		brand 
	</div>
	<div id="center_header" class="col-md-4 text-center">
		<h1>HEADER</h2>
	</div>
	<div id="right_header" class="col-md-4">
		<?php if ($_SESSION['usertest']){?>
			<div>jestes zalogowany jako <?php echo $_SESSION['usertest'];?>
</div>
			<br />
			<div>wyloguj</div>
		<?php }else{ ?>
		 	zaloguj
		<?php }?>
	</div>
</div>
<div class="clear" ></div><?php }} ?>