<?php /* Smarty version Smarty-3.1.13, created on 2016-09-13 02:21:07
         compiled from "ui/theme/default/reports-period-view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77750826557d70023db0d43-59609616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14c786c3b99dca8be4da792c48795f408291b0ee' => 
    array (
      0 => 'ui/theme/default/reports-period-view.tpl',
      1 => 1473662016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77750826557d70023db0d43-59609616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'stype' => 0,
    '_c' => 0,
    'fdate' => 0,
    'tdate' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
    'dr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d700240fa296_61799512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d700240fa296_61799512')) {function content_57d700240fa296_61799512($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


					<div class="row">
						<div class="col-md-12">
							<div class="invoice-wrap">
								<div class="clearfix invoice-head">
									<h3 class="brand-logo text-uppercase text-bold left mt15">
										<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Daily_Report'];?>
</span>
									</h3>
								</div>
								<div class="clearfix invoice-subhead mb20">
									<div class="group clearfix left">
										<p class="text-bold mb5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Transactions_at_Date'];?>
:</p>
										<p class="small"><?php echo $_smarty_tpl->tpl_vars['stype']->value;?>
 [<?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['fdate']->value));?>
 - <?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['tdate']->value));?>
]</p>
									</div>
									<div class="group clearfix right">
										<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
export/print-by-period" target="_blank">
											<input type="hidden" name="fdate" value="<?php echo $_smarty_tpl->tpl_vars['fdate']->value;?>
">
											<input type="hidden" name="tdate" value="<?php echo $_smarty_tpl->tpl_vars['tdate']->value;?>
">
											<input type="hidden" name="stype" value="<?php echo $_smarty_tpl->tpl_vars['stype']->value;?>
">
											<button type="submit" class="btn btn-default"><i class="fa fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export_for_Print'];?>
</button>
										</form>
										<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
export/pdf-by-period" target="_blank">
											<input type="hidden" name="fdate" value="<?php echo $_smarty_tpl->tpl_vars['fdate']->value;?>
">
											<input type="hidden" name="tdate" value="<?php echo $_smarty_tpl->tpl_vars['tdate']->value;?>
">
											<input type="hidden" name="stype" value="<?php echo $_smarty_tpl->tpl_vars['stype']->value;?>
">
											<button type="submit" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export_to_PDF'];?>
</button>
										</form>
									</div>
								</div>
								<table class="table table-bordered invoice-table mb10">
									<thead>
										<tr>
											<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
											<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
											<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
											<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</th>
											<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
											<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
											<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
											<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                                        <tr>
											<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['plan_name'];?>
</td>
											<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['price'],0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
											<td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['ds']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['time'];?>
</td>
											<td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['ds']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['time'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['method'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
                                        </tr>
										<?php } ?>
									</tbody>
								</table>
								
								<div class="clearfix text-right total-sum mb10">
									<h4 class="text-uppercase text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total_Income'];?>
:</h4>
									<h3 class="sum"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['dr']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h3>
								</div>
								<p class="text-center small text-info"><?php echo $_smarty_tpl->tpl_vars['stype']->value;?>
 [<?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['fdate']->value));?>
 - <?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['tdate']->value));?>
]</p>
							</div>
						</div>
					</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>