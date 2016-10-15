<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>社員登録／編集 閲覧・操作権限 設定：Guy's System</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/page.css">
<link rel="stylesheet" href="../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../js/function.js"></script>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="container">
				<h1 id="logo"><a href="../top.php"><img src="../img/common/logo_header.png" height="39" width="166" alt="GUY’S COMPANY Oparation Management System"></a></h1>
				<div class="boxRight">
					<a href="../index.php">ログアウト</a>
					<a href="#" id="menuBtn"><img src="../img/common/btn_menu.png" alt="メニューボタン"></a>
				</div>
			</div>
			<nav id="gNav">
				<ul>
					<li><a href="../top.php">ホーム</a></li>
					<li><a href="../keiri/index.php">経理処理Top</a></li>
					<li><a href="../in-house_order/index.php">自社発注</a></li>
					<li><a href="../preceding_order/index.php">先行発注</a></li>
					<li><a href="../hinban/index.php">品番登録・編集</a></li>
					<li class="current">社員一覧/登録・編集</li>
					<li><a href="../company/index.php">企業一覧/登録・編集</a></li>
					<li><a href="../client/index.php">取引先ページ新規作成</a></li>
					<li><a href="../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20">
				<div class="container">
				<div class="pageTitle clearfix">
					<div class="boxLeft mr8">
						<div class="btnBack"><a href="index.php">戻る</a></div>
					</div>
					<div class="boxLeft">
						<h2>社員一覧／登録・編集</h2>
					</div>
				</div>
					<div class="headingB">
						<h3>基本情報</h3>
					</div>
					<table class="tableA">
						<tr>
							<th class="w87">社員ID No</th>
							<td><input type="text" name="staffID" class="w100p"></td>
							<th class="w63">所属</th>
							<td><input type="text" name="department" class="w100p"></td>
							<th class="w105">ステータス</th>
							<td>
								<select name="state" class="w120">
									<option>選択</option>
									<option value="在籍">在籍</option>
									<option value="退職">退職</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>氏名</th>
							<td><input type="text" name="name" class="w100p"></td>
							<th>役職</th>
							<td><input type="text" name="position" class="w100p"></td>
							<th>社員職人 時間給</th>
							<td><input type="text" name="hourlyWage" class="mr7">円</td>
						</tr>
						<tr>
							<th>読みカナ分類</th>
							<td>
								<select name="kana" class="w100">
									<option value="ア">ア</option>
									<option value="カ">カ</option>
									<option value="サ">サ</option>
									<option value="タ">タ</option>
									<option value="ナ">ナ</option>
									<option value="ハ">ハ</option>
									<option value="マ">マ</option>
									<option value="ヤ">ヤ</option>
									<option value="ラ">ラ</option>
									<option value="ワ">ワ</option>
								</select>
							</td>
							<th>電話番号</th>
							<td colspan="3">
								<input type="text" class="w53" name="phoneNumerAreaCode" placeholder="000">
								ー
								<input type="text" class="w53" name="phoneNumerFirstHalf" placeholder="0000">
								ー
								<input type="text" class="w53" name="phoneNumerLastHalf" placeholder="0000">
							</td>
						</tr>
					</table>
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload" type="button">登録・更新する</button>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
				<div class="headingB">
					<h3>システムID／パスワード</h3>
				</div>
				<table class="tableA w470">
					<tr>
						<th class="w30">ID</th>
						<td class="w147"><input type="text" name="systemID" class="w100p"></td>
						<th class="w75">パスワード</th>
						<td><input type="password" name="password" class="w100p"></td>
					</tr>
				</table>
				<div class="clearfix mb20">
					<div class="boxRight">
						<button class="btnReload" type="button">登録・更新する</button>
					</div>
				</div>
				<hr>
				<div class="headingB mb10">
					<h3>システム権限設定</h3>
				</div>
				<div class="clearfix">
					<div class="boxLeft w470">
						<ul class="horizontal">
							<li class="mr10">
								<div class="checkBox">
									<input type="checkbox" id="checkAllPermission1" class="checkAll" name="checkAllPermission1">
									<label for="checkAllPermission1">全てに権限にチェックを入れる</label>
								</div>
							</li>
							<li>
								<div class="checkBox">
									<input type="checkbox" id="checkBrowsePermission1" class="checkBlowseAll" name="checkBrowsePermission1">
									<label for="checkBrowsePermission1">閲覧権限のみ、全てにチェックを入れる</label>
								</div>
							</li>
						</ul>
						<table class="tableB">
							<tr>
								<th></th>
								<th class="w48">閲覧権限</th>
								<th class="w84">操作／編集権限</th>
							</tr>
							<tr>
								<td>社員一覧</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="staffListBrowse" class="checkBlowse checkOrder" name="staffListBrowse">
										<label for="staffListBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="staffListEdit" class="checkOrder" name="staffListEdit">
										<label for="staffListEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>企業一覧</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="companyListBrowse" class="checkBlowse checkOrder" name="companyList">
										<label for="companyListBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="companyListEdit" class="checkOrder" name="companyListEdit">
										<label for="companyListEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>自社発注情報</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="orderDataBrowse" class="checkBlowse checkOrder" name="orderDataBrowse">
										<label for="orderDataBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="orderDataEdit" class="checkOrder" name="orderDataEdit">
										<label for="orderDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>先行発注情報</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="advanceOrderDataBrowse" class="checkOrder checkBlowse" name="advanceOrderDataBrowse">
										<label for="advanceOrderDataBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="advanceOrderDataEdit" class="checkOrder" name="advanceOrderDataEdit">
										<label for="advanceOrderDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>材料販売情報</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="materialSellingDataBrowse" class="checkOrder checkBlowse" name="materialSellingDataBrowse">
										<label for="materialSellingDataBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="materialSellingDataEdit" class="checkOrder" name="materialSellingDataEdit">
										<label for="materialSellingDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>在庫情報</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="stockDataBrowse" class="checkBlowse checkOrder" name="stockDataBrowse">
										<label for="stockDataBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="stockDataEdit" class="checkOrder" name="stockDataEdit">
										<label for="stockDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>品番登録</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="productNumberBrowse" class="checkBlowse checkOrder" name="productNumberBrowse">
										<label for="productNumberBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="productNumberEdit" class="checkOrder" name="productNumberEdit">
										<label for="productNumberEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>材料納品書照合</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="deliverySlipBrowse" class="checkBlowse checkOrder" name="deliverySlipBrowse">
										<label for="deliverySlipBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="deliverySlipEdit" class="checkOrder" name="deliverySlipEdit">
										<label for="deliverySlipEdit"></label>
									</div>
								</td>
							</tr>
						</table>
						<ul class="horizontal noTtl">
							<li class="mr10">
								<div class="checkBox">
									<input type="checkbox" id="checkAllPermission2" class="checkAll" name="checkAllPermission2">
									<label for="checkAllPermission2">全てに権限にチェックを入れる</label>
								</div>
							</li>
						</ul>
						<table class="tableB">
							<tr>
								<th></th>
								<th class="w145">権限</th>
							</tr>
							<tr>
								<td>取引先ページ 新規登録・編集権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="clientPageEdit" class="checkOrder" name="clientPageEdit">
										<label for="clientPageEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>工事ページ　新規登録・編集権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="constructionPageEdit" class="checkOrder" name="constructionPageEdit">
										<label for="constructionPageEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>工事ページ　複製権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="constructionPageCopyEdit" class="checkOrder" name="constructionPageCopyEdit">
										<label for="constructionPageCopyEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>工事ページ　削除権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="constructionPageDeleteEdit" class="checkOrder" name="constructionPageDeleteEdit">
										<label for="constructionPageDeleteEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>工事情報　検索権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="constructionSearchEdit" class="checkOrder" name="constructionSearchEdit">
										<label for="constructionSearchEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>取引先 検索権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="clientSearchEdit" class="checkOrder" name="clientSearchEdit">
										<label for="clientSearchEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>各種数値情報 集計権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="aggregatedDataEdit" class="checkOrder" name="aggregatedDataEdit">
										<label for="aggregatedDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>各種マスタ情報 編集権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="masterDataEdit" class="checkOrder" name="masterDataEdit">
										<label for="masterDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>見積マスタ登録 編集権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="estimateEdit" class="checkOrder" name="estimateEdit">
										<label for="estimateEdit"></label>
									</div>
								</td>
							</tr>
						</table>
						<table class="tableB">
							<tr>
								<th></th>
								<th class="w145">権限</th>
							</tr>
							<tr>
								<td>労務申請 「申請」 対象者</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="personApplicableEdit" class="checkOrder" name="personApplicableEdit">
										<label for="personApplicableEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>労務申請 「承認」 権限者</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="administratorEdit" class="checkOrder" name="administratorEdit">
										<label for="administratorEdit"></label>
									</div>
								</td>
							</tr>
						</table>
						<ul class="pt20">
							<li class="mb10">※「閲覧権限」<br>　　対象のページを見る、アクセスすることができます。</li>
							<li>※「操作／編集権限」 <br>　　対象のページにおいて、入力・更新・登録・編集・削除などの操作ができます。</li>
						</ul>
					</div>
					<div class="boxRight w470">
						<ul class="horizontal">
							<li class="mr10">
								<div class="checkBox">
									<input type="checkbox" id="checkAllPermission3" class="checkAll" name="checkAllPermission3">
									<label for="checkAllPermission3">全てに権限にチェックを入れる</label>
								</div>
							</li>
							<li>
								<div class="checkBox">
									<input type="checkbox" id="checkBrowsePermission2" class="checkBlowseAll" name="checkBrowsePermission2">
									<label for="checkBrowsePermission2">閲覧権限のみ、全てにチェックを入れる</label>
								</div>
							</li>
						</ul>
						<table class="tableB">
							<tbody>
								<tr>
									<th></th>
									<th class="w210 bdln"></th>
									<th class="w48">閲覧権限</th>
									<th class="w84">操作／編集権限</th>
								</tr>
								<tr>
									<td rowspan="14" class="txtCenter">取引先情報</td>
									<td class="">基本情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="basicInfomationListBrowse" class="checkOrder checkBlowse" name="basicInfomationListBrowse">
											<label for="basicInfomationListBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="basicInfomationListEdit" class="checkOrder" name="basicInfomationListEdit">
											<label for="basicInfomationListEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>販売系 経理情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="sellAccountingBrowse" class="checkBlowse checkOrder" name="sellAccountingBrowse">
											<label for="sellAccountingBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="sellAccountingEdit" class="checkOrder" name="sellAccountingEdit">
											<label for="sellAccountingEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>仕入系 経理情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="purchaseAcconuntingBrowse" class="checkOrder checkBlowse" name="purchaseAcconuntingBrowse">
											<label for="purchaseAcconuntingBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="purchaseAcconuntingEdit" class="checkOrder" name="purchaseAcconuntingEdit">
											<label for="purchaseAcconuntingEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>発注書設定</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="purchaseOrderBrowse" class="checkBlowse checkOrder" name="purchaseOrderBrowse">
											<label for="purchaseOrderBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="purchaseOrderEdit" class="checkOrder" name="purchaseOrderEdit">
											<label for="purchaseOrderEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>作業員情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataBrowse" class="checkBlowse checkOrder" name="staffDataBrowse">
											<label for="staffDataBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataEdit" class="checkOrder" name="staffDataEdit">
											<label for="staffDataEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>作業員情報 閲覧ＬＥＶＥＬ2</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataLv2Browse" class="checkBlowse checkOrder" name="staffDataLv2Browse">
											<label for="staffDataLv2Browse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataLv2Edit" class="checkOrder" name="staffDataLv2Edit">
											<label for="staffDataLv2Edit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>作業員情報 閲覧ＬＥＶＥＬ3</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataLv3Browse" class="checkBlowse checkOrder" name="staffDataLv3Browse">
											<label for="staffDataLv3Browse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataLv3Edit" class="checkOrder" name="staffDataLv3Edit">
											<label for="staffDataLv3Edit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>立替金情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="advanceMoneyBrowse" class="checkBlowse checkOrder" name="advanceMoneyBrowse">
											<label for="advanceMoneyBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="advanceMoneyEditEdit" class="checkOrder" name="advanceMoneyEdit">
											<label for="advanceMoneyEditEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>依頼／受注履歴</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="orderRequestBrowse" class="checkBlowse checkOrder" name="orderRequestBrowse">
											<label for="orderRequestBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="orderRequestEdit" class="checkOrder" name="orderRequestEdit">
											<label for="orderRequestEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>請求書一覧</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="billBrowse" class="checkOrder checkBlowse" name="billBrowse">
											<label for="billBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="billEdit" class="checkOrder" name="billEdit">
											<label for="billEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>売掛金情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsReceivableBrowse" class="checkOrder checkBlowse" name="accountsReceivableBrowse">
											<label for="accountsReceivableBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsReceivableEdit" class="checkOrder" name="accountsReceivableEdit">
											<label for="accountsReceivableEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>未入金・不足工事 一覧</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="unpaidBrowse" class="checkBlowse checkOrder" name="unpaidBrowse">
											<label for="unpaidBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="unpaidEdit" class="checkOrder" name="unpaidEdit">
											<label for="unpaidEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>仕入／発注履歴</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="orderHistoryBrowse" class="checkBlowse checkOrder" name="orderHistoryBrowse">
											<label for="orderHistoryBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="orderHistoryEdit" class="checkOrder" name="orderHistoryEdit">
											<label for="orderHistoryEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>買掛金情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsPayableBrowse" class="checkOrder checkBlowse" name="accountsPayableBrowse">
											<label for="accountsPayableBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsPayableEdit" class="checkOrder" name="accountsPayableEdit">
											<label for="accountsPayableEdit"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<ul class="horizontal noTtl">
							<li class="mr10">
								<div class="checkBox">
									<input type="checkbox" id="checkAllPermission4" class="checkAll" name="checkAllPermission4">
									<label for="checkAllPermission4">全てに権限にチェックを入れる</label>
								</div>
							</li>
							<li>
								<div class="checkBox">
									<input type="checkbox" id="checkBrowsePermission3" class="checkBlowseAll" name="checkBrowsePermission3">
									<label for="checkBrowsePermission3">閲覧権限のみ、全てにチェックを入れる</label>
								</div>
							</li>
						</ul>
						<table class="tableB">
							<tbody>
								<tr>
									<th></th>
									<th class="bdln w210"></th>
									<th class="w48">閲覧権限</th>
									<th class="w84">操作／編集権限</th>
								</tr>
								<tr>
									<td rowspan="9" class="txtCenter">工事情報</td>
									<td>基本情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionInfoBrowse" class="checkOrder checkBlowse" name="constructionInfoBrowse">
											<label for="constructionInfoBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionInfoEdit" class="checkOrder" name="constructionInfoEdit">
											<label for="constructionInfoEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>見積情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionEstimateBrowse" class="checkOrder checkBlowse" name="constructionEstimateBrowse">
											<label for="constructionEstimateBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionEstimateEdit" class="checkOrder" name="constructionEstimateEdit">
											<label for="constructionEstimateEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>初期積算データ</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="integrationDataBrowse" class="checkOrder checkBlowse" name="integrationDataBrowse">
											<label for="integrationDataBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="integrationDataEdit" class="checkOrder" name="integrationDataEdit">
											<label for="integrationDataEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>積算データ成形</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="integrationFormBrowse" class="checkOrder checkBlowse" name="integrationFormBrowse">
											<label for="integrationFormBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="integrationFormEdit" class="checkOrder" name="integrationFormEdit">
											<label for="integrationFormEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>見込原価情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="expectedCostBrowse" class="checkBlowse checkOrder" name="expectedCostBrowse">
											<label for="expectedCostBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="expectedCostEdit" class="checkOrder" name="expectedCostEdit">
											<label for="expectedCostEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>発注</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionOrderBrowse" class="checkOrder checkBlowse" name="constructionOrderBrowse">
											<label for="constructionOrderBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionOrderEdit" class="checkOrder" name="constructionOrderEdit">
											<label for="constructionOrderEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>見積・発注・完了報告書 一覧</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="reportListBrowse" class="checkBlowse checkOrder" name="reportListBrowse">
											<label for="reportListBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="reportListEdit" class="checkOrder" name="reportListEdit">
											<label for="reportListEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>工事経費情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionCostBrowse" class="checkOrder checkBlowse" name="constructionCostBrowse">
											<label for="constructionCostBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionCostEdit" class="checkOrder" name="constructionCostEdit">
											<label for="constructionCostEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>実行原価情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="executionCostBrowse" class="checkBlowse checkOrder" name="executionCostBrowse">
											<label for="executionCostBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="executionCostEdit" class="checkOrder" name="executionCostEdit">
											<label for="executionCostEdit"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<ul class="horizontal noTtl">
							<li class="mr10">
								<div class="checkBox">
									<input type="checkbox" id="checkAllPermission5" class="checkAll" name="checkAllPermission5">
									<label for="checkAllPermission5">全てに権限にチェックを入れる</label>
								</div>
							</li>
							<li>
								<div class="checkBox">
									<input type="checkbox" id="checkBrowsePermission5" class="checkBlowseAll" name="checkBrowsePermission5">
									<label for="checkBrowsePermission5">閲覧権限のみ、全てにチェックを入れる</label>
								</div>
							</li>
						</ul>
						<table class="tableB">
							<tbody>
								<tr>
									<th></th>
									<th class="bdln w210"></th>
									<th class="w48">閲覧権限</th>
									<th class="w84">操作／編集権限</th>
								</tr>
								<tr>
									<td rowspan="11" class="txtCenter">経理処理</td>
									<td>請求書発行</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="billingBrowse" class="checkOrder checkBlowse" name="billingBrowse">
											<label for="billingBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="billingEdit" class="checkOrder" name="billingEdit">
											<label for="billingEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>入金処理</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentProccessBrowse" class="checkOrder checkBlowse" name="paymentProccessBrowse">
											<label for="paymentProccessBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentProccessEdit" class="checkOrder" name="paymentProccessEdit">
											<label for="paymentProccessEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>入金予定表</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentScheduleBrowse" class="checkOrder checkBlowse" name="paymentScheduleBrowse">
											<label for="paymentScheduleBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentScheduleEdit" class="checkOrder" name="paymentScheduleEdit">
											<label for="paymentScheduleEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>売掛情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsReceivableBrowse" class="checkOrder checkBlowse" name="accountsReceivableBrowse">
											<label for="accountsReceivableBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsReceivableEdit" class="checkOrder" name="accountsReceivableEdit">
											<label for="accountsReceivableEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>受請求書処理</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="expectedCostBrowse" class="checkBlowse checkOrder" name="expectedCostBrowse">
											<label for="expectedCostBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="expectedCostEdit" class="checkOrder" name="expectedCostEdit">
											<label for="expectedCostEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>支払処理</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentProcessBrowse" class="checkBlowse checkOrder" name="paymentProcessBrowse">
											<label for="paymentProcessBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentProcessEdit" class="checkOrder" name="paymentProcessEdit">
											<label for="paymentProcessEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>自社経費登録</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="expensesBrowse" class="checkBlowse checkOrder" name="expensesBrowse">
											<label for="expensesBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="expensesEdit" class="checkOrder" name="expensesEdit">
											<label for="expensesEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>支払予定表</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentSchedule2Browse" class="checkOrder checkBlowse" name="paymentSchedule2Browse">
											<label for="paymentSchedule2Browse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentSchedule2Edit" class="checkOrder" name="paymentSchedule2Edit">
											<label for="paymentSchedule2Edit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>買掛情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsPayableBrowse" class="checkOrder checkBlowse" name="accountsPayableBrowse">
											<label for="accountsPayableBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsPayableEditEdit" class="checkOrder" name="accountsPayableEdit">
											<label for="accountsPayableEditEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>仕掛金情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="workInProcessBrowse" class="checkBlowse checkOrder" name="workInProcessBrowse">
											<label for="workInProcessBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="workInProcessEditEdit" class="checkOrder" name="workInProcessEdit">
											<label for="workInProcessEditEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>入手金情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountActivityBrowse" class="checkOrder checkBlowse" name="accountActivityBrowse">
											<label for="accountActivityBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountActivityEdit" class="checkOrder" name="accountActivityEdit">
											<label for="accountActivityEdit"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>