<?php /* Smarty version Smarty-3.1.13, created on 2016-09-12 15:46:10
         compiled from "ui\theme\default\app-settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1650357d66b52c83019-89722536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136dc68ecd0eb22bff1f0a61acd91049419d3cdc' => 
    array (
      0 => 'ui\\theme\\default\\app-settings.tpl',
      1 => 1445848850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1650357d66b52c83019-89722536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    '_c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d66b53028d92_28953764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d66b53028d92_28953764')) {function content_57d66b53028d92_28953764($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General_Settings'];?>
</div>
						<div class="panel-body">

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['App_Name'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="company" name="company" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
">
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['App_Name_Help_Text'];?>
</span>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
						<div class="col-md-6">
							<textarea class="form-control" id="address" name="address" rows="3"><?php echo $_smarty_tpl->tpl_vars['_c']->value['address'];?>
</textarea>
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You_can_use_html_tag'];?>
</span>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['phone'];?>
">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">Theme</label>
						<div class="col-md-6">
							<select name="theme" id="theme" class="form-control">
								<option value="default" <?php if ($_smarty_tpl->tpl_vars['_c']->value['theme']=='default'){?>selected="selected" <?php }?>>Default</option>
								<option value="blue" <?php if ($_smarty_tpl->tpl_vars['_c']->value['theme']=='blue'){?>selected="selected" <?php }?>>Blue</option>
							</select>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label">Note Invoice</label>
						<div class="col-md-6">
							<textarea class="form-control" id="note" name="note" rows="3"><?php echo $_smarty_tpl->tpl_vars['_c']->value['note'];?>
</textarea>
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You_can_use_html_tag'];?>
</span>
						</div>
                    </div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
						</div>
					</div>
                </form>
				
					</div>
				</div>
			</div>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>