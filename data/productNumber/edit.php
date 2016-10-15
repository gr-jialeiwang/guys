<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");


class ProductNumber_Edit extends NK_Page {

	var $xml;

	function init() {

		parent::init();

		$this->xmlInit();

		// ページモード
		$this->imode1 = true;

		// タイトル・パーツテンプレート設定
		$this->header_title = "品番登録／編集 閲覧";
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

	function init_param($mode, $arrForm = array()) {

		$this->params->addParam("productNumber", "※品番は必須です。", "", array("EXIST_CHECK"));
		$this->params->addParam("productNumber", "※品番は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
		$this->params->addParam("linkItemNum", "※連動品目数は必須です。", "", array("EXIST_CHECK"));
		$this->params->addParam("type", "※タイプは100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
		$this->params->addParam("productName", "※名称は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
		$this->params->addParam("color", "※色名は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
		$this->params->addParam("unitPrice", "※単価は半角数字で入力してください。", "", array("NUM_CHECK"));
		$this->params->addParam("unitPriceColor", "※特色単価は半角数字で入力してください。", "", array("NUM_CHECK"));
		
		// 連動品目数
		$linkItemNum = intval($arrForm['linkItemNum']);
		for ($linkItemCnt = 1; $linkItemCnt <= $linkItemNum; $linkItemCnt++) {
			$this->params->addParam("Ren${linkItemCnt}_productName", "※[連動品目数(${linkItemCnt})]品名は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("Ren${linkItemCnt}_productName", "※[連動品目数(${linkItemCnt})]品名は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("Ren${linkItemCnt}_productNumber", "※[連動品目数(${linkItemCnt})]品番は必須です。", "", array("EXIST_CHECK"));
			$this->params->addParam("Ren${linkItemCnt}_productNumber", "※[連動品目数(${linkItemCnt})]品番は100文字以内で入力してください。", "100", array("MAXLENGTH_CHECK"));
			$this->params->addParam("Ren${linkItemCnt}_defaultUnitPrice", "※[連動品目数(${linkItemCnt})]単価は半角数字で入力してください。", "", array("NUM_CHECK"));
			
			$itemNum = intval($arrForm["Ren${linkItemCnt}_itemNum"]);
			for ($itemCnt = 1; $itemCnt <= $itemNum; $itemCnt++) {
				$orderClient = $arrForm["Ren${linkItemCnt}_Sub${itemCnt}_orderClient"];
				$unitPrice = $arrForm["Ren${linkItemCnt}_Sub${itemCnt}_unitPrice"];
				$this->params->addParam("Ren${linkItemCnt}_Sub${itemCnt}_unitPrice", "※[連動品目数(${linkItemCnt})][発注先 連動単価(${itemCnt})]単価は半角数字で入力してください。", "", array("NUM_CHECK"));
			}
		}
	}

	function process() {

		$this->getManage();

		// ページモード
		$mode = "index";
		if ($_REQUEST['mode']) {
			$mode = $_REQUEST['mode'];
		}
		
		// 発注先取得
		$masterCategory = "orderClient";
		$sql = $this->xml->getSql("productNumber", "select_orderClient");
		$arrData = $this->selectTable2($sql, array());
		foreach ($arrData as $key => $value) {
			$codeNumber = $value['codeNumber'];
			$officeCode = $value['officeCode'];
			$office = $value['office'];
			$officialName = $value['officialName'];
			$arrList = array();
			$arrList['masterId'] = $codeNumber."｜".$officeCode;;
			$arrList['name'] = $officialName."｜".$office;;
			$selectMaster[$masterCategory][] = $arrList;
		}
		
		// ページモードで処理を切り替え
		switch ($mode) {

			case "index":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "edit");

				// エラーメッセージ
				$arrForm['err_msg'][] = "IDを指定してください。";

				break;

			case "new":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "edit");

				$editMode = $mode."Regist";

				break;

			case "edit":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "edit");

				$editMode = $mode."Regist";

				// ID取得
				$id = "";
				if ($_REQUEST['id'] && $_REQUEST['id'] != "") {
					$id = $this->params->sanitize($_REQUEST['id']);
				}

				if (strlen($id) < 1)
					$arrForm['err_msg2']['id'] = "IDの取得に失敗しました";

				// 品番取得
				if ($id != "") {
					$sql = $this->xml->getSql("productNumber", "select_productNumber");
					$sql .= " WHERE GUMproductNumber.id = '".$id."'";
					$sql .= " AND GUMproductNumber.status = '1'";
					$select = $this->selectTable2($sql, array());
					$select = $select[0];
					
					$sql = $this->xml->getSql("productNumber", "select_productLinkItem");
					$sql .= " WHERE id = '".$id."'";
					$sql .= " ORDER BY linkItemNumber";
					$arrData = $this->selectTable2($sql, array());
					foreach ($arrData as $key => $value) {
						
						$linkItemNumber = $value['linkItemNumber'];
						$select["Ren${linkItemNumber}_productName"] = $value['linkProductName'];
						$select["Ren${linkItemNumber}_productNumber"] = $value['linkProductNumber'];
						$select["Ren${linkItemNumber}_defaultUnitPrice"] = $value['defaultUnitPrice'];
						
						$sql = $this->xml->getSql("productNumber", "select_productLinkClient");
						$sql .= " WHERE id = '".$id."'";
						$sql .= " AND linkItemNumber = '".$linkItemNumber."'";
						$sql .= " ORDER BY linkClientNumber";
						$arrData2 = $this->selectTable2($sql, array());

						$select["Ren${linkItemNumber}_itemNum"] = count($arrData2);
						
						foreach ($arrData2 as $key2 => $value2) {
							$linkItemNumber = $value2['linkItemNumber'];
							$linkClientNumber = $value2['linkClientNumber'];
							if (strlen($value2['orderClientCodeNumber']) > 0 && strlen($value2['orderClientOfficeCode']) > 0) {
								$orderClient = $value2['orderClientCodeNumber']."｜".$value2['orderClientOfficeCode'];
								$select["Ren${linkItemNumber}_Sub${linkClientNumber}_orderClient"] = $orderClient;
							}
							$select["Ren${linkItemNumber}_Sub${linkClientNumber}_unitPrice"] = $value2['unitPrice'];
						}
					}
				} else {
					// エラーメッセージ
					$arrForm['err_msg'][] = "IDを指定してください。";
				}

				break;

			case "newRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "edit");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_REQUEST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// 入力チェック
				$this->init_param($mode, $arrForm);
				$arrForm['err_msg2'] = $this->params->checkError($arrForm);

				// 品番 重複チェック
				$sql = $this->xml->getSql("productNumber", "count_productNumber");
				$sql .= " WHERE GUMproductNumber.productNumber = '".$arrForm['productNumber']."' ";
				$sql .= " AND GUMproductNumber.status = '1'";
				$selectQuery = $this->selectTable2($sql, array());
				$countSelectQuery = $selectQuery[0]['cnt'];
				if ($countSelectQuery > 0) {
					$arrForm['err_msg2']['productNumber'] = "※この品番はすでに登録されています。";
				}
				
				// 新規ID取得
				if (count($arrForm['err_msg2']) == 0) {
					$sql = $this->xml->getSql("productNumber", "max_id_productNumber");
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
					$sql = $this->xml->getSql("productNumber", "insert_productNumber");
					$queryArr = array();
					$queryArr[] = $id;
					$queryArr[] = $arrForm['productNumber'];
					$queryArr[] = $arrForm['productName'];
					$queryArr[] = $arrForm['constructionCategory'];
					$queryArr[] = $arrForm['linkItemNum'];
					$queryArr[] = $arrForm['type'];
					$queryArr[] = $arrForm['color'];
					$queryArr[] = $arrForm['unitPrice'];
					$queryArr[] = $arrForm['unitPriceColor'];
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = date("Y-m-d H:i:s");

					$this->insertTableNull($sql, $queryArr);

					// 連動品目登録
					$linkItemNum = intval($arrForm['linkItemNum']);
					for ($linkItemCnt = 1; $linkItemCnt <= $linkItemNum; $linkItemCnt++) {
							
						$productName = $arrForm["Ren${linkItemCnt}_productName"];
						$productNumber = $arrForm["Ren${linkItemCnt}_productNumber"];
						$defaultUnitPrice = $arrForm["Ren${linkItemCnt}_defaultUnitPrice"];
					
						$sql = $this->xml->getSql("productNumber", "insert_productLinkItem");
						$queryArr = array();
						$queryArr[] = $id;
						$queryArr[] = $linkItemCnt;
						$queryArr[] = $productName;
						$queryArr[] = $productNumber;
						$queryArr[] = $defaultUnitPrice;
						$queryArr[] = $_SESSION['staffID'];
						$queryArr[] = $_SESSION['staffID'];
						$queryArr[] = date("Y-m-d H:i:s");
						$queryArr[] = date("Y-m-d H:i:s");
					
						$this->insertTableNull($sql, $queryArr);
					
						$itemNum = intval($arrForm["Ren${linkItemCnt}_itemNum"]);
					
						$addItemCnt = 1;
						for ($itemCnt = 1; $itemCnt <= $itemNum; $itemCnt++) {
					
							$orderClient = $arrForm["Ren${linkItemCnt}_Sub${itemCnt}_orderClient"];
							$unitPrice = $arrForm["Ren${linkItemCnt}_Sub${itemCnt}_unitPrice"];
								
							if (strlen($orderClient) < 1 && strlen($unitPrice) < 1 )
								continue;
								
								
							if (strlen($orderClient) > 0) {
								$arrOrderClient = explode("｜", $orderClient);
								if (count($arrOrderClient) > 1) {
									$orderClientCodeNumber = $arrOrderClient[0];
									$orderClientOfficeCode = $arrOrderClient[1];
								}
							}
								
							$sql = $this->xml->getSql("productNumber", "insert_productLinkClient");
							$queryArr = array();
							$queryArr[] = $id;
							$queryArr[] = $linkItemCnt;
							$queryArr[] = $addItemCnt;
							$queryArr[] = $orderClientCodeNumber;
							$queryArr[] = $orderClientOfficeCode;
							$queryArr[] = $unitPrice;
							$queryArr[] = $_SESSION['staffID'];
							$queryArr[] = $_SESSION['staffID'];
							$queryArr[] = date("Y-m-d H:i:s");
							$queryArr[] = date("Y-m-d H:i:s");
								
							$this->insertTableNull($sql, $queryArr);
							$addItemCnt++;
						}
					}
					
					
					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
					
					// 編集モードに移行
					$editMode = "editRegist";
				}

				$select = $arrForm;

				break;

			case "editRegist":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "edit");

				$editMode = $mode;

				// パラメータのセット
				foreach ($_REQUEST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}
				
				$id = $arrForm['id'];
				if (strlen($id) < 1)
					$arrForm['err_msg2']['id'] = "IDの取得に失敗しました";
				
				// 入力チェック
				if (count($arrForm['err_msg2']) == 0) {
					$this->init_param($mode, $arrForm);
					$arrForm['err_msg2'] = $this->params->checkError($arrForm);
				}
				
				// 品番 重複チェック
				if (count($arrForm['err_msg2']) == 0) {
					$sql = $this->xml->getSql("productNumber", "count_productNumber");
					$sql .= " WHERE GUMproductNumber.productNumber = '".$arrForm['productNumber']."' ";
					$sql .= " AND GUMproductNumber.id != '".$id."'";
					$sql .= " AND GUMproductNumber.status = '1'";
					$selectQuery = $this->selectTable2($sql, array());
					$countSelectQuery = $selectQuery[0]['cnt'];
					if ($countSelectQuery > 0) {
						$arrForm['err_msg2']['productNumber'] = "※この品番はすでに登録されています。";
					}
				}

				// エラー無しの場合登録処理
				if (count($arrForm['err_msg2']) == 0) {
					
					// 更新
					$sql = $this->xml->getSql("productNumber", "update_productNumber");
					$queryArr = array();
					$queryArr[] = $arrForm['productNumber'];
					$queryArr[] = $arrForm['productName'];
					$queryArr[] = $arrForm['constructionCategory'];
					$queryArr[] = $arrForm['linkItemNum'];
					$queryArr[] = $arrForm['type'];
					$queryArr[] = $arrForm['color'];
					$queryArr[] = $arrForm['unitPrice'];
					$queryArr[] = $arrForm['unitPriceColor'];
					$queryArr[] = $_SESSION['staffID'];
					$queryArr[] = date("Y-m-d H:i:s");
					$queryArr[] = $id;
				
					$this->execTableNull($sql, $queryArr);
				
					// 連動品目削除
					$sql = $this->xml->getSql("productNumber", "delete_productLinkItem");
					$queryArr = array();
					$queryArr[] = $id;
					$this->execTableNull($sql, $queryArr);
					$sql = $this->xml->getSql("productNumber", "delete_productLinkClient");
					$queryArr = array();
					$queryArr[] = $id;
					$this->execTableNull($sql, $queryArr);
					
					// 連動品目登録
					$linkItemNum = intval($arrForm['linkItemNum']);
					for ($linkItemCnt = 1; $linkItemCnt <= $linkItemNum; $linkItemCnt++) {
					
						$productName = $arrForm["Ren${linkItemCnt}_productName"];
						$productNumber = $arrForm["Ren${linkItemCnt}_productNumber"];
						$defaultUnitPrice = $arrForm["Ren${linkItemCnt}_defaultUnitPrice"];
						
						$sql = $this->xml->getSql("productNumber", "insert_productLinkItem");
						$queryArr = array();
						$queryArr[] = $id;
						$queryArr[] = $linkItemCnt;
						$queryArr[] = $productName;
						$queryArr[] = $productNumber;
						$queryArr[] = $defaultUnitPrice;
						$queryArr[] = $_SESSION['staffID'];
						$queryArr[] = $_SESSION['staffID'];
						$queryArr[] = date("Y-m-d H:i:s");
						$queryArr[] = date("Y-m-d H:i:s");
						
						$this->insertTableNull($sql, $queryArr);

						$itemNum = intval($arrForm["Ren${linkItemCnt}_itemNum"]);

						$addItemCnt = 1;
						for ($itemCnt = 1; $itemCnt <= $itemNum; $itemCnt++) {

							$orderClient = $arrForm["Ren${linkItemCnt}_Sub${itemCnt}_orderClient"];
							$unitPrice = $arrForm["Ren${linkItemCnt}_Sub${itemCnt}_unitPrice"];
							
							if (strlen($orderClient) < 1 && strlen($unitPrice) < 1 )
								continue;
							
							if (strlen($orderClient) > 0) {
								$arrOrderClient = explode("｜", $orderClient);
								if (count($arrOrderClient) > 1) {
									$orderClientCodeNumber = $arrOrderClient[0];
									$orderClientOfficeCode = $arrOrderClient[1];
								}
							}
					
							$sql = $this->xml->getSql("productNumber", "insert_productLinkClient");
							$queryArr = array();
							$queryArr[] = $id;
							$queryArr[] = $linkItemCnt;
							$queryArr[] = $addItemCnt;
							$queryArr[] = $orderClientCodeNumber;
							$queryArr[] = $orderClientOfficeCode;
							$queryArr[] = $unitPrice;
							$queryArr[] = $_SESSION['staffID'];
							$queryArr[] = $_SESSION['staffID'];
							$queryArr[] = date("Y-m-d H:i:s");
							$queryArr[] = date("Y-m-d H:i:s");
							
							$this->insertTableNull($sql, $queryArr);
							$addItemCnt++;
						}
					}
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					// 完了メッセージ
					$arrForm['err_msg2'][] = "登録しました。";
				}

				$select = $arrForm;

				break;
				
			case "delRegist":
			
				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "edit");
			
				$editMode = $mode;
			
				// パラメータのセット
				foreach ($_REQUEST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				$id = $arrForm['id'];
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
					
					$editMode = "delRegistered";
				}
			
				$select = $arrForm;
			
				break;
				
			case "changeLinkItemNum":
				
				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "edit");

				// パラメータのセット
				foreach ($_REQUEST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}
				
				$id = $arrForm['id'];
				if (strlen($id) < 1)
					$editMode = "newRegist";
				else
					$editMode = "editRegist";
				
				$select = $arrForm;
				
				break;
				
			case "addLinkItemSub":
				
				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "edit");
				
				// パラメータのセット
				foreach ($_REQUEST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}
				
				$id = $arrForm['id'];
				if (strlen($id) < 1)
					$editMode = "newRegist";
				else
					$editMode = "editRegist";
				
				$select = $arrForm;
				
				break;
				
			case "delLinkItemSub":
				
				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("productNumber", "edit");
				
				// パラメータのセット
				foreach ($_REQUEST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// エラーチェック
				if (count($arrForm['err_msg2']) == 0) {
					if (strlen($arrForm['delLinkItemNo']) < 1 || strlen($arrForm['delLinkItemSubNo']) < 1 )
						$arrForm['err_msg2']['id'] = "IDの取得に失敗しました";
				}
				if (count($arrForm['err_msg2']) == 0) {
					if (!is_numeric($arrForm['delLinkItemNo']) || !is_numeric($arrForm['delLinkItemSubNo']))
						$arrForm['err_msg2']['id'] = "IDの取得に失敗しました";
				}
				if (count($arrForm['err_msg2']) == 0) {
					if (intval($arrForm['delLinkItemNo']) < 1 || intval($arrForm['delLinkItemSubNo']) < 1 )
						$arrForm['err_msg2']['id'] = "IDの取得に失敗しました";
				}
				// 削除処理
				if (count($arrForm['err_msg2']) == 0) {
					$delLinkItemNo = intval($arrForm['delLinkItemNo']);
					$delLinkItemSubNo = intval($arrForm['delLinkItemSubNo']);
					$itemNum = intval($arrForm["Ren${delLinkItemNo}_itemNum"]);
					for ($cnt = $delLinkItemSubNo; $cnt <= $itemNum; $cnt++) {
						
//						print_r("cnt：${cnt}");
//						print_r("<br>");
						
						$nextRow = $cnt+1;
						$orderClient = $arrForm["Ren${delLinkItemNo}_Sub${nextRow}_orderClient"];
						$unitPrice = $arrForm["Ren${delLinkItemNo}_Sub${nextRow}_unitPrice"];

						$arrForm["Ren${delLinkItemNo}_Sub${cnt}_orderClient"] = $orderClient;
						$arrForm["Ren${delLinkItemNo}_Sub${cnt}_unitPrice"] = $unitPrice;

//						print_r("@cnt：${cnt}");
//						print_r("@orderClient：${orderClient}");
//						print_r("@unitPrice：${unitPrice}");
//						print_r("<br>");
					}
				}

//				print_r("itemNum：${itemNum}");
//				print_r("<br>");
//				print_r("delLinkItemNo：${delLinkItemNo}");
//				print_r("<br>");
//				print_r("delLinkItemSubNo：${delLinkItemSubNo}");
//				print_r("<br>");
				
				$id = $arrForm['id'];
				if (strlen($id) < 1)
					$editMode = "newRegist";
				else
					$editMode = "editRegist";
				
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
