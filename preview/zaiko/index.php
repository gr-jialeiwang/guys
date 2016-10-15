<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>在庫一覧／登録 在庫一覧：Guy's System</title>
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
							<a href="edit.php" class="buttonA">在庫 新規登録</a>
						</div>
					</div>
					<table class="tableA w663">
						<tr>
							<th class="w87">在庫金額累計</th>
							<td class="txtRight">00,000,000</td>
							<th class="w100">品名・品番検索</th>
							<td class="w175" ><input type="text" class="w175" name="productNumber"></td>
							<td class="bdl txtCenter">
								<button class="buttonA">検索</button>
							</td>
						</tr>
					</table>
				</div>
			</section>
			<div class="container">
				<div class="headingB clearfix">
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
								<li class="toLastPage"><a href="edit.php">最後へ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w75">登録日</th>
							<th class="w75">更新日</th>
							<th class="w196">品名</th>
							<th>仕様・規格・摘要</th>
							<th class="w124">品番</th>
							<th class="w53">在庫数<br>単位</th>
							<th class="w70">単価</th>
							<th class="w70">在庫金額</th>
							<th class="w53">編集</th>
						</tr>
					</thead>
				</table>
				<ul class="sortable">
					<li id="1">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w196">○○○○○○○○○○</td>
									<td>□□□□□□□□□</td>
									<td class="w124 txtCenter">000ABC0000</td>
									<td class="w53 txtCenter">000<br>個</td>
									<td class="w70 txtRight">00,000</td>
									<td class="w70 txtRight">000,000</td>
									<td class="w53 txtCenter">
										<a href="edit.php" class="buttonA">編集</a>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="2">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w196">○○○○○○○○○○</td>
									<td>□□□□□□□□□</td>
									<td class="w124 txtCenter">000ABC0000</td>
									<td class="w53 txtCenter">000<br>個</td>
									<td class="w70 txtRight">00,000</td>
									<td class="w70 txtRight">000,000</td>
									<td class="w53 txtCenter">
										<a href="edit.php" class="buttonA">編集</a>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="3">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w196">○○○○○○○○○○</td>
									<td>□□□□□□□□□</td>
									<td class="w124 txtCenter">000ABC0000</td>
									<td class="w53 txtCenter">000<br>個</td>
									<td class="w70 txtRight">00,000</td>
									<td class="w70 txtRight">000,000</td>
									<td class="w53 txtCenter">
										<a href="edit.php" class="buttonA">編集</a>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="4">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w196">○○○○○○○○○○</td>
									<td>□□□□□□□□□</td>
									<td class="w124 txtCenter">000ABC0000</td>
									<td class="w53 txtCenter">000<br>個</td>
									<td class="w70 txtRight">00,000</td>
									<td class="w70 txtRight">000,000</td>
									<td class="w53 txtCenter">
										<a href="edit.php" class="buttonA">編集</a>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="5">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w196">○○○○○○○○○○</td>
									<td>□□□□□□□□□</td>
									<td class="w124 txtCenter">000ABC0000</td>
									<td class="w53 txtCenter">000<br>個</td>
									<td class="w70 txtRight">00,000</td>
									<td class="w70 txtRight">000,000</td>
									<td class="w53 txtCenter">
										<a href="edit.php" class="buttonA">編集</a>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="6">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w196">○○○○○○○○○○</td>
									<td>□□□□□□□□□</td>
									<td class="w124 txtCenter">000ABC0000</td>
									<td class="w53 txtCenter">000<br>個</td>
									<td class="w70 txtRight">00,000</td>
									<td class="w70 txtRight">000,000</td>
									<td class="w53 txtCenter">
										<a href="edit.php" class="buttonA">編集</a>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
				</ul>
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
								<li class="toLastPage"><a href="edit.php">最後へ</a></li>
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