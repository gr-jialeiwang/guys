<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>販売系 経理情報：Guy's System</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/page.css">
<link rel="stylesheet" href="css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://jpostal.googlecode.com/svn/trunk/jquery.jpostal.js"></script>
<script src="js/function.js"></script>
<script>
	$(function() {
		$('#postcodeFirstHalf').jpostal({
				postcode : [
						'#postcodeFirstHalf',
						'#postcodeLastHalf'
				],
				address : {
						'#address'  : '%3%4%5'
				}
		});
	});
</script>
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
					<li><a href="staff/index.php">社員一覧/登録・編集</a></li>
					<li><a href="company/index.php">企業一覧/登録・編集</a></li>
					<li class="current">取引先ページ新規作成規登録</li>
					<li><a href="master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<div style="padding:200px;text-align:center;">
			under construction
		</div>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>