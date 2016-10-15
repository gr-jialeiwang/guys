<?php
/*** DB Class ***/


class NK_Database {

	var $db_connect;
	var $db;

	function init() {

		$this->db_connect = false;
		$this->db = false;

	}

	function connect($enc = "utf8") {

		if ($this->db_connect == false) {
			$this->db = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
			if ($this->db == false) {
				die(mysql_error());
			}
			mysql_query("SET NAMES ".$enc);
			if (mysql_select_db(DB_NAME, $this->db)) {
				$this->db_connect = true;
			}
		}

	}

	function tran_start($enc = "utf8") {

		if ($this->db_connect == true) {
			mysql_query("set autocommit = 0",$this->db);
			mysql_query("begin", $this->db);
		}

	}

	function tran_commit($enc = "utf8") {

		if ($this->db_connect == true) {
			mysql_query("commit", $this->db);
		}

	}

	function tran_rollback($enc = "utf8") {

		if ($this->db_connect == true) {
			mysql_query("rollback", $this->db);
		}

	}

	function query($select, $param = array()) {

		if ($this->db_connect == false) {
			return false;
		}
		$sql = $this->paramQuery($select, $param);
		$result = mysql_query($sql);

		// Error Report
		//echo $sql;
		echo mysql_error();

		while($row = @mysql_fetch_assoc($result)) {
			$arrRet[] = $row;
		}

		return $arrRet;

	}

	function insert($insert, $param = array()) {

		if ($this->db_connect == false) {
			return false;
		}
		$sql = $this->paramQuery($insert, $param);
		$sql = str_replace("'',", "NULL,", $sql);
		$result = mysql_query($sql);
		$result = mysql_insert_id();

		return $result;

	}

	function insert_null($insert, $param = array()) {

		if ($this->db_connect == false) {
			return false;
		}
		$sql = $this->paramQuery($insert, $param);
		$sql = str_replace("'NULL'", "NULL", $sql);
		$sql = str_replace("'',", "NULL,", $sql);
		$result = mysql_query($sql);
		$result = mysql_insert_id();

		// Error Report
		echo mysql_error();

		return $result;

	}

	function sqlexec($insert, $param = array()) {

		if ($this->db_connect == false) {
			return false;
		}
		$sql = $this->paramQuery($insert, $param);
		$sql = str_replace("'',", "NULL,", $sql);
		$result = mysql_query($sql);

		return $result;

	}

	function sqlexec_null($insert, $param = array()) {

		if ($this->db_connect == false) {
			return false;
		}
		$sql = $this->paramQuery($insert, $param);
		$sql = str_replace("'NULL'", "NULL", $sql);
		$sql = str_replace("'',", "NULL,", $sql);
		$result = mysql_query($sql);

		// Error Report
		// echo $sql;
		echo mysql_error();

		return $result;

	}

	function disconnect() {

		if ($this->db != false) {
			mysql_close($this->db);
		}

	}

	function paramQuery($select, $paramList) {

		if (count($paramList) <= 0) {
			return $select;
		}
		foreach($paramList as $param) {
			while(($pos = strpos($select, "'?'")) !== false) {
				$select = substr_replace($select, $param, $pos+1, 1);
				break;
			}
		}

		return $select;

	}

	function connect_check() {

		$this->db = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
		if ($this->db == false) {
			return false;
		} else {
			return true;
		}

	}

}
?>