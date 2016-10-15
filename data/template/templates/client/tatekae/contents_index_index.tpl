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
		<form name="form1" action="?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->" method="POST">
			<input type="hidden" name="mode" id="mode" value="<!--{$editMode}-->">
			<input type="hidden" name="FN_codeNumberDel" value="<!--{$codeNumber}-->">
			<input type="hidden" name="FN_officeCodeDel" value="<!--{$officeCode}-->">
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="/">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>取引先 会社情報（新規登録／編集）</h2>
						</div>
						<div class="boxRight" id="client_del_single">
							<p class="textAnchor resetClientData"><a href="#" onclick="client_del_single();">この取引先を削除する</a></p>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w87">企業名</th>
							<td>
								<select name="codeNumber" class="w363" disabled="disabled">
									<option value="">選択</option>
									<!--{foreach from=$selectCompany key=key item=value name=cnt}-->
										<option value="<!--{$value.codeNumber}-->"<!--{if $select.codeNumber == $value.codeNumber}--> selected<!--{/if}-->><!--{$value.clientNameInSystem}--></option>
									<!--{/foreach}-->
								</select>
								<input type="hidden" name="codeNumber" value="<!--{$select.codeNumber}-->">
							</td>
							<th class="w63">事業所名</th>
							<td colspan="3">
								<ul class="horizontal">
									<li class="mr7">
										<input class="w326" name="office" type="text" value="<!--{$select.office}-->">
									</li>
									<li>
									<div class="radioBtn">
										<input type="hidden" name="noOffice" value="0">
										<input type="radio" name="noOffice" id="noOffice" value="1"<!--{if $select.noOffice == 1}--> checked<!--{/if}-->>
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
							<td>
								<input type="text" class="w135" name="officeCode" placeholder="000A00-00" value="<!--{$select.officeCode}-->">
								<input type="hidden" name="officeCode" value="<!--{$select.officeCode}-->">
							</td>
							<th>取引タイプ</th>
							<td>
								<input type="hidden" name="takeConstructionOrder" value="0">
								<input type="hidden" name="sellingMaterials" value="0">
								<input type="hidden" name="orderMaterials" value="0">
								<input type="hidden" name="orderConstruction" value="0">
								<ul class="horizontal">
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder" value="1"<!--{if $select.takeConstructionOrder == 1}--> checked<!--{/if}-->>
											<label for="dealType01">工事受注</label>
										</div>
									</li>
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType02" name="sellingMaterials" value="1"<!--{if $select.sellingMaterials == 1}--> checked<!--{/if}-->>
											<label for="dealType02">材料販売</label>
										</div>
									</li>
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType03" name="orderMaterials" value="1"<!--{if $select.orderMaterials == 1}--> checked<!--{/if}-->>
											<label for="dealType03">材料発注</label>
										</div>
									</li>
									<li>
										<div class="checkBox">
											<input type="checkbox" id="dealType04" name="orderConstruction" value="1"<!--{if $select.orderConstruction == 1}--> checked<!--{/if}-->>
											<label for="dealType04">工事発注</label>
										</div>
									</li>
								</ul>
							</td>
							<th>検索用テキスト</th>
							<td><input type="text" name="searchBox" class="w216" value="<!--{$select.searchBox}-->"></td>
						</tr>
					</table>
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload" type="submit">登録・更新する</button>
						</div>
					</div>
				</div>
			</section>
		</form>

		<div class="container">
			<nav id="subNav">
				<ul>
					<li class="leftEnd"><a href="../index.php?mode=detail&codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">基本情報</a></li>
					<li><a href="../hanbai-keiri.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">販売系経理情報</a></li>
					<li><a href="../shiire-keiri.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">仕入系経理情報</a></li>
					<li><a href="../hacchu/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">発注書設定</a></li>
					<li><a href="../worker/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">作業員情報</a></li>
					<li class="currentLink rightEnd"><a href="../tatekae/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">立替金情報</a></li>
					<li class="leftEnd"><a href="../request/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">依頼／受注履歴</a></li>
					<li><a href="../seikyusho/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">請求書一覧</a></li>
					<li><a href="../urikake/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">売掛金情報</a></li>
					<li><a href="../minyukin/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">未入金・不足工事一覧</a></li>
					<li><a href="../shiire-rireki/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">仕入／発注履歴</a></li>
					<li class="rightEnd"><a href="../kaikake/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">買掛金情報</a></li>
				</ul>
			</nav>
		</div>
		<!--{if $view_flg2 == 1}-->
			<form name="form1" action="?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->" method="POST">
				<input type="hidden" name="mode" id="mode" value="filter" />
				<div class="container">
					<div class="txtRight">
						<a href="tatekaekin.php" class="btnReload" >新規立替金登録</a>
					</div>
					<div class="searchFocusArea">
						<table class="tableA3">
							<tr>
								<th class="pr0">立替項目</th>
									<select name="cashAdvance" class="w242">
										<option value="">選択</option>
										<!--{foreach from=$selectMaster.cashAdvance key=key item=value name=cnt}-->
											<option value="<!--{$value.masterId}-->"<!--{if $arrForm.cashAdvance == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
										<!--{/foreach}-->
									</select>
								</td>
								<th class="pr0">処理ステータス</th>
								<td>
									<select name="processStatus" class="w242">
										<option value="">選択しない</option>
										<option value="1"<!--{if $arrForm.processStatus == 1}--> selected<!--{/if}-->>未請求</option>
										<option value="2"<!--{if $arrForm.processStatus == 2}--> selected<!--{/if}-->>相殺請求済み</option>
										<option value="3"<!--{if $arrForm.processStatus == 3}--> selected<!--{/if}-->>回収済み</option>
									</select>
								</td>
								<th class="pr0">出金科目</th>
								<td>
									<select name="numberOfPayment" class="w242">
										<option value="">選択</option>
										<!--{foreach from=$selectMaster.numberOfPayment key=key item=value name=cnt}-->
											<option value="<!--{$value.masterId}-->"<!--{if $arrForm.numberOfPayment == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
										<!--{/foreach}-->
									</select>
								</td>
							</tr>
							<tr>
								<th>日付</th>
								<td  colspan="5">
									<div class="clearfix">
										<div class="boxLeft">
											<ul class="dateSortingArea horizontal">
												<li>

													<select name="yearStart" class="w105">
														<option value="">年選択</option>
														<!--{foreach from=$checkupYearArr key=key item=value name=cnt}-->
															<option value="<!--{$value}-->"<!--{if $arrForm.yearStart == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
														<!--{/foreach}-->
													</select>
													<select name="monthStart" class="w72">
														<option value="">月選択</option>
														<option value="1"<!--{if $arrForm.monthStart == 1}--> selected<!--{/if}-->>1月</option>
														<option value="2"<!--{if $arrForm.monthStart == 2}--> selected<!--{/if}-->>2月</option>
														<option value="3"<!--{if $arrForm.monthStart == 3}--> selected<!--{/if}-->>3月</option>
														<option value="4"<!--{if $arrForm.monthStart == 4}--> selected<!--{/if}-->>4月</option>
														<option value="5"<!--{if $arrForm.monthStart == 5}--> selected<!--{/if}-->>5月</option>
														<option value="6"<!--{if $arrForm.monthStart == 6}--> selected<!--{/if}-->>6月</option>
														<option value="7"<!--{if $arrForm.monthStart == 7}--> selected<!--{/if}-->>7月</option>
														<option value="8"<!--{if $arrForm.monthStart == 8}--> selected<!--{/if}-->>8月</option>
														<option value="9"<!--{if $arrForm.monthStart == 9}--> selected<!--{/if}-->>9月</option>
														<option value="10"<!--{if $arrForm.monthStart == 10}--> selected<!--{/if}-->>10月</option>
														<option value="11"<!--{if $arrForm.monthStart == 11}--> selected<!--{/if}-->>11月</option>
														<option value="12"<!--{if $arrForm.monthStart == 12}--> selected<!--{/if}-->>12月</option>
													</select>
													<select name="dayStart" class="w72">
														<option value="">日選択</option>
														<option value="1"<!--{if $arrForm.dayStart == 1}--> selected<!--{/if}-->>1日</option>
														<option value="2"<!--{if $arrForm.dayStart == 2}--> selected<!--{/if}-->>2日</option>
														<option value="3"<!--{if $arrForm.dayStart == 3}--> selected<!--{/if}-->>3日</option>
														<option value="4"<!--{if $arrForm.dayStart == 4}--> selected<!--{/if}-->>4日</option>
														<option value="5"<!--{if $arrForm.dayStart == 5}--> selected<!--{/if}-->>5日</option>
														<option value="6"<!--{if $arrForm.dayStart == 6}--> selected<!--{/if}-->>6日</option>
														<option value="7"<!--{if $arrForm.dayStart == 7}--> selected<!--{/if}-->>7日</option>
														<option value="8"<!--{if $arrForm.dayStart == 8}--> selected<!--{/if}-->>8日</option>
														<option value="9"<!--{if $arrForm.dayStart == 9}--> selected<!--{/if}-->>9日</option>
														<option value="10"<!--{if $arrForm.dayStart == 10}--> selected<!--{/if}-->>10日</option>
														<option value="11"<!--{if $arrForm.dayStart == 11}--> selected<!--{/if}-->>11日</option>
														<option value="12"<!--{if $arrForm.dayStart == 12}--> selected<!--{/if}-->>12日</option>
														<option value="13"<!--{if $arrForm.dayStart == 13}--> selected<!--{/if}-->>13日</option>
														<option value="14"<!--{if $arrForm.dayStart == 14}--> selected<!--{/if}-->>14日</option>
														<option value="15"<!--{if $arrForm.dayStart == 15}--> selected<!--{/if}-->>15日</option>
														<option value="16"<!--{if $arrForm.dayStart == 16}--> selected<!--{/if}-->>16日</option>
														<option value="17"<!--{if $arrForm.dayStart == 17}--> selected<!--{/if}-->>17日</option>
														<option value="18"<!--{if $arrForm.dayStart == 18}--> selected<!--{/if}-->>18日</option>
														<option value="19"<!--{if $arrForm.dayStart == 19}--> selected<!--{/if}-->>19日</option>
														<option value="20"<!--{if $arrForm.dayStart == 20}--> selected<!--{/if}-->>20日</option>
														<option value="21"<!--{if $arrForm.dayStart == 21}--> selected<!--{/if}-->>21日</option>
														<option value="22"<!--{if $arrForm.dayStart == 22}--> selected<!--{/if}-->>22日</option>
														<option value="23"<!--{if $arrForm.dayStart == 23}--> selected<!--{/if}-->>23日</option>
														<option value="24"<!--{if $arrForm.dayStart == 24}--> selected<!--{/if}-->>24日</option>
														<option value="25"<!--{if $arrForm.dayStart == 25}--> selected<!--{/if}-->>25日</option>
														<option value="26"<!--{if $arrForm.dayStart == 26}--> selected<!--{/if}-->>26日</option>
														<option value="27"<!--{if $arrForm.dayStart == 27}--> selected<!--{/if}-->>27日</option>
														<option value="28"<!--{if $arrForm.dayStart == 28}--> selected<!--{/if}-->>28日</option>
														<option value="29"<!--{if $arrForm.dayStart == 29}--> selected<!--{/if}-->>29日</option>
														<option value="30"<!--{if $arrForm.dayStart == 30}--> selected<!--{/if}-->>30日</option>
														<option value="31"<!--{if $arrForm.dayStart == 31}--> selected<!--{/if}-->>31日</option>
													</select>
												</li>
												<li class="divider">〜</li>
												<li>
													<select name="yearEnd" class="w105">
														<option value="">年選択</option>
														<!--{foreach from=$checkupYearArr key=key item=value name=cnt}-->
															<option value="<!--{$value}-->"<!--{if $arrForm.yearEnd == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
														<!--{/foreach}-->
													</select>
													<select name="monthEnd" class="w72">
														<option value="">月選択</option>
														<option value="1"<!--{if $arrForm.monthEnd == 1}--> selected<!--{/if}-->>1月</option>
														<option value="2"<!--{if $arrForm.monthEnd == 2}--> selected<!--{/if}-->>2月</option>
														<option value="3"<!--{if $arrForm.monthEnd == 3}--> selected<!--{/if}-->>3月</option>
														<option value="4"<!--{if $arrForm.monthEnd == 4}--> selected<!--{/if}-->>4月</option>
														<option value="5"<!--{if $arrForm.monthEnd == 5}--> selected<!--{/if}-->>5月</option>
														<option value="6"<!--{if $arrForm.monthEnd == 6}--> selected<!--{/if}-->>6月</option>
														<option value="7"<!--{if $arrForm.monthEnd == 7}--> selected<!--{/if}-->>7月</option>
														<option value="8"<!--{if $arrForm.monthEnd == 8}--> selected<!--{/if}-->>8月</option>
														<option value="9"<!--{if $arrForm.monthEnd == 9}--> selected<!--{/if}-->>9月</option>
														<option value="10"<!--{if $arrForm.monthEnd == 10}--> selected<!--{/if}-->>10月</option>
														<option value="11"<!--{if $arrForm.monthEnd == 11}--> selected<!--{/if}-->>11月</option>
														<option value="12"<!--{if $arrForm.monthEnd == 12}--> selected<!--{/if}-->>12月</option>
													</select>
													<select name="dayEnd" class="w72">
														<option value="">日選択</option>
														<option value="1"<!--{if $arrForm.dayEnd == 1}--> selected<!--{/if}-->>1日</option>
														<option value="2"<!--{if $arrForm.dayEnd == 2}--> selected<!--{/if}-->>2日</option>
														<option value="3"<!--{if $arrForm.dayEnd == 3}--> selected<!--{/if}-->>3日</option>
														<option value="4"<!--{if $arrForm.dayEnd == 4}--> selected<!--{/if}-->>4日</option>
														<option value="5"<!--{if $arrForm.dayEnd == 5}--> selected<!--{/if}-->>5日</option>
														<option value="6"<!--{if $arrForm.dayEnd == 6}--> selected<!--{/if}-->>6日</option>
														<option value="7"<!--{if $arrForm.dayEnd == 7}--> selected<!--{/if}-->>7日</option>
														<option value="8"<!--{if $arrForm.dayEnd == 8}--> selected<!--{/if}-->>8日</option>
														<option value="9"<!--{if $arrForm.dayEnd == 9}--> selected<!--{/if}-->>9日</option>
														<option value="10"<!--{if $arrForm.dayEnd == 10}--> selected<!--{/if}-->>10日</option>
														<option value="11"<!--{if $arrForm.dayEnd == 11}--> selected<!--{/if}-->>11日</option>
														<option value="12"<!--{if $arrForm.dayEnd == 12}--> selected<!--{/if}-->>12日</option>
														<option value="13"<!--{if $arrForm.dayEnd == 13}--> selected<!--{/if}-->>13日</option>
														<option value="14"<!--{if $arrForm.dayEnd == 14}--> selected<!--{/if}-->>14日</option>
														<option value="15"<!--{if $arrForm.dayEnd == 15}--> selected<!--{/if}-->>15日</option>
														<option value="16"<!--{if $arrForm.dayEnd == 16}--> selected<!--{/if}-->>16日</option>
														<option value="17"<!--{if $arrForm.dayEnd == 17}--> selected<!--{/if}-->>17日</option>
														<option value="18"<!--{if $arrForm.dayEnd == 18}--> selected<!--{/if}-->>18日</option>
														<option value="19"<!--{if $arrForm.dayEnd == 19}--> selected<!--{/if}-->>19日</option>
														<option value="20"<!--{if $arrForm.dayEnd == 20}--> selected<!--{/if}-->>20日</option>
														<option value="21"<!--{if $arrForm.dayEnd == 21}--> selected<!--{/if}-->>21日</option>
														<option value="22"<!--{if $arrForm.dayEnd == 22}--> selected<!--{/if}-->>22日</option>
														<option value="23"<!--{if $arrForm.dayEnd == 23}--> selected<!--{/if}-->>23日</option>
														<option value="24"<!--{if $arrForm.dayEnd == 24}--> selected<!--{/if}-->>24日</option>
														<option value="25"<!--{if $arrForm.dayEnd == 25}--> selected<!--{/if}-->>25日</option>
														<option value="26"<!--{if $arrForm.dayEnd == 26}--> selected<!--{/if}-->>26日</option>
														<option value="27"<!--{if $arrForm.dayEnd == 27}--> selected<!--{/if}-->>27日</option>
														<option value="28"<!--{if $arrForm.dayEnd == 28}--> selected<!--{/if}-->>28日</option>
														<option value="29"<!--{if $arrForm.dayEnd == 29}--> selected<!--{/if}-->>29日</option>
														<option value="30"<!--{if $arrForm.dayEnd == 30}--> selected<!--{/if}-->>30日</option>
														<option value="31"<!--{if $arrForm.dayEnd == 31}--> selected<!--{/if}-->>31日</option>
													</select>
												</li>
											</ul>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="6" class="txtCenter">
									<button class="buttonA" mode="submit">上記で表示を絞り込む </button>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</form>
			<div class="container">
				<div class="clearfix">
					<div class="boxRight">
						<div class="pagination">
							<p class="resultStates"><!--{$countSelectQuery}-->件中<!--{$pagingArr.start_view}-->〜<!--{$pagingArr.end_view}-->件</p>
							<ul class="paging">
								<!--{if $pagingArr.p_cnt > 1 && $pagingArr.rev != ""}-->
									<li class="toFirstPage"><a href="?page=1<!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}-->" >最初へ</a></li>
								<!--{/if}-->
								<!--{if $pagingArr.rev != ""}-->
									<li><a href="?page=<!--{$pagingArr.rev}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}-->" >&lt;&lt;</a></li>
								<!--{/if}-->
								<!--{section name=i start=$pagingArr.p_start loop=$pagingArr.p_end_plus}-->
									<!--{if $pageNo == $smarty.section.i.index}-->
										<li class="current"><!--{$smarty.section.i.index}--></li>
									<!--{else}-->
										<li><a href="?page=<!--{$smarty.section.i.index}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}-->"><!--{$smarty.section.i.index}--></a></li>
									<!--{/if}-->
								<!--{/section}-->
								<!--{if $pagingArr.next != ""}-->
									<li><a href="?page=<!--{$pagingArr.next}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}-->" >&gt;&gt;</a></li>
								<!--{/if}-->
								<!--{if $pagingArr.p_cnt > 1 && $pagingArr.next != ""}-->
									<li class="toLastPage"><a href="?page=<!--{$pagingArr.p_cnt}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}-->" >最後へ</a></li>
								<!--{/if}-->
							</ul>
						</div>
					</div>
				</div>
				<div class="tableStripe">
					<table class="tableB">
						<thead>
							<tr>
								<th class="w80">日付</th>
								<th class="w70">立替項目</th>
								<th class="w70">金額</th>
								<th class="w75">出金科目</th>
								<th class="w110">処理ステータス</th>
								<th class="w80">処理日<br>処理者</th>
								<th class="w80">登録者</th>
								<th>備考・詳細</th>
								<th class="w25">編集</th>
							</tr>
						</thead>
					</table>

					<!--{foreach from=$selectBase key=key item=value name=cnt}-->
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w80 txtCenter"><!--{$value.yearStart}-->/<!--{$value.monthStart}-->/<!--{$value.dayStart}--></td>
									<td class="w70"><!--{$value.cashAdvance}--></td>
									<td class="w70"><!--{$value.payment|number_format}--></td>
									<td class="w75"><!--{$value.numberOfPayment}--></td>
									<td class="w110">
										<!--{if $value.processStatus == 1}-->未請求<!--{/if}-->
										<!--{if $value.processStatus == 2}-->相殺請求済み<!--{/if}-->
										<!--{if $value.processStatus == 3}-->回収済み<!--{/if}-->
									</td>
									<td class="w80"><!--{$value.processYear}-->/<!--{$value.processMonth}-->/<!--{$value.processDay}--></td>
									<td class="w80"><!--{$value.name_process}--></td>
									<td><!--{$value.remarkAndDetail}--></td>
									<td class="w25 txtCenter">
										<p class="iconLink"><a href="tatekaekin.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->&tatekaeId=<!--{$value.tatekaeId}-->"><img src="/img/common/icon_edit.png" height="26" width="26" alt="編集"></a></p>
									</td>
								</tr>
							</tbody>
						</table>
					<!--{/foreach}-->
				</div>
				<div class="clearfix pt10">
					<div class="boxRight">
						<div class="pagination">
							<p class="resultStates"><!--{$countSelectQuery}-->件中<!--{$pagingArr.start_view}-->〜<!--{$pagingArr.end_view}-->件</p>
							<ul class="paging">
								<!--{if $pagingArr.p_cnt > 1 && $pagingArr.rev != ""}-->
									<li class="toFirstPage"><a href="?page=1<!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}-->" >最初へ</a></li>
								<!--{/if}-->
								<!--{if $pagingArr.rev != ""}-->
									<li><a href="?page=<!--{$pagingArr.rev}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}-->" >&lt;&lt;</a></li>
								<!--{/if}-->
								<!--{section name=i start=$pagingArr.p_start loop=$pagingArr.p_end_plus}-->
									<!--{if $pageNo == $smarty.section.i.index}-->
										<li class="current"><!--{$smarty.section.i.index}--></li>
									<!--{else}-->
										<li><a href="?page=<!--{$smarty.section.i.index}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}-->"><!--{$smarty.section.i.index}--></a></li>
									<!--{/if}-->
								<!--{/section}-->
								<!--{if $pagingArr.next != ""}-->
									<li><a href="?page=<!--{$pagingArr.next}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}-->" >&gt;&gt;</a></li>
								<!--{/if}-->
								<!--{if $pagingArr.p_cnt > 1 && $pagingArr.next != ""}-->
									<li class="toLastPage"><a href="?page=<!--{$pagingArr.p_cnt}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}-->" >最後へ</a></li>
								<!--{/if}-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		<!--{/if}-->
	<!--{/if}-->
<!--{/if}-->
