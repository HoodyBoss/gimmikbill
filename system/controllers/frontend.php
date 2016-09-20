<?php
/**
* PHP Mikrotik Billing (www.phpmixbill.com)
* Ismail Marzuqi <iesien22@yahoo.com>
* @version		5.0
* @copyright	Copyright (C) 2014-2015 PHP Mikrotik Billing
* @license		GNU General Public License version 2 or later; see LICENSE.txt
* @donate		PayPal: iesien22@yahoo.com / Bank Mandiri: 130.00.1024957.4
**/
_admin();
$ui->assign('_title', $_L['Front_end_title'].' - '. $config['CompanyName']);
$ui->assign('_system_menu', 'frontend');

$action = $routes['1'];
$admin = Admin::_info();
$ui->assign('_admin', $admin);

if($admin['user_type'] != 'Admin' AND $admin['user_type'] != 'Sales'){
	r2(U."dashboard",'e',$_L['Do_Not_Access']);
}

use PEAR2\Net\RouterOS;
require_once 'system/autoload/PEAR2/Autoload.php';

switch ($action) {
		
	case 'frontend':
		$ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/front-end.js"></script>');
		$name = _post('name');
		if ($name != ''){
			$paginator = Paginator::bootstrap('tbl_frontend','title_msg','%'.$name.'%','status','Y');
			$d = ORM::for_table('tbl_frontend')->where('tbl_frontend.status','Y')->where_like('tbl_frontend.title_msg','%'.$name.'%')->offset($paginator['startpoint'])->limit($paginator['limit'])->find_many();
		}else{
			$paginator = Paginator::bootstrap('tbl_frontend','status','Y');
			$d = ORM::for_table('tbl_frontend')->where('tbl_frontend.status','Y')->offset($paginator['startpoint'])->limit($paginator['limit'])->find_many();
		}
	
		$ui->assign('d',$d);
		$ui->assign('paginator',$paginator);
        $ui->display('frontend-init.tpl');
        break;
	case 'add':
		
        $ui->display('frontend-add.tpl');
        break;
    default:
        $ui->display('404.tpl');
}