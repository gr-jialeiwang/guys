<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");


class Index extends NK_Page {

	var $xml;

	function init() {

		parent::init();

		$this->xmlInit();

		// ページモード
		$this->imode1 = true;

		// タイトル・パーツテンプレート設定
		$this->header_title = "業務管理システム Guy's System";
		$this->header_tpl = "common_nologin_header.tpl";
		$this->footer_tpl = "common_nologin_footer.tpl";
		$this->body_id = "loginPage";
		// $this->navi_tpl = "nologin_navi.tpl";

		// メインテンプレート
		// $this->contents_tpl = "contents_index.tpl";

		// ログインチェック
		if ($_SESSION['LOGIN_STATUS']) {
			header("Location: ".SITE_URL."top.php");
			exit;
		} else {
			if (!empty($_COOKIE['guys_auto_login'])) {
				$auto_login_key = $_COOKIE['guys_auto_login'];

				$sql = $this->xml->getSql("common", "check_loginsession");
				$queryArr = array();
				$queryArr[] = $auto_login_key;
				$select = $this->selectTable2($sql, $queryArr);

				if (count($select) > 0) {
					// セッション投入
					session_regenerate_id();
					$_SESSION['LOGIN_STATUS'] = true;
					$_SESSION['staffID'] = $select[0]['staffID'];
					$_SESSION['systemID'] = $select[0]['systemID'];

					// トップページへリダイレクト
					header("Location: ".SITE_URL."top.php");

					exit();
				}
			}
		}

	}

	function init_param($page, $form = array()) {
	}

	function process() {

		$this->getManage();

		// ページモード
		$mode = "index";
		if ($_REQUEST['mode']) {
			$mode = $_REQUEST['mode'];
		}

		// ページモードで処理を切り替え
		switch ($mode) {

			case "index":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("index", "index");

				break;

			case "login":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("index", "index");

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// ログインモジュール
				$login = new NK_Login();

				// ログインチェック
				if ($login->adminLoginCheck($arrForm['loginId'], $arrForm['loginPassowrd'], $userData)) {

					// ログイン状態を保持
					if ($arrForm['keepMeSignedIn'] && $arrForm['keepMeSignedIn'] == 1) {
						if (!empty($_COOKIE['guys_auto_login'])) {
							$this->delete_auto_login($_COOKIE['guys_auto_login']);
						}

						$this->setup_auto_login($userData['staffID'], $userData['systemID']);
					}

					// セッション投入
					session_regenerate_id();
					$_SESSION['LOGIN_STATUS'] = true;
					$_SESSION['staffID'] = $userData['staffID'];
					$_SESSION['systemID'] = $userData['systemID'];

					// トップページへリダイレクト
					header("Location: ".SITE_URL."top.php");

					exit();

				} else {

					// エラーメッセージ
					$arrForm['err_msg'][] = "ログインID、またはパスワードが違います。";

				}

				break;

			default:

				break;

		}

		// テンプレートへ投入
		$this->smarty->assign("arrForm", $arrForm);

		parent::process();

	}

	function destroy() {

		parent::destroy();

	}


	/*** User Function ***/

	function getManage() {

		$xml = new NK_Xml();
		$xml->init("manage", true);
		$managelist = $xml->getManageList();
		foreach ($managelist as $list) {
			foreach ($list->attributes() as $key => $value) {
			}
		}

	}

	function xmlInit() {

		$this->xml = new NK_Xml();
		$this->xml->init("index", false);

		$this->header_title = $this->xml->getTitle();
		$navi = $this->xml->createNavi();
		$this->smarty->assign("navi", $navi);

	}

	function selectTable($sql, $data = array(), $order="") {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		if (count($data) > 0) {
			foreach ($data as $key => $val) {
				if (strcmp($key, "mode") != 0) {
					$sql .= " AND ".$key."='".$val."' ";
				}
			}
		}
		$arrRet = $db->query($sql . $order);
		$db->disconnect();
		return $arrRet;

	}

	function selectTable2($sql, $data) {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$arrRet = $db->query($sql, $data);
		$db->disconnect();
		return $arrRet;

	}

	function execTable($sql, $data) {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$ret = $db->sqlexec($sql, $data);
		$db->disconnect();
		return $ret;

	}

	function execTableNull($sql, $data) {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$ret = $db->sqlexec_null($sql, $data);
		$db->disconnect();
		return $ret;

	}

	function insertTable($sql, $data) {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$ret = $db->insert($sql, $data);
		$db->disconnect();
		return $ret;

	}

	function insertTableNull($sql, $data) {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$ret = $db->insert_null($sql, $data);
		$db->disconnect();
		return $ret;

	}

	function setup_auto_login($staffID, $systemID) {

		$cookieName = 'guys_auto_login';
		$auto_login_key = sha1(uniqid().mt_rand(1,999999999).'_guys_auto_login');
		$cookieExpire = time() + KEEP_LOGIN_TIME;
		$cookiePath = '/';
		$cookieDomain = $_SERVER['SERVER_NAME'];

		$data = array();
		$data[] = $staffID;
		$data[] = $systemID;
		$data[] = $auto_login_key;
		$data[] = date("Y-m-d H:i:s");

		$sql = $this->xml->getSql("index", "regist_loginsession");

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$ret = $db->insert($sql, $data);
		$db->disconnect();

		setcookie($cookieName, $auto_login_key, $cookieExpire, $cookiePath, $cookieDomain);

		return $ret;

	}

	function delete_auto_login($auto_login_key = '') {

		$cookieName = 'guys_auto_login';
		$cookieExpire = time() - 1800;
		$cookiePath = '/';
		$cookieDomain = $_SERVER['SERVER_NAME'];

		$data = array();
		$data[] = $auto_login_key;

		$sql = $this->xml->getSql("index", "delete_loginsession");

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$ret = $db->sqlexec($sql, $data);
		$db->disconnect();

		setcookie($cookieName, $auto_login_key, $cookieExpire, $cookiePath, $cookieDomain);

		return $ret;

	}

}
?>
