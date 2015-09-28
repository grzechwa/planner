<?php
require_once dirname(__FILE__) . '/../config.php';

// TODO: zastosowac funkcje filtrujace
isset($_REQUEST['action']) ? $action = $_REQUEST['action'] : $action = '';
session_start();

// 1. sprawdzenie podanej daty 
include_once $conf->root_path . '/app/welcome/WelcomeCtrl.class.php';
if (isset($_REQUEST['date']) && !empty($_REQUEST['date'])) {
	$date_parts = explode(",", $_REQUEST['date']);
	if (isset($_REQUEST['nextm'])) {
		$date_parts[1];
		unset($_REQUEST['nextm']);
	}
	if (isset($_REQUEST['prevm'])) {
		$date_parts[1];
		unset($_REQUEST['prevm']);
	}
	if (isset($_REQUEST['nextmd'])) {
		$date_parts[1];
		unset($_REQUEST['nextmd']);
	}
	if (isset($_REQUEST['prevmd'])) {
		$date_parts[1];
		unset($_REQUEST['prevmd']);
	}
	if (isset($_REQUEST['nextd'])) {
		$date_parts[2];
		unset($_REQUEST['nextd']);
	}
	if (isset($_REQUEST['prevd'])) {
		$date_parts[2];
		unset($_REQUEST['prevd']);
	}
	$ctrl = new WelcomeCtrl($date_parts[0], $date_parts[1], $date_parts[2]);
} else {
		$date_parts = explode("-", date("Y-m-d", time()));
		$ctrl = new WelcomeCtrl($date_parts[0], $date_parts[1], $date_parts[2]);
}

//2. wykonanie akcji
switch ($action) {
	default : // 'welcome'
		$ctrl->generateView();
		break;
	case 'admin' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->generateView();
		break;
	case 'goAddUser' :
		include_once $conf->root_path . '/app/admin/AdminAddUser.class.php';
		$adm = new AdminAddUser();
		$adm->generateView();
		break;
	case 'addUser' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->addUser($_REQUEST['imie'], $_REQUEST['haslo']);
		$adm->generateView();
		break;
	case 'goAddActiv' :
		include_once $conf->root_path . '/app/admin/AdminAddActiv.class.php';
		$adm = new AdminAddActiv();
		$adm->generateView();
		break;
	case 'addActiv' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->addActiv($_REQUEST['nazwa']);
		$adm->generateView();
		break;
	case 'goAddPlan' :
		include_once $conf->root_path . '/app/admin/AdminAddPlan.class.php';
		$adm = new AdminAddPlan();
		$adm->generateView();
		break;
	case 'addPlan' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->addPlan($_REQUEST['data'], $_REQUEST['godz'], $_REQUEST['zajecia']);
		$adm->generateView();
		break;



	case 'delUser' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->delUser($_REQUEST['idel']);
		$adm->generateView();
		break;
	case 'delActiv' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->delActiv($_REQUEST['idelact']);
		$adm->generateView();
		break;
	case 'delPlan' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->delPlan($_REQUEST['idelplan']);
		$adm->generateView();
		break;

		case 'add' :
		$ctrl->addUserToPlanner($_REQUEST['planid'], $_REQUEST['userid']);
		$ctrl->generateView();
		break;
	case 'del' :
		$ctrl->dellUserFromPlanner($_REQUEST['planid'], $_REQUEST['userid']);
		$ctrl->generateView();
		break;

	case 'goLogin' :
		include_once $conf->root_path . '/app/security/LoginCtrl.class.php';
		$log = new Login();
		$log->generateView();
		break;
	case 'logout' :
		$_SESSION['isLogged'] = false;
		unset($_SESSION['isLogged']);
		unset($_SESSION['user']);
		unset($_SESSION['haslo']);
		$ctrl->typeCal = 1;
		$_REQUEST['date'] = $ctrl->getCal()->getYear() . ',' 
				. $ctrl->getCal()->getMonth() . ',' 
				. $ctrl->getCal()->getDay();
		$ctrl->generateView();
		break;
	case 'login' :
		include_once $conf->root_path . '/app/db/LogDB.php';
		$log = new LogDB();
		$log->getDate();
		$ctrl->generateView();
		break;

	case 'error' :
		include_once $conf->root_path . '/app/security/error.php';
		break;
}