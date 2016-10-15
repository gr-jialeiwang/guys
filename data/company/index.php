<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");


class Company_Index extends NK_Page {

	var $xml;

	function init() {

		parent::init();

		$this->xmlInit();

		// ページモード
		$this->imode1 = true;

		// タイトル・パーツテンプレート設定
		$this->header_title = "企業一覧／登録・編集 企業名検索";
		$this->header_tpl = "common_header.tpl";
		$this->footer_tpl = "common_footer.tpl";
		$this->body_id = "";

		// メインテンプレート
		// $this->contents_tpl = "contents_index.tpl";

		// ログインチェック
		if (!$_SESSION['LOGIN_STATUS']) {
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
				} else {
					// ログインページへリダイレクト
					header("Location: ".SITE_URL."index.php");

					exit();
				}
			} else {
				// ログインページへリダイレクト
				header("Location: ".SITE_URL."index.php");

				exit();
			}
		}

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_companyList");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg1 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg1 = 1;
		}
		$this->smarty->assign("view_flg1", $view_flg1);

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_companyListEdit");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg2 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg2 = 1;
		}
		$this->smarty->assign("view_flg2", $view_flg2);

	}

	function init_param($page, $form = array()) {

		if ($page == "regist_chk") {
			$this->params->addParam("officialName", "※正式名称は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("officialName", "※正式名称は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("codeNumber", "※コードNoは必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("codeNumber", "※コードNoは半角英数字で入力してください。", "", array("ALNUM_CHECK"));
			$this->params->addParam("codeNumber", "※コードNoは100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("clientNameInSystem", "※システム内 表示社名は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("clientNameInSystem", "※システム内 表示社名は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("note", "※備考は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
		}

		if ($page == "del_chk") {
			$this->params->addParam("FN_codeNumberDel", "※コードNoが不明です。", "", array("EXIST_CHECK"));
		}

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
				$this->contents_tpl = $this->xml->getTemplate("company", "index");

				$editMode = "newRegist";

				break;

			case "newRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("company", "index");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// 入力チェック
				$this->init_param("regist_chk", $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);

				// コードNo重複チェック
				if ($arrForm['codeNumber'] != "") {
					$sql = $this->xml->getSql("company", "company_id_check");
					$queryArr = array();
					$queryArr[] = $arrForm['codeNumber'];
					$queryArr[] = 1;
					$selectQuery = $this->selectTable2($sql, $queryArr);
					$countSelectQuery = $selectQuery[0]['cnt'];

					if ($countSelectQuery > 0) {
						$arrForm['err_msg2']['staffID'] = "※このコードNoはすでに登録されています。";
					}
				}

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$sql = $this->xml->getSql("company", "insert_company");
					$queryArr = array();
					foreach ($arrForm as $key => $value) {
						if (in_array($key, $nonRegArr) || preg_match('/^FN_/', $key)) {
						} else {
							$queryArr[] = $value;
						}
					}
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = 1;

					$this->insertTableNull($sql, $queryArr);

					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				}

				$select = $arrForm;

				break;

			case "editRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("company", "index");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// コードNo取得
				$codeNumber = "";
				if ($arrForm['FN_codeNumberOrg'] && $arrForm['FN_codeNumberOrg'] != "") {
					$codeNumber = $arrForm['FN_codeNumberOrg'];
				}

				// 入力チェック
				$this->init_param("regist_chk", $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);

				// コードNo重複チェック
				if ($arrForm['codeNumber'] != $codeNumber) {
					$sql = $this->xml->getSql("company", "company_id_check");
					$queryArr = array();
					$queryArr[] = $arrForm['codeNumber'];
					$queryArr[] = 1;
					$selectQuery = $this->selectTable2($sql, $queryArr);
					$countSelectQuery = $selectQuery[0]['cnt'];

					if ($countSelectQuery > 0) {
						$arrForm['err_msg2']['codeNumber'] = "※このコードNoはすでに登録されています。";
					}
				}

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$sql = $this->xml->getSql("company", "update_company");
					$queryArr = array();
					foreach ($arrForm as $key => $value) {
						if (in_array($key, $nonRegArr) || preg_match('/^FN_/', $key)) {
						} else {
							$queryArr[] = $value;
						}
					}
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $codeNumber;

					$this->execTableNull($sql, $queryArr);

					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				}

				$select = $arrForm;

				break;

			case "delRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("company", "index");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// コードNo取得
				$codeNumber = "";
				if ($arrForm['FN_codeNumberDel'] && $arrForm['FN_codeNumberDel'] != "") {
					$codeNumber = $arrForm['FN_codeNumberDel'];
				}

				// 入力チェック
				$this->init_param("del_chk", $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$sql = $this->xml->getSql("company", "delete_company");
					$queryArr = array();
					$queryArr[] = 9;
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $codeNumber;

					$this->execTableNull($sql, $queryArr);

					// 完了メッセージ
					$arrForm['err_msg2'][] = "削除しました。";
				}

				$select = $arrForm;

				break;

			default:

				break;

		}

		// パラメータのセット
		$searchClientName = "";
		if ($_GET['searchClientName'] && $_GET['searchClientName'] != "") {
			$searchClientName = $this->params->sanitize($_GET['searchClientName']);
		}

		// 現在のページ数
		$pageNo = 1;
		if ($_GET['page'] && $_GET['page'] > 1) {
			$pageNo = $this->params->sanitize($_GET['page']);
		}
		$startLimit = ($pageNo - 1) * PAGING_NO;

		// 企業一覧取得（count）
		$sql = $this->xml->getSql("company", "count_company");
		if ($searchClientName != "") {
			$sql .= $this->xml->getSql("company", "count_company_officialName");
		}
		$queryArr = array();
		$queryArr[] = 1;
		if ($searchClientName != "") {
			$queryArr[] = "%".$searchClientName."%";
		}
		$selectQuery = $this->selectTable2($sql, $queryArr);
		$countSelectQuery = $selectQuery[0]['cnt'];

		// 企業一覧取得
		$sql = $this->xml->getSql("company", "select_company");
		if ($searchClientName != "") {
			$sql .= $this->xml->getSql("company", "select_company_officialName");
		}
		$sql .= "LIMIT ".$startLimit.",".PAGING_NO;
		$queryArr = array();
		$queryArr[] = 1;
		if ($searchClientName != "") {
			$queryArr[] = "%".$searchClientName."%";
		}
		$select = $this->selectTable2($sql, $queryArr);
		$countSelect = count($select);

		// ページング
		$pagingArr = NK_Util::paging($countSelectQuery, PAGING_NO, $pageNo);
		if ($pageNo == 1) {
			$pagingArr['start_view'] = 1;
		} else {
			$pagingArr['start_view'] = $pageNo * PAGING_NO - 1;
		}
		$pagingArr['end_view'] = $pagingArr['start_view'] + $countSelect - 1;

		// テンプレートへ投入
		$this->smarty->assign("mode", $mode);
		$this->smarty->assign("editMode", $editMode);
		$this->smarty->assign("arrForm", $arrForm);
		$this->smarty->assign("select", $select);
		$this->smarty->assign("pageNo", $pageNo);
		$this->smarty->assign("countSelectQuery", $countSelectQuery);
		$this->smarty->assign("pagingArr", $pagingArr);
		$this->smarty->assign("searchClientName", $searchClientName);
		$this->smarty->assign("codeNumber", $codeNumber);

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

}
?>
