<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>労務申請：Guy's System</title>
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
							<h2>労務申請・承認／申請一覧</h2>
						</div>
					</div>
					<div class="headingB mb10">
						<h3>表示選択／絞込</h3>
					</div>
				</div>
				<div class="container">
					<div class="clearfix">
						<div class="boxLeft w770">
							<table class="tableA">
								<tr>
									<th class="w63">承認状況</th>
									<td>
										<select name="acceptRequest" class="w105">
											<option value="すべて">すべて</option>
											<option value="承認済みのみ">承認済みのみ</option>
											<option value="承認待ちのみ">承認待ちのみ</option>
										</select>
									</td>
								</tr>
							</table>
							<table class="tableA">
								<tr class="bdt">
									<th class="w63">作業日</th>
									<td>
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="yearStart" class="w105">
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
												<select name="monthStart" class="w72">
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
												<select name="dayStart" class="w72">
													<option>日選択</option>
													<option value="1日">1日</option>
													<option value="2日">2日</option>
													<option value="3日">3日</option>
													<option value="4日">4日</option>
													<option value="5日">5日</option>
													<option value="6日">6日</option>
													<option value="7日">7日</option>
													<option value="8日">8日</option>
													<option value="9日">9日</option>
													<option value="10日">10日</option>
													<option value="11日">11日</option>
													<option value="12日">12日</option>
													<option value="13日">13日</option>
													<option value="14日">14日</option>
													<option value="15日">15日</option>
													<option value="16日">16日</option>
													<option value="17日">17日</option>
													<option value="18日">18日</option>
													<option value="19日">19日</option>
													<option value="20日">20日</option>
													<option value="21日">21日</option>
													<option value="22日">22日</option>
													<option value="23日">23日</option>
													<option value="24日">24日</option>
													<option value="25日">25日</option>
													<option value="26日">26日</option>
													<option value="27日">27日</option>
													<option value="28日">28日</option>
													<option value="29日">29日</option>
													<option value="30日">30日</option>
													<option value="31日">31日</option>
												</select>
											</li>
											<li class="divider">〜</li>
											<li>
												<select name="yearEnd" class="w105">
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
												<select name="monthEnd" class="w72">
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
												<select name="dayEnd" class="w72 mr0">
													<option>日選択</option>
													<option value="1日">1日</option>
													<option value="2日">2日</option>
													<option value="3日">3日</option>
													<option value="4日">4日</option>
													<option value="5日">5日</option>
													<option value="6日">6日</option>
													<option value="7日">7日</option>
													<option value="8日">8日</option>
													<option value="9日">9日</option>
													<option value="10日">10日</option>
													<option value="11日">11日</option>
													<option value="12日">12日</option>
													<option value="13日">13日</option>
													<option value="14日">14日</option>
													<option value="15日">15日</option>
													<option value="16日">16日</option>
													<option value="17日">17日</option>
													<option value="18日">18日</option>
													<option value="19日">19日</option>
													<option value="20日">20日</option>
													<option value="21日">21日</option>
													<option value="22日">22日</option>
													<option value="23日">23日</option>
													<option value="24日">24日</option>
													<option value="25日">25日</option>
													<option value="26日">26日</option>
													<option value="27日">27日</option>
													<option value="28日">28日</option>
													<option value="29日">29日</option>
													<option value="30日">30日</option>
													<option value="31日">31日</option>
												</select>
											</li>
										</ul>
									</td>
									<td class="w124 bdl txtCenter">
										<a href="result.php" class="buttonA">表示</a>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</section>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>