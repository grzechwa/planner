<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-26 16:27:45
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113204345255f70d8fc21df9-57397266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc908c214432c4be3979b08b77444ed076812876' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarDay.tpl',
      1 => 1443277613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113204345255f70d8fc21df9-57397266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55f70d8fcc3685_47428157',
  'variables' => 
  array (
    'getYear' => 0,
    'getMonth' => 0,
    'getDay' => 0,
    'getAllHours' => 0,
    'idplan' => 0,
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
<?php if ($_valid && !is_callable('content_55f70d8fcc3685_47428157')) {function content_55f70d8fcc3685_47428157($_smarty_tpl) {?><div class=" _fL" >

	<div id="navday" class="container">
		<div id="prevd" class="col-md-2"> 
			<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value-1;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
&prevmd">PREVMONTH</a>
			<br />
			<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value-1;?>
&prevd">PREVDAY</a> 
			<br />
		</div>
		<div id="nextd" class="col-md-3"> 
			<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value+1;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
&nextmd">NEXTMONTH</a>
			<br >
			<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value+1;?>
&nextd">NEXTDAY</a>
			<br >
		</div>
		<div class="col-md-7"></div>
	</div>
	<div class="clear"></div>

	<div class="container line">
		
		<table class="table _fL col-md-2"  
		       style="width:15%"  border="0" cellspacing="0" cellpadding="0">
			<thead class="header rowgrey">
			<th class="text-center">
				&nbsp;
				<br />
				Godz
			</th>
			</thead>

			<?php  $_smarty_tpl->tpl_vars['idplan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['idplan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getAllHours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['idplan']->key => $_smarty_tpl->tpl_vars['idplan']->value){
$_smarty_tpl->tpl_vars['idplan']->_loop = true;
?>
			  <tr><td align="center">
					  <?php echo $_smarty_tpl->tpl_vars['idplan']->value['od'];?>
 
				  </td></tr>
			<?php } ?>
		</table>

		
		<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_variable(array(), null, 0);?>
		<table  class="table tab _fL col-md-3" 
						style="width: 25%" border="0" cellspacing="0" cellpadding="0">
			<thead class="header rowgrey">
			<th class="text-center">
				<?php echo $_smarty_tpl->tpl_vars['nameDay']->value;?>

				<br />
				<?php $_smarty_tpl->tpl_vars['day'] = new Smarty_variable($_smarty_tpl->tpl_vars['getDate']->value, null, 0);?>
				<?php echo $_smarty_tpl->tpl_vars['day']->value;?>

			</th>
			</thead>
			<?php if (array_key_exists($_smarty_tpl->tpl_vars['day']->value,$_smarty_tpl->tpl_vars['plan']->value)){?>
			  <?php if (is_array($_smarty_tpl->tpl_vars['plan']->value[$_smarty_tpl->tpl_vars['day']->value])){?>
			    <?php  $_smarty_tpl->tpl_vars['idplan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['idplan']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plan']->value[$_smarty_tpl->tpl_vars['day']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['idplan']->key => $_smarty_tpl->tpl_vars['idplan']->value){
$_smarty_tpl->tpl_vars['idplan']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['idplan']->key;
?>
			      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['idplan']->value['nazwa'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('var', null, 0);
$_smarty_tpl->tpl_vars['var']->value[$_smarty_tpl->tpl_vars['idplan']->value['id']] = $_tmp1;?>
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

		
		<div class="dane _fR col-md-offset-2 col-md-3" >
			<div class="danetop " >
				<table class="table" width="100%">
					<thead class="header rowgrey">
					<th class="text-center">
						&nbsp;
						<br />
						Lista zapisanych
					</th>
					</thead>
				</table>
			</div>
			<div class="danemiddle row" >
			</div>

			<div class="danebottom row" >

				<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
add" method="post">
					
					
				</form>
			</div>
		</div>
	</div>

</div>
<div class="clear" ></div>

<script>
// dane z tablicy plan
var jqplan = <?php echo json_encode($_smarty_tpl->tpl_vars['plan']->value[$_smarty_tpl->tpl_vars['day']->value]);?>
;
var requestDate = <?php echo json_encode($_REQUEST['date']);?>
;

$(document).ready( function() {
	$('.tab td').click( 
		function() {
			var idplan = jqplan[$(this).attr("id")];
			if(typeof idplan !== 'undefined') {

				// TODO: usuwanie ukrytych pol przed jq
				$('div.danebottom form').html('<input type="hidden" value="' + requestDate +'" name="date" id="date" />');
				$('div.danebottom form').append('<input type="hidden" value="'+ idplan.planid + '" name="planid" id="plan_' + idplan.planid +  '"/>');
				// TODO: zmienic na zmienne id_user
				$('div.danebottom form').append('<input type="hidden" value="1" name="userid" id="user_1" /><br /><button type="submit">Dopisz sie</button>');

				// przygotowanie do wyswietlenia imion
				var idplanName = new Array();
				idplanName = idplan.imie.toString().split(",");
				$('.danemiddle').html("<span></span>");

				// formularz dla danebottom
				var formstart = <?php echo json_encode($_smarty_tpl->tpl_vars['conf']->value->action_root);?>
;

				// wyswietlenie imion w obszarze danemiddle
				if(idplanName !== 'undefined') {

						// elementy css
						var tableTd = "";
						var classTable = "table ";
						var classCenter = "text-center";

						for(var i in idplanName) {
							tableTd += "<tr><td class=" 
								+ classCenter + ">" 
								+ idplanName[i] 
								+ "</tr></td>";
						}

						$('.danemiddle').append("<table class=" 
							+ classTable +">" 
							+ tableTd 
							+ "</tableTd>");
						
						// TODO: zmienic warunek na zmienna
						if($(".danemiddle:contains('Kalka')").length){
							$('.danebottom button').html("Wypisz sie");
							$('.danebottom form').attr('action', formstart + 'del');
						} 
					}
				} else {

					$('.danemiddle').html("<table></table>");
					$('.danebottom form').empty();

			}
	}),

	$('.danemiddle').change(
		function() {
			if(".danemiddle:contains('Kalka')"){
				$('.danebottom').html("<div>Wypisz sie</di>");
			} else {
				$('.danebottom').append("<div>bee !!!</div>");
			}   		
		});
});
</script><?php }} ?>