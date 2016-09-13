<?php /* Smarty version Smarty-3.1.13, created on 2016-09-12 16:19:26
         compiled from "ui/theme/default/sections/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153458268357d6731e0960b1-94571523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03f37743b98e0b5712f080c541c00e7e6b6a4c24' => 
    array (
      0 => 'ui/theme/default/sections/footer.tpl',
      1 => 1473662045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153458268357d6731e0960b1-94571523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_theme' => 0,
    'xfooter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d6731e0b42c1_16099191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d6731e0b42c1_16099191')) {function content_57d6731e0b42c1_16099191($_smarty_tpl) {?>			</div>
		</div>
	</div>

	<div class="site-settings clearfix hidden-xs">
		<div class="settings clearfix">
			<div class="trigger ion ion-settings left"></div>
			<div class="wrapper left">
				<ul class="list-unstyled other-settings">
					<li class="clearfix mb10">
						<div class="left small">Fixed Header</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox" id="fixedHeader"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
					<li class="clearfix mb10">
						<div class="left small">Nav Full</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox" id="navFull"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
				</ul>
				<hr/>
				<ul class="themes list-unstyled" id="themeColor">
					<li data-theme="theme-zero" class="active"></li>
					<li data-theme="theme-one"></li>
					<li data-theme="theme-two"></li>
					<li data-theme="theme-three"></li>
					<li data-theme="theme-four"></li>
					<li data-theme="theme-five"></li>
					<li data-theme="theme-six"></li>
					<li data-theme="theme-seven"></li>
				</ul>
			</div>
		</div>
	</div>

	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/vendors.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/screenfull.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/waves.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/select2.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/bootstrap-slider.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/summernote.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/bootstrap-datepicker.min.js"></script>
	<script src="ui/lib/js/bootbox.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/app.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/custom.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/form-elements.init.js"></script>

<?php if (isset($_smarty_tpl->tpl_vars['xfooter']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>
		
</body>
</html><?php }} ?>