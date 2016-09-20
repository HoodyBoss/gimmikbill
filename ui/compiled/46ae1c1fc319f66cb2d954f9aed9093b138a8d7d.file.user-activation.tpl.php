<?php /* Smarty version Smarty-3.1.13, created on 2016-09-14 13:28:09
         compiled from "ui/theme/default/user-activation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75483729257d8edf9a35767-75876736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46ae1c1fc319f66cb2d954f9aed9093b138a8d7d' => 
    array (
      0 => 'ui/theme/default/user-activation.tpl',
      1 => 1473662019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75483729257d8edf9a35767-75876736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d8edf9a75511_84880229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d8edf9a75511_84880229')) {function content_57d8edf9a75511_84880229($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation-post" >
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code_Voucher'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="code" name="code" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Enter_Voucher_Code'];?>
">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</button> 
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>