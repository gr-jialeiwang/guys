<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>材料販売個別情報 見積：Guy's System</title>
<link rel="stylesheet" href="../../css/common.css">
<link rel="stylesheet" href="../../css/base.css">
<link rel="stylesheet" href="../../css/page.css">
<link rel="stylesheet" href="../../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../../js/function.js"></script>
<!-- jquery-ui -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$(function() {
		$(".sortable").sortable().disableSelection();
		$("#submit").click(function() {
			var result = $("#sortable").sortable("toArray");
			$("#result").val(result);
			$("form").submit();
		});
	});
</script>
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
					<li class="currentLink"><a href="../index.php">取引先ページ新規作成</a></li>
					<li><a href="../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20 mb30">
				<div class="container">
					<nav id="subNavTop" class="navKoji">
						<ul>
							<li class="leftEnd"><a href="../../new_koji/index.php">新規工事登録</a></li>
							<li><a href="../../koji_search/index.php">工事情報</a></li>
							<li><a href="../../romu-shinsei/index.php">労務申請</a></li>
							<li class="current">材料販売登録</li>
							<li><a href="../../zaiko/index.php">在庫一覧／登録</a></li>
							<li class="rightEnd"><a href="../../material-nohinsho/index.php">材料納品書</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>材料販売個別情報</h2>
						</div>
					</div>
					<div class="clearfix">
						<div class="boxLeft w770">
							<table class="tableA">
								<tbody>
									<tr class="bdt">
										<th class="w124">ご依頼日</th>
										<td colspan="3">0000年00月00日</td>
									</tr>
									<tr>
										<th>材料販売番号</th>
										<td class="w242">00A00-00</td>
										<th class="w105">販売先</th>
										<td></td>
									</tr>
									<tr>
										<th>販売材料名（品名）</th>
										<td></td>
										<th>販売先 ご担当者</th>
										<td></td>
									</tr>
									<tr>
										<th>材料販売ステータス</th>
										<td>
											<select name="materialSellStatus" class="w100p">
												<option value=""></option>
											</select>
										</td>
										<th class="w105">自社担当者</th>
										<td>小林太郎（000-0000-0000）</td>
									</tr>
									<tr>
										<th>請求処理状況</th>
										<td>未請求</td>
										<th class="w105">納品先住所</th>
										<td><input type="text" name="deliveryAddress" class="w100p"></td>
									</tr>
									<tr>
										<th>伝言・共有メモ</th>
										<td colspan="3"><input type="text" name="memo" class="w100p"></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="boxRight w200 bottom right">
							<ul class="horizontal kojiBtnWrap">
								<li><a href="../material-edit.php" class="buttonA">基本情報編集</a></li>
								<li class="ml0"><a href="list.php" class="buttonA">見積書・発注書 一覧</a></li>
								<li><button class="buttonA">ページ削除</button></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload" type="button">登録・更新する</button>
						</div>
					</div>
				</div>
			</section>
			<div class="gradient">
				<div class="container">
					<div class="clearfix">
						<div class="boxLeft">
							<nav id="kojiTab">
								<ul>
									<li class="current">見積</li>
									<li><a href="hacchu.php">発注</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<hr class="gray">
			</div>
			<div class="container ">
				<div class="clearfix mb20">
					<div class="boxLeft w169 pt30">
						<table class="tableA">
							<tbody>
								<tr>
									<td colspan="2" class="txtCenter"><button class="buttonA">見積テンプレート呼出</button></td>
								</tr>
								<tr>
									<th class="w66">請求回数</th>
									<td>
										<select name="orderCount" class="w60">
											<option>3回</option>
											<option value="1">1回</option>
											<option value="1">2回</option>
											<option value="1">3回</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="boxLeft w810 pt30">
						<table class="tableA">
							<tbody>
								<tr>
									<th class="w124">見積総合ステータス</th>
									<td class="w250">
										<select name="estimateStatus" class="w238">
											<option>選択</option>
											<option value=""></option>
										</select>
									</td>
									<th class="w80">消費税率</th>
									<td class="w66" colspan="3">
										<select name="taxRate" class="w66">
											<option>8%</option>
											<option value="10">10%</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>1回目</th>
									<td>
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="orderYear1" class="w80">
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
											</li>
											<li>
												<select name="orderMonth1" class="w72">
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
											<li>
												<select name="orderDay1" class="w72">
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
									<th>税抜請求額</th>
									<td colspan="3">
										<input type="text" class="w238" name="taxoffPrice1" placeholder="※AUTO（Default &amp; Manual）">
									</td>
								</tr>
								<tr>
									<th>2回目</th>
									<td>
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="orderYear2" class="w80">
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
											</li>
											<li>
												<select name="orderMonth2" class="w72">
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
											<li>
												<select name="orderDay2" class="w72">
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
									<th>税抜請求額</th>
									<td colspan="3">
										<input type="text" class="w238" name="taxoffPrice2" placeholder="※AUTO&amp; Manual">
									</td>
								</tr>
								<tr>
									<th>3回目</th>
									<td>
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="orderYear3" class="w80">
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
											</li>
											<li>
												<select name="orderMonth3" class="w72">
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
											<li>
												<select name="orderDay3" class="w72">
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
									<th>税抜請求額</th>
									<td colspan="3">
										<input type="text" class="w238" name="taxoffPrice3" placeholder="※AUTO">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<hr>
				<div class="clearfix mb10">
					<div class="boxLeft">
						<div class="headingB">
							<h3>見積合算（請負額総計）</h3>
						</div>
					</div>
				</div>
				<table class="tableA mb10">
					<tbody>
						<tr>
							<th class="w107">小計</th>
							<td>0,000,000</td>
							<th class="w51">値引き</th>
							<td class="txtRight">0,000</td>
							<th class="w63">税抜合計</th>
							<td>0,000,000</td>
							<th class="w51">消費税</th>
							<td>0,000,000</td>
							<th class="w63">税込合計</th>
							<td>0,000,000</td>
						</tr>
					</tbody>
				</table>
				<hr>
				<div class="clearfix mb10">
					<div class="boxLeft">
						<div class="headingB">
							<h3>見積1</h3>
						</div>
					</div>
					<div class="boxRight">
						<ul class="horizontal pt10">
							<li><button class="buttonA mr7">見積書発行</button></li>
							<li><button class="buttonA mr7">見積詳細作成</button></li>
							<li><button class="buttonA">追加見積作成</button></li>
						</ul>
					</div>
				</div>
				<table class="tableA">
					<tr>
						<th class="w107">見積1ステータス</th>
						<td>
							<select name="estimate1Status" class="w175">
								<option>選択</option>
							</select>
						</td>
					</tr>
				</table>
				<table class="tableA">
					<tr>
						<th class="w107">見積作成者</th>
						<td>
							<select name="whoEstimateMade" class="w175">
								<option>選択</option>
							</select>
						</td>
						<th class="w51≈">発行日</th>
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
							</ul>
						</td>
						<th class="w63">有効期限</th>
						<td>
							<select name="expirationDate" class="w175">
								<option>選択</option>
							</select>
						</td>
					</tr>
				</table>
				<table class="tableA">
					<tr>
						<th class="w107">配送方法</th>
						<td>
							<select name="deliveryMethod" class="w175">
								<option>選択</option>
							</select>
						</td>
						<th class="w63">受渡期日</th>
						<td>
							<select name="deliveryDate" class="w175">
								<option>選択</option>
							</select>
						</td>
						<th class="w75">御支払条件</th>
						<td>
							<select name="paymentCondition" class="w175">
								<option>選択</option>
							</select>
						</td>
					</tr>
				</table>
				<table class="tableA mb10">
					<tbody>
						<tr>
							<th class="w107">小計</th>
							<td>0,000,000</td>
							<th class="w51">値引き</th>
							<td class="txtRight">0,000</td>
							<th class="w63">税抜合計</th>
							<td>0,000,000</td>
							<th class="w51">消費税</th>
							<td>0,000,000</td>
							<th class="w63">税込合計</th>
							<td>0,000,000</td>
						</tr>
					</tbody>
				</table>
				<div class="clearfix mb10">
					<div class="boxLeft">
						<a href="#" class="btnIncrease mr7">+</a>
						<a href="#" class="btnDecrease">+</a>
					</div>
					<div class="boxRight">
						<a href="#" class="gray">リセット</a>
					</div>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w250">名称</th>
							<th>規格摘要</th>
							<th class="w80">数量</th>
							<th class="w80">単位</th>
							<th class="w80">単価</th>
							<th class="w102">金額</th>
						</tr>
					</thead>
				</table>
				<ul class="sortable">
					<li id="1">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w250"><input type="text" class="w100p" name="estimateName1"></td>
									<td><input type="text" class="w100p" name="standardSummary1"></td>
									<td class="w80"><input type="text" class="w100p" name="estimateNumber1"></td>
									<td class="w80">
										<select name="supplierSelect1_1" class="w100p">
											<option>選択</option>
										</select>
									</td>
									<td class="w80"><input type="text" class="w100p" name="unitPrice1"></td>
									<td class="w102"><input type="text" class="w100p" name="price1"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="2">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w250"><input type="text" class="w100p" name="estimateName2"></td>
									<td><input type="text" class="w100p" name="standardSummary2"></td>
									<td class="w80"><input type="text" class="w100p" name="estimateNumber2"></td>
									<td class="w80">
										<select name="supplierSelect1_2" class="w100p">
											<option>選択</option>
										</select>
									</td>
									<td class="w80"><input type="text" class="w100p" name="unitPrice2"></td>
									<td class="w102"><input type="text" class="w100p" name="price2"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="3">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w250"><input type="text" class="w100p" name="estimateName3"></td>
									<td><input type="text" class="w100p" name="standardSummary3"></td>
									<td class="w80"><input type="text" class="w100p" name="estimateNumber3"></td>
									<td class="w80">
										<select name="supplierSelect1_3" class="w100p">
											<option>選択</option>
										</select>
									</td>
									<td class="w80"><input type="text" class="w100p" name="unitPrice3"></td>
									<td class="w102"><input type="text" class="w100p" name="price3"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="4">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w250"><input type="text" class="w100p" name="estimateName4"></td>
									<td><input type="text" class="w100p" name="standardSummary4"></td>
									<td class="w80"><input type="text" class="w100p" name="estimateNumber4"></td>
									<td class="w80">
										<select name="supplierSelect1_4" class="w100p">
											<option>選択</option>
										</select>
									</td>
									<td class="w80"><input type="text" class="w100p" name="unitPrice4"></td>
									<td class="w102"><input type="text" class="w100p" name="price4"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="5">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w250"><input type="text" class="w100p" name="estimateName5"></td>
									<td><input type="text" class="w100p" name="standardSummary5"></td>
									<td class="w80"><input type="text" class="w100p" name="estimateNumber5"></td>
									<td class="w80">
										<select name="supplierSelect1_5" class="w100p">
											<option>選択</option>
										</select>
									</td>
									<td class="w80"><input type="text" class="w100p" name="unitPrice5"></td>
									<td class="w102"><input type="text" class="w100p" name="price5"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="6">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w250"><input type="text" class="w100p" name="estimateName6"></td>
									<td><input type="text" class="w100p" name="standardSummary6"></td>
									<td class="w80"><input type="text" class="w100p" name="estimateNumber6"></td>
									<td class="w80">
										<select name="supplierSelect1_6" class="w100p">
											<option>選択</option>
										</select>
									</td>
									<td class="w80"><input type="text" class="w100p" name="unitPrice6"></td>
									<td class="w102"><input type="text" class="w100p" name="price6"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="7">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w250"><input type="text" class="w100p" name="estimateName7"></td>
									<td><input type="text" class="w100p" name="standardSummary7"></td>
									<td class="w80"><input type="text" class="w100p" name="estimateNumber7"></td>
									<td class="w80">
										<select name="supplierSelect1_7" class="w100p">
											<option>選択</option>
										</select>
									</td>
									<td class="w80"><input type="text" class="w100p" name="unitPrice7"></td>
									<td class="w102"><input type="text" class="w100p" name="price7"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="8">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w250"><input type="text" class="w100p" name="estimateName7"></td>
									<td><input type="text" class="w100p" name="standardSummary7"></td>
									<td class="w80"><input type="text" class="w100p" name="estimateNumber7"></td>
									<td class="w80">
										<select name="supplierSelect1_7" class="w100p">
											<option>選択</option>
										</select>
									</td>
									<td class="w80"><input type="text" class="w100p" name="unitPrice7"></td>
									<td class="w102"><input type="text" class="w100p" name="price7"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="9">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w250"><input type="text" class="w100p" name="estimateName7"></td>
									<td><input type="text" class="w100p" name="standardSummary7"></td>
									<td class="w80"><input type="text" class="w100p" name="estimateNumber7"></td>
									<td class="w80">
										<select name="supplierSelect1_7" class="w100p">
											<option>選択</option>
										</select>
									</td>
									<td class="w80"><input type="text" class="w100p" name="unitPrice7"></td>
									<td class="w102"><input type="text" class="w100p" name="price7"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="7">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w250"><input type="text" class="w100p" name="estimateName7"></td>
									<td><input type="text" class="w100p" name="standardSummary7"></td>
									<td class="w80"><input type="text" class="w100p" name="estimateNumber7"></td>
									<td class="w80">
										<select name="supplierSelect1_7" class="w100p">
											<option>選択</option>
										</select>
									</td>
									<td class="w80"><input type="text" class="w100p" name="unitPrice7"></td>
									<td class="w102"><input type="text" class="w100p" name="price7"></td>
								</tr>
							</tbody>
						</table>
					</li>
				</ul>
				<div class="headingD mb10">
					<h3>見積諸条件</h3>
				</div>
				<div class="w594 tableStripe2">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w100p"><input type="text" class="w100p" name="estimateTerms1"></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p" name="estimateTerms2"></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p" name="estimateTerms3"></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p" name="estimateTerms4"></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p" name="estimateTerms5"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="headingD mb10">
					<h3>備考</h3>
				</div>
				<div class="w594 tableStripe2">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks1" value=""></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks2" value=""></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks3" value=""></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks4_1" value=""></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks4_2" value=""></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks5_1" value=""></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks5_2" value=""></td>
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