<?php

require_once("db.php");
require_once("event.php");

class calendar
{
	private $_lang;
	private $_year;
	private $_month;
	private $_day;
	private $_month_list_full_en 	= Array(1 => "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	private $_month_list_short_en 	= Array(1 => "Jan.", "Feb.", "Mar.", "Apr.", "May", "Jun.", "Jul.", "Aug.", "Sep.", "Oct.", "Nov.", "Dec.");
	private $_month_list_full_pl 	= Array(1 => "Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień");
	private $_month_list_short_pl 	= Array(1 => "Sty.", "Lut.", "Mar.", "Kwi.", "Maj", "Cze.", "Lip.", "Sie.", "Wrz.", "Paź.", "Lis.", "Gru.");
	private $_dayname_list_full_en 	= Array(1 => "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
	private $_dayname_list_short_en = Array(1 => "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
	private $_dayname_list_full_pl 	= Array(1 => "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota", "Niedziela");
	private $_dayname_list_short_pl = Array(1 => "Pon", "Wto", "Śro", "Czw", "Pią", "Sob", "Nie");
	private $_planner_hours = Array("00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "20", "21", "22", "23");
	
	private $__db;
	
	public function __construct($lang = null, $year = null, $month = null, $day = null)
	{
		$this->setOutputLang($lang);
		$this->setYear($year);
		$this->setMonth($month);
		$this->setDay($day);
		
		$this->_validateDates();
		
		$this->__db = new db("localhost", "root", "", "eduweb_calendar");
	}
	
	public function setOutputLang($lang)
	{
		switch(strtolower($lang))
		{
			default:
			case "pl":
			$this->_lang = "pl";
			break;
			
			case "en":
			$this->_lang = "en";
			break;
		}
	}
	
	public function setYear($year)
	{
		if(!isset($year) || empty($year) || !is_numeric($year) || strlen($year) != 4)
		{
			$year = date("Y");
		}
		
		$this->_year = $year;
	}
	
	public function getYear()
	{
		return $this->_year;
	}
	
	public function setMonth($month)
	{
		if(!isset($month) || empty($month))
		{
			$month = $this->decode_month_number(date("F"));
		}
		else
		{
			$month = ($this->decode_month_number($month) == false) ? $this->decode_month_number(date("F")) : $this->decode_month_number($month);
		}
		
		$this->_month = $month;
	}
	
	public function getMonth()
	{
		return $this->_month;
	}
	
	public function setDay($day)
	{
		if(!isset($day) || empty($day) || !is_numeric($day) || $day < 1 || $day > 31)
		{
			$day = date("j");
		}
		
		$this->_day = $day;
	}
	
	public function getDay()
	{
		return $this->_day;
	}
	
	private function _validateDates()
	{
		if(!checkdate($this->_month, $this->_day, $this->_year))
		{
			throw new Exception("You have an error in dates. <b>day: ".$this->_day."; month: ".$this->_month."; year:".$this->_year."</b> To step further - fix the problem");
		}
	}
	
	public function render()
	{
		$this->_validateDates();
		$result = '<div class="calendar-planner">';
		
		$result .= '<table class="calendar _fL">';
		$result .= '<tr id="header">
		<td id="header-left"><a href="index.php?date='.$this->_day.','.$this->prevMonthNumber().','.$this->_year.'" id="month-back"></a></td>
		<td colspan="5" id="header-value">'.static::addLeadingZero($this->_day).', '.$this->_month_list_full_pl[$this->_month].' '.$this->_year.'</td>
		<td id="header-right"><a href="index.php?date='.$this->_day.','.$this->nextMonthNumber().','.$this->_year.'" id="month-next"></a></td>
		</tr>';

		// Poprzedni m-c
		$prev_time = strtotime("1 ".$this->_month_list_full_en[$this->prevMonthNumber()]." ".$this->_year);
		$prev_mth_days = $this->numberOfDays($prev_time);
		
		$prev_mth_last_days = Array();
		if($prev_mth_days > 0)
		{
			for($i = $prev_mth_days-6; $i <= $prev_mth_days; $i++)
			{
				$prev_mth_last_days[] = $i;
			}
		}
		
		//print_r($prev_mth_last_days);
		//die();
		
		// Następny m-c
		$next_mth_last_days = Array();
		for($i = 1; $i <= 14; $i++)
		{
			$next_mth_last_days[] = $i;
		}
		
		//echo "<pre>";
		//print_r($next_mth_last_days);
		//die();
		
		// Całość
		$curr_mth_days = Array();
		
		if($this->firstDayweekNumber() > 1)
		{
			$a = 0;
			for($i = $this->firstDayweekNumber()-1; $i < 7; $i++)
			{
				$curr_mth_days[0][$i] = ++$a;
			}
			
			$curr_mth_days[0] = array_merge(array_slice($prev_mth_last_days, (($this->firstDayweekNumber()-1)*-1)), $curr_mth_days[0]);
			$i = 7 - $this->firstDayweekNumber()+2;
		}
		else if($this->firstDayweekNumber() == 1)
		{
			$curr_mth_days[0] = $prev_mth_last_days;
			$i = 1;
		}
		else if($this->firstDayweekNumber() == 0)
		{
			$a = 0;
			for($i = 6; $i < 7; $i++)
			{
				$curr_mth_days[0][$i] = ++$a;
			}
			
			$curr_mth_days[0] = array_merge(array_slice($prev_mth_last_days, 1), $curr_mth_days[0]);
			$i = 2;
		}
		
		//echo "<pre>";
		//print_r($curr_mth_days);
		//die();
		
		
		$checker_end_column = 1;
		$x = 1;
		for($i; $i <= $this->numberOfDays($this->timestamp()); $i++)
		{
			if($checker_end_column < 7)
			{
				$curr_mth_days[$x][] = $i;
				$checker_end_column++;
			}
			else
			{
				$curr_mth_days[$x][] = $i;
				$checker_end_column = 1;
				++$x;
			}
		}
		
		//echo "<pre>";
		//print_r($curr_mth_days);
		//die();
		
		$y = 0;
		$next_counter = 0;
		for($i = 0; $i < 7; $i++)
		{
			if(!isset($curr_mth_days[4][$i]))
			{
				$curr_mth_days[4][$i] = ++$y;
				++$next_counter;
			}
		}
		
		if(!isset($curr_mth_days[5]) || (isset($curr_mth_days[5]) && empty($curr_mth_days[5])))
		{
			$curr_mth_days[5] = array_slice($next_mth_last_days, $next_counter, 7);
		}
		else
		{
			$curr_mth_days[5] = array_merge($curr_mth_days[5], array_slice($next_mth_last_days, $next_counter, 7-count($curr_mth_days[5])));
		}

		//echo "<pre>";
		//print_r($curr_mth_days);
		//die();
		
		$curr_mth_day = false;
		foreach($curr_mth_days as $k => $v)
		{
			$result .= '<tr class="week">';
			
			foreach($v as $day)
			{
				if($day == 1 && !$curr_mth_day)
				{
					$curr_mth_day = true;
				}
				else if($day == 1 && $curr_mth_day)
				{
					$curr_mth_day = false;
				}
				
				$class = "regular";
				
				if($curr_mth_day && $day == $this->_day)
				{
					$class = "today";
				}
				else if(!$curr_mth_day)
				{
					$class = "grayed";
				}
				
				if($this->isEvent(strtotime($day.' '.$this->_month_list_full_en[$this->_month]." ".$this->_year)) && $curr_mth_day)
				{
					$eventclass = " class=\"{$class}-event\"";
				}
				else
				{
					$eventclass = " class=\"{$class}\"";
				}
				
				$result .= '<td'.$eventclass.'>';
				$result .= '<a class="day" href="index.php?date='.$day.','.$this->_month.','.$this->_year.'" alt="'.$this->_day.','.$this->_month.','.$this->_year.'" title="'.static::addLeadingZero($day).' '.$this->_month_list_full_pl[$this->_month].' '.$this->_year.'">'.$day.'</a>';
				$result .= '</td>';
			}
			
			$result .= '</tr>';
		}
		
		$result .= '</table>';
		
		//$result .= ($this->isEvent(strtotime($this->_day.' '.$this->_month_list_full_en[$this->_month]." ".$this->_year))) ? $this->render_planner() : "";
		$result .= $this->render_planner();
		
		return $result;
	}
	
	public function render_planner()
	{
		// Draw planner window
		
		$result .= '<table class="planner _fL">';
		foreach($this->_planner_hours as $hour)
		{
			$events = $this->getEvent(strtotime($this->_day.'-'.$this->_month_list_full_en[$this->_month]."-".$this->_year." ".$hour.":00:00"));
			
			$result .= '<tr>';
		
			$result .= '<td>';
			$result .= $hour.":00";
			$result .= '</td>';
			
			
			$result .= '<td>';
			if(isset($events) && !empty($events))
			{
				foreach($events as $event)
				{
					if($event['type'] == "regular")
					{
						$type = "<span style=\"color: green;\">■ &nbsp;&nbsp;&nbsp;</span>";
					}
					else if($event['type'] == "todo")
					{
						$type = "<span style=\"color: red;\">■ &nbsp;&nbsp;&nbsp;</span>";
					}
					else if($event['type'] == "appointment")
					{
						$type = "<span style=\"color: blue;\">■ &nbsp;&nbsp;&nbsp;</span>";
					}
					else
					{
						$type = "<span style=\"color: black;\">■ &nbsp;&nbsp;&nbsp;</span>";
					}
					
					$result .= $type.$event['name']."<br>";
				}
			}
			$result .= '</td>';
			
			$result .= '</tr>';
		}
		
		$result .= '</table>';
		
		$result .= "</div>";
		
		return $result;
	}
	
	private function isEvent($timestamp)
	{
		$sql = $this->__db->execute("SELECT * FROM events WHERE DATE(start_date) = '".date("Y-m-d", $timestamp)."'");
		return (isset($sql) && !empty($sql));
	}
	
	public function getEvent($timestamp)
	{
		$sql = $this->__db->execute("SELECT * FROM events WHERE 
		UNIX_TIMESTAMP(str_to_date(concat_ws(' ', DATE(start_date), HOUR(start_date)), '%Y-%m-%d %H')) <= {$timestamp} AND
		UNIX_TIMESTAMP(str_to_date(concat_ws(' ', DATE(end_date), HOUR(end_date)), '%Y-%m-%d %H')) >= {$timestamp}");
		
		if(isset($sql) && !empty($sql))
		{
			return $sql;
		}
		
		return false;
	}
	
	public function events($timestamp)
	{
		$event = new event();
		$res = Array();
		
		$sql = $this->__db->execute("SELECT * FROM events WHERE DATE(start_date) = '".date("Y-m-d", $timestamp)."'");
		if(isset($sql) && !empty($sql))
		{
			foreach($sql as $k => $v)
			{
				$event->name = $sql['name'];
				$event->event = $sql['event'];
				$event->type = $sql['type'];
				$event->start_date = $sql['start_date'];
				$event->end_date = $sql['end_date'];
				
				$res[] = $event;
			}
			
			return $res;
		}
		
		return Array($event);
	}
	
	public function numberOfDays($unixtimestamp = 0)
	{
		$this->_validateDates();
		return ($unixtimestamp == 0) ? date("t") : date("t", $unixtimestamp);
	}
	
	public function timestamp()
	{
		$this->_validateDates();
		return strtotime($this->_day." ".$this->_month_list_full_en[$this->_month]." ".$this->_year);
	}
	
	public function firstDayweekName()
	{
		$this->_validateDates();
		$time = strtotime("1 ".$this->_month_list_full_en[$this->_month]." ".$this->_year);
		if($time)
		{
			$var_dayname_arr = "_dayname_list_full_".$this->_lang;
			$lang_arr = $this->$var_dayname_arr;
			return $lang_arr[((int)date("w", $time))];
		}
		
		return false;
	}
	
	public function firstDayweekNumber()
	{
		$this->_validateDates();
		$time = strtotime("1 ".$this->_month_list_full_en[$this->_month]." ".$this->_year);
		if($time)
		{
			return ((int)date("w", $time));
		}
		
		return false;
	}
	
	public function prevMonthNumber()
	{
		if($this->_month <= 1)
		{
			return 12;
		}
		
		return ($this->_month - 1);
	}
	
	public function nextMonthNumber()
	{
		if($this->_month >= 12)
		{
			return 1;
		}
		
		return ($this->_month + 1);
	}
	
	public function __toString()
	{
		$this->_validateDates();
		return $this->_day."-".$this->_month."-".$this->_year;
	}
	
	private function decode_month_number($input)
	{
		if(in_array(ucfirst(strtolower($input)), $this->_month_list_full_en))
		{
			$temp = array_flip($this->_month_list_full_en);
			return $temp[ucfirst(strtolower($input))];
		}
		else if(in_array(ucfirst(strtolower($input)), $this->_month_list_full_pl))
		{
			$temp = array_flip($this->_month_list_full_pl);
			return $temp[ucfirst(strtolower($input))];
		}
		else if(in_array(ucfirst(strtolower(rtrim($input, "."))).".", $this->_month_list_short_en))
		{
			$temp = array_flip($this->_month_list_short_en);
			return $temp[ucfirst(strtolower(rtrim($input, ".")))."."];
		}
		else if(in_array(ucfirst(strtolower(rtrim($input, "."))).".", $this->_month_list_short_pl))
		{
			$temp = array_flip($this->_month_list_short_pl);
			return $temp[ucfirst(strtolower(rtrim($input, ".")))."."];
		}
		else if(is_numeric($input) && ($input > 0 && $input <= 12))
		{
			return static::removeLeadingZero($input); 
		}
		
		return false;
	}
	
	private function decode_dayweek_number($input)
	{
		if(in_array(ucfirst(strtolower($input)), $this->_dayname_list_full_en))
		{
			$temp = array_flip($this->_dayname_list_full_en);
			return $temp[ucfirst(strtolower($input))];
		}
		else if(in_array(ucfirst(strtolower($input)), $this->_dayname_list_full_pl))
		{
			$temp = array_flip($this->_dayname_list_full_pl);
			return $temp[ucfirst(strtolower($input))];
		}
		else if(in_array(ucfirst(strtolower(rtrim($input, "."))), $this->_dayname_list_short_en))
		{
			$temp = array_flip($this->_dayname_list_short_en);
			return $temp[ucfirst(strtolower(rtrim($input, ".")))];
		}
		else if(in_array(ucfirst(strtolower(rtrim($input, "."))), $this->_dayname_list_short_pl))
		{
			$temp = array_flip($this->_dayname_list_short_pl);
			return $temp[ucfirst(strtolower(rtrim($input, ".")))];
		}
		else if(is_numeric($input) && ($input > 0 && $input <= 7)) 
		{
			return static::removeLeadingZero($input); 
		}
		
		return false;
	}
	
	private static function removeLeadingZero($input)
	{
		return ltrim($input, '0');
	}
	
	private static function addLeadingZero($input)
	{
		if(is_numeric($input) && $input < 10)
		{
			return '0'.static::removeLeadingZero($input);
		}
		
		return $input;
	}
}

?>