<?php
require_once $conf->root_path . '/app/db/QueryDB.php';


if((isset($_REQUEST['login'])&&(isset($_REQUEST['password'])))){
	$login = $_REQUEST['login'];
	$haslo = $_REQUEST['password'];
	
	$q = new QueryDB();

	var_dump($login, $haslo);

	$validate = $q->getLogin($login, $haslo);

	if ($validate) {
		$_SESSION['isLogged'] = true;
		foreach ($validate as $key => $value){	
			if($value['imie']=='admin') { 
				$_SESSION['user'] = 'admin';
				header("Location: " . $conf->server_url.$conf->app_root.'/?action=admin');
			} else { 
				$_SESSION['user'] = $login;
				// header("Location: " . $conf->server_url.$conf->app_root.'/?action=empl');
				include_once $conf->root_path . '/app/welcome/WelcomeCtrl.class.php';
			}
		}
	} else {
		include_once $conf->root_path.'/app/db/error.php';
	}


} else {
	// include_once $conf->root_path.'/app/db/error.php';
	echo 'nie ma loginu';
}
