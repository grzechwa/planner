<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-07 22:04:13
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarWeek.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205136677155ede77077af66-64866521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8175c0dc556ef6d284ef40a88796a16e089d841e' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarWeek.tpl',
      1 => 1441656249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205136677155ede77077af66-64866521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55ede7707c8e42_91255157',
  'variables' => 
  array (
    'getYear' => 0,
    'getMonth' => 0,
    'getAllHours' => 0,
    'item' => 0,
    'actualWeek' => 0,
    'nameDayPl' => 0,
    'calendar' => 0,
    'getDay' => 0,
    'foo' => 0,
    'var' => 0,
    'count' => 0,
    'zaj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ede7707c8e42_91255157')) {function content_55ede7707c8e42_91255157($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['getMonth']->value;?>
 ----<br />

<table width="20%" style="float:left">
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

<table width="20%" style="float:left">
	<caption>
		Aktualny tydzien: <?php echo $_smarty_tpl->tpl_vars['actualWeek']->value;?>

	</caption>
	<thead>
	<th></th>

		<th>
		<?php echo $_smarty_tpl->tpl_vars['nameDayPl']->value[0];?>

		</th>

	</thead>
	<tr>
	<td>
	<?php echo $_smarty_tpl->tpl_vars['calendar']->value[0][$_smarty_tpl->tpl_vars['actualWeek']->value][0];?>

	</td>	
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
	</tr>
</table>

<table width="20%" style="float:left">
	<caption>
		Aktualny tydzien: <?php echo $_smarty_tpl->tpl_vars['actualWeek']->value;?>

	</caption>
	<thead>
	<th></th>

		<th>
		<?php echo $_smarty_tpl->tpl_vars['nameDayPl']->value[1];?>

		</th>

	</thead>
	<tr>
	<td>
	<?php echo $_smarty_tpl->tpl_vars['calendar']->value[0][$_smarty_tpl->tpl_vars['actualWeek']->value][1];?>

	</td>	
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
	</tr>
</table>
<br />
	-------- <?php echo $_smarty_tpl->tpl_vars['calendar']->value[0][$_smarty_tpl->tpl_vars['actualWeek']->value][0];?>
 -------- <br />
	-------- <?php echo $_smarty_tpl->tpl_vars['calendar']->value[0][$_smarty_tpl->tpl_vars['actualWeek']->value][1];?>
 --------<br />
	-------- <?php echo $_smarty_tpl->tpl_vars['calendar']->value[0][$_smarty_tpl->tpl_vars['actualWeek']->value];?>
 -------- <br />

<?php }} ?>