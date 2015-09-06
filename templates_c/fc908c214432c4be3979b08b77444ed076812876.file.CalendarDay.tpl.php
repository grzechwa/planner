<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-07 01:16:09
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143977942555ecbf16e600a7-51037952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc908c214432c4be3979b08b77444ed076812876' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl',
      1 => 1441581366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143977942555ecbf16e600a7-51037952',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55ecbf16e657a4_20130305',
  'variables' => 
  array (
    'actualWeekDay' => 0,
    'actualWeek' => 0,
    'nameDayPl' => 0,
    'calendar' => 0,
    'getDay' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ecbf16e657a4_20130305')) {function content_55ecbf16e657a4_20130305($_smarty_tpl) {?><table width="20%">
	<caption>

		Aktualny dzien tygodnia: <?php echo $_smarty_tpl->tpl_vars['actualWeekDay']->value;?>

		Aktualny tydzien: <?php echo $_smarty_tpl->tpl_vars['actualWeek']->value;?>


	</caption>
	<thead>
		<th>

			<?php echo $_smarty_tpl->tpl_vars['nameDayPl']->value[$_smarty_tpl->tpl_vars['actualWeekDay']->value-1];?>


		</th>
	</thead>
	<tr>
		<td align="center">

		<?php echo $_smarty_tpl->tpl_vars['calendar']->value[0][$_smarty_tpl->tpl_vars['actualWeek']->value][$_smarty_tpl->tpl_vars['actualWeekDay']->value-1];?>


		</td>	
	</tr>

	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getDay']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<tr><td align="center">
		<?php echo $_smarty_tpl->tpl_vars['item']->value['nazwa'];?>
 
		</td></tr>

	<?php } ?>

</table>
<?php }} ?>