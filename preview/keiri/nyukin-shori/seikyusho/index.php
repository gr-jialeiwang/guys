<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>入金処理：Guy's System</title>
<link rel="stylesheet" href="../../../css/common.css">
<link rel="stylesheet" href="../../../css/base.css">
<link rel="stylesheet" href="../../../css/page.css">
<link rel="stylesheet" href="../../../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../../../js/function.js"></script>
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
				<h1 id="logo"><a href="../../../top.php"><img src="../../../img/common/logo_header.png" height="39" width="166" alt="GUY’S COMPANY Oparation Management System"></a></h1>
				<div class="boxRight">
					<a href="../../../index.php">ログアウト</a>
					<a href="#" id="menuBtn"><img src="../../../img/common/btn_menu.png" alt="メニューボタン"></a>
				</div>
			</div>
			<nav id="gNav">
				<ul>
					<li><a href="../../../top.php">ホーム</a></li>
					<li><a href="../../../keiri/index.php">経理処理Top</a></li>
					<li><a href="../../../in-house_order/index.php">自社発注</a></li>
					<li><a href="../../../preceding_order/index.php">先行発注</a></li>
					<li><a href="../../../hinban/index.php">品番登録・編集</a></li>
					<li><a href="../../../staff/index.php">社員一覧/登録・編集</a></li>
					<li><a href="../../../company/index.php">企業一覧/登録・編集</a></li>
					<li><a href="../../../client/index.php">取引先ページ新規作成</a></li>
					<li><a href="../../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20">
				<div class="container">
					<nav id="subNavTop">
						<ul>
							<li class="leftEnd"><a href="../../../keiri/seikyusho/index.php">請求書発行</a></li>
							<li class="currentLink"><a href="../index.php">入金処理</a></li>
							<li><a href="../../../keiri/nyukin-yotei/index.php">入金予定表</a></li>
							<li><a href="../../../client/urikake/index.php">売掛情報</a></li>
							<li><a href="../../../keiri/uke-seikyu/index.php">受請求書処理</a></li>
							<li><a href="../../../keiri/shiharai-shori/index.php">支払処理</a></li>
							<li><a href="../../../keiri/shiharai-yotei/index.php">支払予定表</a></li>
							<li><a href="../../../keiri/kaikake/index.php">買掛情報</a></li>
							<li><a href="../../../keiri/shikakekin/index.php">仕掛金一覧</a></li>
							<li><a href="../../../koji_search/nyushukkin/index.php">入出金一覧</a></li>
							<li class="rightEnd"><a href="../../../keiri/jisha-keihi/index.php">自社経費登録</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>入金処理</h2>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w51">入金元</th>
							<td class="w196">○○○不動産</td>
							<th class="w63">請求合計</th>
							<td>00,000,000</td>
							<th class="w115">支払（回収）方法</th>
							<td>集金（現金50%／手形50%）</td>
						</tr>
					</table>
				</div>
			</section>
			<div class="container">
				<div class="noTtl">
					<a href="shori-gamen.php" class="buttonA">チェックした請求書を処理する</a>
				</div>
				<div class="tableStripe">
					<table class="tableB">
						<thead>
							<tr>
								<th class="w25">選択</th>
								<th class="w90">発行日<br>請求書No</th>
								<th class="w102">処理者</th>
								<th class="w108">請求金額</th>
								<th class="w108">書仕入相殺合計</th>
								<th class="w135">その他相殺見込み 合計</th>
								<th class="w108">売上値引</th>
								<th class="w95">実入金見込金額</th>
								<th>不足</th>
							</tr>
						</thead>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w25 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order1" class="checkOrder" id="order1">
										<label for="order1"></label>
									</div>
								</td>
								<td class="w90 txtCenter">0000/00/00<br>0000000</td>
								<td class="w102 txtCenter">小林太郎</td>
								<td class="w108 txtCenter">0,000,000</td>
								<td class="w108 txtRight">0,000,000</td>
								<td class="w135 txtRight">0,000,000</td>
								<td class="w108 txtRight">00,000</td>
								<td class="w95 txtRight">0,000,000</td>
								<td class=" txtRight">0,000,000</td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w25 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order2" class="checkOrder" id="order2">
										<label for="order2"></label>
									</div>
								</td>
								<td class="w90 txtCenter">0000/00/00<br>0000000</td>
								<td class="w102 txtCenter">小林太郎</td>
								<td class="w108 txtCenter">0,000,000</td>
								<td class="w108 txtRight">0,000,000</td>
								<td class="w135 txtRight">0,000,000</td>
								<td class="w108 txtRight">00,000</td>
								<td class="w95 txtRight">0,000,000</td>
								<td class=" txtRight">0,000,000</td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w25 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order3" class="checkOrder" id="order3">
										<label for="order3"></label>
									</div>
								</td>
								<td class="w90 txtCenter">0000/00/00<br>0000000</td>
								<td class="w102 txtCenter">小林太郎</td>
								<td class="w108 txtCenter">0,000,000</td>
								<td class="w108 txtRight">0,000,000</td>
								<td class="w135 txtRight">0,000,000</td>
								<td class="w108 txtRight">00,000</td>
								<td class="w95 txtRight">0,000,000</td>
								<td class=" txtRight">0,000,000</td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w25 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order4" class="checkOrder" id="order4">
										<label for="order4"></label>
									</div>
								</td>
								<td class="w90 txtCenter">0000/00/00<br>0000000</td>
								<td class="w102 txtCenter">小林太郎</td>
								<td class="w108 txtCenter">0,000,000</td>
								<td class="w108 txtRight">0,000,000</td>
								<td class="w135 txtRight">0,000,000</td>
								<td class="w108 txtRight">00,000</td>
								<td class="w95 txtRight">0,000,000</td>
								<td class=" txtRight">0,000,000</td>
							</tr>
						</tbody>
					</table>
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w25 txtCenter">
									<div class="checkBox">
										<input type="checkbox" name="order5" class="checkOrder" id="order5">
										<label for="order5"></label>
									</div>
								</td>
								<td class="w90 txtCenter">0000/00/00<br>0000000</td>
								<td class="w102 txtCenter">小林太郎</td>
								<td class="w108 txtCenter">0,000,000</td>
								<td class="w108 txtRight">0,000,000</td>
								<td class="w135 txtRight">0,000,000</td>
								<td class="w108 txtRight">00,000</td>
								<td class="w95 txtRight">0,000,000</td>
								<td class=" txtRight">0,000,000</td>
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