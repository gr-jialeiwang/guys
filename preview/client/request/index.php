<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>依頼／受注履歴：Guy's System</title>
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
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>取引先／新規登録・編集</h2>
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
						<li class="leftEnd"><a href="../index.php">基本情報</a></li>
						<li><a href="../hanbai-keiri.php">販売系経理情報</a></li>
						<li><a href="../shiire-keiri.php">仕入系経理情報</a></li>
						<li><a href="../hacchu/index.php">発注書設定</a></li>
						<li><a href="../worker/index.php">作業員情報</a></li>
						<li class="rightEnd"><a href="../tatekae/index.php">立替金情報</a></li>
						<li class="leftEnd currentLink"><a href="index.php">依頼／受注履歴</a></li>
						<li><a href="../seikyusho/index.php">請求書一覧</a></li>
						<li><a href="../urikake/index.php">売掛金情報</a></li>
						<li><a href="../minyukin/index.php">未入金・不足工事一覧</a></li>
						<li><a href="../shiire-rireki/index.php">仕入／発注履歴</a></li>
						<li class="rightEnd"><a href="../kaikake/index.php">買掛金情報</a></li>
					</ul>
				</nav>
				<div class="searchFocusArea">
					<table class="tableA3">
						<tr>
							<th class="pr0">工事ステータス</th>
							<td class="w216">
								<select name="constructionStates" class="w220">
									<option value="選択しない">選択しない</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
							<th class="pr0">工事カテゴリー</th>
							<td class="w216">
								<select name="constructionCategory" class="w220">
									<option value="選択しない">選択しない</option>
									<option value="サイディング">サイディング</option>
									<option value="屋根">屋根</option>
									<option value="外構">外構</option>
									<option value="太陽光">太陽光</option>
									<option value="パワーボード">パワーボード</option>
								</select>
							</td>
							<th class="pr0">工事タイプ</th>
							<td class="w228">
								<select name="constructionType" class="w228">
									<option value="選択しない">選択しない</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
						</tr>
						<tr>
							<th class="pr0">ガイズ担当者</th>
							<td>
								<select name="representative" class="w100p">
									<option value="選択しない">選択しない</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
							<th class="pr0">請求状況</th>
							<td>
								<select name="askingMoney" class="w100p">
									<option value="選択しない">選択しない</option>
									<option value="未請求">未請求</option>
									<option value="一部請求">一部請求</option>
									<option value="請求済">請求済</option>
									<option value="相殺請求済">相殺請求済</option>
									<option value="ー">ー</option>
								</select>
							</td>
							<th class="pr0">入金状況</th>
							<td>
								<select name="payment" class="w100p">
									<option value="選択しない">選択しない</option>
									<option value="入金待ち">入金待ち</option>
									<option value="入金済">入金済</option>
									<option value="相殺入金済">相殺入金済</option>
									<option value="未回収">未回収</option>
									<option value="不足">不足</option>
								</select>
							</td>
						</tr>
						<tr>
							<th class="pr0">期間項目</th>
							<td  colspan="5">
								<div class="clearfix">
									<div class="boxLeft mr15">
										<select name="selectingDate" class="w210">
											<option value="期間項目選択">期間項目選択</option>
											<option value="依頼日">依頼日</option>
											<option value="受注日">受注日</option>
											<option value="着工日">着工日</option>
											<option value="工事完了予定日">工事完了予定日</option>
											<option value="工事完了日">工事完了日</option>
										</select>
									</div>
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
											<li class="divider">〜</li>
											<li>
												<select name="yearEnd" class="w105">
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
												<select name="monthEnd" class="w72">
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
												<select name="dayEnd" class="w72">
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
							<th class="pr0">現場名表示</th>
							<td colspan="5">
								<select name="constructionSite" class="w124">
									<option value="通常">通常</option>
									<option value="請求現場名">請求現場名</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="6" class="txtCenter">
								<button class="buttonA">上記で表示を絞り込む </button>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</form>
		<div class="container">
			<div class="clearfix">
				<p class="textAnchor buildReport mt7"><a href="#">チェックした工事の合算完了報告書を作成</a></p>
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
						<th class="w14">
							<div class="checkBox">
								<input type="checkbox" name="order01" class="checkAll" id="order01">
								<label for="order01"></label>
							</div>
						</th>
						<th class="w73">依頼日<br>受注日</th>
						<th class="w76">工事番号<br>ガイズ担当者</th>
						<th class="w326">現場名<br>工事名</th>
						<th class="w110">工事ステータス<br>（納品ステータス）</th>
						<th class="w72">着工日</th>
						<th class="w72">工事完了日<br>（納品日）</th>
						<th class="w48">請求</th>
						<th class="w48">入金</th>
						<th class="w30">詳細</th>
					</tr>
				</thead>
			</table>
			<ul class="sortable">
				<li id="1">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w14 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order02" class="checkOrder" id="order02">
										<label for="order02"></label>
									</div>
								</td>
								<td class="w73 txtCenter">0000/00/00<br>0000/00/00</td>
								<td class="w76"><a href="../../koji_search/index02_025.php" class="blue">0000/00/00</a><br>□□□ □□</td>
								<td class="w326">□□□□□□□□□□□□□□様邸<br>○○○○○○○○○サイディング工事</td>
								<td class="w110">完了／請求OK</td>
								<td class="w72">0000/00/00</td>
								<td class="w72">0000/00/00</td>
								<td class="w48">請求済</td>
								<td class="w48">入金待ち</td>
								<td class="w30 txtCenter">
									<p class="iconLink"><a href="../../koji_search/index02_025.php"><img src="../../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="2">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w14 txtCenter"></td>
								<td class="w73 txtCenter">0000/00/00<br>-</td>
								<td class="w76"></td>
								<td class="w326"></td>
								<td class="w110">未受注</td>
								<td class="w72"></td>
								<td class="w72"></td>
								<td class="w48">-</td>
								<td class="w48">-</td>
								<td class="w30 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="3">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w14 txtCenter"></td>
								<td class="w73 txtCenter"></td>
								<td class="w76"></td>
								<td class="w326"></td>
								<td class="w110"></td>
								<td class="w72"></td>
								<td class="w72"></td>
								<td class="w48">一部請求</td>
								<td class="w48">入金済</td>
								<td class="w30 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="4">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w14 txtCenter"></td>
								<td class="w73 txtCenter"></td>
								<td class="w76"></td>
								<td class="w326"></td>
								<td class="w110"></td>
								<td class="w72"></td>
								<td class="w72"></td>
								<td class="w48">未請求</td>
								<td class="w48">未回収</td>
								<td class="w30 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="5">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w14 txtCenter"></td>
								<td class="w73 txtCenter"></td>
								<td class="w76"></td>
								<td class="w326"></td>
								<td class="w110"></td>
								<td class="w72"></td>
								<td class="w72"></td>
								<td class="w48"></td>
								<td class="w48">不足</td>
								<td class="w30 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="6">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w14 txtCenter"></td>
								<td class="w73 txtCenter"></td>
								<td class="w76"></td>
								<td class="w326"></td>
								<td class="w110"></td>
								<td class="w72"></td>
								<td class="w72"></td>
								<td class="w48"></td>
								<td class="w48"></td>
								<td class="w30 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="7">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w14 txtCenter"></td>
								<td class="w73 txtCenter"></td>
								<td class="w76"></td>
								<td class="w326"></td>
								<td class="w110"></td>
								<td class="w72"></td>
								<td class="w72"></td>
								<td class="w48"></td>
								<td class="w48"></td>
								<td class="w30 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="8">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w14 txtCenter"></td>
								<td class="w73 txtCenter"></td>
								<td class="w76"></td>
								<td class="w326"></td>
								<td class="w110"></td>
								<td class="w72"></td>
								<td class="w72"></td>
								<td class="w48"></td>
								<td class="w48"></td>
								<td class="w30 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="9">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w14 txtCenter"></td>
								<td class="w73 txtCenter"></td>
								<td class="w76"></td>
								<td class="w326"></td>
								<td class="w110"></td>
								<td class="w72"></td>
								<td class="w72"></td>
								<td class="w48"></td>
								<td class="w48"></td>
								<td class="w30 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
			</ul>
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
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>