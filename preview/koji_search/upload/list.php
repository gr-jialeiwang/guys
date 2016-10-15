<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>アップロードファイル一覧：Guy's System</title>
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
					<nav id="subNavTop" class="navKoji">
						<ul>
							<li class="leftEnd"><a href="../../new_koji/index.php">新規工事登録</a></li>
							<li class="currentLink"><a href="../index.php">工事情報</a></li>
							<li><a href="../../romu-shinsei/index.php">労務申請・承認</a></li>
							<li><a href="../../material-hanbai/index.php">材料販売登録</a></li>
							<li><a href="../../zaiko/index.php">在庫一覧/登録</a></li>
							<li class="rightEnd"><a href="../../material-nohinsho/index.php">材料納品書照合</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>工事個別情報</h2>
						</div>
						<div class="boxLeft mr15">
							<dl>
								<dt>[ID]</dt>
								<dd>000000</dd>
							</dl>
						</div>
						<div class="boxLeft mr15">
							<dl>
								<dt>[工事登録日]</dt>
								<dd>0000/00/00</dd>
							</dl>
						</div>
						<div class="boxLeft mr15">
							<dl>
								<dt>[初期登録者]</dt>
								<dd>小林太郎</dd>
							</dl>
						</div>
						<div class="boxLeft">
							<dl>
								<dt>[最終更新者]</dt>
								<dd>佐藤一郎</dd>
							</dl>
						</div>
						<div class="boxRight">
							<p class="textAnchor resetClientData"><a href="#">このページを削除する</a></p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="clearfix">
						<div class="boxLeft w770">
							<table class="tableA">
								<tr class="bdt">
									<th>ご依頼日</th>
									<td>0000年00月00日</td>
									<th class="w105">工務店</th>
									<td>◎◎◎工務店</td>
								</tr>
								<tr>
									<th>工事番号</th>
									<td>00A00-00</td>
									<th class="w105">工務店 ご担当者</th>
									<td>□□□□</td>
								</tr>
								<tr>
									<th>工事ステータス</th>
									<td>
										<select name="constructionState" class="w100p">
											<option value=""></option>
										</select>
									</td>
									<th rowspan="2" class="w105">工務店 経理規定</th>
									<td rowspan="2">
										20日納め／翌月20日払い（31日請求書必着）<br>
										30日納め／翌月30日払い（10日請求書必着）
									</td>
								</tr>
								<tr>
									<th>現場名</th>
									<td>●●●様邸</td>
								</tr>
								<tr>
									<th>請求現場名</th>
									<td>
										<ul class="horizontal">
											<li>
												<input class="w206 mr7" name="constructionName" type="text">
											</li>
											<li>
											<div class="radioBtn">
												<input type="radio" name="sameConstructionSite" id="sameConstructionSite">
												<label for="sameConstructionSite">同上</label>
											</div>
											</li>
										</ul>
									</td>
									<th class="w105">ガイズ担当者</th>
									<td>小林太郎（000-0000-0000）</td>
								</tr>
								<tr>
									<th>工事名</th>
									<td>□□□□□工事</td>
									<th class="w105">工事カテゴリー</th>
									<td>サイディング</td>
								</tr>
								<tr>
									<th>現場住所</th>
									<td>□□□市◎◎◎区○○○ 0-00-0</td>
									<th class="w105">工事タイプ</th>
									<td></td>
								</tr>
								<tr>
									<th>現場状況車種</th>
									<td>
										<select name="siteSituation" class="w100p">
											<option value=""></option>
										</select>
									</td>
									<th class="w105">受注区分</th>
									<td>元請</td>
								</tr>
							</table>
						</div>
						<div class="boxRight w200">
							<ul class="horizontal kojiBtnWrap">
								<li><button class="buttonA kojiBtn modal" href="#inline-modal">積算CSV<br>ファイル<br>インポート</button></li>
								<li><button class="buttonA kojiBtn modal" href="#inline-modal2">各種ファイル<br>アップロード</button></li>
								<li><a href="#" class="buttonA kojiBtn">工事情報複製</a></li>
								<li><a href="/new_koji/index.php" class="buttonA kojiBtn">初期登録情報<br>編集</a></li>
								<li><a href="#" class="buttonA">工事台帳 出力</a></li>
								<li><a href="/koji_search/upload/list.php" class="buttonA">アップロードファイル 一覧</a></li>
								<li><a href="/koji_search/index11_036.php" class="buttonA">見積書・発注書・完了報告 一覧</a></li>
								<li><a href="/koji_search/nyushukkin/index.php" class="buttonA">入出金 一覧</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix pb20 mb30">
						<div class="boxRight">
							<button class="btnReload" type="button">登録・更新する</button>
						</div>
					</div>
				</div>
			</section>
			<div class="gradient">
				<div class="container">
					<div class="clearfix">
						<div class="boxLeft">
							<nav id="kojiTab">
								<ul>
									<li><a href="/koji_search/index02_025.php">基本情報</a></li>
									<li><a href="/koji_search/index03_026.php">見積</a></li>
									<li><a href="/koji_search/index07_030.php">初期積算データ</a></li>
									<li><a href="/koji_search/index08_031.php">積算データ成形</a></li>
									<li><a href="/koji_search/index09_033.php">見込原価</a></li>
									<li><a href="/koji_search/hacchu/index.php">発注情報</a></li>
									<li><a href="/koji_search/jikogenka/index.php">実行原価</a></li>
									<li><a href="/koji_search/index12_037.php">工事経費</a></li>
								</ul>
							</nav>
						</div>
						<div class="boxRight pt5">
							<button class="buttonA">完了報告書 発行</button>
						</div>
					</div>
				</div>
				<hr class="gray">
			</div>
			<div class="container">
				<div class="headingB">
					<h3>アップロードファイル一覧</h3>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w87">アップロード日</th>
							<th class="w87">作業者</th>
							<th class="w115">データタイトル</th>
							<th></th>

					</thead>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w87 txtCenter">0000/00/00</td>
							<td class="w87 txtCenter">小林太郎</td>
							<td class="w115 txtCenter">現場地図</td>
							<td class="txtCenter">
								<ul class="horizontal">
									<li class="pt4 mr7">
										<button class="buttonA pt5">破棄</button>
									</li>
									<li>
										<p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w87 txtCenter">0000/00/00</td>
							<td class="w87 txtCenter">小林太郎</td>
							<td class="w115 txtCenter">図面</td>
							<td class="txtCenter">
								<ul class="horizontal">
									<li class="pt4 mr7">
										<button class="buttonA pt5">破棄</button>
									</li>
									<li>
										<p class="iconLink"><a href="#"><img src="../../img/common/icon_pv.png" height="26" width="26" alt="PV"></a></p>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w87 txtCenter"></td>
							<td class="w87 txtCenter"></td>
							<td class="w115 txtCenter"></td>
							<td class="txtCenter"></td>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w87 txtCenter"></td>
							<td class="w87 txtCenter"></td>
							<td class="w115 txtCenter"></td>
							<td class="txtCenter"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w87 txtCenter"></td>
							<td class="w87 txtCenter"></td>
							<td class="w115 txtCenter"></td>
							<td class="txtCenter"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
	<div style="display:none;">
		<div id="inline-modal">
			<div id="modal" class="modalImport">
				<p class="mb20"><b>積算 CSV ファイルインポート</b></p>
				<div class="mb10">
					<button class="buttonA w90">参照</button>
				</div>
				<p class="mb20">◯◯◯◯（File_Name）◯◯◯◯</p>
				<form action="/koji_search/index07_030.php" method="post">
					<div class="mb30">
						<button class="buttonA w90">インポート</button>
					</div>
				</form>
				<a href="#" class="closeWindow"><img src="/img/common/btn_closewindow.png" height="15" width="14" alt="閉じる"></a>
			</div>
		</div>
	</div>
	<div style="display:none;">
		<div id="inline-modal2">
			<div id="modal" class="modalUpload">
				<p class="mb20"><b>各種ファイルアップロード</b></p>
				<p class="mb10">〈データタイトル〉</p>
				<div class="mb10">
					現場地図
				</div>
				<div class="mb10">
					<button class="buttonA w100">参照</button>
				</div>
				<p class="mb20"><input type="text" class="w100p fz11" name="uploadFileName"></p>
				<div class="mb30">
					<a class="buttonA w100" href="/koji_search/upload/list.php">アップロード</a>
				</div>
				<a href="#" class="closeWindow"><img src="/img/common/btn_closewindow.png" height="15" width="14" alt="閉じる"></a>
			</div>
		</div>
	</div>
</body>
</html>