<?php /* Smarty version Smarty-3.1.13, created on 2016-09-15 12:58:23
         compiled from "ui/theme/default/sections/user-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196046549257da387f881bf2-45478376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb666deae0d1fa7fae00b19b9271715c335283ce' => 
    array (
      0 => 'ui/theme/default/sections/user-header.tpl',
      1 => 1473662046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196046549257da387f881bf2-45478376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_title' => 0,
    '_theme' => 0,
    'xheader' => 0,
    '_url' => 0,
    '_L' => 0,
    '_user' => 0,
    '_system_menu' => 0,
    '_c' => 0,
    'notify' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57da387f926e57_29184388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57da387f926e57_29184388')) {function content_57da387f926e57_29184388($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
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
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/select2.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/bootstrap-colorpicker.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/bootstrap-slider.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/summernote.css">

	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/main.min.css">
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/ie/matchMedia.js"></script>  <![endif]--> 
<?php if (isset($_smarty_tpl->tpl_vars['xheader']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

<?php }?>

</head>

<body id="app" class="app off-canvas">

	<header class="site-head" id="site-head">
		<ul class="list-unstyled left-elems">
			<li>
				<a href="#" class="nav-trigger ion ion-drag"></a>
			</li>
			
			<li>
				<div class="site-logo visible-xs">
					<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home" class="text-uppercase h3">
						<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</span>
					</a>
				</div>
			</li>
			<li class="fullscreen hidden-xs">
				<a href="#"><i class="ion ion-qr-scanner"></i></a>
			</li>

			<li class="notify-drop hidden-xs dropdown">
				<a href="#" data-toggle="dropdown">
					<i class="ion ion-chatboxes"></i>
					<span class="badge badge-danger badge-xs circle">3</span>
				</a>
				<div class="panel panel-default dropdown-menu">
					<div class="panel-heading">
						You have 3 new message 
						<a href="#" class="right btn btn-xs btn-pink mt-3">Show All</a>
					</div>
					<div class="panel-body">
						Coming Soon!!! Next Version...
					</div>
				</div>
			</li>
		</ul>
		<ul class="list-unstyled right-elems">
			<li class="logout hidden-xs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout"><i class="ion ion-power"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></a>
			</li>
		</ul>
	</header>

	<div class="main-container clearfix">
		<aside class="nav-wrap" id="site-nav" data-perfect-scrollbar>
			<div class="nav-head">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home" class="site-logo text-uppercase">
					<i class="ion ion-wifi"></i>
					<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</span>
				</a>
			</div>

			<nav class="site-nav clearfix" role="navigation">
				<div class="profile clearfix mb15">
					<img src="system/uploads/user.jpg" alt="admin">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<div class="group">
						<div class="dropdown"><?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
<span class="caret"></span>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/profile"><i class="ion ion-person"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['My_Account'];?>
<div class="ripple-wrapper"></div></a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/change-password"><i class="ion ion-settings"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout"><i class="ion ion-power"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></li>
							</ul>
						</div>
						<small class="desig"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Member'];?>
</small>
					</div>
					</a>
				</div>
				
				<ul class="list-unstyled clearfix nav-list mb15">
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='home'){?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home">
							<i class="ion ion-monitor"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span>
						</a>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='pm'){?>class="open"<?php }?>>
						<a href="#">
							<i class="ion ion-email"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Private_Message'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='pm'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pm/inbox"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Inbox'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='pm'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pm/outbox"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Outbox'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='pm'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pm/compose"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Compose'];?>
</a></li>
						</ul>
					</li>
				
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='voucher'){?>class="open"<?php }?>>
						<a href="#">
							<i class="ion ion-card"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='voucher'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='voucher'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/list-activated"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Activated_Voucher'];?>
</a></li>
						</ul>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='order'){?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order">
							<i class="ion ion-ios-cart"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>
</span>
						</a>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='accounts'){?>class="open"<?php }?>>
						<a href="#">
							<i class="ion ion-gear-a"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['My_Account'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='accounts'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/profile"><?php echo $_smarty_tpl->tpl_vars['_L']->value['My_Profile'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='accounts'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/change-password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
							<li>&nbsp;</li>
						</ul>
					</li>
				
				</ul>
				
			</nav>

			<footer class="nav-foot">
				<p><?php echo date('Y');?>
 &copy; <span><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</span></p>
			</footer>
		</aside>

		<div class="content-container" id="content">
			<div class="page <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='dashboard'){?>page-dashboard<?php }?>">

			<?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
				<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

			<?php }?><?php }} ?>