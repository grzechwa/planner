<?php
require_once dirname(__FILE__) . '/../../config.php';
require_once $conf->root_path.'/app/db/AdminQueryDB.php';
require_once $conf->root_path.'/app/calendar/CalendarCtrl.class.php';
require_once $conf->root_path.'/vendor/smarty/smarty/libs/Smarty.class.php';

/*
 * 
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
	
	public function delUser($id) {
		return $this->q->delUser($id);
	}

	public function addActiv($nazwa) {
		return $this->q->addNewActive($nazwa);
	}

	public function delActiv($nazwa) {
		return $this->q->delActiv($nazwa);
	}

	public function addPlan($data, $godz, $zaj){
		return $this->q->addNewPlan($data, $godz, $zaj);
	}

	public function delPlan($id){
		return $this->q->delPlan($id);
	}

	public function listUsers() {
		return $this->q->getListUsers();
	}

	public function listActivs() {
		return $this->q->getListActivs();
	}

	public function listPlans() {
		return $this->q->getListPlans();
	}

	public function generateView() {
		global $conf, $user;
		$smarty = new Smarty();
		$smarty->assign('conf', $conf);
		$smarty->assign('user', $user);
		$smarty->assign('page_title', 'Admin page!');

		$smarty->assign('users', $this->listUsers());
		$smarty->assign('activs', $this->listActivs());
		$smarty->assign('plans', $this->listPlans());
		$smarty->display($conf->root_path . '/app/admin/adminwelcome.tpl');
	}
}


