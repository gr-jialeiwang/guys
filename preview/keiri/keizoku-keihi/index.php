<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>継続経費 一覧：Guy's System</title>
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
							<li><a href="../../keiri/nyushukkin/index.php">入出金一覧</a></li>
							<li class="currentLink rightEnd"><a href="index.php">自社経費登録</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>自社経費登録</h2>
						</div>
						<div class="boxRight">
							<a href="../keizoku-keihi/edit.php" class="buttonA">月次継続経費 新規登録</a>
						</div>
					</div>
				</div>
			</section>
			<div class="container noTtl">
				<div class="pt20 clearfix">
					<div class="boxLeft">
						<div class="headingB">
							<h3>月次継続経費</h3>
						</div>
					</div>
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
				<div class="tableStripe">
					<table class="tableB">
						<thead>
							<tr>
								<th class="w75">登録日</th>
								<th class="w70">登録者</th>
								<th class="w70">最終更新者</th>
								<th class="w175">支払先</th>
								<th class="w100">支払金額</th>
								<th class="w70">出金科目</th>
								<th class="w75">支払日</th>
								<th class="w66">ステータス</th>
								<th>備考</th>
								<th class="w53">編集</th>
								<th class="w25">削除</th>
							</tr>
						</thead>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w75 txtCenter">0000/00/00</td>
								<td class="w70 txtCenter">小林太郎</td>
								<td class="w70 txtCenter">佐藤花子</td>
								<td class="w175">□□□□□□□□□□□</td>
								<td class="w100 txtRight">0,000,000</td>
								<td class="w70 txtCenter">普通預金</td>
								<td class="w75 txtCenter">0000/00/00</td>
								<td class="w66 txtCenter">継続</td>
								<td></td>
								<td class="w53 txtCenter">
									<a href="../keizoku-keihi/edit.php" class="buttonA">編集</a>
								</td>
								<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w75 txtCenter">0000/00/00</td>
								<td class="w70 txtCenter">小林太郎</td>
								<td class="w70 txtCenter">佐藤花子</td>
								<td class="w175">□□□□□□□□□□□</td>
								<td class="w100 txtRight">0,000,000</td>
								<td class="w70 txtCenter">普通預金</td>
								<td class="w75 txtCenter">0000/00/00</td>
								<td class="w66 txtCenter">継続</td>
								<td></td>
								<td class="w53 txtCenter">
									<a href="../keizoku-keihi/edit.php" class="buttonA">編集</a>
								</td>
								<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w75 txtCenter">0000/00/00</td>
								<td class="w70 txtCenter">小林太郎</td>
								<td class="w70 txtCenter">佐藤花子</td>
								<td class="w175">□□□□□□□□□□□</td>
								<td class="w100 txtRight">0,000,000</td>
								<td class="w70 txtCenter">普通預金</td>
								<td class="w75 txtCenter">0000/00/00</td>
								<td class="w66 txtCenter">継続</td>
								<td></td>
								<td class="w53 txtCenter">
									<a href="../keizoku-keihi/edit.php" class="buttonA">編集</a>
								</td>
								<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w75 txtCenter">0000/00/00</td>
								<td class="w70 txtCenter">小林太郎</td>
								<td class="w70 txtCenter">佐藤花子</td>
								<td class="w175">□□□□□□□□□□□</td>
								<td class="w100 txtRight">0,000,000</td>
								<td class="w70 txtCenter">普通預金</td>
								<td class="w75 txtCenter">0000/00/00</td>
								<td class="w66 txtCenter">継続</td>
								<td></td>
								<td class="w53 txtCenter">
									<a href="../keizoku-keihi/edit.php" class="buttonA">編集</a>
								</td>
								<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w75 txtCenter">0000/00/00</td>
								<td class="w70 txtCenter">小林太郎</td>
								<td class="w70 txtCenter">佐藤花子</td>
								<td class="w175">□□□□□□□□□□□</td>
								<td class="w100 txtRight">0,000,000</td>
								<td class="w70 txtCenter">普通預金</td>
								<td class="w75 txtCenter">0000/00/00</td>
								<td class="w66 txtCenter">継続</td>
								<td></td>
								<td class="w53 txtCenter">
									<a href="../keizoku-keihi/edit.php" class="buttonA">編集</a>
								</td>
								<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
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