<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>買掛情報：Guy's System</title>
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
							<li class="currentLink"><a href="index.php">買掛情報</a></li>
							<li><a href="../../keiri/shikakekin/index.php">仕掛金一覧</a></li>
							<li><a href="../../keiri/nyushukkin/index.php">入出金一覧</a></li>
							<li class="rightEnd"><a href="../../keiri/jisha-keihi/index.php">自社経費登録</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>買掛情報</h2>
						</div>
					</div>
					<table class="tableA w663">
						<tr>
							<th class="w80">対象月選択</th>
							<td class="w184">
								<ul class="dateSortingArea horizontal">
									<li>
										<select name="kaikakeYear" class="w105">
											<option>年選択</option>
											<option value="2016年">2016年</option>
											<option value="2017年">2017年</option>
											<option value="2018年">2018年</option>
											<option value="2019年">2019年</option>
											<option value="2020年">2020年</option>
											<option value="2021年">2021年</option>
											<option value="2022年">2022年</option>
											<option value="2023年">2023年</option>
											<option value="2024年">2024年</option>
											<option value="2025年">2025年</option>
										</select>
										<select name="kaikakeMonth" class="w72 mr0">
											<option>月選択</option>
											<option value="1月">1月</option>
											<option value="2月">2月</option>
											<option value="3月">3月</option>
											<option value="4月">4月</option>
											<option value="5月">5月</option>
											<option value="6月">6月</option>
											<option value="7月">7月</option>
											<option value="8月">8月</option>
											<option value="9月">9月</option>
											<option value="10月">10月</option>
											<option value="11月">11月</option>
											<option value="12月">12月</option>
										</select>
									</li>
								</ul>
							</td>
							<th class="w63">表示方法</th>
							<td class="w167">
								<select name="kaikakeSelect" class="w167">
									<option value="受請求日ベース">受請求日ベース</option>
									<option value="納品日ベース">納品日ベース</option>
								</select>
							</td>
							<td class="bdl txtCenter">
								<a href="info.php" class="buttonA">表示する</a>
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