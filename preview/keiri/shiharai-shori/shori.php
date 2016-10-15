<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>支払処理：Guy's System</title>
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
							<li class="currentLink"><a href="index.php">支払処理</a></li>
							<li><a href="../../keiri/shiharai-yotei/index.php">支払予定表</a></li>
							<li><a href="../../keiri/kaikake/index.php">買掛情報</a></li>
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
							<h2>支払処理</h2>
						</div>
					</div>
					<table class="tableA w340">
						<tr>
							<th class="w63">支払先</th>
							<td>○○○不動産</td>
						</tr>
					</table>
				</div>
			</section>
			<div class="container noTtl">
				<table class="tableA w663 mb20">
					<tr>
						<th class="w63">支払日</th>
						<td>
							<ul class="dateSortingArea horizontal">
								<li>
									<select name="paidYear" class="w105">
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
									<select name="paidMonth" class="w72">
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
									<select name="paidDay" class="w72">
										<option>日選択</option>
										<option value="1">1日</option>
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
									</日select>
								</li>
							</ul>
						</td>
						<th class="w63">支払合計</th>
						<td colspan="2"><input type="text" class="w200" name="amountPaidSum" placeholder="※AUTO"></td>
					</tr>
					<tr>
						<th class="w63">出金科目</th>
						<td>
							<select name="accountTitle" class="w140">
								<option>選択</option>
							</select>
						</td>
						<th class="w63">支払額</th>
						<td><input class="w200" name="amountPaid" type="text"></td>
						<td class="bdl"><a href="#" class="btnIncrease">+</a></td>
					</tr>
				</table>
				<hr class="mb20">
				<ul class="horizontal mb10">
					<li class="mr7">
						<table class="tableA">
							<tr>
								<th class="w75">掛仕入合計</th>
								<td><input class="w100" name="purchaseAmount" type="text" placeholder="※AUTO"></td>
							</tr>
						</table>
					</li>
					<li class="mr7 pt8">ー</li>
					<li class="mr7">
						<table class="tableA">
							<tr>
								<th class="w100">掛売 相殺合計</th>
								<td><input class="w100" name="creditSaleOffset" type="text" placeholder="※AUTO"></td>
							</tr>
						</table>
					</li>
					<li class="mr7 pt8">ー</li>
					<li class="mr7">
						<table class="tableA">
							<tr>
								<th class="w100">立替金相殺合計</th>
								<td><input class="w100" name="advanceMoneyOffset" type="text" placeholder="※AUTO"></td>
							</tr>
						</table>
					</li>
					<li class="mr7 pt8">ー</li>
					<li class="mr7">
						<table class="tableA">
							<tr>
								<th class="w100">その他相殺合計</th>
								<td><input class="w100" name="amountOffset" type="text" placeholder="※Default AUTO"></td>
							</tr>
						</table>
					</li>
				</ul>
				<ul class="horizontal mb20">
					<li class="mr7">
						<table class="tableA">
							<tr>
								<th class="w75">未払い</th>
								<td><input class="w100" name="unpaid" type="text" placeholder="※AUTO"></td>
							</tr>
						</table>
					</li>
					<li class="mr7 pt8">　</li>
					<li class="mr7">
						<table class="tableA">
							<tr>
								<th class="w100">消費税端数処理</th>
								<td>
									<a href="#" class="btnIncrease mr7">+</a>
									<div class="boxLeft mr7">
										<input class="w40 txtCenter" name="amountPaid" value="0" type="text">
									</div>
									<a href="#" class="btnDecrease">+</a>
								</td>
							</tr>
						</table>
					</li>
				</ul>
				<hr class="mb20">
				<div class="tableStripe2">
					<table class="tableB">
						<thead>
							<tr>
								<th class="w40">選択</th>
								<th>処理日</th>
								<th>処理者</th>
								<th>受請求金額</th>
								<th>掛売相殺合計</th>
								<th>その他 相殺合計</th>
								<th>実支払予定額</th>
								<th>未払い</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order01" class="checkOrder" id="order01">
										<label for="order01"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">小林太郎</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">00,000</td>
								<td class="txtRight">0,000,000</td>
							</tr>
							<tr>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order02" class="checkOrder" id="order02">
										<label for="order02"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">小林太郎</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">00,000</td>
								<td class="txtRight">0,000,000</td>
							</tr>
							<tr>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order03" class="checkOrder" id="order03">
										<label for="order03"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">小林太郎</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">00,000</td>
								<td class="txtRight">0,000,000</td>
							</tr>
							<tr>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order04" class="checkOrder" id="order04">
										<label for="order04"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">小林太郎</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">00,000</td>
								<td class="txtRight">0,000,000</td>
							</tr>
							<tr>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order05" class="checkOrder" id="order05">
										<label for="order05"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00</td>
								<td class="txtCenter">小林太郎</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">0,000,000</td>
								<td class="txtRight">00,000</td>
								<td class="txtRight">0,000,000</td>
							</tr>
						</tbody>
					</table>
					<div class="txtCenter pt30">
						<button class="buttonA">チェックした受請求書を支払処理する</button>
					</div>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>