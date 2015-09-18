<?php

require_once dirname(__FILE__) . '/../config.php';
global $usertest;

// TODO: zastosowac funkcje filtrujace
isset($_REQUEST['action']) ? $action = $_REQUEST['action'] : $action = '';
// isset($_REQUEST['newdate']) ? $newdate = $_REQUEST['newdate'] : $date = '';

session_start();
$_SESSION['usertest'] = 'Test';

	include_once $conf->root_path . '/app/welcome/WelcomeCtrl.class.php';
	if (isset($_GET['date']) && !empty($_GET['date'])) {
		$date_parts = explode(",", $_GET['date']);
		// valid nextprev
		// miech do przodu
		if(isset($_REQUEST['nextm'])){
			$date_parts[1]++;
			unset($_REQUEST['nextm']);
		}
		
		if(isset($_REQUEST['prevm'])){
			$date_parts[1]--;
			unset($_REQUEST['prevm']);
		}


		if(isset($_REQUEST['nextd'])){
			$date_parts[2]++;
			unset($_REQUEST['nextd']);
		}
		
		if(isset($_REQUEST['prevd'])){
			$date_parts[2]--;
			unset($_REQUEST['prevd']);
		}

		$ctrl = new WelcomeCtrl($date_parts[0], $date_parts[1], $date_parts[2]);
	} else {
		$date_parts = explode("-", date("Y-m-d", time()));
		$ctrl = new WelcomeCtrl($date_parts[0], $date_parts[1], $date_parts[2] );
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
		// include_once $conf->root_path . '/app/admin/adminadd.tpl';
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
		// include_once $conf->root_path . '/app/admin/adminAddActiv.tpl';
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

	case 'add' :
		/*
		include_once $conf->root_path . '/app/calendar/CalendarDayCtrl.class.php';
		if (isset($_GET['date']) && !empty($_GET['date'])) {
			$date_parts = explode(",", $_GET['date']);
			$ctrl = new CalendarDayCtrl($date_parts[0], $date_parts[1], $date_parts[2]);
		} else {
			$ctrl = new CalendarDayCtrl(2015, 9, 1);
		}
		 * 
		 */
		$ctrl->addUserToPlanner($_REQUEST['planid'], $_REQUEST['userid']);
		$ctrl->generateView();

		break;
}