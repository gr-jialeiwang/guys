<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>基本情報：Guy's System</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/page.css">
<link rel="stylesheet" href="../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../js/function.js"></script>
<!-- jquery-ui -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
	$("#sortable").sortable().disableSelection();
	$("#sortable_1").sortable().disableSelection();
	$("#sortable_2").sortable().disableSelection();
	$("#submit").click(function() {
		var result = $("#sortable").sortable("toArray");
		$("#result").val(result);
		var result_1 = $("#sortable_1").sortable("toArray");
		$("#result_1").val(result_1);
		var result_2 = $("#sortable_2").sortable("toArray");
		$("#result_2").val(result_2);
		$("form").submit();
	});
});
</script>
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
			<section class="pageTop">
				<div class="container">
					<nav id="subNavTop" class="navKoji">
						<ul>
							<li class="leftEnd"><a href="../new_koji/index.php">新規工事登録</a></li>
							<li class="currentLink"><a href="index.php">工事情報</a></li>
							<li><a href="../romu-shinsei/index.php">労務申請・承認</a></li>
							<li><a href="../material-hanbai/index.php">材料販売登録</a></li>
							<li><a href="../zaiko/index.php">在庫一覧/登録</a></li>
							<li class="rightEnd"><a href="../material-nohinsho/index.php">材料納品書照合</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>工事個別情報</h2>
						</div>
						<div class="boxLeft mr15">
							<dl>
								<dt>[ID]</dt>
								<dd>000000</dd>
							</dl>
						</div>
						<div class="boxLeft mr15">
							<dl>
								<dt>[工事登録日]</dt>
								<dd>0000/00/00</dd>
							</dl>
						</div>
						<div class="boxLeft mr15">
							<dl>
								<dt>[初期登録者]</dt>
								<dd>小林太郎</dd>
							</dl>
						</div>
						<div class="boxLeft">
							<dl>
								<dt>[最終更新者]</dt>
								<dd>佐藤一郎</dd>
							</dl>
						</div>
						<div class="boxRight">
							<p class="textAnchor resetClientData"><a href="#">このページを削除する</a></p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="clearfix">
						<div class="boxLeft w770">
							<table class="tableA">
								<tr class="bdt">
									<th>ご依頼日</th>
									<td>0000年00月00日</td>
									<th class="w105">工務店</th>
									<td>◎◎◎工務店</td>
								</tr>
								<tr>
									<th>工事番号</th>
									<td>00A00-00</td>
									<th class="w105">工務店 ご担当者</th>
									<td>□□□□</td>
								</tr>
								<tr>
									<th>工事ステータス</th>
									<td>
										<select name="constructionState" class="w100p">
											<option value=""></option>
										</select>
									</td>
									<th rowspan="2" class="w105">工務店 経理規定</th>
									<td rowspan="2">
										20日納め／翌月20日払い（31日請求書必着）<br>
										30日納め／翌月30日払い（10日請求書必着）
									</td>
								</tr>
								<tr>
									<th>現場名</th>
									<td>●●●様邸</td>
								</tr>
								<tr>
									<th>請求現場名</th>
									<td>
										<ul class="horizontal">
											<li>
												<input class="w206 mr7" name="constructionName" type="text">
											</li>
											<li>
											<div class="radioBtn">
												<input type="radio" name="sameConstructionSite" id="sameConstructionSite">
												<label for="sameConstructionSite">同上</label>
											</div>
											</li>
										</ul>
									</td>
									<th class="w105">ガイズ担当者</th>
									<td>小林太郎（000-0000-0000）</td>
								</tr>
								<tr>
									<th>工事名</th>
									<td>□□□□□工事</td>
									<th class="w105">工事カテゴリー</th>
									<td>サイディング</td>
								</tr>
								<tr>
									<th>現場住所</th>
									<td>□□□市◎◎◎区○○○ 0-00-0</td>
									<th class="w105">工事タイプ</th>
									<td></td>
								</tr>
								<tr>
									<th>現場状況車種</th>
									<td>
										<select name="siteSituation" class="w100p">
											<option value=""></option>
										</select>
									</td>
									<th class="w105">受注区分</th>
									<td>元請</td>
								</tr>
							</table>
						</div>
						<div class="boxRight w200">
							<ul class="horizontal kojiBtnWrap">
								<li><button class="buttonA kojiBtn modal" href="#inline-modal">積算CSV<br>ファイル<br>インポート</button></li>
								<li><button class="buttonA kojiBtn modal" href="#inline-modal2">各種ファイル<br>アップロード</button></li>
								<li><a href="#" class="buttonA kojiBtn">工事情報複製</a></li>
								<li><a href="/new_koji/index.php" class="buttonA kojiBtn">初期登録情報<br>編集</a></li>
								<li><a href="#" class="buttonA">工事台帳 出力</a></li>
								<li><a href="/koji_search/upload/list.php" class="buttonA">アップロードファイル 一覧</a></li>
								<li><a href="/koji_search/index11_036.php" class="buttonA">見積書・発注書・完了報告 一覧</a></li>
								<li><a href="/koji_search/nyushukkin/index.php" class="buttonA">入出金 一覧</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix pb20 mb30">
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
									<li><a href="/koji_search/index02_025.php">基本情報</a></li>
									<li class="current"><a href="/koji_search/index03_026.php">見積</a></li>
									<li><a href="/koji_search/index07_030.php">初期積算データ</a></li>
									<li><a href="/koji_search/index08_031.php">積算データ成形</a></li>
									<li><a href="/koji_search/index09_033.php">見込原価</a></li>
									<li><a href="/koji_search/hacchu/index.php">発注情報</a></li>
									<li><a href="/koji_search/jikogenka/index.php">実行原価</a></li>
									<li><a href="/koji_search/index12_037.php">工事経費</a></li>
								</ul>
							</nav>
						</div>
						<div class="boxRight pt5">
							<button class="buttonA">完了報告書 発行</button>
						</div>
					</div>
				</div>
				<hr class="gray">
			</div>
			<div class="container">
				<div class="clearfix mb20">
					<div class="boxLeft w167 pt30">
						<table class="tableA">
							<tbody>
								<tr>
									<td colspan="2"><button class="buttonA">見積テンプレート呼出</button></td>
								</tr>
								<tr>
									<th class="w66">請求回数</th>
									<td>
										<select name="orderCount" class="w60">
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
									<td class="w66">
										<select name="taxRate" class="w66">
											<option>8%</option>
											<option value="10">10%</option>
										</select>
									</td>
									<th class="w66">金額表記</th>
									<td>
										<select name="priceWrite" class="w100">
											<option>税別表記</option>
											<option value="税抜表記">税抜表記</option>
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
							</tbody>
						</table>
					</div>
				</div>
				<div class="headingB mb10">
					<h3>見積合算（請負額総計※税込）</h3>
				</div>
				<table class="tableA mb10">
					<tr>
						<th class="w87">請負金額上限</th>
						<td><input type="text" class="w238" name="contractAmount"></td>
					</tr>
				</table>
				<table class="tableA2 mb20">
					<tr>
						<th class="w75">小計</th>
						<td class="txtRight">00,000,000</td>
						<th class="w75">値引き</th>
						<td class="txtRight">00,000,000</td>
						<th class="w75">税抜合計</th>
						<td class="txtRight">00,000,000</td>
						<th class="w75">消費税</th>
						<td class="txtRight">00,000,000</td>
						<th class="w75">税込み合計</th>
						<td class="txtRight">00,000,000</td>
					</tr>
				</table>
				<hr>
				<div class="headingC mb10">
					<h3>見積1</h3>
				</div>
				<table class="tableA mb10">
					<tr>
						<th class="w107">見積1ステータス</th>
						<td>
							<select name="estimate1State" class="w175">
								<option>選択</option>
							</select>
						</td>
						<td colspan="4" class="bdl">
							<div class="clearfix">
								<ul class="horizontal boxRight">
									<li class="mr7">
										<p class="textAnchor buildReport mt7"><a href="#" id="btnEstimate">見積詳細作成</a></p>
									</li>
									<li class="mr7">
										<p class="textAnchor buildReport mt7"><a href="#" id="btnAdditional">追加見積作成</a></p>
									</li>
									<li><button class="buttonA">見積書発行</button></li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<th>見積作成者</th>
						<td class="w175">
							<select name="estimateCreator" class="w175">
								<option>選択</option>
							</select>
						</td>
						<th class="w63">発行日</th>
						<td class="w260">
							<ul class="dateSortingArea horizontal">
								<li>
									<select name="estimateYear" class="w102">
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
									<select name="estimateMonth" class="w72">
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
									<select name="estimateDay" class="w72 mr0">
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
						<th class="w75">有効期限</th>
						<td>
							<select name="expiringDate" class="w175">
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>配送方法</th>
						<td>
							<select name="deliveryMethod" class="w175">
								<option>選択</option>
							</select>
						</td>
						<th>受渡期日</th>
						<td>
							<select name="deliveryDate" class="w175">
								<option>選択</option>
							</select>
						</td>
						<th>御支払条件</th>
						<td>
							<select name="paymentTerms" class="w175">
								<option>選択</option>
							</select>
						</td>
					</tr>
				</table>
				<table class="tableA2 mb20">
					<tr>
						<th class="w75">小計</th>
						<td class="txtRight">00,000,000</td>
						<th class="w75">値引き</th>
						<td class="txtRight">00,000,000</td>
						<th class="w75">税抜合計</th>
						<td class="txtRight">00,000,000</td>
						<th class="w75">消費税</th>
						<td class="txtRight">00,000,000</td>
						<th class="w75">税込み合計</th>
						<td class="txtRight">00,000,000</td>
					</tr>
				</table>
				<div class="clearfix mb10">
					<div class="boxLeft">
						<a href="#" class="btnIncrease mr7">+</a>
						<a href="#" class="btnDecrease">+</a>
					</div>
					<div class="boxRight">
						<a href="#" class="gray">入力内容リセット</a>
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
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks1" value="1.上記本体価格基礎工事は、本体材工、シーリング材工を含みます。"></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks2" value="2.上記単価は70㎡以上の物件とさせていただきます。70㎡末満は、別途お打合せとさせていただきます。"></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks3" value="3.施工に必要な電力、水道、足場等は、無償貸与願います。"></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks4_1" value="4.特殊工事(当社標準施工外施工等)、狭小地(3方が隣接地と1m以内)、小運搬(横持ち等）、高台、"></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks4_2" value="　本見積り項目にないもの(部材)等は別途、お打合せとさせていただきます。"></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks5_1" value="5.万ー、図面変更等により、施工金額に増減が発生した場合、工事終了後に清算させていただく場合がございます。"></td>
							</tr>
							<tr>
								<td class="w100p"><input type="text" class="w100p fz11" name="estimateRemarks5_2" value="　なお、雨天、商品在庫切れ等で、納期が変更になることがございます。ご了承願います。"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload mb0" type="button">登録・更新する</button>
					</div>
				</div>
				<section id="estimateDetail">
					<div class="clearfix">
						<div class="boxLeft">
							<div class="headingC mb10">
								<h3>見積1／見積詳細</h3>
							</div>
						</div>
						<div class="boxRight pt40">
							<p class="textAnchor resetClientData"><a href="#">この詳細見積書を削除する</a></p>
						</div>
					</div>
					<table class="tableA mb10">
						<tr>
							<th class="w135">詳細見積1ステータス</th>
							<td class="w175">
								<select name="estimate1StateDetail" class="w175">
									<option>選択</option>
									<option value="税抜表記">税抜表記</option>
								</select>
							</td>
							<th class="w51">発行日</th>
							<td class="w258">
								<ul class="dateSortingArea horizontal">
									<li>
										<select name="estimateDetailYear" class="w100">
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
										<select name="estimateDetailMonth" class="w72">
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
										<select name="estimateDetailDay" class="w72 mr0">
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
							<td class="txtRight bdl">
								<button class="buttonA">詳細見積書発行</button>
							</td>
						</tr>
					</table>
					<table class="tableA2 mb20">
						<tr>
							<th class="w75">小計</th>
							<td class="txtRight">00,000,000</td>
							<th class="w75">値引き</th>
							<td class="txtRight">00,000,000</td>
							<th class="w75">税抜合計</th>
							<td class="txtRight">00,000,000</td>
							<th class="w75">消費税</th>
							<td class="txtRight">00,000,000</td>
							<th class="w75">税込み合計</th>
							<td class="txtRight">00,000,000</td>
						</tr>
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
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName1"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail1"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber1"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_1" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail1"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail1"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="2">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName2"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail2"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber2"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_2" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail2"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail2"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="3">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName3"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail3"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber3"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_3" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail3"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail3"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="4">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName4"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail4"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber4"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_4" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail4"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail4"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="5">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName5"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail5"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber5"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_5" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail5"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail5"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="6">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName6"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail6"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber6"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_6" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail6"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail6"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="7">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName7"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail7"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber7"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_7" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail7"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail7"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="8">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName8"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail8"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber8"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_8" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail8"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail8"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="9">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName9"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail9"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber9"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_9" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail9"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail9"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="10">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName10"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail10"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber10"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_10" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail10"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail10"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="11">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName11"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail11"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber11"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_11" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail11"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail11"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="12">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName12"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail12"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber12"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_12" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail12"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail12"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="13">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName13"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail13"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber13"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_13" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail13"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail13"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="14">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName14"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail14"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber14"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_14" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail14"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail14"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="15">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName15"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail15"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber15"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_15" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail15"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail15"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="16">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName16"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail16"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber16"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_16" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail16"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail16"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="17">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName17"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail17"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber17"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_17" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail17"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail17"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="18">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName18"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail18"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber18"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_18" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail18"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail18"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="19">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName19"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail19"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber19"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_19" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail19"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail19"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="20">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="estimateDetailName20"></td>
										<td><input type="text" class="w100p" name="standardSummaryDetail20"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateDetailNumber20"></td>
										<td class="w80">
											<select name="supplierSelectDetail1_20" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceDetail20"></td>
										<td class="w102"><input type="text" class="w100p" name="priceDetail20"></td>
									</tr>
								</tbody>
							</table>
						</li>
					</ul>
					<div class="clearfix pt20 mb10">
						<div class="boxLeft">
							<a href="#" class="btnIncrease mr7">+</a>
							<a href="#" class="btnDecrease">+</a>
						</div>
					</div>
					<div class="headingD mb10">
						<h3>備考</h3>
					</div>
					<div class="w594 tableStripe2">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w100p"><input type="text" class="w100p" name="estimateDETAILRemarks1"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p" name="estimateDETAILRemarks2"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p" name="estimateDETAILRemarks3"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p" name="estimateDETAILRemarks4"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p" name="estimateDETAILRemarks5"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p" name="estimateDETAILRemarks6"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p" name="estimateDETAILRemarks7"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload mb0" type="button">登録・更新する</button>
						</div>
					</div>
				</section>
				<section id="additionalEstimate">
					<div class="clearfix">
						<div class="boxLeft">
							<div class="headingC mb10">
								<h3>追加見積1</h3>
							</div>
						</div>
						<div class="boxRight pt40">
							<p class="textAnchor resetClientData"><a href="#">この追加見積書を削除する</a></p>
						</div>
					</div>
					<table class="tableA mb10">
						<tbody>
							<tr>
								<th class="w133">追加見積1ステータス</th>
								<td>
									<select name="additionalEstimate1State" class="w175">
										<option>選択</option>
										<option value="税抜表記">税抜表記</option>
									</select>
								</td>
								<td colspan="4" class="bdl">
									<div class="clearfix">
										<ul class="horizontal boxRight">
											<li class="mr7">
												<p class="textAnchor buildReport mt7"><a href="#">追加見積作成</a></p>
											</li>
											<li><button class="buttonA">追加見積書発行</button></li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<th>見積作成者</th>
								<td class="w175">
									<select name="additionalEstimateCreator" class="w175">
										<option>選択</option>
										<option value="税抜表記">税抜表記</option>
									</select>
								</td>
								<th class="w63">発行日</th>
								<td class="w260">
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="additionalEstimateYear" class="w102">
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
											<select name="additionalEstimateMonth" class="w72">
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
											<select name="additionalEstimateDay" class="w72 mr0">
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
								<th class="w75">有効期限</th>
								<td>
									<select name="expiringDateAdditional" class="w175">
										<option>選択</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>配送方法</th>
								<td>
									<select name="deliveryMethodAdditional" class="w175">
										<option>選択</option>
										<option value="税抜表記">税抜表記</option>
									</select>
								</td>
								<th>受渡期日</th>
								<td>
									<select name="deliveryDateAdditional" class="w175">
										<option>選択</option>
										<option value="税抜表記">税抜表記</option>
									</select>
								</td>
								<th>御支払条件</th>
								<td>
									<select name="paymentTermsAdditional" class="w175">
										<option>選択</option>
										<option value="税抜表記">税抜表記</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="tableA2 mb20">
						<tbody>
							<tr>
								<th class="w75">小計</th>
								<td class="txtRight">00,000,000</td>
								<th class="w75">値引き</th>
								<td class="txtRight">00,000,000</td>
								<th class="w75">税抜合計</th>
								<td class="txtRight">00,000,000</td>
								<th class="w75">消費税</th>
								<td class="txtRight">00,000,000</td>
								<th class="w75">税込み合計</th>
								<td class="txtRight">00,000,000</td>
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
										<td class="w250"><input type="text" class="w100p" name="additionalEstimateName1"></td>
										<td><input type="text" class="w100p" name="standardSummaryAdditional1"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateNumberAdditional1"></td>
										<td class="w80">
											<select name="supplierSelectAdditional1_1" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceAdditional1"></td>
										<td class="w102"><input type="text" class="w100p" name="priceAdditional1"></td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="2">
							<table class="tableB">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="additionalEstimateName2"></td>
										<td><input type="text" class="w100p" name="standardSummaryAdditional2"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateNumberAdditional2"></td>
										<td class="w80">
											<select name="supplierSelectAdditional1_2" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceAdditional2"></td>
										<td class="w102"><input type="text" class="w100p" name="priceAdditional2"></td>
									</tr>
								</tbody>
							</table>
							</table>
						</li>
						<li id="3">
							<table class="tableB">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="additionalEstimateName3"></td>
										<td><input type="text" class="w100p" name="standardSummaryAdditional3"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateNumberAdditional3"></td>
										<td class="w80">
											<select name="supplierSelectAdditional1_3" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceAdditional3"></td>
										<td class="w102"><input type="text" class="w100p" name="priceAdditional3"></td>
									</tr>
								</tbody>
							</table>
							</table>
						</li>
						<li id="4">
							<table class="tableB">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="additionalEstimateName4"></td>
										<td><input type="text" class="w100p" name="standardSummaryAdditional4"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateNumberAdditional4"></td>
										<td class="w80">
											<select name="supplierSelectAdditional1_4" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceAdditional4"></td>
										<td class="w102"><input type="text" class="w100p" name="priceAdditional4"></td>
									</tr>
								</tbody>
							</table>
							</table>
						</li>
						<li id="5">
							<table class="tableB">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="additionalEstimateName5"></td>
										<td><input type="text" class="w100p" name="standardSummaryAdditional5"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateNumberAdditional5"></td>
										<td class="w80">
											<select name="supplierSelectAdditional1_5" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceAdditional5"></td>
										<td class="w102"><input type="text" class="w100p" name="priceAdditional5"></td>
									</tr>
								</tbody>
							</table>
							</table>
						</li>
						<li id="6">
							<table class="tableB">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="additionalEstimateName6"></td>
										<td><input type="text" class="w100p" name="standardSummaryAdditional6"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateNumberAdditional6"></td>
										<td class="w80">
											<select name="supplierSelectAdditional1_6" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceAdditional6"></td>
										<td class="w102"><input type="text" class="w100p" name="priceAdditional6"></td>
									</tr>
								</tbody>
							</table>
							</table>
						</li>
						<li id="7">
							<table class="tableB">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="additionalEstimateName7"></td>
										<td><input type="text" class="w100p" name="standardSummaryAdditional7"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateNumberAdditional7"></td>
										<td class="w80">
											<select name="supplierSelectAdditional1_7" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceAdditional7"></td>
										<td class="w102"><input type="text" class="w100p" name="priceAdditional7"></td>
									</tr>
								</tbody>
							</table>
							</table>
						</li>
						<li id="8">
							<table class="tableB">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="additionalEstimateName8"></td>
										<td><input type="text" class="w100p" name="standardSummaryAdditional8"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateNumberAdditional8"></td>
										<td class="w80">
											<select name="supplierSelectAdditional1_8" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceAdditional8"></td>
										<td class="w102"><input type="text" class="w100p" name="priceAdditional8"></td>
									</tr>
								</tbody>
							</table>
							</table>
						</li>
						<li id="9">
							<table class="tableB">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="additionalEstimateName9"></td>
										<td><input type="text" class="w100p" name="standardSummaryAdditional9"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateNumberAdditional9"></td>
										<td class="w80">
											<select name="supplierSelectAdditional1_9" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceAdditional9"></td>
										<td class="w102"><input type="text" class="w100p" name="priceAdditional9"></td>
									</tr>
								</tbody>
							</table>
							</table>
						</li>
						<li id="10">
							<table class="tableB">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w250"><input type="text" class="w100p" name="additionalEstimateName10"></td>
										<td><input type="text" class="w100p" name="standardSummaryAdditional10"></td>
										<td class="w80"><input type="text" class="w100p" name="estimateNumberAdditional10"></td>
										<td class="w80">
											<select name="supplierSelectAdditional1_10" class="w100p">
												<option>選択</option>
											</select>
										</td>
										<td class="w80"><input type="text" class="w100p" name="unitPriceAdditional10"></td>
										<td class="w102"><input type="text" class="w100p" name="priceAdditional10"></td>
									</tr>
								</tbody>
							</table>
							</table>
						</li>
					</ul>
					<div class="clearfix pt20 mb10">
						<div class="boxLeft">
							<a href="#" class="btnIncrease mr7">+</a>
							<a href="#" class="btnDecrease">+</a>
						</div>
					</div>
					<div class="headingD mb10">
						<h3>見積諸条件</h3>
					</div>
					<div class="w594 tableStripe2">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" value="◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎" name="additionalEstimateTerms1"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateTerms2"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateTerms3"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateTerms4"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateTerms5"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateTerms6"></td>
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
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateRemarks1"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateRemarks2"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateRemarks3"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateRemarks4"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateRemarks5"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateRemarks6"></td>
								</tr>
								<tr>
									<td class="w100p"><input type="text" class="w100p fz11" name="additionalEstimateRemarks7"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload mb0" type="button">登録・更新する</button>
						</div>
					</div>
				</section>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
	<div style="display:none;">
		<div id="inline-modal">
			<div id="modal" class="modalImport">
				<p class="mb20"><b>積算 CSV ファイルインポート</b></p>
				<div class="mb10">
					<button class="buttonA w90">参照</button>
				</div>
				<p class="mb20">◯◯◯◯（File_Name）◯◯◯◯</p>
				<form action="/koji_search/index07_030.php" method="post">
					<div class="mb30">
						<button class="buttonA w90">インポート</button>
					</div>
				</form>
				<a href="#" class="closeWindow"><img src="/img/common/btn_closewindow.png" height="15" width="14" alt="閉じる"></a>
			</div>
		</div>
	</div>
	<div style="display:none;">
		<div id="inline-modal2">
			<div id="modal" class="modalUpload">
				<p class="mb20"><b>各種ファイルアップロード</b></p>
				<p class="mb10">〈データタイトル〉</p>
				<div class="mb10">
					現場地図
				</div>
				<div class="mb10">
					<button class="buttonA w100">参照</button>
				</div>
				<p class="mb20"><input type="text" class="w100p fz11" name="uploadFileName"></p>
				<div class="mb30">
					<a class="buttonA w100" href="/koji_search/upload/list.php">アップロード</a>
				</div>
				<a href="#" class="closeWindow"><img src="/img/common/btn_closewindow.png" height="15" width="14" alt="閉じる"></a>
			</div>
		</div>
	</div>
</body>
</html>