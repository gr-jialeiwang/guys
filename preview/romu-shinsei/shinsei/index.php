<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>労務申請：Guy's System</title>
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
			<section class="pageTop pb20">
				<div class="container">
					<nav id="subNavTop" class="navKoji">
						<ul>
							<li class="leftEnd"><a href="../../new_koji/index.php">新規工事登録</a></li>
							<li><a href="../../koji_search/index.php">工事情報</a></li>
							<li class="currentLink"><a href="../index.php">労務申請・承認</a></li>
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
							<h2>労務申請・承認</h2>
						</div>
						<div class="boxRight">
							<a href="../list/index.php" class="buttonA">申請一覧</a>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
				<div class="headingB mb10">
					<div class="clearfix mb10">
						<a href="#" class="btnDecrease mr7">-</a>
						<a href="#" class="btnIncrease">+</a>
					</div>
				</div>
				<table class="tableA mb40">
					<tr class="bdt">
						<th class="w111">作業日</th>
						<td class="w278">
							<ul class="dateSortingArea horizontal">
								<li>
									<select name="yearStart1" class="w63">
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
									<select name="monthStart1" class="w63">
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
									<select name="dayStart1" class="w63">
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
						</td>
						<th class="w83">工事番号</th>
						<td class="w120">
							<input type="text" class="w100p" name="constructionNumber1">
						</td>
						<td class="bdl" colspan="3">
							<button class="buttonA">呼び出し</button>
						</td>
					</tr>
					<tr>
						<th>工務店</th>
						<td><input type="text" name="contractor1" placeholder="※Semi Auto"></td>
						<th>現場名</th>
						<td colspan="2"><input type="text" class="w100p" name="constructionSite1" placeholder="※Semi Auto"></td>
						<th class="w95">承認管理者選択</th>
						<td>
							<select name="administrator1" class="w124" >
								<option>選択</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>作業時間</th>
						<td>
							<ul class="dateSortingArea horizontal">
								<li>
									<select name="hourStart1" class="w63">
										<option>時選択</option>
										<option value="1時">1時</option>
										<option value="2時">2時</option>
										<option value="3時">3時</option>
										<option value="4時">4時</option>
										<option value="5時">5時</option>
										<option value="6時">6時</option>
										<option value="7時">7時</option>
										<option value="8時">8時</option>
										<option value="9時">9時</option>
										<option value="10時">10時</option>
										<option value="11時">11時</option>
										<option value="12時">12時</option>
									</select>
									<select name="minuteStart1" class="w63">
										<option>分選択</option>
										<option value="0分">0分</option>
										<option value="1分">1分</option>
										<option value="2分">2分</option>
										<option value="3分">3分</option>
										<option value="4分">4分</option>
										<option value="5分">5分</option>
										<option value="6分">6分</option>
										<option value="7分">7分</option>
										<option value="8分">8分</option>
										<option value="9分">9分</option>
										<option value="10分">10分</option>
										<option value="11分">11分</option>
										<option value="12分">12分</option>
										<option value="13分">13分</option>
										<option value="14分">14分</option>
										<option value="15分">15分</option>
										<option value="16分">16分</option>
										<option value="17分">17分</option>
										<option value="18分">18分</option>
										<option value="19分">19分</option>
										<option value="20分">20分</option>
										<option value="21分">21分</option>
										<option value="22分">22分</option>
										<option value="23分">23分</option>
										<option value="24分">24分</option>
										<option value="25分">25分</option>
										<option value="26分">26分</option>
										<option value="27分">27分</option>
										<option value="28分">28分</option>
										<option value="29分">29分</option>
										<option value="30分">30分</option>
										<option value="31分">31分</option>
										<option value="32分">32分</option>
										<option value="33分">33分</option>
										<option value="34分">34分</option>
										<option value="35分">35分</option>
										<option value="36分">36分</option>
										<option value="37分">37分</option>
										<option value="38分">38分</option>
										<option value="39分">39分</option>
										<option value="40分">40分</option>
										<option value="41分">41分</option>
										<option value="42分">42分</option>
										<option value="43分">43分</option>
										<option value="44分">44分</option>
										<option value="45分">45分</option>
										<option value="46分">46分</option>
										<option value="47分">47分</option>
										<option value="48分">48分</option>
										<option value="49分">49分</option>
										<option value="50分">50分</option>
										<option value="51分">51分</option>
										<option value="52分">52分</option>
										<option value="53分">53分</option>
										<option value="54分">54分</option>
										<option value="55分">55分</option>
										<option value="56分">56分</option>
										<option value="57分">57分</option>
										<option value="58分">58分</option>
										<option value="59分">59分</option>
									</select>
								</li>
								<li class="divider">〜</li>
								<li>
									<select name="hourEnd1" class="w63">
										<option>時選択</option>
										<option value="1時">1時</option>
										<option value="2時">2時</option>
										<option value="3時">3時</option>
										<option value="4時">4時</option>
										<option value="5時">5時</option>
										<option value="6時">6時</option>
										<option value="7時">7時</option>
										<option value="8時">8時</option>
										<option value="9時">9時</option>
										<option value="10時">10時</option>
										<option value="11時">11時</option>
										<option value="12時">12時</option>
									</select>
									<select name="minuteEnd1" class="w63 mr0">
										<option>分選択</option>
										<option value="0分">0分</option>
										<option value="1分">1分</option>
										<option value="2分">2分</option>
										<option value="3分">3分</option>
										<option value="4分">4分</option>
										<option value="5分">5分</option>
										<option value="6分">6分</option>
										<option value="7分">7分</option>
										<option value="8分">8分</option>
										<option value="9分">9分</option>
										<option value="10分">10分</option>
										<option value="11分">11分</option>
										<option value="12分">12分</option>
										<option value="13分">13分</option>
										<option value="14分">14分</option>
										<option value="15分">15分</option>
										<option value="16分">16分</option>
										<option value="17分">17分</option>
										<option value="18分">18分</option>
										<option value="19分">19分</option>
										<option value="20分">20分</option>
										<option value="21分">21分</option>
										<option value="22分">22分</option>
										<option value="23分">23分</option>
										<option value="24分">24分</option>
										<option value="25分">25分</option>
										<option value="26分">26分</option>
										<option value="27分">27分</option>
										<option value="28分">28分</option>
										<option value="29分">29分</option>
										<option value="30分">30分</option>
										<option value="31分">31分</option>
										<option value="32分">32分</option>
										<option value="33分">33分</option>
										<option value="34分">34分</option>
										<option value="35分">35分</option>
										<option value="36分">36分</option>
										<option value="37分">37分</option>
										<option value="38分">38分</option>
										<option value="39分">39分</option>
										<option value="40分">40分</option>
										<option value="41分">41分</option>
										<option value="42分">42分</option>
										<option value="43分">43分</option>
										<option value="44分">44分</option>
										<option value="45分">45分</option>
										<option value="46分">46分</option>
										<option value="47分">47分</option>
										<option value="48分">48分</option>
										<option value="49分">49分</option>
										<option value="50分">50分</option>
										<option value="51分">51分</option>
										<option value="52分">52分</option>
										<option value="53分">53分</option>
										<option value="54分">54分</option>
										<option value="55分">55分</option>
										<option value="56分">56分</option>
										<option value="57分">57分</option>
										<option value="58分">58分</option>
										<option value="59分">59分</option>
									</select>
								</li>
							</ul>
						</td>
						<th>作業内容</th>
						<td colspan="4"><input type="text" class="w100p" name="jobDescription1"></td>
					</tr>
					<tr>
						<th>移動経路（往路）</th>
						<td>
							<ul class="horizontal">
								<li class="mr7"><input type="text" name="forwardStart1" class="w124"></li>
								<li class="mr7">→</li>
								<li><input type="text" name="forwardEnd1" class="w124"></li>
							</ul>
						</td>
						<th>移動手段選択</th>
						<td>
							<select name="transportation1-1" class="w100p">
								<option>選択</option>
							</select>
						</td>
						<th class="w60">交通費</th>
						<td class="w80"><input class="w80 txtRight" type="text" name="transportationExpenses1-1"></td>
						<td class="bdl">
							<div class="clearfix">
								<div class="boxLeft mr7"><button class="buttonA">往復</button></div>
								<div class="boxRight">
									<a href="#" class="btnIncrease mr7">+</a>
									<a href="#" class="btnDecrease">+</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<th>移動経路（復路）</th>
						<td>
							<ul class="horizontal">
								<li class="mr7"><input type="text" name="backwardEnd1" class="w124" placeholder="※Semi Auto"></li>
								<li class="mr7">←</li>
								<li><input type="text" name="backwardStart1" class="w124" placeholder="※Semi Auto"></li>
							</ul>
						</td>
						<th>移動手段選択</th>
						<td>
							<select name="transportation1-2" class="w100p">
								<option>選択</option>
							</select>
						</td>
						<th>交通費</th>
						<td class="w80"><input class="w80 txtRight" type="text" name="transportationExpenses1-2" placeholder="※Semi Auto"></td>
						<td class="bdl w95">
							<div class="clearfix">
								<div class="boxRight">
									<a href="#" class="btnIncrease mr7">+</a>
									<a href="#" class="btnDecrease">+</a>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>