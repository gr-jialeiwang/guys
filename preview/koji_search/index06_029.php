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
	$("#sortable").sortable({cancel:".disable-sort"}).disableSelection().delegate('input,textarea','click',function(ev){ev.target.focus();});
	$("#sortable_1").sortable({cancel:".disable-sort"}).disableSelection().delegate('input,textarea','click',function(ev){ev.target.focus();});
	$("#sortable_2").sortable({cancel:".disable-sort"}).disableSelection().delegate('input,textarea','click',function(ev){ev.target.focus();});
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
			<div class="container">
				<div class="clearfix">
					<div class="boxLeft">
						<nav id="kojiTab">
							<ul>
								<li class="current">基本情報</li>
								<li><a href="/koji_search/index03_026.php">見積</a></li>
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
			<div class="container">
				<div class="clearfix">
					<div class="boxLeft w371 pt30">
						<table class="tableA">
							<tbody>
								<tr>
									<th>受注日</th>
									<td>
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="orderYear" class="w80">
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
												<select name="orderMonth" class="w72">
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
												<select name="orderDay" class="w72">
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
								<tr>
									<th>着工日</th>
									<td>
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="constructionStartYear" class="w80">
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
												<select name="constructionStartmonth" class="w72">
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
												<select name="constructionStartday" class="w72">
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
								<tr>
									<th>工事完了予定日</th>
									<td>
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="estimatedCompletionYear" class="w80">
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
												<select name="estimatedCompletionMonth" class="w72">
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
												<select name="estimatedCompletionDay" class="w72">
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
								<tr>
									<th>工事完了日</th>
									<td>
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="completionYear" class="w80">
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
												<select name="completionMonth" class="w72">
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
												<select name="completionDay" class="w72">
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
					</div>
					<div class="boxLeft w594 pt30">
						<table class="tableA">
							<tbody>
								<tr>
									<th class="w105">伝言・共有メモ</th>
									<td><textarea name="memo" rows="7" class="w100p h117"></textarea></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload" type="button">登録・更新する</button>
					</div>
				</div>
				<div class="clearfix pt10">
					<div class="boxRight">
						<button class="buttonA">表紙 出力</button>
					</div>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w175">項目／品名</th>
							<th class="w115">仕様／規格／摘要</th>
							<th class="w110">品番</th>
							<th class="w105">発注先</th>
							<th class="w105">メーカー</th>
							<th colspan="2"></th>
						</tr>
					</thead>
				</table>
				<ul id="sortable">
					<li id="1">
						<p class="sortableIcon"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
						<ul id="sortable_1">
							<li id="1_1" class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146">（項目／AUTO）</td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect1_1" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_1" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered1_1" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect1_1" class="w70">
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
														<select name="monthSelect1_1" class="w66">
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
														<select name="daySelect1_1" class="w66">
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
							<li id="1_2">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146">
												<ul class="horizontal">
													<li><p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p></li>
													<li>（項目／AUTO）</li>
												</ul>
											</td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect1_2" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_2" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered1_2" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect1_2" class="w70">
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
														<select name="monthSelect1_2" class="w66">
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
														<select name="daySelect1_2" class="w66">
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
							<li id="1_3">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146"><p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p></td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect1_3" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_3" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered1_3" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect1_3" class="w70">
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
														<select name="monthSelect1_3" class="w66">
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
														<select name="daySelect1_3" class="w66">
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
							<li id="1_4">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146"><p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p></td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect1_4" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_4" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered1_4" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect1_4" class="w70">
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
														<select name="monthSelect1_4" class="w66">
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
														<select name="daySelect1_4" class="w66">
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
					</li>
					<li id="2">
						<p class="sortableIcon"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
						<ul id="sortable_2">
							<li id="2_1" class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146">
												<ul class="horizontal">
													<li></li>
													<li>（項目／AUTO）</li>
												</ul>
											</td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect2_1" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_1" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered2_1" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect2_1" class="w70">
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
														<select name="monthSelect2_1" class="w66">
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
														<select name="daySelect2_1" class="w66">
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
							<li id="2_2">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146"><p><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p></td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect2_2" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_1" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered2_2" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect2_2" class="w70">
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
														<select name="monthSelect2_2" class="w66">
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
														<select name="daySelect2_2" class="w66">
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
							<li id="2_3">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146"><p><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p></td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect2_3" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_1" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered2_3" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect2_3" class="w70">
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
														<select name="monthSelect2_3" class="w66">
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
														<select name="daySelect2_3" class="w66">
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
							<li id="2_4">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146"><p><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p></td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect2_4" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_1" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered2_4" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect2_4" class="w70">
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
														<select name="monthSelect2_4" class="w66">
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
														<select name="daySelect2_4" class="w66">
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
					</li>
					<li id="3">
						<p class="sortableIcon"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
						<ul id="sortable_3">
							<li id="3_1" class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146">
												<ul class="horizontal">
													<li></li>
													<li>（項目／AUTO）</li>
												</ul>
											</td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect2_1" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_1" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered2_1" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect2_1" class="w70">
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
														<select name="monthSelect2_1" class="w66">
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
														<select name="daySelect2_1" class="w66">
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
							<li id="3_2">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146"><p><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p></td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect2_2" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_1" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered2_2" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect2_2" class="w70">
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
														<select name="monthSelect2_2" class="w66">
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
														<select name="daySelect2_2" class="w66">
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
					</li>
					<li id="4">
						<p class="sortableIcon"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
						<ul id="sortable_4">
							<li id="4_1" class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146">
												<ul class="horizontal">
													<li></li>
													<li>（項目／AUTO）</li>
												</ul>
											</td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect2_1" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_1" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered2_1" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect2_1" class="w70">
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
														<select name="monthSelect2_1" class="w66">
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
														<select name="daySelect2_1" class="w66">
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
							<li id="4_2">
								<table class="tableB">
									<tbody>
										<tr>
											<td class="w146"><p><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p></td>
											<td class="w115 txtCenter">（仕様 他／AUTO）</td>
											<td class="w110 txtCenter">（品番／AUTO）</td>
											<td class="w105 txtRight">
												<select name="supplierSelect2_2" class="w105">
													<option>未発注</option>
												</select>
											</td>
											<td class="w105 txtCenter">
												<select name="manufacturerSelect1_1" class="w105">
													<option>選択</option>
												</select>
											</td>
											<td>
												<ul class="dateSortingArea horizontal">
													<li>
														<select name="notOrdered2_2" class="w70">
															<option>未発注</option>
														</select>
													</li>
													<li>
														<select name="yearSelect2_2" class="w70">
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
														<select name="monthSelect2_2" class="w66">
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
														<select name="daySelect2_2" class="w66">
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
					</li>
				</ul>
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