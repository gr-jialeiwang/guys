<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>個別 見積書テンプレート登録：Guy's System</title>
<link rel="stylesheet" href="../../css/common.css">
<link rel="stylesheet" href="../../css/base.css">
<link rel="stylesheet" href="../../css/page.css">
<link rel="stylesheet" href="../../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://jpostal.googlecode.com/svn/trunk/jquery.jpostal.js"></script>
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
					<li class="current">取引先ページ新規作成</li>
					<li><a href="../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<div class="container">
				<div class="pageTitle clearfix">
					<div class="boxLeft mr8">
						<div class="btnBack"><a href="index.php">戻る</a></div>
					</div>
					<div class="boxLeft mr20">
						<h2>各種マスタ編集／見積テンプレート マスタ</h2>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload m0" type="button">登録・更新する</button>
					</div>
				</div>
				<div class="headingB">
					<div class="clearfix">
						<div class="boxLeft mr10">
							<h3>見積テンプレート登録</h3>
						</div>
						<div class="boxLeft">
							<a href="#" class="btnIncrease mr7">+</a>
						</div>
					</div>
				</div>
				<table class="tableA w350">
					<tr>
						<th class="w100">工事カテゴリー</th>
						<td>
							<select name="constructionCategory" class="w234">
								<option>選択</option>
								<option value=""></option>
							</select>
						</td>
					</tr>
					<tr>
						<th class="w100">工事タイプ</th>
						<td>
							<select name="constructionType" class="w234">
								<option>選択</option>
								<option value=""></option>
							</select>
						</td>
					</tr>
				</table>
				<div class="clearfix noTtl mb10">
					<div class="boxLeft">
						<a href="#" class="btnIncrease mr7">+</a>
					</div>
					<div class="boxLeft">
						<button class="buttonA mr7">リセット</button>
					</div>
					<div class="boxLeft">
						<button class="buttonA">見積詳細 セット登録</button>
					</div>
				</div>
				<table class="tableA w606">
					<tr>
						<th>名称</th>
						<th>規格摘要</th>
						<th class="w84">単位</th>
					</tr>
					<tr>
						<td class="bdl">
							<input type="text" name="name1" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard1" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit1" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<input type="text" name="name2" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard2" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit2" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<input type="text" name="name3" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard3" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit3" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
									<tr>
						<td class="bdl">
							<input type="text" name="name4" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard4" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit4" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<input type="text" name="name5" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard5" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit5" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<input type="text" name="name6" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard6" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit6" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<input type="text" name="name7" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard7" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit7" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<input type="text" name="name8" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard8" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit8" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<input type="text" name="name9" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard9" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit9" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<input type="text" name="name10" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard10" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit10" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="bdl">
							<input type="text" name="name11" class="w100p">
						</td>
						<td class="bdl">
							<input type="text" name="standard11" class="w100p">
						</td>
						<td class="bdl">
							<select name="unit11" class="w100p">
								<option>選択</option>
							</select>
						</td>
					</tr>
				</table>
				<div class="headingD mb10">
					<h3>見積諸条件</h3>
				</div>
				<table class="tableB w770">
					<tbody>
						<tr>
							<td class="w100p"><input type="text" class="w100p" name="estimateTerms1"></td>
						</tr>
						<tr>
							<td class="w100p"><input type="text" class="w100p" name="estimateTerms2"></td>
						</tr>
						<tr>
							<td class="w100p"><input type="text" class="w100p" name="estimateTerms3"></td>
						</tr>
						<tr>
							<td class="w100p"><input type="text" class="w100p" name="estimateTerms4"></td>
						</tr>
						<tr>
							<td class="w100p"><input type="text" class="w100p" name="estimateTerms5"></td>
						</tr>
					</tbody>
				</table>
				<div class="headingB mb10">
					<h3>見積詳細</h3>
				</div>
				<div class="clearfix mb10">
					<div class="boxLeft">
						<a href="#" class="btnIncrease mr7">+</a>
					</div>
					<div class="boxLeft">
						<button class="buttonA mr7">リセット</button>
					</div>
				</div>
				<table class="tableA w606">
					<tbody>
						<tr>
							<th>名称</th>
							<th>規格摘要</th>
							<th class="w84">単位</th>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name1"Detail class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard1"Detail class="w100p">
							</td>
							<td class="bdl">
								<select name="unit1Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name2"Detail class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard2"Detail class="w100p">
							</td>
							<td class="bdl">
								<select name="unit2Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name3"Detail class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard3"Detail class="w100p">
							</td>
							<td class="bdl">
								<select name="unit3Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name4"Detail class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard4"Detail class="w100p">
							</td>
							<td class="bdl">
								<select name="unit4Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name5"Detail class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard5"Detail class="w100p">
							</td>
							<td class="bdl">
								<select name="unit5Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name6"Detail class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard6"Detail class="w100p">
							</td>
							<td class="bdl">
								<select name="unit6Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name7"Detail class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard7"Detail class="w100p">
							</td>
							<td class="bdl">
								<select name="unit7Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name8"Detail class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard8"Detail class="w100p">
							</td>
							<td class="bdl">
								<select name="unit8Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name9"Detail class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard9"Detail class="w100p">
							</td>
							<td class="bdl">
								<select name="unit9Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name10Detail" class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard10Detail" class="w100p">
							</td>
							<td class="bdl">
								<select name="unit10Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="bdl">
								<input type="text" name="name11Detail" class="w100p">
							</td>
							<td class="bdl">
								<input type="text" name="standard11Detail" class="w100p">
							</td>
							<td class="bdl">
								<select name="unit11Detail" class="w100p">
									<option>選択</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="txtCenter noTtl"><button class="buttonA">上記の内容で登録する</button></div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>