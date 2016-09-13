<?php /* Smarty version Smarty-3.1.13, created on 2016-09-12 20:25:36
         compiled from "ui/theme/default/routers-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179884580657d6acd056ab71-98536562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b3a4f16899cc67776a510005f36b5a6badbef3' => 
    array (
      0 => 'ui/theme/default/routers-add.tpl',
      1 => 1473662017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179884580657d6acd056ab71-98536562',
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
  'unifunc' => 'content_57d6acd059a102_14490832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d6acd059a102_14490832')) {function content_57d6acd059a102_14490832($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Router'];?>
</div>
						<div class="panel-body">
						
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/add-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Name'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="name" name="name">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP_Address'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="ip_address" name="ip_address">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="username" name="username">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Secret'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="password" name="password">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
						<div class="col-md-6">
							<textarea class="form-control" id="description" name="description"></textarea>
						</div>
                    </div>
					

					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
							Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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