<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>共通系・その他マスタ：Guy's System</title>
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
						<h2>各種マスタ編集／共通系・その他 マスタ</h2>
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
									<h3>工事カテゴリー</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w100 txtCenter">1</th>
								<td>サイディング</td>
								<td class="bdl w72">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">2</th>
								<td>屋根・樋</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">3</th>
								<td>外構</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>工事タイプ</h3>
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
								<td>□□□□□□□□□□□</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">1-2</th>
								<td>□□□□□□□□□□□</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">1-3</th>
								<td>□□□□□□□□□□□</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">1-4</th>
								<td>□□□□□□□□□□□</td>
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
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">2-1</th>
								<td>□□□□□□□□□□□</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
									<div class="boxRight">
										<a href="#" class="btnIncrease mr7 mt3">+</a>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">2-2</th>
								<td>□□□□□□□□□□□</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">2-3</th>
								<td>□□□□□□□□□□□</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">2-4</th>
								<td>□□□□□□□□□□□</td>
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
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">3-1</th>
								<td>□□□□□□□□□□□</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
									<div class="boxRight">
										<a href="#" class="btnIncrease mr7 mt3">+</a>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">3-2</th>
								<td>□□□□□□□□□□□</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">3-3</th>
								<td>□□□□□□□□□□□</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">3-4</th>
								<td>□□□□□□□□□□□</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>消費税率</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="txtCenter w23" rowspan="3">1</th>
								<th class="w48">税率</th>
								<td class="txtCenter">8</td>
								<td class="bdl w72">％</td>
							</tr>
							<tr>
								<th>From</th>
								<td class="txtCenter" colspan="2">ー</td>
							</tr>
							<tr>
								<th>To</th>
								<td colspan="2">
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="yearTo1" class="w105">
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
											<select name="monthTo1" class="w72">
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
											<select name="dayTo1" class="w72">
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
							</tr>
							<tr>
								<th class="txtCenter w23" rowspan="3">2</th>
								<th class="w48">税率</th>
								<td class="txtCenter">10</td>
								<td class="bdl w72">％</td>
							</tr>
							<tr>
								<th>From</th>
								<td class="txtCenter" colspan="2">
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="yearFrom2" class="w105">
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
											<select name="monthFrom2" class="w72">
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
											<select name="dayFrom2" class="w72">
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
							</tr>
							<tr>
								<th>To</th>
								<td colspan="2">
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="yearTo2" class="w105">
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
											<select name="monthTo2" class="w72">
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
											<select name="dayTo2" class="w72">
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
							</tr>
						</table>
					</div>
					<div class="boxRight w470">
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>口座種類</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w100 txtCenter">1</th>
								<td>普通</td>
								<td class="bdl w72"></td>
							</tr>
							<tr>
								<th class="txtCenter">2</th>
								<td>当座</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>メーカー</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w100 txtCenter">1</th>
								<td>ニチハ</td>
								<td class="bdl w72"></td>
							</tr>
							<tr>
								<th class="txtCenter">2</th>
								<td>○○○</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>単位</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w100 txtCenter">1</th>
								<td>式</td>
								<td class="bdl w72"></td>
							</tr>
							<tr>
								<th class="txtCenter">2</th>
								<td>ｍ</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">3</th>
								<td>㎡</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">4</th>
								<td>本</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">5</th>
								<td>枚</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">6</th>
								<td>束</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">7</th>
								<td>缶</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">8</th>
								<td>人</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>工事情報／現場状況車種</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w100 txtCenter">1</th>
								<td>2t 手降ろし</td>
								<td class="bdl w72">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="txtCenter">2</th>
								<td>○○○○</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>立替項目</h3>
								</div>
								<div class="boxLeft">
									<div class="boxRight">
										<a href="#" class="btnIncrease mr7">+</a>
									</div>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w100 txtCenter">1</th>
								<td>前払い金</td>
								<td class="bdl w72"></td>
							</tr>
							<tr>
								<th class="txtCenter">2</th>
								<td>材料立替金</td>
								<td class="bdl">
									<div class="boxRight">
										<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</div>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>労務申請／移動手段</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w100 txtCenter">1</th>
								<td>電車</td>
								<td class="bdl w72"></td>
							</tr>
							<tr>
								<th class="txtCenter">2</th>
								<td>バス</td>
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