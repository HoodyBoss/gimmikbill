<?php /* Smarty version Smarty-3.1.13, created on 2016-09-13 20:47:34
         compiled from "ui/theme/default/customers-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54889221757d803766302a9-93895526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be82cdee7f493723141931d50eece1513a80eb4a' => 
    array (
      0 => 'ui/theme/default/customers-edit.tpl',
      1 => 1473662002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54889221757d803766302a9-93895526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d803767ad8b4_04570395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d803767ad8b4_04570395')) {function content_57d803767ad8b4_04570395($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_Contact'];?>
</div>
						<div class="panel-body">
						
							<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/edit-post" >         
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fullname'];?>
">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
									<div class="col-md-6">
										<input type="password" class="form-control" id="password" name="password">
										<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm_Password'];?>
</label>
									<div class="col-md-6">
										<input type="password" class="form-control" id="cpassword" name="cpassword">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
									<div class="col-md-6">
										<textarea name="address" id="address"  class="form-control"><?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
</textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phonenumber'];?>
">
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
										Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>