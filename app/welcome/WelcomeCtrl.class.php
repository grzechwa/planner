<?php
require_once $conf->root_path . '/app/util/Messages.class.php';
require_once $conf->root_path . '/app/calendar/CalendarCtrl.class.php';
require_once $conf->root_path . '/vendor/smarty/smarty/libs/Smarty.class.php';

/*
 * 
 */
class WelcomeCtrl {

	private $msg;
	private $cal;
	private $q; // query
	
	public function getCal() {
		return $this->cal;
	}

	public function setCal($cal) {
		$this->cal = $cal;
	}

	public function __construct($year = null, $month = null, $day = NULL) {
		$this->msg = new Messages();
		$this->cal = new CalendarCtrl($year, $month, $day);
		$this->cal->calendar();
		$this->q = new QueryDB();
	}

	public function addUserToPlanner($planid, $userid) {
		$this->q = new QueryDB();
		return $this->q->addOnZajecia($planid, $userid);
	}

	public function dellUserFromPlanner($planid, $userid) {
		$this->q = new QueryDB();
		$this->q->delFromZajecia($planid, $userid);
	}

	public function generateView() {
		global $conf, $user;

		$smarty = new Smarty();
		$smarty->assign('conf', $conf);
		$smarty->assign('user', $user);
		$smarty->assign('page_title', 'Welcome page!');
		$smarty->assign('msgs', $this->msg);
		$smarty->assign('getDay', $this->cal->getDay());
		$smarty->assign('getMonth', $this->cal->getMonth());
		$smarty->assign('getYear', $this->cal->getYear());
		$smarty->assign('getDate', $this->cal->getTime());

		$smarty->assign('getAllHours', $this->q->getAllHours());
		$smarty->assign('calendar', $this->cal->calendarMonth);
		$smarty->assign('plan', $this->cal->addPlanner());

		$smarty->assign('nameDayPl', $this->cal->nameDayPl);
		$smarty->assign('nameDay', $this->cal->getNameDay());

		if(isset($_SESSION['isLogged']) && ($_SESSION['isLogged']==true)){
			$smarty->display($conf->root_path . '/app/welcome/WelcomeDay.tpl');
		} else {
			$smarty->display($conf->root_path . '/app/welcome/WelcomeMonth.tpl');
		}
	}
}

// widok
