<?php /* Smarty version Smarty-3.1.13, created on 2016-09-13 21:15:30
         compiled from "ui/theme/default/bandwidth-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67069003057d80a028b0c37-00864700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eaabf1f3bbc5a6bb85769dad6de8c2d3476e5c6' => 
    array (
      0 => 'ui/theme/default/bandwidth-edit.tpl',
      1 => 1473661998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67069003057d80a028b0c37-00864700',
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
  'unifunc' => 'content_57d80a02934cf7_22862640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d80a02934cf7_22862640')) {function content_57d80a02934cf7_22862640($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_Bandwidth'];?>
</div>
						<div class="panel-body">
						
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bandwidth/edit-post" >
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['BW_Name'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['name_bw'];?>
">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rate_Download'];?>
</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="rate_down" name="rate_down" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['rate_down'];?>
">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="rate_down_unit" name="rate_down_unit">
								<option value="Kbps" <?php if ($_smarty_tpl->tpl_vars['d']->value['rate_down_unit']=='Kbps'){?>selected="selected" <?php }?>>Kbps</option>
                                <option value="Mbps" <?php if ($_smarty_tpl->tpl_vars['d']->value['rate_down_unit']=='Mbps'){?>selected="selected" <?php }?>>Mbps</option>
							</select>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rate_Upload'];?>
</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="rate_up" name="rate_up" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['rate_up'];?>
">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="rate_up_unit" name="rate_up_unit">
								<option value="Kbps" <?php if ($_smarty_tpl->tpl_vars['d']->value['rate_up_unit']=='Kbps'){?>selected="selected" <?php }?>>Kbps</option>
                                <option value="Mbps" <?php if ($_smarty_tpl->tpl_vars['d']->value['rate_up_unit']=='Mbps'){?>selected="selected" <?php }?>>Mbps</option>
							</select>
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
							Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bandwidth/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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