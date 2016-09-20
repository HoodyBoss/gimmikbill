<?php /* Smarty version Smarty-3.1.13, created on 2016-09-13 20:48:35
         compiled from "ui/theme/default/autoload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74586702257d803b38d1dc7-09716177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '662a7cce459a8b5d264116bbd7fab7d84a68a173' => 
    array (
      0 => 'ui/theme/default/autoload.tpl',
      1 => 1473661996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74586702257d803b38d1dc7-09716177',
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
  'unifunc' => 'content_57d803b3c393b7_77081723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d803b3c393b7_77081723')) {function content_57d803b3c393b7_77081723($_smarty_tpl) {?><option value="">Select Plans</option>
<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</option>
<?php } ?><?php }} ?>