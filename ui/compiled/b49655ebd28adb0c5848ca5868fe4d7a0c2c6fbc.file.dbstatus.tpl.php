<?php /* Smarty version Smarty-3.1.13, created on 2016-09-13 21:31:59
         compiled from "ui/theme/default/dbstatus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28372088357d80ddf32d0f6-95627922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b49655ebd28adb0c5848ca5868fe4d7a0c2c6fbc' => 
    array (
      0 => 'ui/theme/default/dbstatus.tpl',
      1 => 1473662005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28372088357d80ddf32d0f6-95627922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'dbsize' => 0,
    '_url' => 0,
    'tables' => 0,
    'tbl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d80ddf37fb81_43967115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d80ddf37fb81_43967115')) {function content_57d80ddf37fb81_43967115($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">
	<div class="col-sm-12">
		<div class="panel mb20 panel-default">
			<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Database_Status'];?>
</div>
			<div class="panel-body">
			
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="col-md-9"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total_Database_Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['dbsize']->value;?>
  MB </div>
						<div class="col-md-3 text-right">
							<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/dbbackup/" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download_Database_Backup'];?>
</a>
						</div>&nbsp;
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Table_Name'];?>
</th>
										<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rows'];?>
</th>
										<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
</th>
									</tr>
								</thead>
								<tbody>
								<?php  $_smarty_tpl->tpl_vars['tbl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tbl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tbl']->key => $_smarty_tpl->tpl_vars['tbl']->value){
$_smarty_tpl->tpl_vars['tbl']->_loop = true;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['rows'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['size'];?>
 Kb</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>