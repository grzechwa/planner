<?php
require_once dirname (__FILE__).'/../config.php';

// TODO: zastosowac funkcje filtrujace
isset($_REQUEST['action'])?$action = $_REQUEST['action']:$action = '';

//2. wykonanie akcji
switch ($action) {
	default : // 'welcome'
		include_once $conf->root_path.'/app/welcome/WelcomeCtrl.class.php';
		$ctrl = new WelcomeCtrl ();
		$ctrl->generateView ();
		// $ctrl->process();
	break;
	case 'admin' :
		echo 'hello admin';
	break;
}
