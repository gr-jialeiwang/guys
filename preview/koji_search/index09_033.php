<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>見込原価：Guy's System</title>
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
	$("#sortable_3").sortable({cancel:".disable-sort"}).disableSelection().delegate('input,textarea','click',function(ev){ev.target.focus();});

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
									<li><a href="/koji_search/index03_026.php">見積</a></li>
									<li><a href="/koji_search/index07_030.php">初期積算データ</a></li>
									<li><a href="/koji_search/index08_031.php">積算データ成形</a></li>
									<li class="current">見込原価</li>
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
			<div class="container pt30">
				<table class="tableA mb10 w606">
					<tr>
						<th class="w124">見込原価ステータス</th>
						<td>
							<select name="select3" class="w100p">
								<option>選択</option>
							</select>
						</td>
						<th class="w87">データ作成者</th>
						<td>
							<select name="select3" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
				</table>
				<div class="clearfix">
					<div class="boxLeft mr15">
						<table class="tableA">
							<tr>
								<th class="txtRight">見積額／請負額</th>
							</tr>
							<tr>
								<td class="txtRight">00,000,000</td>
							</tr>
						</table>
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tr>
								<td></td>
								<th>原価（材／工）</th>
								<th>粗利金額</th>
								<th>粗利率（%）</th>
							</tr>
							<tr>
								<th>積算算出</th>
								<td class="txtRight">00,000,000</td>
								<td class="bdl txtRight">00,000,000</td>
								<td class="bdl txtRight">00.0</td>
							</tr>
							<tr>
								<th>見込原価</th>
								<td class="txtRight"></td>
								<td class="bdl txtRight"></td>
								<td class="bdl txtRight"></td>
							</tr>
							<tr>
								<th>実行原価</th>
								<td class="txtRight"></td>
								<td class="bdl txtRight"></td>
								<td class="bdl txtRight"></td>
							</tr>
						</table>
					</div>
				</div>
				<table class="tableB mb10">
					<tbody>
						<tr>
							<td class="w48"></td>
							<td>
								<select name="select1" class="w100p">
									<option>項目選択</option>
								</select>
							</td>
							<td>
								<select name="select2" class="w100p">
									<option>項目選択</option>
								</select>
							</td>
							<td>
								<select name="select3" class="w100p">
									<option>項目選択</option>
								</select>
							</td>
							<td>
								<select name="select4" class="w100p">
									<option>項目選択</option>
								</select>
							</td>
							<td>
								<select name="select5" class="w100p">
									<option>項目選択</option>
								</select>
							</td>
							<td>
								<select name="select6" class="w100p">
									<option>項目選択</option>
								</select>
							</td>
							<td>
								<select name="select7" class="w100p">
									<option>項目選択</option>
								</select>
							</td>
							<td>
								<select name="select8" class="w100p">
									<option>項目選択</option>
								</select>
							</td>
							<td>
								<select name="select9" class="w100p">
									<option>項目選択</option>
								</select>
							</td>
						<tr>
						<tr class="bdn">
							<th rowspan="2" class="bdb">積算算出</th>
							<td class="txtRight bdb_dot">0,000,000</td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot bdr"></td>
						</tr>
						<tr class="bdn">
							<td class="txtRight bdb">00.0</td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb bdr"></td>
						</tr>
						<tr class="bdn">
							<th rowspan="2" class="bdb">見込原価</th>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot bdr"></td>
						</tr>
						<tr class="bdn">
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb bdr"></td>
						</tr>
						<tr class="bdn">
							<th rowspan="2" class="bdb">実行原価</th>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot"></td>
							<td class="txtRight bdb_dot bdr"></td>
						</tr>
						<tr class="bdn">
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb"></td>
							<td class="txtRight bdb bdr"></td>
						</tr>
					</tbody>
				</table>
				<hr>
				<ul id="sortable" class="ui-sortable noTtl bdtFirst">
					<li id="1" class="ui-sortable-handle" style="position: relative;">
						<p class="sortableIcon"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
						<ul id="sortable_1" class="ui-sortable">
							<li class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<th class="thBlue">防水紙</th>
											<th class="w25">小計</th>
											<td class="w100">86,780</td>
											<th class="w60">備考／注記</th>
											<td colspan="7"><input type="text" class="w100p" name="" value="タイベックシルバー差額 Ｂ表制作の上、請求"></td>
										</tr>
										<tr>
											<td colspan="11" class="clearfix por">
												<div class="boxLeft"><a href="#" class="btnIncrease mb10 bottom">+</a></div>
												<div class="boxRight">
													<button class="btnReload" type="button">登録・更新する</button>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<table class="tableB">
									<tbody>
										<tr>
											<th colspan="3" class="w176">品名</th>
											<th class="w184">仕様／規格／摘要</th>
											<th class="w100">品番</th>
											<th>種別</th>
											<th>数量</th>
											<th class="w40">単位</th>
											<th>単価</th>
											<th class="w90">金額</th>
											<th class="w75">表紙表示</th>
											<th class="w25">削除</th>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="1_1" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="防水紙">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="デュポンタイベックシルバー">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												材料
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="5">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="本">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="8,100">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="40,500">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="表示">表示</option>
													<option value="非表示">非表示</option>
													<option>項目選択</option>
												</select>
											</td>
											<td class="txtCenter w25">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="1_2" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="2" class="w176" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="防水紙工事">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="166㎡、テープ込み">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												工事
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="160.0">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="㎡">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="191">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="30,560">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="非表示">非表示</option>
													<option>項目選択</option>
													<option value="表示">表示</option>
												</select>
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="1_3" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="2" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="捨コーキング 変成シリコーン">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="東郊産業、333ｍｌ">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												材料
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="2">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="箱">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="3,800">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="7,600">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="非表示">非表示</option>
													<option>項目選択</option>
													<option value="表示">表示</option>
												</select>
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="1_4" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="2" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="配送費">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="東郊産業">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												材料
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="2">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="式">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="250">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="500">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="非表示">非表示</option>
													<option>項目選択</option>
													<option value="表示">表示</option>
												</select>
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="1_5" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="2" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="サッシ廻りコーキング工事">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												工事
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="1">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="式">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="7,620">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="7,620">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="非表示">非表示</option>
													<option>項目選択</option>
													<option value="表示">表示</option>
												</select>
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
					</li>
					<li id="2" class="ui-sortable-handle" style="position: relative;">
						<p class="sortableIcon"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
						<ul id="sortable_2" class="ui-sortable">
							<li class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<th class="thBlue">胴縁</th>
											<th class="w25">小計</th>
											<td class="w100">79,840</td>
											<th class="w60">備考／注記</th>
											<td colspan="7"><input type="text" class="w100p" name="" value="志水商店 住建開発事業部発注"></td>
										</tr>
										<tr>
											<td colspan="11" class="clearfix por">
												<div class="boxLeft"><a href="#" class="btnIncrease mb10 bottom">+</a></div>
												<div class="boxRight">
													<button class="btnReload" type="button">登録・更新する</button>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<table class="tableB">
									<tbody>
										<tr>
											<th colspan="3" class="w176">品名</th>
											<th class="w184">仕様／規格／摘要</th>
											<th class="w100">品番</th>
											<th>種別</th>
											<th>数量</th>
											<th class="w40">単位</th>
											<th>単価</th>
											<th class="w90">金額</th>
											<th class="w75">表紙表示</th>
											<th class="w25">削除</th>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="2_1" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="栂防腐胴縁半貫 104本">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="（15＊45）3ｍ">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												材料
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="100.0">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="本">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="200">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="20,000">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="表示">表示</option>
													<option value="非表示">非表示</option>
													<option>項目選択</option>
												</select>
											</td>
											<td class="txtCenter w25">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="2_2" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="2" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="栂防腐胴縁貫 93本-15本＝78本">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="（15＊90）3ｍ">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												材料
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="80.0">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="本">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="360">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="28,800">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="非表示">非表示</option>
													<option>項目選択</option>
													<option value="表示">表示</option>
												</select>
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="2_3" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="2" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="ブルーシート">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="志水">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												材料
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="1.0">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="枚">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="480">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="480">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="非表示">非表示</option>
													<option>項目選択</option>
													<option value="表示">表示</option>
												</select>
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="2_4" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="2" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="胴縁工事（住友単価）">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="166㎡">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												工事
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="160">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="㎡">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="191">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="30.560">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="非表示">非表示</option>
													<option>項目選択</option>
													<option value="表示">表示</option>
												</select>
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
					</li>
					<li id="3" class="ui-sortable-handle" style="position: relative;">
						<p class="sortableIcon"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
						<ul id="sortable_3" class="ui-sortable">
							<li class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<th class="thBlue">防水紙</th>
											<th class="w25">小計</th>
											<td class="w100">86,780</td>
											<th class="w60">備考／注記</th>
											<td colspan="7"><input type="text" class="w100p" name="" value="タイベックシルバー差額 Ｂ表制作の上、請求"></td>
										</tr>
										<tr>
											<td colspan="11" class="clearfix por">
												<div class="boxLeft"><a href="#" class="btnIncrease mb10 bottom">+</a></div>
												<div class="boxRight">
													<button class="btnReload" type="button">登録・更新する</button>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<table class="tableB">
									<tbody>
										<tr>
											<th colspan="3" class="w176">品名</th>
											<th class="w184">仕様／規格／摘要</th>
											<th class="w100">品番</th>
											<th>種別</th>
											<th>数量</th>
											<th class="w40">単位</th>
											<th>単価</th>
											<th class="w90">金額</th>
											<th class="w75">表紙表示</th>
											<th class="w25">削除</th>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_1" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="本体">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="ニチハ、14ＭＧ">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="ＭＦＸ481">
											</td>
											<td>
												材料
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="124.0">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="枚">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="1,700">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="210,800">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="表示">表示</option>
													<option value="非表示">非表示</option>
													<option>項目選択</option>
												</select>
											</td>
											<td class="txtCenter w25">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_2" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="2" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="釘">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="カラー">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												材料
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="70.0">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="袋">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="120">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="8,400">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="非表示">非表示</option>
													<option>項目選択</option>
													<option value="表示">表示</option>
												</select>
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_3" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="2" class="w176">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft">
														<input type="text" class="w145" name="" value="低汚染補修液セット">
													</div>
												</div>
											</td>
											<td class="w184">
												<input type="text" class="w100p" name="" value="表地2＋目地">
											</td>
											<td class="w100">
												<input type="text" class="w100p" name="" value="">
											</td>
											<td>
												材料
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="3.0">
											</td>
											<td class="w40">
												<input type="text" class="w100p txtCenter" name="" value="セット">
											</td>
											<td>
												<input type="text" class="w100p txtRight" name="" value="560">
											</td>
											<td class="w90">
												<input type="text" class="w100p txtRight" name="" value="1,680">
											</td>
											<td class="w75">
												<select name="select4" class="w100p">
													<option value="非表示">非表示</option>
													<option>項目選択</option>
													<option value="表示">表示</option>
												</select>
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
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
</body>
</html>