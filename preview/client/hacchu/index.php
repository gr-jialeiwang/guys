<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>発注書設定：Guy's System</title>
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
							<h2>取引先 会社情報（新規登録／編集）</h2>
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
						<li class="leftEnd"><a href="../index.php">基本情報</a></li>
						<li><a href="../hanbai-keiri.php">販売系経理情報</a></li>
						<li><a href="../shiire-keiri.php">仕入系経理情報</a></li>
						<li class="currentLink"><a href="index.php">発注書設定</a></li>
						<li><a href="../worker/index.php">作業員情報</a></li>
						<li class="rightEnd"><a href="../tatekae/index.php">立替金情報</a></li>
						<li class="leftEnd"><a href="../request/index.php">依頼／受注履歴</a></li>
						<li><a href="../seikyusho/index.php">請求書一覧</a></li>
						<li><a href="../urikake/index.php">売掛金情報</a></li>
						<li><a href="../minyukin/index.php">未入金・不足工事一覧</a></li>
						<li><a href="../shiire-rireki/index.php">仕入／発注履歴</a></li>
						<li class="rightEnd"><a href="../kaikake/index.php">買掛金情報</a></li>
					</ul>
				</nav>
			</div>
			<div class="container">
				<div class="clearfix mb10">
					<a href="hacchusho.php" class="buttonA buttonALarge w130 lh34">発注書追加登録 ＋</a>
				</div>
				<div class="mb20">
					<table class="tableA">
						<tr>
							<th class="w105">工事カテゴリー</th>
							<td class="w175"></td>
							<th class="w130">発注書フォーマット</th>
							<td class="w175"></td>
							<th class="w80">発注書名称</th>
							<td class="w268"></td>
						</tr>
						<tr>
							<td class="w75" colspan="6">
								<div class="clearfix">
									<div class="boxRight">
										<p class="textAnchor resetClientData"><a href="#">削除する</a></p>
									</div>
									<div class="boxRight mr10">
										<a href="hacchusho.php" class="buttonA">デフォルト情報設定・個別マスタ編集 </a>
									</div>
								</div>
							</td>
						</tr>
					</table>
				</div>
				<table class="tableA mb30">
					<tr>
						<th class="w105">工事カテゴリー</th>
						<td class="w175"></td>
						<th class="w130">発注書フォーマット</th>
						<td class="w175"></td>
						<th class="w80">発注書名称</th>
						<td class="w268"></td>
					</tr>
					<tr>
						<td class="w75" colspan="6">
							<div class="clearfix">
								<div class="boxRight">
									<p class="textAnchor resetClientData"><a href="#">削除する</a></p>
								</div>
								<div class="boxRight mr10">
									<a href="hacchusho.php" class="buttonA">デフォルト情報設定・個別マスタ編集 </a>
								</div>
							</div>
						</td>
					</tr>
				</table>
				<hr>
				<div class="headingB">
					<h3>発注書フォーマット・プレビュー</h3>
				</div>
				<div class="formatBtns">
					<button class="buttonA">フォーマット1</button>
					<button class="buttonA">フォーマット2</button>
					<button class="buttonA">フォーマット3</button>
					<button class="buttonA">フォーマット4</button>
					<button class="buttonA">フォーマット5</button>
					<button class="buttonA">フォーマット6</button>
					<button class="buttonA">フォーマット7</button>
					<button class="buttonA">フォーマット8</button>
					<button class="buttonA">フォーマット9</button>
					<button class="buttonA">フォーマット10</button>
					<button class="buttonA">フォーマット11</button>
					<button class="buttonA">フォーマット12</button>
					<button class="buttonA">フォーマット13</button>
					<button class="buttonA">フォーマット14</button>
					<button class="buttonA">フォーマット15</button>
					<button class="buttonA">フォーマット16</button>
					<button class="buttonA">フォーマット17</button>
					<button class="buttonA">フォーマット18</button>
					<button class="buttonA">フォーマット19</button>
					<button class="buttonA">フォーマット20</button>
					<button class="buttonA">フォーマット21</button>
					<button class="buttonA">フォーマット22</button>
					<button class="buttonA">フォーマット23</button>
					<button class="buttonA">フォーマット24</button>
					<button class="buttonA">フォーマット25</button>
					<button class="buttonA">フォーマット26</button>
					<button class="buttonA">フォーマット27</button>
					<button class="buttonA">フォーマット28</button>
					<button class="buttonA">フォーマット29</button>
					<button class="buttonA">フォーマット30</button>
					<button class="buttonA">フォーマット31</button>
					<button class="buttonA">フォーマット32</button>
					<button class="buttonA">フォーマット33</button>
					<button class="buttonA">フォーマット34</button>
					<button class="buttonA">フォーマット35</button>
					<button class="buttonA">フォーマット36</button>
					<button class="buttonA">フォーマット37</button>
					<button class="buttonA">フォーマット38</button>
					<button class="buttonA">フォーマット39</button>
					<button class="buttonA">フォーマット40</button>
					<button class="buttonA">フォーマット41</button>
					<button class="buttonA">フォーマット42</button>
					<button class="buttonA">フォーマット43</button>
					<button class="buttonA">フォーマット44</button>
					<button class="buttonA">フォーマット45</button>
					<button class="buttonA">フォーマット46</button>
					<button class="buttonA">フォーマット47</button>
					<button class="buttonA">フォーマット48</button>
					<button class="buttonA">フォーマット49</button>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>