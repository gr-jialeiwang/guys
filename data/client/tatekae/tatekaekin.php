<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");


class Client_Tatekae_Tatekaekin extends NK_Page {

	var $xml;

	function init() {

		parent::init();

		$this->xmlInit();

		// ページモード
		$this->imode1 = true;

		// タイトル・パーツテンプレート設定
		$this->header_title = "立替金 新規登録／編集";
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
		$sql = $this->xml->getSql("common", "status_clientPageEdit");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg1 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg1 = 1;
		}
		$this->smarty->assign("view_flg1", $view_flg1);

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_advanceMoneyBrowse");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg2 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg2 = 1;
		}
		$this->smarty->assign("view_flg2", $view_flg2);

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_advanceMoneyEdit");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg3 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg3 = 1;
		}
		$this->smarty->assign("view_flg3", $view_flg3);

	}

	function init_param($page, $form = array()) {

		if ($page == "regist_chk") {
			$this->params->addParam("codeNumber", "※企業名は必須です。", "", array("EXIST_CHECK"));
			if ($form['noOffice'] != 1) {
				$this->params->addParam("office", "※事業所名は必須です。", "", array("EXIST_CHECK"));
				$this->params->addParam("office", "※事業所名は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			}
			$this->params->addParam("officeCode", "※事業所コードは必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("officeCode", "※事業所コードは半角英数字記号で入力してください。", "", array("ALNUMK_CHECK"));
			$this->params->addParam("officeCode", "※事業所コードは100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("searchBox", "※検索用テキストは1000文字以内で入力してください。", "1000", array("MAXLENGTH_CHECK"));
		}

		if ($page == "del_chk") {
			$this->params->addParam("codeNumber", "※企業名が不明です。", "", array("EXIST_CHECK"));
			$this->params->addParam("officeCode", "※企業名が不明です。", "", array("EXIST_CHECK"));
		}

		if ($page == "detail_chk") {
			$this->params->addParam("codeNumber", "※企業名が不明です。", "", array("EXIST_CHECK"));
			$this->params->addParam("officeCode", "※企業名が不明です。", "", array("EXIST_CHECK"));
		}

		if ($page == "registBase_chk") {
			$this->params->addParam("yearStart", "※日付（年）は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("monthStart", "※日付（月）は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("dayStart", "※日付（日）は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("cashAdvance", "※立替項目は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("payment", "※金額は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("payment", "※金額は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("payment", "※金額は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("numberOfPayment", "※出金科目は必須です。", "", array("EXIST_CHECK"));
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
				$this->contents_tpl = $this->xml->getTemplate("client", "tatekae_tatekaekin");

				$editMode = "editRegist";

				break;

			case "editRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client", "tatekae_tatekaekin");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// 入力チェック
				$this->init_param("regist_chk", $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$nonRegArr[] = "codeNumber";
					$nonRegArr[] = "officeCode";

					$sql = $this->xml->getSql("client", "update_client");
					$queryArr = array();
					foreach ($arrForm as $key => $value) {
						if (in_array($key, $nonRegArr) || preg_match('/^FN_/', $key)) {
						} else {
							$queryArr[] = $value;
						}
					}
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $arrForm['codeNumber'];
					$queryArr[] = $arrForm['officeCode'];

					$this->execTableNull($sql, $queryArr);

					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				}

				$select = $arrForm;

				break;

			case "delRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client", "tatekae_tatekaekin");

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
				$officeCode = "";
				if ($arrForm['FN_officeCodeDel'] && $arrForm['FN_officeCodeDel'] != "") {
					$officeCode = $arrForm['FN_officeCodeDel'];
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

					$sql = $this->xml->getSql("client", "delete_client");
					$queryArr = array();
					$queryArr[] = 9;
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $codeNumber;
					$queryArr[] = $officeCode;

					$this->execTableNull($sql, $queryArr);

					// 完了メッセージ
					$arrForm['err_msg2'][] = "削除しました。";

					// トップページへリダイレクト
					header("Location: ".SITE_URL."top.php");
				}

				$select = $arrForm;

				break;

			case "newRegistBase":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client", "tatekae_tatekaekin");

				$editMode = $mode;
				$editModeBase = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// 入力チェック
				$this->init_param("registBase_chk", $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$nonRegArr[] = "tatekaeId";

					$sql = $this->xml->getSql("client", "insert_client_tatekae");
					$queryArr = array();
					foreach ($arrForm as $key => $value) {
						if (in_array($key, $nonRegArr) || preg_match('/^FN_/', $key)) {
						} else {
							$queryArr[] = $value;
						}
					}
					$queryArr[] = 1;
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = 1;

					$this->insertTableNull($sql, $queryArr);

					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				} else {
					$selectBase = $arrForm;
				}

				break;

			case "editRegistBase":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client", "tatekae_tatekaekin");

				$editMode = $mode;
				$editModeBase = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// 入力チェック
				$this->init_param("registBase_chk", $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$nonRegArr[] = "codeNumber";
					$nonRegArr[] = "officeCode";
					$nonRegArr[] = "tatekaeId";

					$sql = $this->xml->getSql("client", "update_client_tatekae");
					$queryArr = array();
					foreach ($arrForm as $key => $value) {
						if (in_array($key, $nonRegArr) || preg_match('/^FN_/', $key)) {
						} else {
							$queryArr[] = $value;
						}
					}
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $arrForm['tatekaeId'];
					$queryArr[] = $arrForm['codeNumber'];
					$queryArr[] = $arrForm['officeCode'];

					$this->execTableNull($sql, $queryArr);

					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				} else {
					$selectBase = $arrForm;
				}

				break;

			default:

				break;

		}

		// 企業一覧取得
		$sql = $this->xml->getSql("company", "select_company");
		$queryArr = array();
		$queryArr[] = 1;
		$selectCompany = $this->selectTable2($sql, $queryArr);

		// 社員一覧取得
		$sql = $this->xml->getSql("staff", "select_staff");
		$queryArr = array();
		$queryArr[] = 1;
		$selectStaff = $this->selectTable2($sql, $queryArr);

		// 年配列
		$startYear = 2016;
		$endYear = date("Y", strtotime("+10 year"));
		$checkupYearArr = array();
		for ($i = $startYear; $i <= $endYear; $i++){
			$checkupYearArr[] = $i;
		}

		// マスター取得
		$masterCategory = "cashAdvance";
		$sql = $this->xml->getSql("master_edit", "select_master");
		$queryArr = array();
		$queryArr[] = $masterCategory;
		$queryArr[] = 1;
		$selectMaster[$masterCategory] = $this->selectTable2($sql, $queryArr);

		// マスター取得
		$masterCategory = "numberOfPayment";
		$sql = $this->xml->getSql("master_edit", "select_master");
		$queryArr = array();
		$queryArr[] = $masterCategory;
		$queryArr[] = 1;
		$selectMaster[$masterCategory] = $this->selectTable2($sql, $queryArr);

		// パラメータのセット
		$codeNumber = "";
		if ($_GET['codeNumber'] && $_GET['codeNumber'] != "") {
			$codeNumber = $this->params->sanitize($_GET['codeNumber']);
		}
		$officeCode = "";
		if ($_GET['officeCode'] && $_GET['officeCode'] != "") {
			$officeCode = $this->params->sanitize($_GET['officeCode']);
		}
		$tatekaeId = "";
		if ($_GET['tatekaeId'] && $_GET['tatekaeId'] != "") {
			$tatekaeId = $this->params->sanitize($_GET['tatekaeId']);
		}

		// 入力チェック
		if ($codeNumber == "" && $officeCode == "") {
			$arrForm['err_msg'][] = "企業名もしくは事業所名が不明です。";
		}

		/*
		if ($tatekaeId == "") {
			$arrForm['err_msg'][] = "立替金情報が不明です。";
		}
		*/

		// エラー無しの場合取引先取得
		if (count($arrForm['err_msg']) == 0) {
			// 取引先取得
			$sql = $this->xml->getSql("client", "select_client_id");
			$queryArr = array();
			$queryArr[] = $codeNumber;
			$queryArr[] = $officeCode;
			$queryArr[] = 1;
			$queryArr[] = 1;
			$select = $this->selectTable2($sql, $queryArr);
			$select = $select[0];
echo $tatekaeId;

			// 基本取得
			$sql = $this->xml->getSql("client", "select_tatekae_id");
			$queryArr = array();
			$queryArr[] = $tatekaeId;
			$queryArr[] = $codeNumber;
			$queryArr[] = $officeCode;
			$queryArr[] = 1;
			$selectBaseTemp = $this->selectTable2($sql, $queryArr);

			$editModeBase = "newRegistBase";
			if (count($selectBaseTemp) > 0) {
				$editModeBase = "editRegistBase";
			}

			if (!is_array($selectBase)) {
				$selectBase = $selectBaseTemp[0];
			}
		}

		// テンプレートへ投入
		$this->smarty->assign("mode", $mode);
		$this->smarty->assign("editMode", $editMode);
		$this->smarty->assign("editModeBase", $editModeBase);
		$this->smarty->assign("arrForm", $arrForm);
		$this->smarty->assign("select", $select);
		$this->smarty->assign("selectCompany", $selectCompany);
		$this->smarty->assign("selectStaff", $selectStaff);
		$this->smarty->assign("selectMaster", $selectMaster);
		$this->smarty->assign("checkupYearArr", $checkupYearArr);
		$this->smarty->assign("selectBase", $selectBase);
		$this->smarty->assign("codeNumber", $codeNumber);
		$this->smarty->assign("officeCode", $officeCode);
		$this->smarty->assign("tatekaeId", $tatekaeId);

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
