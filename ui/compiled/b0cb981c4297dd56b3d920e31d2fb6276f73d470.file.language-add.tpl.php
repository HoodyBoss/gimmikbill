<?php /* Smarty version Smarty-3.1.13, created on 2016-09-12 16:20:04
         compiled from "ui/theme/default/language-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93099414057d67344333da6-99757391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0cb981c4297dd56b3d920e31d2fb6276f73d470' => 
    array (
      0 => 'ui/theme/default/language-add.tpl',
      1 => 1473662009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93099414057d67344333da6-99757391',
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
  'unifunc' => 'content_57d67344370ef9_66580350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d67344370ef9_66580350')) {function content_57d67344370ef9_66580350($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Plan'];?>
</div>
						<div class="panel-body">
						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/lang-post" >            
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name_Lang'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Folder_Lang'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="folder" name="folder">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Translator'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="translator" name="translator">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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