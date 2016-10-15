<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>個別発注画面／発注設定：Guy's System</title>
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
			<div class="container">
					<div class="hacchushoTop clearfix noTtl">
					<div class="clearfix">
						<div class="boxLeft mr7">
							<div class="headingD m0"><h3>選択書式名称</h3></div>
						</div>
						<div class="boxLeft">
							ニチハ｜志水
						</div>
					</div>
					<div class="destinationArea w335 bdb_black pb5">
						<h1 class="w210 mb20">発注書</h1>
						<div class="clearfix bdb_black mb20">
							<div class="boxLeft txtCenter w307">株式会社志水商店</div>
							<div class="boxRight">御中</div>
						</div>
						<input type="text" class="w307 mb7 txtCenter" value="小林 様" name="" >
						<div class="clearfix">
							<div class="boxLeft txtCenter w307">ニチハ</div>
							<div class="boxRight">様分</div>
						</div>
					</div>
					<div class="boxRight w294">
						<ul class="dateSortingArea horizontal mb7">
								<li>
									<select name="year" class="w105">
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
									<select name="month" class="w72">
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
									<select name="day" class="w72">
										<option>日選択</option>
										<option value="日1">1日</option>
										<option value="日2">2日</option>
										<option value="日3">3日</option>
										<option value="日4">4日</option>
										<option value="日5">5日</option>
										<option value="日6">6日</option>
										<option value="日7">7日</option>
										<option value="日8">8日</option>
										<option value="日9">9日</option>
										<option value="10日">10日</option>
										<option value="11日">11日</option>
										<option value="12日">12日</option>
										<option value="13日">13日</option>
										<option value="14日">14日</option>
										<option value="15日">15日</option>
										<option value="16日">16日</option>
										<option value="17日">17日</option>
										<option value="18日">18日</option>
										<option value="19日">19日</option>
										<option value="20日">20日</option>
										<option value="21日">21日</option>
										<option value="22日">22日</option>
										<option value="23日">23日</option>
										<option value="24日">24日</option>
										<option value="25日">25日</option>
										<option value="26日">26日</option>
										<option value="27日">27日</option>
										<option value="28日">28日</option>
										<option value="29日">29日</option>
										<option value="30日">30日</option>
										<option value="31日">31日</option>
									</select>
								</li>
							</ul>
						<input type="text" name="purchaseOrderNumber" value="54A321" class="txtCenter w290 mb14">
						<ul class="horizontal mb10">
							<li class="mr7 fz14 bold">ガイズカンパニー株式会社</li>
							<li><input type="text" name="" class="w115" value="金子 橋本"></li>
						</ul>
						<p class="lh15 mb14">〒222-0033<br>
							横浜市港北区新横浜3-8-11 KDX新横浜381ビル8F<br>
							TEL：045-470-3536　FAX：045-470-3537
						</p>
						<ul class="horizontal">
							<li class="w70 bold">発注者 TEL</li>
							<li>
								<select name="ordererTel" class="w220 mb10">
									<option value="高橋 健二(000-0000-0000)">高橋 健二(000-0000-0000)</option>
								</select>
							</li>
						</ul>
						<ul class="horizontal">
							<li class="w70 bold">発注書 No</li>
							<li class="w220"><input type="text" class="w218 txtCenter" name="purchaseOrderNumber" value="54A321-1"></li>
						</ul>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft w820">
						<table class="tableA noTtl">
							<tr>
								<td class="bdln w63"></td>
								<td class="txtCenter">
									<select name="select" class="w120">
										<option>選択</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>物件名</th>
								<td class="txtCenter">堀江様邸</td>
							</tr>
							<tr>
								<th>工務店名</th>
								<td class="txtCenter">住友不動産 鶴見営業所</td>
							</tr>
						</table>
					</div>
					<div class="boxRight w124">
						<table class="tableA noTtl">
							<tr>
								<th>選択したものに対し<br>原価項目を一括入力</th>
							</tr>
							<tr>
								<td class="">
									<div class="clearfix">
										<div class="boxRight">
											<select name="maker">
												<option value="メーカー選択">メーカー選択</option>
											</select>
										</div>
										<div class="boxRight">
											<button class="buttonA">実行</button>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<table class="tableB noTtl">
					<tr>
						<th class="w100"></th>
						<th class="bdln">品名</th>
						<th class="w175">品番</th>
						<th class="w66">数量</th>
						<th class="w63">単位</th>
						<th class="w127">単価</th>
						<th class="w111">原価項目</th>
					</tr>
					<tr>
						<td class="txtCenter">本体1</td>
						<td rowspan="6"></td>
						<td>
							<div class="clearfix">
								<div class="boxLeft mr7 w125"><input type="text" name="productNumber1" class="w100p"></div>
								<div class="boxLeft"><button class="buttonA">呼</button></div>
							</div>
						</td>
						<td><input type="text" name="quantity1-1" class="w100p"></td>
						<td><input type="text" name="unit1-1" class="w100p txtCenter" value="枚"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight w60"><input type="text" name="unitPrice1-1" class="txtRight w100p"></div>
								<div class="boxRight">
									<select name="unitPriceSelect1-1" class="mr7">
										<option value="なし">なし</option>
									</select>
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">補修液</td>
						<td></td>
						<td><input type="text" name="quantity1-2" class="w100p"></td>
						<td>
							<select name="unitPriceSelect1-2" class="mr7">
								<option value="セット">セット</option>
								<option value="本">本</option>
								<option value="袋">袋</option>
								<option value="式">式</option>
								<option value="枚">枚</option>
							</select>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice1-2" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">補修液</td>
						<td></td>
						<td><input type="text" name="quantity1-3" class="w100p"></td>
						<td>
							<select name="unitPriceSelect1-3" class="mr7">
								<option value="セット">セット</option>
								<option value="本">本</option>
								<option value="袋">袋</option>
								<option value="式">式</option>
								<option value="枚">枚</option>
							</select>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice1-3" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">モエン用釘</td>
						<td></td>
						<td><input type="text" name="quantity1-4" class="w100p"></td>
						<td>
							<select name="unitPriceSelect1-4" class="mr7">
								<option value="セット">セット</option>
								<option value="本">本</option>
								<option value="袋">袋</option>
								<option value="式">式</option>
								<option value="枚">枚</option>
							</select>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice1-4" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">長尺出隅</td>
						<td></td>
						<td><input type="text" name="quantity1-5" class="w100p"></td>
						<td><input type="text" name="unit1-5" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice1-5" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">短尺出隅</td>
						<td></td>
						<td><input type="text" name="quantity1-6" class="w100p"></td>
						<td><input type="text" name="unit1-6" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice1-6" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">本体2</td>
						<td rowspan="6"></td>
						<td>
							<div class="clearfix">
								<div class="boxLeft mr7 w125"><input type="text" name="productNumber1" class="w100p"></div>
								<div class="boxLeft"><button class="buttonA">呼</button></div>
							</div>
						</td>
						<td><input type="text" name="quantity2-1" class="w100p"></td>
						<td><input type="text" name="unit2-1" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight w60"><input type="text" name="unitPrice2-1" class="txtRight w100p"></div>
								<div class="boxRight">
									<select name="unitPriceSelect2-1" class="mr7">
										<option value="なし">なし</option>
									</select>
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">補修液</td>
						<td></td>
						<td><input type="text" name="quantity2-2" class="w100p"></td>
						<td>
							<select name="unitPriceSelect2-1" class="mr7">
								<option value="セット">セット</option>
								<option value="本">本</option>
								<option value="袋">袋</option>
								<option value="式">式</option>
								<option value="枚">枚</option>
							</select>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice2-2" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">補修液</td>
						<td></td>
						<td><input type="text" name="quantity2-3" class="w100p"></td>
						<td>
							<select name="unitPriceSelect2-2" class="mr7">
								<option value="セット">セット</option>
								<option value="本">本</option>
								<option value="袋">袋</option>
								<option value="式">式</option>
								<option value="枚">枚</option>
							</select>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice2-3" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">モエン用釘</td>
						<td></td>
						<td><input type="text" name="quantity2-4" class="w100p"></td>
						<td>
							<select name="unitPriceSelect2-3" class="mr7">
								<option value="セット">セット</option>
								<option value="本">本</option>
								<option value="袋">袋</option>
								<option value="式">式</option>
								<option value="枚">枚</option>
							</select>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice2-4" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">長尺出隅</td>
						<td></td>
						<td><input type="text" name="quantity2-5" class="w100p"></td>
						<td><input type="text" name="unit2-5" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice2-5" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">短尺出隅</td>
						<td></td>
						<td><input type="text" name="quantity2-6" class="w100p"></td>
						<td><input type="text" name="unit2-6" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice2-6" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">本体3</td>
						<td rowspan="6"></td>
						<td>
							<div class="clearfix">
								<div class="boxLeft mr7 w125"><input type="text" name="productNumber1" class="w100p"></div>
								<div class="boxLeft"><button class="buttonA">呼</button></div>
							</div>
						</td>
						<td><input type="text" name="quantity3-1" class="w100p"></td>
						<td><input type="text" name="unit3-1" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight w60"><input type="text" name="unitPrice3-1" class="txtRight w100p"></div>
								<div class="boxRight w60">
									<select name="unitPriceSelect3-1" class="mr7">
										<option value="なし">なし</option>
									</select>
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">補修液</td>
						<td></td>
						<td><input type="text" name="quantity3-2" class="w100p"></td>
						<td>
							<select name="unitPriceSelect3-1" class="mr7">
								<option value="セット">セット</option>
								<option value="本">本</option>
								<option value="袋">袋</option>
								<option value="式">式</option>
								<option value="枚">枚</option>
							</select>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice3-2" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">補修液</td>
						<td></td>
						<td><input type="text" name="quantity3-3" class="w100p"></td>
						<td>
							<select name="unitPriceSelect3-2" class="mr7">
								<option value="セット">セット</option>
								<option value="本">本</option>
								<option value="袋">袋</option>
								<option value="式">式</option>
								<option value="枚">枚</option>
							</select>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice3-3" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">モエン用釘</td>
						<td></td>
						<td><input type="text" name="quantity3-4" class="w100p"></td>
						<td>
							<select name="unitPriceSelect3-3" class="mr7">
								<option value="セット">セット</option>
								<option value="本">本</option>
								<option value="袋">袋</option>
								<option value="式">式</option>
								<option value="枚">枚</option>
							</select>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice3-4" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">長尺出隅</td>
						<td></td>
						<td><input type="text" name="quantity3-5" class="w100p"></td>
						<td><input type="text" name="unit3-5" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice3-5" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="txtCenter">短尺出隅</td>
						<td></td>
						<td><input type="text" name="quantity3-6" class="w100p"></td>
						<td><input type="text" name="unit3-6" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight"><input type="text" name="unitPrice3-6" class="txtRight w63"></div>
								<div class="boxRight"></div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="productName4-1" class="txtCenter w100p"></td>
						<td><input type="text" name="productName4-2" class="txtCenter w100p"></td>
						<td><input type="text" name="productNumber4" class="w100p"></td>
						<td><input type="text" name="quantity4" class="w100p"></td>
						<td><input type="text" name="unit4" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice4" class="txtRight w63">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<select name="productName5-1" class="w100p">
								<option>選択</option>
							</select>
						</td>
						<td><input type="text" name="productName5-2" class="txtCenter w100p"></td>
						<td><input type="text" name="productNumber5" class="w100p"></td>
						<td><input type="text" name="quantity5" class="w100p"></td>
						<td><input type="text" name="unit5" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice5" class="txtRight w63">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="productName6-1" class="txtCenter w100p"></td>
						<td><input type="text" name="productName6-2" class="txtCenter w100p"></td>
						<td><input type="text" name="productNumber6" class="w100p"></td>
						<td><input type="text" name="quantity6" class="w100p"></td>
						<td><input type="text" name="unit6" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice6" class="txtRight w63">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="productName7-1" class="txtCenter w100p"></td>
						<td><input type="text" name="productName7-2" class="txtCenter w100p"></td>
						<td><input type="text" name="productNumber7" class="w100p"></td>
						<td><input type="text" name="quantity7" class="w100p"></td>
						<td><input type="text" name="unit7" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice7" class="txtRight w63">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="productName8-1" class="txtCenter w100p"></td>
						<td><input type="text" name="productName8-2" class="txtCenter w100p"></td>
						<td><input type="text" name="productNumber8" class="w100p"></td>
						<td><input type="text" name="quantity8" class="w100p"></td>
						<td><input type="text" name="unit8" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice8" class="txtRight w63">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="productName9-1" class="txtCenter w100p"></td>
						<td><input type="text" name="productName9-2" class="txtCenter w100p"></td>
						<td><input type="text" name="productNumber9" class="w100p"></td>
						<td><input type="text" name="quantity9" class="w100p"></td>
						<td><input type="text" name="unit9" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice9" class="txtRight w63">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="productName10-1" class="txtCenter w100p"></td>
						<td><input type="text" name="productName10-2" class="txtCenter w100p"></td>
						<td><input type="text" name="productNumber10" class="w100p"></td>
						<td><input type="text" name="quantity10" class="w100p"></td>
						<td><input type="text" name="unit10" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice10" class="txtRight w63">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="productName11-1" class="txtCenter w100p"></td>
						<td><input type="text" name="productName11-2" class="txtCenter w100p"></td>
						<td><input type="text" name="productNumber11" class="w100p"></td>
						<td><input type="text" name="quantity11" class="w100p"></td>
						<td><input type="text" name="unit11" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice11" class="txtRight w63">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="productName12-1" class="txtCenter w100p"></td>
						<td><input type="text" name="productName12-2" class="txtCenter w100p" value="モエン釘"></td>
						<td>
							<select name="productNumber12" class="w100p">
								<option>選択</option>
							</select>
						</td>
						<td><input type="text" name="quantity12" class="w100p"></td>
						<td><input type="text" name="unit12" class="w100p txtCenter" value="箱"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice12" class="txtRight w63" value="870">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="productName13-1" class="txtCenter w100p"></td>
						<td><input type="text" name="productName13-2" class="txtCenter w100p" value="縦張り釘打補助素材"></td>
						<td><input type="text" name="productNumber13" class="w100p"></td>
						<td><input type="text" name="quantity13" class="w100p"></td>
						<td><input type="text" name="unit13" class="w100p txtCenter" value="本"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice13" class="txtRight w63">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="productName14-1" class="txtCenter w100p"></td>
						<td><input type="text" name="productName14-2" class="txtCenter w100p"></td>
						<td><input type="text" name="productNumber14" class="w100p"></td>
						<td><input type="text" name="quantity14" class="w100p"></td>
						<td><input type="text" name="unit14" class="w100p txtCenter" value="式"></td>
						<td>
							<div class="clearfix">
								<div class="boxRight">
									<input type="text" name="unitPrice14" class="txtRight w63">
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="boxLeft w23">
									<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01"></label>
										</div>
								</div>
								<div class="boxLeft w84"><input type="text" name="" class="w100p"></div>
							</div>
						</td>
					</tr>
				</table>
				<table class="tableA noTtl mb20">
					<tr>
						<th class="w63">希望納期</th>
						<td>
							<ul class="dateSortingArea horizontal">
								<li>
									<select name="yearStart" class="w105">
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
									<select name="monthStart" class="w72">
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
									<select name="dayStart" class="w72">
										<option>日選択</option>
										<option value="日1">1日</option>
										<option value="日2">2日</option>
										<option value="日3">3日</option>
										<option value="日4">4日</option>
										<option value="日5">5日</option>
										<option value="日6">6日</option>
										<option value="日7">7日</option>
										<option value="日8">8日</option>
										<option value="日9">9日</option>
										<option value="10日">10日</option>
										<option value="11日">11日</option>
										<option value="12日">12日</option>
										<option value="13日">13日</option>
										<option value="14日">14日</option>
										<option value="15日">15日</option>
										<option value="16日">16日</option>
										<option value="17日">17日</option>
										<option value="18日">18日</option>
										<option value="19日">19日</option>
										<option value="20日">20日</option>
										<option value="21日">21日</option>
										<option value="22日">22日</option>
										<option value="23日">23日</option>
										<option value="24日">24日</option>
										<option value="25日">25日</option>
										<option value="26日">26日</option>
										<option value="27日">27日</option>
										<option value="28日">28日</option>
										<option value="29日">29日</option>
										<option value="30日">30日</option>
										<option value="31日">31日</option>
									</select>
								</li>
								<li>
									<select name="dayOfTheWeek" class="w105">
										<option>曜日選択</option>
										<option value="月曜日">月曜日</option>
										<option value="火曜日">火曜日</option>
										<option value="水曜日">水曜日</option>
										<option value="木曜日">木曜日</option>
										<option value="金曜日">金曜日</option>
										<option value="土曜日">土曜日</option>
										<option value="日曜日">日曜日</option>
									</select>
								</li>
								<li>
									<select name="deliveryDate1" class="w72">
										<option>選択</option>
									</select>
								</li>
								<li>
									<select name="deliveryDate2" class="w72">
										<option>選択</option>
									</select>
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>車種</th>
						<td>
							<div class="clearfix">
								<div class="boxLeft mr7">
									<select name="modelOfCar1" class="w100">
										<option>選択</option>
									</select>
								</div>
								<div class="boxLeft">
									<select name="modelOfCar2" class="w307">
										<option>選択</option>
									</select>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<th>納品場所</th>
						<td><input type="text" name="deliveryPlace" class="w100p" value="川崎市川崎1-1-1"></td>
					</tr>
					<tr>
						<th rowspan="2">備考</th>
						<td>
							<div class="clearfix">
								<div class="boxLeft"><input type="text" class="w210 mr7" name="remark1" placeholder="※納期回答をお願いします">発注書計</div>
								<div class="boxRight">0</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" class="w100p" name="remark2">
						</td>
					</tr>
				</table>
				<div class="txtCenter ">
					<button class="buttonA buttonALarge">上記内容で発行する<br>確認画面へ</button>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>