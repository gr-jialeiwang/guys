<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>工事情報 検索結果：Guy's System</title>
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
			<section class="pageTop pb20">
				<div class="container">
					<nav id="subNavTop" class="navKoji">
						<ul>
							<li class="leftEnd"><a href="../new_koji/index.php">新規工事登録</a></li>
							<li class="currentLink"><a href="index.php">工事情報</a></li>
							<li><a href="../romu-shinsei/index.php">労務申請</a></li>
							<li><a href="../material-hanbai/index.php">材料販売登録</a></li>
							<li><a href="../zaiko/index.php">在庫一覧／登録</a></li>
							<li class="rightEnd"><a href="../material-nohinsho/index.php">材料納品書</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>工事情報</h2>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
				<div class="searchFocusArea">
					<table class="tableA3 noTtl">
						<tbody><tr>
							<th class="pr0">工事ステータス</th>
							<td>
								<select name="constructionStates" class="w228">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
							<th class="pr0">工務店</th>
							<td>
								<select name="constructionCategory" class="w228">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
							<th class="pr0">ガイズ担当者</th>
							<td>
								<select name="representative" class="w228">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
						</tr>
						<tr>
						<th class="pr0">工事カテゴリー</th>
							<td>
								<select name="contractor" class="w228">
									<option value="選択しない">選択しない</option>
									<option value="サイディング">サイディング</option>
									<option value="屋根">屋根</option>
									<option value="外構">外構</option>
									<option value="太陽光">太陽光</option>
									<option value="パワーボード">パワーボード</option>
								</select>
							</td>
							<th class="pr0">工事タイプ</th>
							<td>
								<select name="constructionType" class="w228">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
							<th class="pr0">受注区分</th>
							<td>
								<select name="acceptedOrderType" class="w228">
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
							<th class="pr0">工事番号</th>
							<td>
								<input type="text" class="w225" name="constructionNumber">
							</td>
							<th class="pr0">日付種類</th>
							<td colspan="3">
								<div class="clearfix">
									<div class="boxLeft">
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="yearStart" class="w105">
													<option>種類</option>
													<option value="ご依頼日">ご依頼日</option>
													<option value="受注日">受注日</option>
													<option value="着工日">着工日</option>
													<option value="工事完了予定日">工事完了予定日</option>
													<option value="工事完了日">工事完了日</option>
												</select>
											</li>
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
					</tbody></table>
				</div>
				<div class="container">
					<div class="clearfix">
						<div class="boxRight">
							<div class="pagination">
								<p class="resultStates">000件中1〜20件</p>
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
								<th class="w75">依頼日</th>
								<th class="w87">工事番号</th>
								<th class="w75">工務店</th>
								<th>現場名<br>工事名</th>
								<th class="w87">工事ステータス</th>
								<th class="w101">工事カテゴリー</th>
								<th class="w87">ガイズ担当者</th>
								<th class="w25"></th>
							</tr>
						</thead>
					</table>
					<ul class="sortable">
						<li id="1">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w75 txtCenter">0000/00/00</td>
										<td class="w87 txtCenter">0000A00-00</td>
										<td class="w75 txtCenter"></td>
										<td></td>
										<td class="w87 txtRight"></td>
										<td class="w101 txtCenter"></td>
										<td class="w87 txtCenter"></td>
										<td class="w25 txtCenter">
											<p class="iconLink"><a href="/koji_search/index02_025.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="2">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w75 txtCenter">0000/00/00</td>
										<td class="w87 txtCenter">0000A00-00</td>
										<td class="w75 txtCenter"></td>
										<td></td>
										<td class="w87 txtRight"></td>
										<td class="w101 txtCenter"></td>
										<td class="w87 txtCenter"></td>
										<td class="w25 txtCenter">
											<p class="iconLink"><a href="/koji_search/index02_025.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="3">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w75 txtCenter">0000/00/00</td>
										<td class="w87 txtCenter">0000000-00</td>
										<td class="w75 txtCenter"></td>
										<td></td>
										<td class="w87 txtRight"></td>
										<td class="w101 txtCenter"></td>
										<td class="w87 txtCenter"></td>
										<td class="w25 txtCenter">
											<p class="iconLink"><a href="/koji_search/index02_025.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="4">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w75 txtCenter">0000/00/00</td>
										<td class="w87 txtCenter">0000A00-00</td>
										<td class="w75 txtCenter"></td>
										<td></td>
										<td class="w87 txtRight"></td>
										<td class="w101 txtCenter"></td>
										<td class="w87 txtCenter"></td>
										<td class="w25 txtCenter">
											<p class="iconLink"><a href="/koji_search/index02_025.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="5">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w75 txtCenter">0000/00/00</td>
										<td class="w87 txtCenter">0000A00-00</td>
										<td class="w75 txtCenter"></td>
										<td></td>
										<td class="w87 txtRight"></td>
										<td class="w101 txtCenter"></td>
										<td class="w87 txtCenter"></td>
										<td class="w25 txtCenter">
											<p class="iconLink"><a href="/koji_search/index02_025.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="6">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w75 txtCenter">0000/00/00</td>
										<td class="w87 txtCenter">0000A00-00</td>
										<td class="w75 txtCenter"></td>
										<td></td>
										<td class="w87 txtRight"></td>
										<td class="w101 txtCenter"></td>
										<td class="w87 txtCenter"></td>
										<td class="w25 txtCenter">
											<p class="iconLink"><a href="/koji_search/index02_025.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="7">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w75 txtCenter">0000/00/00</td>
										<td class="w87 txtCenter">0000A00-00</td>
										<td class="w75 txtCenter"></td>
										<td></td>
										<td class="w87 txtRight"></td>
										<td class="w101 txtCenter"></td>
										<td class="w87 txtCenter"></td>
										<td class="w25 txtCenter">
											<p class="iconLink"><a href="/koji_search/index02_025.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="8">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w75 txtCenter">0000/00/00</td>
										<td class="w87 txtCenter">0000A00-00</td>
										<td class="w75 txtCenter"></td>
										<td></td>
										<td class="w87 txtRight"></td>
										<td class="w101 txtCenter"></td>
										<td class="w87 txtCenter"></td>
										<td class="w25 txtCenter">
											<p class="iconLink"><a href="/koji_search/index02_025.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li id="9">
							<table class="tableB">
								<tbody>
									<tr>
										<td class="w75 txtCenter">0000/00/00</td>
										<td class="w87 txtCenter">0000A00-00</td>
										<td class="w75 txtCenter"></td>
										<td></td>
										<td class="w87 txtRight"></td>
										<td class="w101 txtCenter"></td>
										<td class="w87 txtCenter"></td>
										<td class="w25 txtCenter">
											<p class="iconLink"><a href="/koji_search/index02_025.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
					</ul>
					<div class="clearfix pt10">
						<div class="boxRight">
							<div class="pagination">
								<p class="resultStates">000件中1〜20件</p>
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