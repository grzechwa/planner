<?php
require_once $conf->root_path . '/app/util/Messages.class.php';
require_once $conf->root_path . '/app/calendar/CalendarCtrl.class.php';
require_once $conf->root_path . '/vendor/smarty/smarty/libs/Smarty.class.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login {
	private $msg;

	public function generateView() {
		global $conf, $user;

		$smarty = new Smarty();
		$smarty->assign('conf', $conf);
		$smarty->assign('user', $user);
		$smarty->assign('page_title', 'Welcome page!');
		$smarty->assign('msgs', $this->msg);
		
		$smarty->display($conf->root_path . '/app/security/login.tpl');
	}
}