<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-14 14:32:55
         compiled from "D:\_programs\xampp\htdocs\plannersmarty\app\calendar\CalendarDay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297755f689581dfc64-12603429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d0af8abe221af7208bd9c220ca896be3216089c' => 
    array (
      0 => 'D:\\_programs\\xampp\\htdocs\\plannersmarty\\app\\calendar\\CalendarDay.tpl',
      1 => 1442233973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297755f689581dfc64-12603429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55f6895833f561_95414067',
  'variables' => 
  array (
    'getAllHours' => 0,
    'item' => 0,
    'nameDay' => 0,
    'getDate' => 0,
    'day' => 0,
    'plan' => 0,
    'y' => 0,
    'var' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6895833f561_95414067')) {function content_55f6895833f561_95414067($_smarty_tpl) {?><div class="calendarday" >
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
<table width="40 %" class="table _fL" border="0" cellspacing="0" cellpadding="0">
	<caption>
	</caption>
	<thead class="header">
		<th>
		<?php echo $_smarty_tpl->tpl_vars['nameDay']->value;?>

		<br />
		<?php $_smarty_tpl->tpl_vars['day'] = new Smarty_variable($_smarty_tpl->tpl_vars['getDate']->value, null, 0);?>
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
	
	<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['y']->step = 1;$_smarty_tpl->tpl_vars['y']->total = (int)ceil(($_smarty_tpl->tpl_vars['y']->step > 0 ? 6+1 - (0) : 0-(6)+1)/abs($_smarty_tpl->tpl_vars['y']->step));
if ($_smarty_tpl->tpl_vars['y']->total > 0){
for ($_smarty_tpl->tpl_vars['y']->value = 0, $_smarty_tpl->tpl_vars['y']->iteration = 1;$_smarty_tpl->tpl_vars['y']->iteration <= $_smarty_tpl->tpl_vars['y']->total;$_smarty_tpl->tpl_vars['y']->value += $_smarty_tpl->tpl_vars['y']->step, $_smarty_tpl->tpl_vars['y']->iteration++){
$_smarty_tpl->tpl_vars['y']->first = $_smarty_tpl->tpl_vars['y']->iteration == 1;$_smarty_tpl->tpl_vars['y']->last = $_smarty_tpl->tpl_vars['y']->iteration == $_smarty_tpl->tpl_vars['y']->total;?>
	<tr>
		<?php if (isset($_smarty_tpl->tpl_vars['var']->value[$_smarty_tpl->tpl_vars['y']->value])){?>

		<td id=<?php echo $_smarty_tpl->tpl_vars['count']->value++;?>
 align='center' class="today">	
		
		<?php echo $_smarty_tpl->tpl_vars['var']->value[$_smarty_tpl->tpl_vars['y']->value];?>



		<?php }else{ ?>
		<td align='center' class="today">	
		&nbsp;
		<?php }?>
		</td>
	</tr>
	<?php }} ?>
</table>

</div>
<div class="dane _fR" >

	<div class="danetop" >
	DANE:
	</div>
	<div class="danebottom" >
	Zapis na zajecia
	<form action="?add" >
	    
	    <button type="submit"> Dodaj sie </button>
	</form>
	</div>
</div>
<div class="clear" ></div>

<script>
// dane z tablicy plan
var test = <?php echo json_encode($_smarty_tpl->tpl_vars['plan']->value[$_smarty_tpl->tpl_vars['day']->value]);?>
;

$(document).ready( function() {
    $('.table td').click( 
    	function() {
		var loops = test[$(this).attr("id")];
		
		// alert(loops.imie[0]);
		var a = new String(); 
		a = loops.imie.toString();
		var x = new Array();
		x = a.split(",");

		// alert(x[1]);

	
	 
		for(var i in x) {
			$('.danetop').append("<br /><span>" + x[i] + "</span>");
		}

		

		$.map(loops.imie, function(value, key) {
		  // console.log(key, value);
			  $('.danetop').append("<br /><span>" + j   +  "</span>");
		// $('.danetop').append("<br /><span>" + value + key  +  "</span>");
		// ss = value;
		});




    	}
    );
});
</script><?php }} ?>