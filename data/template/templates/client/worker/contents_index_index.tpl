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
					<!--{if is_array($value)}-->
						<!--{foreach from=$value key=key2 item=value2 name=cnt2}-->
							<p class="error"><!--{$value2}--></p>
						<!--{/foreach}-->
					<!--{else}-->
						<p class="error"><!--{$value}--></p>
					<!--{/if}-->
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
					<li class="currentLink"><a href="../worker/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">作業員情報</a></li>
					<li class="rightEnd"><a href="../tatekae/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">立替金情報</a></li>
					<li class="leftEnd"><a href="../request/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">依頼／受注履歴</a></li>
					<li><a href="../seikyusho/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">請求書一覧</a></li>
					<li><a href="../urikake/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">売掛金情報</a></li>
					<li><a href="../minyukin/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">未入金・不足工事一覧</a></li>
					<li><a href="../shiire-rireki/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">仕入／発注履歴</a></li>
					<li class="rightEnd"><a href="../kaikake/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">買掛金情報</a></li>
				</ul>
			</nav>
		</div>
		<!--{if $select.orderConstruction == 1}-->
			<!--{if $view_flg2 == 1}-->
				<form name="form2" action="?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->" method="POST">
					<input type="hidden" name="mode" id="mode2" value="<!--{$editModeBase1}-->">
					<input type="hidden" name="codeNumber" value="<!--{$codeNumber}-->">
					<input type="hidden" name="officeCode" value="<!--{$officeCode}-->">
					<input type="hidden" name="sendForm[1][codeNumber]" value="<!--{$codeNumber}-->">
					<input type="hidden" name="sendForm[1][officeCode]" value="<!--{$officeCode}-->">
					<input type="hidden" name="sendForm[1][workerFlg]" value="1">
					<input type="hidden" name="sendForm[1][workerNo]" value="1">
					<div class="container">
						<div class="txtRight mb10">
							<button class="buttonA">CSV出力</button>
						</div>
						<div class="clearfix">
							<div class="boxRight">
								<!--{if $selectBase2|@count == 0}-->
									<a href="#" class="btnIncrease workerPlusBtn" onclick="worker_view(1);">+</a>
								<!--{/if}-->
							</div>
						</div>
						<div class="clearfix">
							<div class="boxLeft w470">
								<div class="clearfix pt10 mb10">
									<div class="boxLeft	">
										<div class="headingB m0">
											<h3>作業員（1）：代表者</h3>
										</div>
									</div>
									<div class="boxRight">
										<button class="buttonA">登録更新カード（代表者用）</button>
									</div>
								</div>
								<table class="tableA ">
									<tr>
										<th class="w125">登録 No</th>
										<td>
											<input type="text" name="sendForm[1][registrationNumber]" class="w100p" value="<!--{$selectBase1.registrationNumber}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">氏名（漢字）</th>
										<td>
											<input type="text" name="sendForm[1][name_Kanji]" class="w100p" value="<!--{$selectBase1.name_Kanji}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">氏名（カナ）</th>
										<td>
											<input type="text" name="sendForm[1][name_Kana]" class="w100p" value="<!--{$selectBase1.name_Kana}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">住所／郵便番号</th>
										<td>
											<input type="text" class="w53" id="postcodeFirstHalf" name="sendForm[1][postcodeFirstHalf]" placeholder="000" value="<!--{$selectBase1.postcodeFirstHalf}-->">
											ー
											<input type="text" class="w53" id="postcodeLastHalf" name="sendForm[1][postcodeLastHalf]" placeholder="000" value="<!--{$selectBase1.postcodeLastHalf}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">住所</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][address]" value="<!--{$selectBase1.address}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">建物名 等</th>
										<td>
											<input type="text" name="sendForm[1][buildingName]" class="w100p" value="<!--{$selectBase1.buildingName}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">電話番号</th>
										<td>
											<input type="text" class="w53" name="sendForm[1][phoneNumberAreaCode]" placeholder="000" value="<!--{$selectBase1.phoneNumberAreaCode}-->">
											ー
											<input type="text" class="w53" name="sendForm[1][phoneNumberFirstHalf]" placeholder="0000" value="<!--{$selectBase1.phoneNumberFirstHalf}-->">
											ー
											<input type="text" class="w53" name="sendForm[1][phoneNumberLastHalf]" placeholder="0000" value="<!--{$selectBase1.phoneNumberLastHalf}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">ファックス番号</th>
										<td>
											<input type="text" class="w53" name="sendForm[1][faxNumberAreaCode]" placeholder="000" value="<!--{$selectBase1.faxNumberAreaCode}-->">
											ー
											<input type="text" class="w53" name="sendForm[1][faxNumberFirstHalf]" placeholder="0000" value="<!--{$selectBase1.faxNumberFirstHalf}-->">
											ー
											<input type="text" class="w53" name="sendForm[1][faxNumberLastHalf]" placeholder="0000" value="<!--{$selectBase1.faxNumberLastHalf}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">メールアドレス</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][eMail]" value="<!--{$selectBase1.eMail}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">生年月日</th>
										<td>
											<ul class="dateSortingArea horizontal">
												<li>
													<select name="sendForm[1][dateOfBirthYear]" class="w105">
														<option value="">年選択</option>
														<!--{foreach from=$birthYearArr key=key item=value name=cnt}-->
															<option value="<!--{$value}-->"<!--{if $selectBase1.dateOfBirthYear == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
														<!--{/foreach}-->
													</select>
													<select name="sendForm[1][dateOfBirthMonth]" class="w72">
														<option value="">月選択</option>
														<option value="1"<!--{if $selectBase1.dateOfBirthMonth == 1}--> selected<!--{/if}-->>1月</option>
														<option value="2"<!--{if $selectBase1.dateOfBirthMonth == 2}--> selected<!--{/if}-->>2月</option>
														<option value="3"<!--{if $selectBase1.dateOfBirthMonth == 3}--> selected<!--{/if}-->>3月</option>
														<option value="4"<!--{if $selectBase1.dateOfBirthMonth == 4}--> selected<!--{/if}-->>4月</option>
														<option value="5"<!--{if $selectBase1.dateOfBirthMonth == 5}--> selected<!--{/if}-->>5月</option>
														<option value="6"<!--{if $selectBase1.dateOfBirthMonth == 6}--> selected<!--{/if}-->>6月</option>
														<option value="7"<!--{if $selectBase1.dateOfBirthMonth == 7}--> selected<!--{/if}-->>7月</option>
														<option value="8"<!--{if $selectBase1.dateOfBirthMonth == 8}--> selected<!--{/if}-->>8月</option>
														<option value="9"<!--{if $selectBase1.dateOfBirthMonth == 9}--> selected<!--{/if}-->>9月</option>
														<option value="10"<!--{if $selectBase1.dateOfBirthMonth == 10}--> selected<!--{/if}-->>10月</option>
														<option value="11"<!--{if $selectBase1.dateOfBirthMonth == 11}--> selected<!--{/if}-->>11月</option>
														<option value="12"<!--{if $selectBase1.dateOfBirthMonth == 12}--> selected<!--{/if}-->>12月</option>
													</select>
													<select name="sendForm[1][dateOfBirthDay]" class="w72">
														<option value="">日選択</option>
														<option value="1"<!--{if $selectBase1.dateOfBirthDay == 1}--> selected<!--{/if}-->>1日</option>
														<option value="2"<!--{if $selectBase1.dateOfBirthDay == 2}--> selected<!--{/if}-->>2日</option>
														<option value="3"<!--{if $selectBase1.dateOfBirthDay == 3}--> selected<!--{/if}-->>3日</option>
														<option value="4"<!--{if $selectBase1.dateOfBirthDay == 4}--> selected<!--{/if}-->>4日</option>
														<option value="5"<!--{if $selectBase1.dateOfBirthDay == 5}--> selected<!--{/if}-->>5日</option>
														<option value="6"<!--{if $selectBase1.dateOfBirthDay == 6}--> selected<!--{/if}-->>6日</option>
														<option value="7"<!--{if $selectBase1.dateOfBirthDay == 7}--> selected<!--{/if}-->>7日</option>
														<option value="8"<!--{if $selectBase1.dateOfBirthDay == 8}--> selected<!--{/if}-->>8日</option>
														<option value="9"<!--{if $selectBase1.dateOfBirthDay == 9}--> selected<!--{/if}-->>9日</option>
														<option value="10"<!--{if $selectBase1.dateOfBirthDay == 10}--> selected<!--{/if}-->>10日</option>
														<option value="11"<!--{if $selectBase1.dateOfBirthDay == 11}--> selected<!--{/if}-->>11日</option>
														<option value="12"<!--{if $selectBase1.dateOfBirthDay == 12}--> selected<!--{/if}-->>12日</option>
														<option value="13"<!--{if $selectBase1.dateOfBirthDay == 13}--> selected<!--{/if}-->>13日</option>
														<option value="14"<!--{if $selectBase1.dateOfBirthDay == 14}--> selected<!--{/if}-->>14日</option>
														<option value="15"<!--{if $selectBase1.dateOfBirthDay == 15}--> selected<!--{/if}-->>15日</option>
														<option value="16"<!--{if $selectBase1.dateOfBirthDay == 16}--> selected<!--{/if}-->>16日</option>
														<option value="17"<!--{if $selectBase1.dateOfBirthDay == 17}--> selected<!--{/if}-->>17日</option>
														<option value="18"<!--{if $selectBase1.dateOfBirthDay == 18}--> selected<!--{/if}-->>18日</option>
														<option value="19"<!--{if $selectBase1.dateOfBirthDay == 19}--> selected<!--{/if}-->>19日</option>
														<option value="20"<!--{if $selectBase1.dateOfBirthDay == 20}--> selected<!--{/if}-->>20日</option>
														<option value="21"<!--{if $selectBase1.dateOfBirthDay == 21}--> selected<!--{/if}-->>21日</option>
														<option value="22"<!--{if $selectBase1.dateOfBirthDay == 22}--> selected<!--{/if}-->>22日</option>
														<option value="23"<!--{if $selectBase1.dateOfBirthDay == 23}--> selected<!--{/if}-->>23日</option>
														<option value="24"<!--{if $selectBase1.dateOfBirthDay == 24}--> selected<!--{/if}-->>24日</option>
														<option value="25"<!--{if $selectBase1.dateOfBirthDay == 25}--> selected<!--{/if}-->>25日</option>
														<option value="26"<!--{if $selectBase1.dateOfBirthDay == 26}--> selected<!--{/if}-->>26日</option>
														<option value="27"<!--{if $selectBase1.dateOfBirthDay == 27}--> selected<!--{/if}-->>27日</option>
														<option value="28"<!--{if $selectBase1.dateOfBirthDay == 28}--> selected<!--{/if}-->>28日</option>
														<option value="29"<!--{if $selectBase1.dateOfBirthDay == 29}--> selected<!--{/if}-->>29日</option>
														<option value="30"<!--{if $selectBase1.dateOfBirthDay == 30}--> selected<!--{/if}-->>30日</option>
														<option value="31"<!--{if $selectBase1.dateOfBirthDay == 31}--> selected<!--{/if}-->>31日</option>
													</select>
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th class="w125">年齢</th>
										<td>
											<select name="sendForm[1][age]" class="w63">
												<option value="">選択</option>
												<!--{foreach from=$ageArr key=key item=value name=cnt}-->
													<option value="<!--{$value}-->"<!--{if $selectBase1.age == $value}--> selected<!--{/if}-->><!--{$value}--></option>
												<!--{/foreach}-->
											</select>
										</td>
									</tr>
									<tr>
										<th class="w125">血液型</th>
										<td>
											<select name="sendForm[1][bloodType]" class="w63">
												<option value="">選択</option>
												<option value="A"<!--{if $selectBase1.bloodType == 'A'}--> selected<!--{/if}-->>A</option>
												<option value="B"<!--{if $selectBase1.bloodType == 'B'}--> selected<!--{/if}-->>B</option>
												<option value="O"<!--{if $selectBase1.bloodType == 'O'}--> selected<!--{/if}-->>O</option>
												<option value="AB"<!--{if $selectBase1.bloodType == 'AB'}--> selected<!--{/if}-->>AB</option>
											</select>
										</td>
									</tr>
								</table>
								<div class="headingB">
									<h3>緊急連絡先</h3>
								</div>
								<table class="tableA">
									<tr>
										<th class="w125">氏名（漢字）</th>
										<td>
											<input type="text" name="sendForm[1][emergencyName_Kanji]" class="w100p" value="<!--{$selectBase1.emergencyName_Kanji}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">氏名（カナ）</th>
										<td>
											<input type="text" name="sendForm[1][emergencyName_Kana]" class="w100p" value="<!--{$selectBase1.emergencyName_Kana}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">続柄</th>
										<td>
											<select name="sendForm[1][relationship]" class="w63">
												<option value="">選択</option>
												<option value="1"<!--{if $selectBase1.relationship == 1}--> selected<!--{/if}-->>妻</option>
												<option value="2"<!--{if $selectBase1.relationship == 2}--> selected<!--{/if}-->>夫</option>
												<option value="3"<!--{if $selectBase1.relationship == 3}--> selected<!--{/if}-->>子</option>
												<option value="4"<!--{if $selectBase1.relationship == 4}--> selected<!--{/if}-->>孫</option>
												<option value="5"<!--{if $selectBase1.relationship == 5}--> selected<!--{/if}-->>実兄</option>
												<option value="6"<!--{if $selectBase1.relationship == 6}--> selected<!--{/if}-->>実弟</option>
												<option value="7"<!--{if $selectBase1.relationship == 7}--> selected<!--{/if}-->>実姉</option>
												<option value="8"<!--{if $selectBase1.relationship == 8}--> selected<!--{/if}-->>実妹</option>
												<option value="9"<!--{if $selectBase1.relationship == 9}--> selected<!--{/if}-->>祖父</option>
												<option value="10"<!--{if $selectBase1.relationship == 10}--> selected<!--{/if}-->>祖母</option>
												<option value="11"<!--{if $selectBase1.relationship == 11}--> selected<!--{/if}-->>曽祖父</option>
												<option value="12"<!--{if $selectBase1.relationship == 12}--> selected<!--{/if}-->>曾祖母</option>
												<option value="13"<!--{if $selectBase1.relationship == 13}--> selected<!--{/if}-->>従兄弟</option>
												<option value="14"<!--{if $selectBase1.relationship == 14}--> selected<!--{/if}-->>叔父</option>
												<option value="15"<!--{if $selectBase1.relationship == 15}--> selected<!--{/if}-->>叔母</option>
												<option value="16"<!--{if $selectBase1.relationship == 16}--> selected<!--{/if}-->>義父</option>
												<option value="17"<!--{if $selectBase1.relationship == 17}--> selected<!--{/if}-->>義母</option>
												<option value="18"<!--{if $selectBase1.relationship == 18}--> selected<!--{/if}-->>義兄</option>
												<option value="19"<!--{if $selectBase1.relationship == 19}--> selected<!--{/if}-->>義弟</option>
												<option value="20"<!--{if $selectBase1.relationship == 20}--> selected<!--{/if}-->>義姉</option>
												<option value="21"<!--{if $selectBase1.relationship == 21}--> selected<!--{/if}-->>義妹</option>
												<option value="22"<!--{if $selectBase1.relationship == 22}--> selected<!--{/if}-->>義祖父</option>
												<option value="23"<!--{if $selectBase1.relationship == 23}--> selected<!--{/if}-->>義祖母</option>
												<option value="24"<!--{if $selectBase1.relationship == 24}--> selected<!--{/if}-->>義叔父</option>
												<option value="25"<!--{if $selectBase1.relationship == 25}--> selected<!--{/if}-->>義叔母</option>
												<option value="26"<!--{if $selectBase1.relationship == 26}--> selected<!--{/if}-->>義従兄弟</option>
												<option value="27"<!--{if $selectBase1.relationship == 27}--> selected<!--{/if}-->>知人／友人</option>
												<option value="28"<!--{if $selectBase1.relationship == 28}--> selected<!--{/if}-->>同居人</option>
												<option value="29"<!--{if $selectBase1.relationship == 29}--> selected<!--{/if}-->>その他</option>
											</select>
										</td>
									</tr>
									<tr>
										<th class="w125">電話番号</th>
										<td>
											<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberAreaCode]" placeholder="000" value="<!--{$selectBase1.emergencyPhoneNumberAreaCode}-->">
											ー
											<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberFirstHalf]" placeholder="0000" value="<!--{$selectBase1.emergencyPhoneNumberFirstHalf}-->">
											ー
											<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberLastHalf]" placeholder="0000" value="<!--{$selectBase1.emergencyPhoneNumberLastHalf}-->">
										</td>
									</tr>
								</table>
								<table class="tableA noTtl">
									<tr>
										<th class="w125">備考</th>
										<td class="bdt">
											<textarea name="sendForm[1][remarks]" rows="8" class="w100p"><!--{$selectBase1.remarks}--></textarea>
										</td>
									</tr>
								</table>
							</div>
							<div class="boxRight w470">
								<table class="tableA noTtl">
									<tr>
										<th class="w105">登録年月日</th>
										<td>
											<ul class="dateSortingArea horizontal">
												<li>
													<select name="sendForm[1][registrationYear]" class="w105">
														<option value="">年選択</option>
														<!--{foreach from=$checkupYearArr key=key item=value name=cnt}-->
															<option value="<!--{$value}-->"<!--{if $selectBase1.registrationYear == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
														<!--{/foreach}-->
													</select>
													<select name="sendForm[1][registrationMonth]" class="w72">
														<option value="">月選択</option>
														<option value="1"<!--{if $selectBase1.registrationMonth == 1}--> selected<!--{/if}-->>1月</option>
														<option value="2"<!--{if $selectBase1.registrationMonth == 2}--> selected<!--{/if}-->>2月</option>
														<option value="3"<!--{if $selectBase1.registrationMonth == 3}--> selected<!--{/if}-->>3月</option>
														<option value="4"<!--{if $selectBase1.registrationMonth == 4}--> selected<!--{/if}-->>4月</option>
														<option value="5"<!--{if $selectBase1.registrationMonth == 5}--> selected<!--{/if}-->>5月</option>
														<option value="6"<!--{if $selectBase1.registrationMonth == 6}--> selected<!--{/if}-->>6月</option>
														<option value="7"<!--{if $selectBase1.registrationMonth == 7}--> selected<!--{/if}-->>7月</option>
														<option value="8"<!--{if $selectBase1.registrationMonth == 8}--> selected<!--{/if}-->>8月</option>
														<option value="9"<!--{if $selectBase1.registrationMonth == 9}--> selected<!--{/if}-->>9月</option>
														<option value="10"<!--{if $selectBase1.registrationMonth == 10}--> selected<!--{/if}-->>10月</option>
														<option value="11"<!--{if $selectBase1.registrationMonth == 11}--> selected<!--{/if}-->>11月</option>
														<option value="12"<!--{if $selectBase1.registrationMonth == 12}--> selected<!--{/if}-->>12月</option>
													</select>
													<select name="sendForm[1][registrationDay]" class="w72">
														<option value="">日選択</option>
														<option value="1"<!--{if $selectBase1.registrationDay == 1}--> selected<!--{/if}-->>1日</option>
														<option value="2"<!--{if $selectBase1.registrationDay == 2}--> selected<!--{/if}-->>2日</option>
														<option value="3"<!--{if $selectBase1.registrationDay == 3}--> selected<!--{/if}-->>3日</option>
														<option value="4"<!--{if $selectBase1.registrationDay == 4}--> selected<!--{/if}-->>4日</option>
														<option value="5"<!--{if $selectBase1.registrationDay == 5}--> selected<!--{/if}-->>5日</option>
														<option value="6"<!--{if $selectBase1.registrationDay == 6}--> selected<!--{/if}-->>6日</option>
														<option value="7"<!--{if $selectBase1.registrationDay == 7}--> selected<!--{/if}-->>7日</option>
														<option value="8"<!--{if $selectBase1.registrationDay == 8}--> selected<!--{/if}-->>8日</option>
														<option value="9"<!--{if $selectBase1.registrationDay == 9}--> selected<!--{/if}-->>9日</option>
														<option value="10"<!--{if $selectBase1.registrationDay == 10}--> selected<!--{/if}-->>10日</option>
														<option value="11"<!--{if $selectBase1.registrationDay == 11}--> selected<!--{/if}-->>11日</option>
														<option value="12"<!--{if $selectBase1.registrationDay == 12}--> selected<!--{/if}-->>12日</option>
														<option value="13"<!--{if $selectBase1.registrationDay == 13}--> selected<!--{/if}-->>13日</option>
														<option value="14"<!--{if $selectBase1.registrationDay == 14}--> selected<!--{/if}-->>14日</option>
														<option value="15"<!--{if $selectBase1.registrationDay == 15}--> selected<!--{/if}-->>15日</option>
														<option value="16"<!--{if $selectBase1.registrationDay == 16}--> selected<!--{/if}-->>16日</option>
														<option value="17"<!--{if $selectBase1.registrationDay == 17}--> selected<!--{/if}-->>17日</option>
														<option value="18"<!--{if $selectBase1.registrationDay == 18}--> selected<!--{/if}-->>18日</option>
														<option value="19"<!--{if $selectBase1.registrationDay == 19}--> selected<!--{/if}-->>19日</option>
														<option value="20"<!--{if $selectBase1.registrationDay == 20}--> selected<!--{/if}-->>20日</option>
														<option value="21"<!--{if $selectBase1.registrationDay == 21}--> selected<!--{/if}-->>21日</option>
														<option value="22"<!--{if $selectBase1.registrationDay == 22}--> selected<!--{/if}-->>22日</option>
														<option value="23"<!--{if $selectBase1.registrationDay == 23}--> selected<!--{/if}-->>23日</option>
														<option value="24"<!--{if $selectBase1.registrationDay == 24}--> selected<!--{/if}-->>24日</option>
														<option value="25"<!--{if $selectBase1.registrationDay == 25}--> selected<!--{/if}-->>25日</option>
														<option value="26"<!--{if $selectBase1.registrationDay == 26}--> selected<!--{/if}-->>26日</option>
														<option value="27"<!--{if $selectBase1.registrationDay == 27}--> selected<!--{/if}-->>27日</option>
														<option value="28"<!--{if $selectBase1.registrationDay == 28}--> selected<!--{/if}-->>28日</option>
														<option value="29"<!--{if $selectBase1.registrationDay == 29}--> selected<!--{/if}-->>29日</option>
														<option value="30"<!--{if $selectBase1.registrationDay == 30}--> selected<!--{/if}-->>30日</option>
														<option value="31"<!--{if $selectBase1.registrationDay == 31}--> selected<!--{/if}-->>31日</option>
													</select>
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th class="w105">ガイズ担当者 <br>（受付担当）</th>
										<td>
											<select class="w105" name="sendForm[1][representative]">
												<option value="">選択</option>
												<!--{foreach from=$selectStaff key=key item=value name=cnt}-->
													<option value="<!--{$value.staffID}-->"<!--{if $selectBase1.representative == $value.staffID}--> selected<!--{/if}-->><!--{$value.name}--></option>
												<!--{/foreach}-->
											</select>
										</td>
									</tr>
									<tr>
										<th class="w105">労災組合名</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][workersUnion]" value="<!--{$selectBase1.workersUnion}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">労災番号</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][compensationInsuranceNumber]" value="<!--{$selectBase1.compensationInsuranceNumber}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">健康保険名</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][nationalHealthInsurance]" value="<!--{$selectBase1.nationalHealthInsurance}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">健康保険番号</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][nationalHealthInsuranceNumber]" value="<!--{$selectBase1.nationalHealthInsuranceNumber}-->">
										</td>
									</tr>
									<!--{if $view_flg4 == 1}-->
										<tr>
											<th class="w105">年金保険種類</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][pensionInsurance]" value="<!--{$selectBase1.pensionInsurance}-->">
											</td>
										</tr>
										<tr>
											<th class="w105">年金番号</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][pensionNumber]" value="<!--{$selectBase1.pensionNumber}-->">
											</td>
										</tr>
										<tr>
											<th class="w105">雇用保険番号</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][unemploymentInsuranceNumber]" value="<!--{$selectBase1.unemploymentInsuranceNumber}-->">
											</td>
										</tr>
										<tr>
											<th class="w105">足場作業者番号</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][scaffoldWorkersNumber]" value="<!--{$selectBase1.scaffoldWorkersNumber}-->">
											</td>
										</tr>
									<!--{else}-->
										<input type="hidden" name="sendForm[1][pensionInsurance]" value="<!--{$selectBase1.pensionInsurance}-->">
										<input type="hidden" name="sendForm[1][pensionNumber]" value="<!--{$selectBase1.pensionNumber}-->">
										<input type="hidden" name="sendForm[1][unemploymentInsuranceNumber]" value="<!--{$selectBase1.unemploymentInsuranceNumber}-->">
										<input type="hidden" name="sendForm[1][scaffoldWorkersNumber]" value="<!--{$selectBase1.scaffoldWorkersNumber}-->">
									<!--{/if}-->
									<!--{if $view_flg6 == 1}-->
										<tr>
											<th class="w105">その他 1</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][other1]" value="<!--{$selectBase1.other1}-->">
											</td>
										</tr>
										<tr>
											<th class="w105">その他 2</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][other2]" value="<!--{$selectBase1.other2}-->">
											</td>
										</tr>
									<!--{else}-->
										<input type="hidden" name="sendForm[1][other1]" value="<!--{$selectBase1.other1}-->">
										<input type="hidden" name="sendForm[1][other2]" value="<!--{$selectBase1.other2}-->">
									<!--{/if}-->
								</table>
								<table class="tableA noTtl">
									<tr>
										<th class="w105">健康診断 <br>最新診断日</th>
										<td colspan="3" class="bdt">
											<ul class="dateSortingArea horizontal">
												<li>
													<select name="sendForm[1][latestCheckupYear]" class="w105">
														<option value="">年選択</option>
														<!--{foreach from=$checkupYearArr key=key item=value name=cnt}-->
															<option value="<!--{$value}-->"<!--{if $selectBase1.latestCheckupYear == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
														<!--{/foreach}-->
													</select>
													<select name="sendForm[1][latestCheckupMonth]" class="w72">
														<option value="">月選択</option>
														<option value="1"<!--{if $selectBase1.latestCheckupMonth == 1}--> selected<!--{/if}-->>1月</option>
														<option value="2"<!--{if $selectBase1.latestCheckupMonth == 2}--> selected<!--{/if}-->>2月</option>
														<option value="3"<!--{if $selectBase1.latestCheckupMonth == 3}--> selected<!--{/if}-->>3月</option>
														<option value="4"<!--{if $selectBase1.latestCheckupMonth == 4}--> selected<!--{/if}-->>4月</option>
														<option value="5"<!--{if $selectBase1.latestCheckupMonth == 5}--> selected<!--{/if}-->>5月</option>
														<option value="6"<!--{if $selectBase1.latestCheckupMonth == 6}--> selected<!--{/if}-->>6月</option>
														<option value="7"<!--{if $selectBase1.latestCheckupMonth == 7}--> selected<!--{/if}-->>7月</option>
														<option value="8"<!--{if $selectBase1.latestCheckupMonth == 8}--> selected<!--{/if}-->>8月</option>
														<option value="9"<!--{if $selectBase1.latestCheckupMonth == 9}--> selected<!--{/if}-->>9月</option>
														<option value="10"<!--{if $selectBase1.latestCheckupMonth == 10}--> selected<!--{/if}-->>10月</option>
														<option value="11"<!--{if $selectBase1.latestCheckupMonth == 11}--> selected<!--{/if}-->>11月</option>
														<option value="12"<!--{if $selectBase1.latestCheckupMonth == 12}--> selected<!--{/if}-->>12月</option>
													</select>
													<select name="sendForm[1][latestCheckupDay]" class="w72">
														<option value="">日選択</option>
														<option value="1"<!--{if $selectBase1.latestCheckupDay == 1}--> selected<!--{/if}-->>1日</option>
														<option value="2"<!--{if $selectBase1.latestCheckupDay == 2}--> selected<!--{/if}-->>2日</option>
														<option value="3"<!--{if $selectBase1.latestCheckupDay == 3}--> selected<!--{/if}-->>3日</option>
														<option value="4"<!--{if $selectBase1.latestCheckupDay == 4}--> selected<!--{/if}-->>4日</option>
														<option value="5"<!--{if $selectBase1.latestCheckupDay == 5}--> selected<!--{/if}-->>5日</option>
														<option value="6"<!--{if $selectBase1.latestCheckupDay == 6}--> selected<!--{/if}-->>6日</option>
														<option value="7"<!--{if $selectBase1.latestCheckupDay == 7}--> selected<!--{/if}-->>7日</option>
														<option value="8"<!--{if $selectBase1.latestCheckupDay == 8}--> selected<!--{/if}-->>8日</option>
														<option value="9"<!--{if $selectBase1.latestCheckupDay == 9}--> selected<!--{/if}-->>9日</option>
														<option value="10"<!--{if $selectBase1.latestCheckupDay == 10}--> selected<!--{/if}-->>10日</option>
														<option value="11"<!--{if $selectBase1.latestCheckupDay == 11}--> selected<!--{/if}-->>11日</option>
														<option value="12"<!--{if $selectBase1.latestCheckupDay == 12}--> selected<!--{/if}-->>12日</option>
														<option value="13"<!--{if $selectBase1.latestCheckupDay == 13}--> selected<!--{/if}-->>13日</option>
														<option value="14"<!--{if $selectBase1.latestCheckupDay == 14}--> selected<!--{/if}-->>14日</option>
														<option value="15"<!--{if $selectBase1.latestCheckupDay == 15}--> selected<!--{/if}-->>15日</option>
														<option value="16"<!--{if $selectBase1.latestCheckupDay == 16}--> selected<!--{/if}-->>16日</option>
														<option value="17"<!--{if $selectBase1.latestCheckupDay == 17}--> selected<!--{/if}-->>17日</option>
														<option value="18"<!--{if $selectBase1.latestCheckupDay == 18}--> selected<!--{/if}-->>18日</option>
														<option value="19"<!--{if $selectBase1.latestCheckupDay == 19}--> selected<!--{/if}-->>19日</option>
														<option value="20"<!--{if $selectBase1.latestCheckupDay == 20}--> selected<!--{/if}-->>20日</option>
														<option value="21"<!--{if $selectBase1.latestCheckupDay == 21}--> selected<!--{/if}-->>21日</option>
														<option value="22"<!--{if $selectBase1.latestCheckupDay == 22}--> selected<!--{/if}-->>22日</option>
														<option value="23"<!--{if $selectBase1.latestCheckupDay == 23}--> selected<!--{/if}-->>23日</option>
														<option value="24"<!--{if $selectBase1.latestCheckupDay == 24}--> selected<!--{/if}-->>24日</option>
														<option value="25"<!--{if $selectBase1.latestCheckupDay == 25}--> selected<!--{/if}-->>25日</option>
														<option value="26"<!--{if $selectBase1.latestCheckupDay == 26}--> selected<!--{/if}-->>26日</option>
														<option value="27"<!--{if $selectBase1.latestCheckupDay == 27}--> selected<!--{/if}-->>27日</option>
														<option value="28"<!--{if $selectBase1.latestCheckupDay == 28}--> selected<!--{/if}-->>28日</option>
														<option value="29"<!--{if $selectBase1.latestCheckupDay == 29}--> selected<!--{/if}-->>29日</option>
														<option value="30"<!--{if $selectBase1.latestCheckupDay == 30}--> selected<!--{/if}-->>30日</option>
														<option value="31"<!--{if $selectBase1.latestCheckupDay == 31}--> selected<!--{/if}-->>31日</option>
													</select>
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>血圧（上）</th>
										<td>
											<input type="text" name="sendForm[1][bloodPressureHigher]" class="w100p" value="<!--{$selectBase1.bloodPressureHigher}-->">
										</td>
										<th class="w80">血圧（下）</th>
										<td>
											<input type="text" name="sendForm[1][bloodPressureLower]" class="w100p" value="<!--{$selectBase1.bloodPressureLower}-->">
										</td>
									</tr>
									<tr>
										<th>その他</th>
										<td colspan="3">
											<input type="text" name="sendForm[1][other]" value="<!--{$selectBase1.other}-->">
										</td>
									</tr>
								</table>
								<div class="headingB">
									<h3>キャリア／スキル</h3>
								</div>
								<table class="tableB">
									<tr>
										<th>工事種 1</th>
										<th>工事種 2</th>
										<th>登録時経験年数</th>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType1_1]" class="w100p" value="<!--{$selectBase1.constructionType1_1}-->"></td>
										<td><input type="text" name="sendForm[1][constructionType1_2]" class="w100p" value="<!--{$selectBase1.constructionType1_2}-->"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience1]" class="mr5 w120" value="<!--{$selectBase1.yearsOfExperience1}-->">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType2_1]" class="w100p" value="<!--{$selectBase1.constructionType2_1}-->"></td>
										<td><input type="text" name="sendForm[1][constructionType2_2]" class="w100p" value="<!--{$selectBase1.constructionType2_2}-->"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience2]" class="mr5 w120" value="<!--{$selectBase1.yearsOfExperience2}-->">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType3_1]" class="w100p" value="<!--{$selectBase1.constructionType3_1}-->"></td>
										<td><input type="text" name="sendForm[1][constructionType3_2]" class="w100p" value="<!--{$selectBase1.constructionType3_2}-->"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience3]" class="mr5 w120" value="<!--{$selectBase1.yearsOfExperience3}-->">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType4_1]" class="w100p" value="<!--{$selectBase1.constructionType4_1}-->"></td>
										<td><input type="text" name="sendForm[1][constructionType4_2]" class="w100p" value="<!--{$selectBase1.constructionType4_2}-->"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience4]" class="mr5 w120" value="<!--{$selectBase1.yearsOfExperience4}-->">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType5_1]" class="w100p" value="<!--{$selectBase1.constructionType5_1}-->"></td>
										<td><input type="text" name="sendForm[1][constructionType5_2]" class="w100p" value="<!--{$selectBase1.constructionType5_2}-->"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience5]" class="mr5 w120" value="<!--{$selectBase1.yearsOfExperience5}-->">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType6_1]" class="w100p" value="<!--{$selectBase1.constructionType6_1}-->"></td>
										<td><input type="text" name="sendForm[1][constructionType6_2]" class="w100p" value="<!--{$selectBase1.constructionType6_2}-->"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience6]" class="mr5 w120" value="<!--{$selectBase1.yearsOfExperience6}-->">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType7_1]" class="w100p" value="<!--{$selectBase1.constructionType7_1}-->"></td>
										<td><input type="text" name="sendForm[1][constructionType7_2]" class="w100p" value="<!--{$selectBase1.constructionType7_2}-->"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience7]" class="mr5 w120" value="<!--{$selectBase1.yearsOfExperience7}-->">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType8_1]" class="w100p" value="<!--{$selectBase1.constructionType8_1}-->"></td>
										<td><input type="text" name="sendForm[1][constructionType8_2]" class="w100p" value="<!--{$selectBase1.constructionType8_2}-->"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience8]" class="mr5 w120" value="<!--{$selectBase1.yearsOfExperience8}-->">年</td>
									</tr>
								</table>
							</div>
						</div>
						<!--{if $view_flg3 == 1 || $view_flg5 == 1 || $view_flg7 == 1}-->
							<div class="clearfix">
								<div class="boxRight">
									<button class="btnReload" type="submit">登録・更新する</button>
								</div>
							</div>
						<!--{/if}-->
						<hr class="mb30">
					</div>
				</form>

				<form name="form3" action="?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->" method="POST">
					<input type="hidden" name="mode" id="mode3" value="<!--{$editModeBase2}-->">
					<div id="formAreaSub">
						<!--{foreach from=$selectBase2 key=key item=value name=cnt}-->
							<!--{assign var=keyno value=$smarty.foreach.cnt.iteration+1}-->
							<!--{assign var=countall value=$selectBase2|@count}-->
							<div id="formAreaClone_<!--{$smarty.foreach.cnt.iteration}-->" class="formAreaSubBox">
								<input type="hidden" name="codeNumber" value="<!--{$codeNumber}-->">
								<input type="hidden" name="officeCode" value="<!--{$officeCode}-->">
								<input type="hidden" name="sendForm[<!--{$keyno}-->][codeNumber]" value="<!--{$codeNumber}-->">
								<input type="hidden" name="sendForm[<!--{$keyno}-->][officeCode]" value="<!--{$officeCode}-->">
								<input type="hidden" name="sendForm[<!--{$keyno}-->][workerFlg]" value="2">
								<input type="hidden" name="sendForm[<!--{$keyno}-->][workerNo]" value="<!--{$smarty.foreach.cnt.iteration}-->">
								<div class="container">
									<div class="txtRight mb10">
										<button class="buttonA">CSV出力</button>
									</div>
									<div class="clearfix">
										<div class="boxRight">
											<a href="#" class="btnIncrease workerPlusBtn" onclick="worker_view('<!--{$countall+1}-->')">+</a>
											<a href="#" class="btnDecrease">+</a>
										</div>
									</div>
									<div class="clearfix">
										<div class="boxLeft w470">
											<div class="clearfix pt10 mb10">
												<div class="boxLeft	">
													<div class="headingB m0">
														<h3>作業員（<span class="worker"><!--{$keyno}--></span>）：社員</h3>
													</div>
												</div>
												<div class="boxRight">
													<button class="buttonA">登録更新カード（代表者用）</button>
												</div>
											</div>
											<table class="tableA ">
												<tr>
													<th class="w125">登録 No</th>
													<td>
														<input type="text" name="sendForm[<!--{$keyno}-->][registrationNumber]" class="w100p" value="<!--{$value.registrationNumber}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">氏名（漢字）</th>
													<td>
														<input type="text" name="sendForm[<!--{$keyno}-->][name_Kanji]" class="w100p" value="<!--{$value.name_Kanji}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">氏名（カナ）</th>
													<td>
														<input type="text" name="sendForm[<!--{$keyno}-->][name_Kana]" class="w100p" value="<!--{$value.name_Kana}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">住所／郵便番号</th>
													<td>
														<input type="text" class="w53" id="postcodeFirstHalf" name="sendForm[<!--{$keyno}-->][postcodeFirstHalf]" placeholder="000" value="<!--{$value.postcodeFirstHalf}-->">
														ー
														<input type="text" class="w53" id="postcodeLastHalf" name="sendForm[<!--{$keyno}-->][postcodeLastHalf]" placeholder="000" value="<!--{$value.postcodeLastHalf}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">住所</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][address]" value="<!--{$value.address}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">建物名 等</th>
													<td>
														<input type="text" name="sendForm[<!--{$keyno}-->][buildingName]" class="w100p" value="<!--{$value.buildingName}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">電話番号</th>
													<td>
														<input type="text" class="w53" name="sendForm[<!--{$keyno}-->][phoneNumberAreaCode]" placeholder="000" value="<!--{$value.phoneNumberAreaCode}-->">
														ー
														<input type="text" class="w53" name="sendForm[<!--{$keyno}-->][phoneNumberFirstHalf]" placeholder="0000" value="<!--{$value.phoneNumberFirstHalf}-->">
														ー
														<input type="text" class="w53" name="sendForm[<!--{$keyno}-->][phoneNumberLastHalf]" placeholder="0000" value="<!--{$value.phoneNumberLastHalf}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">ファックス番号</th>
													<td>
														<input type="text" class="w53" name="sendForm[<!--{$keyno}-->][faxNumberAreaCode]" placeholder="000" value="<!--{$value.faxNumberAreaCode}-->">
														ー
														<input type="text" class="w53" name="sendForm[<!--{$keyno}-->][faxNumberFirstHalf]" placeholder="0000" value="<!--{$value.faxNumberFirstHalf}-->">
														ー
														<input type="text" class="w53" name="sendForm[<!--{$keyno}-->][faxNumberLastHalf]" placeholder="0000" value="<!--{$value.faxNumberLastHalf}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">メールアドレス</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][eMail]" value="<!--{$value.eMail}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">生年月日</th>
													<td>
														<ul class="dateSortingArea horizontal">
															<li>
																<select name="sendForm[<!--{$keyno}-->][dateOfBirthYear]" class="w105">
																	<option value="">年選択</option>
																	<!--{foreach from=$birthYearArr key=key item=value name=cnt}-->
																		<option value="<!--{$value}-->"<!--{if $value.dateOfBirthYear == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
																	<!--{/foreach}-->
																</select>
																<select name="sendForm[<!--{$keyno}-->][dateOfBirthMonth]" class="w72">
																	<option value="">月選択</option>
																	<option value="1"<!--{if $value.dateOfBirthMonth == 1}--> selected<!--{/if}-->>1月</option>
																	<option value="2"<!--{if $value.dateOfBirthMonth == 2}--> selected<!--{/if}-->>2月</option>
																	<option value="3"<!--{if $value.dateOfBirthMonth == 3}--> selected<!--{/if}-->>3月</option>
																	<option value="4"<!--{if $value.dateOfBirthMonth == 4}--> selected<!--{/if}-->>4月</option>
																	<option value="5"<!--{if $value.dateOfBirthMonth == 5}--> selected<!--{/if}-->>5月</option>
																	<option value="6"<!--{if $value.dateOfBirthMonth == 6}--> selected<!--{/if}-->>6月</option>
																	<option value="7"<!--{if $value.dateOfBirthMonth == 7}--> selected<!--{/if}-->>7月</option>
																	<option value="8"<!--{if $value.dateOfBirthMonth == 8}--> selected<!--{/if}-->>8月</option>
																	<option value="9"<!--{if $value.dateOfBirthMonth == 9}--> selected<!--{/if}-->>9月</option>
																	<option value="10"<!--{if $value.dateOfBirthMonth == 10}--> selected<!--{/if}-->>10月</option>
																	<option value="11"<!--{if $value.dateOfBirthMonth == 11}--> selected<!--{/if}-->>11月</option>
																	<option value="12"<!--{if $value.dateOfBirthMonth == 12}--> selected<!--{/if}-->>12月</option>
																</select>
																<select name="sendForm[<!--{$keyno}-->][dateOfBirthDay]" class="w72">
																	<option value="">日選択</option>
																	<option value="1"<!--{if $value.dateOfBirthDay == 1}--> selected<!--{/if}-->>1日</option>
																	<option value="2"<!--{if $value.dateOfBirthDay == 2}--> selected<!--{/if}-->>2日</option>
																	<option value="3"<!--{if $value.dateOfBirthDay == 3}--> selected<!--{/if}-->>3日</option>
																	<option value="4"<!--{if $value.dateOfBirthDay == 4}--> selected<!--{/if}-->>4日</option>
																	<option value="5"<!--{if $value.dateOfBirthDay == 5}--> selected<!--{/if}-->>5日</option>
																	<option value="6"<!--{if $value.dateOfBirthDay == 6}--> selected<!--{/if}-->>6日</option>
																	<option value="7"<!--{if $value.dateOfBirthDay == 7}--> selected<!--{/if}-->>7日</option>
																	<option value="8"<!--{if $value.dateOfBirthDay == 8}--> selected<!--{/if}-->>8日</option>
																	<option value="9"<!--{if $value.dateOfBirthDay == 9}--> selected<!--{/if}-->>9日</option>
																	<option value="10"<!--{if $value.dateOfBirthDay == 10}--> selected<!--{/if}-->>10日</option>
																	<option value="11"<!--{if $value.dateOfBirthDay == 11}--> selected<!--{/if}-->>11日</option>
																	<option value="12"<!--{if $value.dateOfBirthDay == 12}--> selected<!--{/if}-->>12日</option>
																	<option value="13"<!--{if $value.dateOfBirthDay == 13}--> selected<!--{/if}-->>13日</option>
																	<option value="14"<!--{if $value.dateOfBirthDay == 14}--> selected<!--{/if}-->>14日</option>
																	<option value="15"<!--{if $value.dateOfBirthDay == 15}--> selected<!--{/if}-->>15日</option>
																	<option value="16"<!--{if $value.dateOfBirthDay == 16}--> selected<!--{/if}-->>16日</option>
																	<option value="17"<!--{if $value.dateOfBirthDay == 17}--> selected<!--{/if}-->>17日</option>
																	<option value="18"<!--{if $value.dateOfBirthDay == 18}--> selected<!--{/if}-->>18日</option>
																	<option value="19"<!--{if $value.dateOfBirthDay == 19}--> selected<!--{/if}-->>19日</option>
																	<option value="20"<!--{if $value.dateOfBirthDay == 20}--> selected<!--{/if}-->>20日</option>
																	<option value="21"<!--{if $value.dateOfBirthDay == 21}--> selected<!--{/if}-->>21日</option>
																	<option value="22"<!--{if $value.dateOfBirthDay == 22}--> selected<!--{/if}-->>22日</option>
																	<option value="23"<!--{if $value.dateOfBirthDay == 23}--> selected<!--{/if}-->>23日</option>
																	<option value="24"<!--{if $value.dateOfBirthDay == 24}--> selected<!--{/if}-->>24日</option>
																	<option value="25"<!--{if $value.dateOfBirthDay == 25}--> selected<!--{/if}-->>25日</option>
																	<option value="26"<!--{if $value.dateOfBirthDay == 26}--> selected<!--{/if}-->>26日</option>
																	<option value="27"<!--{if $value.dateOfBirthDay == 27}--> selected<!--{/if}-->>27日</option>
																	<option value="28"<!--{if $value.dateOfBirthDay == 28}--> selected<!--{/if}-->>28日</option>
																	<option value="29"<!--{if $value.dateOfBirthDay == 29}--> selected<!--{/if}-->>29日</option>
																	<option value="30"<!--{if $value.dateOfBirthDay == 30}--> selected<!--{/if}-->>30日</option>
																	<option value="31"<!--{if $value.dateOfBirthDay == 31}--> selected<!--{/if}-->>31日</option>
																</select>
															</li>
														</ul>
													</td>
												</tr>
												<tr>
													<th class="w125">年齢</th>
													<td>
														<select name="sendForm[<!--{$keyno}-->][age]" class="w63">
															<option value="">選択</option>
															<!--{foreach from=$ageArr key=key item=value name=cnt}-->
																<option value="<!--{$value}-->"<!--{if $value.age == $value}--> selected<!--{/if}-->><!--{$value}--></option>
															<!--{/foreach}-->
														</select>
													</td>
												</tr>
												<tr>
													<th class="w125">血液型</th>
													<td>
														<select name="sendForm[<!--{$keyno}-->][bloodType]" class="w63">
															<option value="">選択</option>
															<option value="A"<!--{if $value.bloodType == 'A'}--> selected<!--{/if}-->>A</option>
															<option value="B"<!--{if $value.bloodType == 'B'}--> selected<!--{/if}-->>B</option>
															<option value="O"<!--{if $value.bloodType == 'O'}--> selected<!--{/if}-->>O</option>
															<option value="AB"<!--{if $value.bloodType == 'AB'}--> selected<!--{/if}-->>AB</option>
														</select>
													</td>
												</tr>
											</table>
											<div class="headingB">
												<h3>緊急連絡先</h3>
											</div>
											<table class="tableA">
												<tr>
													<th class="w125">氏名（漢字）</th>
													<td>
														<input type="text" name="sendForm[<!--{$keyno}-->][emergencyName_Kanji]" class="w100p" value="<!--{$value.emergencyName_Kanji}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">氏名（カナ）</th>
													<td>
														<input type="text" name="sendForm[<!--{$keyno}-->][emergencyName_Kana]" class="w100p" value="<!--{$value.emergencyName_Kana}-->">
													</td>
												</tr>
												<tr>
													<th class="w125">続柄</th>
													<td>
														<select name="sendForm[<!--{$keyno}-->][relationship]" class="w63">
															<option value="">選択</option>
															<option value="1"<!--{if $value.relationship == 1}--> selected<!--{/if}-->>妻</option>
															<option value="2"<!--{if $value.relationship == 2}--> selected<!--{/if}-->>夫</option>
															<option value="3"<!--{if $value.relationship == 3}--> selected<!--{/if}-->>子</option>
															<option value="4"<!--{if $value.relationship == 4}--> selected<!--{/if}-->>孫</option>
															<option value="5"<!--{if $value.relationship == 5}--> selected<!--{/if}-->>実兄</option>
															<option value="6"<!--{if $value.relationship == 6}--> selected<!--{/if}-->>実弟</option>
															<option value="7"<!--{if $value.relationship == 7}--> selected<!--{/if}-->>実姉</option>
															<option value="8"<!--{if $value.relationship == 8}--> selected<!--{/if}-->>実妹</option>
															<option value="9"<!--{if $value.relationship == 9}--> selected<!--{/if}-->>祖父</option>
															<option value="10"<!--{if $value.relationship == 10}--> selected<!--{/if}-->>祖母</option>
															<option value="11"<!--{if $value.relationship == 11}--> selected<!--{/if}-->>曽祖父</option>
															<option value="12"<!--{if $value.relationship == 12}--> selected<!--{/if}-->>曾祖母</option>
															<option value="13"<!--{if $value.relationship == 13}--> selected<!--{/if}-->>従兄弟</option>
															<option value="14"<!--{if $value.relationship == 14}--> selected<!--{/if}-->>叔父</option>
															<option value="15"<!--{if $value.relationship == 15}--> selected<!--{/if}-->>叔母</option>
															<option value="16"<!--{if $value.relationship == 16}--> selected<!--{/if}-->>義父</option>
															<option value="17"<!--{if $value.relationship == 17}--> selected<!--{/if}-->>義母</option>
															<option value="18"<!--{if $value.relationship == 18}--> selected<!--{/if}-->>義兄</option>
															<option value="19"<!--{if $value.relationship == 19}--> selected<!--{/if}-->>義弟</option>
															<option value="20"<!--{if $value.relationship == 20}--> selected<!--{/if}-->>義姉</option>
															<option value="21"<!--{if $value.relationship == 21}--> selected<!--{/if}-->>義妹</option>
															<option value="22"<!--{if $value.relationship == 22}--> selected<!--{/if}-->>義祖父</option>
															<option value="23"<!--{if $value.relationship == 23}--> selected<!--{/if}-->>義祖母</option>
															<option value="24"<!--{if $value.relationship == 24}--> selected<!--{/if}-->>義叔父</option>
															<option value="25"<!--{if $value.relationship == 25}--> selected<!--{/if}-->>義叔母</option>
															<option value="26"<!--{if $value.relationship == 26}--> selected<!--{/if}-->>義従兄弟</option>
															<option value="27"<!--{if $value.relationship == 27}--> selected<!--{/if}-->>知人／友人</option>
															<option value="28"<!--{if $value.relationship == 28}--> selected<!--{/if}-->>同居人</option>
															<option value="29"<!--{if $value.relationship == 29}--> selected<!--{/if}-->>その他</option>
														</select>
													</td>
												</tr>
												<tr>
													<th class="w125">電話番号</th>
													<td>
														<input type="text" class="w53" name="sendForm[<!--{$keyno}-->][emergencyPhoneNumberAreaCode]" placeholder="000" value="<!--{$value.emergencyPhoneNumberAreaCode}-->">
														ー
														<input type="text" class="w53" name="sendForm[<!--{$keyno}-->][emergencyPhoneNumberFirstHalf]" placeholder="0000" value="<!--{$value.emergencyPhoneNumberFirstHalf}-->">
														ー
														<input type="text" class="w53" name="sendForm[<!--{$keyno}-->][emergencyPhoneNumberLastHalf]" placeholder="0000" value="<!--{$value.emergencyPhoneNumberLastHalf}-->">
													</td>
												</tr>
											</table>
											<table class="tableA noTtl">
												<tr>
													<th class="w125">備考</th>
													<td class="bdt">
														<textarea name="sendForm[<!--{$keyno}-->][remarks]" rows="8" class="w100p"><!--{$value.remarks}--></textarea>
													</td>
												</tr>
											</table>
										</div>
										<div class="boxRight w470">
											<table class="tableA noTtl">
												<tr>
													<th class="w105">登録年月日</th>
													<td>
														<ul class="dateSortingArea horizontal">
															<li>
																<select name="sendForm[<!--{$keyno}-->][registrationYear]" class="w105">
																	<option value="">年選択</option>
																	<!--{foreach from=$checkupYearArr key=key item=value name=cnt}-->
																		<option value="<!--{$value}-->"<!--{if $value.registrationYear == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
																	<!--{/foreach}-->
																</select>
																<select name="sendForm[<!--{$keyno}-->][registrationMonth]" class="w72">
																	<option value="">月選択</option>
																	<option value="1"<!--{if $value.registrationMonth == 1}--> selected<!--{/if}-->>1月</option>
																	<option value="2"<!--{if $value.registrationMonth == 2}--> selected<!--{/if}-->>2月</option>
																	<option value="3"<!--{if $value.registrationMonth == 3}--> selected<!--{/if}-->>3月</option>
																	<option value="4"<!--{if $value.registrationMonth == 4}--> selected<!--{/if}-->>4月</option>
																	<option value="5"<!--{if $value.registrationMonth == 5}--> selected<!--{/if}-->>5月</option>
																	<option value="6"<!--{if $value.registrationMonth == 6}--> selected<!--{/if}-->>6月</option>
																	<option value="7"<!--{if $value.registrationMonth == 7}--> selected<!--{/if}-->>7月</option>
																	<option value="8"<!--{if $value.registrationMonth == 8}--> selected<!--{/if}-->>8月</option>
																	<option value="9"<!--{if $value.registrationMonth == 9}--> selected<!--{/if}-->>9月</option>
																	<option value="10"<!--{if $value.registrationMonth == 10}--> selected<!--{/if}-->>10月</option>
																	<option value="11"<!--{if $value.registrationMonth == 11}--> selected<!--{/if}-->>11月</option>
																	<option value="12"<!--{if $value.registrationMonth == 12}--> selected<!--{/if}-->>12月</option>
																</select>
																<select name="sendForm[<!--{$keyno}-->][registrationDay]" class="w72">
																	<option value="">日選択</option>
																	<option value="1"<!--{if $value.registrationDay == 1}--> selected<!--{/if}-->>1日</option>
																	<option value="2"<!--{if $value.registrationDay == 2}--> selected<!--{/if}-->>2日</option>
																	<option value="3"<!--{if $value.registrationDay == 3}--> selected<!--{/if}-->>3日</option>
																	<option value="4"<!--{if $value.registrationDay == 4}--> selected<!--{/if}-->>4日</option>
																	<option value="5"<!--{if $value.registrationDay == 5}--> selected<!--{/if}-->>5日</option>
																	<option value="6"<!--{if $value.registrationDay == 6}--> selected<!--{/if}-->>6日</option>
																	<option value="7"<!--{if $value.registrationDay == 7}--> selected<!--{/if}-->>7日</option>
																	<option value="8"<!--{if $value.registrationDay == 8}--> selected<!--{/if}-->>8日</option>
																	<option value="9"<!--{if $value.registrationDay == 9}--> selected<!--{/if}-->>9日</option>
																	<option value="10"<!--{if $value.registrationDay == 10}--> selected<!--{/if}-->>10日</option>
																	<option value="11"<!--{if $value.registrationDay == 11}--> selected<!--{/if}-->>11日</option>
																	<option value="12"<!--{if $value.registrationDay == 12}--> selected<!--{/if}-->>12日</option>
																	<option value="13"<!--{if $value.registrationDay == 13}--> selected<!--{/if}-->>13日</option>
																	<option value="14"<!--{if $value.registrationDay == 14}--> selected<!--{/if}-->>14日</option>
																	<option value="15"<!--{if $value.registrationDay == 15}--> selected<!--{/if}-->>15日</option>
																	<option value="16"<!--{if $value.registrationDay == 16}--> selected<!--{/if}-->>16日</option>
																	<option value="17"<!--{if $value.registrationDay == 17}--> selected<!--{/if}-->>17日</option>
																	<option value="18"<!--{if $value.registrationDay == 18}--> selected<!--{/if}-->>18日</option>
																	<option value="19"<!--{if $value.registrationDay == 19}--> selected<!--{/if}-->>19日</option>
																	<option value="20"<!--{if $value.registrationDay == 20}--> selected<!--{/if}-->>20日</option>
																	<option value="21"<!--{if $value.registrationDay == 21}--> selected<!--{/if}-->>21日</option>
																	<option value="22"<!--{if $value.registrationDay == 22}--> selected<!--{/if}-->>22日</option>
																	<option value="23"<!--{if $value.registrationDay == 23}--> selected<!--{/if}-->>23日</option>
																	<option value="24"<!--{if $value.registrationDay == 24}--> selected<!--{/if}-->>24日</option>
																	<option value="25"<!--{if $value.registrationDay == 25}--> selected<!--{/if}-->>25日</option>
																	<option value="26"<!--{if $value.registrationDay == 26}--> selected<!--{/if}-->>26日</option>
																	<option value="27"<!--{if $value.registrationDay == 27}--> selected<!--{/if}-->>27日</option>
																	<option value="28"<!--{if $value.registrationDay == 28}--> selected<!--{/if}-->>28日</option>
																	<option value="29"<!--{if $value.registrationDay == 29}--> selected<!--{/if}-->>29日</option>
																	<option value="30"<!--{if $value.registrationDay == 30}--> selected<!--{/if}-->>30日</option>
																	<option value="31"<!--{if $value.registrationDay == 31}--> selected<!--{/if}-->>31日</option>
																</select>
															</li>
														</ul>
													</td>
												</tr>
												<tr>
													<th class="w105">ガイズ担当者 <br>（受付担当）</th>
													<td>
														<select class="w105" name="sendForm[<!--{$keyno}-->][representative]">
															<option value="">選択</option>
															<!--{foreach from=$selectStaff key=key item=value name=cnt}-->
																<option value="<!--{$value.staffID}-->"<!--{if $value.representative == $value.staffID}--> selected<!--{/if}-->><!--{$value.name}--></option>
															<!--{/foreach}-->
														</select>
													</td>
												</tr>
												<tr>
													<th class="w105">労災組合名</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][workersUnion]" value="<!--{$value.workersUnion}-->">
													</td>
												</tr>
												<tr>
													<th class="w105">労災番号</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][compensationInsuranceNumber]" value="<!--{$value.compensationInsuranceNumber}-->">
													</td>
												</tr>
												<tr>
													<th class="w105">健康保険名</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][nationalHealthInsurance]" value="<!--{$value.nationalHealthInsurance}-->">
													</td>
												</tr>
												<tr>
													<th class="w105">健康保険番号</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][nationalHealthInsuranceNumber]" value="<!--{$value.nationalHealthInsuranceNumber}-->">
													</td>
												</tr>
												<!--{if $view_flg4 == 1}-->
													<tr>
														<th class="w105">年金保険種類</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][pensionInsurance]" value="<!--{$value.pensionInsurance}-->">
														</td>
													</tr>
													<tr>
														<th class="w105">年金番号</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][pensionNumber]" value="<!--{$value.pensionNumber}-->">
														</td>
													</tr>
													<tr>
														<th class="w105">雇用保険番号</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][unemploymentInsuranceNumber]" value="<!--{$value.unemploymentInsuranceNumber}-->">
														</td>
													</tr>
													<tr>
														<th class="w105">足場作業者番号</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][scaffoldWorkersNumber]" value="<!--{$value.scaffoldWorkersNumber}-->">
														</td>
													</tr>
												<!--{else}-->
													<input type="hidden" name="sendForm[<!--{$keyno}-->][pensionInsurance]" value="<!--{$value.pensionInsurance}-->">
													<input type="hidden" name="sendForm[<!--{$keyno}-->][pensionNumber]" value="<!--{$value.pensionNumber}-->">
													<input type="hidden" name="sendForm[<!--{$keyno}-->][unemploymentInsuranceNumber]" value="<!--{$value.unemploymentInsuranceNumber}-->">
													<input type="hidden" name="sendForm[<!--{$keyno}-->][scaffoldWorkersNumber]" value="<!--{$value.scaffoldWorkersNumber}-->">
												<!--{/if}-->
												<!--{if $view_flg6 == 1}-->
													<tr>
														<th class="w105">その他 1</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][other1]" value="<!--{$value.other1}-->">
														</td>
													</tr>
													<tr>
														<th class="w105">その他 2</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<!--{$keyno}-->][other2]" value="<!--{$value.other2}-->">
														</td>
													</tr>
												<!--{else}-->
													<input type="hidden" name="sendForm[<!--{$keyno}-->][other1]" value="<!--{$value.other1}-->">
													<input type="hidden" name="sendForm[<!--{$keyno}-->][other2]" value="<!--{$value.other2}-->">
												<!--{/if}-->
											</table>
											<table class="tableA noTtl">
												<tr>
													<th class="w105">健康診断 <br>最新診断日</th>
													<td colspan="3" class="bdt">
														<ul class="dateSortingArea horizontal">
															<li>
																<select name="sendForm[<!--{$keyno}-->][latestCheckupYear]" class="w105">
																	<option value="">年選択</option>
																	<!--{foreach from=$checkupYearArr key=key item=value name=cnt}-->
																		<option value="<!--{$value}-->"<!--{if $value.latestCheckupYear == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
																	<!--{/foreach}-->
																</select>
																<select name="sendForm[<!--{$keyno}-->][latestCheckupMonth]" class="w72">
																	<option value="">月選択</option>
																	<option value="1"<!--{if $value.latestCheckupMonth == 1}--> selected<!--{/if}-->>1月</option>
																	<option value="2"<!--{if $value.latestCheckupMonth == 2}--> selected<!--{/if}-->>2月</option>
																	<option value="3"<!--{if $value.latestCheckupMonth == 3}--> selected<!--{/if}-->>3月</option>
																	<option value="4"<!--{if $value.latestCheckupMonth == 4}--> selected<!--{/if}-->>4月</option>
																	<option value="5"<!--{if $value.latestCheckupMonth == 5}--> selected<!--{/if}-->>5月</option>
																	<option value="6"<!--{if $value.latestCheckupMonth == 6}--> selected<!--{/if}-->>6月</option>
																	<option value="7"<!--{if $value.latestCheckupMonth == 7}--> selected<!--{/if}-->>7月</option>
																	<option value="8"<!--{if $value.latestCheckupMonth == 8}--> selected<!--{/if}-->>8月</option>
																	<option value="9"<!--{if $value.latestCheckupMonth == 9}--> selected<!--{/if}-->>9月</option>
																	<option value="10"<!--{if $value.latestCheckupMonth == 10}--> selected<!--{/if}-->>10月</option>
																	<option value="11"<!--{if $value.latestCheckupMonth == 11}--> selected<!--{/if}-->>11月</option>
																	<option value="12"<!--{if $value.latestCheckupMonth == 12}--> selected<!--{/if}-->>12月</option>
																</select>
																<select name="sendForm[<!--{$keyno}-->][latestCheckupDay]" class="w72">
																	<option value="">日選択</option>
																	<option value="1"<!--{if $value.latestCheckupDay == 1}--> selected<!--{/if}-->>1日</option>
																	<option value="2"<!--{if $value.latestCheckupDay == 2}--> selected<!--{/if}-->>2日</option>
																	<option value="3"<!--{if $value.latestCheckupDay == 3}--> selected<!--{/if}-->>3日</option>
																	<option value="4"<!--{if $value.latestCheckupDay == 4}--> selected<!--{/if}-->>4日</option>
																	<option value="5"<!--{if $value.latestCheckupDay == 5}--> selected<!--{/if}-->>5日</option>
																	<option value="6"<!--{if $value.latestCheckupDay == 6}--> selected<!--{/if}-->>6日</option>
																	<option value="7"<!--{if $value.latestCheckupDay == 7}--> selected<!--{/if}-->>7日</option>
																	<option value="8"<!--{if $value.latestCheckupDay == 8}--> selected<!--{/if}-->>8日</option>
																	<option value="9"<!--{if $value.latestCheckupDay == 9}--> selected<!--{/if}-->>9日</option>
																	<option value="10"<!--{if $value.latestCheckupDay == 10}--> selected<!--{/if}-->>10日</option>
																	<option value="11"<!--{if $value.latestCheckupDay == 11}--> selected<!--{/if}-->>11日</option>
																	<option value="12"<!--{if $value.latestCheckupDay == 12}--> selected<!--{/if}-->>12日</option>
																	<option value="13"<!--{if $value.latestCheckupDay == 13}--> selected<!--{/if}-->>13日</option>
																	<option value="14"<!--{if $value.latestCheckupDay == 14}--> selected<!--{/if}-->>14日</option>
																	<option value="15"<!--{if $value.latestCheckupDay == 15}--> selected<!--{/if}-->>15日</option>
																	<option value="16"<!--{if $value.latestCheckupDay == 16}--> selected<!--{/if}-->>16日</option>
																	<option value="17"<!--{if $value.latestCheckupDay == 17}--> selected<!--{/if}-->>17日</option>
																	<option value="18"<!--{if $value.latestCheckupDay == 18}--> selected<!--{/if}-->>18日</option>
																	<option value="19"<!--{if $value.latestCheckupDay == 19}--> selected<!--{/if}-->>19日</option>
																	<option value="20"<!--{if $value.latestCheckupDay == 20}--> selected<!--{/if}-->>20日</option>
																	<option value="21"<!--{if $value.latestCheckupDay == 21}--> selected<!--{/if}-->>21日</option>
																	<option value="22"<!--{if $value.latestCheckupDay == 22}--> selected<!--{/if}-->>22日</option>
																	<option value="23"<!--{if $value.latestCheckupDay == 23}--> selected<!--{/if}-->>23日</option>
																	<option value="24"<!--{if $value.latestCheckupDay == 24}--> selected<!--{/if}-->>24日</option>
																	<option value="25"<!--{if $value.latestCheckupDay == 25}--> selected<!--{/if}-->>25日</option>
																	<option value="26"<!--{if $value.latestCheckupDay == 26}--> selected<!--{/if}-->>26日</option>
																	<option value="27"<!--{if $value.latestCheckupDay == 27}--> selected<!--{/if}-->>27日</option>
																	<option value="28"<!--{if $value.latestCheckupDay == 28}--> selected<!--{/if}-->>28日</option>
																	<option value="29"<!--{if $value.latestCheckupDay == 29}--> selected<!--{/if}-->>29日</option>
																	<option value="30"<!--{if $value.latestCheckupDay == 30}--> selected<!--{/if}-->>30日</option>
																	<option value="31"<!--{if $value.latestCheckupDay == 31}--> selected<!--{/if}-->>31日</option>
																</select>
															</li>
														</ul>
													</td>
												</tr>
												<tr>
													<th>血圧（上）</th>
													<td>
														<input type="text" name="sendForm[<!--{$keyno}-->][bloodPressureHigher]" class="w100p" value="<!--{$value.bloodPressureHigher}-->">
													</td>
													<th class="w80">血圧（下）</th>
													<td>
														<input type="text" name="sendForm[<!--{$keyno}-->][bloodPressureLower]" class="w100p" value="<!--{$value.bloodPressureLower}-->">
													</td>
												</tr>
												<tr>
													<th>その他</th>
													<td colspan="3">
														<input type="text" name="sendForm[<!--{$keyno}-->][other]" value="<!--{$value.other}-->">
													</td>
												</tr>
											</table>
											<div class="headingB">
												<h3>キャリア／スキル</h3>
											</div>
											<table class="tableB">
												<tr>
													<th>工事種 1</th>
													<th>工事種 2</th>
													<th>登録時経験年数</th>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType1_1]" class="w100p" value="<!--{$value.constructionType1_1}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType1_2]" class="w100p" value="<!--{$value.constructionType1_2}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][yearsOfExperience1]" class="mr5 w120" value="<!--{$value.yearsOfExperience1}-->">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType2_1]" class="w100p" value="<!--{$value.constructionType2_1}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType2_2]" class="w100p" value="<!--{$value.constructionType2_2}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][yearsOfExperience2]" class="mr5 w120" value="<!--{$value.yearsOfExperience2}-->">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType3_1]" class="w100p" value="<!--{$value.constructionType3_1}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType3_2]" class="w100p" value="<!--{$value.constructionType3_2}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][yearsOfExperience3]" class="mr5 w120" value="<!--{$value.yearsOfExperience3}-->">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType4_1]" class="w100p" value="<!--{$value.constructionType4_1}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType4_2]" class="w100p" value="<!--{$value.constructionType4_2}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][yearsOfExperience4]" class="mr5 w120" value="<!--{$value.yearsOfExperience4}-->">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType5_1]" class="w100p" value="<!--{$value.constructionType5_1}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType5_2]" class="w100p" value="<!--{$value.constructionType5_2}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][yearsOfExperience5]" class="mr5 w120" value="<!--{$value.yearsOfExperience5}-->">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType6_1]" class="w100p" value="<!--{$value.constructionType6_1}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType6_2]" class="w100p" value="<!--{$value.constructionType6_2}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][yearsOfExperience6]" class="mr5 w120" value="<!--{$value.yearsOfExperience6}-->">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType7_1]" class="w100p" value="<!--{$value.constructionType7_1}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType7_2]" class="w100p" value="<!--{$value.constructionType7_2}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][yearsOfExperience7]" class="mr5 w120" value="<!--{$value.yearsOfExperience7}-->">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType8_1]" class="w100p" value="<!--{$value.constructionType8_1}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][constructionType8_2]" class="w100p" value="<!--{$value.constructionType8_2}-->"></td>
													<td><input type="text" name="sendForm[<!--{$keyno}-->][yearsOfExperience8]" class="mr5 w120" value="<!--{$value.yearsOfExperience8}-->">年</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						<!--{/foreach}-->
					</div>
					<!--{if $view_flg3 == 1 || $view_flg5 == 1 || $view_flg7 == 1}-->
						<div class="container<!--{if $selectBase2|@count == 0}--> disp_none<!--{/if}-->" id="form2button">
							<div class="clearfix">
								<div class="boxRight">
									<button class="btnReload" type="submit">登録・更新する</button>
								</div>
							</div>
						</div>
					<!--{/if}-->
				</form>
			<!--{/if}-->
		<!--{else}-->
			<div class="errorBox">
				<p class="error">工事発注権限がありません。</p>
			</div>
		<!--{/if}-->
	<!--{/if}-->
<!--{/if}-->




<div id="formAreaClone" class="formAreaSubBox disp_none">
	<input type="hidden" name="codeNumber" value="<!--{$codeNumber}-->">
	<input type="hidden" name="officeCode" value="<!--{$officeCode}-->">
	<input type="hidden" name="sendForm[1][codeNumber]" value="<!--{$codeNumber}-->">
	<input type="hidden" name="sendForm[1][officeCode]" value="<!--{$officeCode}-->">
	<input type="hidden" name="sendForm[1][workerFlg]" value="2">
	<input type="hidden" name="sendForm[1][workerNo]" id="workerNo" value="1">
	<div class="container">
		<div class="txtRight mb10">
			<button class="buttonA">CSV出力</button>
		</div>
		<div class="clearfix">
			<div class="boxRight">
				<a href="#" class="btnIncrease workerPlusBtn" onclick="worker_view('2')">+</a>
				<a href="#" class="btnDecrease" onclick="worker_del('1')">+</a>
			</div>
		</div>
		<div class="clearfix">
			<div class="boxLeft w470">
				<div class="clearfix pt10 mb10">
					<div class="boxLeft	">
						<div class="headingB m0">
							<h3>作業員（<span class="worker">2</span>）：社員</h3>
						</div>
					</div>
					<div class="boxRight">
						<button class="buttonA">登録更新カード（代表者用）</button>
					</div>
				</div>
				<table class="tableA ">
					<tr>
						<th class="w125">登録 No</th>
						<td>
							<input type="text" name="sendForm[1][registrationNumber]" class="w100p" value="<!--{$value.registrationNumber}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">氏名（漢字）</th>
						<td>
							<input type="text" name="sendForm[1][name_Kanji]" class="w100p" value="<!--{$value.name_Kanji}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">氏名（カナ）</th>
						<td>
							<input type="text" name="sendForm[1][name_Kana]" class="w100p" value="<!--{$value.name_Kana}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">住所／郵便番号</th>
						<td>
							<input type="text" class="w53" id="postcodeFirstHalf" name="sendForm[1][postcodeFirstHalf]" placeholder="000" value="<!--{$value.postcodeFirstHalf}-->">
							ー
							<input type="text" class="w53" id="postcodeLastHalf" name="sendForm[1][postcodeLastHalf]" placeholder="000" value="<!--{$value.postcodeLastHalf}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">住所</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][address]" value="<!--{$value.address}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">建物名 等</th>
						<td>
							<input type="text" name="sendForm[1][buildingName]" class="w100p" value="<!--{$value.buildingName}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">電話番号</th>
						<td>
							<input type="text" class="w53" name="sendForm[1][phoneNumberAreaCode]" placeholder="000" value="<!--{$value.phoneNumberAreaCode}-->">
							ー
							<input type="text" class="w53" name="sendForm[1][phoneNumberFirstHalf]" placeholder="0000" value="<!--{$value.phoneNumberFirstHalf}-->">
							ー
							<input type="text" class="w53" name="sendForm[1][phoneNumberLastHalf]" placeholder="0000" value="<!--{$value.phoneNumberLastHalf}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">ファックス番号</th>
						<td>
							<input type="text" class="w53" name="sendForm[1][faxNumberAreaCode]" placeholder="000" value="<!--{$value.faxNumberAreaCode}-->">
							ー
							<input type="text" class="w53" name="sendForm[1][faxNumberFirstHalf]" placeholder="0000" value="<!--{$value.faxNumberFirstHalf}-->">
							ー
							<input type="text" class="w53" name="sendForm[1][faxNumberLastHalf]" placeholder="0000" value="<!--{$value.faxNumberLastHalf}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">メールアドレス</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][eMail]" value="<!--{$value.eMail}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">生年月日</th>
						<td>
							<ul class="dateSortingArea horizontal">
								<li>
									<select name="sendForm[1][dateOfBirthYear]" class="w105">
										<option value="">年選択</option>
										<!--{foreach from=$birthYearArr key=key item=value name=cnt}-->
											<option value="<!--{$value}-->"<!--{if $value.dateOfBirthYear == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
										<!--{/foreach}-->
									</select>
									<select name="sendForm[1][dateOfBirthMonth]" class="w72">
										<option value="">月選択</option>
										<option value="1"<!--{if $value.dateOfBirthMonth == 1}--> selected<!--{/if}-->>1月</option>
										<option value="2"<!--{if $value.dateOfBirthMonth == 2}--> selected<!--{/if}-->>2月</option>
										<option value="3"<!--{if $value.dateOfBirthMonth == 3}--> selected<!--{/if}-->>3月</option>
										<option value="4"<!--{if $value.dateOfBirthMonth == 4}--> selected<!--{/if}-->>4月</option>
										<option value="5"<!--{if $value.dateOfBirthMonth == 5}--> selected<!--{/if}-->>5月</option>
										<option value="6"<!--{if $value.dateOfBirthMonth == 6}--> selected<!--{/if}-->>6月</option>
										<option value="7"<!--{if $value.dateOfBirthMonth == 7}--> selected<!--{/if}-->>7月</option>
										<option value="8"<!--{if $value.dateOfBirthMonth == 8}--> selected<!--{/if}-->>8月</option>
										<option value="9"<!--{if $value.dateOfBirthMonth == 9}--> selected<!--{/if}-->>9月</option>
										<option value="10"<!--{if $value.dateOfBirthMonth == 10}--> selected<!--{/if}-->>10月</option>
										<option value="11"<!--{if $value.dateOfBirthMonth == 11}--> selected<!--{/if}-->>11月</option>
										<option value="12"<!--{if $value.dateOfBirthMonth == 12}--> selected<!--{/if}-->>12月</option>
									</select>
									<select name="sendForm[1][dateOfBirthDay]" class="w72">
										<option value="">日選択</option>
										<option value="1"<!--{if $value.dateOfBirthDay == 1}--> selected<!--{/if}-->>1日</option>
										<option value="2"<!--{if $value.dateOfBirthDay == 2}--> selected<!--{/if}-->>2日</option>
										<option value="3"<!--{if $value.dateOfBirthDay == 3}--> selected<!--{/if}-->>3日</option>
										<option value="4"<!--{if $value.dateOfBirthDay == 4}--> selected<!--{/if}-->>4日</option>
										<option value="5"<!--{if $value.dateOfBirthDay == 5}--> selected<!--{/if}-->>5日</option>
										<option value="6"<!--{if $value.dateOfBirthDay == 6}--> selected<!--{/if}-->>6日</option>
										<option value="7"<!--{if $value.dateOfBirthDay == 7}--> selected<!--{/if}-->>7日</option>
										<option value="8"<!--{if $value.dateOfBirthDay == 8}--> selected<!--{/if}-->>8日</option>
										<option value="9"<!--{if $value.dateOfBirthDay == 9}--> selected<!--{/if}-->>9日</option>
										<option value="10"<!--{if $value.dateOfBirthDay == 10}--> selected<!--{/if}-->>10日</option>
										<option value="11"<!--{if $value.dateOfBirthDay == 11}--> selected<!--{/if}-->>11日</option>
										<option value="12"<!--{if $value.dateOfBirthDay == 12}--> selected<!--{/if}-->>12日</option>
										<option value="13"<!--{if $value.dateOfBirthDay == 13}--> selected<!--{/if}-->>13日</option>
										<option value="14"<!--{if $value.dateOfBirthDay == 14}--> selected<!--{/if}-->>14日</option>
										<option value="15"<!--{if $value.dateOfBirthDay == 15}--> selected<!--{/if}-->>15日</option>
										<option value="16"<!--{if $value.dateOfBirthDay == 16}--> selected<!--{/if}-->>16日</option>
										<option value="17"<!--{if $value.dateOfBirthDay == 17}--> selected<!--{/if}-->>17日</option>
										<option value="18"<!--{if $value.dateOfBirthDay == 18}--> selected<!--{/if}-->>18日</option>
										<option value="19"<!--{if $value.dateOfBirthDay == 19}--> selected<!--{/if}-->>19日</option>
										<option value="20"<!--{if $value.dateOfBirthDay == 20}--> selected<!--{/if}-->>20日</option>
										<option value="21"<!--{if $value.dateOfBirthDay == 21}--> selected<!--{/if}-->>21日</option>
										<option value="22"<!--{if $value.dateOfBirthDay == 22}--> selected<!--{/if}-->>22日</option>
										<option value="23"<!--{if $value.dateOfBirthDay == 23}--> selected<!--{/if}-->>23日</option>
										<option value="24"<!--{if $value.dateOfBirthDay == 24}--> selected<!--{/if}-->>24日</option>
										<option value="25"<!--{if $value.dateOfBirthDay == 25}--> selected<!--{/if}-->>25日</option>
										<option value="26"<!--{if $value.dateOfBirthDay == 26}--> selected<!--{/if}-->>26日</option>
										<option value="27"<!--{if $value.dateOfBirthDay == 27}--> selected<!--{/if}-->>27日</option>
										<option value="28"<!--{if $value.dateOfBirthDay == 28}--> selected<!--{/if}-->>28日</option>
										<option value="29"<!--{if $value.dateOfBirthDay == 29}--> selected<!--{/if}-->>29日</option>
										<option value="30"<!--{if $value.dateOfBirthDay == 30}--> selected<!--{/if}-->>30日</option>
										<option value="31"<!--{if $value.dateOfBirthDay == 31}--> selected<!--{/if}-->>31日</option>
									</select>
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th class="w125">年齢</th>
						<td>
							<select name="sendForm[1][age]" class="w63">
								<option value="">選択</option>
								<!--{foreach from=$ageArr key=key item=value name=cnt}-->
									<option value="<!--{$value}-->"<!--{if $value.age == $value}--> selected<!--{/if}-->><!--{$value}--></option>
								<!--{/foreach}-->
							</select>
						</td>
					</tr>
					<tr>
						<th class="w125">血液型</th>
						<td>
							<select name="sendForm[1][bloodType]" class="w63">
								<option value="">選択</option>
								<option value="A"<!--{if $value.bloodType == 'A'}--> selected<!--{/if}-->>A</option>
								<option value="B"<!--{if $value.bloodType == 'B'}--> selected<!--{/if}-->>B</option>
								<option value="O"<!--{if $value.bloodType == 'O'}--> selected<!--{/if}-->>O</option>
								<option value="AB"<!--{if $value.bloodType == 'AB'}--> selected<!--{/if}-->>AB</option>
							</select>
						</td>
					</tr>
				</table>
				<div class="headingB">
					<h3>緊急連絡先</h3>
				</div>
				<table class="tableA">
					<tr>
						<th class="w125">氏名（漢字）</th>
						<td>
							<input type="text" name="sendForm[1][emergencyName_Kanji]" class="w100p" value="<!--{$value.emergencyName_Kanji}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">氏名（カナ）</th>
						<td>
							<input type="text" name="sendForm[1][emergencyName_Kana]" class="w100p" value="<!--{$value.emergencyName_Kana}-->">
						</td>
					</tr>
					<tr>
						<th class="w125">続柄</th>
						<td>
							<select name="sendForm[1][relationship]" class="w63">
								<option value="">選択</option>
								<option value="1"<!--{if $value.relationship == 1}--> selected<!--{/if}-->>妻</option>
								<option value="2"<!--{if $value.relationship == 2}--> selected<!--{/if}-->>夫</option>
								<option value="3"<!--{if $value.relationship == 3}--> selected<!--{/if}-->>子</option>
								<option value="4"<!--{if $value.relationship == 4}--> selected<!--{/if}-->>孫</option>
								<option value="5"<!--{if $value.relationship == 5}--> selected<!--{/if}-->>実兄</option>
								<option value="6"<!--{if $value.relationship == 6}--> selected<!--{/if}-->>実弟</option>
								<option value="7"<!--{if $value.relationship == 7}--> selected<!--{/if}-->>実姉</option>
								<option value="8"<!--{if $value.relationship == 8}--> selected<!--{/if}-->>実妹</option>
								<option value="9"<!--{if $value.relationship == 9}--> selected<!--{/if}-->>祖父</option>
								<option value="10"<!--{if $value.relationship == 10}--> selected<!--{/if}-->>祖母</option>
								<option value="11"<!--{if $value.relationship == 11}--> selected<!--{/if}-->>曽祖父</option>
								<option value="12"<!--{if $value.relationship == 12}--> selected<!--{/if}-->>曾祖母</option>
								<option value="13"<!--{if $value.relationship == 13}--> selected<!--{/if}-->>従兄弟</option>
								<option value="14"<!--{if $value.relationship == 14}--> selected<!--{/if}-->>叔父</option>
								<option value="15"<!--{if $value.relationship == 15}--> selected<!--{/if}-->>叔母</option>
								<option value="16"<!--{if $value.relationship == 16}--> selected<!--{/if}-->>義父</option>
								<option value="17"<!--{if $value.relationship == 17}--> selected<!--{/if}-->>義母</option>
								<option value="18"<!--{if $value.relationship == 18}--> selected<!--{/if}-->>義兄</option>
								<option value="19"<!--{if $value.relationship == 19}--> selected<!--{/if}-->>義弟</option>
								<option value="20"<!--{if $value.relationship == 20}--> selected<!--{/if}-->>義姉</option>
								<option value="21"<!--{if $value.relationship == 21}--> selected<!--{/if}-->>義妹</option>
								<option value="22"<!--{if $value.relationship == 22}--> selected<!--{/if}-->>義祖父</option>
								<option value="23"<!--{if $value.relationship == 23}--> selected<!--{/if}-->>義祖母</option>
								<option value="24"<!--{if $value.relationship == 24}--> selected<!--{/if}-->>義叔父</option>
								<option value="25"<!--{if $value.relationship == 25}--> selected<!--{/if}-->>義叔母</option>
								<option value="26"<!--{if $value.relationship == 26}--> selected<!--{/if}-->>義従兄弟</option>
								<option value="27"<!--{if $value.relationship == 27}--> selected<!--{/if}-->>知人／友人</option>
								<option value="28"<!--{if $value.relationship == 28}--> selected<!--{/if}-->>同居人</option>
								<option value="29"<!--{if $value.relationship == 29}--> selected<!--{/if}-->>その他</option>
							</select>
						</td>
					</tr>
					<tr>
						<th class="w125">電話番号</th>
						<td>
							<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberAreaCode]" placeholder="000" value="<!--{$value.emergencyPhoneNumberAreaCode}-->">
							ー
							<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberFirstHalf]" placeholder="0000" value="<!--{$value.emergencyPhoneNumberFirstHalf}-->">
							ー
							<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberLastHalf]" placeholder="0000" value="<!--{$value.emergencyPhoneNumberLastHalf}-->">
						</td>
					</tr>
				</table>
				<table class="tableA noTtl">
					<tr>
						<th class="w125">備考</th>
						<td class="bdt">
							<textarea name="sendForm[1][remarks]" rows="8" class="w100p"><!--{$value.remarks}--></textarea>
						</td>
					</tr>
				</table>
			</div>
			<div class="boxRight w470">
				<table class="tableA noTtl">
					<tr>
						<th class="w105">登録年月日</th>
						<td>
							<ul class="dateSortingArea horizontal">
								<li>
									<select name="sendForm[1][registrationYear]" class="w105">
										<option value="">年選択</option>
										<!--{foreach from=$checkupYearArr key=key item=value name=cnt}-->
											<option value="<!--{$value}-->"<!--{if $value.registrationYear == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
										<!--{/foreach}-->
									</select>
									<select name="sendForm[1][registrationMonth]" class="w72">
										<option value="">月選択</option>
										<option value="1"<!--{if $value.registrationMonth == 1}--> selected<!--{/if}-->>1月</option>
										<option value="2"<!--{if $value.registrationMonth == 2}--> selected<!--{/if}-->>2月</option>
										<option value="3"<!--{if $value.registrationMonth == 3}--> selected<!--{/if}-->>3月</option>
										<option value="4"<!--{if $value.registrationMonth == 4}--> selected<!--{/if}-->>4月</option>
										<option value="5"<!--{if $value.registrationMonth == 5}--> selected<!--{/if}-->>5月</option>
										<option value="6"<!--{if $value.registrationMonth == 6}--> selected<!--{/if}-->>6月</option>
										<option value="7"<!--{if $value.registrationMonth == 7}--> selected<!--{/if}-->>7月</option>
										<option value="8"<!--{if $value.registrationMonth == 8}--> selected<!--{/if}-->>8月</option>
										<option value="9"<!--{if $value.registrationMonth == 9}--> selected<!--{/if}-->>9月</option>
										<option value="10"<!--{if $value.registrationMonth == 10}--> selected<!--{/if}-->>10月</option>
										<option value="11"<!--{if $value.registrationMonth == 11}--> selected<!--{/if}-->>11月</option>
										<option value="12"<!--{if $value.registrationMonth == 12}--> selected<!--{/if}-->>12月</option>
									</select>
									<select name="sendForm[1][registrationDay]" class="w72">
										<option value="">日選択</option>
										<option value="1"<!--{if $value.registrationDay == 1}--> selected<!--{/if}-->>1日</option>
										<option value="2"<!--{if $value.registrationDay == 2}--> selected<!--{/if}-->>2日</option>
										<option value="3"<!--{if $value.registrationDay == 3}--> selected<!--{/if}-->>3日</option>
										<option value="4"<!--{if $value.registrationDay == 4}--> selected<!--{/if}-->>4日</option>
										<option value="5"<!--{if $value.registrationDay == 5}--> selected<!--{/if}-->>5日</option>
										<option value="6"<!--{if $value.registrationDay == 6}--> selected<!--{/if}-->>6日</option>
										<option value="7"<!--{if $value.registrationDay == 7}--> selected<!--{/if}-->>7日</option>
										<option value="8"<!--{if $value.registrationDay == 8}--> selected<!--{/if}-->>8日</option>
										<option value="9"<!--{if $value.registrationDay == 9}--> selected<!--{/if}-->>9日</option>
										<option value="10"<!--{if $value.registrationDay == 10}--> selected<!--{/if}-->>10日</option>
										<option value="11"<!--{if $value.registrationDay == 11}--> selected<!--{/if}-->>11日</option>
										<option value="12"<!--{if $value.registrationDay == 12}--> selected<!--{/if}-->>12日</option>
										<option value="13"<!--{if $value.registrationDay == 13}--> selected<!--{/if}-->>13日</option>
										<option value="14"<!--{if $value.registrationDay == 14}--> selected<!--{/if}-->>14日</option>
										<option value="15"<!--{if $value.registrationDay == 15}--> selected<!--{/if}-->>15日</option>
										<option value="16"<!--{if $value.registrationDay == 16}--> selected<!--{/if}-->>16日</option>
										<option value="17"<!--{if $value.registrationDay == 17}--> selected<!--{/if}-->>17日</option>
										<option value="18"<!--{if $value.registrationDay == 18}--> selected<!--{/if}-->>18日</option>
										<option value="19"<!--{if $value.registrationDay == 19}--> selected<!--{/if}-->>19日</option>
										<option value="20"<!--{if $value.registrationDay == 20}--> selected<!--{/if}-->>20日</option>
										<option value="21"<!--{if $value.registrationDay == 21}--> selected<!--{/if}-->>21日</option>
										<option value="22"<!--{if $value.registrationDay == 22}--> selected<!--{/if}-->>22日</option>
										<option value="23"<!--{if $value.registrationDay == 23}--> selected<!--{/if}-->>23日</option>
										<option value="24"<!--{if $value.registrationDay == 24}--> selected<!--{/if}-->>24日</option>
										<option value="25"<!--{if $value.registrationDay == 25}--> selected<!--{/if}-->>25日</option>
										<option value="26"<!--{if $value.registrationDay == 26}--> selected<!--{/if}-->>26日</option>
										<option value="27"<!--{if $value.registrationDay == 27}--> selected<!--{/if}-->>27日</option>
										<option value="28"<!--{if $value.registrationDay == 28}--> selected<!--{/if}-->>28日</option>
										<option value="29"<!--{if $value.registrationDay == 29}--> selected<!--{/if}-->>29日</option>
										<option value="30"<!--{if $value.registrationDay == 30}--> selected<!--{/if}-->>30日</option>
										<option value="31"<!--{if $value.registrationDay == 31}--> selected<!--{/if}-->>31日</option>
									</select>
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th class="w105">ガイズ担当者 <br>（受付担当）</th>
						<td>
							<select class="w105" name="sendForm[1][representative]">
								<option value="">選択</option>
								<!--{foreach from=$selectStaff key=key item=value name=cnt}-->
									<option value="<!--{$value.staffID}-->"<!--{if $value.representative == $value.staffID}--> selected<!--{/if}-->><!--{$value.name}--></option>
								<!--{/foreach}-->
							</select>
						</td>
					</tr>
					<tr>
						<th class="w105">労災組合名</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][workersUnion]" value="<!--{$value.workersUnion}-->">
						</td>
					</tr>
					<tr>
						<th class="w105">労災番号</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][compensationInsuranceNumber]" value="<!--{$value.compensationInsuranceNumber}-->">
						</td>
					</tr>
					<tr>
						<th class="w105">健康保険名</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][nationalHealthInsurance]" value="<!--{$value.nationalHealthInsurance}-->">
						</td>
					</tr>
					<tr>
						<th class="w105">健康保険番号</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][nationalHealthInsuranceNumber]" value="<!--{$value.nationalHealthInsuranceNumber}-->">
						</td>
					</tr>
					<!--{if $view_flg4 == 1}-->
						<tr>
							<th class="w105">年金保険種類</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][pensionInsurance]" value="<!--{$value.pensionInsurance}-->">
							</td>
						</tr>
						<tr>
							<th class="w105">年金番号</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][pensionNumber]" value="<!--{$value.pensionNumber}-->">
							</td>
						</tr>
						<tr>
							<th class="w105">雇用保険番号</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][unemploymentInsuranceNumber]" value="<!--{$value.unemploymentInsuranceNumber}-->">
							</td>
						</tr>
						<tr>
							<th class="w105">足場作業者番号</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][scaffoldWorkersNumber]" value="<!--{$value.scaffoldWorkersNumber}-->">
							</td>
						</tr>
					<!--{else}-->
						<input type="hidden" name="sendForm[1][pensionInsurance]" value="<!--{$value.pensionInsurance}-->">
						<input type="hidden" name="sendForm[1][pensionNumber]" value="<!--{$value.pensionNumber}-->">
						<input type="hidden" name="sendForm[1][unemploymentInsuranceNumber]" value="<!--{$value.unemploymentInsuranceNumber}-->">
						<input type="hidden" name="sendForm[1][scaffoldWorkersNumber]" value="<!--{$value.scaffoldWorkersNumber}-->">
					<!--{/if}-->
					<!--{if $view_flg6 == 1}-->
						<tr>
							<th class="w105">その他 1</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][other1]" value="<!--{$value.other1}-->">
							</td>
						</tr>
						<tr>
							<th class="w105">その他 2</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][other2]" value="<!--{$value.other2}-->">
							</td>
						</tr>
					<!--{else}-->
						<input type="hidden" name="sendForm[1][other1]" value="<!--{$value.other1}-->">
						<input type="hidden" name="sendForm[1][other2]" value="<!--{$value.other2}-->">
					<!--{/if}-->
				</table>
				<table class="tableA noTtl">
					<tr>
						<th class="w105">健康診断 <br>最新診断日</th>
						<td colspan="3" class="bdt">
							<ul class="dateSortingArea horizontal">
								<li>
									<select name="sendForm[1][latestCheckupYear]" class="w105">
										<option value="">年選択</option>
										<!--{foreach from=$checkupYearArr key=key item=value name=cnt}-->
											<option value="<!--{$value}-->"<!--{if $value.latestCheckupYear == $value}--> selected<!--{/if}-->><!--{$value}-->年</option>
										<!--{/foreach}-->
									</select>
									<select name="sendForm[1][latestCheckupMonth]" class="w72">
										<option value="">月選択</option>
										<option value="1"<!--{if $value.latestCheckupMonth == 1}--> selected<!--{/if}-->>1月</option>
										<option value="2"<!--{if $value.latestCheckupMonth == 2}--> selected<!--{/if}-->>2月</option>
										<option value="3"<!--{if $value.latestCheckupMonth == 3}--> selected<!--{/if}-->>3月</option>
										<option value="4"<!--{if $value.latestCheckupMonth == 4}--> selected<!--{/if}-->>4月</option>
										<option value="5"<!--{if $value.latestCheckupMonth == 5}--> selected<!--{/if}-->>5月</option>
										<option value="6"<!--{if $value.latestCheckupMonth == 6}--> selected<!--{/if}-->>6月</option>
										<option value="7"<!--{if $value.latestCheckupMonth == 7}--> selected<!--{/if}-->>7月</option>
										<option value="8"<!--{if $value.latestCheckupMonth == 8}--> selected<!--{/if}-->>8月</option>
										<option value="9"<!--{if $value.latestCheckupMonth == 9}--> selected<!--{/if}-->>9月</option>
										<option value="10"<!--{if $value.latestCheckupMonth == 10}--> selected<!--{/if}-->>10月</option>
										<option value="11"<!--{if $value.latestCheckupMonth == 11}--> selected<!--{/if}-->>11月</option>
										<option value="12"<!--{if $value.latestCheckupMonth == 12}--> selected<!--{/if}-->>12月</option>
									</select>
									<select name="sendForm[1][latestCheckupDay]" class="w72">
										<option value="">日選択</option>
										<option value="1"<!--{if $value.latestCheckupDay == 1}--> selected<!--{/if}-->>1日</option>
										<option value="2"<!--{if $value.latestCheckupDay == 2}--> selected<!--{/if}-->>2日</option>
										<option value="3"<!--{if $value.latestCheckupDay == 3}--> selected<!--{/if}-->>3日</option>
										<option value="4"<!--{if $value.latestCheckupDay == 4}--> selected<!--{/if}-->>4日</option>
										<option value="5"<!--{if $value.latestCheckupDay == 5}--> selected<!--{/if}-->>5日</option>
										<option value="6"<!--{if $value.latestCheckupDay == 6}--> selected<!--{/if}-->>6日</option>
										<option value="7"<!--{if $value.latestCheckupDay == 7}--> selected<!--{/if}-->>7日</option>
										<option value="8"<!--{if $value.latestCheckupDay == 8}--> selected<!--{/if}-->>8日</option>
										<option value="9"<!--{if $value.latestCheckupDay == 9}--> selected<!--{/if}-->>9日</option>
										<option value="10"<!--{if $value.latestCheckupDay == 10}--> selected<!--{/if}-->>10日</option>
										<option value="11"<!--{if $value.latestCheckupDay == 11}--> selected<!--{/if}-->>11日</option>
										<option value="12"<!--{if $value.latestCheckupDay == 12}--> selected<!--{/if}-->>12日</option>
										<option value="13"<!--{if $value.latestCheckupDay == 13}--> selected<!--{/if}-->>13日</option>
										<option value="14"<!--{if $value.latestCheckupDay == 14}--> selected<!--{/if}-->>14日</option>
										<option value="15"<!--{if $value.latestCheckupDay == 15}--> selected<!--{/if}-->>15日</option>
										<option value="16"<!--{if $value.latestCheckupDay == 16}--> selected<!--{/if}-->>16日</option>
										<option value="17"<!--{if $value.latestCheckupDay == 17}--> selected<!--{/if}-->>17日</option>
										<option value="18"<!--{if $value.latestCheckupDay == 18}--> selected<!--{/if}-->>18日</option>
										<option value="19"<!--{if $value.latestCheckupDay == 19}--> selected<!--{/if}-->>19日</option>
										<option value="20"<!--{if $value.latestCheckupDay == 20}--> selected<!--{/if}-->>20日</option>
										<option value="21"<!--{if $value.latestCheckupDay == 21}--> selected<!--{/if}-->>21日</option>
										<option value="22"<!--{if $value.latestCheckupDay == 22}--> selected<!--{/if}-->>22日</option>
										<option value="23"<!--{if $value.latestCheckupDay == 23}--> selected<!--{/if}-->>23日</option>
										<option value="24"<!--{if $value.latestCheckupDay == 24}--> selected<!--{/if}-->>24日</option>
										<option value="25"<!--{if $value.latestCheckupDay == 25}--> selected<!--{/if}-->>25日</option>
										<option value="26"<!--{if $value.latestCheckupDay == 26}--> selected<!--{/if}-->>26日</option>
										<option value="27"<!--{if $value.latestCheckupDay == 27}--> selected<!--{/if}-->>27日</option>
										<option value="28"<!--{if $value.latestCheckupDay == 28}--> selected<!--{/if}-->>28日</option>
										<option value="29"<!--{if $value.latestCheckupDay == 29}--> selected<!--{/if}-->>29日</option>
										<option value="30"<!--{if $value.latestCheckupDay == 30}--> selected<!--{/if}-->>30日</option>
										<option value="31"<!--{if $value.latestCheckupDay == 31}--> selected<!--{/if}-->>31日</option>
									</select>
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>血圧（上）</th>
						<td>
							<input type="text" name="sendForm[1][bloodPressureHigher]" class="w100p" value="<!--{$value.bloodPressureHigher}-->">
						</td>
						<th class="w80">血圧（下）</th>
						<td>
							<input type="text" name="sendForm[1][bloodPressureLower]" class="w100p" value="<!--{$value.bloodPressureLower}-->">
						</td>
					</tr>
					<tr>
						<th>その他</th>
						<td colspan="3">
							<input type="text" name="sendForm[1][other]" value="<!--{$value.other}-->">
						</td>
					</tr>
				</table>
				<div class="headingB">
					<h3>キャリア／スキル</h3>
				</div>
				<table class="tableB">
					<tr>
						<th>工事種 1</th>
						<th>工事種 2</th>
						<th>登録時経験年数</th>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType1_1]" class="w100p" value="<!--{$value.constructionType1_1}-->"></td>
						<td><input type="text" name="sendForm[1][constructionType1_2]" class="w100p" value="<!--{$value.constructionType1_2}-->"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience1]" class="mr5 w120" value="<!--{$value.yearsOfExperience1}-->">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType2_1]" class="w100p" value="<!--{$value.constructionType2_1}-->"></td>
						<td><input type="text" name="sendForm[1][constructionType2_2]" class="w100p" value="<!--{$value.constructionType2_2}-->"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience2]" class="mr5 w120" value="<!--{$value.yearsOfExperience2}-->">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType3_1]" class="w100p" value="<!--{$value.constructionType3_1}-->"></td>
						<td><input type="text" name="sendForm[1][constructionType3_2]" class="w100p" value="<!--{$value.constructionType3_2}-->"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience3]" class="mr5 w120" value="<!--{$value.yearsOfExperience3}-->">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType4_1]" class="w100p" value="<!--{$value.constructionType4_1}-->"></td>
						<td><input type="text" name="sendForm[1][constructionType4_2]" class="w100p" value="<!--{$value.constructionType4_2}-->"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience4]" class="mr5 w120" value="<!--{$value.yearsOfExperience4}-->">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType5_1]" class="w100p" value="<!--{$value.constructionType5_1}-->"></td>
						<td><input type="text" name="sendForm[1][constructionType5_2]" class="w100p" value="<!--{$value.constructionType5_2}-->"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience5]" class="mr5 w120" value="<!--{$value.yearsOfExperience5}-->">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType6_1]" class="w100p" value="<!--{$value.constructionType6_1}-->"></td>
						<td><input type="text" name="sendForm[1][constructionType6_2]" class="w100p" value="<!--{$value.constructionType6_2}-->"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience6]" class="mr5 w120" value="<!--{$value.yearsOfExperience6}-->">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType7_1]" class="w100p" value="<!--{$value.constructionType7_1}-->"></td>
						<td><input type="text" name="sendForm[1][constructionType7_2]" class="w100p" value="<!--{$value.constructionType7_2}-->"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience7]" class="mr5 w120" value="<!--{$value.yearsOfExperience7}-->">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType8_1]" class="w100p" value="<!--{$value.constructionType8_1}-->"></td>
						<td><input type="text" name="sendForm[1][constructionType8_2]" class="w100p" value="<!--{$value.constructionType8_2}-->"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience8]" class="mr5 w120" value="<!--{$value.yearsOfExperience8}-->">年</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
