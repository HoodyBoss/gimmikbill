<?php /* Smarty version Smarty-3.1.13, created on 2016-09-12 16:21:02
         compiled from "ui/theme/default/a404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74746910857d6737e8f12e0-38014920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07f0804528377ea86b1f173285575ebb38866e0e' => 
    array (
      0 => 'ui/theme/default/a404.tpl',
      1 => 1473661991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74746910857d6737e8f12e0-38014920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d6737e91dd67_22295206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d6737e91dd67_22295206')) {function content_57d6737e91dd67_22295206($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<div class="page page-err clearfix">
				<div class="err-container">
					<h1 class="m404 mb0">404 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="ion ion-forward" title="go to dashboard"></a></h1>
					<p class="text-desc mb20">Coming Soon!! Next Version...</p>
				</div>
			</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>