<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>売上金額 集計：Guy's System</title>
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
							<h2>集計／売上金額集計</h2>
						</div>
					</div>
					<table class="tableA noTtl">
						<tbody>
							<tr>
								<th class="w87">税抜合計金額</th>
								<td class="txtRight">00,000,000</td>
								<th class="w51">消費税</th>
								<td class="txtRight">0,000,000</td>
								<th class="w87">税込合計金額</th>
								<td class="txtRight">00,000,000</td>
								<td class="bdl txtCenter">
									<button class="buttonA">以下で再集計する</button>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="searchFocusArea pt10">
						<table class="tableA3">
							<tr>
								<th class="pr0">集計期間</th>
								<td colspan="5">
									<div class="clearfix">
										<div class="boxLeft">
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
													<select name="dayEnd" class="w72">
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
									<select name="totalSales" class="w218">
										<option>選択</option>
									</select>
								</td>
								<th class="pr0">工事カテゴリー</th>
								<td class="w218">
									<select name="constructionCategory" class="w218">
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
									<select name="constructionStates" class="w218">
										<option value="選択しない">選択しない</option>
										<option value=""></option>
										<option value=""></option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="pr0">取引先選択</th>
								<td>
									<select name="client" class="w100p">
										<option value="選択しない">選択しない</option>
									</select>
								</td>
								<th class="pr0">ガイズ担当者</th>
								<td>
									<select name="representative" class="w100p">
										<option value="選択しない">選択しない</option>
										<option value=""></option>
										<option value=""></option>
									</select>
								</td>
								<th class="pr0">受注区分</th>
								<td>
									<select name="receivedOrderCategory" class="w100p">
										<option value="選択しない">選択しない</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</section>
			<div class="container noTtl">
				<div class="clearfix">
					<div class="boxLeft">
						<div class="headingB m0">
							<h3>［集計詳細］</h3>
						</div>
					</div>
					<div class="boxRight">
						<button class="buttonA">CSV出力</button>
					</div>
				</div>
				<div class="tableStripe2">
					<table class="tableB">
						<thead>
							<tr>
								<th class="w75">依頼日<br>受注日</th>
								<th class="w80">請求日<br>工事完了日</th>
								<th class="w63">受注区分<br>工事番号</th>
								<th class="w125">工事カテゴリー<br>工事ステータス</th>
								<th>工務店<br>ガイズ担当</th>
								<th class="w210">現場名<br>工事名</th>
								<th class="w87">請負（売上）額<br>消費税</th>
								<th class="w87">税込<br>請負（売上）額</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>0000/00/00<br>0000/00/00</td>
								<td>0000/00/00<br>0000/00/00</td>
								<td class="txtCenter">元請け<br><a href="../koji_search/index02_025.php" class="blue">00000-00</a></td>
								<td class="txtCenter">サイディング<br>工事完了／請求OK</td>
								<td>○○○○○不動産<br>山下 太郎</td>
								<td>□□□□□様邸<br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000<br>000,000</td>
								<td class="txtRight">00,000,000</td>
							</tr>
							<tr>
								<td>0000/00/00<br>0000/00/00</td>
								<td>0000/00/00<br>0000/00/00</td>
								<td class="txtCenter">元請け<br><a href="../koji_search/index02_025.php" class="blue">00000-00</a></td>
								<td class="txtCenter">サイディング<br>工事完了／請求OK</td>
								<td>○○○○○不動産<br>山下 太郎</td>
								<td>□□□□□様邸<br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000<br>000,000</td>
								<td class="txtRight">00,000,000</td>
							</tr>
							<tr>
								<td>0000/00/00<br>0000/00/00</td>
								<td>0000/00/00<br>0000/00/00</td>
								<td class="txtCenter">元請け<br><a href="../koji_search/index02_025.php" class="blue">00000-00</a></td>
								<td class="txtCenter">サイディング<br>工事完了／請求OK</td>
								<td>○○○○○不動産<br>山下 太郎</td>
								<td>□□□□□様邸<br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000<br>000,000</td>
								<td class="txtRight">00,000,000</td>
							</tr>
							<tr>
								<td>0000/00/00<br>0000/00/00</td>
								<td>0000/00/00<br>0000/00/00</td>
								<td class="txtCenter">元請け<br><a href="../koji_search/index02_025.php" class="blue">00000-00</a></td>
								<td class="txtCenter">サイディング<br>工事完了／請求OK</td>
								<td>○○○○○不動産<br>山下 太郎</td>
								<td>□□□□□様邸<br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000<br>000,000</td>
								<td class="txtRight">00,000,000</td>
							</tr>
							<tr>
								<td>0000/00/00<br>0000/00/00</td>
								<td>0000/00/00<br>0000/00/00</td>
								<td class="txtCenter">元請け<br><a href="../koji_search/index02_025.php" class="blue">00000-00</a></td>
								<td class="txtCenter">サイディング<br>工事完了／請求OK</td>
								<td>○○○○○不動産<br>山下 太郎</td>
								<td>□□□□□様邸<br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000<br>000,000</td>
								<td class="txtRight">00,000,000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>