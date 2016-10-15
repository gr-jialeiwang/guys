<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>買掛情報：Guy's System</title>
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
					<li class="current">取引先ページ新規作成</li>
					<li><a href="../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>取引先／新規登録・編集</h2>
						</div>
						<div class="boxRight">
							<p class="textAnchor resetClientData"><a href="#">この取引先を削除する</a></p>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w87">企業名</th>
							<td>
								<select name="company" class="w363">
									<option>選択</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
							<th class="w63">事業所名</th>
							<td colspan="3">
								<ul class="horizontal">
									<li class="mr7">
										<input class="w326" name="office" type="text">
									</li>
									<li>
									<div class="radioBtn">
										<input type="radio" name="office" id="noOffice">
										<label for="noOffice">事業所名なし</label>
									</div>
									</li>
								</ul>
							</td>
						</tr>
					</table>
					<table class="tableA">
						<tr>
							<th class="w87">事業所コード</th>
							<td><input type="text" class="w135" name="officeCode" placeholder="000A00-00"></td>
							<th>取引タイプ</th>
							<td>
								<ul class="horizontal">
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01">工事受注</label>
										</div>
									</li>
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType02" name="sellingMaterials">
											<label for="dealType02">材料販売</label>
										</div>
									</li>
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType03" name="orderMaterials">
											<label for="dealType03">材料発注</label>
										</div>
									</li>
									<li>
										<div class="checkBox">
											<input type="checkbox" id="dealType04" name="orderConstruction">
											<label for="dealType04">工事発注</label>
										</div>
									</li>
								</ul>
							</td>
							<th>検索用テキスト</th>
							<td><input type="text" name="searchBox" class="w216"></td>
						</tr>
					</table>
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload" type="button">登録・更新する</button>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
				<nav id="subNav">
					<ul>
						<li class="leftEnd"><a href="../../koji_search/index02_025.php">基本情報</a></li>
						<li><a href="../hanbai-keiri.php">販売系経理情報</a></li>
						<li><a href="../shiire-keiri.php">仕入系経理情報</a></li>
						<li><a href="../hacchu/index.php">発注書設定</a></li>
						<li><a href="../worker/index.php">作業員情報</a></li>
						<li class="rightEnd"><a href="../tatekae/index.php">立替金情報</a></li>
						<li class="leftEnd"><a href="../request/index.php">依頼／受注履歴</a></li>
						<li><a href="../seikyusho/index.php">請求書一覧</a></li>
						<li><a href="../urikake/index.php">売掛金情報</a></li>
						<li><a href="../minyukin/index.php">未入金・不足工事一覧</a></li>
						<li><a href="../shiire-rireki/index.php">仕入／発注履歴</a></li>
						<li class="rightEnd currentLink"><a href="index.php">買掛金情報</a></li>
					</ul>
				</nav>
				<div class="searchFocusArea">
					<table class="tableA3">
						<tr>
							<th class="pr0 w60">表示期間</th>
							<td>
								<div class="clearfix">
									<div class="boxLeft">
										<ul class="dateSortingArea horizontal">
											<li>0000/00/00</li>
											<li class="divider">〜</li>
											<li>0000/00/00</li>
										</ul>
									</div>
								</div>
							</td>
							<th class="pr0 w66">表示方法1</th>
							<td>事業所単位</td>
							<th class="pr0 w66">表示方法2</th>
							<td>請求ベース</td>
							<th class="pr0 w80">前月より繰越</th>
							<td>0,000,000</td>
						</tr>
						<tr>
							<td colspan="8" class="txtCenter">
								<button class="buttonA">CSV出力</button>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</form>
		<div class="container">
			<table class="tableB">
				<thead>
					<tr>
						<th class="w73">日付</th>
						<th class="w80"></th>
						<th class="w93"></th>
						<th class="w80">処理者</th>
						<th class="w108">入出金科目</th>
						<th class="w175">摘要</th>
						<th class="w70">借方金額</th>
						<th class="w70">貸方金額</th>
						<th class="w70">残高</th>
						<th class="w48">入出金<br>処理訂正</th>
					</tr>
				</thead>
			</table>
			<ul class="sortable">
				<li id="1">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">普通預金(三井／鶴)</td>
								<td class="w175">掛代金支払</td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="2">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">相殺</td>
								<td class="w175">振込手数料</td>
								<td class="w70 txtRight">000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="3">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">相殺</td>
								<td class="w175">協力費</td>
								<td class="w70 txtRight">00,000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="4">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">相殺</td>
								<td class="w175">○○○○○</td>
								<td class="w70 txtRight">00,000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="5">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">相殺</td>
								<td class="w175">立替金</td>
								<td class="w70 txtRight">00,000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="6">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">相殺</td>
								<td class="w175">掛代金</td>
								<td class="w70 txtRight">00,000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="7">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">小林太郎</td>
								<td class="w108"></td>
								<td class="w175">
									<div class="clearfix">
										<p class="boxLeft lh26">掛仕入</p>
										<p class="boxRight iconLink"><a href="/keiri/uke-seikyu/monitor.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
									</div>
								</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="8">
					<table class="tableB">
						<tbody>
							<tr>
								<td colspan="6" class="w663 txtRight">[0000年00月度 合計]</td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w70 txtRight"></td>
								<td class="w48 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="9">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">普通預金(三井／鶴)</td>
								<td class="w175">掛代金支払</td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="10">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">相殺</td>
								<td class="w175">振込手数料</td>
								<td class="w70 txtRight">000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="11">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">相殺</td>
								<td class="w175">協力費</td>
								<td class="w70 txtRight">00,000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="12">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">相殺</td>
								<td class="w175">○○○○○</td>
								<td class="w70 txtRight">00,000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="13">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">相殺</td>
								<td class="w175">立替金</td>
								<td class="w70 txtRight">00,000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="14">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">佐藤花子</td>
								<td class="w108">相殺</td>
								<td class="w175">掛代金</td>
								<td class="w70 txtRight">00,000</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter">
									<p class="iconLink"><a href="../../keiri/shiharai-shori/shori.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="15">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w73 txtCenter">0000/00/00</td>
								<td class="w80"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80">小林太郎</td>
								<td class="w108"></td>
								<td class="w175">
									<div class="clearfix">
										<p class="boxLeft lh26">掛仕入</p>
										<p class="boxRight iconLink"><a href="/keiri/uke-seikyu/monitor.php"><img src="../../img/common/icon_edit.png" height="26" width="26" alt="訂正"></a></p>
									</div>
								</td>
								<td class="w70 txtRight"></td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w48 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="16">
					<table class="tableB">
						<tbody>
							<tr>
								<td colspan="6" class="w663 txtRight">[0000年00月度 合計]</td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w70 txtRight">00,000,000</td>
								<td class="w70 txtRight"></td>
								<td class="w48 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
			</ul>
		</div>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>