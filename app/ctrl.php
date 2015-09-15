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
			$ctrl = new WelcomeCtrl(2015, 9, 1);
		}


//2. wykonanie akcji
switch ($action) {
	default : // 'welcome'
		$ctrl->generateView();
		// $ctrl->process();
		break;
	case 'admin' :
		include_once $conf->root_path . '/app/admin/Admin.class.php';
		$adm = new Admin();
		$adm->generateView();

		break;
	case 'user' :
		echo 'hello user';
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
