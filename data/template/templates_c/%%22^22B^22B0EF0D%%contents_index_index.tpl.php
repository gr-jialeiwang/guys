<?php /* Smarty version 2.6.26, created on 2016-10-14 14:57:39
         compiled from client/contents_index_index.tpl */ ?>
<?php if ($this->_tpl_vars['view_flg1'] == 0): ?>
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<?php else: ?>
	<?php if (is_array ( $this->_tpl_vars['arrForm']['err_msg'] )): ?>
		<div class="errorBox">
			<?php $_from = $this->_tpl_vars['arrForm']['err_msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
				<p class="error"><?php echo $this->_tpl_vars['value']; ?>
</p>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	<?php else: ?>
		<?php if (is_array ( $this->_tpl_vars['arrForm']['err_msg2'] )): ?>
			<div class="errorBox">
				<?php $_from = $this->_tpl_vars['arrForm']['err_msg2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
					<p class="error"><?php echo $this->_tpl_vars['value']; ?>
</p>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		<?php endif; ?>
		<form name="form1" action="?<?php if ($this->_tpl_vars['editMode'] != 'index' && $this->_tpl_vars['editMode'] != 'newRegist'): ?>codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
<?php endif; ?>" method="POST">
			<input type="hidden" name="mode" id="mode" value="<?php echo $this->_tpl_vars['editMode']; ?>
">
			<input type="hidden" name="FN_codeNumberDel" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
			<input type="hidden" name="FN_officeCodeDel" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../client_search/index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>取引先 会社情報（新規登録／編集）</h2>
                            <?php if ($this->_tpl_vars['editMode'] == 'delRegistered'): ?><br /><br /><br /><?php endif; ?>
						</div>
                    <?php if ($this->_tpl_vars['editMode'] != 'delRegistered'): ?>
						<div class="boxRight<?php if ($this->_tpl_vars['editMode'] == 'index' || $this->_tpl_vars['editMode'] == 'newRegist'): ?> disp_none<?php endif; ?>" id="client_del_single">
							<p class="textAnchor resetClientData"><a href="#" onclick="client_del_single();">この取引先を削除する</a></p>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w87">企業名</th>
							<td>
								<select name="codeNumber" class="w363">
								<?php if ($this->_tpl_vars['editMode'] != 'index' && $this->_tpl_vars['editMode'] != 'newRegist'): ?>
                                    <?php $_from = $this->_tpl_vars['selectCompany']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['select']['codeNumber'] == $this->_tpl_vars['value']['codeNumber']): ?>
                                        <option value="<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
"><?php echo $this->_tpl_vars['value']['clientNameInSystem']; ?>
</option>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
								<?php else: ?>
                                    <option value="">選択</option>
                                    <?php $_from = $this->_tpl_vars['selectCompany']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
                                        <option value="<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
"<?php if ($this->_tpl_vars['select']['codeNumber'] == $this->_tpl_vars['value']['codeNumber']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['clientNameInSystem']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
								<?php endif; ?>
								</select>
							</td>
							<th class="w63">事業所名</th>
							<td colspan="3">
								<ul class="horizontal">
									<li class="mr7">
										<input class="w326" name="office" type="text" value="<?php echo $this->_tpl_vars['select']['office']; ?>
">
									</li>
									<li>
									<div class="radioBtn">
										<input type="hidden" name="noOffice" value="0">
										<input type="radio" name="noOffice" id="noOffice" value="1"<?php if ($this->_tpl_vars['select']['noOffice'] == 1): ?> checked<?php endif; ?>>
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
								<input type="text" class="w135" name="officeCode" placeholder="000A00-00" value="<?php echo $this->_tpl_vars['select']['officeCode']; ?>
" <?php if ($this->_tpl_vars['editMode'] != 'index' && $this->_tpl_vars['editMode'] != 'newRegist'): ?> Readonly<?php endif; ?>>
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
											<input type="checkbox" id="dealType01" name="takeConstructionOrder" value="1"<?php if ($this->_tpl_vars['select']['takeConstructionOrder'] == 1): ?> checked<?php endif; ?>>
											<label for="dealType01">工事受注</label>
										</div>
									</li>
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType02" name="sellingMaterials" value="1"<?php if ($this->_tpl_vars['select']['sellingMaterials'] == 1): ?> checked<?php endif; ?>>
											<label for="dealType02">材料販売</label>
										</div>
									</li>
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType03" name="orderMaterials" value="1"<?php if ($this->_tpl_vars['select']['orderMaterials'] == 1): ?> checked<?php endif; ?>>
											<label for="dealType03">材料発注</label>
										</div>
									</li>
									<li>
										<div class="checkBox">
											<input type="checkbox" id="dealType04" name="orderConstruction" value="1"<?php if ($this->_tpl_vars['select']['orderConstruction'] == 1): ?> checked<?php endif; ?>>
											<label for="dealType04">工事発注</label>
										</div>
									</li>
								</ul>
							</td>
							<th>検索用テキスト</th>
							<td><input type="text" name="searchBox" class="w216" value="<?php echo $this->_tpl_vars['select']['searchBox']; ?>
"></td>
						</tr>
					</table>
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload" type="submit">登録・更新する</button>
						</div>
					</div>
                    <?php endif; ?>
				</div>
			</section>
		</form>
		<?php if ($this->_tpl_vars['editMode'] != 'delRegistered'): ?>
		<?php if ($this->_tpl_vars['editMode'] != 'index' && $this->_tpl_vars['editMode'] != 'newRegist'): ?>
			<form name="form2" action="?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
" method="POST">
				<input type="hidden" name="mode" id="mode2" value="<?php echo $this->_tpl_vars['editModeBase']; ?>
">
				<input type="hidden" name="codeNumber" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
				<input type="hidden" name="officeCode" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
				<div class="container">
					<nav id="subNav">
						<ul>
							<li class="leftEnd currentLink"><a href="index.php">基本情報</a></li>
							<li><a href="hanbai-keiri.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">販売系経理情報</a></li>
							<li><a href="shiire-keiri.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">仕入系経理情報</a></li>
							<li><a href="hacchu/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">発注書設定</a></li>
							<li><a href="worker/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">作業員情報</a></li>
							<li class="rightEnd"><a href="tatekae/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">立替金情報</a></li>
							<li class="leftEnd"><a href="request/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">依頼／受注履歴</a></li>
							<li><a href="seikyusho/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">請求書一覧</a></li>
							<li><a href="urikake/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">売掛金情報</a></li>
							<li><a href="minyukin/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">未入金・不足工事一覧</a></li>
							<li><a href="shiire-rireki/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">仕入／発注履歴</a></li>
							<li class="rightEnd"><a href="kaikake/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">買掛金情報</a></li>
						</ul>
					</nav>
				</div>
				<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
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
												<option value="1"<?php if ($this->_tpl_vars['selectBase']['clientState'] == 1): ?> selected<?php endif; ?>>継続中</option>
												<option value="2"<?php if ($this->_tpl_vars['selectBase']['clientState'] == 2): ?> selected<?php endif; ?>>停止</option>
											</select>
										</td>
									</tr>
									<tr>
										<th class="w125">取引情報</th>
										<td>
											<select name="dealInfo" class="w100p">
												<option value="1"<?php if ($this->_tpl_vars['selectBase']['dealInfo'] == 1): ?> selected<?php endif; ?>>継続取引</option>
												<option value="2"<?php if ($this->_tpl_vars['selectBase']['dealInfo'] == 2): ?> selected<?php endif; ?>>単発取引</option>
												<option value="3"<?php if ($this->_tpl_vars['selectBase']['dealInfo'] == 3): ?> selected<?php endif; ?>>外注先</option>
											</select>
										</td>
									</tr>
									<tr>
										<th class="w125">ガイズ担当者</th>
										<td>
											<select name="representative" class="w100p">
												<option value="">選択</option>
												<?php $_from = $this->_tpl_vars['selectStaff']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
													<option value="<?php echo $this->_tpl_vars['value']['staffID']; ?>
"<?php if ($this->_tpl_vars['selectBase']['representative'] == $this->_tpl_vars['value']['staffID']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
												<?php endforeach; endif; unset($_from); ?>
											</select>
										</td>
									</tr>
									<tr>
										<th class="w125">契約書有無</th>
										<td>
											<select name="contract" class="w63">
												<option value="1"<?php if ($this->_tpl_vars['selectBase']['contract'] == 1): ?> selected<?php endif; ?>>あり</option>
												<option value="2"<?php if ($this->_tpl_vars['selectBase']['contract'] == 2): ?> selected<?php endif; ?>>なし</option>
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
											<input type="text" class="w53" id="postcodeFirstHalf" name="postcodeFirstHalf" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['postcodeFirstHalf']; ?>
">
											ー
											<input type="text" class="w53" id="postcodeLastHalf" name="postcodeLastHalf" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['postcodeLastHalf']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">所在地</th>
										<td>
											<input type="text" class="w100p" name="address" id="address" value="<?php echo $this->_tpl_vars['selectBase']['address']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">ビル・建物名等</th>
										<td>
											<input type="text" class="w100p" name="buildingName" value="<?php echo $this->_tpl_vars['selectBase']['buildingName']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">電話番号</th>
										<td>
											<input type="text" class="w53" name="phoneNumberAreaCode" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['phoneNumberAreaCode']; ?>
">
											ー
											<input type="text" class="w53" name="phoneNumberFirstHalf" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['phoneNumberFirstHalf']; ?>
">
											ー
											<input type="text" class="w53" name="phoneNumberLastHalf" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['phoneNumberLastHalf']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">ファックス番号</th>
										<td>
											<input type="text" class="w53" name="faxNumberAreaCode" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['faxNumberAreaCode']; ?>
">
											ー
											<input type="text" class="w53" name="faxNumberFirstHalf" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['faxNumberFirstHalf']; ?>
">
											ー
											<input type="text" class="w53" name="faxNumberLastHalf" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['faxNumberLastHalf']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">代表メールアドレス</th>
										<td>
											<input type="text" class="w100p" name="presidentEMail" value="<?php echo $this->_tpl_vars['selectBase']['presidentEMail']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">代表者名</th>
										<td>
											<input type="text" class="w100p" name="presidentName" value="<?php echo $this->_tpl_vars['selectBase']['presidentName']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">資本金</th>
										<td>
											<input type="text" class="w100p" name="shareCapital" value="<?php echo $this->_tpl_vars['selectBase']['shareCapital']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">取引工事</th>
										<td>
											<input type="text" class="w100p" name="construction" value="<?php echo $this->_tpl_vars['selectBase']['construction']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">備考</th>
										<td>
											<input type="text" class="w100p" name="addressRemarks" value="<?php echo $this->_tpl_vars['selectBase']['addressRemarks']; ?>
">
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
											<textarea name="remarks" rows="8" class="w100p"><?php echo $this->_tpl_vars['selectBase']['remarks']; ?>
</textarea>
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
											<input type="text" class="w100p" name="clientRepresentative1" value="<?php echo $this->_tpl_vars['selectBase']['clientRepresentative1']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">所属</th>
										<td>
											<input type="text" class="w100p" name="department1" value="<?php echo $this->_tpl_vars['selectBase']['department1']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">役職</th>
										<td>
											<input type="text" class="w100p" name="role1" value="<?php echo $this->_tpl_vars['selectBase']['role1']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">電話番号</th>
										<td>
											<input type="text" class="w53" name="repPhoneNumerAreaCode1" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerAreaCode1']; ?>
">
											ー
											<input type="text" class="w53" name="repPhoneNumerFirstHalf1" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerFirstHalf1']; ?>
">
											ー
											<input type="text" class="w53" name="repPhoneNumerLastHalf1" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerLastHalf1']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">E-Mail</th>
										<td>
											<input type="text" class="w100p" name="repEmail1" value="<?php echo $this->_tpl_vars['selectBase']['repEmail1']; ?>
">
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
											<input type="text" class="w100p" name="clientRepresentative2" value="<?php echo $this->_tpl_vars['selectBase']['clientRepresentative2']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">所属</th>
										<td>
											<input type="text" class="w100p" name="department2" value="<?php echo $this->_tpl_vars['selectBase']['department2']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">役職</th>
										<td>
											<input type="text" class="w100p" name="role2" value="<?php echo $this->_tpl_vars['selectBase']['role2']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">電話番号</th>
										<td>
											<input type="text" class="w53" name="repPhoneNumerAreaCode2" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerAreaCode2']; ?>
">
											ー
											<input type="text" class="w53" name="repPhoneNumerFirstHalf2" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerFirstHalf2']; ?>
">
											ー
											<input type="text" class="w53" name="repPhoneNumerLastHalf2" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerLastHalf2']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">E-Mail</th>
										<td>
											<input type="text" class="w100p" name="repEmail2" value="<?php echo $this->_tpl_vars['selectBase']['repEmail2']; ?>
">
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
											<input type="text" class="w100p" name="clientRepresentative3" value="<?php echo $this->_tpl_vars['selectBase']['clientRepresentative3']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">所属</th>
										<td>
											<input type="text" class="w100p" name="department3" value="<?php echo $this->_tpl_vars['selectBase']['department3']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">役職</th>
										<td>
											<input type="text" class="w100p" name="role3" value="<?php echo $this->_tpl_vars['selectBase']['role3']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">電話番号</th>
										<td>
											<input type="text" class="w53" name="repPhoneNumerAreaCode3" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerAreaCode3']; ?>
">
											ー
											<input type="text" class="w53" name="repPhoneNumerFirstHalf3" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerFirstHalf3']; ?>
">
											ー
											<input type="text" class="w53" name="repPhoneNumerLastHalf3" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerLastHalf3']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">E-Mail</th>
										<td>
											<input type="text" class="w100p" name="repEmail3" value="<?php echo $this->_tpl_vars['selectBase']['repEmail3']; ?>
">
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
											<input type="text" class="w100p" name="clientRepresentative4" value="<?php echo $this->_tpl_vars['selectBase']['clientRepresentative4']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">所属</th>
										<td>
											<input type="text" class="w100p" name="department4" value="<?php echo $this->_tpl_vars['selectBase']['department4']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">役職</th>
										<td>
											<input type="text" class="w100p" name="role4" value="<?php echo $this->_tpl_vars['selectBase']['role4']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">電話番号</th>
										<td>
											<input type="text" class="w53" name="repPhoneNumerAreaCode4" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerAreaCode4']; ?>
">
											ー
											<input type="text" class="w53" name="repPhoneNumerFirstHalf4" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerFirstHalf4']; ?>
">
											ー
											<input type="text" class="w53" name="repPhoneNumerLastHalf4" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerLastHalf4']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">E-Mail</th>
										<td>
											<input type="text" class="w100p" name="repEmail4" value="<?php echo $this->_tpl_vars['selectBase']['repEmail4']; ?>
">
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
											<input type="text" class="w100p" name="clientRepresentative5" value="<?php echo $this->_tpl_vars['selectBase']['clientRepresentative5']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">所属</th>
										<td>
											<input type="text" class="w100p" name="department5" value="<?php echo $this->_tpl_vars['selectBase']['department5']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">役職</th>
										<td>
											<input type="text" class="w100p" name="role5" value="<?php echo $this->_tpl_vars['selectBase']['role5']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">電話番号</th>
										<td>
											<input type="text" class="w53" name="repPhoneNumerAreaCode5" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerAreaCode5']; ?>
">
											ー
											<input type="text" class="w53" name="repPhoneNumerFirstHalf5" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerFirstHalf5']; ?>
">
											ー
											<input type="text" class="w53" name="repPhoneNumerLastHalf5" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['repPhoneNumerLastHalf5']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">E-Mail</th>
										<td>
											<input type="text" class="w100p" name="repEmail5" value="<?php echo $this->_tpl_vars['selectBase']['repEmail5']; ?>
">
										</td>
									</tr>
								</table>
							</div>
						</div>
						<?php if ($this->_tpl_vars['view_flg3'] == 1): ?>
							<div class="clearfix">
								<div class="boxRight">
									<button class="btnReload" type="submit">登録・更新する</button>
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</form>
		<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>