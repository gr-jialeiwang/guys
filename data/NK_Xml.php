<?php
/*** XML Class ***/


class NK_Xml {

	var $sxml;
	var $manage;

	function init($filename = "", $manage = false) {

		$this->manage = $manage;
		$filename = $filename.".xml";
		$this->sxml = new SimpleXMLElement(XML_DIR.$filename, NULL, TRUE);

	}

	function getManageList() {

		if ($this->manage == false) {
			return null;
		}

		return $this->sxml->manage;

	}

	function getTitle() {

		return $this->sxml->title;

	}

	function createNavi() {

		$table = $this->sxml->table_list->table;

		for ($cnt = 0; $cnt < count($table); $cnt++) {
			foreach ($table[$cnt]->attributes() as $key => $value) {
				$key = htmlentities((string)$key, ENT_COMPAT, "UTF-8");
				$value = htmlentities((string)$value, ENT_COMPAT, "UTF-8");
				switch($key) {
					case "name":
						$navi[$cnt][$key] = $value;

						break;

					case "alias":
						$navi[$cnt]['title'] = $value;

						break;

					default:

						break;
				}
			}

			$table_tpl = $this->sxml->table_list->table[$cnt]->template;
			for ($i = 0; $i < count($table_tpl); $i++) {
				$k = htmlentities((string)$table_tpl[$i]->attributes(), ENT_COMPAT, "UTF-8");
				$val = htmlentities((string)$table_tpl[$i], ENT_COMPAT, "UTF-8");
				$navi[$cnt][$k] = $val;
			}
		}

		return $navi;

	}

	function getSql($name, $cmd) {

		$table = $this->sxml->table_list->table;

		$count = 0;
		for ($cnt = 0; $cnt < count($table); $cnt++) {
			foreach ($table[$cnt]->attributes() as $key => $value) {
				// $key = htmlentities((string)$key, ENT_COMPAT, "UTF-8");
				// $value = htmlentities((string)$value, ENT_COMPAT, "UTF-8");
				if (strcmp($key, "name") == 0) {
					if (strcmp($value, $name) == 0) {
						$count = $cnt;
						break;
					}
				}
			}
		}
		$table_tpl = $this->sxml->table_list->table[$count]->sql;
		for ($i = 0; $i < count($table_tpl); $i++) {
			// $k = htmlentities((string)$table_tpl[$i]->attributes(), ENT_COMPAT, "UTF-8");
			// $val = htmlentities((string)$table_tpl[$i], ENT_COMPAT, "UTF-8");
			$k = (string)$table_tpl[$i]->attributes();
			$val = (string)$table_tpl[$i];

			if (strcmp($k, $cmd) == 0) {
				$ret = $val;
				break;
			}
		}

		return $ret;

	}

	function getTemplate($name, $cmd) {

		$table = $this->sxml->table_list->table;

		$count = 0;
		for ($cnt = 0; $cnt < count($table); $cnt++) {
			foreach ($table[$cnt]->attributes() as $key => $value) {
				$key = htmlentities((string)$key, ENT_COMPAT, "UTF-8");
				$value = htmlentities((string)$value, ENT_COMPAT, "UTF-8");
				if (strcmp($key, "name") == 0) {
					if (strcmp($value,$name) == 0) {
						$count = $cnt;
						break;
					}
				}
			}
		}
		$table_tpl = $this->sxml->table_list->table[$count]->template;
		for ($i = 0; $i < count($table_tpl); $i++) {
			$k = htmlentities((string)$table_tpl[$i]->attributes(), ENT_COMPAT, "UTF-8");
			$val = htmlentities((string)$table_tpl[$i], ENT_COMPAT, "UTF-8");

			if (strcmp($k, $cmd) == 0) {
				$ret = $val;
				break;
			}
		}

		return $ret;

	}

}
?>
