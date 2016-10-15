<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>売掛情報表示：Guy's System</title>
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
					<li><a href="../../client/index.php">取引先ページ新規作成</a></li>
					<li><a href="../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20">
				<div class="container">
					<nav id="subNavTop">
						<ul>
							<li class="leftEnd"><a href="../../keiri/seikyusho/index.php">請求書発行</a></li>
							<li><a href="../../keiri/nyukin-shori/index.php">入金処理</a></li>
							<li><a href="../../keiri/nyukin-yotei/index.php">入金予定表</a></li>
							<li class="currentLink"><a href="index.php">売掛情報</a></li>
							<li><a href="../../keiri/uke-seikyu/index.php">受請求書処理</a></li>
							<li><a href="../../keiri/shiharai-shori/index.php">支払処理</a></li>
							<li><a href="../../keiri/shiharai-yotei/index.php">支払予定表</a></li>
							<li><a href="../../keiri/kaikake/index.php">買掛情報</a></li>
							<li><a href="../../keiri/shikakekin/index.php">仕掛金一覧</a></li>
							<li><a href="../../keiri/nyushukkin/index.php">入出金一覧</a></li>
							<li class="rightEnd"><a href="../../keiri/jisha-keihi/index.php">自社経費登録</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>売掛情報</h2>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w40">対象</th>
							<td class="w167">0000年00月度</td>
							<th class="w63">表示方法</th>
							<td>請求ベース</td>
						</tr>
					</table>
					<table class="tableA">
						<tr>
							<th class="w130">前月末 累計繰越残高</th>
							<td class="txtRight">00,000,000</td>
							<th class="w111">当月累計借方金額</th>
							<td class="w110 txtRight">00,000,000</td>
							<th class="w111">当月累計貸方金額</th>
							<td class="w120 txtRight">00,000,000</td>
							<th class="w111">当月累計繰越金額</th>
							<td class="w120 txtRight">00,000,000</td>
						</tr>
					</table>
				</div>
			</section>
			<div class="container noTtl">
				<div class="clearfix">
					<div class="boxRight">
						<div class="pagination">
							<p class="resultStates">000件中1〜30件</p>
							<ul>
								<li class="toFirstPage"><a href="#">最初へ</a></li>
								<li><a href="#">&lt;&lt;</a></li>
								<li class="current">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&gt;&gt;</a></li>
								<li class="toLastPage"><a href="#">最後へ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w150">企業名</th>
							<th class="w120">事業所名</th>
							<th class="w130">前月末繰越残高</th>
							<th class="w130">借方金額</th>
							<th class="w130">貸方金額</th>
							<th class="w130">繰越金額残高</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>○○○不動産</td>
							<td>○○○営業所</td>
							<td class="txtRight">00,000,000</td>
							<td class="txtRight">00,000,000</td>
							<td class="txtRight">00,000,000</td>
							<td class="txtRight">00,000,000</td>
							<td class="txtCenter"><a href="../../client/urikake/urikake-joho.php" class="blue">売掛金情報を見る</a></td>
						</tr>
						<tr>
							<td>○✕△不動産</td>
							<td></td>
							<td class="txtRight">00,000,000</td>
							<td class="txtRight">00,000,000</td>
							<td class="txtRight">00,000,000</td>
							<td class="txtRight">00,000,000</td>
							<td class="txtCenter"><a href="../../client/urikake/urikake-joho.php" class="blue">売掛金情報を見る</a></td>
						</tr>
						<tr>
							<td>□□□□□□商事</td>
							<td></td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtCenter"><a href="../../client/urikake/urikake-joho.php" class="blue">売掛金情報を見る</a></td>
						</tr>
						<tr>
							<td>□□□□工務店</td>
							<td></td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtCenter"><a href="../../client/urikake/urikake-joho.php" class="blue">売掛金情報を見る</a></td>
						</tr>
						<tr>
							<td>□□□□工務店</td>
							<td></td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtCenter"><a href="../../client/urikake/urikake-joho.php" class="blue">売掛金情報を見る</a></td>
						</tr>
						<tr>
							<td>□□□□工務店</td>
							<td></td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtRight">00,000</td>
							<td class="txtCenter"><a href="../../client/urikake/urikake-joho.php" class="blue">売掛金情報を見る</a></td>
						</tr>
					</tbody>
				</table>
				<div class="clearfix pt10">
					<div class="boxRight">
						<div class="pagination">
							<p class="resultStates">000件中1〜30件</p>
							<ul>
								<li class="toFirstPage"><a href="#">最初へ</a></li>
								<li><a href="#">&lt;&lt;</a></li>
								<li class="current">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&gt;&gt;</a></li>
								<li class="toLastPage"><a href="#">最後へ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>