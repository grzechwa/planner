<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-16 23:12:22
         compiled from "/home/greg/www_pv/plannersmarty/app/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19120614755f89be7a95564-63553282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d81f51153fa92eaa2b32bb0e4c604bef2f2ead6' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/admin/admin.tpl',
      1 => 1442437934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19120614755f89be7a95564-63553282',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55f89be7aea2a2_05797093',
  'variables' => 
  array (
    'users' => 0,
    'conf' => 0,
    'item' => 0,
    'activs' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f89be7aea2a2_05797093')) {function content_55f89be7aea2a2_05797093($_smarty_tpl) {?><div class="container text-center">


	<div class="left _fL" >
	<table class="table " width="80%">
		<caption>Usery</caption>
	<tbody>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
delUser" method="post" ><tr><td><?php echo $_smarty_tpl->tpl_vars['item']->value['imie'];?>
</td><td><input type="hidden" name="idel" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_user'];?>
"/><button type="submit">usun</button></td></tr>
	</form>
	<?php } ?>
	</tbody>
	<tr><td><a href="?action=goAddUser" >Dodaj nowego uzytkownika</a></td></tr>
	</table>

	</div>
	<div class="right _fL">
	<table class="table " width="80%">
		<caption>Zajecia</caption>
	<tbody>
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['activs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
delActiv" method="post" ><tr><td><?php echo $_smarty_tpl->tpl_vars['i']->value['nazwa'];?>
</td><td><input type="hidden" name="idelact" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"/><button>usun</button></td></tr>
	</form>
	<?php } ?>
	</tbody>
	<tr><td><a href="?action=goAddActiv" >Dodaj nowe zajecia</a></td></tr>
	</table>

	</div>

	<div class ="clear" ></div>
</div><?php }} ?>