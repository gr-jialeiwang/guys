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
		<form name="form1" action="?<!--{if $editMode != "index" && $editMode != "newRegist"}-->codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}--><!--{/if}-->" method="POST">
			<input type="hidden" name="mode" id="mode" value="<!--{$editMode}-->">
			<input type="hidden" name="FN_codeNumberDel" value="<!--{$codeNumber}-->">
			<input type="hidden" name="FN_officeCodeDel" value="<!--{$officeCode}-->">
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../client_search/index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>取引先 会社情報（新規登録／編集）</h2>
                            <!--{if $editMode == "delRegistered"}--><br /><br /><br /><!--{/if}-->
						</div>
                    <!--{if $editMode != "delRegistered"}-->
						<div class="boxRight<!--{if $editMode == "index" || $editMode == "newRegist"}--> disp_none<!--{/if}-->" id="client_del_single">
							<p class="textAnchor resetClientData"><a href="#" onclick="client_del_single();">この取引先を削除する</a></p>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w87">企業名</th>
							<td>
								<select name="codeNumber" class="w363">
								<!--{if $editMode != "index" && $editMode != "newRegist"}-->
                                    <!--{foreach from=$selectCompany key=key item=value name=cnt}-->
                                        <!--{if $select.codeNumber == $value.codeNumber}-->
                                        <option value="<!--{$value.codeNumber}-->"><!--{$value.clientNameInSystem}--></option>
                                        <!--{/if}-->
                                    <!--{/foreach}-->
								<!--{else}-->
                                    <option value="">選択</option>
                                    <!--{foreach from=$selectCompany key=key item=value name=cnt}-->
                                        <option value="<!--{$value.codeNumber}-->"<!--{if $select.codeNumber == $value.codeNumber}--> selected<!--{/if}-->><!--{$value.clientNameInSystem}--></option>
                                    <!--{/foreach}-->
								<!--{/if}-->
								</select>
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
								<input type="text" class="w135" name="officeCode" placeholder="000A00-00" value="<!--{$select.officeCode}-->" <!--{if $editMode != "index" && $editMode != "newRegist"}--> Readonly<!--{/if}-->>
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
                    <!--{/if}-->
				</div>
			</section>
		</form>
		<!--{if $editMode != "delRegistered"}-->
		<!--{if $editMode != "index" && $editMode != "newRegist"}-->
			<form name="form2" action="?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->" method="POST">
				<input type="hidden" name="mode" id="mode2" value="<!--{$editModeBase}-->">
				<input type="hidden" name="codeNumber" value="<!--{$codeNumber}-->">
				<input type="hidden" name="officeCode" value="<!--{$officeCode}-->">
				<div class="container">
					<nav id="subNav">
						<ul>
							<li class="leftEnd currentLink"><a href="index.php">基本情報</a></li>
							<li><a href="hanbai-keiri.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">販売系経理情報</a></li>
							<li><a href="shiire-keiri.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">仕入系経理情報</a></li>
							<li><a href="hacchu/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">発注書設定</a></li>
							<li><a href="worker/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">作業員情報</a></li>
							<li class="rightEnd"><a href="tatekae/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">立替金情報</a></li>
							<li class="leftEnd"><a href="request/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">依頼／受注履歴</a></li>
							<li><a href="seikyusho/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">請求書一覧</a></li>
							<li><a href="urikake/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">売掛金情報</a></li>
							<li><a href="minyukin/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">未入金・不足工事一覧</a></li>
							<li><a href="shiire-rireki/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">仕入／発注履歴</a></li>
							<li class="rightEnd"><a href="kaikake/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">買掛金情報</a></li>
						</ul>
					</nav>
				</div>
				<!--{if $view_flg2 == 1}-->
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
												<option value="1"<!--{if $selectBase.clientState == 1}--> selected<!--{/if}-->>継続中</option>
												<option value="2"<!--{if $selectBase.clientState == 2}--> selected<!--{/if}-->>停止</option>
											</select>
										</td>
									</tr>
									<tr>
										<th class="w125">取引情報</th>
										<td>
											<select name="dealInfo" class="w100p">
												<option value="1"<!--{if $selectBase.dealInfo == 1}--> selected<!--{/if}-->>継続取引</option>
												<option value="2"<!--{if $selectBase.dealInfo == 2}--> selected<!--{/if}-->>単発取引</option>
												<option value="3"<!--{if $selectBase.dealInfo == 3}--> selected<!--{/if}-->>外注先</option>
											</select>
										</td>
									</tr>
									<tr>
										<th class="w125">ガイズ担当者</th>
										<td>
											<select name="representative" class="w100p">
												<option value="">選択</option>
												<!--{foreach from=$selectStaff key=key item=value name=cnt}-->
													<option value="<!--{$value.staffID}-->"<!--{if $selectBase.representative == $value.staffID}--> selected<!--{/if}-->><!--{$value.name}--></option>
												<!--{/foreach}-->
											</select>
										</td>
									</tr>
									<tr>
										<th class="w125">契約書有無</th>
										<td>
											<select name="contract" class="w63">
												<option value="1"<!--{if $selectBase.contract == 1}--> selected<!--{/if}-->>あり</option>
												<option value="2"<!--{if $selectBase.contract == 2}--> selected<!--{/if}-->>なし</option>
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
											<input type="text" class="w53" id="postcodeFirstHalf" name="postcodeFirstHalf" placeholder="000" value="<!--{$selectBase.postcodeFirstHalf}-->">
											ー
											<input type="text" class="w53" id="postcodeLastHalf" name="postcodeLastHalf" placeholder="000" value="<!--{$selectBase.postcodeLastHalf}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">所在地</th>
										<td>
											<input type="text" class="w100p" name="address" id="address" value="<!--{$selectBase.address}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">ビル・建物名等</th>
										<td>
											<input type="text" class="w100p" name="buildingName" value="<!--{$selectBase.buildingName}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">電話番号</th>
										<td>
											<input type="text" class="w53" name="phoneNumberAreaCode" placeholder="000" value="<!--{$selectBase.phoneNumberAreaCode}-->">
											ー
											<input type="text" class="w53" name="phoneNumberFirstHalf" placeholder="0000" value="<!--{$selectBase.phoneNumberFirstHalf}-->">
											ー
											<input type="text" class="w53" name="phoneNumberLastHalf" placeholder="0000" value="<!--{$selectBase.phoneNumberLastHalf}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">ファックス番号</th>
										<td>
											<input type="text" class="w53" name="faxNumberAreaCode" placeholder="000" value="<!--{$selectBase.faxNumberAreaCode}-->">
											ー
											<input type="text" class="w53" name="faxNumberFirstHalf" placeholder="0000" value="<!--{$selectBase.faxNumberFirstHalf}-->">
											ー
											<input type="text" class="w53" name="faxNumberLastHalf" placeholder="0000" value="<!--{$selectBase.faxNumberLastHalf}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">代表メールアドレス</th>
										<td>
											<input type="text" class="w100p" name="presidentEMail" value="<!--{$selectBase.presidentEMail}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">代表者名</th>
										<td>
											<input type="text" class="w100p" name="presidentName" value="<!--{$selectBase.presidentName}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">資本金</th>
										<td>
											<input type="text" class="w100p" name="shareCapital" value="<!--{$selectBase.shareCapital}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">取引工事</th>
										<td>
											<input type="text" class="w100p" name="construction" value="<!--{$selectBase.construction}-->">
										</td>
									</tr>
									<tr>
										<th class="w125">備考</th>
										<td>
											<input type="text" class="w100p" name="addressRemarks" value="<!--{$selectBase.addressRemarks}-->">
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
											<textarea name="remarks" rows="8" class="w100p"><!--{$selectBase.remarks}--></textarea>
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
											<input type="text" class="w100p" name="clientRepresentative1" value="<!--{$selectBase.clientRepresentative1}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">所属</th>
										<td>
											<input type="text" class="w100p" name="department1" value="<!--{$selectBase.department1}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">役職</th>
										<td>
											<input type="text" class="w100p" name="role1" value="<!--{$selectBase.role1}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">電話番号</th>
										<td>
											<input type="text" class="w53" name="repPhoneNumerAreaCode1" placeholder="000" value="<!--{$selectBase.repPhoneNumerAreaCode1}-->">
											ー
											<input type="text" class="w53" name="repPhoneNumerFirstHalf1" placeholder="0000" value="<!--{$selectBase.repPhoneNumerFirstHalf1}-->">
											ー
											<input type="text" class="w53" name="repPhoneNumerLastHalf1" placeholder="0000" value="<!--{$selectBase.repPhoneNumerLastHalf1}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">E-Mail</th>
										<td>
											<input type="text" class="w100p" name="repEmail1" value="<!--{$selectBase.repEmail1}-->">
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
											<input type="text" class="w100p" name="clientRepresentative2" value="<!--{$selectBase.clientRepresentative2}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">所属</th>
										<td>
											<input type="text" class="w100p" name="department2" value="<!--{$selectBase.department2}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">役職</th>
										<td>
											<input type="text" class="w100p" name="role2" value="<!--{$selectBase.role2}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">電話番号</th>
										<td>
											<input type="text" class="w53" name="repPhoneNumerAreaCode2" placeholder="000" value="<!--{$selectBase.repPhoneNumerAreaCode2}-->">
											ー
											<input type="text" class="w53" name="repPhoneNumerFirstHalf2" placeholder="0000" value="<!--{$selectBase.repPhoneNumerFirstHalf2}-->">
											ー
											<input type="text" class="w53" name="repPhoneNumerLastHalf2" placeholder="0000" value="<!--{$selectBase.repPhoneNumerLastHalf2}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">E-Mail</th>
										<td>
											<input type="text" class="w100p" name="repEmail2" value="<!--{$selectBase.repEmail2}-->">
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
											<input type="text" class="w100p" name="clientRepresentative3" value="<!--{$selectBase.clientRepresentative3}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">所属</th>
										<td>
											<input type="text" class="w100p" name="department3" value="<!--{$selectBase.department3}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">役職</th>
										<td>
											<input type="text" class="w100p" name="role3" value="<!--{$selectBase.role3}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">電話番号</th>
										<td>
											<input type="text" class="w53" name="repPhoneNumerAreaCode3" placeholder="000" value="<!--{$selectBase.repPhoneNumerAreaCode3}-->">
											ー
											<input type="text" class="w53" name="repPhoneNumerFirstHalf3" placeholder="0000" value="<!--{$selectBase.repPhoneNumerFirstHalf3}-->">
											ー
											<input type="text" class="w53" name="repPhoneNumerLastHalf3" placeholder="0000" value="<!--{$selectBase.repPhoneNumerLastHalf3}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">E-Mail</th>
										<td>
											<input type="text" class="w100p" name="repEmail3" value="<!--{$selectBase.repEmail3}-->">
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
											<input type="text" class="w100p" name="clientRepresentative4" value="<!--{$selectBase.clientRepresentative4}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">所属</th>
										<td>
											<input type="text" class="w100p" name="department4" value="<!--{$selectBase.department4}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">役職</th>
										<td>
											<input type="text" class="w100p" name="role4" value="<!--{$selectBase.role4}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">電話番号</th>
										<td>
											<input type="text" class="w53" name="repPhoneNumerAreaCode4" placeholder="000" value="<!--{$selectBase.repPhoneNumerAreaCode4}-->">
											ー
											<input type="text" class="w53" name="repPhoneNumerFirstHalf4" placeholder="0000" value="<!--{$selectBase.repPhoneNumerFirstHalf4}-->">
											ー
											<input type="text" class="w53" name="repPhoneNumerLastHalf4" placeholder="0000" value="<!--{$selectBase.repPhoneNumerLastHalf4}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">E-Mail</th>
										<td>
											<input type="text" class="w100p" name="repEmail4" value="<!--{$selectBase.repEmail4}-->">
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
											<input type="text" class="w100p" name="clientRepresentative5" value="<!--{$selectBase.clientRepresentative5}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">所属</th>
										<td>
											<input type="text" class="w100p" name="department5" value="<!--{$selectBase.department5}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">役職</th>
										<td>
											<input type="text" class="w100p" name="role5" value="<!--{$selectBase.role5}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">電話番号</th>
										<td>
											<input type="text" class="w53" name="repPhoneNumerAreaCode5" placeholder="000" value="<!--{$selectBase.repPhoneNumerAreaCode5}-->">
											ー
											<input type="text" class="w53" name="repPhoneNumerFirstHalf5" placeholder="0000" value="<!--{$selectBase.repPhoneNumerFirstHalf5}-->">
											ー
											<input type="text" class="w53" name="repPhoneNumerLastHalf5" placeholder="0000" value="<!--{$selectBase.repPhoneNumerLastHalf5}-->">
										</td>
									</tr>
									<tr>
										<th class="w105">E-Mail</th>
										<td>
											<input type="text" class="w100p" name="repEmail5" value="<!--{$selectBase.repEmail5}-->">
										</td>
									</tr>
								</table>
							</div>
						</div>
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
	<!--{/if}-->
<!--{/if}-->
