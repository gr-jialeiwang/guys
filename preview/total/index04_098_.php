<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>材料・工事発注 金額集計：Guy's System</title>
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
							<h2>集計／材料・工事発注・金額集計</h2>
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
							<tbody>
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
															<option value="1年">1年</option>
															<option value="2年">2年</option>
															<option value="3年">3年</option>
															<option value="4年">4年</option>
															<option value="5年">5年</option>
															<option value="6年">6年</option>
															<option value="7年">7年</option>
															<option value="8年">8年</option>
															<option value="9年">9年</option>
															<option value="10年">10年</option>
															<option value="11年">11年</option>
															<option value="12年">12年</option>
															<option value="13年">13年</option>
															<option value="14年">14年</option>
															<option value="15年">15年</option>
															<option value="16年">16年</option>
															<option value="17年">17年</option>
															<option value="18年">18年</option>
															<option value="19年">19年</option>
															<option value="20年">20年</option>
															<option value="21年">21年</option>
															<option value="22年">22年</option>
															<option value="23年">23年</option>
															<option value="24年">24年</option>
															<option value="25年">25年</option>
															<option value="26年">26年</option>
															<option value="27年">27年</option>
															<option value="28年">28年</option>
															<option value="29年">29年</option>
															<option value="30年">30年</option>
															<option value="31年">31年</option>
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
															<option value="1年">1年</option>
															<option value="2年">2年</option>
															<option value="3年">3年</option>
															<option value="4年">4年</option>
															<option value="5年">5年</option>
															<option value="6年">6年</option>
															<option value="7年">7年</option>
															<option value="8年">8年</option>
															<option value="9年">9年</option>
															<option value="10年">10年</option>
															<option value="11年">11年</option>
															<option value="12年">12年</option>
															<option value="13年">13年</option>
															<option value="14年">14年</option>
															<option value="15年">15年</option>
															<option value="16年">16年</option>
															<option value="17年">17年</option>
															<option value="18年">18年</option>
															<option value="19年">19年</option>
															<option value="20年">20年</option>
															<option value="21年">21年</option>
															<option value="22年">22年</option>
															<option value="23年">23年</option>
															<option value="24年">24年</option>
															<option value="25年">25年</option>
															<option value="26年">26年</option>
															<option value="27年">27年</option>
															<option value="28年">28年</option>
															<option value="29年">29年</option>
															<option value="30年">30年</option>
															<option value="31年">31年</option>
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
										<select name="aggregatedPurchase" class="w218">
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
									<th class="pr0 ">ガイズ発注者</th>
									<td>
										<select name="guysOrderer" class="w218">
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
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
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
								<th class="w75">依頼日<br>受注日<br>請求受領日</th>
								<th class="w125">取引先 <br>ガイズ発注者</th>
								<th class="w125">工事番号 <br>工事ステータス</th>
								<th>工務店 <br>ガイズ担当者</th>
								<th class="w210">工事カテゴリー <br>現場名 <br>工事名</th>
								<th class="w90">発注・仕入額 <br>消費税</th>
								<th class="w87">税込 <br>発注・仕入額</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>0000/00/00<br>0000/00/00<br>0000/00/00</td>
								<td>○○○○商事 <br>佐藤花子</td>
								<td class="txtCenter"><a href="../koji_search/index02_025.php" class="blue">000Ｅ00-00</a><br>工事完了／請求OK</td>
								<td>○○○○○不動産 <br>山下 太郎</td>
								<td>サイディング □□□□□様邸 <br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000 <br>000,000</td>
								<td class="txtRight">00,000,000</td>
							</tr>
							<tr>
								<td>0000/00/00<br>0000/00/00<br>0000/00/00</td>
								<td>○○○○商事 <br>佐藤花子</td>
								<td class="txtCenter"><a href="../koji_search/index02_025.php" class="blue">000Ｅ00-00</a><br>工事完了／請求OK</td>
								<td>○○○○○不動産 <br>山下 太郎</td>
								<td>サイディング □□□□□様邸 <br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000 <br>000,000</td>
								<td class="txtRight">00,000,000</td>
							</tr>
							<tr>
								<td>0000/00/00<br>0000/00/00<br>0000/00/00</td>
								<td>○○○○商事 <br>佐藤花子</td>
								<td class="txtCenter"><a href="../koji_search/index02_025.php" class="blue">000Ｅ00-00</a><br>工事完了／請求OK</td>
								<td>○○○○○不動産 <br>山下 太郎</td>
								<td>サイディング □□□□□様邸 <br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000 <br>000,000</td>
								<td class="txtRight">00,000,000</td>
							</tr>
							<tr>
								<td>0000/00/00<br>0000/00/00<br>0000/00/00</td>
								<td>○○○○商事 <br>佐藤花子</td>
								<td class="txtCenter"><a href="../koji_search/index02_025.php" class="blue">000Ｅ00-00</a><br>工事完了／請求OK</td>
								<td>○○○○○不動産 <br>山下 太郎</td>
								<td>サイディング □□□□□様邸 <br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000 <br>000,000</td>
								<td class="txtRight">00,000,000</td>
							</tr>
							<tr>
								<td>0000/00/00<br>0000/00/00<br>0000/00/00</td>
								<td>○○○○商事 <br>佐藤花子</td>
								<td class="txtCenter"><a href="../koji_search/index02_025.php" class="blue">000Ｅ00-00</a><br>工事完了／請求OK</td>
								<td>○○○○○不動産 <br>山下 太郎</td>
								<td>サイディング □□□□□様邸 <br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000 <br>000,000</td>
								<td class="txtRight">00,000,000</td>
							</tr>
							<tr>
								<td>0000/00/00<br>0000/00/00<br>0000/00/00</td>
								<td>○○○○商事 <br>佐藤花子</td>
								<td class="txtCenter"><a href="../koji_search/index02_025.php" class="blue">000Ｅ00-00</a><br>工事完了／請求OK</td>
								<td>○○○○○不動産 <br>山下 太郎</td>
								<td>サイディング □□□□□様邸 <br>★☆★☆★☆★☆★☆★工事</td>
								<td class="txtRight">00,000,000 <br>000,000</td>
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