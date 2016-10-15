<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>請求系マスタ：Guy's System</title>
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
						<h2>各種マスタ編集／請求系 マスタ</h2>
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
									<h3>請求回数連動／御請求摘要テキスト</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w115">1回 全額請求</th>
								<td>工事完了報酬</td>
								<td class="bdl w72">名称編集のみ</td>
							</tr>
							<tr>
								<th>全2回請求／1回目</th>
								<td>全2分割　1回目御請求分</td>
								<td class="bdl txtRight">名称編集のみ</td>
							</tr>
							<tr>
								<th>全2回請求／2回目</th>
								<td>全2分割　2回目御請求分</td>
								<td class="bdl txtRight">名称編集のみ</td>
							</tr>
							<tr>
								<th>全3回請求／1回目</th>
								<td>全3分割　1回目御請求分</td>
								<td class="bdl txtRight">名称編集のみ</td>
							</tr>
							<tr>
								<th>全3回請求／2回目</th>
								<td>全3分割　2回目御請求分</td>
								<td class="bdl txtRight">名称編集のみ</td>
							</tr>
							<tr>
								<th>全3回請求／3回目</th>
								<td>全3分割　3回目御請求分</td>
								<td class="bdl txtRight">名称編集のみ</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>支払日サイクル</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w23">1</th>
								<td>翌月5日</td>
								<td class="bdl w72"></td>
							</tr>
							<tr>
								<th>2</th>
								<td>翌月10日</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>3</th>
								<td>翌月15日</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>4</th>
								<td>翌月20日</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>5</th>
								<td>翌月25日</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>6</th>
								<td>翌月末</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>7</th>
								<td>○○○</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>8</th>
								<td>○○○</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="boxRight w470">
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>入金科目</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w23">1</th>
								<td>相殺入金</td>
								<td class="bdl w72"></td>
							</tr>
							<tr>
								<th>2</th>
								<td>○○○</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>3</th>
								<td>○○○</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>4</th>
								<td>○○○</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>5</th>
								<td>○○○</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>6</th>
								<td>○○○</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>7</th>
								<td>○○○</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>8</th>
								<td>○○○</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
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