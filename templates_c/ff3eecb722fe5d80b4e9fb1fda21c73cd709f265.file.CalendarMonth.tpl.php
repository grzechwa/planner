<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-11 14:35:20
         compiled from "D:\_programs\xampp\htdocs\plannersmarty\app\calendar\CalendarMonth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3184355f26c560573e4-28914342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff3eecb722fe5d80b4e9fb1fda21c73cd709f265' => 
    array (
      0 => 'D:\\_programs\\xampp\\htdocs\\plannersmarty\\app\\calendar\\CalendarMonth.tpl',
      1 => 1441974917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3184355f26c560573e4-28914342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55f26c5614afd3_44515613',
  'variables' => 
  array (
    'nameDayPl' => 0,
    'name' => 0,
    'calendar' => 0,
    'cal' => 0,
    'item' => 0,
    'value' => 0,
    'getTime' => 0,
    'day' => 0,
    'plan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f26c5614afd3_44515613')) {function content_55f26c5614afd3_44515613($_smarty_tpl) {?><div class="calendarMonth" >
<table class="table" width="100%" class="_fL" border="0" cellspacing="0" cellpadding="0">
<caption>
	</caption>
	<thead class="header">
		<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nameDayPl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
		<th>
			<br />
			<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

			<br />
		</th>
		<?php } ?>
	</thead>
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
				<td id="<?php echo $_smarty_tpl->tpl_vars['day']->value[2];?>
" align="center" style="background-color: silver">
				<?php echo $_smarty_tpl->tpl_vars['day']->value[2];?>

				</td>
				<?php }else{ ?>
				<td id="<?php echo $_smarty_tpl->tpl_vars['day']->value[2];?>
" align="center">
				<?php echo $_smarty_tpl->tpl_vars['day']->value[2];?>

				</td>
				<?php }?>
			<?php } ?>
		</tr>
		<?php } ?>
	<?php } ?>
</table>
</div>
<div style="clear:both" ></div>
<?php echo var_dump($_smarty_tpl->tpl_vars['plan']->value);?>


<script>
	
var test = <?php echo json_encode($_smarty_tpl->tpl_vars['plan']->value);?>
;
$(document).ready( function() {
    $('.table td').hover( 
    	function() {
	$(this).html("<span>" + test[$(this).attr("id")] + "</span><br />\n\
			<span>" + test[$(this).attr("id")][0]["count"] + "</span>");
	
    },
    	function() {
		$(this).html($("<span>" + $(this).attr("id") + "</span>"));
	}
	);
	
// $(this).attr($(this).attr("id"))
});
</script><?php }} ?>