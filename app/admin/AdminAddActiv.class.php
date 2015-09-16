<?php
require_once $conf->root_path.'/app/admin/Admin.class.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminAddActiv extends Admin 
{
	public $showid;

	public function __construct() {
		$this->showid = 2;
	}
	public function generateView() {
		global $conf, $user;
		$smarty = new Smarty();
		$smarty->assign('conf', $conf);
		$smarty->assign('user', $user);
		$smarty->assign('page_title', 'AdminActiv page!');
		
		$smarty->assign('showid', $this->showid);
		$smarty->display($conf->root_path . '/app/admin/adminadd.tpl');
	}
}

