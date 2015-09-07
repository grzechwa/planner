<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-08 00:42:54
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarMonth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142890470955ee1046ca0666-13810085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1f90d4f75a12a3cbdab2390cfc3fb90094a9eb' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarMonth.tpl',
      1 => 1441665771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142890470955ee1046ca0666-13810085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55ee1046d07553_55231355',
  'variables' => 
  array (
    'actualMonth' => 0,
    'nameDayPl' => 0,
    'name' => 0,
    'getTime' => 0,
    'calendar' => 0,
    'cal' => 0,
    'item' => 0,
    'value' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ee1046d07553_55231355')) {function content_55ee1046d07553_55231355($_smarty_tpl) {?><table witdh="20%">
	<caption>
		Aktualny miesiac: <?php echo $_smarty_tpl->tpl_vars['actualMonth']->value;?>

	</caption>
	<thead>
		<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nameDayPl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
		<th>
			<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

		</th>
		<?php } ?>
	</thead>
	<?php echo $_smarty_tpl->tpl_vars['getTime']->value;?>

	<?php  $_smarty_tpl->tpl_vars['cal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cal']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calendar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cal']->key => $_smarty_tpl->tpl_vars['cal']->value){
$_smarty_tpl->tpl_vars['cal']->_loop = true;
?>
		<tr>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>

			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars["day"] = new Smarty_variable(explode("-",$_smarty_tpl->tpl_vars['value']->value), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['getTime']->value==$_smarty_tpl->tpl_vars['value']->value){?>
				<td align="center" style="background-color: silver">
				<?php echo $_smarty_tpl->tpl_vars['day']->value[2];?>

				</td>
				<?php }else{ ?>
				<td align="center">
				<?php echo $_smarty_tpl->tpl_vars['day']->value[2];?>

				</td>
				<?php }?>
			<?php } ?>
		</tr>
		<?php } ?>
	<?php } ?>
</table>
<?php }} ?>