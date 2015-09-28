<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-28 20:58:17
         compiled from "/home/greg/www_pv/plannersmarty/app/calendar/CalendarMonth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43919055456005fae82c464-91460889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1f90d4f75a12a3cbdab2390cfc3fb90094a9eb' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/calendar/CalendarMonth.tpl',
      1 => 1443465884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43919055456005fae82c464-91460889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56005fae917617_66901791',
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
    'getDate' => 0,
    'counter' => 0,
    'day' => 0,
    'plan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56005fae917617_66901791')) {function content_56005fae917617_66901791($_smarty_tpl) {?><div class="calendarMonth" >  

<div id="" class="col-md-1 text-right"> 
	<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value-1;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
&prevm">PREV</a> 
</div>

<div id="" class="col-md-10">
	<table class="table table-bordered table-hover" 
         width="100%"  border="0" cellspacing="0" cellpadding="0">
		<thead class="header">
			<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nameDayPl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
			<th class="text-center rowgrey" >
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
					<?php if ($_smarty_tpl->tpl_vars['getDate']->value==$_smarty_tpl->tpl_vars['value']->value){?>
						<td align="center" valign="middle" 
						    style="background-color: #D9E0E5 ; width: 10%" >
							<div id=<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
 class="inner vcenter" style="height: 100%"
								 data-toggle="popover" data-html="true" title="popver header" 
								 data-content="brak zajec" data-trigger="hover">
								<span><?php echo $_smarty_tpl->tpl_vars['day']->value[2];?>
</span>
							</div>
						</td>
					<?php }else{ ?>
						<td  align="center" style="width: 10%">
							<div id=<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
 class="inner vcenter" style="height: 100%"
								 data-toggle="popover" data-html="true" title="popver header" 
								 data-content="brak zajec" data-trigger="hover">
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

<div id="" class="col-md-1 text-left">  
	<a href="?date=<?php echo $_smarty_tpl->tpl_vars['getYear']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['getMonth']->value+1;?>
,<?php echo $_smarty_tpl->tpl_vars['getDay']->value;?>
&nextm">NEXT</a>
</div>
<div class="json" style="clear:both" ></div>

</div> 


<script>
// dane z tablicy plan
var jqplan = <?php echo json_encode($_smarty_tpl->tpl_vars['plan']->value);?>
;

$(document).ready( function() {
    $('.inner').hover( 
    	function() {
			var idplan = jqplan[$(this).attr("id")];
			var activDayItem = "";

			for(var i in jqplan[idplan]) {
				activDayItem += jqplan[idplan][i].nazwa + "<br />" ;
			}

			$(this).attr("data-content", activDayItem);
			$(this).attr("data-original-title", idplan );
		});

		$('[data-toggle="popover"]').popover();
});
</script><?php }} ?>