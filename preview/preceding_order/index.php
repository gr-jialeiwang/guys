<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>先行発注 先行発注履歴：Guy's System</title>
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
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>先行発注</h2>
						</div>
					</div>
					<div class="clearfix mb10">
						<div class="boxLeft mr7">
							<a href="/underconstruction.php" class="buttonA">担ぎや（秀賢）</a>
						</div>
						<div class="boxLeft">
							<a href="/underconstruction.php" class="buttonA">現場配送・残材処理依頼</a>
						</div>
					</div>
					<div class="clearfix">
						<div class="boxLeft w401">
							<table class="tableA">
								<tbody>
									<tr>
										<th class="w75">発注書選択</th>
										<td class="w175">
											<select name="source" class="w175">
												<option>選択</option>
											</select>
										</td>
										<td class="bdl txtCenter ">
											<a href="../koji_search/hacchu/kobetsu.php" class="buttonA">発注書作成</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="clearfix pb20">
						<div class="boxRight">
							<button class="btnReload" type="button">登録・更新する</button>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
				<div class="headingB">
					<h3>［先行発注履歴］</h3>
				</div>
				<table class="tableA3 w606">
					<tr>
						<th rowspan="3" class="w124">選択したものに対し</th>
						<td class="bdl">
							<div class="clearfix">
								<div class="boxLeft mr7 w120	">切替登録済 に変更</div>
								<div class="boxLeft">
									<button class="buttonA">実行</button>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<div class="clearfix">
								<div class="boxLeft mr7 w120">切替登録未対応に戻す</div>
								<div class="boxLeft mr7">
									<button class="buttonA">実行</button>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<div class="clearfix">
								<div class="boxLeft mr7 w120">発注書を削除</div>
								<div class="boxLeft mr7">
									<button class="buttonA">実行</button>
								</div>
							</div>
						</td>
					</tr>
				</table>
				<div class="tableStripe2 noTtl">
					<div class="clearfix">
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
								<th class="w108">切り替えステータス</th>
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
								<td class="txtCenter">ABC-001<br>先行発注</td>
								<td>志水商店<br>ニチハ</td>
								<td>本体<br>─</td>
								<td>ＭＦＸ481<br>ＡＢＣ-Ｄ001-001</td>
								<td class="txtCenter">ー<br>ー</td>
								<td class="txtCenter">120<br>枚</td>
								<td class="txtRight">1,700<br>204,000</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter">切替登録 未対応</td>
							</tr>
							<tr>
								<td>
									<div class="checkBox">
										<input type="checkbox" name="order1-1" class="checkOrder" id="order1-1">
										<label for="order1-1"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00<br>金子 靖子</td>
								<td class="txtCenter">ABC-001<br>先行発注</td>
								<td>志水商店<br>ニチハ</td>
								<td>補修液<br>─</td>
								<td>ＪＨＭ5049ＡＰ<br>ＡＢＣ-Ｄ001-002</td>
								<td class="txtCenter">ー<br>ー</td>
								<td class="txtCenter">2<br>セット</td>
								<td class="txtRight">560<br>1,120</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter">切替登録 済</td>
							</tr>
							<tr>
								<td>
									<div class="checkBox">
										<input type="checkbox" name="order1-2" class="checkOrder" id="order1-2">
										<label for="order1-2"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00<br>金子 靖子</td>
								<td class="txtCenter">ABC-001<br>先行発注</td>
								<td>志水商店<br>ニチハ</td>
								<td>本体<br>─</td>
								<td>ＭＦＸ481<br>ＡＢＣ-Ｄ001-001</td>
								<td class="txtCenter">ー<br>ー</td>
								<td class="txtCenter">120<br>枚</td>
								<td class="txtRight">1,700<br>204,000</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter">切替登録 未対応</td>
							</tr>
							<tr>
								<td>
									<div class="checkBox">
										<input type="checkbox" name="order1-3" class="checkOrder" id="order1-3">
										<label for="order1-3"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00<br>金子 靖子</td>
								<td class="txtCenter">ABC-001<br>先行発注</td>
								<td>志水商店<br>ニチハ</td>
								<td>補修液<br>─</td>
								<td>ＪＨＭ5049ＡＰ<br>ＡＢＣ-Ｄ001-002</td>
								<td class="txtCenter">ー<br>ー</td>
								<td class="txtCenter">2<br>セット</td>
								<td class="txtRight">560<br>1,120</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter">切替登録 済</td>
							</tr>
							<tr>
								<td>
									<div class="checkBox">
										<input type="checkbox" name="order1-2" class="checkOrder" id="order1-2">
										<label for="order1-2"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00<br>金子 靖子</td>
								<td class="txtCenter">ABC-001<br>先行発注</td>
								<td>志水商店<br>ニチハ</td>
								<td>本体<br>─</td>
								<td>ＭＦＸ481<br>ＡＢＣ-Ｄ001-001</td>
								<td class="txtCenter">ー<br>ー</td>
								<td class="txtCenter">120<br>枚</td>
								<td class="txtRight">1,700<br>204,000</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter">切替登録 未対応</td>
							</tr>
							<tr>
								<td>
									<div class="checkBox">
										<input type="checkbox" name="order1-3" class="checkOrder" id="order1-3">
										<label for="order1-3"></label>
									</div>
								</td>
								<td class="txtCenter">0000/00/00<br>金子 靖子</td>
								<td class="txtCenter">ABC-001<br>先行発注</td>
								<td>志水商店<br>ニチハ</td>
								<td>補修液<br>─</td>
								<td>ＪＨＭ5049ＡＰ<br>ＡＢＣ-Ｄ001-002</td>
								<td class="txtCenter">ー<br>ー</td>
								<td class="txtCenter">2<br>セット</td>
								<td class="txtRight">560<br>1,120</td>
								<td class="txtCenter"><p class="iconLink"><a href="#"><img src="../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p></td>
								<td class="txtCenter">切替登録 済</td>
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