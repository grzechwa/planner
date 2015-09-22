<?php
 //session_start();
require_once $conf->root_path . '/app/welcome/WelcomeCtrl.class.php';
require_once $conf->root_path . '/app/db/QueryDB.php';

require_once $conf->root_path.'/app/util/Messages.class.php';
require_once $conf->root_path.'/app/calendar/CalendarCtrl.class.php';
require_once $conf->root_path.'/vendor/smarty/smarty/libs/Smarty.class.php';

class CalendarDayCtrl 
{
	public $q;
	public $msg;
	public $cal;
	public $planid;
	public $userid;

	public function __construct($year, $month, $day) {
		$this->msg = new Messages();
		$this->cal = new CalendarCtrl($year, $month,  $day);
		$this->cal->calendar();
		$this->q = new QueryDB();
	}

	
	public function addUserToPlanner($planid, $userid) {
		$this->q = new QueryDB();
		return $this->q->addOnZajecia($planid, $userid);
	}

	public function generateView() {
		global $conf, $user;

		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		$smarty->assign('user',$user);
		$smarty->assign('page_title','Welcome page!');

		// $smarty->assign('msgs',$this->msg);


		
		$smarty->assign('getDay', $this->cal->getDay());
		$smarty->assign('getMonth', $this->cal->getMonth());
		$smarty->assign('getYear', $this->cal->getYear());
		$smarty->assign('getTime', $this->cal->getTime());
		$smarty->assign('getDate', $this->cal->getTime());
		$smarty->assign('getDay', $this->q->getDay($this->cal->getTime()));


		
		$smarty->assign('getAllPlan', $this->q->getAllPlan());
		$smarty->assign('getAllHours', $this->q->getAllHours());
		$smarty->assign('getSinceTo', $this->q->getSinceTo());
		$smarty->assign('getPlanZajecia', $this->q->getPlanZajecia());


										
		$smarty->assign('actualDay', $this->cal->actualDay());
		$smarty->assign('actualWeek', $this->cal->actualWeek());
		$smarty->assign('actualMonth', $this->cal->actualMonth());
		$smarty->assign('actualWeekDay', $this->cal->actualWeekDay());
		$smarty->assign('calendar', $this->cal->arrtime);
		$smarty->assign('plan', $this->cal->addPlanner());




		$smarty->assign('nameDayPl', $this->cal->nameDayPl);
		$smarty->assign('nameDay', $this->cal->getNameDay());
		$smarty->display($conf->root_path.'/app/welcome/Welcome.tpl');
	}
	
	
}


