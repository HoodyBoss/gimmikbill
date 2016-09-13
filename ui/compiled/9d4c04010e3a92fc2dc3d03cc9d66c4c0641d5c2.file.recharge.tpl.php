<?php /* Smarty version Smarty-3.1.13, created on 2016-09-12 16:20:53
         compiled from "ui/theme/default/recharge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74373945157d67375674b89-46430717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d4c04010e3a92fc2dc3d03cc9d66c4c0641d5c2' => 
    array (
      0 => 'ui/theme/default/recharge.tpl',
      1 => 1473662016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74373945157d67375674b89-46430717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'c' => 0,
    'cs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d67375743e17_79532924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d67375743e17_79532924')) {function content_57d67375743e17_79532924($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Account'];?>
</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge-post" >            
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Account'];?>
</label>
								<div class="col-md-6">
									<select id="personSelect" name="id_customer" style="width: 100%" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Customer'];?>
...">
									<option></option>
										<?php  $_smarty_tpl->tpl_vars['cs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->key => $_smarty_tpl->tpl_vars['cs']->value){
$_smarty_tpl->tpl_vars['cs']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cs']->value['username'];?>
</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
								<div class="col-md-6">
									<input type="radio" id="Hot" name="type" value="Hotspot"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Hotspot_Plans'];?>
 
									<input type="radio" id="POE" name="type" value="PPPOE"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>
 
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</label>
								<div class="col-md-6">
									<select id="server" name="server" class="form-control">
										<option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Routers'];?>
</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service_Plan'];?>
</label>
								<div class="col-md-6">
									<select id="plan" name="plan" class="form-control">
										<option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Plans'];?>
</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
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

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>