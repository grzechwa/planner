<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-05 23:36:04
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93480098155eb3b049bb639-64773304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc908c214432c4be3979b08b77444ed076812876' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl',
      1 => 1441488961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93480098155eb3b049bb639-64773304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55eb3b049cfdc4_08585373',
  'variables' => 
  array (
    'actualDay' => 0,
    'nameDayPl' => 0,
    'actualWeek' => 0,
    'calendar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eb3b049cfdc4_08585373')) {function content_55eb3b049cfdc4_08585373($_smarty_tpl) {?><table width="20%">
	<caption>
		Aktualny dzien: <?php echo $_smarty_tpl->tpl_vars['actualDay']->value;?>

	</caption>
	<thead>
		<th>
			<?php echo $_smarty_tpl->tpl_vars['nameDayPl']->value[$_smarty_tpl->tpl_vars['actualDay']->value];?>

		</th>
	</thead>
	<tr>
		<td align="center">
		<?php echo $_smarty_tpl->tpl_vars['calendar']->value[0][$_smarty_tpl->tpl_vars['actualWeek']->value-1][$_smarty_tpl->tpl_vars['actualDay']->value];?>

		</td>	
	</tr>
</table>
<?php }} ?>