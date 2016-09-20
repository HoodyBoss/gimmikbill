<?php /* Smarty version Smarty-3.1.13, created on 2016-09-14 19:16:31
         compiled from "ui/theme/default/print-by-date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186102826057d93f9fd10882-44048198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e11da323612460a3f86470f87fb20700c27b788' => 
    array (
      0 => 'ui/theme/default/print-by-date.tpl',
      1 => 1473662014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186102826057d93f9fd10882-44048198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_title' => 0,
    '_theme' => 0,
    '_L' => 0,
    '_c' => 0,
    'mdate' => 0,
    'd' => 0,
    'ds' => 0,
    'dr' => 0,
    'xfooter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d93f9fda53c7_96871401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d93f9fda53c7_96871401')) {function content_57d93f9fda53c7_96871401($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/images/favicon.ico">

    <style type="text/css">
        @media print
        {
            .no-print, .no-print *
            {
                display: none !important;
            }
        }
    </style>
</head>

<body>
<div class="row">
    <div class="col-md-12">
        <div id="printable">
            <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Transactions_at_Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['mdate']->value));?>
</h4>
            <table class="table table-condensed table-bordered" style="background: #ffffff">
                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</th>
                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
				<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
				<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
				<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</th>
                <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                    <tr>
						<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
						<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ds']->value['plan_name'];?>
</td>
						<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
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
						<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ds']->value['method'];?>
</td>
						<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
                    </tr>
                <?php } ?>
            </table>
			<div class="clearfix text-right total-sum mb10">
				<h4 class="text-uppercase text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total_Income'];?>
:</h4>
				<h3 class="sum"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['dr']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h3>
			</div>
        </div>
        <button type="button" id="actprint" class="btn btn-default btn-sm no-print"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click_Here_to_Print'];?>
</button>
    </div>
</div>
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/jquery-1.10.2.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/bootstrap.min.js"></script>
<?php if (isset($_smarty_tpl->tpl_vars['xfooter']->value)){?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        $("#actprint").click(function() {
            window.print();
            return false;
        });
    });
</script>

</body>
</html><?php }} ?>