<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>発注：Guy's System</title>
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
					<li class="current">取引先ページ新規作成</li>
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
							<li class="currentLink"><a href="../index.php">材料販売登録</a></li>
							<li><a href="../../zaiko/index.php">在庫一覧／登録</a></li>
							<li class="rightEnd"><a href="../../material-nohinsho/index.php">材料納品書</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>材料販売個別情報</h2>
						</div>
						<div class="boxRight">
							<button class="buttonA">新規材料販売登録</button>
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
								<li><button class="buttonA">基本情報編集</button></li>
								<li class="ml0"><button class="buttonA">見積書・発注書 一覧</button></li>
								<li><button class="buttonA">ページ削除</button></li>
							</ul>
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
									<li><a href="index.php">見積</a></li>
									<li class="current">発注</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<hr class="gray">
			</div>
			<div class="container noTtl">
				<div class="clearfix">
					<div class="boxLeft w401 pt5">
						<table class="tableA">
							<tbody>
								<tr>
									<th class="w75">発注書選択</th>
									<td class="w175">
										<select name="source" class="w175">
											<option>選択</option>
										</select>
									</td>
									<td class="bdl txtCenter">
										<a href="../../koji_search/hacchu/kobetsu.php" class="buttonA">発注書作成</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="boxRight">
						<button class="btnReload" type="button">登録・更新する</button>
					</div>
				</div>
				<div class="headingB">
					<h3>［材料販売  発注履歴］</h3>
				</div>
				<table class="tableA3 w663">
					<tbody>
						<tr>
							<th rowspan="4" class="w124">選択したものに対し</th>
							<td class="bdl">
								<div class="clearfix">
									<div class="boxLeft mr7">納品状況を一括入力</div>
									<div class="boxLeft mr7">
										<select name="deliveryStatus" class="w100p">
											<option>項目選択</option>
										</select>
									</div>
									<div class="boxLeft">
										<button class="buttonA">実行</button>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<div class="clearfix">
									<div class="boxLeft mr7">納品日を一括入力</div>
									<div class="boxLeft mr7">
										<select name="deliveryYear" class="w105">
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
										<select name="deliveryMonth" class="w72">
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
										<select name="deliveryDay" class="w72">
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
									</div>
									<div class="boxLeft mr7">
										<button class="buttonA">実行</button>
									</div>
									<div class="boxLeft">
										<button class="buttonA">解除</button>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<div class="clearfix">
									<div class="boxLeft mr7">発注書を訂正</div>
									<div class="boxLeft mr7">
										<button class="buttonA">実行</button>
									</div>
									<div class="boxLeft">※受支払済のものは不可。発注書Ｎｏが同じもののみ。</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<div class="clearfix">
									<div class="boxLeft mr7">発注書を削除</div>
									<div class="boxLeft mr7">
										<button class="buttonA">実行</button>
									</div>
									<div class="boxLeft">※受請求書受領済／支払済のものは不可</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="tableStripe2">
					<div class="clearfix noTtl">
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
					<table class="tableB">
						<thead>
							<tr>
								<th class="w16"></th>
								<th class="w75">発注日<br>発注者</th>
								<th class="w70">発注書No<br>発注分類</th>
								<th class="w70">発注先<br>メーカー</th>
								<th class="w102">品名<br>仕様／規格／摘要</th>
								<th>品番<br>発注個別Ｎｏ</th>
								<th class="w53">種別<br>原価項目</th>
								<th class="w40">数量<br>単位</th>
								<th class="w90">単価<br>金額</th>
								<th class="w40">発注書</th>
								<th class="w80">納品状況<br>納品日</th>
								<th class="w90">受領請求書処理<br>支払処理</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="checkBox">
										<input type="checkbox" name="order2-1" class="checkOrder" id="order2-1">
										<label for="order2-1"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00<br>金子 靖子</td>
								<td class="txtCenter">ABC-001<br>発注</td>
								<td>志水商店<br>ニチハ</td>
								<td>本体<br>─</td>
								<td>ＭＦＸ481<br>ＡＢＣ-Ｄ001-001</td>
								<td class="txtCenter">材料<br>本体</td>
								<td class="txtCenter">120<br>枚</td>
								<td class="txtRight">1,700<br>204,000</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter">納品済み<br>0000/00/00</td>
								<td class="txtCenter">未受領<br>未払い</td>
							</tr>
							<tr>
								<td>
									<div class="checkBox">
										<input type="checkbox" name="order1-1" class="checkOrder" id="order1-1">
										<label for="order1-1"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00<br>金子 靖子</td>
								<td class="txtCenter">ABC-001<br>発注</td>
								<td>志水商店<br>ニチハ</td>
								<td>補修液<br>─</td>
								<td>ＪＨＭ5049ＡＰ<br>ＡＢＣ-Ｄ001-002</td>
								<td class="txtCenter">材料<br>本体</td>
								<td class="txtCenter">2<br>セット</td>
								<td class="txtRight">560<br>1,120</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter">納品済み<br>0000/00/00</td>
								<td class="txtCenter">未受領<br>未払い</td>
							</tr>
							<tr>
								<td>
									<div class="checkBox">
										<input type="checkbox" name="order1-2" class="checkOrder" id="order1-2">
										<label for="order1-2"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00<br>金子 靖子</td>
								<td class="txtCenter">ABC-001<br>発注</td>
								<td>志水商店<br>ニチハ</td>
								<td>本体<br>─</td>
								<td>ＭＦＸ481<br>ＡＢＣ-Ｄ001-001</td>
								<td class="txtCenter">材料<br>本体</td>
								<td class="txtCenter">120<br>枚</td>
								<td class="txtRight">1,700<br>204,000</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter">納品済み<br>0000/00/00</td>
								<td class="txtCenter">未受領<br>未払い</td>
							</tr>
							<tr>
								<td>
									<div class="checkBox">
										<input type="checkbox" name="order1-3" class="checkOrder" id="order1-3">
										<label for="order1-3"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00<br>金子 靖子</td>
								<td class="txtCenter">ABC-001<br>発注</td>
								<td>志水商店<br>ニチハ</td>
								<td>補修液<br>─</td>
								<td>ＪＨＭ5049ＡＰ<br>ＡＢＣ-Ｄ001-002</td>
								<td class="txtCenter">材料<br>本体</td>
								<td class="txtCenter">2<br>セット</td>
								<td class="txtRight">560<br>1,120</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter">納品済み<br>0000/00/00</td>
								<td class="txtCenter">未受領<br>未払い</td>
							</tr>
						</tbody>
					</table>
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
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>