<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-23 10:21:23
         compiled from "D:\_programs\xampp\htdocs\plannersmarty\app\calendar\CalendarMonth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:754356026103c2d780-43712972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff3eecb722fe5d80b4e9fb1fda21c73cd709f265' => 
    array (
      0 => 'D:\\_programs\\xampp\\htdocs\\plannersmarty\\app\\calendar\\CalendarMonth.tpl',
      1 => 1442992827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '754356026103c2d780-43712972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getYear' => 0,
    'getMonth' => 0,
    'getDay' => 0,
    'nameDayPl' => 0,
    'name' => 0,
    'calendar' => 0,
    'cal' => 0,
    'item' => 0,
    'value' => 0,
    'getTime' => 0,
    'counter' => 0,
    'day' => 0,
    'plan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56026103d9b137_06011146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56026103d9b137_06011146')) {function content_56026103d9b137_06011146($_smarty_tpl) {?>
<div class="calendarMonth" >  

<div id="prevm" class="col-md-4 text-righ"> 
	<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
&prevm">PREV</a> 
</div>

<div id="centerm" class="col-md-4">
	<table class="table table-bordered table-hover" width="100%"  border="0" cellspacing="0" cellpadding="0">
	<caption>
		</caption>
		<thead class="header">
			<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nameDayPl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
			<th class="text-center" >

				<?php echo $_smarty_tpl->tpl_vars['name']->value;?>


			</th>
			<?php } ?>
		</thead>
		
		<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['cal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cal']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calendar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cal']->key => $_smarty_tpl->tpl_vars['cal']->value){
$_smarty_tpl->tpl_vars['cal']->_loop = true;
?>
			<tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>

				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars["day"] = new Smarty_variable(explode("-",$_smarty_tpl->tpl_vars['value']->value), null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['getTime']->value==$_smarty_tpl->tpl_vars['value']->value){?>
						<td align="center" valign="middle" style="background-color: silver; width: 10%" >
							<div id=<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
 class="inner vcenter" style="height: 100%"
								 data-toggle="popover" data-html="true" title="popver header" data-content="brak zajec">
								<span><?php echo $_smarty_tpl->tpl_vars['day']->value[2];?>
</span>
							
							</div>
						</td>
					<?php }else{ ?>
						<td  align="center" style="width: 10%">
							<div id=<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
 class="inner vcenter" style="height: 100%"
								 data-toggle="popover" data-html="true" title="popver header" data-content="brak zajec">
								<span><?php echo $_smarty_tpl->tpl_vars['day']->value[2];?>
</span>
							</div>
						</td>
					<?php }?>
				<?php } ?>
			</tr>
			<?php } ?>
		<?php } ?>
	</table>
</div>

	<div id="nextm" class="col-md-4 text-left">  
		<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
&nextm">NEXT</a>
	</div>
	<div class="json" style="clear:both" ></div>

</div> 


<script>
// dane z tablicy plan
var test = <?php echo json_encode($_smarty_tpl->tpl_vars['plan']->value);?>
;

$(document).ready( function() {
    $('.inner').hover( 
    	function() {
		var tmp1 = test[$(this).attr("id")];
		// alert(tmp1);

		var result = "";
		for(var i in test[tmp1]) {
			result += test[tmp1][i].nazwa + "<br />" ;
		}
		$(this).attr("data-content", result);
		$(this).attr("data-original-title", tmp1 );
    	}    );
	$('[data-toggle="popover"]').popover();
});
</script><?php }} ?>