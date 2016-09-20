<?php /* Smarty version Smarty-3.1.13, created on 2016-09-13 21:09:23
         compiled from "ui/theme/default/reports-daily.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189689479357d808933851f3-19380347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372cc6561589edb4c200b89d2abda4dda3112cfe' => 
    array (
      0 => 'ui/theme/default/reports-daily.tpl',
      1 => 1473662016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189689479357d808933851f3-19380347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_c' => 0,
    'mdate' => 0,
    'mtime' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
    'paginator' => 0,
    'dr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d80893427bc6_82487608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d80893427bc6_82487608')) {function content_57d80893427bc6_82487608($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
										<p class="small"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['mdate']->value));?>
 <?php echo $_smarty_tpl->tpl_vars['mtime']->value;?>
</p>
									</div>
									<div class="group clearfix right">
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
export/print-by-date" class="btn btn-default" target="_blank"><i class="ion ion-printer"></i><?php echo $_smarty_tpl->tpl_vars['_L']->value['Export_for_Print'];?>
</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
export/pdf-by-date" class="btn btn-default"><i class="fa fa-file-pdf-o"></i><?php echo $_smarty_tpl->tpl_vars['_L']->value['Export_to_PDF'];?>
</a>
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
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['price'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
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
								
								<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

								
								<div class="clearfix text-right total-sum mb10">
									<h4 class="text-uppercase text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total_Income'];?>
:</h4>
									<h3 class="sum"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['dr']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h3>
								</div>
								<p class="text-center small text-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Transactions_at_Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['mdate']->value));?>
 <?php echo $_smarty_tpl->tpl_vars['mtime']->value;?>
</p>
							</div>
						</div>
					</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>