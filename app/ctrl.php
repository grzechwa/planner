<?php
require_once dirname (__FILE__).'/../config.php';

// TODO: zastosowac funkcje filtrujace
isset($_REQUEST['action'])?$action = $_REQUEST['action']:$action = '';

//2. wykonanie akcji
switch ($action) {
	default : // 'welcome'
		include_once $conf->root_path.'/app/welcome/WelcomeCtrl.class.php';
		if(isset($_GET['date']) && !empty($_GET['date']))
		{
			$date_parts = explode(",", $_GET['date']);
			$ctrl = new WelcomeCtrl ($date_parts[0], $date_parts[1], $date_parts[2]);
		}
		else
		{
			$ctrl = new WelcomeCtrl (2015, 9, 7);
		}
		$ctrl->generateView ();
		// $ctrl->process();
	break;
	case 'admin' :
		echo 'hello admin';
	break;
	case 'user' :
		echo 'hello user';
	break;

}
