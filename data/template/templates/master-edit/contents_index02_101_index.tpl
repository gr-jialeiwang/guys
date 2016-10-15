<!--{if $view_flg1 == 0}-->
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<!--{else}-->
	<!--{if is_array($arrForm.err_msg)}-->
		<div class="errorBox">
			<!--{foreach from=$arrForm.err_msg key=key item=value name=cnt}-->
				<p class="error"><!--{$value}--></p>
			<!--{/foreach}-->
		</div>
	<!--{else}-->
		<!--{if is_array($arrForm.err_msg2)}-->
			<div class="errorBox">
				<!--{foreach from=$arrForm.err_msg2 key=key item=value name=cnt}-->
					<p class="error"><!--{$value}--></p>
				<!--{/foreach}-->
			</div>
		<!--{/if}-->
		<form action="?" method="POST">
			<input type="hidden" name="mode" id="mode" value="regist" />
			<div class="container">
				<div class="pageTitle clearfix">
					<div class="boxLeft mr8">
						<div class="btnBack"><a href="index.php">戻る</a></div>
					</div>
					<div class="boxLeft mr20">
						<h2>各種マスタ編集／共通系・その他 マスタ</h2>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload m0" type="submit">登録・更新する</button>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft w470">
						<!--{assign var="masterCategoryName" value="constructionCategory"}-->
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>工事カテゴリー</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7" onclick="master_form_view('<!--{$masterCategoryName}-->');">+</a>
								</div>
							</div>
						</div>
						<div class="mb30 disp_none" id="master_form_reg_<!--{$masterCategoryName}-->">
							<input class="w326" id="master_reg_<!--{$masterCategoryName}-->" type="text" value="">
							<button class="buttonA" type="button" onclick="reg_master_new('<!--{$masterCategoryName}-->');">登録</button>
						</div>
						<div class="mb30 disp_none" id="master_form_edit_<!--{$masterCategoryName}-->" value="">
							<input class="w326" id="master_edit_<!--{$masterCategoryName}-->" type="text" value="">
							<input class="w326" id="master_edit_id_<!--{$masterCategoryName}-->" type="hidden" value="">
							<button class="buttonA" type="button" onclick="reg_master('<!--{$masterCategoryName}-->');">修正</button>
						</div>
						<table class="tableA" id="master_<!--{$masterCategoryName}-->_table">
							<!--{foreach from=$selectMaster.$masterCategoryName key=key item=value name=cnt}-->
								<tr id="<!--{$masterCategoryName}-->_<!--{$value.masterId}-->">
									<th class="w100 txtCenter"><!--{$smarty.foreach.cnt.iteration}--></th>
									<td>
										<span id="master_name_<!--{$value.masterId}-->"><!--{$value.name}--></span>
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][masterCategory]" value="<!--{$masterCategoryName}-->" id="master_masterCategory_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][name]" value="<!--{$value.name}-->" id="master_name_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][masterId]" value="<!--{$value.masterId}-->" id="master_masterId_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][delFlg]" value="<!--{$value.delFlg}-->" id="master_delFlg_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][checkDel]" value="1" id="master_checkDel_hidden_<!--{$value.masterId}-->">
									</td>
									<td class="bdl w72">
										<div class="boxRight">
											<!--{if $value.delFlg == 1}-->
												<p class="iconLink"><a href="#" onclick="del_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											<!--{/if}-->
											<!--{if $value.delFlg == 2}-->
												<a href="#" class="buttonA" onclick="edit_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')">修正</a>
											<!--{/if}-->
										</div>
									</td>
								</tr>
							<!--{/foreach}-->
						</table>
						<!--{assign var="masterCategoryName" value="constructionType"}-->
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>工事タイプ</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<div id="constructionTypeBox">
							<table class="tableA">
								<tr>
									<th class="w100 txtCenter">工事カテゴリー</th>
									<td>
										<select name="constructionCategory1" class="w220">
											<option value="選択しない">選択しない</option>
											<option value="サイディング">サイディング</option>
											<option value="屋根">屋根</option>
											<option value="外構">外構</option>
											<option value="太陽光">太陽光</option>
											<option value="パワーボード">パワーボード</option>
										</select>
									</td>
									<td class="bdl w72">
										<div class="boxRight">
											<a href="#" class="btnIncrease">+</a>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">1-1</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">1-2</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">1-3</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">1-4</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
							</table>
							<table class="tableA">
								<tr>
									<th class="w100 txtCenter">工事カテゴリー</th>
									<td>
										<select name="constructionCategory2" class="w220">
											<option value="選択しない">選択しない</option>
											<option value="サイディング">サイディング</option>
											<option value="屋根">屋根</option>
											<option value="外構">外構</option>
											<option value="太陽光">太陽光</option>
											<option value="パワーボード">パワーボード</option>
										</select>
									</td>
									<td class="bdl w72">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">2-1</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
										<div class="boxRight">
											<a href="#" class="btnIncrease mr7 mt3">+</a>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">2-2</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">2-3</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">2-4</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
							</table>
							<table class="tableA">
								<tr>
									<th class="w100 txtCenter">工事カテゴリー</th>
									<td>
										<select name="constructionCategory3" class="w220">
											<option value="選択しない">選択しない</option>
											<option value="サイディング">サイディング</option>
											<option value="屋根">屋根</option>
											<option value="外構">外構</option>
											<option value="太陽光">太陽光</option>
											<option value="パワーボード">パワーボード</option>
										</select>
									</td>
									<td class="bdl w72">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">3-1</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
										<div class="boxRight">
											<a href="#" class="btnIncrease mr7 mt3">+</a>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">3-2</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">3-3</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
								<tr>
									<th class="txtCenter">3-4</th>
									<td>□□□□□□□□□□□</td>
									<td class="bdl">
										<div class="boxRight">
											<p class="iconLink"><a href="#"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										</div>
									</td>
								</tr>
							</table>
						</div>
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>消費税率</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7">+</a>
								</div>
							</div>
						</div>
						<table class="tableA">
							<tr>
								<th class="txtCenter w23" rowspan="3">1</th>
								<th class="w48">税率</th>
								<td class="txtCenter">8</td>
								<td class="bdl w72">％</td>
							</tr>
							<tr>
								<th>From</th>
								<td class="txtCenter" colspan="2">ー</td>
							</tr>
							<tr>
								<th>To</th>
								<td colspan="2">
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="yearTo1" class="w105">
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
											<select name="monthTo1" class="w72">
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
											<select name="dayTo1" class="w72">
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
							</tr>
							<tr>
								<th class="txtCenter w23" rowspan="3">2</th>
								<th class="w48">税率</th>
								<td class="txtCenter">10</td>
								<td class="bdl w72">％</td>
							</tr>
							<tr>
								<th>From</th>
								<td class="txtCenter" colspan="2">
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="yearFrom2" class="w105">
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
											<select name="monthFrom2" class="w72">
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
											<select name="dayFrom2" class="w72">
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
							</tr>
							<tr>
								<th>To</th>
								<td colspan="2">
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="yearTo2" class="w105">
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
											<select name="monthTo2" class="w72">
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
											<select name="dayTo2" class="w72">
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
							</tr>
						</table>
					</div>
					<div class="boxRight w470">
						<!--{assign var="masterCategoryName" value="typeOfAccount"}-->
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>口座種類</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7" onclick="master_form_view('<!--{$masterCategoryName}-->');">+</a>
								</div>
							</div>
						</div>
						<div class="mb30 disp_none" id="master_form_reg_<!--{$masterCategoryName}-->">
							<input class="w326" id="master_reg_<!--{$masterCategoryName}-->" type="text" value="">
							<button class="buttonA" type="button" onclick="reg_master_new('<!--{$masterCategoryName}-->');">登録</button>
						</div>
						<div class="mb30 disp_none" id="master_form_edit_<!--{$masterCategoryName}-->" value="">
							<input class="w326" id="master_edit_<!--{$masterCategoryName}-->" type="text" value="">
							<input class="w326" id="master_edit_id_<!--{$masterCategoryName}-->" type="hidden" value="">
							<button class="buttonA" type="button" onclick="reg_master('<!--{$masterCategoryName}-->');">修正</button>
						</div>
						<table class="tableA">
							<!--{foreach from=$selectMaster.$masterCategoryName key=key item=value name=cnt}-->
								<tr id="<!--{$masterCategoryName}-->_<!--{$value.masterId}-->">
									<th class="w100 txtCenter"><!--{$smarty.foreach.cnt.iteration}--></th>
									<td>
										<span id="master_name_<!--{$value.masterId}-->"><!--{$value.name}--></span>
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][name]" value="<!--{$value.name}-->" id="master_name_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][masterId]" value="<!--{$value.masterId}-->" id="master_masterId_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][delFlg]" value="<!--{$value.delFlg}-->" id="master_delFlg_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][checkDel]" value="1" id="master_checkDel_hidden_<!--{$value.masterId}-->">
									</td>
									<td class="bdl w72">
										<div class="boxRight">
											<!--{if $value.delFlg == 1}-->
												<p class="iconLink"><a href="#" onclick="del_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											<!--{/if}-->
											<!--{if $value.delFlg == 2}-->
												<a href="#" class="buttonA" onclick="edit_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')">修正</a>
											<!--{/if}-->
										</div>
									</td>
								</tr>
							<!--{/foreach}-->
						</table>
						<!--{assign var="masterCategoryName" value="maker"}-->
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>メーカー</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7" onclick="master_form_view('<!--{$masterCategoryName}-->');">+</a>
								</div>
							</div>
						</div>
						<div class="mb30 disp_none" id="master_form_reg_<!--{$masterCategoryName}-->">
							<input class="w326" id="master_reg_<!--{$masterCategoryName}-->" type="text" value="">
							<button class="buttonA" type="button" onclick="reg_master_new('<!--{$masterCategoryName}-->');">登録</button>
						</div>
						<div class="mb30 disp_none" id="master_form_edit_<!--{$masterCategoryName}-->" value="">
							<input class="w326" id="master_edit_<!--{$masterCategoryName}-->" type="text" value="">
							<input class="w326" id="master_edit_id_<!--{$masterCategoryName}-->" type="hidden" value="">
							<button class="buttonA" type="button" onclick="reg_master('<!--{$masterCategoryName}-->');">修正</button>
						</div>
						<table class="tableA">
							<!--{foreach from=$selectMaster.$masterCategoryName key=key item=value name=cnt}-->
								<tr id="<!--{$masterCategoryName}-->_<!--{$value.masterId}-->">
									<th class="w100 txtCenter"><!--{$smarty.foreach.cnt.iteration}--></th>
									<td>
										<span id="master_name_<!--{$value.masterId}-->"><!--{$value.name}--></span>
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][name]" value="<!--{$value.name}-->" id="master_name_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][masterId]" value="<!--{$value.masterId}-->" id="master_masterId_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][delFlg]" value="<!--{$value.delFlg}-->" id="master_delFlg_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][checkDel]" value="1" id="master_checkDel_hidden_<!--{$value.masterId}-->">
									</td>
									<td class="bdl w72">
										<div class="boxRight">
											<!--{if $value.delFlg == 1}-->
												<p class="iconLink"><a href="#" onclick="del_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											<!--{/if}-->
											<!--{if $value.delFlg == 2}-->
												<a href="#" class="buttonA" onclick="edit_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')">修正</a>
											<!--{/if}-->
										</div>
									</td>
								</tr>
							<!--{/foreach}-->
						</table>
						<!--{assign var="masterCategoryName" value="unit"}-->
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>単位</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7" onclick="master_form_view('<!--{$masterCategoryName}-->');">+</a>
								</div>
							</div>
						</div>
						<div class="mb30 disp_none" id="master_form_reg_<!--{$masterCategoryName}-->">
							<input class="w326" id="master_reg_<!--{$masterCategoryName}-->" type="text" value="">
							<button class="buttonA" type="button" onclick="reg_master_new('<!--{$masterCategoryName}-->');">登録</button>
						</div>
						<div class="mb30 disp_none" id="master_form_edit_<!--{$masterCategoryName}-->" value="">
							<input class="w326" id="master_edit_<!--{$masterCategoryName}-->" type="text" value="">
							<input class="w326" id="master_edit_id_<!--{$masterCategoryName}-->" type="hidden" value="">
							<button class="buttonA" type="button" onclick="reg_master('<!--{$masterCategoryName}-->');">修正</button>
						</div>
						<table class="tableA">
							<!--{foreach from=$selectMaster.$masterCategoryName key=key item=value name=cnt}-->
								<tr id="<!--{$masterCategoryName}-->_<!--{$value.masterId}-->">
									<th class="w100 txtCenter"><!--{$smarty.foreach.cnt.iteration}--></th>
									<td>
										<span id="master_name_<!--{$value.masterId}-->"><!--{$value.name}--></span>
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][name]" value="<!--{$value.name}-->" id="master_name_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][masterId]" value="<!--{$value.masterId}-->" id="master_masterId_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][delFlg]" value="<!--{$value.delFlg}-->" id="master_delFlg_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][checkDel]" value="1" id="master_checkDel_hidden_<!--{$value.masterId}-->">
									</td>
									<td class="bdl w72">
										<div class="boxRight">
											<!--{if $value.delFlg == 1}-->
												<p class="iconLink"><a href="#" onclick="del_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											<!--{/if}-->
											<!--{if $value.delFlg == 2}-->
												<a href="#" class="buttonA" onclick="edit_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')">修正</a>
											<!--{/if}-->
										</div>
									</td>
								</tr>
							<!--{/foreach}-->
						</table>
						<!--{assign var="masterCategoryName" value="siteSituation"}-->
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>工事情報／現場状況車種</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7" onclick="master_form_view('<!--{$masterCategoryName}-->');">+</a>
								</div>
							</div>
						</div>
						<div class="mb30 disp_none" id="master_form_reg_<!--{$masterCategoryName}-->">
							<input class="w326" id="master_reg_<!--{$masterCategoryName}-->" type="text" value="">
							<button class="buttonA" type="button" onclick="reg_master_new('<!--{$masterCategoryName}-->');">登録</button>
						</div>
						<div class="mb30 disp_none" id="master_form_edit_<!--{$masterCategoryName}-->" value="">
							<input class="w326" id="master_edit_<!--{$masterCategoryName}-->" type="text" value="">
							<input class="w326" id="master_edit_id_<!--{$masterCategoryName}-->" type="hidden" value="">
							<button class="buttonA" type="button" onclick="reg_master('<!--{$masterCategoryName}-->');">修正</button>
						</div>
						<table class="tableA">
							<!--{foreach from=$selectMaster.$masterCategoryName key=key item=value name=cnt}-->
								<tr id="<!--{$masterCategoryName}-->_<!--{$value.masterId}-->">
									<th class="w100 txtCenter"><!--{$smarty.foreach.cnt.iteration}--></th>
									<td>
										<span id="master_name_<!--{$value.masterId}-->"><!--{$value.name}--></span>
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][name]" value="<!--{$value.name}-->" id="master_name_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][masterId]" value="<!--{$value.masterId}-->" id="master_masterId_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][delFlg]" value="<!--{$value.delFlg}-->" id="master_delFlg_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][checkDel]" value="1" id="master_checkDel_hidden_<!--{$value.masterId}-->">
									</td>
									<td class="bdl w72">
										<div class="boxRight">
											<!--{if $value.delFlg == 1}-->
												<p class="iconLink"><a href="#" onclick="del_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											<!--{/if}-->
											<!--{if $value.delFlg == 2}-->
												<a href="#" class="buttonA" onclick="edit_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')">修正</a>
											<!--{/if}-->
										</div>
									</td>
								</tr>
							<!--{/foreach}-->
						</table>
						<!--{assign var="masterCategoryName" value="cashAdvance"}-->
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>立替項目</h3>
								</div>
								<div class="boxLeft">
									<div class="boxRight">
										<a href="#" class="btnIncrease mr7" onclick="master_form_view('<!--{$masterCategoryName}-->');">+</a>
									</div>
								</div>
							</div>
						</div>
						<div class="mb30 disp_none" id="master_form_reg_<!--{$masterCategoryName}-->">
							<input class="w326" id="master_reg_<!--{$masterCategoryName}-->" type="text" value="">
							<button class="buttonA" type="button" onclick="reg_master_new('<!--{$masterCategoryName}-->');">登録</button>
						</div>
						<div class="mb30 disp_none" id="master_form_edit_<!--{$masterCategoryName}-->" value="">
							<input class="w326" id="master_edit_<!--{$masterCategoryName}-->" type="text" value="">
							<input class="w326" id="master_edit_id_<!--{$masterCategoryName}-->" type="hidden" value="">
							<button class="buttonA" type="button" onclick="reg_master('<!--{$masterCategoryName}-->');">修正</button>
						</div>
						<table class="tableA">
							<!--{foreach from=$selectMaster.$masterCategoryName key=key item=value name=cnt}-->
								<tr id="<!--{$masterCategoryName}-->_<!--{$value.masterId}-->">
									<th class="w100 txtCenter"><!--{$smarty.foreach.cnt.iteration}--></th>
									<td>
										<span id="master_name_<!--{$value.masterId}-->"><!--{$value.name}--></span>
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][name]" value="<!--{$value.name}-->" id="master_name_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][masterId]" value="<!--{$value.masterId}-->" id="master_masterId_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][delFlg]" value="<!--{$value.delFlg}-->" id="master_delFlg_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][checkDel]" value="1" id="master_checkDel_hidden_<!--{$value.masterId}-->">
									</td>
									<td class="bdl w72">
										<div class="boxRight">
											<!--{if $value.delFlg == 1}-->
												<p class="iconLink"><a href="#" onclick="del_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											<!--{/if}-->
											<!--{if $value.delFlg == 2}-->
												<a href="#" class="buttonA" onclick="edit_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')">修正</a>
											<!--{/if}-->
										</div>
									</td>
								</tr>
							<!--{/foreach}-->
						</table>
						<!--{assign var="masterCategoryName" value="transportation"}-->
						<div class="headingB">
							<div class="clearfix">
								<div class="boxLeft mr10">
									<h3>労務申請／移動手段</h3>
								</div>
								<div class="boxLeft">
									<a href="#" class="btnIncrease mr7" onclick="master_form_view('<!--{$masterCategoryName}-->');">+</a>
								</div>
							</div>
						</div>
						<div class="mb30 disp_none" id="master_form_reg_<!--{$masterCategoryName}-->">
							<input class="w326" id="master_reg_<!--{$masterCategoryName}-->" type="text" value="">
							<button class="buttonA" type="button" onclick="reg_master_new('<!--{$masterCategoryName}-->');">登録</button>
						</div>
						<div class="mb30 disp_none" id="master_form_edit_<!--{$masterCategoryName}-->" value="">
							<input class="w326" id="master_edit_<!--{$masterCategoryName}-->" type="text" value="">
							<input class="w326" id="master_edit_id_<!--{$masterCategoryName}-->" type="hidden" value="">
							<button class="buttonA" type="button" onclick="reg_master('<!--{$masterCategoryName}-->');">修正</button>
						</div>
						<table class="tableA">
							<!--{foreach from=$selectMaster.$masterCategoryName key=key item=value name=cnt}-->
								<tr id="<!--{$masterCategoryName}-->_<!--{$value.masterId}-->">
									<th class="w100 txtCenter"><!--{$smarty.foreach.cnt.iteration}--></th>
									<td>
										<span id="master_name_<!--{$value.masterId}-->"><!--{$value.name}--></span>
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][name]" value="<!--{$value.name}-->" id="master_name_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][masterId]" value="<!--{$value.masterId}-->" id="master_masterId_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][delFlg]" value="<!--{$value.delFlg}-->" id="master_delFlg_hidden_<!--{$value.masterId}-->">
										<input type="hidden" name="masterForm[<!--{$masterCategoryName}-->][<!--{$smarty.foreach.cnt.iteration}-->][checkDel]" value="1" id="master_checkDel_hidden_<!--{$value.masterId}-->">
									</td>
									<td class="bdl w72">
										<div class="boxRight">
											<!--{if $value.delFlg == 1}-->
												<p class="iconLink"><a href="#" onclick="del_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')"><img src="../img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
											<!--{/if}-->
											<!--{if $value.delFlg == 2}-->
												<a href="#" class="buttonA" onclick="edit_master('<!--{$masterCategoryName}-->', '<!--{$value.masterId}-->')">修正</a>
											<!--{/if}-->
										</div>
									</td>
								</tr>
							<!--{/foreach}-->
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload" type="submit">登録・更新する</button>
					</div>
				</div>
			</div>
		</form>
	<!--{/if}-->
<!--{/if}-->

<tr id="constructionCategory1_tr">
	<th class="w100 txtCenter">工事カテゴリー</th>
	<td>
		<select name="masterForm[constructionCategory][__NO__][masterSubCategory]" class="w220">
			<option value="">選択しない</option>
			<!--{foreach from=$selectMaster.constructionCategory key=key item=value name=cnt}-->
				<option value="<!--{$value.masterId}-->"><!--{$value.name}--></option>
			<!--{/foreach}-->
		</select>
	</td>
	<td class="bdl w72">
		<div class="boxRight">
			<a href="#" class="btnIncrease" onclick="master_form_view_sub('constructionCategory');">+</a>
		</div>
	</td>
</tr>
