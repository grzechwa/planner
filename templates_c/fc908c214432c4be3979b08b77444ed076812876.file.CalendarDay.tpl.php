<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-16 00:26:34
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128279553155f89b1a4964e1-60530875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc908c214432c4be3979b08b77444ed076812876' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl',
      1 => 1442271594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128279553155f89b1a4964e1-60530875',
  'function' => 
  array (
  ),
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
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55f89b1a59cc82_87383955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f89b1a59cc82_87383955')) {function content_55f89b1a59cc82_87383955($_smarty_tpl) {?><div class="calendarday" >
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
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
add" method="post">
	    
	    


	    <button type="submit"> Dodaj sie </button>
	</form>
	</div>
</div>
<div class="clear" ></div>

<script>
// dane z tablicy plan
// var test = <?php echo json_encode($_smarty_tpl->tpl_vars['plan']->value[$_smarty_tpl->tpl_vars['day']->value]);?>
;
var test = <?php echo json_encode($_smarty_tpl->tpl_vars['plan']->value[$_smarty_tpl->tpl_vars['day']->value]);?>
;

$(document).ready( function() {
    $('.table td').click( 
    	function() {
		var loops = test[$(this).attr("id")];
		// alert(loops.planid);
		// alert(loops.imie[0]);

		// $('div.danebottom form').append('<input type="hidden" value="'+ $(this).attr("id")+ '" name="godzid" id="' + $(this).attr("id")+  '"/>');
		// $('div.danebottom form').append('<input type="hidden" value="'+ test[$(this).attr("id")].planid + '" name="planid" id="' + test[$(this).attr("id")].planid +  '"/>');
		$('div.danebottom form').append('<input type="hidden" value="'+ loops.planid + '" name="planid" id="' + loops.planid +  '"/>');
		$('div.danebottom form').append('<input type="hidden" value="2" name="userid" id="aaa" />');

		var a = new String(); 
		a = loops.imie.toString();
	
		// $.session.set("planid", "val");
		// sessionStorage.setItem("planid", $(this).attr("id"));

		var x = new Array();
		x = a.split(",");
		if(x !== null) {
		for(var i in x) {
			$('.danetop').append("<br /><span>" + x[i] + sessionStorage.getItem("planid") + "</span>");
		}
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