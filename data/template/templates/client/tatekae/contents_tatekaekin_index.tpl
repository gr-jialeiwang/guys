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

		<form name="form2" action="?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}--><!--{if $tatekaeId != ""}-->&tatekaeId=<!--{$selectBase.tatekaeId}--><!--{/if}-->" method="POST">
			<input type="hidden" name="mode" id="mode2" value="<!--{$editModeBase}-->">
			<input type="hidden" name="codeNumber" value="<!--{$codeNumber}-->">
			<input type="hidden" name="officeCode" value="<!--{$officeCode}-->">
			<input type="hidden" name="tatekaeId" value="<!--{$selectBase.tatekaeId}-->">
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

				<div class="container">
					<div class="headingB">
						<h3>立替金登録</h3>
					</div>
					<table class="tableA3">
						<tr>
							<th class="pr0 w70">日付</th>
							<td colspan="5">
								<div class="clearfix">
									<div class="boxLeft">
										<ul class="dateSortingArea horizontal">
											<li>
												<select name="yearStart" class="w105">
													<option value="">年選択</option>
													<!--{foreach from=$checkupYearArr key=key item=value name=cnt}-->
														<option value="<!--{$value}-->"<!--{if $selectBase.yearStart == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
													<!--{/foreach}-->
												</select>
												<select name="monthStart" class="w72">
													<option value="">月選択</option>
													<option value="1"<!--{if $selectBase.monthStart == 1}--> selected<!--{/if}-->>1月</option>
													<option value="2"<!--{if $selectBase.monthStart == 2}--> selected<!--{/if}-->>2月</option>
													<option value="3"<!--{if $selectBase.monthStart == 3}--> selected<!--{/if}-->>3月</option>
													<option value="4"<!--{if $selectBase.monthStart == 4}--> selected<!--{/if}-->>4月</option>
													<option value="5"<!--{if $selectBase.monthStart == 5}--> selected<!--{/if}-->>5月</option>
													<option value="6"<!--{if $selectBase.monthStart == 6}--> selected<!--{/if}-->>6月</option>
													<option value="7"<!--{if $selectBase.monthStart == 7}--> selected<!--{/if}-->>7月</option>
													<option value="8"<!--{if $selectBase.monthStart == 8}--> selected<!--{/if}-->>8月</option>
													<option value="9"<!--{if $selectBase.monthStart == 9}--> selected<!--{/if}-->>9月</option>
													<option value="10"<!--{if $selectBase.monthStart == 10}--> selected<!--{/if}-->>10月</option>
													<option value="11"<!--{if $selectBase.monthStart == 11}--> selected<!--{/if}-->>11月</option>
													<option value="12"<!--{if $selectBase.monthStart == 12}--> selected<!--{/if}-->>12月</option>
												</select>
												<select name="dayStart" class="w72">
													<option value="">日選択</option>
													<option value="1"<!--{if $selectBase.dayStart == 1}--> selected<!--{/if}-->>1日</option>
													<option value="2"<!--{if $selectBase.dayStart == 2}--> selected<!--{/if}-->>2日</option>
													<option value="3"<!--{if $selectBase.dayStart == 3}--> selected<!--{/if}-->>3日</option>
													<option value="4"<!--{if $selectBase.dayStart == 4}--> selected<!--{/if}-->>4日</option>
													<option value="5"<!--{if $selectBase.dayStart == 5}--> selected<!--{/if}-->>5日</option>
													<option value="6"<!--{if $selectBase.dayStart == 6}--> selected<!--{/if}-->>6日</option>
													<option value="7"<!--{if $selectBase.dayStart == 7}--> selected<!--{/if}-->>7日</option>
													<option value="8"<!--{if $selectBase.dayStart == 8}--> selected<!--{/if}-->>8日</option>
													<option value="9"<!--{if $selectBase.dayStart == 9}--> selected<!--{/if}-->>9日</option>
													<option value="10"<!--{if $selectBase.dayStart == 10}--> selected<!--{/if}-->>10日</option>
													<option value="11"<!--{if $selectBase.dayStart == 11}--> selected<!--{/if}-->>11日</option>
													<option value="12"<!--{if $selectBase.dayStart == 12}--> selected<!--{/if}-->>12日</option>
													<option value="13"<!--{if $selectBase.dayStart == 13}--> selected<!--{/if}-->>13日</option>
													<option value="14"<!--{if $selectBase.dayStart == 14}--> selected<!--{/if}-->>14日</option>
													<option value="15"<!--{if $selectBase.dayStart == 15}--> selected<!--{/if}-->>15日</option>
													<option value="16"<!--{if $selectBase.dayStart == 16}--> selected<!--{/if}-->>16日</option>
													<option value="17"<!--{if $selectBase.dayStart == 17}--> selected<!--{/if}-->>17日</option>
													<option value="18"<!--{if $selectBase.dayStart == 18}--> selected<!--{/if}-->>18日</option>
													<option value="19"<!--{if $selectBase.dayStart == 19}--> selected<!--{/if}-->>19日</option>
													<option value="20"<!--{if $selectBase.dayStart == 20}--> selected<!--{/if}-->>20日</option>
													<option value="21"<!--{if $selectBase.dayStart == 21}--> selected<!--{/if}-->>21日</option>
													<option value="22"<!--{if $selectBase.dayStart == 22}--> selected<!--{/if}-->>22日</option>
													<option value="23"<!--{if $selectBase.dayStart == 23}--> selected<!--{/if}-->>23日</option>
													<option value="24"<!--{if $selectBase.dayStart == 24}--> selected<!--{/if}-->>24日</option>
													<option value="25"<!--{if $selectBase.dayStart == 25}--> selected<!--{/if}-->>25日</option>
													<option value="26"<!--{if $selectBase.dayStart == 26}--> selected<!--{/if}-->>26日</option>
													<option value="27"<!--{if $selectBase.dayStart == 27}--> selected<!--{/if}-->>27日</option>
													<option value="28"<!--{if $selectBase.dayStart == 28}--> selected<!--{/if}-->>28日</option>
													<option value="29"<!--{if $selectBase.dayStart == 29}--> selected<!--{/if}-->>29日</option>
													<option value="30"<!--{if $selectBase.dayStart == 30}--> selected<!--{/if}-->>30日</option>
													<option value="31"<!--{if $selectBase.dayStart == 31}--> selected<!--{/if}-->>31日</option>
												</select>
											</li>
										</ul>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th class="pr0 w70">立替項目</th>
							<td>
								<select name="cashAdvance" class="w238">
									<option value="">選択</option>
									<!--{foreach from=$selectMaster.cashAdvance key=key item=value name=cnt}-->
										<option value="<!--{$value.masterId}-->"<!--{if $selectBase.cashAdvance == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
									<!--{/foreach}-->
								</select>
							</td>
							<th class="pr0 w60">金額</th>
							<td>
								<input type="text" name="payment" class="w230 mr7" value="<!--{$selectBase.payment}-->">円
							</td>
							<th class="pr0 w70">出金科目</th>
							<td>
								<select name="numberOfPayment" class="w238">
									<option>選択</option>
									<!--{foreach from=$selectMaster.numberOfPayment key=key item=value name=cnt}-->
										<option value="<!--{$value.masterId}-->"<!--{if $selectBase.numberOfPayment == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
									<!--{/foreach}-->
								</select>
							</td>
						</tr>
						<tr>
							<th class="pr0 w70">備考・詳細</th>
							<td colspan="5">
								<input type="text" name="remarkAndDetail" class="w100p" value="<!--{$selectBase.remarkAndDetail}-->">
							</td>
						</tr>
					</table>
					<!--{if $view_flg3 == 1}-->
						<div class="clearfix">
							<div class="boxRight">
								<button class="btnReload" type="submit">登録・更新する</button>
							</div>
						</div>
					<!--{/if}-->
				</div>
			<!--{/if}-->
		</form>
	<!--{/if}-->
<!--{/if}-->
