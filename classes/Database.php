<?php
  class Database {
    protected $_link, $_result, $_numRows;

    public function __construct($server, $username, $password, $db){
        $this->_link = mysql_connect($server, $username, $password);
        mysql_select_db($db, $this->_link);
    }

    // metoda per diskonektim
    public function disconnect()
    {
      mysql_close($this->_link);
    }

    // query method
    public function query($sql)
    {
      $this->_result = mysql_query($sql, $this->_link);
      $this->_numRows = mysql_num_rows($this->_result);
    }

    public function numRows()
    {
      return $this->_numRows;
    }

    public function entries()
    {
      $rows = array();
      for($x = 0; $x < $this->numRows(); $x++) {
        $rows[] = mysql_fetch_assoc($this->_result);
      }
      return $rows;
    }

    public function getEntry()
    {
      $result = mysql_fetch_assoc($this->_result);
      return $result;
    }

    public function addEntry($sql)
    {
      if(!mysql_query($sql)) {
        mysqli_error($this->_link);
      };
    }


  }
?>
