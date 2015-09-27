<?php
require_once $conf->root_path . '/app/db/QueryDB.php';
require_once $conf->root_path . '/app/admin/Admin.class.php';
require_once $conf->root_path . '/app/util/Messages.class.php';
require_once $conf->root_path . '/app/calendar/CalendarCtrl.class.php';
require_once $conf->root_path . '/vendor/smarty/smarty/libs/Smarty.class.php';

var_dump($_REQUEST);

class LogDB {
	private $msg;
	public $cal;
	public $q; // query
	public $conf;

	public function __construct() {
		$this->setRole();
	}
	
	public function setRole() {
		if((isset($_REQUEST['login'])&&(isset($_REQUEST['password'])))){
			$login = $_REQUEST['login'];
			$haslo = $_REQUEST['password'];
	
			$q = new QueryDB();


			$validate = $q->getLogin($login, $haslo);
			// sprawdz w bazie


			// w bazie istnieja 
			foreach ($validate as $key => $value){	
			$_SESSION['isLogged'] = true;
				if($value['imie']=='admin') { 
					$_SESSION['user'] = 'admin';
				} else { 
					$_SESSION['user'] = $login;
				}
			}
		} 	
	}

	public function getDate() {
		$date = $_REQUEST['date'];
		return $date;
	}

	public function generateView() {
		global $conf, $user;

		$smarty = new Smarty();
		$smarty->assign('conf', $conf);
		$smarty->assign('user', $user);
		$smarty->assign('page_title', 'Welcome page!');

		$smarty->assign('msgs', $this->msg);
		

		if(isset($_SESSION['user']) && ($_SESSION['user']=='admin')){
			include_once $conf->action_root . 'admin';
		} else {
			include_once $conf->action_root . 'error';
		}
	}
}



