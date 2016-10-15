<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>発注書 設定：Guy's System</title>
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
				<div class="headingB">
					<h3>発注書追加登録</h3>
				</div>
				<table class="tableA">
					<tr>
						<th class="w100">工事カテゴリー</th>
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
						<th class="w124">発注書フォーマット</th>
						<td>
							<select name="purchaseOrderFormat" class="w100p">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select>
						</td>
						<th class="w75">発注書名称</th>
						<td>
							<input type="text" class="w100p" value="ニチハ（志）" name="purchaseOrderName">
						</td>
					</tr>
				</table>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload" type="button">登録・更新する</button>
					</div>
				</div>
				<hr>
				<div class="hacchushoTop clearfix noTtl">
					<div class="destinationArea w335 bdb_black pb5">
						<div class="txtRight bdb_black mb20">御中</div>
						<select name="maker" class="w307">
							<option value="メーカー選択">メーカー選択</option>
						</select>様分
					</div>
					<div class="boxRight w294">
						<ul class="horizontal mb10">
							<li class="mr7 fz14 bold">ガイズカンパニー株式会社</li>
							<li><input type="text" name="" class="w115"></li>
						</ul>
						<p class="lh15 mb14">〒222-0033<br>
							横浜市港北区新横浜3-8-11 KDX新横浜381ビル8F<br>
							TEL：045-470-3536　FAX：045-470-3537
						</p>
						<ul class="horizontal">
							<li class="w70 bold">発注者 TEL</li>
							<li class="w220"></li>
						</ul>
						<ul class="horizontal">
							<li class="w70 bold">発注書 No</li>
							<li class="w220"></li>
						</ul>
					</div>
				</div>
				<table class="tableA noTtl">
					<tr>
						<th class="w63">物件名</th>
						<td></td>
					</tr>
					<tr>
						<th>工務店名</th>
						<td></td>
					</tr>
				</table>
				<table class="tableB noTtl">
					<tr>
						<th class="w100"></th>
						<th class="bdln">品名</th>
						<th class="w175">品番</th>
						<th class="w66">数量</th>
						<th class="w63">単位</th>
						<th class="w111">単価</th>
					</tr>
					<tr>
						<td>本体1</td>
						<td rowspan="6"></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit1-1" class="w100p" value="枚"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="#inline-modal1" class="blue modal">設定</a></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="#inline-modal1" class="blue modal">設定</a></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="#inline-modal1" class="blue modal">設定</a></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit1-5" class="w100p" value="本"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit1-6" class="w100p" value="本"></td>
						<td></td>
					</tr>
					<tr>
						<td>本体2</td>
						<td rowspan="6"></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit2-1" class="w100p" value="本"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="#inline-modal1" class="blue modal">設定</a></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit12-3" class="w100p" value="セット"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit12-4" class="w100p" value="本"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit2-5" class="w100p" value="本"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit2-6" class="w100p" value="本"></td>
						<td></td>
					</tr>
					<tr>
						<td>本体3</td>
						<td rowspan="6"></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit3-1" class="w100p" value="本"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="#inline-modal1" class="blue modal">設定</a></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="#inline-modal1" class="blue modal">設定</a></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="#inline-modal1" class="blue modal">設定</a></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit3-4" class="w100p" value="本"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><input type="text" name="unit3-5" class="w100p" value="本"></td>
						<td></td>
					</tr>
					<tr>
						<td><input type="text" name="productName4-1" class="w100p"></td>
						<td><input type="text" name="productName4-2" class="w100p"></td>
						<td><input type="text" name="productNumber4" class="w100p"></td>
						<td><input type="text" name="quantity4" class="w100p"></td>
						<td><input type="text" name="unit4" class="w100p" value="本"></td>
						<td><input type="text" name="unitPrice4" class="w100p"></td>
					</tr>
					<tr>
						<td><a href="#inline-modal2" class="blue modal">設定</a></td>
						<td><input type="text" name="productName4-2" class="w100p"></td>
						<td><input type="text" name="productNumber4" class="w100p"></td>
						<td><input type="text" name="quantity4" class="w100p"></td>
						<td><input type="text" name="unit4" class="w100p" value="本"></td>
						<td><input type="text" name="unitPrice4" class="w100p"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" name="productName4-2" class="w100p"></td>
						<td><input type="text" name="productNumber4" class="w100p"></td>
						<td><input type="text" name="quantity4" class="w100p"></td>
						<td><input type="text" name="unit4" class="w100p" value="式"></td>
						<td><input type="text" name="unitPrice4" class="w100p"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" name="productName4-2" class="w100p"></td>
						<td><input type="text" name="productNumber4" class="w100p"></td>
						<td><input type="text" name="quantity4" class="w100p"></td>
						<td><input type="text" name="unit4" class="w100p" value="本"></td>
						<td><input type="text" name="unitPrice4" class="w100p"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" name="productName4-2" class="w100p"></td>
						<td><input type="text" name="productNumber4" class="w100p"></td>
						<td><input type="text" name="quantity4" class="w100p"></td>
						<td><input type="text" name="unit4" class="w100p" value="本"></td>
						<td><input type="text" name="unitPrice4" class="w100p"></td>
					</tr>
					<tr>
						<td><input type="text" name="productName5-1" class="w100p"></td>
						<td><input type="text" name="productName5-2" class="w100p"></td>
						<td><input type="text" name="productNumber5" class="w100p"></td>
						<td><input type="text" name="quantity5" class="w100p"></td>
						<td><input type="text" name="unit5" class="w100p" value="本"></td>
						<td><input type="text" name="unitPrice5" class="w100p"></td>
					</tr>
					<tr>
						<td><input type="text" name="productName6-1" class="w100p"></td>
						<td><input type="text" name="productName6-2" class="w100p"></td>
						<td><input type="text" name="productNumber6" class="w100p"></td>
						<td><input type="text" name="quantity6" class="w100p"></td>
						<td><input type="text" name="unit6" class="w100p" value="本"></td>
						<td><input type="text" name="unitPrice6" class="w100p"></td>
					</tr>
					<tr>
						<td><input type="text" name="productName7-1" class="w100p"></td>
						<td><input type="text" name="productName7-2" class="w100p"></td>
						<td><input type="text" name="productNumber7" class="w100p"></td>
						<td><input type="text" name="quantity7" class="w100p"></td>
						<td><input type="text" name="unit7" class="w100p" value="本"></td>
						<td><input type="text" name="unitPrice7" class="w100p"></td>
					</tr>
					<tr>
						<td><input type="text" name="productName8-1" class="w100p"></td>
						<td><input type="text" name="productName8-2" class="w100p"></td>
						<td><input type="text" name="productNumber8" class="w100p"></td>
						<td><input type="text" name="quantity8" class="w100p"></td>
						<td><input type="text" name="unit8" class="w100p" value="本"></td>
						<td><input type="text" name="unitPrice8" class="w100p"></td>
					</tr>
					<tr>
						<td><input type="text" name="productName9-1" class="w100p"></td>
						<td><input type="text" name="productName9-2" class="w100p"></td>
						<td><input type="text" name="productNumber9" class="w100p"></td>
						<td><input type="text" name="quantity9" class="w100p"></td>
						<td><input type="text" name="unit9" class="w100p" value="本"></td>
						<td><input type="text" name="unitPrice9" class="w100p"></td>
					</tr>
					<tr>
						<td><input type="text" name="productName10-1" class="w100p"></td>
						<td><input type="text" name="productName10-2" class="w100p"></td>
						<td><input type="text" name="productNumber10" class="w100p"></td>
						<td><input type="text" name="quantity10" class="w100p"></td>
						<td><input type="text" name="unit10" class="w100p" value="本"></td>
						<td><input type="text" name="unitPrice10" class="w100p"></td>
					</tr>
				</table>
				<table class="tableA noTtl">
					<tr>
						<th class="w63">希望納期</th>
						<td></td>
					</tr>
					<tr>
						<th>車種</th>
						<td></td>
					</tr>
					<tr>
						<th>納品場所</th>
						<td></td>
					</tr>
					<tr>
						<th rowspan="2">備考</th>
						<td>
							<input type="text" class="w100p" name="remark1">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" class="w100p" name="remark2">
						</td>
					</tr>
				</table>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
	<div style="display:none;">
		<div id="inline-modal1">
			<div id="modal" class="modalUpload">
				<p class="mb20"><b>個別マスタ</b></p>
				<div class="mb10">
					<table class="tableB">
						<tr>
							<td>
								<input type="text" class="w100p mr7" value="セット" name="set">
							</td>
							<td class="w45">
								<a href="#" class="btnIncrease mr7">+</a>
								<a href="#" class="btnDecrease">-</a>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" class="w100p mr7" value="袋" name="fukuro">
							</td>
							<td class="w45">
								<a href="#" class="btnIncrease mr7">+</a>
								<a href="#" class="btnDecrease">-</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="mb10">
					<button class="buttonA w100">更新</button>	
				</div>
				<a href="index02_025.php" class="closeWindow"><img src="../../img/common/btn_closewindow.png" height="15" width="14" alt="閉じる"></a>
			</div>
		</div>
		<div id="inline-modal2">
			<div id="modal" class="modalEditDetail">
				<p class="mb20"><b>個別マスタ</b></p>
				<div class="mb10">
					<table class="tableB">
						<tr>
							<th class="w80">選択名称</th>	
							<td>
								<input type="text" class="w100p mr7" value="16mm縦張り" name="set">
							</td>
							<td class="w45">
								<a href="#" class="btnIncrease mr7">+</a>
								<a href="#" class="btnDecrease">-</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="mb10">
					<table class="tableB">
						<tr>
							<th>品名</th>
							<th>品番</th>
							<th>単位</th>
							<th>単価</th>
						</tr>
						<tr>
							<td>
								<input type="text" class="w100p mr7" value="本体金具" name="edit1_1">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="JE555" name="edit1_2">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="袋" name="edit1_3">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="1300" name="edit1_4">
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" class="w100p mr7" value="出隅金具" name="edit2_1">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="JE5550C" name="edit2_2">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="箱" name="edit2_3">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="710" name="edit2_4">
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" class="w100p mr7" value="スターター" name="edit3_1">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="FA100A" name="edit3_2">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="本" name="edit3_3">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="450" name="edit3_4">
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" class="w100p mr7" value="本体金具" name="edit4_1">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="JK1150" name="edit4_2">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="箱" name="edit4_3">
							</td>
							<td>
								<input type="text" class="w100p mr7" value="2300" name="edit4_4">
							</td>
						</tr>
					</table>
				</div>
				<div class="mb10">
					<button class="buttonA w100">更新</button>	
				</div>
				<a href="index02_025.php" class="closeWindow"><img src="../../img/common/btn_closewindow.png" height="15" width="14" alt="閉じる"></a>
			</div>
		</div>
	</div>
</body>
</html>