<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>新規工事登録 初期登録情報編集：Guy's System</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/page.css">
<link rel="stylesheet" href="../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../js/function.js"></script>
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
							<li class="leftEnd currentLink"><a href="index.php">新規工事登録</a></li>
							<li><a href="../koji_search/index.php">工事情報</a></li>
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
							<h2>新規工事登録/編集</h2>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
				<div class="clearfix">
					<div class="boxLeft w470">
						<table class="tableA noTtl">
							<tr>
								<th class="w120">取引先選択</th>
								<td>
									<select name="clientSelect" class="w100p">
										<option value="">選択</option>
										<option value="企業名">企業名</option>
										<option value="事業所名">事業所名</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>取引先 担当者選択</th>
								<td>
									<select name="clientRepresentative" class="w100p">
										<option value="">選択</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>ご依頼日</th>
								<td>
									<ul class="dateSortingArea horizontal">
											<li>
											<select name="requestDateYear" class="w105">
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
											<select name="requestDateMonth" class="w72">
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
											<select name="requestDateDay" class="w72">
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
												<option value="10">日10日</option>
												<option value="11">日11日</option>
												<option value="12">日12日</option>
												<option value="13">日13日</option>
												<option value="14">日14日</option>
												<option value="15">日15日</option>
												<option value="16">日16日</option>
												<option value="17">日17日</option>
												<option value="18">日18日</option>
												<option value="19">日19日</option>
												<option value="20">日20日</option>
												<option value="21">日21日</option>
												<option value="22">日22日</option>
												<option value="23">日23日</option>
												<option value="24">日24日</option>
												<option value="25">日25日</option>
												<option value="26">日26日</option>
												<option value="27">日27日</option>
												<option value="28">日28日</option>
												<option value="29">日29日</option>
												<option value="30">日30日</option>
												<option value="31">日31日</option>
											</select>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<th>工事番号</th>
								<td>
									<input type="text" class="w100p" name="constructionNumber">
								</td>
							</tr>
							<tr>
								<th>ガイズ担当者</th>
								<td>
									<select name="representative" class="w100p">
										<option>選択</option>
										<option value="田中一郎">田中一郎</option>
										<option value="鈴木恵子">鈴木恵子</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
					<div class="boxRight w470">
						<table class="tableA noTtl">
							<tr>
								<th class="w125">現場名</th>
								<td>
									<input type="text" class="w100p" name="clientRepresentative1">
								</td>
							</tr>
							<tr>
								<th>工事名</th>
								<td>
									<input type="text" class="w100p" name="constructionName">
								</td>
							</tr>
							<tr>
								<th>現場住所</th>
								<td>
									<input type="text" class="w100p" name="constructionSite">
								</td>
							</tr>
							<tr>
								<th>工事カテゴリー選択</th>
								<td>
									<select name="constructionCategory" class="w100p">
									<option value="選択しない">選択しない</option>
									<option value="サイディング">サイディング</option>
									<option value="屋根">屋根</option>
									<option value="外構">外構</option>
									<option value="太陽光">太陽光</option>
									<option value="パワーボード">パワーボード</option>
								</select>
								</td>
							</tr>
							<tr>
								<th>工事タイプ選択</th>
								<td>
									<select name="constructionType" class="w100p">
									<option value="選択しない">選択しない</option>
								</select>
								</td>
							</tr>
							<tr>
								<th>受注区分</th>
								<td>
									<select name="contract" class="w63">
										<option value="元請">元請</option>
										<option value="下請">下請</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<a href="../koji_search/index02_025.php" class="btnReload">登録・更新する</a>
					</div>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>