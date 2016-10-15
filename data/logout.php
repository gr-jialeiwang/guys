<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");


class Logout extends NK_Page {

	var $xml;

	function init() {

		parent::init();

		$this->xmlInit();

		// ページモード
		$this->imode0 = true;

		// タイトル・パーツテンプレート設定
		$this->header_title = "ログアウト";
		$this->header_tpl = "common_header.tpl";
		$this->navi_tpl = "common_navi.tpl";
		$this->footer_tpl = "common_footer.tpl";

		// メインテンプレート
		// $this->contents_tpl = "contents_index.tpl";

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
				// $this->contents_tpl = $this->xml->getTemplate("logout", "index");

				if (!empty($_COOKIE['guys_auto_login'])) {
					$this->delete_auto_login($_COOKIE['guys_auto_login']);
				}

				// セッション投入
				unset($_SESSION['LOGIN_STATUS']);
				unset($_SESSION['staffID']);
				unset($_SESSION['systemID']);
				setcookie("PHPSESSID", '', time() - 1800, '/');
				session_destroy();

				// ログインページへリダイレクト
				header("Location: ".SITE_URL."index.php");

				break;

			default:

				break;

		}

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
		$navi1 = $this->xml->createNavi();
		$this->smarty->assign("navi1", $navi1);
		$navi2 = $this->xml->createNavi();
		$this->smarty->assign("navi2", $navi2);

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

	function setup_auto_login($admin_id) {

		$cookieName = 'guys_auto_login';
		$auto_login_key = sha1(uniqid().mt_rand(1,999999999).'_guys_auto_login');
		$cookieExpire = time() + KEEP_LOGIN_TIME;
		$cookiePath = '/';
		$cookieDomain = $_SERVER['SERVER_NAME'];

		$data = array();
		$data[] = $admin_id;
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
