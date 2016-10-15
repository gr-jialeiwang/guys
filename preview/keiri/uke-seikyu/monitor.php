<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>受請求処理：Guy's System</title>
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
							<li class="currentLink"><a href="index.php">受請求書処理</a></li>
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
						<div class="boxLeft mr20">
							<h2>受請求処理</h2>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w80">請求元</th>
							<td class="w167">○○○不動産</td>
							<th class="w80">表示単位</th>
							<td class="w167">
								<select name="unit" class="w167">
									<option>選択</option>
								</select>
							</td>
							<th class="w63">備考／メモ</th>
							<td class="w210"><input type="text" name="memo" class="w100p"></td>
						</tr>
					</table>
				</div>
			</section>
			<div class="container">
				<div class="headingB">
					<h3>材料発注の部／受請求（＋）</h3>
				</div>
				<div class="tableStripe2">
					<table class="tableB">
						<tr>
							<th class="w75">発注日 <br>納品日</th>
							<th class="w80">発注先 <br>ガイズ発注者</th>
							<th class="w84">工事番号 <br>工事カテゴリー</th>
							<th class="w84">発注書No <br>納品ステータス</th>
							<th class="w66">発注個別No</th>
							<th>品名 <br>品番</th>
							<th>仕様・規格・摘要</th>
							<th class="w60">単価</th>
							<th class="w40">数量 <br>税率</th>
							<th class="w28">単位</th>
							<th class="w63">税抜小計 <br>消費税</th>
							<th class="w30">
								<ul class="horizontal">
									<li>処理</li>
									<li class="ml5">
										<div class="checkBox">
											<input type="checkbox" name="material1" class="checkAll" id="material1">
											<label for="material1"></label>
										</div>
									</li>
								</ul>
							</th>
						</tr>
					</table>
					<table class="tableB">
						<tr>
							<td class="w75 txtCenter">0000/00/00 <br>0000/00/00</td>
							<td class="w80">○○○○商事 <br>小林太郎</td>
							<td class="w84 txtCenter"><a href="#" class="blue">0000A00-00</a><br>サイディング</td>
							<td class="w84 txtCenter">0000000-00 <br>完全納品完了</td>
							<td class="w66">0000000</td>
							<td>□□□□□□□□□ <br>0000ABC00-011</td>
							<td>00㎜□□□ <br>ホワイトグレー</td>
							<td class="w60 txtRight">1,000</td>
							<td class="w40 txtCenter">100<br><input type="texttxtRight " class="txtRight w20" name="materialConsumptionTax1" value="8">％</td>
							<td class="w28 txtCenter">本</td>
							<td class="w63 txtRight">1,000,000<br>80,000</td>
							<td class="w30 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="material2" class="checkOrder" id="material2">
									<label for="material2"></label>
								</div>
							</td>
						</tr>
					</table>
					<table class="tableB">
						<tr>
							<td class="w75 txtCenter"></td>
							<td class="w80"></td>
							<td class="w84 txtCenter"></td>
							<td class="w84 txtCenter">0000000-00 <br>一部納品</td>
							<td class="w66"></td>
							<td></td>
							<td></td>
							<td class="w60 txtRight"></td>
							<td class="w40"><input type="text" class="txtRight w20" name="materialConsumptionTax2" value="8">％</td>
							<td class="w28 txtCenter"></td>
							<td class="w63 txtRight"></td>
							<td class="w30 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="material3" class="checkOrder" id="material3">
									<label for="material3"></label>
								</div>
							</td>
						</tr>
					</table>
				</div>
				<div class="headingB">
					<h3>工事発注の部／受請求（＋）</h3>
				</div>
				<div class="tableStripe2">
					<table class="tableB">
						<tbody>
							<tr>
								<th class="w75">発注日 <br>納品日</th>
								<th class="w80">発注先 <br>ガイズ発注者</th>
								<th class="w84">工事番号 <br>工事カテゴリー</th>
								<th class="w84">発注書No <br>納品ステータス</th>
								<th class="w66">発注個別No</th>
								<th>現場名 <br>発注工事名</th>
								<th class="w60">単価</th>
								<th class="w40">数量 <br>税率</th>
								<th class="w28">単位</th>
								<th class="w63">税抜小計 <br>消費税</th>
								<th class="w30">
									<ul class="horizontal">
										<li>処理</li>
										<li class="ml5">
											<div class="checkBox">
												<input type="checkbox" name="construction1" class="checkAll" id="construction1">
												<label for="construction1"></label>
											</div>
										</li>
									</ul>
								</th>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w75 txtCenter">0000/00/00 <br>0000/00/00</td>
								<td class="w80">○○○○商事 <br>小林太郎</td>
								<td class="w84 txtCenter"><a href="#" class="blue">0000A00-00</a><br>サイディング</td>
								<td class="w84 txtCenter">0000000-00 <br>完全納品完了</td>
								<td class="w66">0000000</td>
								<td>○○○様邸 <br>□□□□□□□□工事</td>
								<td class="w60 txtRight">1,000</td>
								<td class="w40 txtCenter">100<br><input type="text" class="txtRight w20" name="constructionConsumptionTax1" value="8">％</td>
								<td class="w28 txtCenter">本</td>
								<td class="w63 txtRight">1,000,000<br>80,000</td>
								<td class="w30 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="construction2" class="checkOrder" id="construction2">
										<label for="construction2"></label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w75 txtCenter"></td>
								<td class="w80"></td>
								<td class="w84 txtCenter"></td>
								<td class="w84 txtCenter"></td>
								<td class="w66"></td>
								<td>○○○様邸 <br>□□□□□□□□工事</td>
								<td class="w60 txtRight"></td>
								<td class="w40"><input type="text" class="txtRight w20" name="constructionConsumptionTax2" value="8">％</td>
								<td class="w28 txtCenter"></td>
								<td class="w63 txtRight"></td>
								<td class="w30 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="construction3" class="checkOrder" id="construction3">
										<label for="construction3"></label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="headingB">
					<h3>その他の部／受請求（＋）</h3>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w80">日付</th>
							<th class="">御請求内容</th>
							<th class="w120">受請求金額 <br>消費税</th>
							<th class="w210">受請求摘要</th>
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
								<a href="#" class="btnIncrease">+</a>
							</td>
						</tr>
						<tr>
							<td class="txtCenter">
								<input type="text" name="otherDate2" class="w100p">
							</td>
							<td>
								<input type="text" name="otherContents2" class="w100p">
							</td>
							<td>
								<input type="text" name="otherBillingAmount2" class="w100p mb7"><br>
								<input type="text" name="consumptionTax2" class="w100p">
							</td>
							<td class="txtCenter">
								<input type="text" name="otherSummary2" class="w100p">
							</td>
							<td class="txtCenter">
								<a href="#" class="btnDecrease">+</a>
							</td>
						</tr>
					</tbody>
				</table>
				<hr class="pt20">
				<div class="headingB">
					<h3>各合計／掛仕入の部</h3>
				</div>
				<table class="tableA mb10">
					<tbody>
						<tr>
							<th class="w75">受請求合計</th>
							<td>
								<input type="text" name="totalBillingTaxIn" class="w100p" placeholder="※AUTO">
							</td>
							<th class="w60">消費税</th>
							<td>
								<input type="text" name="consumptionTax" class="w100p" placeholder="※AUTO">
							</td>
							<th class="w105">受請求 税込合計</th>
							<td>
								<input type="text" name="totalBilling" class="w100p" placeholder="※AUTO">
							</td>
							<th class="w105">消費税端数処理</th>
							<td>
								<a href="#" class="btnIncrease mr7">+</a>
								<div class="boxLeft mr7">
									<input class="w40 txtCenter" name="amountPaid" value="0" type="text">
								</div>
								<a href="#" class="btnDecrease">+</a>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="clearfix">
					<div class="boxLeft pt10 w25">
						┣
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tbody>
								<tr>
									<th class="w127">材料の部 請求合計</th>
									<td>
										<input type="text" name="materialBilling" class="w100p" placeholder="※AUTO">
									</td>
									<th>うち消費税</th>
									<td>
										<input type="text" name="materialConsumptionTax" class="w100p" placeholder="※AUTO">
									</td>
									<th>税込合計</th>
									<td>
										<input type="text" name="materialBilling" class="w100p" placeholder="※AUTO">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft pt10 w25">
						┣
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tbody>
								<tr class="bdtn">
									<th class="w127">工事の部 請求合計</th>
									<td>
										<input type="text" name="constructionBilling" class="w100p" placeholder="※AUTO">
									</td>
									<th>うち消費税</th>
									<td>
										<input type="text" name="constructionConsumptionTax" class="w100p" placeholder="※AUTO">
									</td>
									<th>税込合計</th>
									<td>
										<input type="text" name="constructionBillingTaxIn" class="w100p" placeholder="※AUTO">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft pt10 w25">
						┗
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tbody>
								<tr class="bdtn">
									<th class="w127">その他の部 請求合計</th>
									<td>
										<input type="text" name="otherBilling" class="w100p" placeholder="※AUTO">
									</td>
									<th>うち消費税</th>
									<td>
										<input type="text" name="otherConsumptionTax" class="w100p" placeholder="※AUTO">
									</td>
									<th>税込合計</th>
									<td>
										<input type="text" name="otherBillingTaxIn" class="w100p" placeholder="※AUTO">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<hr class="pt20">
				<div class="headingB mb10">
					<h3>掛仕入 相殺の部／（－）　※企業名単位で表示されます。 受請求書の処理が終了しているもののみ表示されます。</h3>
				</div>
				<table class="tableA2 mb20 w250">
					<tbody>
						<tr>
							<th class="w100">掛売 相殺合計</th>
							<td class="txtRight"><input type="text" class="w100p" name="kakeuriTotalOffset" value="※AUTO"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w90">掛売 <br>相殺選択</th>
							<th class="">企業名</th>
							<th class="w230">事業所名</th>
							<th class="w115">請求処理日 <br>請求書Ｎｏ</th>
							<th class="w70">処理者</th>
							<th class="w90">請求金額合計</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="kakeuri1" class="checkOrder" id="kakeuri1">
									<label for="kakeuri1"></label>
								</div>
							</td>
							<td>□□□□□□□□□</td>
							<td>□□□□□□□□□</td>
							<td class="txtCenter">0000000<br><a href="#" class="blue">0000000</a></td>
							<td class="txtCenter">小林太郎</td>
							<td class="txtRight">0,000,000</td>
						</tr>
						<tr>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="kakeuri2" class="checkOrder" id="kakeuri2">
									<label for="kakeuri2"></label>
								</div>
							</td>
							<td>□□□□□□□□□</td>
							<td>□□□□□□□□□</td>
							<td class="txtCenter">0000000<br><a href="#" class="blue">0000000</a></td>
							<td class="txtCenter">小林太郎</td>
							<td class="txtRight">0,000,000</td>
						</tr>
					</tbody>
				</table>
				<div class="headingB mb10">
					<h3>立替金 相殺の部／（－）</h3>
				</div>
				<table class="tableA2 mb20 w250">
					<tbody>
						<tr>
							<th class="w105">立替金 相殺合計</th>
							<td class="txtRight"><input type="text" class="w100p" name="tatekaeTotalOffset" value="※AUTO"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w30">相殺選択</th>
							<th class="w100">立替項目</th>
							<th class="w230">日付</th>
							<th class="w115">金額</th>
							<th class="w70">出金科目</th>
							<th>備考・詳細</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="tatekae1" class="checkOrder" id="tatekae1">
									<label for="tatekae1"></label>
								</div>
							</td>
							<td class="txtCenter">材料立替</td>
							<td class="txtCenter">0000/00/00</td>
							<td class="txtRight">000,000</td>
							<td class="txtCenter">現金</td>
							<td>□□□□□□、□□□□□□□□。</td>
						</tr>
						<tr>
							<td class="txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="tatekae2" class="checkOrder" id="tatekae2">
									<label for="tatekae2"></label>
								</div>
							</td>
							<td class="txtCenter">前払い金</td>
							<td class="txtCenter">0000/00/00</td>
							<td class="txtRight">000,000</td>
							<td class="txtCenter">現金</td>
							<td>□□□□□□、□□□□□□□□。</td>
						</tr>
					</tbody>
				</table>
				<div class="headingB">
					<h3>その他 相殺の部（登録デフォルト値）］／（－）</h3>
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
					<h3>想定 その他相殺（その他｜項目名・金額）</h3>
				</div>
				<table class="tableA">
					<tbody>
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
								<select name="otherExpectedOffset2" class="w100">
									<option>選択</option>
								</select>
							</td>
							<th class="w63">相殺金額</th>
							<td><input type="text" name="offsetAmount2" class="w100p"></td>
						</tr>
					</tbody>
				</table>
				<div class="headingB mb10">
					<h3>実支払予定セット</h3>
				</div>
				<ul class="horizontal">
					<li>
						<table class="tableA">
							<tbody>
								<tr>
									<th class="txtCenter">今回受請求額</th>
									<td><input type="text" name="uke-seikyu" class="w95" placeholder="※AUTO"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li class="pt8 ml5">ー</li>
					<li class="pt8 mr5">（</li>
					<li>
						<table class="tableA2">
							<tbody>
								<tr>
									<th>掛売 相殺合計</th>
									<td><input type="text" name="kakeuriOffset" class="w95" placeholder="※AUTO"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li class="pt8">＋</li>
					<li>
						<table class="tableA2">
							<tbody>
								<tr>
									<th>立替金 相殺合計</th>
									<td><input type="text" name="advancesPaidOffset" class="w95" placeholder="※AUTO"></td>
								</tr>
						</tbody>
						</table>
					</li>
					<li class="pt8 mr5">＋</li>
					<li>
						<table class="tableA2">
							<tbody>
								<tr>
									<th>その他 相殺合計</th>
									<td><input type="text" name="otherOffset" class="w95" placeholder="※AUTO"></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li class="pt8 ml5">）</li>
				</ul>
				<ul class="horizontal">
					<li class="pt15 mr7">=</li>
					<li class="pt8">
						<table class="tableA">
							<tbody>
								<tr>
									<th>実支払額 金額</th>
									<td><input type="text" name="paidAmount" class="w95" placeholder="※Default Auto"></td>
								</tr>
						</tbody>
						</table>
					</li>
				</ul>
				<table class="tableA noTtl w210">
					<tbody>
						<tr>
							<th class="txtCenter w87">支払予定回数</th>
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
				<table class="tableA noTtl">
					<tbody>
						<tr class="bdt">
							<th class="txtCenter w124">支払予定日</th>
							<td class="w263">
								<ul class="dateSortingArea horizontal">
									<li>
										<select name="yearExpectedPayment" class="w105">
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
										<select name="monthExpectedPayment" class="w72">
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
										<select name="dayExpectedPayment" class="w72 mr0">
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
							<th class="w63">出金科目</th>
							<td><input type="text" name="accountTitle1" class="w100p" placeholder="※Default Auto"></td>
							<th class="w63">実支払 <br>予定金額</th>
							<td><input type="text" name="expectedTransferAmount1" class="w100p" placeholder="※Default Auto"></td>
							<td class="bdl w45"></td>
						</tr>
						<tr>
							<td colspan="2"></td>
							<th class="w63">出金科目</th>
							<td><input type="text" name="accountTitle2" class="w100p" placeholder="※Default Auto"></td>
							<th class="w63">実支払 <br>予定金額</th>
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
				<div class="headingB">
					<h3>経理情報</h3>
				</div>
				<table class="tableA">
					<tr>
						<th class="w63">支払方法</th>
						<td>銀行振込</td>
						<th class="w100">締め日／支払日</th>
						<td>20日締め／翌々月20日払い</td>
						<th class="w111">共済金（協力費）</th>
						<td>1％</td>
					</tr>
				</table>
				<hr class="pt20">
				<div class="txtCenter noTtl">
					<a href="/underconstruction.php" class="buttonA buttonALarge mr7">上記の内容で受領請求書を発行する<br>【協力会社向け】</a>
					<a href="/underconstruction.php" class="buttonA buttonALarge mr7">上記の内容で支払通知書を発行する<br>【協力会社向け】</a>
					<button class="buttonA buttonALarge vb">上記の内容で受領請求書を処理する<br></button>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>