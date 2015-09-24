<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-24 23:42:43
         compiled from "/home/greg/www_pv/plannersmarty/app/snip/welcomeheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81384915355fc9c2ead15a2-37670443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ba0e004f63725e54da7b1624b64b8f2ae34fea' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/snip/welcomeheader.tpl',
      1 => 1443130954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81384915355fc9c2ead15a2-37670443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55fc9c2eaf2e50_11860262',
  'variables' => 
  array (
    'conf' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fc9c2eaf2e50_11860262')) {function content_55fc9c2eaf2e50_11860262($_smarty_tpl) {?><div id="header_content">
	<?php echo var_dump($_SESSION);?>

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
			<br /><a href="?action=goLogin">zaloguj</a>
		
		 	
		<?php }?>
	</div>
</div>
<div class="clear" ></div><?php }} ?>