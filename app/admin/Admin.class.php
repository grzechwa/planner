<?php
require_once dirname(__FILE__) . '/../../config.php';
require_once $conf->root_path.'/app/db/AdminQueryDB.php';
require_once $conf->root_path.'/app/calendar/CalendarCtrl.class.php';
require_once $conf->root_path.'/vendor/smarty/smarty/libs/Smarty.class.php';


if(!isset($_SESSION)) {
	session_start();
}

/*
if($_SESSION['isLogged'] == null){
	// header("Location: " . $conf->app_url);
} else {
	if($_SESSION['user']=='user'){
		// header("Location: " . $conf->app_url.'/?action=empl');
	}
}
*/


class Admin {
	public $q;


	public function __construct() {
		$this->q = new AdminQueryDB();

	}

	public function validate() {

	}

	public function addUser($imie, $haslo) {
		return $this->q->addNewUser($imie, $haslo);
	}
	
	public function delUser() {

	}

	public function addActiv() {

	}
	public function listUsers() {
		return $this->q->getListUsers();
	}

	public function listActivs() {
		return $this->q->getListActivs();
	}

	public function generateView() {
		global $conf, $user;
		$smarty = new Smarty();
		$smarty->assign('conf', $conf);
		$smarty->assign('user', $user);
		$smarty->assign('page_title', 'Admin page!');

		$smarty->assign('users', $this->listUsers());
		$smarty->assign('activs', $this->listActivs());
		$smarty->display($conf->root_path . '/app/admin/adminwelcome.tpl');
	}

}


