]<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>仕掛金表示：Guy's System</title>
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
		<form action="monitor.php" method="POST">
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
							<li class="currentLink"><a href="index.php">仕掛金一覧</a></li>
							<li><a href="../../keiri/nyushukkin/index.php">入出金一覧</a></li>
							<li class="rightEnd"><a href="../../keiri/jisha-keihi/index.php">自社経費登録</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>仕掛金（未成工事支出金）一覧</h2>
						</div>
					</div>
					<div class="clearfix">
						<div class="boxLeft mr15">
							<table class="tableA">
								<tr>
									<th>請負金額 合計</th>
									<td class="w130">00,000,000</td>
								</tr>
								<tr>
									<th>売上金額 合計（A）</th>
									<td>00,000,000</td>
								</tr>
								<tr>
									<th>仕掛金 合計（B）</th>
									<td>00,000,000</td>
								</tr>
								<tr>
									<th>差引き（C）=（A－B）</th>
									<td>0,000,000</td>
								</tr>
								<tr>
									<th>率（G／A）</th>
									<td>0.0%</td>
								</tr>
							</table>
						</div>
						<div class="boxLeft mr15">
							<table class="tableA">
								<tr>
									<th>材料費 合計</th>
									<td class="w130">0,000,000</td>
								</tr>
								<tr>
									<th>外注費 合計</th>
									<td>0,000,000</td>
								</tr>
									<th>労務費 合計</th>
									<td>0,000,000</td>
								<tr>
									<th>諸経費 合計</th>
									<td>0,000,000</td>
								</tr>
							</table>
						</div>
						<div class="boxLeft">
							<table class="tableA">
								<tr>
									<th>対象日時選択</th>
									<td colspan="2">
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="appropriateYear" class="w105">
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
												<select name="appropriateMonth" class="w72">
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
												<select name="appropriateDay" class="w72">
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
											<li>時点</li>
										</ul>
									</td>
								</tr>
								<tr>
									<th>工事カテゴリー選択</th>
									<td colspan="2">
										<select name="constructionCategory" class="w167">
											<option value="すべて">すべて</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>取引先選択</th>
									<td colspan="2">
										<select name="client" class="w167">
											<option value="すべて">すべて</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>現場名表示</th>
									<td colspan="2">
										<select name="constructionSite" class="w167">
											<option value="すべて">すべて</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>集計選択</th>
									<td>
										<select name="total" class="w167">
											<option value="すべて">すべて</option>
										</select>
									</td>
									<td class="bdl">
										<button class="buttonA">再表示する</button>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</section>
			<div class="container noTtl">
				<div class="clearfix">
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
				<div class="tableStripe2">
					<table class="tableB">
						<thead>
							<tr>
								<th class="w80">工事番号 <br>工務店</th>
								<th>現場名 <br>工事名 <br>工事ステータス</th>
								<th class="w80">請負金額 <br>売上金額（a）</th>
								<th class="w80">材料費（b）</th>
								<th class="w80">外注費（c）</th>
								<th class="w80">労務費（d）</th>
								<th class="w80">諸経費（e）</th>
								<th class="w80">小計（f） =（b~e）</th>
								<th class="w105">差引き(ｇ)=（a-f） 率（g/a）</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000A00-00 </a><br><a href="../../client/index.php" class="blue">○○○不動産</a></td>
								<td>□□□□□□様邸 <br>	○○○○○○○サイディング工事 <br>受注済み／着工中</td>
								<td class="txtRight">00,000,000<br>00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000<br>00.0</td>
							</tr>
							<tr>
								<td class="txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000A00-00 </a><br><a href="../../client/index.php" class="blue">○○○不動産</a></td>
								<td>□□□□□□様邸 <br>	○○○○○○○サイディング工事 <br>受注済み／着工中</td>
								<td class="txtRight">00,000,000<br>00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000<br>00.0</td>
							</tr>
							<tr>
								<td class="txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000A00-00 </a><br><a href="../../client/index.php" class="blue">○○○不動産</a></td>
								<td>□□□□□□様邸 <br>	○○○○○○○サイディング工事 <br>受注済み／着工中</td>
								<td class="txtRight">00,000,000<br>00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000<br>00.0</td>
							</tr>
							<tr>
								<td class="txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000A00-00 </a><br><a href="../../client/index.php" class="blue">○○○不動産</a></td>
								<td>□□□□□□様邸 <br>	○○○○○○○サイディング工事 <br>受注済み／着工中</td>
								<td class="txtRight">00,000,000<br>00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000<br>00.0</td>
							</tr>
							<tr>
								<td class="txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000A00-00 </a><br><a href="../../client/index.php" class="blue">○○○不動産</a></td>
								<td>□□□□□□様邸 <br>	○○○○○○○サイディング工事 <br>受注済み／着工中</td>
								<td class="txtRight">00,000,000<br>00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000<br>00.0</td>
							</tr>
								<tr>
								<td class="txtCenter"><a href="../../koji_search/index02_025.php" class="blue">0000A00-00 </a><br><a href="../../client/index.php" class="blue">○○○不動産</a></td>
								<td>□□□□□□様邸 <br>	○○○○○○○サイディング工事 <br>受注済み／着工中</td>
								<td class="txtRight">00,000,000<br>00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000</td>
								<td class="txtRight">00,000,000<br>00.0</td>
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