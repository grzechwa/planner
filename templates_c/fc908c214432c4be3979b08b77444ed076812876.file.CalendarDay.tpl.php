<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-09 23:01:27
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66525799955f0972977a7c8-80840095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc908c214432c4be3979b08b77444ed076812876' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl',
      1 => 1441832424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66525799955f0972977a7c8-80840095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55f09729810992_08959890',
  'variables' => 
  array (
    'getAllHours' => 0,
    'item' => 0,
    'actualWeekDay' => 0,
    'nameDayPl' => 0,
    'actualWeek' => 0,
    'calendar' => 0,
    'day' => 0,
    'plan' => 0,
    'y' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f09729810992_08959890')) {function content_55f09729810992_08959890($_smarty_tpl) {?><div class="calendar" >
<table width="40%" class="_fL" border="0" cellspacing="0" cellpadding="0">
	<caption>
	</caption>
	<thead class="header">
		<th>
		&nbsp;
		<br />
		Godz
		</th>
	</thead>
	
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






<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_variable(array(), null, 0);?>

<table width="40 %" class="_fL" border="0" cellspacing="0" cellpadding="0">
	<caption>
	</caption>
	<thead class="header">
		<th>
		<?php echo $_smarty_tpl->tpl_vars['nameDayPl']->value[$_smarty_tpl->tpl_vars['actualWeekDay']->value-1];?>

		<br />
		<?php $_smarty_tpl->tpl_vars['day'] = new Smarty_variable($_smarty_tpl->tpl_vars['calendar']->value[0][$_smarty_tpl->tpl_vars['actualWeek']->value-1][$_smarty_tpl->tpl_vars['actualWeekDay']->value-1], null, 0);?>
		<?php echo $_smarty_tpl->tpl_vars['day']->value;?>

		</th>
	</thead>
	<?php if (array_key_exists($_smarty_tpl->tpl_vars['day']->value,$_smarty_tpl->tpl_vars['plan']->value)){?>
		<?php if (is_array($_smarty_tpl->tpl_vars['plan']->value[$_smarty_tpl->tpl_vars['day']->value])){?>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plan']->value[$_smarty_tpl->tpl_vars['day']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['nazwa'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('var', null, 0);
$_smarty_tpl->tpl_vars['var']->value[$_smarty_tpl->tpl_vars['item']->value['id']] = $_tmp1;?>
			<?php } ?>
		<?php }?>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['y']->step = 1;$_smarty_tpl->tpl_vars['y']->total = (int)ceil(($_smarty_tpl->tpl_vars['y']->step > 0 ? 6+1 - (0) : 0-(6)+1)/abs($_smarty_tpl->tpl_vars['y']->step));
if ($_smarty_tpl->tpl_vars['y']->total > 0){
for ($_smarty_tpl->tpl_vars['y']->value = 0, $_smarty_tpl->tpl_vars['y']->iteration = 1;$_smarty_tpl->tpl_vars['y']->iteration <= $_smarty_tpl->tpl_vars['y']->total;$_smarty_tpl->tpl_vars['y']->value += $_smarty_tpl->tpl_vars['y']->step, $_smarty_tpl->tpl_vars['y']->iteration++){
$_smarty_tpl->tpl_vars['y']->first = $_smarty_tpl->tpl_vars['y']->iteration == 1;$_smarty_tpl->tpl_vars['y']->last = $_smarty_tpl->tpl_vars['y']->iteration == $_smarty_tpl->tpl_vars['y']->total;?>
	<tr>
		<td align='center' class="today">	
		<?php if (isset($_smarty_tpl->tpl_vars['var']->value[$_smarty_tpl->tpl_vars['y']->value])){?>
		<?php echo $_smarty_tpl->tpl_vars['var']->value[$_smarty_tpl->tpl_vars['y']->value];?>

		<?php }else{ ?>
		&nbsp;
		<?php }?>
		</td>
	</tr>
	<?php }} ?>
</table>
<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_variable(null, null, 0);?>
</div>
<div class="dane _fR" >

	<div class="danetop" >
	
	DANE:

	</div>

	<div class="danebottom" >
	
	Zapis na zajecia

	</div>

</div>

<div class="clear" ></div><?php }} ?>