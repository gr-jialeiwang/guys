<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>各種ステータス・マスタ：Guy's System</title>
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
						<h2>各種マスタ編集／各種ステータス マスタ</h2>
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
									<h3>工事ステータス</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w23">1</th>
								<td>新規依頼工事／見積未提出</td>
								<td class="bdl w72">名称編集のみ</td>
							</tr>
							<tr>
								<th>2</th>
								<td>工事着工中</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>3</th>
								<td>工事着工中／一部請求 OK</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>4</th>
								<td>工事完了／請求 OK</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>5</th>
								<td>交渉中／見積提出済み</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>6</th>
								<td>交渉決裂</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>7</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>8</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>9</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>見積／総合ステータス</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w23">1</th>
								<td>未作成／未提出</td>
								<td class="bdl w72">名称編集のみ</td>
							</tr>
							<tr>
								<th>2</th>
								<td>請負金額確定</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>3</th>
								<td>請負金額確定／追加見積承認済</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>4</th>
								<td>工務店提出済／検討待ち</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>5</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>6</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>見積／個別ステータス</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w23">1</th>
								<td>未作成／未提出</td>
								<td class="bdl w72">名称編集のみ</td>
							</tr>
							<tr>
								<th>2</th>
								<td>確定見積</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>3</th>
								<td>工務店提出済／検討待ち</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>4</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>5</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>6</th>
								<td>◎◎◎◎◎◎◎◎</td>
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
									<h3>積算データ成形ステータス</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w23">1</th>
								<td>未着手</td>
								<td class="bdl w72">名称編集のみ</td>
							</tr>
							<tr>
								<th>2</th>
								<td>完了</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>3</th>
								<td>◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>4</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>5</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>6</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>見込原価ステータス</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w23">1</th>
								<td>未着手</td>
								<td class="bdl w72">名称編集のみ</td>
							</tr>
							<tr>
								<th>2</th>
								<td>完了</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>3</th>
								<td>◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>4</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>5</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>6</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>発注情報ステータス</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w23">1</th>
								<td>未着手／未発注</td>
								<td class="bdl w72">名称編集のみ</td>
							</tr>
							<tr>
								<th>2</th>
								<td>随時 発注中</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>3</th>
								<td>発注完了</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>4</th>
								<td>発注完了／追加発注完了</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>5</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>6</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>材料販売ステータス</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w23">1</th>
								<td>新規依頼／見積未提出</td>
								<td class="bdl w72">名称編集のみ</td>
							</tr>
							<tr>
								<th>2</th>
								<td>納品完了／請求 OK</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>3</th>
								<td>発注完了</td>
								<td class="bdl">名称編集のみ</td>
							</tr>
							<tr>
								<th>4</th>
								<td>発注完了／追加発注完了</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>5</th>
								<td>◎◎◎◎◎◎◎◎</td>
								<td class="bdl txtRight">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
							<tr>
								<th>6</th>
								<td>◎◎◎◎◎◎◎◎</td>
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