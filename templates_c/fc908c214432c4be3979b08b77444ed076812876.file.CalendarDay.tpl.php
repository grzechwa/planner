<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-08 00:43:41
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90176427255ee131d506988-98530427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc908c214432c4be3979b08b77444ed076812876' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl',
      1 => 1441664434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90176427255ee131d506988-98530427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getAllHours' => 0,
    'item' => 0,
    'actualWeekDay' => 0,
    'actualWeek' => 0,
    'nameDayPl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55ee131d531bc2_42641500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ee131d531bc2_42641500')) {function content_55ee131d531bc2_42641500($_smarty_tpl) {?><table width="20%" style="float:left">
	<caption>
<br />
<br />
	</caption>
	<thead>
		<th>
		Godz
		</th>
	</thead>
	<tr
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getAllHours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<tr><td align="center">
		<?php echo $_smarty_tpl->tpl_vars['item']->value['od'];?>
 
		</td></tr>

	<?php } ?>
</table>






<table width="20%">
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

	</tr>

</table>
<?php }} ?>