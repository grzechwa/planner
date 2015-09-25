<?php
require_once $conf->root_path . '/app/db/QueryDB.php';

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
				// header("Location: " . $conf->server_url.$conf->app_root.'/?action=admin');
				include_once $conf->root_path . '/app/admin/Admin.class.php';
			} else { 
				$_SESSION['user'] = $login;
				include_once $conf->root_path . '/app/welcome/WelcomeCtrl.class.php';
			}
		}


} else {
	// include_once $conf->root_path.'/app/db/error.php';
	echo 'nie ma loginu';
}
