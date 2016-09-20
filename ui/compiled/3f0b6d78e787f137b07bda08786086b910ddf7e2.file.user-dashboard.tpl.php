<?php /* Smarty version Smarty-3.1.13, created on 2016-09-14 13:25:17
         compiled from "ui/theme/default/user-dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78058281157d8ed4da563a0-69258964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f0b6d78e787f137b07bda08786086b910ddf7e2' => 
    array (
      0 => 'ui/theme/default/user-dashboard.tpl',
      1 => 1473662021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78058281157d8ed4da563a0-69258964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_user' => 0,
    '_url' => 0,
    '_bill' => 0,
    '_c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d8ed4dabd759_88880861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d8ed4dabd759_88880861')) {function content_57d8ed4dabd759_88880861($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


					<div class="row">
						<div class="col-md-12">
							<div class="dash-head clearfix mt15 mb20">
								<div class="left">
									<h4 class="mb5 text-light"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
, <?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
</h4>
									<p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome_Text_User'];?>
</p>
									<ul>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</a></li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/list-activated"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Activated_Voucher'];?>
</a></li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/change-password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>
</li>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Private_Message'];?>
</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel mb20 panel-primary panel-hovered">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</div>
								<div class="panel-body">
									<div class="row">
			            				<div class="col-sm-3">
					               			<p class="small text-success text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</p>
					               			<p class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['username'];?>
</p>
					                	</div>
			            				<div class="col-sm-3">
					               			<p class="small text-primary text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</p>
					               			<p class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['namebp'];?>
</p>
					                	</div>
					                	<div class="col-sm-3">
					                		<p class="small text-info text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</p>
					               			<p class="small mb15"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['_bill']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['_bill']->value['time'];?>
</p>
					                	</div>
					                	<div class="col-sm-3">
					                		<p class="small text-danger text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</p>
					               			<p class="small mb15"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['_bill']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['_bill']->value['time'];?>
</p>
					                	</div>
									</div>
								</div>
							</div>
						</div>
					</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>