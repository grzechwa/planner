<?php

require_once dirname(__FILE__) . '/../config.php';


// TODO: zastosowac funkcje filtrujace
isset($_REQUEST['action']) ? $action = $_REQUEST['action'] : $action = '';
session_start();

		include_once $conf->root_path . '/app/welcome/WelcomeCtrl.class.php';
		if (isset($_GET['date']) && !empty($_GET['date'])) {
			$date_parts = explode(",", $_GET['date']);
			$ctrl = new WelcomeCtrl($date_parts[0], $date_parts[1], $date_parts[2]);
		} else {
			$ctrl = new WelcomeCtrl(date("Y-m-d", time()));
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
	case 'delUser' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->delUser();
		$adm->generateView();
		var_dump($_REQUEST);
		break;
	case 'goAddUser' :
		include_once $conf->root_path . '/app/admin/adminAddUser.tpl';
		break;
	case 'addUser' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->addUser();
		$adm->generateView();
		var_dump($_REQUEST);
		break;
	case 'delActiv' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm-
		$adm->generateView();
		var_dump($_REQUEST);
		break;
	case 'addActiv' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->addUser();
		$adm->generateView();
		var_dump($_REQUEST);
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
