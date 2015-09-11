<?php

require_once $conf->root_path . '/app/db/Connector.php';

/**
 * 	Wykorzystuje klase Connector
 * 	przechowuje zapytania
 */
class QueryDB {

	private $db;

	public function __construct() {
		$this->db = new Connector();
	}

	// ... main methods ....
	/**
	 * Pobiera wszystkie rokordy z tabeli
	 * Plan
	 */
	public function getAllPlan() {
		$this->db->connect();
		$select = "SELECT *";
		$from = " FROM plan";
		$join = null;
		$where = null;
		$orderBy = null;

		$sql = $select . $from . $join . $where . $orderBy;

		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}

	/**
	 * Pobiera wszystkie rokordy z tabeli
	 * godziny
	 */
	public function getAllHours() {
		$this->db->connect();
		$select = "SELECT *";
		$from = " FROM godziny";
		$join = null;
		$where = null;
		$orderBy = null;

		$sql = $select . $from . $join . $where . $orderBy;

		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}

	/**
	 * Pobiera rekordy od i do z tabeli
	 * godziny
	 */
	public function getSinceTo() {
		$this->db->connect();
		$select = "SELECT DATE_FORMAT(od, '%H:%i') as od,  DATE_FORMAT(do, '%H:%i') as do";
		$from = " FROM godziny";
		$join = null;
		$where = null;
		$orderBy = null;

		$sql = $select . $from . $join . $where . $orderBy;


		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}

	/**
	 * Pobiera rekordy z tabel plan i godziny
	 * do wyswietlania kalendarza tygodnia
	 */
	public function getPlanZajecia() {
		$this->db->connect();
		$select = "SELECT plan.id, plan.data, godziny.od as od, godziny.do as do, zajecia.nazwa as nazwa";
		$from = " FROM plan";
		$join1 = ' LEFT JOIN godziny';
		$where1 = ' ON plan.godz_id = godziny.id';
		$join2 = ' LEFT JOIN zajecia';
		$where2 = ' ON plan.zajecia_id = zajecia.id';
		$between = ' where plan.data between \'2015-09-03\' and \'2015-09-05\'';
		$orderBy = null;

		$sql = $select . $from . $join1 . $where1 . $join2 . $where2 . $between . $orderBy;


		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}

	public function getDay($data) {
		$this->db->connect();
		$select = "SELECT zajecia.nazwa, godziny.od, godziny.do, godziny.id";
		$from = " FROM plan";
		$where = " WHERE data = '" . $data ."'";
		$join = " LEFT JOIN zajecia";
		$where2 = " ON plan.zajecia_id = zajecia.id";
		$join2 = " LEFT JOIN godziny";
		$where3 = " ON plan.godz_id = godziny.id";
		$orderBy = " ORDER BY data";

		$sql = $select . $from  . $join . $where2 .  $join2 . $where3 . $where. $orderBy;

		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}

	public function getDayAsArray() {
		$tmp = array();
		foreach($this->getDay($data) as $x) {
			$tmp[] = $x;
		}

		return $tmp;
	}

	/*
	 * Zwraca liczbe uuserow bioracych udzial
	 * w danych zajeciach
	 */
	public function getCountUser($userid) {
		$this->db->connect();
		$select = "SELECT COUNT(1)";
		$from = " FROM plan_user";
		$join = " LEFT JOIN user";
		$on = " ON user.user.id = plan_user.user_id";
		$where = " WHERE plan_user.plan.id = '" . $userid ."'";
		$orderBy = null;

		$sql = $select . $from  . $join . $on . $where . $orderBy;

		$conn = $this->db->getConn();
		$result = mysqli_query($conn, $sql);
		$this->db->disconnect();
		return $result;
	}
	
	// ... other methods ...
}