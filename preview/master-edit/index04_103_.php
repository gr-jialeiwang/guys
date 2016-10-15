<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>原価計算項目 マスタ：Guy's System</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/page.css">
<link rel="stylesheet" href="../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://jpostal.googlecode.com/svn/trunk/jquery.jpostal.js"></script>
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
			<div class="container">
				<div class="pageTitle clearfix">
					<div class="boxLeft mr8">
						<div class="btnBack"><a href="index.php">戻る</a></div>
					</div>
					<div class="boxLeft mr20">
						<h2>各種マスタ編集／原価計算項目 マスタ</h2>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload m0" type="button">登録・更新する</button>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft w470">
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>原価計算項目マスタ</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w100 txtCenter">工事カテゴリー</th>
								<td>
									<select name="constructionCategory1" class="w220">
										<option value="選択しない">選択しない</option>
										<option value="サイディング">サイディング</option>
										<option value="屋根">屋根</option>
										<option value="外構">外構</option>
										<option value="太陽光">太陽光</option>
										<option value="パワーボード">パワーボード</option>
									</select>
								</td>
								<td class="bdl w72">
									<div class="boxRight">
										<a href="#" class="btnIncrease">+</a>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">1-1</th>
								<td>防水紙</td>
								<td class="bdl"></td>
							</tr>
							<tr>
								<th class="txtCenter">1-2</th>
								<td>同縁</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">1-3</th>
								<td>本体</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">1-4</th>
								<td>○○○</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
						</table>
						<table class="tableA">
							<tr>
								<th class="w100 txtCenter">工事カテゴリー</th>
								<td>
									<select name="constructionCategory2" class="w220">
										<option value="選択しない">選択しない</option>
										<option value="サイディング">サイディング</option>
										<option value="屋根">屋根</option>
										<option value="外構">外構</option>
										<option value="太陽光">太陽光</option>
										<option value="パワーボード">パワーボード</option>
									</select>
								</td>
								<td class="bdl w72">
									<div class="boxRight">
										<a href="#" class="btnIncrease">+</a>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">2-1</th>
								<td>○○○○○</td>
								<td class="bdl"></td>
							</tr>
							<tr>
								<th class="txtCenter">2-2</th>
								<td>○○○○○</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">2-3</th>
								<td>○○○○○</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">2-4</th>
								<td>○○○○○</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
						</table>
						<table class="tableA">
							<tr>
								<th class="w100 txtCenter">工事カテゴリー</th>
								<td>
									<select name="constructionCategory3" class="w220">
										<option value="選択しない">選択しない</option>
										<option value="サイディング">サイディング</option>
										<option value="屋根">屋根</option>
										<option value="外構">外構</option>
										<option value="太陽光">太陽光</option>
										<option value="パワーボード">パワーボード</option>
									</select>
								</td>
								<td class="bdl w72">
									<div class="boxRight">
										<a href="#" class="btnIncrease">+</a>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">3-1</th>
								<td>○○○○○</td>
								<td class="bdl"></td>
							</tr>
							<tr>
								<th class="txtCenter">3-2</th>
								<td>○○○○○</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">3-3</th>
								<td>○○○○○</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">3-4</th>
								<td>○○○○○</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload" type="button">登録・更新する</button>
					</div>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>