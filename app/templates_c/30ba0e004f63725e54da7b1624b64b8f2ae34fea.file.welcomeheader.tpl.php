<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-19 01:20:14
         compiled from "/home/greg/www_pv/plannersmarty/app/snip/welcomeheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81384915355fc9c2ead15a2-37670443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ba0e004f63725e54da7b1624b64b8f2ae34fea' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/snip/welcomeheader.tpl',
      1 => 1442615993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81384915355fc9c2ead15a2-37670443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55fc9c2eaf2e50_11860262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fc9c2eaf2e50_11860262')) {function content_55fc9c2eaf2e50_11860262($_smarty_tpl) {?>
<div id="header_content">

	<div id="left_header"> 
		brand 
	</div>
	<div id="center_header">
		<h1>HEADER</h2>
	</div>
	<div id="right_header">
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