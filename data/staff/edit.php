<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");


class Staff_Edit extends NK_Page {

	var $xml;

	function init() {

		parent::init();

		$this->xmlInit();

		// ページモード
		$this->imode1 = true;

		// タイトル・パーツテンプレート設定
		$this->header_title = "社員登録／編集 閲覧・操作権限 設定";
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

			$this->params->addParam("staffID", "※社員ID Noは必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("staffID", "※社員ID Noは半角英数字で入力してください。", "", array("ALNUM_CHECK"));
			$this->params->addParam("staffID", "※社員ID Noは100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("department", "※所属は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("department", "※所属は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("state", "※ステータスは必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("department", "※所属は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("department", "※所属は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("name", "※氏名は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("name", "※氏名は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("position", "※役職は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("position", "※役職は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("hourlyWage", "※社員職人 時間給は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("hourlyWage", "※社員職人 時間給は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("hourlyWage", "※社員職人 時間給は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("phoneNumerAreaCode", "※電話番号1は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("phoneNumerAreaCode", "※電話番号1は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("phoneNumerAreaCode", "※電話番号1は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("phoneNumerFirstHalf", "※電話番号2は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("phoneNumerFirstHalf", "※電話番号2は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("phoneNumerFirstHalf", "※電話番号2は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("phoneNumerLastHalf", "※電話番号3は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("phoneNumerLastHalf", "※電話番号3は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("phoneNumerLastHalf", "※電話番号3は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));

			$this->params->addParam("systemID", "※システムIDは必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("systemID", "※システムIDは半角英数字記号で入力してください。", "", array("ALNUMK_CHECK"));
			$this->params->addParam("systemID", "※システムIDは100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			
			if ($mode == "newRegist") {
				$this->params->addParam("password", "※パスワードは必須です。", "", array("EXIST_CHECK"));
				$this->params->addParam("password", "※パスワードは半角英数字で入力してください。", "", array("ALNUM_CHECK"));
				$this->params->addParam("password", "※パスワードは5文字以上で入力してください。", "5", array("MINLENGTH_CHECK"));
				$this->params->addParam("password", "※パスワードは100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			}
			else if (strlen($form['password']) > 0) {
				$this->params->addParam("password", "※パスワードは半角英数字で入力してください。", "", array("ALNUM_CHECK"));
				$this->params->addParam("password", "※パスワードは5文字以上で入力してください。", "5", array("MINLENGTH_CHECK"));
				$this->params->addParam("password", "※パスワードは100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
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
				$this->contents_tpl = $this->xml->getTemplate("staff", "edit");

				break;

			case "new":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("staff", "edit");

				$editMode = $mode."Regist";

				break;

			case "edit":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("staff", "edit");

				$editMode = $mode."Regist";
				
				// ID取得
				$id = "";
				if ($_REQUEST['id'] && $_REQUEST['id'] != "") {
					$id = $this->params->sanitize($_REQUEST['id']);
				}
				
				if (strlen($id) < 1)
					$arrForm['err_msg2']['id'] = "IDの取得に失敗しました";
				
				// 社員取得
				if ($id != "") {
					$sql = $this->xml->getSql("staff", "select_staff");
					$sql .= " WHERE GUMstaff.id = '".$id."'";
					$sql .= " AND GUMstaff.status = '1'";
					$select = $this->selectTable2($sql, array());
					$select = $select[0];

//					$staffID = $select['systemID'];
//					$systemID = $select['systemID'];
				} else {
					// エラーメッセージ
					$arrForm['err_msg'][] = "社員IDを指定してください。";
				}

				break;

			case "newRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("staff", "edit");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// 入力チェック
				$this->init_param($mode, $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);

				// スタッフID重複チェック
				if ($arrForm['staffID'] != "") {
					$sql = $this->xml->getSql("staff", "count_staff");
					$sql .= " WHERE GUMstaff.staffID = '".$arrForm['staffID']."' ";
					$sql .= " AND GUMstaff.status = '1'";
					$selectQuery = $this->selectTable2($sql, array());
					$countSelectQuery = $selectQuery[0]['cnt'];

					if ($countSelectQuery > 0) {
						$arrForm['err_msg2']['staffID'] = "※この社員IDはすでに登録されています。";
					}
				}

				// システムID重複チェック
				if ($arrForm['systemID'] != "") {
					$sql = $this->xml->getSql("staff", "count_staff");
					$sql .= " WHERE GUMstaff.systemID = '".$arrForm['systemID']."' ";
					$sql .= " AND GUMstaff.status = '1'";
					$selectQuery = $this->selectTable2($sql,  array());
					$countSelectQuery = $selectQuery[0]['cnt'];

					if ($countSelectQuery > 0) {
						$arrForm['err_msg2']['systemID'] = "※このシステムIDはすでに登録されています。";
					}
				}

				// 新規ID取得
				if (count($arrForm['err_msg2']) == 0) {
					$sql = $this->xml->getSql("staff", "max_id_staff");
					$arrData = $this->selectTable2($sql, array());
					if (count($arrData) < 1)
						$arrForm['err_msg2'][] = "IDの取得に失敗しました";
				}
				if (count($arrForm['err_msg2']) == 0) {
					$id = $arrData[0]['id'];
					if (strlen($arrData[0]['id']) < 1)
						$arrForm['err_msg2'][] = "IDの取得に失敗しました";
					else {
						$id = intval($arrData[0]['id']);
						$id++;
					}
				}
				
				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";
					$nonRegArr[] = "id";

					$sql = $this->xml->getSql("staff", "insert_staff");
					$queryArr = array();
					foreach ($arrForm as $key => $value) {
						if (in_array($key, $nonRegArr) || preg_match('/^FN_/', $key)) {
						} else {
							if ($key == "password") {
								$queryArr[] = password_hash($value, PASSWORD_DEFAULT);
							} else {
								$queryArr[] = $value;
							}
						}
					}
					
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $id;
					
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
				$this->contents_tpl = $this->xml->getTemplate("staff", "edit");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}
				
				$id = $arrForm['id'];
				if (strlen($id) < 1)
					$arrForm['err_msg2']['id'] = "IDの取得に失敗しました";

				// 入力チェック
				$this->init_param($mode, $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);
				
				// スタッフID重複チェック
				if ($arrForm['staffID'] != "") {
					$sql = $this->xml->getSql("staff", "count_staff");
					$sql .= " WHERE GUMstaff.staffID = '".$arrForm['staffID']."' ";
					$sql .= " AND GUMstaff.id != '".$id."'";
					$sql .= " AND GUMstaff.status = '1'";
					$selectQuery = $this->selectTable2($sql, array());
					$countSelectQuery = $selectQuery[0]['cnt'];
				
					if ($countSelectQuery > 0) {
						$arrForm['err_msg2']['staffID'] = "※この社員IDはすでに登録されています。";
					}
				}
				
				// システムID重複チェック
				if ($arrForm['systemID'] != "") {
					$sql = $this->xml->getSql("staff", "count_staff");
					$sql .= " WHERE GUMstaff.systemID = '".$arrForm['systemID']."' ";
					$sql .= " AND GUMstaff.id != '".$id."'";
					$sql .= " AND GUMstaff.status = '1'";
					$selectQuery = $this->selectTable2($sql,  array());
					$countSelectQuery = $selectQuery[0]['cnt'];
				
					if ($countSelectQuery > 0) {
						$arrForm['err_msg2']['systemID'] = "※このシステムIDはすでに登録されています。";
					}
				}

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";
					$nonRegArr[] = "id";
				
					$sql = $this->xml->getSql("staff", "update_staff");
					if ($arrForm['password'] != "")
						$sql .= " ,password = '?' ";
					$sql .= " WHERE GUMstaff.id = '".$id."'";
					
					$queryArr = array();
					foreach ($arrForm as $key => $value) {
						if (in_array($key, $nonRegArr) || preg_match('/^FN_/', $key)) {
						} else {
							if ($key == "password") {
								$password = password_hash($value, PASSWORD_DEFAULT);
							} else {
								$queryArr[] = $value;
							}
						}
					}
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					
					if ($arrForm['password'] != "") 
						$queryArr[] = $password;
				
					$this->execTableNull($sql, $queryArr);
				
					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				}

				$select = $arrForm;

				break;
				
			case "delRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("staff", "edit");
				
				$editMode = $mode;
				
				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}
				
				$id = $arrForm['id'];
				if (strlen($id) < 1)
					$arrForm['err_msg2']['id'] = "IDの取得に失敗しました";

				// エラー無しの場合削除処理
				if (count($arrForm['err_msg2']) == 0) {
						
					$sql = $this->xml->getSql("staff", "delete_staff");
					$queryArr = array();
					$queryArr[] = 0;
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $id;
						
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
		$this->smarty->assign("id", $id);
		$this->smarty->assign("staffID", $staffID);
		$this->smarty->assign("systemID", $systemID);

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
