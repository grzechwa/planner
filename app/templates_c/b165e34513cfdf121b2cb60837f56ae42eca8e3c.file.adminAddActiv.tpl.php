<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-17 00:49:49
         compiled from "/home/greg/www_pv/plannersmarty/app/admin/adminAddActiv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24948829155f9f20db06bb8-93767325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b165e34513cfdf121b2cb60837f56ae42eca8e3c' => 
    array (
      0 => '/home/greg/www_pv/plannersmarty/app/admin/adminAddActiv.tpl',
      1 => 1442437173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24948829155f9f20db06bb8-93767325',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55f9f20db08700_82020697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f9f20db08700_82020697')) {function content_55f9f20db08700_82020697($_smarty_tpl) {?><div class="container text-center">

Hello Activ

<form action="?action=addActiv" method="post" >
    <label for="nazwa">nazwa</label>
    <input type="text" name="nazwa" />
    <br />
    <input type="submit" value="ok" />
</form>
</div><?php }} ?>