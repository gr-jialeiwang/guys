<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>社員一覧／登録・編集 社員一覧：Guy's System</title>
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
					<li class="current">社員一覧/登録・編集</li>
					<li><a href="../company/index.php">企業一覧/登録・編集</a></li>
					<li><a href="../client/index.php">取引先ページ新規作成</a></li>
					<li><a href="../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<div class="container">
				<div class="pageTitle clearfix">
					<div class="boxLeft mr8">
						<div class="btnBack"><a href="index.php">戻る</a></div>
					</div>
					<div class="boxLeft">
						<h2>社員一覧／登録・編集</h2>
					</div>
				</div>
				<a href="edit.php" class="buttonA btnRegistration">新規社員登録</a>
				<div class="headingB">
					<h3>社員一覧</h3>
				</div>
			</div>
			<div class="container">
				<table class="tableB">
					<thead>
						<tr>
							<th class="w108">社員ID NO.</th>
							<th class="w107">氏名</th>
							<th class="w371">所属</th>
							<th class="w101">役職</th>
							<th class="w115 txtCenter">電話番号</th>
							<th class="w72 txtCenter">ステータス</th>
							<th class="w28">編集</th>
						</tr>
					</thead>
				</table>
				<ul class="sortable">
					<li id="1">
						<table class="tableB">
							<thead>
								<tr>
									<td class="w108"></td>
									<td class="w107"></td>
									<td class="w371"></td>
									<td class="w101"></td>
									<td class="w115 txtCenter">000-0000-0000</td>
									<td class="w72 txtCenter">在職</td>
									<td class="w28">
										<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</thead>
						</table>
					</li>
					<li id="2">
						<table class="tableB">
							<thead>
								<tr>
									<td class="w108"></td>
									<td class="w107"></td>
									<td class="w371"></td>
									<td class="w101"></td>
									<td class="w115 txtCenter">000-0000-0000</td>
									<td class="w72 txtCenter">退職</td>
									<td class="w28">
										<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</thead>
						</table>
					</li>
					<li id="3">
						<table class="tableB">
							<thead>
								<tr>
									<td class="w108"></td>
									<td class="w107"></td>
									<td class="w371"></td>
									<td class="w101"></td>
									<td class="w115 txtCenter"></td>
									<td class="w72 txtCenter"></td>
									<td class="w28">
										<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</thead>
						</table>
					</li>
					<li id="4">
						<table class="tableB">
							<thead>
								<tr>
									<td class="w108"></td>
									<td class="w107"></td>
									<td class="w371"></td>
									<td class="w101"></td>
									<td class="w115 txtCenter"></td>
									<td class="w72 txtCenter"></td>
									<td class="w28">
										<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</thead>
						</table>
					</li>
					<li id="5">
						<table class="tableB">
							<thead>
								<tr>
									<td class="w108"></td>
									<td class="w107"></td>
									<td class="w371"></td>
									<td class="w101"></td>
									<td class="w115 txtCenter"></td>
									<td class="w72 txtCenter"></td>
									<td class="w28">
										<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</thead>
						</table>
					</li>
					<li id="6">
						<table class="tableB">
							<thead>
								<tr>
									<td class="w108"></td>
									<td class="w107"></td>
									<td class="w371"></td>
									<td class="w101"></td>
									<td class="w115 txtCenter"></td>
									<td class="w72 txtCenter"></td>
									<td class="w28">
										<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</thead>
						</table>
					</li>
					<li id="7">
						<table class="tableB">
							<thead>
								<tr>
									<td class="w108"></td>
									<td class="w107"></td>
									<td class="w371"></td>
									<td class="w101"></td>
									<td class="w115 txtCenter"></td>
									<td class="w72 txtCenter"></td>
									<td class="w28">
										<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</thead>
						</table>
					</li>
					<li id="8">
						<table class="tableB">
							<thead>
								<tr>
									<td class="w108"></td>
									<td class="w107"></td>
									<td class="w371"></td>
									<td class="w101"></td>
									<td class="w115 txtCenter"></td>
									<td class="w72 txtCenter"></td>
									<td class="w28">
										<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</thead>
						</table>
					</li>
					<li id="9">
						<table class="tableB">
							<thead>
								<tr>
									<td class="w108"></td>
									<td class="w107"></td>
									<td class="w371"></td>
									<td class="w101"></td>
									<td class="w115 txtCenter"></td>
									<td class="w72 txtCenter"></td>
									<td class="w28">
										<p class="iconLink"><a href="edit.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</thead>
						</table>
					</li>
				</ul>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>