<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>申請一覧結果：Guy's System</title>
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
					<li class="current">取引先ページ新規作成</li>
					<li><a href="../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20">
				<div class="container">
					<nav id="subNavTop" class="navKoji">
						<ul>
							<li class="leftEnd"><a href="../../new_koji/index.php">新規工事登録</a></li>
							<li><a href="../../koji_search/index.php">工事情報</a></li>
							<li class="currentLink"><a href="../index.php">労務申請・承認</a></li>
							<li><a href="../../material-hanbai/index.php">材料販売登録</a></li>
							<li><a href="../../zaiko/index.php">在庫一覧/登録</a></li>
							<li class="rightEnd"><a href="../../material-nohinsho/index.php">材料納品書照合</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>労務申請・承認／承認実行</h2>
						</div>
					</div>
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
								<li class="toLastPage"><a href="#">最後へ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w70">申請者</th>
							<th class="w75">作業日</th>
							<th class="w95">工事番号</th>
							<th>工務店<br>現場名</th>
							<th class="w154">作業内容</th>
							<th class="w53">開始時間<br>完了時間</th>
							<th class="w40">時間数</th>
							<th class="w40">交通費</th>
							<th class="w70">承認管理者</th>
							<th class="w60">プレビュー</th>
							<th class="w25">承認選択</th>
						</tr>
					</thead>
				</table>
				<ul class="sortable">
					<li id="1">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w70 txtCenter">山本太郎</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w95 txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000B000-00</a></td>
									<td>○○○不動産<br>□□□□様邸</td>
									<td class="w154">□□□□□□□□</td>
									<td class="w53 txtCenter">00:00<br>00:00</td>
									<td class="w40 txtCenter">00:00</td>
									<td class="w40 txtCenter">0,000</td>
									<td class="w70 txtCenter">佐藤一郎</td>
									<td class="w60 txtCenter">
									<p class="iconLink"><a href="../shinsei/index.php"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p>
									</td>
									<td class="w25 txtCenter">
										<div class="checkBox">
											<input type="checkbox" name="order01" class="checkOrder" id="order01">
											<label for="order01"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="2">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w70 txtCenter">山本太郎</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w95 txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000B000-00</a></td>
									<td>○○○不動産<br>□□□□様邸</td>
									<td class="w154">□□□□□□□□</td>
									<td class="w53 txtCenter">00:00<br>00:00</td>
									<td class="w40 txtCenter">00:00</td>
									<td class="w40 txtCenter">0,000</td>
									<td class="w70 txtCenter">佐藤一郎</td>
									<td class="w60 txtCenter">
									<p class="iconLink"><a href="../shinsei/index.php"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p>
									</td>
									<td class="w25 txtCenter">
										<div class="checkBox">
											<input type="checkbox" name="order02" class="checkOrder" id="order02">
											<label for="order02"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="3">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w70 txtCenter">山本太郎</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w95 txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000B000-00</a></td>
									<td>○○○不動産<br>□□□□様邸</td>
									<td class="w154">□□□□□□□□</td>
									<td class="w53 txtCenter">00:00<br>00:00</td>
									<td class="w40 txtCenter">00:00</td>
									<td class="w40 txtCenter">0,000</td>
									<td class="w70 txtCenter">佐藤一郎</td>
									<td class="w60 txtCenter">
									<p class="iconLink"><a href="../shinsei/index.php"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p>
									</td>
									<td class="w25 txtCenter">
										<div class="checkBox">
											<input type="checkbox" name="order03" class="checkOrder" id="order03">
											<label for="order03"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="4">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w70 txtCenter">山本太郎</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w95 txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000B000-00</a></td>
									<td>○○○不動産<br>□□□□様邸</td>
									<td class="w154">□□□□□□□□</td>
									<td class="w53 txtCenter">00:00<br>00:00</td>
									<td class="w40 txtCenter">00:00</td>
									<td class="w40 txtCenter">0,000</td>
									<td class="w70 txtCenter">佐藤一郎</td>
									<td class="w60 txtCenter">
									<p class="iconLink"><a href="../shinsei/index.php"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p>
									</td>
									<td class="w25 txtCenter">
										<div class="checkBox">
											<input type="checkbox" name="order04" class="checkOrder" id="order04">
											<label for="order04"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="5">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w70 txtCenter">山本太郎</td>
									<td class="w75 txtCenter">0000/00/00</td>
									<td class="w95 txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000B000-00</a></td>
									<td>○○○不動産<br>□□□□様邸</td>
									<td class="w154">□□□□□□□□</td>
									<td class="w53 txtCenter">00:00<br>00:00</td>
									<td class="w40 txtCenter">00:00</td>
									<td class="w40 txtCenter">0,000</td>
									<td class="w70 txtCenter">佐藤一郎</td>
									<td class="w60 txtCenter">
									<p class="iconLink"><a href="../shinsei/index.php"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p>
									</td>
									<td class="w25 txtCenter">
										<div class="checkBox">
											<input type="checkbox" name="order05" class="checkOrder" id="order05">
											<label for="order05"></label>
										</div>
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
								<li class="toLastPage"><a href="#">最後へ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="txtCenter pt30"><button class="buttonA">チェックしたものを承認する</button></div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>