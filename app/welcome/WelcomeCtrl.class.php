<?php
require_once $conf->root_path.'/app/util/Messages.class.php';
require_once $conf->root_path.'/app/calendar/CalendarCtrl.class.php';
require_once $conf->root_path.'/vendor/smarty/smarty/libs/Smarty.class.php';

// klasa
class WelcomeCtrl {
	
	private $msg;
	public $cal;
	public $q;	// query
	public $data;	// parameter

	public function __construct() {
		$this->msg = new Messages();
		$this->cal = new CalendarCtrl(2015, 9,  1);
		$this->cal->calendar();
		$this->q = new QueryDB();
	}

	public function generateView() {
		global $conf, $user;

		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		$smarty->assign('user',$user);
		$smarty->assign('page_title','Welcome page!');

		$smarty->assign('msgs',$this->msg);


		
		$smarty->assign('getDay', $this->cal->getDay());
		$smarty->assign('getMonth', $this->cal->getMonth());
		$smarty->assign('getYear', $this->cal->getYear());
		$smarty->assign('getTime', $this->cal->getTime());


		
		$smarty->assign('getAllPlan', $this->q->getAllPlan());
		$smarty->assign('getAllHours', $this->q->getAllHours());
		$smarty->assign('getSinceTo', $this->q->getSinceTo());
		$smarty->assign('getPlanZajecia', $this->q->getPlanZajecia());

		// $smarty->assign('getDay', $this->q->getDay($this->cal->getYear() .'-'. $this->cal->getMonth() .'-' . $this->cal->actualDay()));
		$smarty->assign('getDay', $this->q->getDay($this->cal->getTime()));

										
		$smarty->assign('actualDay', $this->cal->actualDay());
		$smarty->assign('actualWeek', $this->cal->actualWeek());
		$smarty->assign('actualMonth', $this->cal->actualMonth());
		$smarty->assign('actualWeekDay', $this->cal->actualWeekDay());
		$smarty->assign('calendar', $this->cal->arrtime);
		$smarty->assign('plan', $this->cal->addPlanner());
		$smarty->assign('nameDayPl', $this->cal->nameDayPl);
		$smarty->display($conf->root_path.'/app/welcome/Welcome.tpl');
	}
	

}
// widok
