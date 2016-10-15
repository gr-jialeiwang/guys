<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");


class ProductNumber_Index extends NK_Page {

	var $xml;

	function init() {

		parent::init();

		$this->xmlInit();

		// ページモード
		$this->imode1 = true;

		// タイトル・パーツテンプレート設定
		$this->header_title = "品番一覧／登録・編集 品番一覧";
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
		$sql = $this->xml->getSql("common", "status_productNumberBrowse");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg1 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg1 = 1;
		}
		$this->smarty->assign("view_flg1", $view_flg1);

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_productNumberEdit");
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
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "index");

				// パラメータのセット
				foreach ($_REQUEST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}
				
				break;

			case "delRegist":
					
				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "index");

				// パラメータのセット
				foreach ($_REQUEST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}
			
				$id = $_REQUEST['id'];
				if (strlen($id) < 1)
					$arrForm['err_msg2']['id'] = "IDの取得に失敗しました";
			
				// エラー無しの場合削除処理
				if (count($arrForm['err_msg2']) == 0) {

					$sql = $this->xml->getSql("productNumber", "delete_productNumber");
					$queryArr = array();
					$queryArr[] = 0;
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $id;
						
					$this->execTableNull($sql, $queryArr);
						
					// 完了メッセージ
					$arrForm['err_msg2'][] = "削除しました。";
						
					$mode = "index";
				}
					
				$select = $arrForm;
					
				break;
				
			default:

				break;

		}

		// 現在のページ数
		$pageNo = 1;
		if ($_REQUEST['page'] && $_REQUEST['page'] > 1) {
			$pageNo = $this->params->sanitize($_REQUEST['page']);
		}
		$startLimit = ($pageNo - 1) * PAGING_NO;
		
		$sqlWhere = " WHERE GUMproductNumber.status = '1' ";
		
		$searchCategory = $_REQUEST['searchCategory'];
		$searchProduct = $_REQUEST['searchProduct'];
		$searchWord = $_REQUEST['searchWord'];
		
		if (strlen($searchCategory) > 0) {
			$sqlWhere .= " AND GUMproductNumber.constructionCategory = '".$searchCategory."' ";
		}
		if (strlen($searchProduct) > 0) {
			$sqlWhere .= " AND ( GUMproductNumber.productName LIKE '%".$searchProduct."%' OR GUMproductNumber.productNumber LIKE '%".$searchProduct."%' ) ";
		}
		if (strlen($searchWord) > 0) {
			$sqlWhere .= " AND ( GUMproductNumber.productName LIKE '%".$searchWord."%' OR GUMproductNumber.productNumber LIKE '%".$searchWord."%' OR GUMproductNumber.type LIKE '%".$searchWord."%' OR GUMproductNumber.color LIKE '%".$searchWord."%' ) ";
		}
		$sqlSort = " ORDER BY GUMproductNumber.update_date DESC ";
		
		// 品番一覧取得（count）
		$sql = $this->xml->getSql("productNumber", "count_productNumber");
		if (strlen($sqlWhere) > 0)
			$sql .= $sqlWhere;
		$selectQuery = $this->selectTable2($sql, array());
		$countSelectQuery = $selectQuery[0]['cnt'];
		
		// 品番一覧取得
		$sql = $this->xml->getSql("productNumber", "select_productNumber");
		if (strlen($sqlWhere) > 0)
			$sql .= $sqlWhere;
		if (strlen($sqlSort) > 0)
			$sql .= $sqlSort;
		$sql .= " LIMIT ".$startLimit.",".PAGING_NO;
		$select = $this->selectTable2($sql, array());
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
		$this->smarty->assign("arrForm", $arrForm);
		$this->smarty->assign("select", $select);
		$this->smarty->assign("pageNo", $pageNo);
		$this->smarty->assign("countSelectQuery", $countSelectQuery);
		$this->smarty->assign("pagingArr", $pagingArr);
		$this->smarty->assign("searchCategory", $searchCategory);
		$this->smarty->assign("searchProduct", $searchProduct);
		$this->smarty->assign("searchWord", $searchWord);
		
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
