<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>見積書・発注書一覧：Guy's System</title>
<link rel="stylesheet" href="../../css/common.css">
<link rel="stylesheet" href="../../css/base.css">
<link rel="stylesheet" href="../../css/page.css">
<link rel="stylesheet" href="../../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../../js/function.js"></script>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="container">
				<h1 id="logo"><a href="../../top.php"><img src="../../img/common/logo_header.png" height="39" width="166" alt="GUY’S COMPANY Oparation Management System"></a></h1>
				<div class="boxRight">
					<a href="../../index.php">ログアウト</a>
					<a href="#" id="menuBtn"><img src="../../img/common/btn_menu.png" alt="メニューボタン"></a>
				</div>
			</div>
			<nav id="gNav">
				<ul>
					<li><a href="../../top.php">ホーム</a></li>
					<li><a href="../../keiri/index.php">経理処理Top</a></li>
					<li><a href="../../in-house_order/index.php">自社発注</a></li>
					<li><a href="../../preceding_order/index.php">先行発注</a></li>
					<li><a href="../../hinban/index.php">品番登録・編集</a></li>
					<li><a href="../../staff/index.php">社員一覧/登録・編集</a></li>
					<li><a href="../../company/index.php">企業一覧/登録・編集</a></li>
					<li class="current">取引先ページ新規作成</li>
					<li><a href="../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20 mb30">
				<div class="container">
					<nav id="subNavTop" class="navKoji">
						<ul>
							<li class="leftEnd"><a href="../../new_koji/index.php">新規工事登録</a></li>
							<li><a href="../../koji_search/index.php">工事情報</a></li>
							<li><a href="../../romu-shinsei/index.php">労務申請</a></li>
							<li class="currentLink"><a href="../index.php">材料販売登録</li>
							<li><a href="../../zaiko/index.php">在庫一覧／登録</a></li>
							<li class="rightEnd"><a href="../../material-nohinsho/index.php">材料納品書</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>材料販売個別情報</h2>
						</div>
						<div class="boxRight">
							<button class="buttonA">新規材料販売登録</button>
						</div>
					</div>
					<div class="clearfix">
						<div class="boxLeft w770">
							<table class="tableA">
								<tbody>
									<tr class="bdt">
										<th class="w124">ご依頼日</th>
										<td colspan="3">0000年00月00日</td>
									</tr>
									<tr>
										<th>材料販売番号</th>
										<td class="w242">00A00-00</td>
										<th class="w105">販売先</th>
										<td></td>
									</tr>
									<tr>
										<th>販売材料名（品名）</th>
										<td></td>
										<th>販売先 ご担当者</th>
										<td></td>
									</tr>
									<tr>
										<th>材料販売ステータス</th>
										<td>
											<select name="materialSellStatus" class="w100p">
												<option value=""></option>
											</select>
										</td>
										<th class="w105">自社担当者</th>
										<td>小林太郎（000-0000-0000）</td>
									</tr>
									<tr>
										<th>請求処理状況</th>
										<td>未請求</td>
										<th class="w105">納品先住所</th>
										<td><input type="text" name="deliveryAddress" class="w100p"></td>
									</tr>
									<tr>
										<th>伝言・共有メモ</th>
										<td colspan="3"><input type="text" name="memo" class="w100p"></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="boxRight w200 bottom right">
							<ul class="horizontal kojiBtnWrap">
								<li><button class="buttonA">基本情報編集</button></li>
								<li class="current buttonA lh23 ml0">見積書・発注書 一覧</li>
								<li><button class="buttonA">ページ削除</button></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload" type="button">登録・更新する</button>
						</div>
					</div>
				</div>
			</section>
			<div class="gradient">
				<div class="container">
					<div class="clearfix">
						<div class="boxLeft">
							<nav id="kojiTab">
								<ul>
									<li><a href="../..//material-hanbai/material-info/index.php">見積</a></li>
									<li class="current">発注</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<hr class="gray">
			</div>
			<div class="container">
				<div class="tableStripe2">
					<div class="headingB">
						<h3>材料・本発注書 一覧</h3>
					</div>
					<table class="tableB">
						<thead>
							<tr>
								<th class="">発注日・</th>
								<th class="">発行者</th>
								<th class="">発注先</th>
								<th class="">メーカー</th>
								<th class="">発注分類</th>
								<th>発注書No</th>
								<th class="">税抜発注額</th>
								<th class="w36">発注書</th>
								<th class="">発注明細書</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">佐藤 太郎</td>
								<td></td>
								<td></td>
								<td class="txtCenter">本発注</td>
								<td class="txtCenter"></td>
								<td class="txtRight">0,000,000</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
							</tr>
							<tr>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">佐藤 太郎</td>
								<td></td>
								<td></td>
								<td class="txtCenter">追加発注</td>
								<td class="txtCenter"></td>
								<td class="txtRight">0,000,000</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
							</tr>
							<tr>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">佐藤 太郎</td>
								<td></td>
								<td></td>
								<td class="txtCenter">本発注</td>
								<td class="txtCenter"></td>
								<td class="txtRight">0,000,000</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
							</tr>
							<tr>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">佐藤 太郎</td>
								<td></td>
								<td></td>
								<td class="txtCenter">追加発注</td>
								<td class="txtCenter"></td>
								<td class="txtRight">0,000,000</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tableStripe2">
					<div class="headingB">
						<h3>見積書 一覧・</h3>
					</div>
					<table class="tableB">
						<thead>
							<tr>
								<th class="w90">発注日・</th>
								<th class="w90">発行者</th>
								<th class="w200">見積発行時ステータス</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">佐藤 太郎</td>
								<td class="txtCenter">受注／正式追加見積り</td>
								<td class="txtCenter">
									<ul class="horizontal">
										<li class="mt4">
											<button class="buttonA mr5">破棄</button>
										</li>
										<li>
											<p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">佐藤 太郎</td>
								<td class="txtCenter">受注／正式見積り</td>
								<td class="txtCenter">
									<ul class="horizontal">
										<li class="buttonA mt4 current mr5">破棄</li>
										<li>
											<p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">佐藤 太郎</td>
								<td class="txtCenter">未受注／初期見積り</td>
								<td class="txtCenter">
									<ul class="horizontal">
										<li class="mt4">
											<button class="buttonA mr5">破棄</button>
										</li>
										<li>
											<p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p>
										</li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>