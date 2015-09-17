<?php

require_once dirname(__FILE__) . '/../../config.php';
require_once $conf->root_path . '/app/util/Messages.class.php';
require_once $conf->root_path . '/app/db/Connector.php';
require_once $conf->root_path . '/app/db/QueryDB.php';
require_once $conf->root_path . '/vendor/smarty/smarty/libs/Smarty.class.php';

// klasa
class CalendarCtrl {

	public $year;
	public $month;
	public $day;
	public $arrtime = array(); // tablica kalendarza
	public $plan = array();	   // tablica zajec
	public $q;
	public $nameDayPl = array('Pon', 'Wt', 'Sr', 'Czw', 'Pt', 'Sb', 'Nd');

	public function __construct($year = null, $month = null, $day = null) {
		$this->year = $year;
		$this->month = $month;
		$this->day = $day;
		$this->q = new QueryDB();
	}



	// poprzedni m-c
	public function prevMonth() {

		if ($this->month <= 1) {
			return 12;
		}

		return ($this->month - 1);
	}

	// nastepny m-c
	public function nextMonth() {

		if ($this->month >= 12) {
			return 1;
		}

		return ($this->month + 1);
	}

	// ile dni
	public function Days($unixtimestamp = 0) {
		return ($unixtimestamp == 0) ? date("t") : date("t", $unixtimestamp);
	}

	// nazwa dnia tygodnia
	public function getNameDay() {
		$time = strtotime($this->getTime());
		return date('D', $time);
	}

	// nazwa akutalnego dnia tygodnia
	public function nameActualDay() {

		return date('D');
	}

	// ktory dzien tygodnia
	public function numberDay($paramTime) {
		// valid
		return (int) date('w', strtotime($paramTime));
	}

	// ktory tydzien w miesiacu
	public function actualWeek() {
		$paramTime = $this->year . '-' . $this->month . '-' . $this->day;
		// valid
		// +1, bo zwraca od zaera
		return intval(date('j', strtotime($paramTime)) / 7) + 1;
	}

	// kotry dzien dzisiaj
	public function actualDay() {
		return date('j', time());
	}

	public function actualMonth() {
		return date('M', time());
	}

	public function actualWeekDay() {
		return date('w', time());
	}

	public function actualYear() {
		
	}

	public function getDay() {
		return $this->day;
	}

	public function setDay($day) {
		$this->day = $day;
	}

	public function setMonth($month) {

		$this->month = $month;

	}

	public function setYear($year) {
		$this->year = $year;
	}

	public function getMonth() {
		return $this->month;
	}

	public function getYear() {
		return $this->year;
	}

	public function getTime() {
		return $this->year . '-' . $this->month . '-' . $this->day;
	}

	public function firstDayweekNumber()
	{
		// $this->_validateDates();
		$time = strtotime($this->year . '-' . $this->month. '-' . 1);
		if($time)
		{
			return ((int)date("w", $time));
		}
		
		return false;
	}

	// calykal
	public function calendar() {
		// format daty do przetwarzania
		// $time = $this->year . '-' . $this->month . '-' . $this->day;
		$time = $this->year . '-' . $this->month . '-' . $this->day;

		$curr_mth_days = Array();
		$prev_mth_last_days = Array();
		$next_mth_last_days = Array();

		// format daty dla poprzedniego miesiaca
		// $prev_time = strtotime($this->year . '-' . $this->prevMonth() . '-' . $this->day);
		$prev_time = strtotime($this->year . '-' . $this->prevMonth() . '-' . 1);

		$prev_mth_days = $this->Days($prev_time);

		// poprzedni tydzien, jakie dni
		if ($prev_mth_days > 0) {
			for ($i = $prev_mth_days - 6; $i <= $prev_mth_days; $i++) {
				// $prev_mth_last_days[] = $i;
				$prev_mth_last_days[] = $this->year . '-' . $this->prevMonth() . '-' . $i;
			}
		}



		// pierwszy tydzien razem z poprzednim
		// if ($this->numberDay($time) > 1) { //poprawa
		if ($this->firstDayweekNumber() > 1) { 
			$a = 0;
			for ($i = $this->firstDayweekNumber() - 1; $i < 7; $i++) {
				$curr_mth_days[0][$i] = $this->year . '-' . $this->month . '-' . ++$a;
			}

			$curr_mth_days[0] = array_merge(
				array_slice($prev_mth_last_days, (($this->firstDayweekNumber() - 1) * -1)), $curr_mth_days[0]);
			$i = 7 - $this->firstDayweekNumber() + 2;
		} else if($this->firstDayweekNumber() == 1) {
			$curr_mth_days[0] = $prev_mth_last_days;
			$i = 1;
		} else if($this->firstDayweekNumber() == 0) {
			$a = 0;
			for ($i = 6; $i < 7; $i++) {
				// $curr_mth_days[0][$i] = ++$a;
				$curr_mth_days[0][$i] = $this->year . '-' . $this->month . '-' . ++$a;
			}

			$curr_mth_days[0] = array_merge(array_slice($prev_mth_last_days, 1), $curr_mth_days[0]);
			$i = 2;
		}





		// podmacierz
		$rowWeek = 1;
		$x = 1;
		for ($i; $i <= $this->Days(strtotime($time)); $i++) {
			if ($rowWeek < 7) {
				// $curr_mth_days[$x][] = $i;

				$curr_mth_days[$x][] = $this->year . '-' . $this->month . '-' . $i;
				$rowWeek++;
			} else {
				// $curr_mth_days[$x][] = $i;
				$curr_mth_days[$x][] = $this->year . '-' . $this->month . '-' . $i;
				$rowWeek = 1;
				++$x;
			}
		}

		// next
		for ($i = 1; $i <= 14; $i++) {
			// $next_mth_last_days[] = $i;
			$next_mth_last_days[] = $this->year . '-' . $this->nextMonth() . '-' . $i;
		}

		// uzupelnia ostatni tydzien o liczby

		$y = 0;
		$next_counter = 0;
		for ($i = 0; $i < 7; $i++) {
			if (!isset($curr_mth_days[4][$i])) {
				$curr_mth_days[4][$i] = $this->year . '-' . $this->nextMonth() . '-' . ++$y;
				++$next_counter;
			}
		}

		// 5 kolumna

		if (!isset($curr_mth_days[5]) || (isset($curr_mth_days[5]) && empty($curr_mth_days[5]))) {
			$curr_mth_days[5] = array_slice($next_mth_last_days, $next_counter, 7);
		} else {
			$curr_mth_days[5] = array_merge($curr_mth_days[5], array_slice($next_mth_last_days, $next_counter, 7 - count($curr_mth_days[5])));
		}


		$this->arrtime[] = $curr_mth_days;
	
	}

	// TODO: przepisac te metode, za duzo petli
	/*
	 * Metoda zawiera przypisane datom zajecia
	 * nie trzeba sie trudzic w widoku
	 */
	public function addPlanner() {

		foreach ($this->arrtime as $t) {

			foreach ($t as $key => $tmp) {
				foreach ($tmp as $key2 => $tmp2) {
					$query = $this->q->getDay($tmp2);
					$this->plan[] = $tmp2;
					foreach ($query as $key3 => $tmp3) {

						// ile uztykownikow
						$q = $this->q->getCountUser($tmp3['planid']);
						foreach ($q as $k => $v) {
							$res = $v['many']; //  many -> nazwa tabeli count(1)
						}

						// lista uzytkownikow
						$resList = null;
						$q = $this->q->getListUser($tmp3['planid']);
						foreach ($q as $k => $v) {
							$resList[$k] = $v['imie'];
						}


						if (!empty($resList)) {
							$tmp3['imie'][] = $resList;
						}
						$tmp3['count'] = $res;
						$this->plan[$tmp2][] = $tmp3;

					}
				}
			}
		}
		return $this->plan;
	}

	  
}
