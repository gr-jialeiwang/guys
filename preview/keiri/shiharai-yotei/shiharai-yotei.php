<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>支払予定表：Guy's System</title>
<link rel="stylesheet" href="../../css/common.css">
<link rel="stylesheet" href="../../css/base.css">
<link rel="stylesheet" href="../../css/page.css">
<link rel="stylesheet" href="../../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../../js/function.js"></script>
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
					<li><a href="../../client/index.php">取引先ページ新規作成</a></li>
					<li><a href="../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20">
				<div class="container">
					<nav id="subNavTop">
						<ul>
							<li class="leftEnd"><a href="../../keiri/seikyusho/index.php">請求書発行</a></li>
							<li><a href="../../keiri/nyukin-shori/index.php">入金処理</a></li>
							<li><a href="../../keiri/nyukin-yotei/index.php">入金予定表</a></li>
							<li><a href="../../keiri/urikake/index.php">売掛情報</a></li>
							<li><a href="../../keiri/uke-seikyu/index.php">受請求書処理</a></li>
							<li><a href="../../keiri/shiharai-shori/index.php">支払処理</a></li>
							<li class="currentLink"><a href="index.php">支払予定表</a></li>
							<li><a href="../../keiri/kaikake/index.php">買掛情報</a></li>
							<li><a href="../../keiri/shikakekin/index.php">仕掛金一覧</a></li>
							<li><a href="../../keiri/nyushukkin/index.php">入出金一覧</a></li>
							<li class="rightEnd"><a href="../../keiri/jisha-keihi/index.php">自社経費登録</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>支払予定表</h2>
						</div>
					</div>
					<table class="tableA w594">
						<tbody>
							<tr>
								<th class="w40">対象</th>
								<td class="w90">0000年 00月度</td>
								<th class="w87">出金科目</th>
								<td class="w145">
									<select name="accountTitle" class="w145">
										<option value="すべて">すべて</option>
									</select>
								</td>
								<td class="bdl txtCenter">
									<button class="buttonA">絞込み</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<div class="container tableStripe">
				<table class="tableB">
					<thead>
						<tr>
							<th class="w120">支払カテゴリー <br>	支払先</th>
							<th>受請求書 <br>処理日</th>
							<th>請求金額 <br>相殺金額</th>
							<th class="bdr_black w75">入支払予定日 <br>実支払予定額</th>
							<th>1～5日</th>
							<th>6～10日</th>
							<th>11～15日</th>
							<th>16～20日</th>
							<th>21～25日</th>
							<th>26～31日</th>
							<th>予定日OVER</th>
						</tr>
					</thead>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120" rowspan="2">掛仕入 <br>○○○○○工業</td>
						<td class="txtCenter" rowspan="2">0000/00/00</td>
						<td class="txtRight" rowspan="2">00,000,000<br>00,000</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>手形</td>
						<td class="txtCenter"></td>
					</tr>
					<tr>
						<td class="bdr_black">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">掛仕入 <br>○○興行</td>
						<td class="txtCenter">0000/00/00</td>
						<td class="txtRight">00,000,000<br>00,000</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120" rowspan="2">掛仕入 <br>○○○○○○○商事</td>
						<td class="txtCenter" rowspan="2">0000/00/00</td>
						<td class="txtRight" rowspan="2">00,000,000<br>00,000</td>
						<td class="txtCenter bdr_black w75" rowspan="2">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>現金</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
					<tr>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>手形</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">掛仕入 <br>○○○○○建設</td>
						<td class="txtCenter">0000/00/00</td>
						<td class="txtRight">00,000,000<br>00,000</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120" rowspan="2">掛仕入 <br>○○建設</td>
						<td class="txtCenter" rowspan="2">0000/00/00</td>
						<td class="txtRight" rowspan="2">00,000,000<br>00,000</td>
						<td class="txtCenter bdr_black w75" rowspan="2">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>現金</td>
					</tr>
					<tr>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>手形</td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">自社経費 <br>□□□□□</td>
						<td class="txtCenter">ー</td>
						<td class="txtRight">00,000,000<br>ー</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">自社経費 <br>○○○○○不動産</td>
						<td class="txtCenter">ー</td>
						<td class="txtRight">00,000,000<br>ー</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">自社経費 <br>□□□□□□□</td>
						<td class="txtCenter">ー</td>
						<td class="txtRight">00,000,000<br>ー</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">自社経費 <br>□□□□□□</td>
						<td class="txtCenter">ー</td>
						<td class="txtRight">00,000,000<br>ー</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w374 txtCenter bdr_black" colspan="4">各合計</td>
						<td class="txtRight">0</td>
						<td class="txtRight">00,000,000</td>
						<td class="txtRight">00,000,000</td>
						<td class="txtRight">00,000,000</td>
						<td class="txtRight">00,000,000</td>
						<td class="txtRight">00,000,000</td>
						<td class="txtRight">00,000,000</td>
					</tr>
				</table>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>