<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>集計</title>
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
				<div class="pageTitle clearfix">
					<div class="boxLeft mr8">
						<div class="btnBack"><a href="index.php">戻る</a></div>
					</div>
					<div class="boxLeft">
						<h2>集計</h2>
					</div>
				</div>
			</section>
			<div class="container">
				<div class="searchFocusArea">
					<div class="headingB">
						<h3>売上金額集計</h3>
					</div>
					<table class="tableA3">
						<tr>
							<th class="pr0">集計期間</th>
							<td  colspan="5">
								<div class="clearfix">
									<div class="boxLeft">
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="yearStart1" class="w105">
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
												<select name="monthStart1" class="w72">
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
												<select name="dayStart1" class="w72">
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
												<select name="yearEnd1" class="w105">
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
												<select name="monthEnd1" class="w72">
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
												<select name="dayEnd1" class="w72">
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
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="pr0">売上集計ベース</th>
							<td class="w218">
								<select name="totalSales1" class="w218">
									<option>選択</option>
								</select>
							</td>
							<th class="pr0">工事カテゴリー</th>
							<td class="w218">
								<select name="constructionCategory1" class="w218">
									<option value="選択しない">選択しない</option>
									<option value="サイディング">サイディング</option>
									<option value="屋根">屋根</option>
									<option value="外構">外構</option>
									<option value="太陽光">太陽光</option>
									<option value="パワーボード">パワーボード</option>
								</select>
							</td>
							<th class="pr0">工事ステータス</th>
							<td class="w218">
								<select name="constructionStates1" class="w218">
									<option value="選択しない">選択しない</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
						</tr>
						<tr>
							<th class="pr0">取引先選択</th>
							<td>
								<select name="client1" class="w100p">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
							<th class="pr0">ガイズ担当者</th>
							<td>
								<select name="representative1" class="w100p">
									<option value="選択しない">選択しない</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
							<th class="pr0">受注区分</th>
							<td>
								<select name="receivedOrderCategory1" class="w100p">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
						</tr>
					</table>
					<div class="txtRight pt10"><a href="index02_096_.php" class="buttonA">集計する</a></div>
				</div>
				<hr>
				<div class="searchFocusArea">
					<div class="headingB">
						<h3>粗利金額集計</h3>
					</div>
					<table class="tableA3">
						<tr>
							<th class="pr0">集計期間</th>
							<td  colspan="5">
								<div class="clearfix">
									<div class="boxLeft">
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="yearStart2" class="w105">
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
												<select name="monthStart2" class="w72">
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
												<select name="dayStart2" class="w72">
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
												<select name="yearEnd2" class="w105">
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
												<select name="monthEnd2" class="w72">
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
												<select name="dayEnd2" class="w72">
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
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="pr0">売上集計ベース</th>
							<td class="w218">
								<select name="totalSales2" class="w218">
									<option>選択</option>
								</select>
							</td>
							<th class="pr0">工事カテゴリー</th>
							<td class="w218">
								<select name="constructionCategory2" class="w218">
									<option value="選択しない">選択しない</option>
									<option value="サイディング">サイディング</option>
									<option value="屋根">屋根</option>
									<option value="外構">外構</option>
									<option value="太陽光">太陽光</option>
									<option value="パワーボード">パワーボード</option>
								</select>
							</td>
							<th class="pr0">工事ステータス</th>
							<td class="w218">
								<select name="constructionStates2" class="w218">
									<option value="選択しない">選択しない</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
						</tr>
						<tr>
							<th>仕入集計ベース</th>
							<td>
								<select name="aggregatedPurchase2" class="w218">
									<option>選択</option>
								</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th class="pr0">取引先選択</th>
							<td>
								<select name="client2" class="w100p">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
							<th class="pr0">ガイズ担当者</th>
							<td>
								<select name="representative2" class="w100p">
									<option value="選択しない">選択しない</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
							<th class="pr0">受注区分</th>
							<td>
								<select name="receivedOrderCategory2" class="w100p">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
						</tr>
					</table>
					<div class="txtRight pt10"><a href="index03_097_.php" class="buttonA">集計する</a></div>
				</div>
				<hr>
				<div class="searchFocusArea">
					<div class="headingB">
						<h3>材料・工事発注・金額集計</h3>
					</div>
					<table class="tableA3">
						<tr>
							<th class="pr0">集計期間</th>
							<td  colspan="5">
								<div class="clearfix">
									<div class="boxLeft">
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="yearStart3" class="w105">
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
												<select name="monthStart3" class="w72">
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
												<select name="dayStart3" class="w72">
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
												<select name="yearEnd3" class="w105">
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
												<select name="monthEnd3" class="w72">
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
												<select name="dayEnd3" class="w72">
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
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>仕入集計ベース</th>
							<td class="w218">
								<select name="aggregatedPurchase3" class="w218">
									<option>選択</option>
								</select>
							</td>
							<th class="pr0">工事カテゴリー</th>
							<td class="w218">
								<select name="constructionCategory3" class="w218">
									<option value="選択しない">選択しない</option>
									<option value="サイディング">サイディング</option>
									<option value="屋根">屋根</option>
									<option value="外構">外構</option>
									<option value="太陽光">太陽光</option>
									<option value="パワーボード">パワーボード</option>
								</select>
							</td>
							<th class="pr0 ">ガイズ発注者</th>
							<td>
								<select name="guysOrderer3" class="w218">
									<option value="選択しない">選択しない</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
						</tr>
						<tr>
							<th class="pr0">取引先選択</th>
							<td>
								<select name="client3" class="w100p">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
					<div class="txtRight pt10"><a href="index04_098_.php" class="buttonA">集計する</a></div>
				</div>
				<hr>
				<div class="searchFocusArea">
					<div class="headingB">
						<h3>労務集計</h3>
					</div>
					<table class="tableA3">
						<tr>
							<th class="pr0">集計期間</th>
							<td  colspan="5">
								<div class="clearfix">
									<div class="boxLeft">
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="yearStart4" class="w105">
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
												<select name="monthStart4" class="w72">
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
												<select name="dayStart4" class="w72">
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
												<select name="yearEnd4" class="w105">
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
												<select name="monthEnd4" class="w72">
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
												<select name="dayEnd4" class="w72">
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
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>社員職人選択</th>
							<td>
								<select name="staff4" class="w218">
									<option>選択</option>
								</select>
							</td>
							<th class="pr0">工事カテゴリー</th>
							<td class="w218">
								<select name="constructionCategory4" class="w218">
									<option value="選択しない">選択しない</option>
									<option value="サイディング">サイディング</option>
									<option value="屋根">屋根</option>
									<option value="外構">外構</option>
									<option value="太陽光">太陽光</option>
									<option value="パワーボード">パワーボード</option>
								</select>
							</td>
							<th class="pr0">工事ステータス</th>
							<td class="w218">
								<select name="constructionStates4" class="w218">
									<option value="選択しない">選択しない</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
						</tr>
						<tr>
							<th class="pr0">取引先選択</th>
							<td>
								<select name="client4" class="w218">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
							<th>工事番号</th>
							<td><input type="text" class="w216" name="constructionNumber4"></td>
							<td></td>
							<td></td>
						</tr>
					</table>
					<div class="txtRight pt10"><a href="index05_099_.php" class="buttonA">集計する</a></div>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>