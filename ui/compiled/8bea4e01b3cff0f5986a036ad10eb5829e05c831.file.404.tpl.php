<?php /* Smarty version Smarty-3.1.13, created on 2016-09-15 12:58:23
         compiled from "ui/theme/default/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18436496257da387f84e795-37988085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bea4e01b3cff0f5986a036ad10eb5829e05c831' => 
    array (
      0 => 'ui/theme/default/404.tpl',
      1 => 1473661991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18436496257da387f84e795-37988085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57da387f87e615_43735908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57da387f87e615_43735908')) {function content_57da387f87e615_43735908($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<div class="page page-err clearfix">
				<div class="err-container">
					<h1 class="m404 mb0">404 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home" class="ion ion-forward" title="go to dashboard"></a></h1>
					<p class="text-desc mb20">Coming Soon!! Next Version...</p>
				</div>
			</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>