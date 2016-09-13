<?php /* Smarty version Smarty-3.1.13, created on 2016-09-12 20:22:52
         compiled from "ui/theme/default/autoload-server.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12509902157d6ac2c2dee42-87485380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a7433b79d8627d154617a597b539a34201ab5c0' => 
    array (
      0 => 'ui/theme/default/autoload-server.tpl',
      1 => 1473661996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12509902157d6ac2c2dee42-87485380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'd' => 0,
    'ds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d6ac2c2fca85_70659958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d6ac2c2fca85_70659958')) {function content_57d6ac2c2fca85_70659958($_smarty_tpl) {?><option value="">Select Routers</option>
<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</option>
<?php } ?><?php }} ?>