<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>仕入系 経理情報：Guy's System</title>
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
						<li class="leftEnd"><a href="index.php">基本情報</a></li>
						<li><a href="hanbai-keiri.php">販売系経理情報</a></li>
						<li class="currentLink"><a href="shiire-keiri.php">仕入系経理情報</a></li>
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
				<div class="clearfix mb30">
					<div class="boxLeft w470">
						<table class="tableA noTtl">
							<tr>
								<th class="w130">システム<br>買掛繰越金額 初期値</th>
								<td>
									<input type="text" class="w210 mr7" name="broughtForwardAccountsReceivable">円
								</td>
							</tr>
						</table>
						<div class="headingB">
							<h3>備考</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w130">備考</th>
								<td>
									<textarea name="remarks" rows="3" class="w100p"></textarea>
								</td>
							</tr>
						</table>
					</div>
					<div class="boxRight w470">
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr7">
									<h3>郵便物送付先情報</h3>
								</div>
								<div class="boxLeft">
									<ul class="horizontal">
										<li>
											<div class="checkBox">
												<input type="checkbox" id="sameAddress" name="sameAddress">
												<label for="sameAddress">所在地に同じ</label>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="w102">郵便番号</th>
								<td>
								<input type="text" class="w53" id="postcodeFirstHalf" name="postcodeFirstHalf" placeholder="000">
								ー
								<input type="text" class="w53" id="postcodeLastHalf" name="postcodeLastHalf" placeholder="000">
							</td>
							</tr>
							<tr>
								<th>所在地</th>
								<td>
									<input type="text" class="w100p" id="address" name="address" >
								</td>
							</tr>
							<tr>
								<th>ビル・建物名等</th>
								<td>
									<input type="text" class="w100p" name="buildingName">
								</td>
							</tr>
							<tr>
								<th>電話番号</th>
								<td>
									<input type="text" class="w53" name="phoneNumerAreaCode1" placeholder="000">
									ー
									<input type="text" class="w53" name="phoneNumerFirstHalf1" placeholder="0000">
									ー
									<input type="text" class="w53" name="phoneNumerLastHalf1" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th>ファックス番号</th>
								<td>
									<input type="text" class="w53" name="faxNumerAreaCode1" placeholder="000">
									ー
									<input type="text" class="w53" name="faxNumerFirstHalf1" placeholder="0000">
									ー
									<input type="text" class="w53" name="faxNumerLastHalf1" placeholder="0000">
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr>
				<div class="headingB">
					<h3>受請求書情報</h3>
				</div>
				<table class="tableA mb30">
					<tr>
						<th class="w101">支払方法</th>
						<td>
							<select name="numberOfPayment" class="w63">
								<option value="選択">選択</option>
								<option value=""></option>
								<option value=""></option>
							</select>
						</td>
					</tr>
					<tr>
						<th>締め日／支払日</th>
						<td>
							<div class="clearfix">
								<div class="boxLeft mr7">
									<select name="cutoffDate01" class="w63 mr7">
										<option>選択</option>
										<option value="1">1日</option>
										<option value="2">2日</option>
										<option value="3">3日</option>
										<option value="4">4日</option>
										<option value="5">5日</option>
										<option value="6">6日</option>
										<option value="7">7日</option>
										<option value="8">8日</option>
										<option value="9">9日</option>
										<option value="10">10日</option>
										<option value="11">11日</option>
										<option value="12">12日</option>
										<option value="13">13日</option>
										<option value="14">14日</option>
										<option value="15">15日</option>
										<option value="16">16日</option>
										<option value="17">17日</option>
										<option value="18">18日</option>
										<option value="19">19日</option>
										<option value="20">20日</option>
										<option value="21">21日</option>
										<option value="22">22日</option>
										<option value="23">23日</option>
										<option value="24">24日</option>
										<option value="25">25日</option>
										<option value="26">26日</option>
										<option value="27">27日</option>
										<option value="28">28日</option>
										<option value="29">29日</option>
										<option value="30">30日</option>
										<option value="31">31日</option>
										<option value="都度">都度</option>
									</select>締め
								</div>
								<div class="boxLeft mr7">
									<select name="paymentMonth01" class="w63 mr7">
										<option>選択</option>
										<option value="当月">当月</option>
										<option value="来月">来月</option>
										<option value=""></option>
									</select>
									<select name="payDay01" class="w63">
										<option>選択</option>
										<option value="1">1日</option>
										<option value="2">2日</option>
										<option value="3">3日</option>
										<option value="4">4日</option>
										<option value="5">5日</option>
										<option value="6">6日</option>
										<option value="7">7日</option>
										<option value="8">8日</option>
										<option value="9">9日</option>
										<option value="10">10日</option>
										<option value="11">11日</option>
										<option value="12">12日</option>
										<option value="13">13日</option>
										<option value="14">14日</option>
										<option value="15">15日</option>
										<option value="16">16日</option>
										<option value="17">17日</option>
										<option value="18">18日</option>
										<option value="19">19日</option>
										<option value="20">20日</option>
										<option value="21">21日</option>
										<option value="22">22日</option>
										<option value="23">23日</option>
										<option value="24">24日</option>
										<option value="25">25日</option>
										<option value="26">26日</option>
										<option value="27">27日</option>
										<option value="28">28日</option>
										<option value="29">29日</option>
										<option value="30">30日</option>
										<option value="31">31日</option>
										<option value="都度">都度</option>
									</select>
									払い
								</div>
								<div class="boxLeft">
									<ul class="horizontal">
										<li class="mr7">
											<div class="checkBox">
												<input type="checkbox" id="other01" name="other01">
												<label for="other01">その他</label>
											</div>
										</li>
										<li>
											<input type="text" class="w350" name="otherInput01">
										</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>
				</table>
				<div class="clearfix">
					<div class="boxLeft w470">
						<div class="headingB">
							<h3>振込先 金融機関</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w101">金融機関名</th>
								<td>
									<input type="text" class="w100p" name="financialInstitution">
								</td>
							</tr>
							<tr>
								<th>支店名</th>
								<td>
									<input type="text" class="w100p" name="branchName">
								</td>
							</tr>
							<tr>
								<th>口座種類</th>
								<td>
									<select name="typeOfAccount " class="w105">
										<option>選択</option>
										<option value="普通">普通</option>
										<option value="当座">当座</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>口座番号</th>
								<td>
									<input type="text" class="w100p" name="accountNumber">
								</td>
							</tr>
							<tr>
								<th>口座名義</th>
								<td>
									<input type="text" class="w100p" name="accountHolder">
								</td>
							</tr>
						</table>
					</div>
					<div class="boxRight w470">
						<div class="headingB">
							<h3>備考</h3>
						</div>
						<table class="tableA">
							<tbody>
								<tr>
									<th class="w125">備考</th>
									<td>
										<textarea name="remarks" rows="9" class="w100p"></textarea>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<table class="tableA noTtl	">
					<tbody>
						<tr>
							<th class="w140">共済金（協力費）有無</th>
							<td class="w63">
								<select name="havingOrNotMutualAid" class="w63">
									<option>選択</option>
									<option value="有">有</option>
									<option value="無">無</option>
								</select>
							</td>
							<th class="w115">共済金（協力費）</th>
							<td class="w80">
								<input type="text" class="w53 mr7" name="mutualAidMoney">％
							</td>
							<th class="w115">領収書デフォルト</th>
							<td>
								<select name="defaultBill" class="w125 mr7">
									<option>選択</option>
									<option value="保険料一部負担金">保険料一部負担金</option>
									<option value="相殺金一式">相殺金一式</option>
								</select>※工事発注取引がある時のみ選択
							</td>
						</tr>
					</tbody>
				</table>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload" type="button">登録・更新する</button>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft w470">
						<div class="headingB">
							<h3>相殺金 デフォルト設定（共済金除く）</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w73">相殺（1）</th>
								<td>
									<select name="offset01" class="w105 mr7">
										<option value="相殺項目">※相殺項目</option>
										<option value=""></option>
									</select>
									<input type="text" class="w210 mr7" name="price1">円
								</td>
							</tr>
							<tr>
								<th>相殺（2）</th>
								<td>
									<select name="offset02" class="w105 mr7">
										<option value="相殺項目">※相殺項目</option>
										<option value=""></option>
									</select>
									<input type="text" class="w210 mr7" name="price2">円
								</td>
							</tr>
							<tr>
								<th>相殺（3）</th>
								<td>
									<select name="offset03" class="w105 mr7">
										<option value="相殺項目">※相殺項目</option>
										<option value=""></option>
									</select>
									<input type="text" class="w210 mr7" name="price3">円
								</td>
							</tr>
							<tr>
								<th>相殺（4）</th>
								<td>
									<select name="offset04" class="w105 mr7">
										<option value="相殺項目">※相殺項目</option>
										<option value=""></option>
									</select>
									<input type="text" class="w210 mr7" name="price4">円
								</td>
							</tr>
							<tr>
								<th>相殺（5）</th>
								<td>
									<select name="offset05" class="w105 mr7">
										<option value="相殺項目">※相殺項目</option>
										<option value=""></option>
									</select>
									<input type="text" class="w210 mr7" name="price5">円
								</td>
							</tr>
						</table>
					</div>
					<div class="boxRight w470">
						<table class="tableA noTtl">
							<tr>
								<th class="w80">相殺（6）</th>
								<td>
									<select name="offset06" class="w105 mr7">
										<option value="相殺項目">※相殺項目</option>
										<option value=""></option>
									</select>
									<input type="text" class="w210 mr7" name="price6">円
								</td>
							</tr>
							<tr>
								<th>相殺（7）</th>
								<td>
									<select name="offset07" class="w105 mr7">
										<option value="相殺項目">※相殺項目</option>
										<option value=""></option>
									</select>
									<input type="text" class="w210 mr7" name="price7">円
								</td>
							</tr>
							<tr>
								<th>相殺（8）</th>
								<td>
									<select name="offset08" class="w105 mr7">
										<option value="相殺項目">※相殺項目</option>
										<option value=""></option>
									</select>
									<input type="text" class="w210 mr7" name="price8">円
								</td>
							</tr>
							<tr>
								<th>相殺（9）</th>
								<td>
									<select name="offset09" class="w105 mr7">
										<option value="相殺項目">※相殺項目</option>
										<option value=""></option>
									</select>
									<input type="text" class="w210 mr7" name="price9">円
								</td>
							</tr>
							<tr>
								<th>相殺（10）</th>
								<td>
									<select name="offset10" class="w105 mr7">
										<option value="相殺項目">※相殺項目</option>
										<option value=""></option>
									</select>
									<input type="text" class="w210 mr7" name="price10">円
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