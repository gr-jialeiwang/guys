<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>個別請求書発行：Guy's System</title>
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
							<li class="leftEnd currentLink"><a href="index.php">請求書発行</a></li>
							<li><a href="../../keiri/nyukin-shori/index.php">入金処理</a></li>
							<li><a href="../../keiri/nyukin-yotei/index.php">入金予定表</a></li>
							<li><a href="../../keiri/urikake/index.php">売掛情報</a></li>
							<li><a href="../../keiri/uke-seikyu/index.php">受請求書処理</a></li>
							<li><a href="../../keiri/shiharai-shori/index.php">支払処理</a></li>
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
						<div class="boxLeft">
							<h2>請求書発行</h2>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w51">請求先</th>
							<td>○○○不動産</td>
							<th class="w115">請求先 事業所選択</th>
							<td class="w159">
								<select name="demandPaymentOffice" class="w159">
									<option>選択</option>
								</select>
							</td>
							<th class="w75">備考／メモ</th>
							<td>
								<input type="text" name="memo" class="w100p">
							</td>
						</tr>
					</table>
				</div>
			</section>
			<div class="container">
				<div class="headingB">
					<h3>工事の部／請求（＋）</h3>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w80">工事番号 <br>工事完了日</th>
							<th class="">ご請求内容</th>
							<th class="w90">ご請求金額 <br>消費税</th>
							<th class="w115">工事ステータス <br>ご請求摘要</th>
							<th class="w70">表示／現場 単位</th>
							<th class="w25">請求 明細	</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="txtCenter"><a href="../../koji_search/index02_025.php" class="blue">000A00-00</a><br>0000/00/00</td>
							<td>
								<ul>
									<li>［現場名］  ○○○○様邸</li>
									<li>［工事名］  ○○○○○○○サイディング工事</li>
									<li>［消費税］<input type="text" name="constructionConsumptionTax1" class="w30 txtRight" value="8">％</li>
									<li>［小計］ 00,000,000</li>
									<li>
										<div class="clearfix">
											<div class="boxLeft mr7">
												<input type="text" name="constructionBillingCintents1">
											</div>
											<a href="#" class="btnIncrease">+</a>
										</div>
									</li>
								</ul>
							</td>
							<td class="txtRight">
								0,000,000 <br>
								<input type="text" name="constructionBillingAmount1" class="txtRight w100p" value="000,000">
							</td>
							<td class="txtCenter">完了／請求OK <br>工事完了費用</td>
							<td class="txtCenter">
								<select name="constructionUnit1">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
								</select>
							</td>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_2" class="checkOrder" id="order1_2">
									<label for="order1_2"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td class="txtCenter"><a href="../../koji_search/index02_025.php" class="blue">000A00-00</a><br>0000/00/00</td>
							<td>
								<ul>
									<li>［現場名］  ○○○○様邸</li>
									<li>［工事名］  ○○○○○○○サイディング工事</li>
									<li>［消費税］<input type="text" name="constructionConsumptionTax2" class="w30 txtRight" value="8">％</li>
									<li>［小計］ 00,000,000</li>
									<li>
										<div class="clearfix">
											<div class="boxLeft mr7">
												<input type="text" name="constructionBillingCintents2">
											</div>
											<a href="#" class="btnIncrease">+</a>
										</div>
									</li>
								</ul>
							</td>
							<td class="txtRight">
								0,000,000 <br>
								<input type="text" name="constructionBillingAmount2" class="txtRight w100p" value="000,000">
							</td>
							<td class="txtCenter">完了／請求OK <br>工事完了費用</td>
							<td class="txtCenter">
								<select name="constructionUnit2">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
								</select>
							</td>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_2" class="checkOrder" id="order1_2">
									<label for="order1_2"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td class="txtCenter"><a href="../../koji_search/index02_025.php" class="blue">000A00-00</a><br>0000/00/00</td>
							<td>
								<ul>
									<li>［現場名］  ○○○○様邸</li>
									<li>［工事名］  ○○○○○○○サイディング工事</li>
									<li>［消費税］<input type="text" name="constructionConsumptionTax3" class="w30 txtRight" value="8">％</li>
									<li>［小計］ 00,000,000</li>
									<li class="mb7">
										<div class="clearfix">
											<div class="boxLeft mr7">
												<input type="text" name="constructionBillingCintents3-1">
											</div>
											<a href="#" class="btnIncrease">+</a>
										</div>
									</li>
									<li>
										<div class="clearfix">
											<div class="boxLeft mr7">
												<input type="text" name="constructionBillingCintents3-2">
											</div>
											<a href="#" class="btnIncrease mr7">+</a>
											<a href="#" class="btnDecrease">+</a>
										</div>
									</li>
								</ul>
							</td>
							<td class="txtRight">
								0,000,000 <br>
								<input type="text" name="constructionBillingAmount3" class="txtRight w100p" value="000,000">
							</td>
							<td class="txtCenter">施工中／一部請求可<br>3分割 1回目請求</td>
							<td class="txtCenter">
								<select name="constructionUnit3">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
								</select>
							</td>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_2" class="checkOrder" id="order1_2">
									<label for="order1_2"></label>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="headingB">
					<h3>材料販売の部／請求（＋）</h3>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w80">工事番号 <br>工事完了日</th>
							<th class="">ご請求内容（販売材料名）</th>
							<th class="w90">ご請求金額 <br>消費税</th>
							<th class="w115">材料販売ステータス <br>ご請求摘要</th>
							<th class="w70"></th>
							<th class="w25"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="txtCenter"><a href="../../material-hanbai/material-info/index.php" class="blue">000A00-00</a><br>0000/00/00</td>
							<td>
								<ul>
									<li>○○○○（材料名）</li>
								</ul>
							</td>
							<td class="txtRight">
								0,000,000 <br>
								<input type="text" name="materialBillingAmount" class="txtRight w100p" value="000,000">
							</td>
							<td class="txtCenter">完了／請求OK <br>工事完了費用</td>
							<td class="txtCenter">
								<select name="">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
								</select>
							</td>
							<td class="txtCenter"></td>
						</tr>
					</tbody>
				</table>
				<div class="headingB">
					<h3>その他の部／請求（＋） ／掛売項目</h3>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w80">日付</th>
							<th class="">御請求内容</th>
							<th class="w90">ご請求金額 <br>消費税</th>
							<th class="w115">ご請求摘要</th>
							<th class="w70"></th>
							<th class="w25"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="txtCenter">
								<input type="text" name="otherDate1" class="w100p">
							</td>
							<td>
								<input type="text" name="otherContents1" class="w100p">
							</td>
							<td>
								<input type="text" name="otherBillingAmount1" class="w100p mb7"><br>
								<input type="text" name="consumptionTax1" class="w100p">
							</td>
							<td class="txtCenter">
								<input type="text" name="otherSummary1" class="w100p">
							</td>
							<td class="txtCenter">
								<select name="">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
								</select>
							</td>
							<td class="txtCenter">
								<a href="#" class="btnIncrease">+</a>
							</td>
						</tr>
					</tbody>
				</table>
				<hr class="pt40">
				<div class="headingB">
					<h3>各合計／掛売の部</h3>
				</div>
				<table class="tableA mb10">
					<tr>
						<th class="w63">請求合計</th>
						<td>
							<input type="text" name="totalBillingTaxIn" class="w100p" placeholder="※AUTO">
						</td>
						<th class="w51">消費税</th>
						<td>
							<input type="text" name="totalConsumptionTax" class="w100p" placeholder="※AUTO">
						</td>
						<th class="w184">今回ご請求額 （今回御買上額）</th>
						<td>
							<input type="text" name="totalBilling" class="w100p" placeholder="※AUTO">
						</td>
					</tr>
				</table>
				<div class="clearfix">
					<div class="boxLeft pt10 w20">
						┣
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tr>
								<th class="w130">工事の部 請求合計</th>
								<td>
									<input type="text" name="constructionBillingTaxIn" class="w100p" placeholder="※AUTO">
								</td>
								<th>消費税</th>
								<td>
									<input type="text" name="constructionConsumptionTax" class="w100p" placeholder="※AUTO">
								</td>
								<th>今回ご請求額 （今回御買上額）</th>
								<td>
									<input type="text" name="constructionBilling" class="w100p" placeholder="※AUTO">
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft pt10 w20">
						┣
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tr class="bdtn">
								<th class="w130">材販の部 請求合計</th>
								<td>
									<input type="text" name="materialBillingTaxIn" class="w100p" placeholder="※AUTO">
								</td>
								<th>消費税</th>
								<td>
									<input type="text" name="materialConsumptionTax" class="w100p" placeholder="※AUTO">
								</td>
								<th>今回ご請求額 （今回御買上額）</th>
								<td>
									<input type="text" name="materialBilling" class="w100p" placeholder="※AUTO">
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft pt10 w20">
						┣
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tr class="bdtn">
								<th class="w130">その他の部 請求合計</th>
								<td>
									<input type="text" name="otherBillingTaxIn" class="w100p" placeholder="※AUTO">
								</td>
								<th>消費税</th>
								<td>
									<input type="text" name="otherConsumptionTax" class="w100p" placeholder="※AUTO">
								</td>
								<th>今回ご請求額 （今回御買上額）</th>
								<td>
									<input type="text" name="otherBilling" class="w100p" placeholder="※AUTO">
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft pt8">┃</div>
					<div class="boxLeft">
						<div class="headingB mt8">
							<h3>売上値引の部／（－）</h3>
						</div>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft pt10 w20">
						┗
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tr>
								<th class="w127">売上値引合計</th>
								<td>
									<input type="text" name="salesDiscount" class="w100p" placeholder="※AUTO">
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="headingB">
					<h3>掛仕入 相殺の部／（－）　※企業名単位</h3>
				</div>
				<table class="tableA2 mb20 w250">
					<tbody>
						<tr>
							<th class="w100">掛仕入相殺合計</th>
							<td class="txtRight"><input type="text" class="w100p" name="totalOffset" value="※AUTO"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w90">掛仕入 相殺選択</th>
							<th class="">企業名</th>
							<th class="w230">事業所名</th>
							<th class="w115">受請求処理日</th>
							<th class="w70">処理者</th>
							<th class="w90">受請求金額合計</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_2" class="checkOrder" id="order1_2">
									<label for="order1_2"></label>
								</div>
							</td>
							<td>□□□□□□□□□</td>
							<td>□□□□□□□□□</td>
							<td class="txtCenter"><a href="#" class="blue">0000000</a></td>
							<td class="txtCenter">小林太郎</td>
							<td class="txtRight">0,000,000</td>
						</tr>
						<tr>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_2" class="checkOrder" id="order1_2">
									<label for="order1_2"></label>
								</div>
							</td>
							<td>□□□□□□□□□</td>
							<td>□□□□□□□□□</td>
							<td class="txtCenter"><a href="#" class="blue">0000000</a></td>
							<td class="txtCenter">小林太郎</td>
							<td class="txtRight">0,000,000</td>
						</tr>
					</tbody>
				</table>
				<div class="headingB">
					<h3>その他 相殺見込の部（登録デフォルト値）］／（－）</h3>
				</div>
				<table class="tableA">
					<tr>
						<th class="thA2 w130">その他相殺見込 合計</th>
						<td class="w115"><input type="text" name="expectedOtherOffset" placeholder="※AUTO" class="w100p"></td>
						<th class="w115">共済金（協力費）</th>
						<td class="w115"><input type="text" name="mutualAid" value="00,000" class="w100p"></td>
						<th class="w90">※相殺項目1</th>
						<td class="w115"><input type="text" name="offsetItem1" class="w100p"></td>
						<th class="w90">※相殺項目2</th>
						<td><input type="text" name="offsetItem2" class="w100p"></td>
					</tr>
					<tr>
						<th>※相殺項目3</th>
						<td><input type="text" name="offsetItem3" class="w100p"></td>
						<th>※相殺項目4</th>
						<td><input type="text" name="offsetItem4" class="w100p"></td>
						<th>※相殺項目5</th>
						<td><input type="text" name="offsetItem5" class="w100p"></td>
						<th>※相殺項目6</th>
						<td><input type="text" name="offsetItem6" class="w100p"></td>
					</tr>
					<tr>
						<th>※相殺項目7</th>
						<td><input type="text" name="offsetItem7" class="w100p"></td>
						<th>※相殺項目8</th>
						<td><input type="text" name="offsetItem8" class="w100p"></td>
						<th>※相殺項目9</th>
						<td><input type="text" name="offsetItem9" class="w100p"></td>
						<th>※相殺項目10</th>
						<td><input type="text" name="offsetItem10" class="w100p"></td>
					</tr>
				</table>
				<div class="headingB">
					<h3>想定 その他相殺見込金（その他｜項目名・金額）</h3>
				</div>
				<table class="tableA">
					<tr>
						<th class="w100">相殺項目（－）</th>
						<td>
							<select name="otherExpectedOffset1" class="w100">
								<option>選択</option>
							</select>
						</td>
						<th class="w63">相殺金額</th>
						<td><input type="text" name="offsetAmount1" class="w100p"></td>
						<th class="w100">相殺項目（－）</th>
						<td>
							<select name="otherExpectedOffset2" class="w100" id="nyukinYoteiSelect">
								<option>選択</option>
								<option value="option1_futankin">工事関連負担金</option>
							</select>
						</td>
						<th class="w63">相殺金額</th>
						<td><input type="text" name="offsetAmount2" class="w100p"></td>
					</tr>
					<tr id="futankinInput">
						<td colspan="4"></td>
						<th class="w100">工事番号入力</th>
						<td colspan="3">
							<input type="text" name="kojinumber" class="w200 mr7"><button class="buttonA mr7">登録</button><button class="buttonA">キャンセル</button>
						</td>
					</tr>
				</table>
				<hr class="pt20">
				<div class="headingB mb10">
					<h3>実入金予定セット</h3>
				</div>
				<ul class="horizontal">
					<li>
						<table class="tableA">
							<tr>
								<th class="txtCenter">今回ご請求額 <br>（今回御買上額）</th>
								<td><input type="text" name="" class="w95" placeholder="※AUTO"></td>
							</tr>
						</table>
					</li>
					<li class="pt15 ml5">ー</li>
					<li class="pt15 mr5">（</li>
					<li class="pt8">
						<table class="tableA2">
							<tr>
								<th>掛仕入相殺合計</th>
								<td><input type="text" name="" class="w95" placeholder="※AUTO"></td>
							</tr>
						</table>
					</li>
					<li class="pt15">＋</li>
					<li class="pt8">
						<table class="tableA2">
							<tr>
								<th>その他相殺見込 合計</th>
								<td><input type="text" name="" class="w95" placeholder="※AUTO"></td>
							</tr>
						</table>
					</li>
					<li class="pt15 ml5">）</li>
					<li class="pt15 mr5">＝</li>
					<li class="pt8">
						<table class="tableA">
							<tr>
								<th>実入金 見込金額</th>
								<td><input type="text" name="" class="w90" placeholder="※Default Auto"></td>
							</tr>
						</table>
					</li>
				</ul>
				<table class="tableA noTtl w210 mb10">
					<tbody>
						<tr>
							<th class="txtCenter w87">入金予定回数</th>
							<td>
								<select name="numberOfPayment" class="">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tableA">
					<tbody>
						<tr class="bdt">
							<th class="txtCenter w124">入金（回収）予定日</th>
							<td class="w263">
								<ul class="dateSortingArea horizontal">
									<li>
										<select name="yearExpected" class="w105">
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
										<select name="monthExpected" class="w72">
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
										<select name="dayExpected" class="w72 mr0">
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
							<th class="w63">入金科目</th>
							<td><input type="text" name="accountTitle1" class="w100p" placeholder="※Default Auto"></td>
							<th class="w63">実入金 <br>見込金額</th>
							<td><input type="text" name="expectedTransferAmount1" class="w100p" placeholder="※Default Auto"></td>
							<td class="bdl w45"></td>
						</tr>
						<tr>
							<td colspan="2"></td>
							<th class="w63">入金科目</th>
							<td><input type="text" name="accountTitle2" class="w100p" placeholder="※Default Auto"></td>
							<th class="w63">実入金 <br>見込金額</th>
							<td><input type="text" name="expectedTransferAmount2" class="w100p" placeholder="※Default Auto"></td>
							<td class="bdl">
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
									<a href="#" class="btnDecrease">+</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<hr class="pt20">
				<ul class="horizontal">
					<li>
						<table class="tableA noTtl">
							<tbody>
								<tr class="bdt">
									<th class="txtCenter w124">請求書発行日</th>
									<td class="w263">
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="BillCreatedyear" class="w105">
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
												<select name="BillCreatedmonth" class="w72">
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
												<select name="dayBillCreated" class="w72 mr0">
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
							</tbody>
						</table>
					</li>
				</ul>
				<ul class="horizontal pt10">
					<li class="mr7">
						<table class="tableA">
							<tbody>
								<tr class="bdt">
									<th class="txtCenter w124">対象期間選択</th>
									<td>
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="yearSearchStart" class="w105">
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
												<select name="monthSearchStart" class="w72">
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
												<select name="daySearchStart" class="w72 mr0">
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
							</tbody>
						</table>
					</li>
					<li class="pt10 mr7">〜</li>
					<li>
						<table class="tableA">
							<tbody>
								<tr class="bdt">
									<td class="w263">
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="yearSearchEnd" class="w105">
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
												<select name="monthSearchEnd" class="w72">
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
												<select name="daySearchEnd" class="w72 mr0">
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
							</tbody>
						</table>
					</li>
				</ul>
				<div class="headingB mb10">
					<h3>経理情報</h3>
				</div>
				<table class="tableA">
					<tr>
						<th class="w105">請求書 締め回数</th>
						<td>月2回</td>
						<th class="w111">指定請求書有無</th>
						<td>なし</td>
						<th class="w111">支払（回収）方法</th>
						<td class="w175">集金（現金 50％／手形 50％）</td>
						<td class="w90"></td>
						<td></td>
					</tr>
					<tr>
						<th>締め日／支払日</th>
						<td colspan="3">20日締め／翌月20日払い （31日請求書必着）</td>
						<td colspan="2" class="bdl">30日締め／翌月30日払い （10日請求書必着）</td>
						<td colspan="2" class="bdl"></td>
					</tr>
					<tr>
						<th>手形サイト</th>
						<td>120日</td>
						<th>共済金（協力費）</th>
						<td>1％</td>
						<th>請書有無</th>
						<td>あり</td>
						<th>請書 送付方法</th>
						<td>請求書添付</td>
					</tr>
				</table>
				<hr class="pt20">
				<div class="txtCenter noTtl"><button class="buttonA">上記の内容で請求書を発行する</button></div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>