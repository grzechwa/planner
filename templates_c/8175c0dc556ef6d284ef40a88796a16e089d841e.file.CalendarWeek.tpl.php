<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-09 01:37:07
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarWeek.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205693619855ef16242b4696-02073075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8175c0dc556ef6d284ef40a88796a16e089d841e' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarWeek.tpl',
      1 => 1441755423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205693619855ef16242b4696-02073075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55ef162433d3c6_40135485',
  'variables' => 
  array (
    'actualWeek' => 0,
    'getAllHours' => 0,
    'item' => 0,
    'i' => 0,
    'nameDayPl' => 0,
    'calendar' => 0,
    'day' => 0,
    'plan' => 0,
    'y' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ef162433d3c6_40135485')) {function content_55ef162433d3c6_40135485($_smarty_tpl) {?>

<table width="10%" style="float:left">
	<caption>
	</caption>
	<thead>
		<th>
		Godz
		<br />
		<?php echo $_smarty_tpl->tpl_vars['actualWeek']->value;?>

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

<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 6+1 - (0) : 0-(6)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_variable(array(), null, 0);?>
<table width="10%" style="float:left">
	<caption>
	</caption>
	<thead>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['nameDayPl']->value[$_smarty_tpl->tpl_vars['i']->value];?>

		<br />
		<?php $_smarty_tpl->tpl_vars['day'] = new Smarty_variable($_smarty_tpl->tpl_vars['calendar']->value[0][$_smarty_tpl->tpl_vars['actualWeek']->value-1][$_smarty_tpl->tpl_vars['i']->value], null, 0);?>
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
	<td align='center'>	
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
<?php }} ?>
<div style="clear:both" ></div>
<?php }} ?>