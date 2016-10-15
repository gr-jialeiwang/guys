<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>入出金一覧：Guy's System</title>
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
							<li><a href="../../keiri/urikake/index.php">売掛情報</a></li>
							<li><a href="../../keiri/uke-seikyu/index.php">受請求書処理</a></li>
							<li><a href="../../keiri/shiharai-shori/index.php">支払処理</a></li>
							<li><a href="../../keiri/shiharai-yotei/index.php">支払予定表</a></li>
							<li><a href="../../keiri/kaikake/index.php">買掛情報</a></li>
							<li><a href="../../keiri/shikakekin/index.php">仕掛金一覧</a></li>
							<li class="currentLink"><a href="index.php">入出金一覧</a></li>
							<li class="rightEnd"><a href="../../keiri/jisha-keihi/index.php">自社経費登録</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>入出金一覧</h2>
						</div>
					</div>
					<table class="tableA">
						<tbody>
							<tr>
								<th class="w63">対象期間</th>
								<td class="w211">0000年00月00日〜0000年00月00日</td>
								<th class="w75">入金額合計</th>
								<td class="w135 txtRight">00,000,000</td>
								<th class="w75">支払額合計</th>
								<td class="txtRight">00,000,000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<div class="container noTtl">
				<table class="tableA w332">
					<tr>
						<th class="w75">入出金科目</th>
						<td class="w159">
							<select name="accountTitle" class="w159">
								<option>選択</option>
							</select>
						</td>
						<td class="bdl">
							<button class="buttonA">絞込み</button>
						</td>
					</tr>
				</table>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w75">日付</th>
							<th class="w150">入金元／出金先 企業名</th>
							<th>入金元／出金先 事業所名</th>
							<th class="w70">入出金科目</th>
							<th class="w140">入金額</th>
							<th class="w125">支払額</th>
							<th class="w87">入出金 処理者</th>
						</tr>
					</thead>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w75 txtCenter">0000/00/00</td>
							<td class="w150">○○○○工務店</td>
							<td></td>
							<td class="w70 txtCenter">普通預金</td>
							<td class="w140 txtRight">0,000,000</td>
							<td class="w125 txtRight"></td>
							<td class="w87 txtCenter">小林太郎</td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w75 txtCenter">0000/00/00</td>
							<td class="w150">○○商店</td>
							<td></td>
							<td class="w70 txtCenter">普通預金</td>
							<td class="w140 txtRight"></td>
							<td class="w125 txtRight">00,000,000</td>
							<td class="w87 txtCenter">佐藤花子</td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w75 txtCenter">0000/00/00</td>
							<td class="w150">○○建設</td>
							<td></td>
							<td class="w70 txtCenter">普通預金</td>
							<td class="w140 txtRight"></td>
							<td class="w125 txtRight">000,000</td>
							<td class="w87 txtCenter">小林太郎</td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>