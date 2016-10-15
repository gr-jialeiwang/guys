<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>品番登録／編集 登録済み品番一覧：Guy's System</title>
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
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>品番登録／編集</h2>
						</div>
						<div class="boxRight">
							<a href="edit.php" class="buttonA">品番登録／編集</a>
						</div>
					</div>
					<div class="headingB">
						<h3>表示選択／絞込み</h3>
					</div>
					<table class="tableA">
						<tbody>
							<tr>
								<th class="w100">工事カテゴリー</th>
								<td class="w145">
									<select name="constructionCategory" class="w145">
										<option value="選択しない">選択しない</option>
										<option value="サイディング">サイディング</option>
										<option value="屋根">屋根</option>
										<option value="外構">外構</option>
										<option value="太陽光">太陽光</option>
										<option value="パワーボード">パワーボード</option>
									</select>
								</td>
								<th class="w100">品名・品番検索</th>
								<td class="w175">
									<input type="text" class="w175" name="productName-Number">
								</td>
								<th class="w87">テキスト検索</th>
								<td class="w175">
									<input type="text" class="w175" name="textSearch">
								</td>
								<td class="bdl txtCenter">
									<button class="buttonA">検索</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<div class="container">
				<div class="headingB clearfix">
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
							<th class="w98">工事カテゴリー</th>
							<th>品番登録</th>
							<th class="w120">タイプ</th>
							<th class="w120">名称</th>
							<th class="w120">色名</th>
							<th class="w70">連動品目数</th>
							<th class="w80">登録・更新日</th>
							<th class="w80">登録・更新者</th>
							<th class="w25">詳細</th>
							<th class="w25">削除</th>
						</tr>
					</thead>
				</table>
				<ul class="sortable">
					<li id="1">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w98 txtCenter">サイディング</td>
									<td class="txtLeft">MFX481</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w70 txtCenter">5</td>
									<td class="w80 txtCenter">0000/00/00</td>
									<td class="w80 txtCenter">山本 太郎</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="2">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w98 txtCenter">サイディング</td>
									<td class="txtLeft">MFX481</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w70 txtCenter">5</td>
									<td class="w80 txtCenter">0000/00/00</td>
									<td class="w80 txtCenter">山本 太郎</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="3">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w98 txtCenter">サイディング</td>
									<td class="txtLeft">MFX481</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w70 txtCenter">5</td>
									<td class="w80 txtCenter">0000/00/00</td>
									<td class="w80 txtCenter">山本 太郎</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="4">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w98 txtCenter">サイディング</td>
									<td class="txtLeft">MFX481</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w70 txtCenter">5</td>
									<td class="w80 txtCenter">0000/00/00</td>
									<td class="w80 txtCenter">山本 太郎</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="5">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w98 txtCenter">サイディング</td>
									<td class="txtLeft">MFX481</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w70 txtCenter">5</td>
									<td class="w80 txtCenter">0000/00/00</td>
									<td class="w80 txtCenter">山本 太郎</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="6">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w98 txtCenter">サイディング</td>
									<td class="txtLeft">MFX481</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w70 txtCenter">5</td>
									<td class="w80 txtCenter">0000/00/00</td>
									<td class="w80 txtCenter">山本 太郎</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li id="7">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w98 txtCenter">サイディング</td>
									<td class="txtLeft">MFX481</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w120">□□□□□□□□</td>
									<td class="w70 txtCenter">5</td>
									<td class="w80 txtCenter">0000/00/00</td>
									<td class="w80 txtCenter">山本 太郎</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
									<td class="w25 txtCenter">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
									</td>
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
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>