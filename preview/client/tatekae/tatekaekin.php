<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>立替金 親身登録／編集：Guy's System</title>
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
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>取引先 会社情報（新規登録／編集）</h2>
						</div>
						<div class="boxRight">
							<p class="textAnchor resetClientData"><a href="#">この取引先を削除する</a></p>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w87">企業名</th>
							<td>
								<select name="company" class="w363">
									<option>選択</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
							<th class="w63">事業所名</th>
							<td colspan="3">
								<ul class="horizontal">
									<li class="mr7">
										<input class="w326" name="office" type="text">
									</li>
									<li>
									<div class="radioBtn">
										<input type="radio" name="office" id="noOffice">
										<label for="noOffice">事業所名なし</label>
									</div>
									</li>
								</ul>
							</td>
						</tr>
					</table>
					<table class="tableA">
						<tr>
							<th class="w87">事業所コード</th>
							<td><input type="text" class="w135" name="officeCode" placeholder="000A00-00"></td>
							<th>取引タイプ</th>
							<td>
								<ul class="horizontal">
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01">工事受注</label>
										</div>
									</li>
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType02" name="sellingMaterials">
											<label for="dealType02">材料販売</label>
										</div>
									</li>
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType03" name="orderMaterials">
											<label for="dealType03">材料発注</label>
										</div>
									</li>
									<li>
										<div class="checkBox">
											<input type="checkbox" id="dealType04" name="orderConstruction">
											<label for="dealType04">工事発注</label>
										</div>
									</li>
								</ul>
							</td>
							<th>検索用テキスト</th>
							<td><input type="text" name="searchBox" class="w216"></td>
						</tr>
					</table>
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload" type="button">登録・更新する</button>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
				<nav id="subNav">
					<ul>
						<li class="leftEnd"><a href="../../koji_search/index02_025.php">基本情報</a></li>
						<li><a href="../../client/hanbai-keiri.php">販売系経理情報</a></li>
						<li><a href="../../client/shiire-keiri.php">仕入系経理情報</a></li>
						<li><a href="../../client/hacchu/index.php">発注書設定</a></li>
						<li><a href="../../client/worker/index.php">作業員情報</a></li>
						<li class="rightEnd currentLink"><a href="index.php">立替金情報</a></li>
						<li class="leftEnd"><a href="../../client/request/index.php">依頼／受注履歴</a></li>
						<li><a href="../../client/seikyusho/index.php">請求書一覧</a></li>
						<li><a href="../../client/urikake/index.php">売掛金情報</a></li>
						<li><a href="../../client/minyukin/index.php">未入金・不足工事一覧</a></li>
						<li><a href="../../client/shiire-rireki/index.php">仕入／発注履歴</a></li>
						<li class="rightEnd"><a href="../../client/kaikake/index.php">買掛金情報</a></li>
					</ul>
				</nav>
				<div class="headingB">
					<h3>立替金登録</h3>
				</div>
				<table class="tableA3">
					<tr>
						<th class="pr0 w70">日付</th>
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
									</ul>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<th class="pr0 w70">立替項目</th>
						<td>
							<select name="cashAdvance" class="w238">
								<option>選択</option>
								<option value=""></option>
								<option value=""></option>
							</select>
						</td>
						<th class="pr0 w60">金額</th>
						<td>
							<input type="text" name="payment" class="w230 mr7">円
						</td>
						<th class="pr0 w70">出金科目</th>
						<td>
							<select name="withdraw" class="w238">
								<option>選択</option>
								<option value=""></option>
								<option value=""></option>
							</select>
						</td>
					</tr>
					<tr>
						<th class="pr0 w70">備考・詳細</th>
						<td colspan="5">
							<input type="text" name="remarkAndDetail" class="w100p">
						</td>
					</tr>
				</table>
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