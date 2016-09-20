<?php /* Smarty version Smarty-3.1.13, created on 2016-09-14 16:23:04
         compiled from "ui/theme/default/invoice-print.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183585152457d916f8d5aa31-31333539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a8b3154bde5ead9c3210247ac26fa166b6bf4e' => 
    array (
      0 => 'ui/theme/default/invoice-print.tpl',
      1 => 1473662008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183585152457d916f8d5aa31-31333539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_title' => 0,
    '_theme' => 0,
    '_c' => 0,
    'd' => 0,
    '_L' => 0,
    'date' => 0,
    '_admin' => 0,
    'xfooter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d916f8e43db2_85971187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d916f8e43db2_85971187')) {function content_57d916f8e43db2_85971187($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/images/favicon.ico">

	<script type="text/javascript">
	function printpage() {
		window.print();  
	}
	</script>
</head>

<body topmargin="0" leftmargin="0" onload="printpage()">
<div class="row">
    <div class="col-md-12">
        <table width="200">
			<tr>
				<td>
				<fieldset>
					<center>
					<b><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_c']->value['address'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['_c']->value['phone'];?>
<br>
					</center>
					============================================<br>
					INVOICE: <b><?php echo $_smarty_tpl->tpl_vars['d']->value['invoice'];?>
</b>  -  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
 : <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
 : <?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>
<br>
					============================================<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['d']->value['type'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['d']->value['plan_name'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['d']->value['price'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</b><br>
					<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
 : **********<br>
					<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
 : <b><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['d']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['d']->value['time'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
 : <b><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['d']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['d']->value['time'];?>
</b><br>
					============================================<br>
					<center><?php echo $_smarty_tpl->tpl_vars['_c']->value['note'];?>
</center>
				</fieldset>
				</td>
			</tr>
		</table>
    </div>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/jquery-1.10.2.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/bootstrap.min.js"></script>
<?php if (isset($_smarty_tpl->tpl_vars['xfooter']->value)){?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>

</body>
</html>
<?php }} ?>