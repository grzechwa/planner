<?php

class db
{
    public $result = Array();
    private $connect;

    public function __construct($_host = false, $_user = false, $_pass = false, $_name = false)
    {
        $this->connect = new mysqli($_host, $_user, $_pass, $_name);
        if (mysqli_connect_errno() !== 0)
        {
            throw new Exception("Błąd połączenia z bazą danych : " . mysqli_connect_error());
        }
        else
        {
            $this->connect->query("SET NAMES 'utf8'");
        }
    }

    public function execute($sql)
    {
        $query_arr = explode(" ",trim($sql)); //rozdzielenie zapytania po spacji - do okreslenia rodzaju zapytania            
        $query_type = strtoupper($query_arr[0]);

        if ($query_type == 'SELECT' || $query_type == 'SHOW')
        {
            return $this->select($sql);   
        }
        else if($query_type == 'UPDATE' || $query_type == 'DELETE' || $query_type == 'DROP' || $query_type == 'INSERT' || $query_type == 'ALTER' || $query_type == 'CREATE')
        {
            return $this->updateData($sql);
        }
		else
		{
			return $this->connect->query($sql);
		}

        return false;
    }

    public function lastInsertId()
    {
        return (isset($this->connect) && $this->connect != NULL) ? $this->connect->insert_id : NULL;
    }

    public function columnExists($table, $column)
    {
        $sql = "SHOW COLUMNS FROM ".$table." LIKE '".$column."'";
        return $this->getOneRow($sql);
    }

    public function tableExists($table)
    {
        $sql = "SHOW TABLES LIKE '".$table."'";
        return $this->getOneRow($sql);
    }

    public function getOneRow($sql, $oneColumn = false)
    {
        $wynik = $this->connect->query($sql);
		if(!($wynik))
		{		        
		    $this->showError($sql);
			return false;
		}
		else
		{
			if($wynik->num_rows>0)
			{
			    if($oneColumn === false)
                {
                    return $wynik->fetch_assoc();    
                }
                else
                {
                    $wyniki = $wynik->fetch_assoc();

                    if(isset($wyniki[$oneColumn])) return $wyniki[$oneColumn];
                        
                    return false;
                }
			}				
		}
        return false;
    }

    private function select($query)
    {
        $this->result = array();
        
        $wynik = $this->connect->query($query);
        if (!($wynik))
        {
            $this->showError($query);
            return false;
        }
        else
        {
            while (($db_result = $wynik -> fetch_assoc()) !== null)
            {
                array_push($this->result, $db_result);
            }
            
            return $this->result;
            $this->close();
        }      
    }

    private function updateData($query)
    {
        $this->result = array();

        $wynik = $this->connect->query($query);
        if (!($wynik))
        {
            $this->showError($query);
            return false;
        }
        else
        {
            return true;
        } 
    }

    public function getFields($tablename)
    {
        $wynik = $this->connect->query("SHOW COLUMNS FROM {$tablename}");
        if(!($wynik))
        {
            return false;
        }
        else
        {
            while(($this->result = $wynik -> mysql_fetch_field()) !== null)
            {
                return $this->result;
                $this->close();
            }
        }
    }

    public function getRow()
    {
        $row = mysqli_fetch_row($this->result);
        return $row;
    }

    public function dataFilter($data)
    {
        if(is_array($data))
        {
            foreach($data as $k => $v)
			{
				$data[$k] = $this->dataFilter($v);
			}  
        }
        else
		{
			$data = mysqli_real_escape_string($this->connect, $data);
		}
            
        return $data;
    }

    private function count()
    {
        $count = count($this->result);
        if(!$count || !is_int($count)) $count = 0;
        
        return $count;
    }

    public function close()
    {
        if($this->connect) mysqli_close($this->connect);
    }

    public function __destruct()
    {
        $this->close();
        exit();
    }

    public function dbBeginTransaction()
    {
        $this->connect->autocommit(FALSE);
    }

    public function dbCommit()
    {
        $this->connect->commit();    
    }

    public function dbRollback()
    {
        $this->connect->rollback();    
    } 

    public function showError($sql)
    {
        die($sql);
    }
}

?>