<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");

class Client_Worker_Index extends NK_Page {

	var $xml;

	function init() {

		parent::init();

		$this->xmlInit();

		// ページモード
		$this->imode1 = true;

		// タイトル・パーツテンプレート設定
		$this->header_title = "作業員情報";
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
		$sql = $this->xml->getSql("common", "status_staffDataBrowse");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg2 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg2 = 1;
		}
		$this->smarty->assign("view_flg2", $view_flg2);

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_staffDataEdit");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg3 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg3 = 1;
		}
		$this->smarty->assign("view_flg3", $view_flg3);

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_staffDataLv2Browse");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		global $view_flg4;
		$view_flg4 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg4 = 1;
		}
		$this->smarty->assign("view_flg4", $view_flg4);

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_staffDataLv2Edit");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg5 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg5 = 1;
		}
		$this->smarty->assign("view_flg5", $view_flg5);

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_staffDataLv3Browse");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg6 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg6 = 1;
		}
		$this->smarty->assign("view_flg6", $view_flg6);

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_staffDataLv3Edit");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg7 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg7 = 1;
		}
		$this->smarty->assign("view_flg7", $view_flg7);

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
			$this->params->addParam("registrationNumber", "※登録 Noは必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("registrationNumber", "※登録 Noは半角英数字記号で入力してください。", "", array("ALNUMK_CHECK"));
			$this->params->addParam("name_Kanji", "※氏名（漢字）は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("name_Kana", "※氏名（カナ）は全角カタカナで入力してください。", "", array("KANA_CHECK"));

			$this->params->addParam("postcodeFirstHalf", "※郵便番号1は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("postcodeFirstHalf", "※郵便番号1は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));
			$this->params->addParam("postcodeLastHalf", "※郵便番号2は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("postcodeLastHalf", "※郵便番号2は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));
			$this->params->addParam("phoneNumberAreaCode", "※電話番号1は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("phoneNumberAreaCode", "※電話番号1は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));
			$this->params->addParam("phoneNumberFirstHalf", "※電話番号2は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("phoneNumberFirstHalf", "※電話番号2は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));
			$this->params->addParam("phoneNumberLastHalf", "※電話番号3は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("phoneNumberLastHalf", "※電話番号3は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));

			$this->params->addParam("faxNumberAreaCode", "※ファックス番号1は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("faxNumberAreaCode", "※ファックス番号1は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));
			$this->params->addParam("faxNumberFirstHalf", "※ファックス番号2は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("faxNumberFirstHalf", "※ファックス番号2は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));
			$this->params->addParam("faxNumberLastHalf", "※ファックス番号3は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("faxNumberLastHalf", "※ファックス番号3は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));

			$this->params->addParam("eMail", "※メールアドレスはメールアドレス形式で入力してください。", "", array("EMAIL_CHECK"));

			$this->params->addParam("emergencyName_Kana", "※緊急連絡先氏名（カナ）は全角カタカナで入力してください。", "", array("KANA_CHECK"));

			$this->params->addParam("emergencyPhoneNumberAreaCode", "※電話番号1は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("emergencyPhoneNumberAreaCode", "※電話番号1は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));
			$this->params->addParam("emergencyPhoneNumberFirstHalf", "※電話番号2は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("emergencyPhoneNumberFirstHalf", "※電話番号2は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));
			$this->params->addParam("phoneNumberLastHalf", "※電話番号3は半角数字で入力してください。", "", array("NUM_CHECK"));
			$this->params->addParam("phoneNumberLastHalf", "※電話番号3は10文字以内で入力してください。", "10", array("MAXLENGTH_CHECK"));
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
				$this->contents_tpl = $this->xml->getTemplate("client", "worker_index");

				$editMode = "editRegist";

				break;

			case "newRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client", "worker_index");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// 入力チェック
				$this->init_param("regist_chk", $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);

				// 事業所コード重複チェック
				if ($arrForm['codeNumber'] != "" && $arrForm['officeCode'] != "") {
					$sql = $this->xml->getSql("client", "client_id_check");
					$queryArr = array();
					$queryArr[] = $arrForm['codeNumber'];
					$queryArr[] = $arrForm['officeCode'];
					$queryArr[] = 1;
					$selectQuery = $this->selectTable2($sql, $queryArr);
					$countSelectQuery = $selectQuery[0]['cnt'];

					if ($countSelectQuery > 0) {
						$arrForm['err_msg2']['staffID'] = "※この事業所コードはすでに登録されています。";
					}
				}

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$sql = $this->xml->getSql("client", "insert_client");
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
				$this->contents_tpl = $this->xml->getTemplate("client", "worker_index");

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
				$this->contents_tpl = $this->xml->getTemplate("client", "worker_index");

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

			case "newRegistBase1":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client", "worker_index");

				$editMode = $mode;
				$editModeBase1 = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					if (is_array($value)) {
						foreach ($value as $key2 => $value2) {
							foreach ($value2 as $key3 => $value3) {
								$arrForm[$key][$key2][$key3] = htmlspecialchars($value3, ENT_QUOTES, "UTF-8");
							}
						}
					} else {
						$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
					}
				}

				// 入力チェック
				$this->init_param("registBase_chk", $arrForm['sendForm'][1]);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm['sendForm'][1]);

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$sql = $this->xml->getSql("client", "insert_client_worker");
					$queryArr = array();
					foreach ($arrForm['sendForm'][1] as $key => $value) {
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
				} else {
					$selectBase1 = $arrForm['sendForm'][1];
				}

				break;

			case "editRegistBase1":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client", "worker_index");

				$editMode = $mode;
				$editModeBase1 = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					if (is_array($value)) {
						foreach ($value as $key2 => $value2) {
							foreach ($value2 as $key3 => $value3) {
								$arrForm[$key][$key2][$key3] = htmlspecialchars($value3, ENT_QUOTES, "UTF-8");
							}
						}
					} else {
						$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
					}
				}

				// 入力チェック
				$this->init_param("registBase_chk", $arrForm['sendForm'][1]);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm['sendForm'][1]);

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$nonRegArr[] = "codeNumber";
					$nonRegArr[] = "officeCode";

					$sql = $this->xml->getSql("client", "update_client_worker");
					$queryArr = array();
					foreach ($arrForm['sendForm'][1] as $key => $value) {
						if (in_array($key, $nonRegArr) || preg_match('/^FN_/', $key)) {
						} else {
							$queryArr[] = $value;
						}
					}
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $arrForm['codeNumber'];
					$queryArr[] = $arrForm['officeCode'];

					// $this->execTableNull($sql, $queryArr);

					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				} else {
					$selectBase1 = $arrForm['sendForm'][1];
				}

				break;

			case "newRegistBase2":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client", "worker_index");

				$editMode = $mode;
				$editModeBase2 = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					if (is_array($value)) {
						foreach ($value as $key2 => $value2) {
							foreach ($value2 as $key3 => $value3) {
								$arrForm[$key][$key2][$key3] = htmlspecialchars($value3, ENT_QUOTES, "UTF-8");
							}
						}
					} else {
						$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
					}
				}

				// 入力チェック
				foreach ($arrForm['sendForm'] as $value) {
					$this->init_param("registBase_chk", $value);
					$arrForm['err_msg2'][] = $this->params->checkError($value);
				}

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0 || empty($arrForm['err_msg2'][0])) {
					// 一旦削除
					$sql = $this->xml->getSql("client", "delete_client_worker_all");

					$queryArr = array();
					$queryArr[] = 9;
					$queryArr[] = $arrForm['codeNumber'];
					$queryArr[] = $arrForm['officeCode'];
					$queryArr[] = 2;

					$this->execTableNull($sql, $queryArr);

					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$sql = $this->xml->getSql("client", "insert_client_worker");

					$i = 1;
					foreach ($arrForm['sendForm'] as $value) {
						$queryArr = array();
						foreach ($value as $key2 => $value2) {
							if (in_array($key2, $nonRegArr) || preg_match('/^FN_/', $key2)) {
							} else {
								if ($key2 == "workerNo") {
									$queryArr[] = $i;
								} else {
									$queryArr[] = $value2;
								}
							}
						}
						$queryArr[] = $_SESSION['staffID'];
						$queryArr[] = $_SESSION['staffID'];
						$queryArr[] = date("Y-m-d H:i:s");
						$queryArr[] = date("Y-m-d H:i:s");
						$queryArr[] = 1;

						$this->insertTableNull($sql, $queryArr);

						$i++;
					}

					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				} else {
					$selectBase2 = $arrForm['sendForm'];
				}

				break;

			case "editRegistBase2":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client", "worker_index");

				$editMode = $mode;
				$editModeBase2 = $mode;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					if (is_array($value)) {
						foreach ($value as $key2 => $value2) {
							foreach ($value2 as $key3 => $value3) {
								$arrForm[$key][$key2][$key3] = htmlspecialchars($value3, ENT_QUOTES, "UTF-8");
							}
						}
					} else {
						$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
					}
				}

				// 入力チェック
				foreach ($arrForm['sendForm'] as $value) {
					$this->init_param("registBase_chk", $value);
					$arrForm['err_msg2'][] = $this->params->checkError($value);
				}

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					// 新規登録
					$nonRegArr = array();
					$nonRegArr[] = "mode";
					$nonRegArr[] = "err_msg2";

					$nonRegArr[] = "codeNumber";
					$nonRegArr[] = "officeCode";

					$sql = $this->xml->getSql("client", "update_client_worker");

					foreach ($arrForm['sendForm'] as $value) {
						$queryArr = array();
						foreach ($value as $key2 => $value2) {
							if (in_array($key2, $nonRegArr) || preg_match('/^FN_/', $key2)) {
							} else {
								$queryArr[] = $value2;
							}
						}
						$queryArr[] = $_SESSION['staffID'];
						$queryArr[] = date("Y-m-d H:i:s");
						$queryArr[] = $arrForm['codeNumber'];
						$queryArr[] = $arrForm['officeCode'];

						$this->execTableNull($sql, $queryArr);
					}

					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				} else {
					$selectBase2 = $arrForm['sendForm'];
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

		// 生年月日用年号配列
		$startYear = 1916;
		$endYear = date("Y");
		$birthYearArr = array();
		for ($i = $startYear; $i <= $endYear; $i++){
			$birthYearArr[] = $i;
		}
		$birthYearArr = array_reverse($birthYearArr);

		// 健康診断用年配列
		$startYear = 2016;
		$endYear = date("Y", strtotime("+10 year"));
		$checkupYearArr = array();
		for ($i = $startYear; $i <= $endYear; $i++){
			$checkupYearArr[] = $i;
		}

		// 年齢配列
		$startYear = 15;
		$endYear = 80;
		$ageArr = array();
		for ($i = $startYear; $i <= $endYear; $i++){
			$ageArr[] = $i;
		}

		// パラメータのセット
		$codeNumber = "";
		if ($_GET['codeNumber'] && $_GET['codeNumber'] != "") {
			$codeNumber = $this->params->sanitize($_GET['codeNumber']);
		}
		$officeCode = "";
		if ($_GET['officeCode'] && $_GET['officeCode'] != "") {
			$officeCode = $this->params->sanitize($_GET['officeCode']);
		}

		// 入力チェック
		if ($codeNumber == "" && $officeCode == "") {
			$arrForm['err_msg'][] = "企業名もしくは事業所名が不明です。";
		}

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

			// 基本取得1
			$sql = $this->xml->getSql("client", "select_client_worker");
			$queryArr = array();
			$queryArr[] = $codeNumber;
			$queryArr[] = $officeCode;
			$queryArr[] = 1;
			$queryArr[] = 1;
			$selectBase1Temp = $this->selectTable2($sql, $queryArr);

			$editModeBase1 = "newRegistBase1";
			if (count($selectBase1Temp) > 0) {
				$editModeBase1 = "editRegistBase1";
			}

			if (!is_array($selectBase1)) {
				$selectBase1 = $selectBase1Temp[0];
			}

			$queryArr = array();
			$queryArr[] = $codeNumber;
			$queryArr[] = $officeCode;
			$queryArr[] = 2;
			$queryArr[] = 1;
			$selectBase2Temp = $this->selectTable2($sql, $queryArr);

			$editModeBase2 = "newRegistBase2";
			if (count($selectBase2Temp) > 0) {
				// $editModeBase2 = "editRegistBase2";
				$editModeBase2 = "newRegistBase2";
			}

			if (!is_array($selectBase2)) {
				$selectBase2 = $selectBase2Temp;
			}
		}

		// テンプレートへ投入
		$this->smarty->assign("mode", $mode);
		$this->smarty->assign("editMode", $editMode);
		$this->smarty->assign("editModeBase1", $editModeBase1);
		$this->smarty->assign("editModeBase2", $editModeBase2);
		$this->smarty->assign("arrForm", $arrForm);
		$this->smarty->assign("select", $select);
		$this->smarty->assign("selectCompany", $selectCompany);
		$this->smarty->assign("selectStaff", $selectStaff);
		$this->smarty->assign("selectBase1", $selectBase1);
		$this->smarty->assign("selectBase2", $selectBase2);
		$this->smarty->assign("birthYearArr", $selectBase2);
		$this->smarty->assign("checkupYearArr", $selectBase2);
		$this->smarty->assign("ageArr", $selectBase2);
		$this->smarty->assign("codeNumber", $codeNumber);
		$this->smarty->assign("officeCode", $officeCode);

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
