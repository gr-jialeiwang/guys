<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>新規登録・編集：Guy's System</title>
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
					<li><a href="../staff/index.php">社員一覧/登録・編集</a></li>
					<li><a href="../company/index.php">企業一覧/登録・編集</a></li>
					<li class="current">取引先ページ新規作成</li>
					<li><a href="../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20">
				<div class="container">
					<nav id="subNavTop" class="navKoji">
						<ul>
							<li class="leftEnd"><a href="../new_koji/index.php">新規工事登録</a></li>
							<li><a href="../koji_search/index.php">工事情報</a></li>
							<li><a href="../romu-shinsei/index.php">労務申請・承認</a></li>
							<li><a href="../material-hanbai/index.php">材料販売登録</a></li>
							<li class="currentLink"><a href="index.php">在庫一覧/登録</a></li>
							<li class="rightEnd"><a href="../material-nohinsho/index.php">材料納品書照合</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>在庫一覧／登録</h2>
						</div>
						<div class="boxRight">
							<button class="btnReload m0" type="button">登録・更新する</button>
						</div>
					</div>
					<div class="headingB mb10">
						<h3>在庫 新規登録</h3>
					</div>
				</div>
				<div class="container">
					<table class="tableA">
						<tr>
							<th class="w51">品名</th>
							<td>
								<input type="text" class="w100p" name="productName">
							</td>
							<th class="w111">仕様／規格／摘要</th>
							<td>
								<input type="text" class="w100p" name="productData">
							</td>
							<th class="w40">品番</th>
							<td>
								<input type="text" class="w100p" name="productNumber">
							</td>
						</tr>
					</table>
					<table class="tableA">
						<tr class="bdt">
							<th class="w51">在庫数</th>
							<td class="w111">
								<input type="text" class="w111" name="stockNumber">
							</td>
							<th class="w40">単位</th>
							<td class="w105">
								<select name="unit" class="w105">
									<option>選択</option>
								</select>
							</td>
							<th class="w40">単価</th>
							<td>
								<input type="text" class="w140" name="productNumber">
							</td>
						</tr>
					</table>
					<table class="tableA">
						<tr class="bdt">
							<td class="txtCenter">
								<button class="buttonA">上記で登録（修正）する</button>
							</td>
						</tr>
					</table>
				</div>
			</section>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>