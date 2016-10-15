<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>入金処理：Guy's System</title>
<link rel="stylesheet" href="../../../css/common.css">
<link rel="stylesheet" href="../../../css/base.css">
<link rel="stylesheet" href="../../../css/page.css">
<link rel="stylesheet" href="../../../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../../../js/function.js"></script>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="container">
				<h1 id="logo"><a href="../../../top.php"><img src="../../../img/common/logo_header.png" height="39" width="166" alt="GUY’S COMPANY Oparation Management System"></a></h1>
				<div class="boxRight">
					<a href="../../../index.php">ログアウト</a>
					<a href="#" id="menuBtn"><img src="../../../img/common/btn_menu.png" alt="メニューボタン"></a>
				</div>
			</div>
			<nav id="gNav">
				<ul>
					<li><a href="../../../top.php">ホーム</a></li>
					<li><a href="../../../keiri/index.php">経理処理Top</a></li>
					<li><a href="../../../in-house_order/index.php">自社発注</a></li>
					<li><a href="../../../preceding_order/index.php">先行発注</a></li>
					<li><a href="../../../hinban/index.php">品番登録・編集</a></li>
					<li><a href="../../../staff/index.php">社員一覧/登録・編集</a></li>
					<li><a href="../../../company/index.php">企業一覧/登録・編集</a></li>
					<li><a href="../../../client/index.php">取引先ページ新規作成</a></li>
					<li><a href="../../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20">
				<div class="container">
					<nav id="subNavTop">
						<ul>
							<li class="leftEnd"><a href="../../../keiri/seikyusho/index.php">請求書発行</a></li>
							<li class="currentLink"><a href="../index.php">入金処理</a></li>
							<li><a href="../../../keiri/nyukin-yotei/index.php">入金予定表</a></li>
							<li><a href="../../../client/urikake/index.php">売掛情報</a></li>
							<li><a href="../../../keiri/uke-seikyu/index.php">受請求書処理</a></li>
							<li><a href="../../../keiri/shiharai-shori/index.php">支払処理</a></li>
							<li><a href="../../../keiri/shiharai-yotei/index.php">支払予定表</a></li>
							<li><a href="../../../keiri/kaikake/index.php">買掛情報</a></li>
							<li><a href="../../../keiri/shikakekin/index.php">仕掛金一覧</a></li>
							<li><a href="../../../koji_search/nyushukkin/index.php">入出金一覧</a></li>
							<li class="rightEnd"><a href="../../../keiri/jisha-keihi/index.php">自社経費登録</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>入金処理</h2>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w51">入金元</th>
							<td class="w196">○○○不動産</td>
							<th class="w63">請求合計</th>
							<td>00,000,000</td>
							<th class="w115">支払（回収）方法</th>
							<td>集金（現金 50％／手形 50％）,○○○○○</td>
						</tr>
					</table>
				</div>
			</section>
			<div class="container noTtl">
				<table class="tableA w746 mb20">
					<tbody>
						<tr>
							<th class="w100">入金（回収）日</th>
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
							<th class="w111">入金（回収）合計</th>
							<td><input type="text" class="w200" name="amountPaidSum" placeholder="※AUTO"></td>
						</tr>
						<tr>
							<th class="w63">入金科目</th>
							<td>
								<select name="accountTitle" class="w140">
									<option>選択</option>
								</select>
							</td>
							<th class="w63">入金（回収）額</th>
							<td>
								<input class="w200 mr7 boxLeft" name="amountPaid" type="text">
								<a href="#" class="btnIncrease">+</a>
							</td>
						</tr>
					</tbody>
				</table>
				<hr class="mb20">
				<ul class="horizontal mb10">
					<li class="mr7">
						<table class="tableA">
							<tbody><tr>
								<th class="w87">掛売処理合計</th>
								<td><input class="w100" name="purchaseAmount" type="text" placeholder="※AUTO"></td>
							</tr>
						</tbody></table>
					</li>
					<li class="mr7 pt8">ー</li>
					<li class="mr7">
						<table class="tableA">
							<tbody><tr>
								<th class="w105">掛仕入 相殺合計</th>
								<td><input class="w100" name="creditSaleOffset" type="text" placeholder="※AUTO"></td>
							</tr>
						</tbody></table>
					</li>
					<li class="mr7 pt8">ー</li>
					<li class="mr7">
						<table class="tableA">
							<tbody><tr>
								<th class="w100">その他相殺合計</th>
								<td><input class="w100" name="otherOffset" type="text" placeholder="※AUTO"></td>
							</tr>
						</tbody></table>
					</li>
					<li class="mr7 pt8">ー</li>
					<li class="mr7">
						<table class="tableA">
							<tbody><tr>
								<th class="w100">売上値引</th>
								<td><input class="w100" name="saleDiscount" type="text" placeholder="※Default AUTO"></td>
							</tr>
						</tbody></table>
					</li>
				</ul>
				<ul class="horizontal mb20">
					<li class="mr7">
						<table class="tableA">
							<tbody>
								<tr>
									<th class="w87">不足</th>
									<td><input class="w100" name="shortage" type="text" placeholder="※AUTO"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li class="mr7 pt8">　</li>
					<li class="mr7">
						<table class="tableA">
							<tbody><tr>
								<th class="w105">消費税端数処理</th>
								<td>
									<a href="#" class="btnIncrease mr7">+</a>
									<div class="boxLeft mr7">
										<input class="w40 txtCenter" name="amountPaid" value="0" type="text">
									</div>
									<a href="#" class="btnDecrease">+</a>
								</td>
							</tr>
						</tbody></table>
					</li>
				</ul>
				<hr class="mb20">
				<div class="headingB">
					<h3>掛売｜工事の部 入金処理</h3>
				</div>
				<div class="tableStripe">
					<table class="tableB">
						<thead>
							<tr>
								<th class="w70">請求日</th>
								<th class="w70">請求書No</th>
								<th class="w93">工事番号 <br>入金摘要</th>
								<th class="">請求内容</th>
								<th class="w90">入金予定日</th>
								<th class="w90">請求額 <br>入金済額</th>
								<th class="w90">残高</th>
								<th class="w90">
									<div class="clearfix">
										<div class="boxLeft w63">全額選択</div>
										<div class="boxRight">
											<div class="checkBox">
												<input type="checkbox" name="construction1" class="checkAll" id="construction1">
												<label for="construction1"></label>
											</div>
										</div>
									</div>
								</th>
								<th class="w80">入金額</th>
							</tr>
						</thead>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70 txtCenter">0000/00/00</td>
								<td class="w70 txtCenter">00000000</td>
								<td class="w93 txtCenter"><a href="#" class="blue">000D00-00</a><br>工事完了費用</td>
								<td>○○○様邸 <br>□□□□□□□□□□□□工事</td>
								<td class="w90 txtCenter">0000/00/00</td>
								<td class="w90 txtRight">00,000,000 <br>0</td>
								<td class="w90 txtRight">00,000,000</td>
								<td class="w90 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="construction2" class="checkOrder" id="construction2">
										<label for="construction2"></label>
									</div>
								</td>
								<td class="w80"><input type="text" name="paidAmount1" class="w100p txtRight" value="00,000"></td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70 txtCenter">0000/00/00</td>
								<td class="w70 txtCenter">00000000</td>
								<td class="w93 txtCenter"><a href="#" class="blue">000D00-00</a><br>工事完了費用</td>
								<td>○○○様邸 <br>□□□□□□□□□□□□工事</td>
								<td class="w90 txtCenter">0000/00/00</td>
								<td class="w90 txtRight">00,000,000 <br>0</td>
								<td class="w90 txtRight">00,000,000</td>
								<td class="w90 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="construction3" class="checkOrder" id="construction3">
										<label for="construction3"></label>
									</div>
								</td>
								<td class="w80"><input type="text" name="paidAmount1" class="w100p txtRight" value="0"></td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70 txtCenter">0000/00/00</td>
								<td class="w70 txtCenter">00000000</td>
								<td class="w93 txtCenter"><a href="#" class="blue">000D00-00</a><br>工事完了費用</td>
								<td>○○○様邸 <br>□□□□□□□□□□□□工事</td>
								<td class="w90 txtCenter">0000/00/00</td>
								<td class="w90 txtRight">00,000,000 <br>0</td>
								<td class="w90 txtRight">00,000,000</td>
								<td class="w90 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="construction4" class="checkOrder" id="construction4">
										<label for="construction4"></label>
									</div>
								</td>
								<td class="w80"><input type="text" name="paidAmount1" class="w100p txtRight" value="0"></td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70 txtCenter">0000/00/00</td>
								<td class="w70 txtCenter">00000000</td>
								<td class="w93 txtCenter"><a href="#" class="blue">000D00-00</a><br>工事完了費用</td>
								<td>○○○様邸 <br>□□□□□□□□□□□□工事</td>
								<td class="w90 txtCenter">0000/00/00</td>
								<td class="w90 txtRight">00,000,000 <br>0</td>
								<td class="w90 txtRight">00,000,000</td>
								<td class="w90 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="construction5" class="checkOrder" id="construction5">
										<label for="construction5"></label>
									</div>
								</td>
								<td class="w80"><input type="text" name="paidAmount1" class="w100p txtRight" value="0"></td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70 txtCenter">0000/00/00</td>
								<td class="w70 txtCenter">00000000</td>
								<td class="w93 txtCenter"><a href="#" class="blue">000D00-00</a><br>3分割 1回目請求</td>
								<td>○○○様邸 <br>□□□□□□□□□□□□工事</td>
								<td class="w90 txtCenter">0000/00/00</td>
								<td class="w90 txtRight">00,000,000 <br>0</td>
								<td class="w90 txtRight">00,000,000</td>
								<td class="w90 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="construction6" class="checkOrder" id="construction6">
										<label for="construction6"></label>
									</div>
								</td>
								<td class="w80"><input type="text" name="paidAmount1" class="w100p txtRight" value="0"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="headingB">
					<h3>掛売｜材料販売の部 入金処理</h3>
				</div>
				<div class="tableStripe">
					<table class="tableB">
						<thead>
							<tr>
								<th class="w80">請求日</th>
								<th class="w80">請求書No</th>
								<th class="w80">材料販売番号 <br>入金摘要</th>
								<th class="">請求内容</th>
								<th class="w90">入金予定日</th>
								<th class="w90">請求額 <br>入金済額</th>
								<th class="w90">残高</th>
								<th class="w90">
									<div class="clearfix">
										<div class="boxLeft w63">全額選択</div>
										<div class="boxRight">
											<div class="checkBox">
												<input type="checkbox" name="material1" class="checkAll" id="material1">
												<label for="material1"></label>
											</div>
										</div>
									</div>
								</th>
								<th class="w80">入金額</th>
							</tr>
						</thead>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w80 txtCenter">0000/00/00</td>
								<td class="w80 txtCenter">00000000</td>
								<td class="w80 txtCenter"><a href="#" class="blue">000D00-00</a><br>材料販売費</td>
								<td>□□□□□□□□□□□□</td>
								<td class="w90 txtCenter">0000/00/00</td>
								<td class="w90 txtRight">00,000,000 <br>0</td>
								<td class="w90 txtRight">00,000,000</td>
								<td class="w90 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="material2" class="checkOrder" id="material2">
										<label for="material2"></label>
									</div>
								</td>
								<td class="w80"><input type="text" name="paidAmount1" class="w100p txtRight" value="00,000"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="headingB">
					<h3>掛売｜その他の部 入金処理</h3>
				</div>
				<div class="tableStripe">
					<table class="tableB">
						<thead>
							<tr>
								<th class="w80">請求日</th>
								<th class="w80">請求書No</th>
								<th class="w80">入金摘要</th>
								<th class="">請求内容</th>
								<th class="w90">入金予定日</th>
								<th class="w90">請求額 <br>入金済額</th>
								<th class="w90">残高</th>
								<th class="w90">
									<div class="clearfix">
										<div class="boxLeft w63">全額選択</div>
										<div class="boxRight">
											<div class="checkBox">
												<input type="checkbox" name="other1" class="checkAll" id="other1">
												<label for="other1"></label>
											</div>
										</div>
									</div>
								</th>
								<th class="w80">入金額</th>
							</tr>
						</thead>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w80 txtCenter">0000/00/00</td>
								<td class="w80 txtCenter">00000000</td>
								<td class="w80 txtCenter">□□□□</td>
								<td>□□□□□□□□□□□□</td>
								<td class="w90 txtCenter">0000/00/00</td>
								<td class="w90 txtRight">00,000,000 <br>0</td>
								<td class="w90 txtRight">00,000,000</td>
								<td class="w90 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="other2" class="checkOrder" id="other2">
										<label for="other2"></label>
									</div>
								</td>
								<td class="w80"><input type="text" name="paidAmount1" class="w100p txtRight" value="00,000"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="headingB">
					<h3>掛仕入｜相殺支払処理の部</h3>
				</div>
				<div class="tableStripe">
					<table class="tableB">
						<thead>
							<tr>
								<th class="w150">企業名</th>
								<th class="w150">事業所名</th>
								<th class="w111">受請求処理日</th>
								<th class="w102">処理者</th>
								<th class="">受請求金額合計</th>
								<th class="w108">
									<div class="clearfix">
										<div class="boxLeft w84">全額選択</div>
										<div class="boxRight">
											<div class="checkBox">
												<input type="checkbox" name="offset1" class="checkAll" id="offset1">
												<label for="offset1"></label>
											</div>
										</div>
									</div>
								</th>
								<th class="w95">支払額</th>
							</tr>
						</thead>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w150">□□□□□□□□□</td>
								<td class="w150">□□□□□□□□□</td>
								<td class="w111 txtCenter"><a href="#" class="blue">0000000</a></td>
								<td class="w102 txtCenter">小林太郎</td>
								<td class=" txtRight">0,000,000</td>
								<td class="w108 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="offset2" class="checkOrder" id="offset2">
										<label for="offset2"></label>
									</div>
								</td>
								<td class="w95"><input type="text" name="paidAmount1" class="w100p txtRight" value="00,000"></td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w150">□□□□□□□□□</td>
								<td class="w150">□□□□□□□□□</td>
								<td class="w111 txtCenter"><a href="#" class="blue">0000000</a></td>
								<td class="w102 txtCenter">小林太郎</td>
								<td class=" txtRight">0,000,000</td>
								<td class="w108 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="offset3" class="checkOrder" id="offset3">
										<label for="offset3"></label>
									</div>
								</td>
								<td class="w95"><input type="text" name="paidAmount2" class="w100p txtRight" value="00,000"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="headingB">
					<h3>掛仕入｜相殺支払処理の部</h3>
				</div>
				<table class="tableA">
					<tr>
						<th class="w111">※設定処理項目名</th>
						<td><input type="text" name="setUpItem1" class="w100p" placeholder="※Default AUTO"></td>
						<th class="w111">※設定処理項目名</th>
						<td><input type="text" name="setUpItem2" class="w100p" placeholder="※Default AUTO"></td>
						<th class="w111">※設定処理項目名</th>
						<td><input type="text" name="setUpItem3" class="w100p" placeholder="※Default AUTO"></td>
						<th class="w111">※設定処理項目名</th>
						<td><input type="text" name="setUpItem4" class="w100p" placeholder="※Default AUTO"></td>
					</tr>
					<tr>
						<th>追加1（＋）</th>
						<td><input type="text" name="addition" ></td>
						<th>追加金額</th>
						<td><input type="text" name="additionalAmount" ></td>
						<td colspan="4" class="bdl"><a href="#" class="btnIncrease">+</a></td>
					</tr>
				</table>
				<hr class="pt20">
				<div class="txtCenter noTtl">
					<button class="buttonA">上記の内容で入金処理を実行する</button>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>