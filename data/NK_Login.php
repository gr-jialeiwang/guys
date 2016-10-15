<?php
/*** LOGIN Class ***/

// ライブラリ読込
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_PasswordCompact.php");


class NK_Login {

	function init() {

	}

	// 管理者ログインチェック
	function adminLoginCheck($id, $password, &$userData = array()) {

		// IPアドレスチェック用
		$httpHeaders = getallheaders();
		$ipAddress = array_pop(explode(",", $httpHeaders["X-Forwarded-For"]));
		if ($ipAddress == "") {
			$ipAddress = $_SERVER['REMOTE_ADDR'];
		}

		// DB接続
		$db = new NK_Database();
		$db->init();
		$db->connect();

		// ハッシュ化されたパスワードを取得
		$sql = "SELECT * FROM GUMstaff WHERE systemID = '".$id."' AND state = '1'";
		$result = $db->query($sql);

		// レコードが存在したらパスワードチェック
		if (count($result) > 0) {
			if (password_verify($password, $result[0]['password'])) {
				$userData = $result[0];
				return true;
			}
		}

		$db->disconnect();

		return false;

	}

}
?>