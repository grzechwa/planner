<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-07 20:50:13
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143977942555ecbf16e600a7-51037952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc908c214432c4be3979b08b77444ed076812876' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl',
      1 => 1441651809,
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
    'getAllHours' => 0,
    'item' => 0,
    'actualWeekDay' => 0,
    'actualWeek' => 0,
    'nameDayPl' => 0,
    'getDay' => 0,
    'foo' => 0,
    'var' => 0,
    'count' => 0,
    'zaj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ecbf16e657a4_20130305')) {function content_55ecbf16e657a4_20130305($_smarty_tpl) {?><table width="20%" style="float:left">
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

<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_variable(array(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['getDay']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	<?php $_smarty_tpl->createLocalArrayVariable('var', null, 0);
$_smarty_tpl->tpl_vars['var']->value[] = $_smarty_tpl->tpl_vars['item']->value['id'];?>
	<?php $_smarty_tpl->createLocalArrayVariable('zaj', null, 0);
$_smarty_tpl->tpl_vars['zaj']->value[] = $_smarty_tpl->tpl_vars['item']->value['nazwa'];?>
<?php } ?>

<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 8+1 - (1) : 1-(8)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
		<tr><td>
		<?php if (in_array($_smarty_tpl->tpl_vars['foo']->value,$_smarty_tpl->tpl_vars['var']->value)){?>
			<?php echo $_smarty_tpl->tpl_vars['zaj']->value[$_smarty_tpl->tpl_vars['count']->value++];?>

			<?php }else{ ?>
			&nbsp;
		<?php }?>
		</td></tr>
	<?php }} ?>

</table>
<?php }} ?>