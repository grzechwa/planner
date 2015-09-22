<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-21 10:40:06
         compiled from "D:\_programs\xampp\htdocs\plannersmarty\app\calendar\CalendarDay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2511955f7c7678004f9-25965924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d0af8abe221af7208bd9c220ca896be3216089c' => 
    array (
      0 => 'D:\\_programs\\xampp\\htdocs\\plannersmarty\\app\\calendar\\CalendarDay.tpl',
      1 => 1442824802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2511955f7c7678004f9-25965924',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55f7c7679d8eb7_68191192',
  'variables' => 
  array (
    '_REQUEST' => 0,
    'getYear' => 0,
    'getMonth' => 0,
    'getDay' => 0,
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7c7679d8eb7_68191192')) {function content_55f7c7679d8eb7_68191192($_smarty_tpl) {?><div class="calendarday _fL" >
<?php echo var_dump($_smarty_tpl->tpl_vars['_REQUEST']->value);?>

	<div id="navday" class="container">
		<div id="prevd" class="col-md-2"> 
			<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
&prevm">PREVMONTH</a>  <br />
			<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
&prevd">PREVDAY</a>  <br />
		</div>
		<div id="nextd" class="col-md-3"> 
			<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
&nextm">NEXTMONTH</a> <br >
			<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
&nextd">NEXTDAY</a> <br >
		</div>
		<div class="col-md-7"></div>
	</div>
	<div class="clear"></div>
	
	<div class="container">
	
	<table width="30%" class="_fL col-md-2" border="0" cellspacing="0" cellpadding="0">
		<thead class="header ">
			<th class="text-center">
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
	<table width="40 %" class="tab _fL col-md-3" border="0" cellspacing="0" cellpadding="0">
		<thead class="header ">
			<th class="text-center">
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

	
	<div class="dane _fR col-md-offset-2 col-md-5" >
		<div class="danetop row" >
			<h3 class="">Lista zapisanych</h3>
		</div>
		<div class="danemiddle row" >
	     	</div>

		<div class="danebottom row" >

			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
add" method="post">
			    
			    <button type="submit"> Dopisz sie </button>
			</form>
		</div>
	</div>
	</div>

	</div>

<div class="clear" ></div>
<pre>
<?php echo print_r($_smarty_tpl->tpl_vars['plan']->value[$_smarty_tpl->tpl_vars['day']->value]);?>

</pre>
<script>
// dane z tablicy plan
var jqplan = <?php echo json_encode($_smarty_tpl->tpl_vars['plan']->value[$_smarty_tpl->tpl_vars['day']->value]);?>
;

$(document).ready( function() {
    $('.tab td').click( 
	function() {
		var item = jqplan[$(this).attr("id")];
		// alert('hej');
		if(typeof item !== 'undefined') {
		// dodanie ukrytych pol do formularza
		// TODO: usuwanie ukrytych pol przed jq
		$('div.danebottom form').append('<input type="hidden" value="'+ item.planid + '" name="planid" id="plan_' + item.planid +  '"/>');
		$('div.danebottom form').append('<input type="hidden" value="1" name="userid" id="user_1" />');

		// przygotowanie do wyswietlenia imion
		var itemName = new Array();
		itemName = item.imie.toString().split(",");
		$('.danemiddle').html("<br /><span></span>");


		var formstart = <?php echo json_encode($_smarty_tpl->tpl_vars['conf']->value->action_root);?>
;
		// alert(formstart);
		// wyswietlenie imion w obszarze danemiddle
		if(itemName !== 'undefined') {
			for(var i in itemName) {
				$('.danemiddle').append("<br /><span>" + itemName[i] + "</span>");
			}

			if($(".danemiddle:contains('Kalka')").length){
				$('.danebottom button').html("Wypisz sie");
				$('.danebottom form').attr('action', formstart + 'del');
			} 
		} 

		} else {
			// alert(item);
			$('.danemiddle').html("<span></span>");
			$('.danebottom button').html("<div>Dopisz się</di>");
		}


		// $('.danemiddle').change();
	}
    ),
    $('.danemiddle').change(
    	function() {
		// alert('hej');
		// $( ".danemiddle:contains('aaa')" ).css( "text-decoration", "underline" );
			// if($(".danemiddle").contains("aaa")){
			if(".danemiddle:contains('aaa')"){
				$('.danebottom').html("<div>ususn sie</di>");
			} else {
				$('.danebottom').append("<div>bee !!!</di>");
			}   		
		}
	);
});
</script><?php }} ?>