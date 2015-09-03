<?php
require_once $conf->root_path.'/app/db/Connector.php';

/**
 * 	Wykorzystuje klase Connector
 * 	przechowuje zapytania
 */
class QueryDB {
	private $db;
	
	public function __construct() {
		$this->db = new Connector();
	}
	
	// ... amin methods ....
	
	
	// ... other methods ...

}