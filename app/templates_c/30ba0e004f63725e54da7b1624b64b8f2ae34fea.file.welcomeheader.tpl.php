<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-25 21:53:22
         compiled from "/home/greg/www_pv/plannersmarty/app/snip/welcomeheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81384915355fc9c2ead15a2-37670443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ba0e004f63725e54da7b1624b64b8f2ae34fea' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/snip/welcomeheader.tpl',
      1 => 1443210695,
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
    'getYear' => 0,
    'getMonth' => 0,
    'getDay' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fc9c2eaf2e50_11860262')) {function content_55fc9c2eaf2e50_11860262($_smarty_tpl) {?><div id="header_content">
	<div id="left_header" class="col-md-4"> 
		<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/res/images/zum2_mini.png" alt="logo" />
	</div>
	<div id="center_header" class="col-md-4 text-center">
		<h3>SIMPLE PLANNER</h3>
		<h5 style="padding-left: 16%">Fitness</h5>
	</div>
	<div id="right_header" class="col-md-4">
		<?php if ($_SESSION['isLogged']){?>	
			<div>jestes zalogowany jako<div>
			<?php echo $_SESSION['user'];?>

			<br />
				<a href="?action=logout&date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value-1;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
" >wyloguj</a>
		<?php }else{ ?>
			<br />
			<a href="?action=goLogin&date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value-1;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
">zaloguj</a>
		<?php }?>
	</div>
</div>
<div class="clear" ></div><?php }} ?>