<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>ホーム：Guy's System</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/page.css">
<link rel="stylesheet" href="css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/function.js"></script>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="container">
				<h1 id="logo"><a href="top.php"><img src="img/common/logo_header.png" height="39" width="166" alt="GUY’S COMPANY Oparation Management System"></a></h1>
				<div class="boxRight">
					<a href="index.php">ログアウト</a>
					<a href="#" id="menuBtn"><img src="img/common/btn_menu.png" alt="メニューボタン"></a>
				</div>
			</div>
			<nav id="gNav">
				<ul>
					<li><a href="top.php">ホーム</a></li>
					<li><a href="keiri/index.php">経理処理Top</a></li>
					<li><a href="in-house_order/index.php">自社発注</a></li>
					<li><a href="preceding_order/index.php">先行発注</a></li>
					<li><a href="hinban/index.php">品番登録・編集</a></li>
					<li><a href="/staff/index.php">社員一覧/登録・編集</a></li>
					<li><a href="company/index.php">企業一覧/登録・編集</a></li>
					<li><a href="client/index.php">取引先ページ新規作成</a></li>
					<li><a href="master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="/staff/index.php" method="post">
			<section class="topSearchArea">
				<dl>
					<dt class="w72">工事検索</dt>
					<dd>
						<input type="text" name="searchConstruction" class="inputType01 w313" placeholder="工事番号（半角英数字）入力">
						<a href="/koji_search/index.php" class="btnSearch">検索</a>
						<p>工事番号以外での工事検索は<a href="#" class="blue">こちら</a></p>
					</dd>
					<dt class="w72">取引先検索</dt>
					<dd><input type="text" name="searchClient" class="inputType01 w313" placeholder="社名／コード入力"><a href="/client_search/index.php" class="btnSearch">検索</a></dd>
				</dl>
				<div class="txtRight"><a href="/total/index.php" class="buttonA lh27">各種集計</a></div>
			</section>
			<div class="topBtnLinks">
				<ul>
					<li><a href="new_koji/index.php">新規工事登録</a></li>
					<li><a href="koji_search/index.php">工事情報</a></li>
					<li><a href="romu-shinsei/index.php">労務申請・承認</a></li>
					<li><a href="material-hanbai/index.php">材料販売登録</a></li>
					<li><a href="zaiko/index.php">在庫一覧/登録</a></li>
					<li><a href="material-nohinsho/index.php">材料納品書照合</a></li>
				</ul>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>