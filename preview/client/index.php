<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>取引先ページ：Guy's System</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/page.css">
<link rel="stylesheet" href="../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://jpostal.googlecode.com/svn/trunk/jquery.jpostal.js"></script>
<script src="../js/function.js"></script>
<script>
	$(function() {
		$('#postcodeFirstHalf').jpostal({
				postcode : [
						'#postcodeFirstHalf',
						'#postcodeLastHalf'
				],
				address : {
						'#address'  : '%3%4%5'
				}
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
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
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
						<li class="leftEnd currentLink"><a href="index.php">基本情報</a></li>
						<li><a href="hanbai-keiri.php">販売系経理情報</a></li>
						<li><a href="shiire-keiri.php">仕入系経理情報</a></li>
						<li><a href="hacchu/index.php">発注書設定</a></li>
						<li><a href="worker/index.php">作業員情報</a></li>
						<li class="rightEnd"><a href="tatekae/index.php">立替金情報</a></li>
						<li class="leftEnd"><a href="request/index.php">依頼／受注履歴</a></li>
						<li><a href="seikyusho/index.php">請求書一覧</a></li>
						<li><a href="urikake/index.php">売掛金情報</a></li>
						<li><a href="minyukin/index.php">未入金・不足工事一覧</a></li>
						<li><a href="shiire-rireki/index.php">仕入／発注履歴</a></li>
						<li class="rightEnd"><a href="kaikake/index.php">買掛金情報</a></li>
					</ul>
				</nav>
			</div>
			<div class="container">
				<div class="clearfix">
					<div class="boxLeft w470">
						<div class="headingB">
							<h3>見積合算（請負額総計※税込）</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w125">取引先ステータス</th>
								<td>
									<select name="clientState" class="w100p">
										<option value="継続中">継続中</option>
										<option value="停止">停止</option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="w125">取引情報</th>
								<td>
									<select name="dealInfo" class="w100p">
										<option value="継続取引">継続取引</option>
										<option value="単発取引">単発取引</option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="w125">ガイズ担当者</th>
								<td>
									<select name="representative" class="w100p">
										<option>選択</option>
										<option value="田中一郎">田中一郎</option>
										<option value="鈴木恵子">鈴木恵子</option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="w125">契約書有無</th>
								<td>
									<select name="contract" class="w63">
										<option value="あり">あり</option>
										<option value="なし">なし</option>
									</select>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<h3>所在地 他</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w125">郵便番号</th>
								<td>
									<input type="text" class="w53" id="postcodeFirstHalf" name="postcodeFirstHalf" placeholder="000">
									ー
									<input type="text" class="w53" id="postcodeLastHalf" name="postcodeLastHalf" placeholder="000">
								</td>
							</tr>
							<tr>
								<th class="w125">所在地</th>
								<td>
									<input type="text" class="w100p" name="address" id="address">
								</td>
							</tr>
							<tr>
								<th class="w125">ビル・建物名等</th>
								<td>
									<input type="text" class="w100p" name="buildingName">
								</td>
							</tr>
							<tr>
								<th class="w125">電話番号</th>
								<td>
									<input type="text" class="w53" name="phoneNumberAreaCode" placeholder="000">
									ー
									<input type="text" class="w53" name="phoneNumberFirstHalf" placeholder="0000">
									ー
									<input type="text" class="w53" name="phoneNumberLastHalf" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w125">ファックス番号</th>
								<td>
									<input type="text" class="w53" name="faxNumberAreaCode" placeholder="000">
									ー
									<input type="text" class="w53" name="faxNumberFirstHalf" placeholder="0000">
									ー
									<input type="text" class="w53" name="faxNumberLastHalf" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w125">代表メールアドレス</th>
								<td>
									<input type="text" class="w100p" name="presidentE-Mail">
								</td>
							</tr>
							<tr>
								<th class="w125">代表者名</th>
								<td>
									<input type="text" class="w100p" name="presidentName">
								</td>
							</tr>
							<tr>
								<th class="w125">資本金</th>
								<td>
									<input type="text" class="w100p" name="shareCapital">
								</td>
							</tr>
							<tr>
								<th class="w125">取引工事</th>
								<td>
									<input type="text" class="w100p" name="construction">
								</td>
							</tr>
							<tr>
								<th class="w125">備考</th>
								<td>
									<input type="text" class="w100p" name="addressRemarks">
								</td>
							</tr>
						</table>
						<div class="headingB">
							<h3>備考</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w125">備考</th>
								<td>
									<textarea name="remarks" rows="8" class="w100p"></textarea>
								</td>
							</tr>
						</table>
					</div>
					<div class="boxRight w470">
						<div class="headingB">
							<h3>ご担当者様情報1</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w105">ご担当者様氏名</th>
								<td>
									<input type="text" class="w100p" name="clientRepresentative1">
								</td>
							</tr>
							<tr>
								<th class="w105">所属</th>
								<td>
									<input type="text" class="w100p" name="department1">
								</td>
							</tr>
							<tr>
								<th class="w105">役職</th>
								<td>
									<input type="text" class="w100p" name="role1">
								</td>
							</tr>
							<tr>
								<th class="w105">電話番号</th>
								<td>
									<input type="text" class="w53" name="repPhoneNumerAreaCode1" placeholder="000">
									ー
									<input type="text" class="w53" name="repPhoneNumerFirstHalf1" placeholder="0000">
									ー
									<input type="text" class="w53" name="repPhoneNumerLastHalf1" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w105">E-Mail</th>
								<td>
									<input type="text" class="w100p" name="repEmail1">
								</td>
							</tr>
						</table>
						<div class="headingB">
							<h3>ご担当者様情報2</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w105">ご担当者様氏名</th>
								<td>
									<input type="text" class="w100p" name="clientRepresentative2">
								</td>
							</tr>
							<tr>
								<th class="w105">所属</th>
								<td>
									<input type="text" class="w100p" name="department2">
								</td>
							</tr>
							<tr>
								<th class="w105">役職</th>
								<td>
									<input type="text" class="w100p" name="role2">
								</td>
							</tr>
							<tr>
								<th class="w105">電話番号</th>
								<td>
									<input type="text" class="w53" name="repPhoneNumerAreaCode2" placeholder="000">
									ー
									<input type="text" class="w53" name="repPhoneNumerFirstHalf2" placeholder="0000">
									ー
									<input type="text" class="w53" name="repPhoneNumerLastHalf2" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w105">E-Mail</th>
								<td>
									<input type="text" class="w100p" name="repEmail2">
								</td>
							</tr>
						</table>
						<div class="headingB">
							<h3>ご担当者様情報3</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w105">ご担当者様氏名</th>
								<td>
									<input type="text" class="w100p" name="clientRepresentative3">
								</td>
							</tr>
							<tr>
								<th class="w105">所属</th>
								<td>
									<input type="text" class="w100p" name="department3">
								</td>
							</tr>
							<tr>
								<th class="w105">役職</th>
								<td>
									<input type="text" class="w100p" name="role3">
								</td>
							</tr>
							<tr>
								<th class="w105">電話番号</th>
								<td>
									<input type="text" class="w53" name="repPhoneNumerAreaCode3" placeholder="000">
									ー
									<input type="text" class="w53" name="repPhoneNumerFirstHalf3" placeholder="0000">
									ー
									<input type="text" class="w53" name="repPhoneNumerLastHalf3" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w105">E-Mail</th>
								<td>
									<input type="text" class="w100p" name="repEmail3">
								</td>
							</tr>
						</table>
						<div class="headingB">
							<h3>ご担当者様情報4</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w105">ご担当者様氏名</th>
								<td>
									<input type="text" class="w100p" name="clientRepresentative4">
								</td>
							</tr>
							<tr>
								<th class="w105">所属</th>
								<td>
									<input type="text" class="w100p" name="department4">
								</td>
							</tr>
							<tr>
								<th class="w105">役職</th>
								<td>
									<input type="text" class="w100p" name="role4">
								</td>
							</tr>
							<tr>
								<th class="w105">電話番号</th>
								<td>
									<input type="text" class="w53" name="repPhoneNumerAreaCode4" placeholder="000">
									ー
									<input type="text" class="w53" name="repPhoneNumerFirstHalf4" placeholder="0000">
									ー
									<input type="text" class="w53" name="repPhoneNumerLastHalf4" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w105">E-Mail</th>
								<td>
									<input type="text" class="w100p" name="repEmail4">
								</td>
							</tr>
						</table>
						<div class="headingB">
							<h3>ご担当者様情報5</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w105">ご担当者様氏名</th>
								<td>
									<input type="text" class="w100p" name="clientRepresentative5">
								</td>
							</tr>
							<tr>
								<th class="w105">所属</th>
								<td>
									<input type="text" class="w100p" name="department5">
								</td>
							</tr>
							<tr>
								<th class="w105">役職</th>
								<td>
									<input type="text" class="w100p" name="role5">
								</td>
							</tr>
							<tr>
								<th class="w105">電話番号</th>
								<td>
									<input type="text" class="w53" name="repPhoneNumerAreaCode5" placeholder="000">
									ー
									<input type="text" class="w53" name="repPhoneNumerFirstHalf5" placeholder="0000">
									ー
									<input type="text" class="w53" name="repPhoneNumerLastHalf5" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w105">E-Mail</th>
								<td>
									<input type="text" class="w100p" name="repEmail5">
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload" type="button">登録・更新する</button>
					</div>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>