
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>材料販売登録 材料販売履歴一覧：Guy's System</title>
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
					<li class="currentLink"><a href="index.php">取引先ページ新規作成</a></li>
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
							<li><a href="../koji_search/index.php">工事情報</a></li>
							<li><a href="../romu-shinsei/index.php">労務申請</a></li>
							<li class="current">材料販売登録</li>
							<li><a href="../zaiko/index.php">在庫一覧／登録</a></li>
							<li class="rightEnd"><a href="../material-nohinsho/index.php">材料納品書</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>材料販売登録</h2>
						</div>
						<div class="boxRight">
							<a href="material-edit.php" class="buttonA">新規材料販売登録</a>
						</div>
					</div>
					<div class="headingB">
						<h3>材料販売履歴一覧</h3>
					</div>
					<table class="tableA">
						<tbody>
							<tr>
								<th class="w124">材料販売ステータス</th>
								<td class="w145">
									<select name="materialSellState" class="w145">
										<option value="すべて">すべて</option>
									</select>
								</td>
								<th class="w87">請求処理状況</th>
								<td class="w175">
									<select name="billingState" class="w145">
										<option value="すべて">すべて</option>
									</select>
								</td>
								<th class="w87">材料販売番号</th>
								<td class="w175">
									<input type="text" class="w175" name="textSearch">
								</td>
								<td class="bdl txtCenter">
									<button class="buttonA">絞込み</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<div class="container noTtl">
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
							<th class="w75">ご依頼日<br>材料販売番号</th>
							<th class="w125">販売先 企業名<br>販売先 事業所名</th>
							<th class="w210">販売材料名（品名	）</th>
							<th>販売材料ステータス</th>
							<th class="w80">単価</th>
							<th class="w101">販売合計<br>消費税</th>
							<th class="w87">請求処理状況</th>
							<th class="w25">詳細</th>
						</tr>
					</thead>
				</table>
				<ul class="sortable">
					<li id="1">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w75 txtCenter">0000/00/00 <br>0000000</td>
									<td class="w125">○○○○○不動産<br>□□□営業所</td>
									<td class="w210">○○○○○○○</td>
									<td>納品済み／請求OK</td>
									<td class="w80 txtRight">0,000,000</td>
									<td class="w101 txtRight">0,000,000<br>00,000</td>
									<td class="w87 txtCenter">請求書 未発行</td>
									<td class="w25 txtCenter">
										<p class="iconLink"><a href="material-info/index.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="2">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w75 txtCenter">0000/00/00 <br>0000000</td>
									<td class="w125">○○○○○不動産<br>□□□営業所</td>
									<td class="w210">○○○○○○○</td>
									<td>納品済み／請求OK</td>
									<td class="w80 txtRight">0,000,000</td>
									<td class="w101 txtRight">0,000,000<br>00,000</td>
									<td class="w87 txtCenter">請求済み</td>
									<td class="w25 txtCenter">
										<p class="iconLink"><a href="material-info/index.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="3">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w75 txtCenter">0000/00/00 <br>0000000</td>
									<td class="w125">○○○○○不動産<br>□□□営業所</td>
									<td class="w210">○○○○○○○</td>
									<td>納品済み／請求OK</td>
									<td class="w80 txtRight">0,000,000</td>
									<td class="w101 txtRight">0,000,000<br>00,000</td>
									<td class="w87 txtCenter">入金済み</td>
									<td class="w25 txtCenter">
										<p class="iconLink"><a href="material-info/index.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
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
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>