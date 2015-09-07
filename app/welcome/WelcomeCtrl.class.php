<?php
require_once $conf->root_path.'/app/util/Messages.class.php';
require_once $conf->root_path.'/app/calendar/CalendarCtrl.class.php';
require_once $conf->root_path.'/vendor/smarty/smarty/libs/Smarty.class.php';

// klasa
class WelcomeCtrl {
	
	private $msg;
	public $cal;

	public function __construct() {
		$this->msg = new Messages();
		$this->cal = new CalendarCtrl(2015, 8,  1);
		$this->cal->calendar();
	}

	public function generateView() {
		global $conf, $user;

		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		$smarty->assign('user',$user);
		$smarty->assign('page_title','Welcome page!');

		$smarty->assign('msgs',$this->msg);
										
		$smarty->assign('actualDay', $this->cal->actualDay());
		$smarty->assign('actualWeek', $this->cal->actualWeek());
		$smarty->assign('actualMonth', $this->cal->actualMonth());
		$smarty->assign('calendar', $this->cal->arrtime);
		$smarty->assign('nameDayPl', $this->cal->nameDayPl);
		$smarty->display($conf->root_path.'/app/welcome/Welcome.tpl');
	}
	

}
// widok
