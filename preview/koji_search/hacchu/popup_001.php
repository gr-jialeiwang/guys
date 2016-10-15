<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>発注リスト プレビュー：Guy's System</title>
<link rel="stylesheet" href="../../css/common.css">
<link rel="stylesheet" href="../../css/base.css">
<link rel="stylesheet" href="../../css/page.css">
<link rel="stylesheet" href="../../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../../js/function.js"></script>
<!-- jquery-ui -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
	$("#sortable").sortable({cancel:".disable-sort"}).disableSelection();
	$("#sortable_1").sortable({cancel:".disable-sort"}).disableSelection();
	$("#sortable_2").sortable({cancel:".disable-sort"}).disableSelection();
	$("#sortable_3").sortable({cancel:".disable-sort"}).disableSelection();
	$("#submit").click(function() {
		var result = $("#sortable").sortable("toArray");
		$("#result").val(result);
		var result_1 = $("#sortable_1").sortable("toArray");
		$("#result_1").val(result_1);
		var result_2 = $("#sortable_2").sortable("toArray");
		$("#result_2").val(result_2);
		$("form").submit();
	});
});
</script>
</head>
<body>
	<div class="wrapper">
		<form action="index.php" method="POST">
			<div class="container">
				<div class="headingB mb10">
					<h3>発注リスト</h3>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload">登録・更新する</button>
					</div>
					<div class="boxRight mt15 mr15">
						<button class="buttonA">プリントアウト</button>
					</div>
				</div>
				<ul id="sortable" class="ui-sortable bdtFirst">
					<li id="1" class="ui-sortable-handle" style="position: relative;">
						<p class="sortableIcon"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
						<ul id="sortable_1" class="ui-sortable">
							<li class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<th class="thBlue w36">防水紙</th>
											<th class="w60">備考／注記</th>
											<td colspan="9">タイベックシルバー差額 Ｂ表制作の上、請求</td>
										</tr>
									</tbody>
								</table>
								<table class="tableB">
									<tbody>
										<tr>
											<th colspan="3">品名</th>
											<th class="w184">仕様／規格／摘要</th>
											<th class="w100">品番</th>
											<th>種別</th>
											<th>数量</th>
											<th class="w36">単位</th>
											<th>単価</th>
											<th class="w90">金額</th>
											<th class="w75">在庫数</th>
											<th class="w25">削除</th>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="1_1" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3" class="w177">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">防水紙</div>
												</div>
											</td>
											<td class="w184">デュポンタイベックシルバー</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">5</td>
											<td class="txtCenter w36">本</td>
											<td class="txtRight">8,100</td>
											<td class="txtRight w90">40,500</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" height="15" width="15" alt="">
											</td>
											<td class="txtCenter w25">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="1_2" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">防水紙工事</div>
												</div>
											</td>
											<td class="w184">166㎡、テープ込み</td>
											<td class="w100"></td>
											<td>工事</td>
											<td class="txtRight">160.0</td>
											<td class="txtCenter w36">㎡</td>
											<td class="txtRight">191</td>
											<td class="txtRight w90">30,560</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="1_3" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">捨コーキング 変成シリコーン</div>
												</div>
											</td>
											<td class="w184">東郊産業、333ｍｌ</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">2</td>
											<td class="txtCenter w36">箱</td>
											<td class="txtRight">3,800</td>
											<td class="txtRight w90">7,600</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="1_4" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">配送費</div>
												</div>
											</td>
											<td class="w184">東郊産業</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">2</td>
											<td class="txtCenter w36">式</td>
											<td class="txtRight">250</td>
											<td class="txtRight w90">500</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="1_5" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">サッシ廻りコーキング工事</div>
												</div>
											</td>
											<td class="w184"></td>
											<td class="w100"></td>
											<td>工事</td>
											<td class="txtRight">1</td>
											<td class="txtCenter w36">式</td>
											<td class="txtRight">7,620</td>
											<td class="txtRight w90">7,620</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<th class="w25">発注メモ</th>
											<td><textarea name="memo1" class="w100p" rows="5"></textarea></td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
					</li>
					<li id="2" class="ui-sortable-handle" style="position: relative;">
						<p class="sortableIcon"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
						<ul id="sortable_2" class="ui-sortable">
							<li class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<th class="thBlue w36">胴縁</th>
											<th class="w60">備考／注記</th>
											<td colspan="9">志水商店 住建開発事業部発注</td>
										</tr>
									</tbody>
								</table>
								<table class="tableB">
									<tbody>
										<tr>
											<th colspan="3">品名</th>
											<th class="w184">仕様／規格／摘要</th>
											<th class="w100">品番</th>
											<th>種別</th>
											<th>数量</th>
											<th class="w36">単位</th>
											<th>単価</th>
											<th class="w90">金額</th>
											<th class="w75">在庫数</th>
											<th class="w25">削除</th>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="2_1" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">栂防腐胴縁半貫 104本</div>
												</div>
											</td>
											<td class="w184">（15＊45）3ｍ</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">100.0</td>
											<td class="txtCenter w36">本</td>
											<td class="txtRight">200</td>
											<td class="txtRight w90">20,000</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="txtCenter w25">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="2_2" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">栂防腐胴縁貫 93本-15本＝78本</div>
												</div>
											</td>
											<td class="w184">（15＊90）3ｍ</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">80.0</td>
											<td class="txtCenter w36">本</td>
											<td class="txtRight">360</td>
											<td class="txtRight w90">28,800</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="2_3" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">ブルーシート</div>
												</div>
											</td>
											<td class="w184">志水</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">1.0</td>
											<td class="txtCenter w36">枚</td>
											<td class="txtRight">480</td>
											<td class="txtRight w90">480</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="2_4" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">胴縁工事（住友単価）</div>
												</div>
											</td>
											<td class="w184">166㎡</td>
											<td class="w100"></td>
											<td>工事</td>
											<td class="txtRight">160</td>
											<td class="txtCenter w36">㎡</td>
											<td class="txtRight">191</td>
											<td class="txtRight w90">30.560</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<th class="w25">発注メモ</th>
											<td><textarea name="memo2" class="w100p" rows="5"></textarea></td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
					</li>
					<li id="3" class="ui-sortable-handle" style="position: relative;">
						<p class="sortableIcon"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
						<ul id="sortable_3" class="ui-sortable">
							<li class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<th class="thBlue w36">防水紙</th>
											<th class="w60">備考／注記</th>
											<td colspan="9">タイベックシルバー差額 Ｂ表制作の上、請求</td>
										</tr>
									</tbody>
								</table>
								<table class="tableB">
									<tbody>
										<tr>
											<th colspan="3">品名</th>
											<th class="w184">仕様／規格／摘要</th>
											<th class="w100">品番</th>
											<th>種別</th>
											<th>数量</th>
											<th class="w36">単位</th>
											<th>単価</th>
											<th class="w90">金額</th>
											<th class="w75">在庫数</th>
											<th class="w25">削除</th>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_1" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">本体</div>
												</div>
											</td>
											<td class="w184">ニチハ、14ＭＧ</td>
											<td class="w100">ＭＦＸ481</td>
											<td>材料</td>
											<td class="txtRight">124.0</td>
											<td class="txtCenter w36">枚</td>
											<td class="txtRight">1,700</td>
											<td class="txtRight w90">210,800</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="txtCenter w25">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_2" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">釘</div>
												</div>
											</td>
											<td class="w184">カラー</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">70.0</td>
											<td class="txtCenter w36">袋</td>
											<td class="txtRight">120</td>
											<td class="txtRight w90">8,400</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_3" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">低汚染補修液セット</div>
												</div>
											</td>
											<td class="w184">表地2＋目地</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">3.0</td>
											<td class="txtCenter w36">セット</td>
											<td class="txtRight">560</td>
											<td class="txtRight w90">1,680</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_4" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">釘打ちサイディング基本工事</div>
												</div>
											</td>
											<td class="w184">14㎜、145㎡</td>
											<td class="w100"></td>
											<td>工事</td>
											<td class="txtRight">140</td>
											<td class="txtCenter w36">㎡</td>
											<td class="txtRight">953</td>
											<td class="txtRight w90">133,420</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_5" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">仕上げシーリング（住友単価）</div>
												</div>
											</td>
											<td class="w184">14㎜、ハイボン、145㎡</td>
											<td class="w100"></td>
											<td>工事</td>
											<td class="txtRight">140</td>
											<td class="txtCenter w36">㎡</td>
											<td class="txtRight">553</td>
											<td class="txtRight w90">77,420</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_6" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">仕上げシーリング（住友単価）</div>
												</div>
											</td>
											<td class="w184">14㎜、ハイボン、145㎡</td>
											<td class="w100"></td>
											<td>工事</td>
											<td class="txtRight">140</td>
											<td class="txtCenter w36">㎡</td>
											<td class="txtRight">553</td>
											<td class="txtRight w90">77,420</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_7" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">本体</div>
												</div>
											</td>
											<td class="w184">ニチハ、16ＭＧ</td>
											<td class="w100">ＥＪ513Ｅ</td>
											<td>材料</td>
											<td class="txtRight">24.0</td>
											<td class="txtCenter w36">枚</td>
											<td class="txtRight">2,600</td>
											<td class="txtRight w90">62,400</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_8" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">釘</div>
												</div>
											</td>
											<td class="w184">カラー</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">2.0</td>
											<td class="txtCenter w36">袋</td>
											<td class="txtRight">170</td>
											<td class="txtRight w90">340</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_9" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">補修液</div>
												</div>
											</td>
											<td class="w184">表地</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">1.0</td>
											<td class="txtCenter w36">セット</td>
											<td class="txtRight">1,880</td>
											<td class="txtRight w90">1,880</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="3_10" class="ui-sortable-handle">
								<table class="tableB">
									<tbody>
										<tr>
											<td colspan="3">
												<div class="clearfix">
													<div class="boxLeft mr5">
														<p class="lh15"><img src="../../img/common/icon_sortable.png" height="10" width="18" alt="移動可"></p>
													</div>
													<div class="boxLeft w145">補修液</div>
												</div>
											</td>
											<td class="w184">目地</td>
											<td class="w100"></td>
											<td>材料</td>
											<td class="txtRight">1.0</td>
											<td class="txtCenter w36">セット</td>
											<td class="txtRight">760</td>
											<td class="txtRight w90">760</td>
											<td class="w75">
												<input type="text" name="zaikonumber" value="7" class="w40 mr7"><img src="../../img/common/icon_minus.png" alt="">
											</td>
											<td class="w25 txtCenter">
												<p class="iconLink"><a href="#"><img src="../../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li class="disable-sort">
								<table class="tableB">
									<tbody>
										<tr>
											<th class="w25">発注メモ</th>
											<td><textarea name="memo3" class="w100p" rows="5"></textarea></td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>