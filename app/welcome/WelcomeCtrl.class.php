<?php
require_once $conf->root_path.'/app/util/Messages.class.php';
require_once $conf->root_path.'/vendor/smarty/smarty/libs/Smarty.class.php';

// klasa
class WelcomeCtrl {
	
	private $msg;
	public function __construct() {
		$this->msg = new Messages();
	}

	public function generateView() {
		global $conf, $user;

		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		$smarty->assign('user',$user);
		$smarty->assign('page_title','Welcome page!');

		$smarty->assign('msgs',$this->msg);
										
		$smarty->display($conf->root_path.'/app/welcome/Welcome.tpl');
	}
	

}
// widok
