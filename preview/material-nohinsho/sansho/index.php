<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>納品書照合画面：Guy's System</title>
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
							<li><a href="../../romu-shinsei/index.php">労務申請・承認</a></li>
							<li><a href="../../material-hanbai/index.php">材料販売登録</a></li>
							<li><a href="../../zaiko/index.php">在庫一覧/登録</a></li>
							<li class="rightEnd"><a href="../../material-nohinsho/index.php">材料納品書照合</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>材料納品書照合</h2>
						</div>
					</div>
					<table class="tableA">
						<tbody>
							<tr>
								<th class="w70">発注書No</th>
								<td class="w120">
									<input type="text" class="w120" name="purchaseOrderNumber">
								</td>
								<th class="w80">発注個別No</th>
								<td class="w120">
									<input type="text" class="w120" name="orderNumber">
								</td>
								<th class="w40">品番</th>
								<td class="w120">
									<input type="text" class="w120" name="productNumber">
								</td>
								<th class="w40">品名</th>
								<td class="w120">
									<input type="text" class="w120" name="productName">
								</td>
								<td class="bdl txtCenter">
									<button class="buttonA">表示する</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<div class="container mb10">
				<div class="clearfix">
					<div class="boxLeft">
						<table class="tableA">
							<tr>
								<th>税抜 累計金額</th>
								<td>
									<input type="text" class="w125" name="taxoffPrice1" placeholder="※AUTO">
								</td>
								<th>税込 累計金額</th>
								<td>
									<input type="text" class="w125" name="taxInPrice1" placeholder="※AUTO">
								</td>
							</tr>
						</table>
					</div>
					<div class="boxRight w294 txtRight">
						<p class="textAnchor buildReport"><a href="soi-kakunin.php">チェックした材料の相違確認依頼書を発行</a></p>
						<p class="textAnchor buildReport"><a href="#">チェックした材料を該当する処理数量で更新処理</a></p>
					</div>
				</div>
				<table class="tableB mb10">
					<thead>
						<tr>
							<th class="w75">発注日 <br>発行者</th>
							<th class="w70">工事番号</th>
							<th class="w63">発注書No</th>
							<th class="w70">個別発注No</th>
							<th class="w87">納品日 <br>納品ステータス</th>
							<th class="w100">品名 <br>仕様／規格／摘要</th>
							<th class="w63">品番</th>
							<th class="w63">単価 <br>税率</th>
							<th>発注数量 <br>(残り処理数)</th>
							<th class="w60">処理数量</th>
							<th class="w28">単位</th>
							<th class="w72">小計</th>
							<th class="w16"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="txtCenter">0000/00/00 <br>小林太郎</td>
							<td><a href="/koji_search/index02_025.php" class="blue">000A00-00</a></td>
							<td><a href="#" class="blue">000A00-00-01</a></td>
							<td>ABHCD001</td>
							<td class="txtCenter">0000/00/00 <br>完全納品</td>
							<td>□□□□□□□□<br>○○○○○○○</td>
							<td class="txtCenter">000-0000</td>
							<td>0,000,000<br><input type="text" class="w40 txtRight" name="taxRate" placeholder="8">%</td>
							<td class="txtRight">000</td>
							<td>
								<input type="text" name="oederNumber" class="w53 txtRight" placeholder="000">
							</td>
							<td class="txtCenter">式</td>
							<td class="txtRight">0,000,000</td>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order01" class="checkOrder" id="order01">
									<label for="order01"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td class="txtCenter">0000/00/00 <br>小林太郎</td>
							<td><a href="/koji_search/index02_025.php" class="blue">000A00-00</a></td>
							<td><a href="#" class="blue">000A00-00-01</a></td>
							<td>ABHCD001</td>
							<td class="txtCenter">0000/00/00 <br>完全納品</td>
							<td>□□□□□□□□<br>○○○○○○○</td>
							<td class="txtCenter">000-0000</td>
							<td>0,000,000<br><input type="text" class="w40 txtRight" name="taxRate" placeholder="8">%</td>
							<td class="txtRight">000</td>
							<td>
								<input type="text" name="oederNumber" class="w53 txtRight" placeholder="000">
							</td>
							<td class="txtCenter">式</td>
							<td class="txtRight">0,000,000</td>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order02" class="checkOrder" id="order02">
									<label for="order02"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td class="txtCenter">0000/00/00 <br>小林太郎</td>
							<td><a href="/koji_search/index02_025.php" class="blue">000A00-00</a></td>
							<td><a href="#" class="blue">000A00-00-01</a></td>
							<td>ABHCD001</td>
							<td class="txtCenter">0000/00/00 <br>完全納品</td>
							<td>□□□□□□□□<br>○○○○○○○</td>
							<td class="txtCenter">000-0000</td>
							<td>0,000,000<br><input type="text" class="w40 txtRight" name="taxRate" placeholder="8">%</td>
							<td class="txtRight">000</td>
							<td>
								<input type="text" name="oederNumber" class="w53 txtRight" placeholder="000">
							</td>
							<td class="txtCenter">式</td>
							<td class="txtRight">0,000,000</td>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order03" class="checkOrder" id="order03">
									<label for="order03"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td class="txtCenter">0000/00/00 <br>小林太郎</td>
							<td><a href="/koji_search/index02_025.php" class="blue">000A00-00</a></td>
							<td><a href="#" class="blue">000A00-00-01</a></td>
							<td>ABHCD001</td>
							<td class="txtCenter">0000/00/00 <br>完全納品</td>
							<td>□□□□□□□□<br>○○○○○○○</td>
							<td class="txtCenter">000-0000</td>
							<td>0,000,000<br><input type="text" class="w40 txtRight" name="taxRate" placeholder="8">%</td>
							<td class="txtRight">000</td>
							<td>
								<input type="text" name="oederNumber" class="w53 txtRight" placeholder="000">
							</td>
							<td class="txtCenter">式</td>
							<td class="txtRight">0,000,000</td>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order04" class="checkOrder" id="order04">
									<label for="order04"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td class="txtCenter">0000/00/00 <br>小林太郎</td>
							<td><a href="/koji_search/index02_025.php" class="blue">000A00-00</a></td>
							<td><a href="#" class="blue">000A00-00-01</a></td>
							<td>ABHCD001</td>
							<td class="txtCenter">0000/00/00 <br>完全納品</td>
							<td>□□□□□□□□<br>○○○○○○○</td>
							<td class="txtCenter">000-0000</td>
							<td>0,000,000<br><input type="text" class="w40 txtRight" name="taxRate" placeholder="8">%</td>
							<td class="txtRight">000</td>
							<td>
								<input type="text" name="oederNumber" class="w53 txtRight" placeholder="000">
							</td>
							<td class="txtCenter">式</td>
							<td class="txtRight">0,000,000</td>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order05" class="checkOrder" id="order05">
									<label for="order05"></label>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="clearfix">
					<div class="boxLeft">
						<table class="tableA">
							<tr>
								<th>税抜 累計金額</th>
								<td>
									<input type="text" class="w125" name="taxoffPrice2" placeholder="※AUTO">
								</td>
								<th>税込 累計金額</th>
								<td>
									<input type="text" class="w125" name="taxInPrice2" placeholder="※AUTO">
								</td>
							</tr>
						</table>
					</div>
					<div class="boxRight w294 txtRight">
						<p class="textAnchor buildReport"><a href="soi-kakunin.php">チェックした材料の相違確認依頼書を発行</a></p>
						<p class="textAnchor buildReport"><a href="#">チェックした材料を該当する処理数量で更新処理</a></p>
					</div>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>