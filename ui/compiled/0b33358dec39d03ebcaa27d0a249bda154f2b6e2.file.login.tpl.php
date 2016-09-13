<?php /* Smarty version Smarty-3.1.13, created on 2016-09-12 15:16:15
         compiled from "ui\theme\default\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1652057d6644fe64c58-82956420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b33358dec39d03ebcaa27d0a249bda154f2b6e2' => 
    array (
      0 => 'ui\\theme\\default\\login.tpl',
      1 => 1446202412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652057d6644fe64c58-82956420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_title' => 0,
    '_L' => 0,
    '_theme' => 0,
    'notify' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d6644fece1a9_03177363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d6644fece1a9_03177363')) {function content_57d6644fece1a9_03177363($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</title>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/images/logo.png" type="image/x-icon" />
	
	<!-- Icons -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/waves.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/perfect-scrollbar.css">
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/main.min.css">

 	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'> -->
	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/ie/matchMedia.js"></script>  <![endif]--> 

</head>
<body id="app" class="app off-canvas body-full">
	<div class="main-container clearfix">
		<div class="content-container" id="content">
			<div class="page page-auth">
				<div class="auth-container">
					<div class="form-head mb20">
						<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold"><a href="./"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</a></h1>
						<h5 class="text-normal h5 text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sign_In_Member'];?>
</h5>
					</div>
				<?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
					<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

				<?php }?>
					<div class="form-container">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login/post" method="post">
							<div class="md-input-container md-float-label">
								<input type="text" name="username" class="md-input">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
							</div>

							<div class="md-input-container md-float-label">
								<input type="password" name="password" class="md-input">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
							</div>

							<div class="clearfix">
								<div class="ui-checkbox ui-checkbox-primary right">
									<label>
										<input type="checkbox"> 
										<span>Remember me</span>
									</label>
								</div>
							</div>
							<div class="btn-group btn-group-justified mb15">
								<div class="btn-group">
									<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</button>
								</div>
							</div> 
						</form>
					</div>

				</div>
			</div>
		</div> 
	</div>
	<script src="scripts/vendors.js"></script>
</body>
</html><?php }} ?>