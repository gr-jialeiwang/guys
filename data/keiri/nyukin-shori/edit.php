<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");


class Stock_Edit extends NK_Page {

	var $xml;

	function init() {

		parent::init();

		$this->xmlInit();

		// ページモード
		$this->imode1 = true;

		// タイトル・パーツテンプレート設定
		$this->header_title = "在庫登録／編集 閲覧";
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
		$sql = $this->xml->getSql("common", "status_staffListEdit");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg1 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg1 = 1;
		}
		$this->smarty->assign("view_flg1", $view_flg1);

	}

	function init_param($mode, $form = array()) {
		$this->params->addParam("productName", "※品名は必須です。", "", array("EXIST_CHECK"));
		$this->params->addParam("productName", "※品名は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
		$this->params->addParam("summary", "※仕様／規格／摘要は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
		$this->params->addParam("productNumber", "※品番は必須です。", "", array("EXIST_CHECK"));
		$this->params->addParam("productNumber", "※品番は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
		$this->params->addParam("stock", "※在庫数は必須です。", "", array("EXIST_CHECK"));
		$this->params->addParam("stock", "※在庫数は半角数字で入力してください。", "", array("NUM_CHECK"));
		$this->params->addParam("unit", "※単位は必須です。", "", array("EXIST_CHECK"));
		$this->params->addParam("unitPrice", "※単価は必須です。", "", array("EXIST_CHECK"));
		$this->params->addParam("unitPrice", "※単価は半角数字で入力してください。", "", array("NUM_CHECK"));
	}

	function process() {

		$this->getManage();

		// ページモード
		$mode = "index";
		if ($_REQUEST['mode']) {
			$mode = $_REQUEST['mode'];
		}
		
		// マスター取得
		$masterCategory = "unit";
		$sql = $this->xml->getSql("master_edit", "select_master");
		$queryArr = array();
		$queryArr[] = $masterCategory;
		$queryArr[] = 1;
		$selectMaster[$masterCategory] = $this->selectTable2($sql, $queryArr);
		
		// ページモードで処理を切り替え
		switch ($mode) {

			case "index":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("stock", "edit");

				// エラーメッセージ
				$arrForm['err_msg'][] = "IDを指定してください。";

				break;

			case "new":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("stock", "edit");

				$editMode = $mode."Regist";

				break;

			case "edit":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("stock", "edit");

				$editMode = $mode."Regist";

				// ID取得
				$stockId = "";
				if ($_REQUEST['stockId'] && $_REQUEST['stockId'] != "") {
					$stockId = $this->params->sanitize($_REQUEST['stockId']);
				}

				if (strlen($stockId) < 1)
					$arrForm['err_msg2']['stockId'] = "IDの取得に失敗しました";

				// 在庫取得
				if ($stockId != "") {
					$sql = $this->xml->getSql("stock", "select_stock");
					$sql .= " WHERE GUMstock.stockId = '".$stockId."'";
					$sql .= " AND GUMstock.status = '1'";
					$select = $this->selectTable2($sql, array());
					$select = $select[0];
				} else {
					// エラーメッセージ
					$arrForm['err_msg'][] = "IDを指定してください。";
				}

				break;

			case "newRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("stock", "edit");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// 入力チェック
				$this->init_param($mode, $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);

				// 品番 重複チェック
				$sql = $this->xml->getSql("stock", "count_stock");
				$sql .= " WHERE GUMstock.productNumber = '".$arrForm['productNumber']."' ";
				$sql .= " AND GUMstock.status = '1'";
				$selectQuery = $this->selectTable2($sql, array());
				$countSelectQuery = $selectQuery[0]['cnt'];
				if ($countSelectQuery > 0) {
					$arrForm['err_msg2']['productNumber'] = "※この品番はすでに登録されています。";
				}
				
				// 新規ID取得
				if (count($arrForm['err_msg2']) == 0) {
					$sql = $this->xml->getSql("stock", "max_id_stock");
					$arrData = $this->selectTable2($sql, array());
					if (count($arrData) < 1)
						$arrForm['err_msg2'][] = "IDの取得に失敗しました";
				}
				if (count($arrForm['err_msg2']) == 0) {
					$stockId = $arrData[0]['stockId'];
					if (strlen($arrData[0]['stockId']) < 1)
						$arrForm['err_msg2'][] = "IDの取得に失敗しました";
					else {
						$stockId = intval($arrData[0]['stockId']);
						$stockId++;
					}
				}
				
				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$sql = $this->xml->getSql("stock", "insert_stock");
					$queryArr = array();
					$queryArr[] = $stockId;
					$queryArr[] = $arrForm['productName'];
					$queryArr[] = $arrForm['productNumber'];
					$queryArr[] = $arrForm['summary'];
					$queryArr[] = $arrForm['stock'];
					$queryArr[] = $arrForm['unit'];
					$queryArr[] = $arrForm['unitPrice'];
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = date("Y-m-d H:i:s");

					$this->insertTableNull($sql, $queryArr);

					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
					
					// 編集モードに移行
					$editMode = "editRegist";
				}

				$select = $arrForm;

				break;

			case "editRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("stock", "edit");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}
				
				$stockId = $arrForm['stockId'];
				if (strlen($stockId) < 1)
					$arrForm['err_msg2']['stockId'] = "IDの取得に失敗しました";
				
				// 入力チェック
				if (count($arrForm['err_msg2']) == 0) {
					$this->init_param($mode, $arrForm);
					$arrForm['err_msg2'] = $this->params->checkError($arrForm);
				}
				
				// 品番 重複チェック
				if (count($arrForm['err_msg2']) == 0) {
					$sql = $this->xml->getSql("stock", "count_stock");
					$sql .= " WHERE GUMstock.productNumber = '".$arrForm['productNumber']."' ";
					$sql .= " AND GUMstock.stockId != '".$stockId."'";
					$sql .= " AND GUMstock.status = '1'";
					$selectQuery = $this->selectTable2($sql, array());
					$countSelectQuery = $selectQuery[0]['cnt'];
					if ($countSelectQuery > 0) {
						$arrForm['err_msg2']['productNumber'] = "※この品番はすでに登録されています。";
					}
				}

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 更新
					$sql = $this->xml->getSql("stock", "update_stock");
					$queryArr = array();
					$queryArr[] = $arrForm['productName'];
					$queryArr[] = $arrForm['productNumber'];
					$queryArr[] = $arrForm['summary'];
					$queryArr[] = $arrForm['stock'];
					$queryArr[] = $arrForm['unit'];
					$queryArr[] = $arrForm['unitPrice'];
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $stockId;
				
					$this->execTableNull($sql, $queryArr);
				
					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				}

				$select = $arrForm;

				break;
				
			case "delRegist":
			
				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("stock", "edit");
			
				$editMode = $mode;
			
				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				$stockId = $arrForm['stockId'];
				if (strlen($stockId) < 1)
					$arrForm['err_msg2']['stockId'] = "IDの取得に失敗しました";
				
				// エラー無しの場合削除処理
				if (count($arrForm['err_msg2']) == 0) {
			
					$sql = $this->xml->getSql("stock", "delete_stock");
					$queryArr = array();
					$queryArr[] = 0;
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $stockId;
			
					$this->execTableNull($sql, $queryArr);
			
					// 完了メッセージ
					$arrForm['err_msg2'][] = "削除しました。";
					
					$editMode = "delRegistered";
				}
			
				$select = $arrForm;
			
				break;
			default:

				break;

		}

		// テンプレートへ投入
		$this->smarty->assign("mode", $mode);
		$this->smarty->assign("editMode", $editMode);
		$this->smarty->assign("arrForm", $arrForm);
		$this->smarty->assign("select", $select);
		$this->smarty->assign("stockId", $stockId);
		$this->smarty->assign("selectMaster", $selectMaster);

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
//		$this->xml->init("index_temp1", false);

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
