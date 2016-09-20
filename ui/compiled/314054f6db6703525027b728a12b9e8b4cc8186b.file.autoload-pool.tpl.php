<?php /* Smarty version Smarty-3.1.13, created on 2016-09-14 17:08:12
         compiled from "ui/theme/default/autoload-pool.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195114183057d9218cb93140-34255865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '314054f6db6703525027b728a12b9e8b4cc8186b' => 
    array (
      0 => 'ui/theme/default/autoload-pool.tpl',
      1 => 1473661994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195114183057d9218cb93140-34255865',
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
  'unifunc' => 'content_57d9218cbb6038_32737866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d9218cbb6038_32737866')) {function content_57d9218cbb6038_32737866($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['pool_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['pool_name'];?>
</option>
<?php } ?><?php }} ?>