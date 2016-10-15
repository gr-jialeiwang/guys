<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>企業一覧／登録・編集 企業名検索：Guy's System</title>
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
					<li class="current">企業一覧/登録・編集</li>
					<li><a href="../client/index.php">取引先ページ新規作成</a></li>
					<li><a href="../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20 mb30">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>企業名 新規登録/編集</h2>
						</div>
						<div class="boxRight">
							<p class="textAnchor resetClientData"><a href="#">この取引先を削除する</a></p>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w130">正式名称</th>
							<td>
								<input type="text" name="officialName" class="w335" value="ア">
							</td>
							<th class="w70">コードNo</th>
							<td><input type="text" class="w145" name="codeNumber"></td>
							<th>読みカナ分類</th>
							<td>
								<select name="constructionStates" class="w154">
									<option value="ア">ア</option>
									<option value="カ">カ</option>
									<option value="サ">サ</option>
									<option value="タ">タ</option>
									<option value="ナ">ナ</option>
									<option value="ハ">ハ</option>
									<option value="マ">マ</option>
									<option value="ヤ">ヤ</option>
									<option value="ラ">ラ</option>
									<option value="ワ">ワ</option>
								</select>
							</td>
						</tr>
					</table>
					<table class="tableA">
						<tr>
							<th class="w130">システム内 表示社名</th>
							<td class="w238"><input type="text" name="clientNameInSystem" class="w234"></td>
							<th class="w45">備考</th>
							<td colspan="3"><input type="text" name="note" class="w100p"></td>
						</tr>
					</table>
					<table class="tableA">
						<tr>
							<td class="txtCenter"><button class="buttonA buttonALarge">上記で登録(修正)する</button></td>
						</tr>
					</table>
				</div>
			</section>
			<div class="container">
				<div class="searchFocusArea">
					<table class="tableA">
						<tr>
							<th>企業名検索</th>
							<td>
								<input type="text" name="searchClientName" class="inputType01 w238 mr7"><button class="btnSearch">検索</button>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</form>
		<div class="container">
			<div class="headingB clearfix">
				<h3 class="boxLeft">登録済み企業名</h3>
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
						<th class="w70">登録日<br>最終更新日</th>
						<th class="w70">登録者<br>最終更新者</th>
						<th class="w66">コードNo</th>
						<th class="w238">正式名称</th>
						<th class="w154">システム内 表示社名</th>
						<th class="w238">備考</th>
						<th class="w28">編集</th>
						<th class="w28">削除</th>
					</tr>
				</thead>
			</table>
			<ul class="sortable">
				<li id="1">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70">0000/00/00<br>0000/00/00</td>
								<td class="w70 txtCenter">小林太郎<br>佐藤一郎</td>
								<td class="w66 txtCenter">001</td>
								<td class="w238">□□□□□□□□□□□</td>
								<td class="w154">□□□□□□</td>
								<td class="w238"></td>
								<td class="w28 txtCenter">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_detail02.png" height="28" width="28" alt="編集"></a></p>
								</td>
								<td class="w28 txtCenter">
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
								<td class="w70">0000/00/00<br>0000/00/00</td>
								<td class="w70 txtCenter">小林太郎<br>佐藤一郎</td>
								<td class="w66 txtCenter">002</td>
								<td class="w238">□□□□□□□□□□□</td>
								<td class="w154">□□□□□□</td>
								<td class="w238"></td>
								<td class="w28 txtCenter">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_detail02.png" height="28" width="28" alt="編集"></a></p>
								</td>
								<td class="w28 txtCenter">
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
								<td class="w70">0000/00/00<br>0000/00/00</td>
								<td class="w70 txtCenter">小林太郎<br>佐藤一郎</td>
								<td class="w66 txtCenter">003</td>
								<td class="w238">□□□□□□□□□□□</td>
								<td class="w154">□□□□□□</td>
								<td class="w238"></td>
								<td class="w28 txtCenter">
									<p class="iconLink"><a href="#"><img src="../img/common/icon_detail02.png" height="28" width="28" alt="編集"></a></p>
								</td>
								<td class="w28 txtCenter">
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
								<td class="w70"></td>
								<td class="w70"></td>
								<td class="w66"></td>
								<td class="w238"></td>
								<td class="w154"></td>
								<td class="w238"></td>
								<td class="w28"></td>
								<td class="w28"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="5">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70"></td>
								<td class="w70"></td>
								<td class="w66"></td>
								<td class="w238"></td>
								<td class="w154"></td>
								<td class="w238"></td>
								<td class="w28"></td>
								<td class="w28"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="6">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70"></td>
								<td class="w70"></td>
								<td class="w66"></td>
								<td class="w238"></td>
								<td class="w154"></td>
								<td class="w238"></td>
								<td class="w28"></td>
								<td class="w28"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="7">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70"></td>
								<td class="w70"></td>
								<td class="w66"></td>
								<td class="w238"></td>
								<td class="w154"></td>
								<td class="w238"></td>
								<td class="w28"></td>
								<td class="w28"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="8">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70"></td>
								<td class="w70"></td>
								<td class="w66"></td>
								<td class="w238"></td>
								<td class="w154"></td>
								<td class="w238"></td>
								<td class="w28"></td>
								<td class="w28"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="9">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w70"></td>
								<td class="w70"></td>
								<td class="w66"></td>
								<td class="w238"></td>
								<td class="w154"></td>
								<td class="w238"></td>
								<td class="w28"></td>
								<td class="w28"></td>
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