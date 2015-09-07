<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-07 23:14:11
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarWeek.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7028232155eafdef52d3a4-19611186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8175c0dc556ef6d284ef40a88796a16e089d841e' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarWeek.tpl',
      1 => 1441660419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7028232155eafdef52d3a4-19611186',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55eafdef567152_14345705',
  'variables' => 
  array (
    'actualWeek' => 0,
    'nameDayPl' => 0,
    'name' => 0,
    'calendar' => 0,
    'cal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eafdef567152_14345705')) {function content_55eafdef567152_14345705($_smarty_tpl) {?><table width="20%">
	<caption>
		Aktualny tydzien: <?php echo $_smarty_tpl->tpl_vars['actualWeek']->value;?>

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
	<tr>
	<?php  $_smarty_tpl->tpl_vars['cal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cal']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['calendar']->value[0][$_smarty_tpl->tpl_vars['actualWeek']->value-1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cal']->key => $_smarty_tpl->tpl_vars['cal']->value){
$_smarty_tpl->tpl_vars['cal']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cal']->key;
?>
		<td align="center">
			<?php echo $_smarty_tpl->tpl_vars['cal']->value;?>

		</td>	
	<?php } ?>
	</tr>
</table>
<?php }} ?>