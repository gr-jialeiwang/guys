<?php /* Smarty version 2.6.26, created on 2016-10-14 12:54:35
         compiled from client/worker/contents_index_index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'client/worker/contents_index_index.tpl', 159, false),)), $this); ?>
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
					<?php if (is_array ( $this->_tpl_vars['value'] )): ?>
						<?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['value2']):
        $this->_foreach['cnt2']['iteration']++;
?>
							<p class="error"><?php echo $this->_tpl_vars['value2']; ?>
</p>
						<?php endforeach; endif; unset($_from); ?>
					<?php else: ?>
						<p class="error"><?php echo $this->_tpl_vars['value']; ?>
</p>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		<?php endif; ?>
		<form name="form1" action="?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
" method="POST">
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
									<?php $_from = $this->_tpl_vars['selectCompany']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
										<option value="<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
"<?php if ($this->_tpl_vars['select']['codeNumber'] == $this->_tpl_vars['value']['codeNumber']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['clientNameInSystem']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
								<input type="hidden" name="codeNumber" value="<?php echo $this->_tpl_vars['select']['codeNumber']; ?>
">
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
">
								<input type="hidden" name="officeCode" value="<?php echo $this->_tpl_vars['select']['officeCode']; ?>
">
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
				</div>
			</section>
		</form>

		<div class="container">
			<nav id="subNav">
				<ul>
					<li class="leftEnd"><a href="../index.php?mode=detail&codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">基本情報</a></li>
					<li><a href="../hanbai-keiri.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">販売系経理情報</a></li>
					<li><a href="../shiire-keiri.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">仕入系経理情報</a></li>
					<li><a href="../hacchu/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">発注書設定</a></li>
					<li class="currentLink"><a href="../worker/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">作業員情報</a></li>
					<li class="rightEnd"><a href="../tatekae/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">立替金情報</a></li>
					<li class="leftEnd"><a href="../request/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">依頼／受注履歴</a></li>
					<li><a href="../seikyusho/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">請求書一覧</a></li>
					<li><a href="../urikake/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">売掛金情報</a></li>
					<li><a href="../minyukin/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">未入金・不足工事一覧</a></li>
					<li><a href="../shiire-rireki/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">仕入／発注履歴</a></li>
					<li class="rightEnd"><a href="../kaikake/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">買掛金情報</a></li>
				</ul>
			</nav>
		</div>
		<?php if ($this->_tpl_vars['select']['orderConstruction'] == 1): ?>
			<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
				<form name="form2" action="?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
" method="POST">
					<input type="hidden" name="mode" id="mode2" value="<?php echo $this->_tpl_vars['editModeBase1']; ?>
">
					<input type="hidden" name="codeNumber" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
					<input type="hidden" name="officeCode" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
					<input type="hidden" name="sendForm[1][codeNumber]" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
					<input type="hidden" name="sendForm[1][officeCode]" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
					<input type="hidden" name="sendForm[1][workerFlg]" value="1">
					<input type="hidden" name="sendForm[1][workerNo]" value="1">
					<div class="container">
						<div class="txtRight mb10">
							<button class="buttonA">CSV出力</button>
						</div>
						<div class="clearfix">
							<div class="boxRight">
								<?php if (count($this->_tpl_vars['selectBase2']) == 0): ?>
									<a href="#" class="btnIncrease workerPlusBtn" onclick="worker_view(1);">+</a>
								<?php endif; ?>
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
											<input type="text" name="sendForm[1][registrationNumber]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['registrationNumber']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">氏名（漢字）</th>
										<td>
											<input type="text" name="sendForm[1][name_Kanji]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['name_Kanji']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">氏名（カナ）</th>
										<td>
											<input type="text" name="sendForm[1][name_Kana]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['name_Kana']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">住所／郵便番号</th>
										<td>
											<input type="text" class="w53" id="postcodeFirstHalf" name="sendForm[1][postcodeFirstHalf]" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase1']['postcodeFirstHalf']; ?>
">
											ー
											<input type="text" class="w53" id="postcodeLastHalf" name="sendForm[1][postcodeLastHalf]" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase1']['postcodeLastHalf']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">住所</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][address]" value="<?php echo $this->_tpl_vars['selectBase1']['address']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">建物名 等</th>
										<td>
											<input type="text" name="sendForm[1][buildingName]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['buildingName']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">電話番号</th>
										<td>
											<input type="text" class="w53" name="sendForm[1][phoneNumberAreaCode]" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase1']['phoneNumberAreaCode']; ?>
">
											ー
											<input type="text" class="w53" name="sendForm[1][phoneNumberFirstHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase1']['phoneNumberFirstHalf']; ?>
">
											ー
											<input type="text" class="w53" name="sendForm[1][phoneNumberLastHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase1']['phoneNumberLastHalf']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">ファックス番号</th>
										<td>
											<input type="text" class="w53" name="sendForm[1][faxNumberAreaCode]" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase1']['faxNumberAreaCode']; ?>
">
											ー
											<input type="text" class="w53" name="sendForm[1][faxNumberFirstHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase1']['faxNumberFirstHalf']; ?>
">
											ー
											<input type="text" class="w53" name="sendForm[1][faxNumberLastHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase1']['faxNumberLastHalf']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">メールアドレス</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][eMail]" value="<?php echo $this->_tpl_vars['selectBase1']['eMail']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">生年月日</th>
										<td>
											<ul class="dateSortingArea horizontal">
												<li>
													<select name="sendForm[1][dateOfBirthYear]" class="w105">
														<option value="">年選択</option>
														<?php $_from = $this->_tpl_vars['birthYearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
															<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthYear'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
年</option>
														<?php endforeach; endif; unset($_from); ?>
													</select>
													<select name="sendForm[1][dateOfBirthMonth]" class="w72">
														<option value="">月選択</option>
														<option value="1"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 1): ?> selected<?php endif; ?>>1月</option>
														<option value="2"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 2): ?> selected<?php endif; ?>>2月</option>
														<option value="3"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 3): ?> selected<?php endif; ?>>3月</option>
														<option value="4"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 4): ?> selected<?php endif; ?>>4月</option>
														<option value="5"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 5): ?> selected<?php endif; ?>>5月</option>
														<option value="6"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 6): ?> selected<?php endif; ?>>6月</option>
														<option value="7"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 7): ?> selected<?php endif; ?>>7月</option>
														<option value="8"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 8): ?> selected<?php endif; ?>>8月</option>
														<option value="9"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 9): ?> selected<?php endif; ?>>9月</option>
														<option value="10"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 10): ?> selected<?php endif; ?>>10月</option>
														<option value="11"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 11): ?> selected<?php endif; ?>>11月</option>
														<option value="12"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthMonth'] == 12): ?> selected<?php endif; ?>>12月</option>
													</select>
													<select name="sendForm[1][dateOfBirthDay]" class="w72">
														<option value="">日選択</option>
														<option value="1"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 1): ?> selected<?php endif; ?>>1日</option>
														<option value="2"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 2): ?> selected<?php endif; ?>>2日</option>
														<option value="3"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 3): ?> selected<?php endif; ?>>3日</option>
														<option value="4"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 4): ?> selected<?php endif; ?>>4日</option>
														<option value="5"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 5): ?> selected<?php endif; ?>>5日</option>
														<option value="6"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 6): ?> selected<?php endif; ?>>6日</option>
														<option value="7"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 7): ?> selected<?php endif; ?>>7日</option>
														<option value="8"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 8): ?> selected<?php endif; ?>>8日</option>
														<option value="9"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 9): ?> selected<?php endif; ?>>9日</option>
														<option value="10"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 10): ?> selected<?php endif; ?>>10日</option>
														<option value="11"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 11): ?> selected<?php endif; ?>>11日</option>
														<option value="12"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 12): ?> selected<?php endif; ?>>12日</option>
														<option value="13"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 13): ?> selected<?php endif; ?>>13日</option>
														<option value="14"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 14): ?> selected<?php endif; ?>>14日</option>
														<option value="15"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 15): ?> selected<?php endif; ?>>15日</option>
														<option value="16"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 16): ?> selected<?php endif; ?>>16日</option>
														<option value="17"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 17): ?> selected<?php endif; ?>>17日</option>
														<option value="18"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 18): ?> selected<?php endif; ?>>18日</option>
														<option value="19"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 19): ?> selected<?php endif; ?>>19日</option>
														<option value="20"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 20): ?> selected<?php endif; ?>>20日</option>
														<option value="21"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 21): ?> selected<?php endif; ?>>21日</option>
														<option value="22"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 22): ?> selected<?php endif; ?>>22日</option>
														<option value="23"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 23): ?> selected<?php endif; ?>>23日</option>
														<option value="24"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 24): ?> selected<?php endif; ?>>24日</option>
														<option value="25"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 25): ?> selected<?php endif; ?>>25日</option>
														<option value="26"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 26): ?> selected<?php endif; ?>>26日</option>
														<option value="27"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 27): ?> selected<?php endif; ?>>27日</option>
														<option value="28"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 28): ?> selected<?php endif; ?>>28日</option>
														<option value="29"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 29): ?> selected<?php endif; ?>>29日</option>
														<option value="30"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 30): ?> selected<?php endif; ?>>30日</option>
														<option value="31"<?php if ($this->_tpl_vars['selectBase1']['dateOfBirthDay'] == 31): ?> selected<?php endif; ?>>31日</option>
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
												<?php $_from = $this->_tpl_vars['ageArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
													<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['selectBase1']['age'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
</option>
												<?php endforeach; endif; unset($_from); ?>
											</select>
										</td>
									</tr>
									<tr>
										<th class="w125">血液型</th>
										<td>
											<select name="sendForm[1][bloodType]" class="w63">
												<option value="">選択</option>
												<option value="A"<?php if ($this->_tpl_vars['selectBase1']['bloodType'] == 'A'): ?> selected<?php endif; ?>>A</option>
												<option value="B"<?php if ($this->_tpl_vars['selectBase1']['bloodType'] == 'B'): ?> selected<?php endif; ?>>B</option>
												<option value="O"<?php if ($this->_tpl_vars['selectBase1']['bloodType'] == 'O'): ?> selected<?php endif; ?>>O</option>
												<option value="AB"<?php if ($this->_tpl_vars['selectBase1']['bloodType'] == 'AB'): ?> selected<?php endif; ?>>AB</option>
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
											<input type="text" name="sendForm[1][emergencyName_Kanji]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['emergencyName_Kanji']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">氏名（カナ）</th>
										<td>
											<input type="text" name="sendForm[1][emergencyName_Kana]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['emergencyName_Kana']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w125">続柄</th>
										<td>
											<select name="sendForm[1][relationship]" class="w63">
												<option value="">選択</option>
												<option value="1"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 1): ?> selected<?php endif; ?>>妻</option>
												<option value="2"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 2): ?> selected<?php endif; ?>>夫</option>
												<option value="3"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 3): ?> selected<?php endif; ?>>子</option>
												<option value="4"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 4): ?> selected<?php endif; ?>>孫</option>
												<option value="5"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 5): ?> selected<?php endif; ?>>実兄</option>
												<option value="6"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 6): ?> selected<?php endif; ?>>実弟</option>
												<option value="7"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 7): ?> selected<?php endif; ?>>実姉</option>
												<option value="8"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 8): ?> selected<?php endif; ?>>実妹</option>
												<option value="9"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 9): ?> selected<?php endif; ?>>祖父</option>
												<option value="10"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 10): ?> selected<?php endif; ?>>祖母</option>
												<option value="11"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 11): ?> selected<?php endif; ?>>曽祖父</option>
												<option value="12"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 12): ?> selected<?php endif; ?>>曾祖母</option>
												<option value="13"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 13): ?> selected<?php endif; ?>>従兄弟</option>
												<option value="14"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 14): ?> selected<?php endif; ?>>叔父</option>
												<option value="15"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 15): ?> selected<?php endif; ?>>叔母</option>
												<option value="16"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 16): ?> selected<?php endif; ?>>義父</option>
												<option value="17"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 17): ?> selected<?php endif; ?>>義母</option>
												<option value="18"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 18): ?> selected<?php endif; ?>>義兄</option>
												<option value="19"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 19): ?> selected<?php endif; ?>>義弟</option>
												<option value="20"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 20): ?> selected<?php endif; ?>>義姉</option>
												<option value="21"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 21): ?> selected<?php endif; ?>>義妹</option>
												<option value="22"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 22): ?> selected<?php endif; ?>>義祖父</option>
												<option value="23"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 23): ?> selected<?php endif; ?>>義祖母</option>
												<option value="24"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 24): ?> selected<?php endif; ?>>義叔父</option>
												<option value="25"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 25): ?> selected<?php endif; ?>>義叔母</option>
												<option value="26"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 26): ?> selected<?php endif; ?>>義従兄弟</option>
												<option value="27"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 27): ?> selected<?php endif; ?>>知人／友人</option>
												<option value="28"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 28): ?> selected<?php endif; ?>>同居人</option>
												<option value="29"<?php if ($this->_tpl_vars['selectBase1']['relationship'] == 29): ?> selected<?php endif; ?>>その他</option>
											</select>
										</td>
									</tr>
									<tr>
										<th class="w125">電話番号</th>
										<td>
											<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberAreaCode]" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase1']['emergencyPhoneNumberAreaCode']; ?>
">
											ー
											<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberFirstHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase1']['emergencyPhoneNumberFirstHalf']; ?>
">
											ー
											<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberLastHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase1']['emergencyPhoneNumberLastHalf']; ?>
">
										</td>
									</tr>
								</table>
								<table class="tableA noTtl">
									<tr>
										<th class="w125">備考</th>
										<td class="bdt">
											<textarea name="sendForm[1][remarks]" rows="8" class="w100p"><?php echo $this->_tpl_vars['selectBase1']['remarks']; ?>
</textarea>
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
														<?php $_from = $this->_tpl_vars['checkupYearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
															<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['selectBase1']['registrationYear'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
年</option>
														<?php endforeach; endif; unset($_from); ?>
													</select>
													<select name="sendForm[1][registrationMonth]" class="w72">
														<option value="">月選択</option>
														<option value="1"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 1): ?> selected<?php endif; ?>>1月</option>
														<option value="2"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 2): ?> selected<?php endif; ?>>2月</option>
														<option value="3"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 3): ?> selected<?php endif; ?>>3月</option>
														<option value="4"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 4): ?> selected<?php endif; ?>>4月</option>
														<option value="5"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 5): ?> selected<?php endif; ?>>5月</option>
														<option value="6"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 6): ?> selected<?php endif; ?>>6月</option>
														<option value="7"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 7): ?> selected<?php endif; ?>>7月</option>
														<option value="8"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 8): ?> selected<?php endif; ?>>8月</option>
														<option value="9"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 9): ?> selected<?php endif; ?>>9月</option>
														<option value="10"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 10): ?> selected<?php endif; ?>>10月</option>
														<option value="11"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 11): ?> selected<?php endif; ?>>11月</option>
														<option value="12"<?php if ($this->_tpl_vars['selectBase1']['registrationMonth'] == 12): ?> selected<?php endif; ?>>12月</option>
													</select>
													<select name="sendForm[1][registrationDay]" class="w72">
														<option value="">日選択</option>
														<option value="1"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 1): ?> selected<?php endif; ?>>1日</option>
														<option value="2"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 2): ?> selected<?php endif; ?>>2日</option>
														<option value="3"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 3): ?> selected<?php endif; ?>>3日</option>
														<option value="4"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 4): ?> selected<?php endif; ?>>4日</option>
														<option value="5"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 5): ?> selected<?php endif; ?>>5日</option>
														<option value="6"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 6): ?> selected<?php endif; ?>>6日</option>
														<option value="7"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 7): ?> selected<?php endif; ?>>7日</option>
														<option value="8"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 8): ?> selected<?php endif; ?>>8日</option>
														<option value="9"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 9): ?> selected<?php endif; ?>>9日</option>
														<option value="10"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 10): ?> selected<?php endif; ?>>10日</option>
														<option value="11"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 11): ?> selected<?php endif; ?>>11日</option>
														<option value="12"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 12): ?> selected<?php endif; ?>>12日</option>
														<option value="13"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 13): ?> selected<?php endif; ?>>13日</option>
														<option value="14"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 14): ?> selected<?php endif; ?>>14日</option>
														<option value="15"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 15): ?> selected<?php endif; ?>>15日</option>
														<option value="16"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 16): ?> selected<?php endif; ?>>16日</option>
														<option value="17"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 17): ?> selected<?php endif; ?>>17日</option>
														<option value="18"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 18): ?> selected<?php endif; ?>>18日</option>
														<option value="19"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 19): ?> selected<?php endif; ?>>19日</option>
														<option value="20"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 20): ?> selected<?php endif; ?>>20日</option>
														<option value="21"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 21): ?> selected<?php endif; ?>>21日</option>
														<option value="22"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 22): ?> selected<?php endif; ?>>22日</option>
														<option value="23"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 23): ?> selected<?php endif; ?>>23日</option>
														<option value="24"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 24): ?> selected<?php endif; ?>>24日</option>
														<option value="25"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 25): ?> selected<?php endif; ?>>25日</option>
														<option value="26"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 26): ?> selected<?php endif; ?>>26日</option>
														<option value="27"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 27): ?> selected<?php endif; ?>>27日</option>
														<option value="28"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 28): ?> selected<?php endif; ?>>28日</option>
														<option value="29"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 29): ?> selected<?php endif; ?>>29日</option>
														<option value="30"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 30): ?> selected<?php endif; ?>>30日</option>
														<option value="31"<?php if ($this->_tpl_vars['selectBase1']['registrationDay'] == 31): ?> selected<?php endif; ?>>31日</option>
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
												<?php $_from = $this->_tpl_vars['selectStaff']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
													<option value="<?php echo $this->_tpl_vars['value']['staffID']; ?>
"<?php if ($this->_tpl_vars['selectBase1']['representative'] == $this->_tpl_vars['value']['staffID']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
												<?php endforeach; endif; unset($_from); ?>
											</select>
										</td>
									</tr>
									<tr>
										<th class="w105">労災組合名</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][workersUnion]" value="<?php echo $this->_tpl_vars['selectBase1']['workersUnion']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">労災番号</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][compensationInsuranceNumber]" value="<?php echo $this->_tpl_vars['selectBase1']['compensationInsuranceNumber']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">健康保険名</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][nationalHealthInsurance]" value="<?php echo $this->_tpl_vars['selectBase1']['nationalHealthInsurance']; ?>
">
										</td>
									</tr>
									<tr>
										<th class="w105">健康保険番号</th>
										<td>
											<input type="text" class="w100p" name="sendForm[1][nationalHealthInsuranceNumber]" value="<?php echo $this->_tpl_vars['selectBase1']['nationalHealthInsuranceNumber']; ?>
">
										</td>
									</tr>
									<?php if ($this->_tpl_vars['view_flg4'] == 1): ?>
										<tr>
											<th class="w105">年金保険種類</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][pensionInsurance]" value="<?php echo $this->_tpl_vars['selectBase1']['pensionInsurance']; ?>
">
											</td>
										</tr>
										<tr>
											<th class="w105">年金番号</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][pensionNumber]" value="<?php echo $this->_tpl_vars['selectBase1']['pensionNumber']; ?>
">
											</td>
										</tr>
										<tr>
											<th class="w105">雇用保険番号</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][unemploymentInsuranceNumber]" value="<?php echo $this->_tpl_vars['selectBase1']['unemploymentInsuranceNumber']; ?>
">
											</td>
										</tr>
										<tr>
											<th class="w105">足場作業者番号</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][scaffoldWorkersNumber]" value="<?php echo $this->_tpl_vars['selectBase1']['scaffoldWorkersNumber']; ?>
">
											</td>
										</tr>
									<?php else: ?>
										<input type="hidden" name="sendForm[1][pensionInsurance]" value="<?php echo $this->_tpl_vars['selectBase1']['pensionInsurance']; ?>
">
										<input type="hidden" name="sendForm[1][pensionNumber]" value="<?php echo $this->_tpl_vars['selectBase1']['pensionNumber']; ?>
">
										<input type="hidden" name="sendForm[1][unemploymentInsuranceNumber]" value="<?php echo $this->_tpl_vars['selectBase1']['unemploymentInsuranceNumber']; ?>
">
										<input type="hidden" name="sendForm[1][scaffoldWorkersNumber]" value="<?php echo $this->_tpl_vars['selectBase1']['scaffoldWorkersNumber']; ?>
">
									<?php endif; ?>
									<?php if ($this->_tpl_vars['view_flg6'] == 1): ?>
										<tr>
											<th class="w105">その他 1</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][other1]" value="<?php echo $this->_tpl_vars['selectBase1']['other1']; ?>
">
											</td>
										</tr>
										<tr>
											<th class="w105">その他 2</th>
											<td>
												<input type="text" class="w100p" name="sendForm[1][other2]" value="<?php echo $this->_tpl_vars['selectBase1']['other2']; ?>
">
											</td>
										</tr>
									<?php else: ?>
										<input type="hidden" name="sendForm[1][other1]" value="<?php echo $this->_tpl_vars['selectBase1']['other1']; ?>
">
										<input type="hidden" name="sendForm[1][other2]" value="<?php echo $this->_tpl_vars['selectBase1']['other2']; ?>
">
									<?php endif; ?>
								</table>
								<table class="tableA noTtl">
									<tr>
										<th class="w105">健康診断 <br>最新診断日</th>
										<td colspan="3" class="bdt">
											<ul class="dateSortingArea horizontal">
												<li>
													<select name="sendForm[1][latestCheckupYear]" class="w105">
														<option value="">年選択</option>
														<?php $_from = $this->_tpl_vars['checkupYearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
															<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupYear'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
年</option>
														<?php endforeach; endif; unset($_from); ?>
													</select>
													<select name="sendForm[1][latestCheckupMonth]" class="w72">
														<option value="">月選択</option>
														<option value="1"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 1): ?> selected<?php endif; ?>>1月</option>
														<option value="2"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 2): ?> selected<?php endif; ?>>2月</option>
														<option value="3"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 3): ?> selected<?php endif; ?>>3月</option>
														<option value="4"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 4): ?> selected<?php endif; ?>>4月</option>
														<option value="5"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 5): ?> selected<?php endif; ?>>5月</option>
														<option value="6"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 6): ?> selected<?php endif; ?>>6月</option>
														<option value="7"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 7): ?> selected<?php endif; ?>>7月</option>
														<option value="8"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 8): ?> selected<?php endif; ?>>8月</option>
														<option value="9"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 9): ?> selected<?php endif; ?>>9月</option>
														<option value="10"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 10): ?> selected<?php endif; ?>>10月</option>
														<option value="11"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 11): ?> selected<?php endif; ?>>11月</option>
														<option value="12"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupMonth'] == 12): ?> selected<?php endif; ?>>12月</option>
													</select>
													<select name="sendForm[1][latestCheckupDay]" class="w72">
														<option value="">日選択</option>
														<option value="1"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 1): ?> selected<?php endif; ?>>1日</option>
														<option value="2"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 2): ?> selected<?php endif; ?>>2日</option>
														<option value="3"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 3): ?> selected<?php endif; ?>>3日</option>
														<option value="4"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 4): ?> selected<?php endif; ?>>4日</option>
														<option value="5"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 5): ?> selected<?php endif; ?>>5日</option>
														<option value="6"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 6): ?> selected<?php endif; ?>>6日</option>
														<option value="7"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 7): ?> selected<?php endif; ?>>7日</option>
														<option value="8"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 8): ?> selected<?php endif; ?>>8日</option>
														<option value="9"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 9): ?> selected<?php endif; ?>>9日</option>
														<option value="10"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 10): ?> selected<?php endif; ?>>10日</option>
														<option value="11"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 11): ?> selected<?php endif; ?>>11日</option>
														<option value="12"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 12): ?> selected<?php endif; ?>>12日</option>
														<option value="13"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 13): ?> selected<?php endif; ?>>13日</option>
														<option value="14"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 14): ?> selected<?php endif; ?>>14日</option>
														<option value="15"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 15): ?> selected<?php endif; ?>>15日</option>
														<option value="16"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 16): ?> selected<?php endif; ?>>16日</option>
														<option value="17"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 17): ?> selected<?php endif; ?>>17日</option>
														<option value="18"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 18): ?> selected<?php endif; ?>>18日</option>
														<option value="19"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 19): ?> selected<?php endif; ?>>19日</option>
														<option value="20"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 20): ?> selected<?php endif; ?>>20日</option>
														<option value="21"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 21): ?> selected<?php endif; ?>>21日</option>
														<option value="22"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 22): ?> selected<?php endif; ?>>22日</option>
														<option value="23"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 23): ?> selected<?php endif; ?>>23日</option>
														<option value="24"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 24): ?> selected<?php endif; ?>>24日</option>
														<option value="25"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 25): ?> selected<?php endif; ?>>25日</option>
														<option value="26"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 26): ?> selected<?php endif; ?>>26日</option>
														<option value="27"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 27): ?> selected<?php endif; ?>>27日</option>
														<option value="28"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 28): ?> selected<?php endif; ?>>28日</option>
														<option value="29"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 29): ?> selected<?php endif; ?>>29日</option>
														<option value="30"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 30): ?> selected<?php endif; ?>>30日</option>
														<option value="31"<?php if ($this->_tpl_vars['selectBase1']['latestCheckupDay'] == 31): ?> selected<?php endif; ?>>31日</option>
													</select>
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>血圧（上）</th>
										<td>
											<input type="text" name="sendForm[1][bloodPressureHigher]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['bloodPressureHigher']; ?>
">
										</td>
										<th class="w80">血圧（下）</th>
										<td>
											<input type="text" name="sendForm[1][bloodPressureLower]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['bloodPressureLower']; ?>
">
										</td>
									</tr>
									<tr>
										<th>その他</th>
										<td colspan="3">
											<input type="text" name="sendForm[1][other]" value="<?php echo $this->_tpl_vars['selectBase1']['other']; ?>
">
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
										<td><input type="text" name="sendForm[1][constructionType1_1]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType1_1']; ?>
"></td>
										<td><input type="text" name="sendForm[1][constructionType1_2]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType1_2']; ?>
"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience1]" class="mr5 w120" value="<?php echo $this->_tpl_vars['selectBase1']['yearsOfExperience1']; ?>
">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType2_1]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType2_1']; ?>
"></td>
										<td><input type="text" name="sendForm[1][constructionType2_2]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType2_2']; ?>
"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience2]" class="mr5 w120" value="<?php echo $this->_tpl_vars['selectBase1']['yearsOfExperience2']; ?>
">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType3_1]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType3_1']; ?>
"></td>
										<td><input type="text" name="sendForm[1][constructionType3_2]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType3_2']; ?>
"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience3]" class="mr5 w120" value="<?php echo $this->_tpl_vars['selectBase1']['yearsOfExperience3']; ?>
">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType4_1]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType4_1']; ?>
"></td>
										<td><input type="text" name="sendForm[1][constructionType4_2]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType4_2']; ?>
"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience4]" class="mr5 w120" value="<?php echo $this->_tpl_vars['selectBase1']['yearsOfExperience4']; ?>
">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType5_1]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType5_1']; ?>
"></td>
										<td><input type="text" name="sendForm[1][constructionType5_2]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType5_2']; ?>
"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience5]" class="mr5 w120" value="<?php echo $this->_tpl_vars['selectBase1']['yearsOfExperience5']; ?>
">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType6_1]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType6_1']; ?>
"></td>
										<td><input type="text" name="sendForm[1][constructionType6_2]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType6_2']; ?>
"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience6]" class="mr5 w120" value="<?php echo $this->_tpl_vars['selectBase1']['yearsOfExperience6']; ?>
">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType7_1]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType7_1']; ?>
"></td>
										<td><input type="text" name="sendForm[1][constructionType7_2]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType7_2']; ?>
"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience7]" class="mr5 w120" value="<?php echo $this->_tpl_vars['selectBase1']['yearsOfExperience7']; ?>
">年</td>
									</tr>
									<tr>
										<td><input type="text" name="sendForm[1][constructionType8_1]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType8_1']; ?>
"></td>
										<td><input type="text" name="sendForm[1][constructionType8_2]" class="w100p" value="<?php echo $this->_tpl_vars['selectBase1']['constructionType8_2']; ?>
"></td>
										<td><input type="text" name="sendForm[1][yearsOfExperience8]" class="mr5 w120" value="<?php echo $this->_tpl_vars['selectBase1']['yearsOfExperience8']; ?>
">年</td>
									</tr>
								</table>
							</div>
						</div>
						<?php if ($this->_tpl_vars['view_flg3'] == 1 || $this->_tpl_vars['view_flg5'] == 1 || $this->_tpl_vars['view_flg7'] == 1): ?>
							<div class="clearfix">
								<div class="boxRight">
									<button class="btnReload" type="submit">登録・更新する</button>
								</div>
							</div>
						<?php endif; ?>
						<hr class="mb30">
					</div>
				</form>

				<form name="form3" action="?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
" method="POST">
					<input type="hidden" name="mode" id="mode3" value="<?php echo $this->_tpl_vars['editModeBase2']; ?>
">
					<div id="formAreaSub">
						<?php $_from = $this->_tpl_vars['selectBase2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
							<?php $this->assign('keyno', $this->_foreach['cnt']['iteration']+1); ?>
							<?php $this->assign('countall', count($this->_tpl_vars['selectBase2'])); ?>
							<div id="formAreaClone_<?php echo $this->_foreach['cnt']['iteration']; ?>
" class="formAreaSubBox">
								<input type="hidden" name="codeNumber" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
								<input type="hidden" name="officeCode" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
								<input type="hidden" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][codeNumber]" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
								<input type="hidden" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][officeCode]" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
								<input type="hidden" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][workerFlg]" value="2">
								<input type="hidden" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][workerNo]" value="<?php echo $this->_foreach['cnt']['iteration']; ?>
">
								<div class="container">
									<div class="txtRight mb10">
										<button class="buttonA">CSV出力</button>
									</div>
									<div class="clearfix">
										<div class="boxRight">
											<a href="#" class="btnIncrease workerPlusBtn" onclick="worker_view('<?php echo $this->_tpl_vars['countall']+1; ?>
')">+</a>
											<a href="#" class="btnDecrease">+</a>
										</div>
									</div>
									<div class="clearfix">
										<div class="boxLeft w470">
											<div class="clearfix pt10 mb10">
												<div class="boxLeft	">
													<div class="headingB m0">
														<h3>作業員（<span class="worker"><?php echo $this->_tpl_vars['keyno']; ?>
</span>）：社員</h3>
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
														<input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][registrationNumber]" class="w100p" value="<?php echo $this->_tpl_vars['value']['registrationNumber']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">氏名（漢字）</th>
													<td>
														<input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][name_Kanji]" class="w100p" value="<?php echo $this->_tpl_vars['value']['name_Kanji']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">氏名（カナ）</th>
													<td>
														<input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][name_Kana]" class="w100p" value="<?php echo $this->_tpl_vars['value']['name_Kana']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">住所／郵便番号</th>
													<td>
														<input type="text" class="w53" id="postcodeFirstHalf" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][postcodeFirstHalf]" placeholder="000" value="<?php echo $this->_tpl_vars['value']['postcodeFirstHalf']; ?>
">
														ー
														<input type="text" class="w53" id="postcodeLastHalf" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][postcodeLastHalf]" placeholder="000" value="<?php echo $this->_tpl_vars['value']['postcodeLastHalf']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">住所</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][address]" value="<?php echo $this->_tpl_vars['value']['address']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">建物名 等</th>
													<td>
														<input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][buildingName]" class="w100p" value="<?php echo $this->_tpl_vars['value']['buildingName']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">電話番号</th>
													<td>
														<input type="text" class="w53" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][phoneNumberAreaCode]" placeholder="000" value="<?php echo $this->_tpl_vars['value']['phoneNumberAreaCode']; ?>
">
														ー
														<input type="text" class="w53" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][phoneNumberFirstHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['phoneNumberFirstHalf']; ?>
">
														ー
														<input type="text" class="w53" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][phoneNumberLastHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['phoneNumberLastHalf']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">ファックス番号</th>
													<td>
														<input type="text" class="w53" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][faxNumberAreaCode]" placeholder="000" value="<?php echo $this->_tpl_vars['value']['faxNumberAreaCode']; ?>
">
														ー
														<input type="text" class="w53" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][faxNumberFirstHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['faxNumberFirstHalf']; ?>
">
														ー
														<input type="text" class="w53" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][faxNumberLastHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['faxNumberLastHalf']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">メールアドレス</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][eMail]" value="<?php echo $this->_tpl_vars['value']['eMail']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">生年月日</th>
													<td>
														<ul class="dateSortingArea horizontal">
															<li>
																<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][dateOfBirthYear]" class="w105">
																	<option value="">年選択</option>
																	<?php $_from = $this->_tpl_vars['birthYearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
																		<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['value']['dateOfBirthYear'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
年</option>
																	<?php endforeach; endif; unset($_from); ?>
																</select>
																<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][dateOfBirthMonth]" class="w72">
																	<option value="">月選択</option>
																	<option value="1"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 1): ?> selected<?php endif; ?>>1月</option>
																	<option value="2"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 2): ?> selected<?php endif; ?>>2月</option>
																	<option value="3"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 3): ?> selected<?php endif; ?>>3月</option>
																	<option value="4"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 4): ?> selected<?php endif; ?>>4月</option>
																	<option value="5"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 5): ?> selected<?php endif; ?>>5月</option>
																	<option value="6"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 6): ?> selected<?php endif; ?>>6月</option>
																	<option value="7"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 7): ?> selected<?php endif; ?>>7月</option>
																	<option value="8"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 8): ?> selected<?php endif; ?>>8月</option>
																	<option value="9"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 9): ?> selected<?php endif; ?>>9月</option>
																	<option value="10"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 10): ?> selected<?php endif; ?>>10月</option>
																	<option value="11"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 11): ?> selected<?php endif; ?>>11月</option>
																	<option value="12"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 12): ?> selected<?php endif; ?>>12月</option>
																</select>
																<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][dateOfBirthDay]" class="w72">
																	<option value="">日選択</option>
																	<option value="1"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 1): ?> selected<?php endif; ?>>1日</option>
																	<option value="2"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 2): ?> selected<?php endif; ?>>2日</option>
																	<option value="3"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 3): ?> selected<?php endif; ?>>3日</option>
																	<option value="4"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 4): ?> selected<?php endif; ?>>4日</option>
																	<option value="5"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 5): ?> selected<?php endif; ?>>5日</option>
																	<option value="6"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 6): ?> selected<?php endif; ?>>6日</option>
																	<option value="7"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 7): ?> selected<?php endif; ?>>7日</option>
																	<option value="8"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 8): ?> selected<?php endif; ?>>8日</option>
																	<option value="9"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 9): ?> selected<?php endif; ?>>9日</option>
																	<option value="10"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 10): ?> selected<?php endif; ?>>10日</option>
																	<option value="11"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 11): ?> selected<?php endif; ?>>11日</option>
																	<option value="12"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 12): ?> selected<?php endif; ?>>12日</option>
																	<option value="13"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 13): ?> selected<?php endif; ?>>13日</option>
																	<option value="14"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 14): ?> selected<?php endif; ?>>14日</option>
																	<option value="15"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 15): ?> selected<?php endif; ?>>15日</option>
																	<option value="16"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 16): ?> selected<?php endif; ?>>16日</option>
																	<option value="17"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 17): ?> selected<?php endif; ?>>17日</option>
																	<option value="18"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 18): ?> selected<?php endif; ?>>18日</option>
																	<option value="19"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 19): ?> selected<?php endif; ?>>19日</option>
																	<option value="20"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 20): ?> selected<?php endif; ?>>20日</option>
																	<option value="21"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 21): ?> selected<?php endif; ?>>21日</option>
																	<option value="22"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 22): ?> selected<?php endif; ?>>22日</option>
																	<option value="23"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 23): ?> selected<?php endif; ?>>23日</option>
																	<option value="24"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 24): ?> selected<?php endif; ?>>24日</option>
																	<option value="25"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 25): ?> selected<?php endif; ?>>25日</option>
																	<option value="26"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 26): ?> selected<?php endif; ?>>26日</option>
																	<option value="27"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 27): ?> selected<?php endif; ?>>27日</option>
																	<option value="28"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 28): ?> selected<?php endif; ?>>28日</option>
																	<option value="29"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 29): ?> selected<?php endif; ?>>29日</option>
																	<option value="30"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 30): ?> selected<?php endif; ?>>30日</option>
																	<option value="31"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 31): ?> selected<?php endif; ?>>31日</option>
																</select>
															</li>
														</ul>
													</td>
												</tr>
												<tr>
													<th class="w125">年齢</th>
													<td>
														<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][age]" class="w63">
															<option value="">選択</option>
															<?php $_from = $this->_tpl_vars['ageArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
																<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['value']['age'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
</option>
															<?php endforeach; endif; unset($_from); ?>
														</select>
													</td>
												</tr>
												<tr>
													<th class="w125">血液型</th>
													<td>
														<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][bloodType]" class="w63">
															<option value="">選択</option>
															<option value="A"<?php if ($this->_tpl_vars['value']['bloodType'] == 'A'): ?> selected<?php endif; ?>>A</option>
															<option value="B"<?php if ($this->_tpl_vars['value']['bloodType'] == 'B'): ?> selected<?php endif; ?>>B</option>
															<option value="O"<?php if ($this->_tpl_vars['value']['bloodType'] == 'O'): ?> selected<?php endif; ?>>O</option>
															<option value="AB"<?php if ($this->_tpl_vars['value']['bloodType'] == 'AB'): ?> selected<?php endif; ?>>AB</option>
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
														<input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][emergencyName_Kanji]" class="w100p" value="<?php echo $this->_tpl_vars['value']['emergencyName_Kanji']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">氏名（カナ）</th>
													<td>
														<input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][emergencyName_Kana]" class="w100p" value="<?php echo $this->_tpl_vars['value']['emergencyName_Kana']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w125">続柄</th>
													<td>
														<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][relationship]" class="w63">
															<option value="">選択</option>
															<option value="1"<?php if ($this->_tpl_vars['value']['relationship'] == 1): ?> selected<?php endif; ?>>妻</option>
															<option value="2"<?php if ($this->_tpl_vars['value']['relationship'] == 2): ?> selected<?php endif; ?>>夫</option>
															<option value="3"<?php if ($this->_tpl_vars['value']['relationship'] == 3): ?> selected<?php endif; ?>>子</option>
															<option value="4"<?php if ($this->_tpl_vars['value']['relationship'] == 4): ?> selected<?php endif; ?>>孫</option>
															<option value="5"<?php if ($this->_tpl_vars['value']['relationship'] == 5): ?> selected<?php endif; ?>>実兄</option>
															<option value="6"<?php if ($this->_tpl_vars['value']['relationship'] == 6): ?> selected<?php endif; ?>>実弟</option>
															<option value="7"<?php if ($this->_tpl_vars['value']['relationship'] == 7): ?> selected<?php endif; ?>>実姉</option>
															<option value="8"<?php if ($this->_tpl_vars['value']['relationship'] == 8): ?> selected<?php endif; ?>>実妹</option>
															<option value="9"<?php if ($this->_tpl_vars['value']['relationship'] == 9): ?> selected<?php endif; ?>>祖父</option>
															<option value="10"<?php if ($this->_tpl_vars['value']['relationship'] == 10): ?> selected<?php endif; ?>>祖母</option>
															<option value="11"<?php if ($this->_tpl_vars['value']['relationship'] == 11): ?> selected<?php endif; ?>>曽祖父</option>
															<option value="12"<?php if ($this->_tpl_vars['value']['relationship'] == 12): ?> selected<?php endif; ?>>曾祖母</option>
															<option value="13"<?php if ($this->_tpl_vars['value']['relationship'] == 13): ?> selected<?php endif; ?>>従兄弟</option>
															<option value="14"<?php if ($this->_tpl_vars['value']['relationship'] == 14): ?> selected<?php endif; ?>>叔父</option>
															<option value="15"<?php if ($this->_tpl_vars['value']['relationship'] == 15): ?> selected<?php endif; ?>>叔母</option>
															<option value="16"<?php if ($this->_tpl_vars['value']['relationship'] == 16): ?> selected<?php endif; ?>>義父</option>
															<option value="17"<?php if ($this->_tpl_vars['value']['relationship'] == 17): ?> selected<?php endif; ?>>義母</option>
															<option value="18"<?php if ($this->_tpl_vars['value']['relationship'] == 18): ?> selected<?php endif; ?>>義兄</option>
															<option value="19"<?php if ($this->_tpl_vars['value']['relationship'] == 19): ?> selected<?php endif; ?>>義弟</option>
															<option value="20"<?php if ($this->_tpl_vars['value']['relationship'] == 20): ?> selected<?php endif; ?>>義姉</option>
															<option value="21"<?php if ($this->_tpl_vars['value']['relationship'] == 21): ?> selected<?php endif; ?>>義妹</option>
															<option value="22"<?php if ($this->_tpl_vars['value']['relationship'] == 22): ?> selected<?php endif; ?>>義祖父</option>
															<option value="23"<?php if ($this->_tpl_vars['value']['relationship'] == 23): ?> selected<?php endif; ?>>義祖母</option>
															<option value="24"<?php if ($this->_tpl_vars['value']['relationship'] == 24): ?> selected<?php endif; ?>>義叔父</option>
															<option value="25"<?php if ($this->_tpl_vars['value']['relationship'] == 25): ?> selected<?php endif; ?>>義叔母</option>
															<option value="26"<?php if ($this->_tpl_vars['value']['relationship'] == 26): ?> selected<?php endif; ?>>義従兄弟</option>
															<option value="27"<?php if ($this->_tpl_vars['value']['relationship'] == 27): ?> selected<?php endif; ?>>知人／友人</option>
															<option value="28"<?php if ($this->_tpl_vars['value']['relationship'] == 28): ?> selected<?php endif; ?>>同居人</option>
															<option value="29"<?php if ($this->_tpl_vars['value']['relationship'] == 29): ?> selected<?php endif; ?>>その他</option>
														</select>
													</td>
												</tr>
												<tr>
													<th class="w125">電話番号</th>
													<td>
														<input type="text" class="w53" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][emergencyPhoneNumberAreaCode]" placeholder="000" value="<?php echo $this->_tpl_vars['value']['emergencyPhoneNumberAreaCode']; ?>
">
														ー
														<input type="text" class="w53" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][emergencyPhoneNumberFirstHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['emergencyPhoneNumberFirstHalf']; ?>
">
														ー
														<input type="text" class="w53" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][emergencyPhoneNumberLastHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['emergencyPhoneNumberLastHalf']; ?>
">
													</td>
												</tr>
											</table>
											<table class="tableA noTtl">
												<tr>
													<th class="w125">備考</th>
													<td class="bdt">
														<textarea name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][remarks]" rows="8" class="w100p"><?php echo $this->_tpl_vars['value']['remarks']; ?>
</textarea>
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
																<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][registrationYear]" class="w105">
																	<option value="">年選択</option>
																	<?php $_from = $this->_tpl_vars['checkupYearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
																		<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['value']['registrationYear'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
年</option>
																	<?php endforeach; endif; unset($_from); ?>
																</select>
																<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][registrationMonth]" class="w72">
																	<option value="">月選択</option>
																	<option value="1"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 1): ?> selected<?php endif; ?>>1月</option>
																	<option value="2"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 2): ?> selected<?php endif; ?>>2月</option>
																	<option value="3"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 3): ?> selected<?php endif; ?>>3月</option>
																	<option value="4"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 4): ?> selected<?php endif; ?>>4月</option>
																	<option value="5"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 5): ?> selected<?php endif; ?>>5月</option>
																	<option value="6"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 6): ?> selected<?php endif; ?>>6月</option>
																	<option value="7"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 7): ?> selected<?php endif; ?>>7月</option>
																	<option value="8"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 8): ?> selected<?php endif; ?>>8月</option>
																	<option value="9"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 9): ?> selected<?php endif; ?>>9月</option>
																	<option value="10"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 10): ?> selected<?php endif; ?>>10月</option>
																	<option value="11"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 11): ?> selected<?php endif; ?>>11月</option>
																	<option value="12"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 12): ?> selected<?php endif; ?>>12月</option>
																</select>
																<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][registrationDay]" class="w72">
																	<option value="">日選択</option>
																	<option value="1"<?php if ($this->_tpl_vars['value']['registrationDay'] == 1): ?> selected<?php endif; ?>>1日</option>
																	<option value="2"<?php if ($this->_tpl_vars['value']['registrationDay'] == 2): ?> selected<?php endif; ?>>2日</option>
																	<option value="3"<?php if ($this->_tpl_vars['value']['registrationDay'] == 3): ?> selected<?php endif; ?>>3日</option>
																	<option value="4"<?php if ($this->_tpl_vars['value']['registrationDay'] == 4): ?> selected<?php endif; ?>>4日</option>
																	<option value="5"<?php if ($this->_tpl_vars['value']['registrationDay'] == 5): ?> selected<?php endif; ?>>5日</option>
																	<option value="6"<?php if ($this->_tpl_vars['value']['registrationDay'] == 6): ?> selected<?php endif; ?>>6日</option>
																	<option value="7"<?php if ($this->_tpl_vars['value']['registrationDay'] == 7): ?> selected<?php endif; ?>>7日</option>
																	<option value="8"<?php if ($this->_tpl_vars['value']['registrationDay'] == 8): ?> selected<?php endif; ?>>8日</option>
																	<option value="9"<?php if ($this->_tpl_vars['value']['registrationDay'] == 9): ?> selected<?php endif; ?>>9日</option>
																	<option value="10"<?php if ($this->_tpl_vars['value']['registrationDay'] == 10): ?> selected<?php endif; ?>>10日</option>
																	<option value="11"<?php if ($this->_tpl_vars['value']['registrationDay'] == 11): ?> selected<?php endif; ?>>11日</option>
																	<option value="12"<?php if ($this->_tpl_vars['value']['registrationDay'] == 12): ?> selected<?php endif; ?>>12日</option>
																	<option value="13"<?php if ($this->_tpl_vars['value']['registrationDay'] == 13): ?> selected<?php endif; ?>>13日</option>
																	<option value="14"<?php if ($this->_tpl_vars['value']['registrationDay'] == 14): ?> selected<?php endif; ?>>14日</option>
																	<option value="15"<?php if ($this->_tpl_vars['value']['registrationDay'] == 15): ?> selected<?php endif; ?>>15日</option>
																	<option value="16"<?php if ($this->_tpl_vars['value']['registrationDay'] == 16): ?> selected<?php endif; ?>>16日</option>
																	<option value="17"<?php if ($this->_tpl_vars['value']['registrationDay'] == 17): ?> selected<?php endif; ?>>17日</option>
																	<option value="18"<?php if ($this->_tpl_vars['value']['registrationDay'] == 18): ?> selected<?php endif; ?>>18日</option>
																	<option value="19"<?php if ($this->_tpl_vars['value']['registrationDay'] == 19): ?> selected<?php endif; ?>>19日</option>
																	<option value="20"<?php if ($this->_tpl_vars['value']['registrationDay'] == 20): ?> selected<?php endif; ?>>20日</option>
																	<option value="21"<?php if ($this->_tpl_vars['value']['registrationDay'] == 21): ?> selected<?php endif; ?>>21日</option>
																	<option value="22"<?php if ($this->_tpl_vars['value']['registrationDay'] == 22): ?> selected<?php endif; ?>>22日</option>
																	<option value="23"<?php if ($this->_tpl_vars['value']['registrationDay'] == 23): ?> selected<?php endif; ?>>23日</option>
																	<option value="24"<?php if ($this->_tpl_vars['value']['registrationDay'] == 24): ?> selected<?php endif; ?>>24日</option>
																	<option value="25"<?php if ($this->_tpl_vars['value']['registrationDay'] == 25): ?> selected<?php endif; ?>>25日</option>
																	<option value="26"<?php if ($this->_tpl_vars['value']['registrationDay'] == 26): ?> selected<?php endif; ?>>26日</option>
																	<option value="27"<?php if ($this->_tpl_vars['value']['registrationDay'] == 27): ?> selected<?php endif; ?>>27日</option>
																	<option value="28"<?php if ($this->_tpl_vars['value']['registrationDay'] == 28): ?> selected<?php endif; ?>>28日</option>
																	<option value="29"<?php if ($this->_tpl_vars['value']['registrationDay'] == 29): ?> selected<?php endif; ?>>29日</option>
																	<option value="30"<?php if ($this->_tpl_vars['value']['registrationDay'] == 30): ?> selected<?php endif; ?>>30日</option>
																	<option value="31"<?php if ($this->_tpl_vars['value']['registrationDay'] == 31): ?> selected<?php endif; ?>>31日</option>
																</select>
															</li>
														</ul>
													</td>
												</tr>
												<tr>
													<th class="w105">ガイズ担当者 <br>（受付担当）</th>
													<td>
														<select class="w105" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][representative]">
															<option value="">選択</option>
															<?php $_from = $this->_tpl_vars['selectStaff']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
																<option value="<?php echo $this->_tpl_vars['value']['staffID']; ?>
"<?php if ($this->_tpl_vars['value']['representative'] == $this->_tpl_vars['value']['staffID']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
															<?php endforeach; endif; unset($_from); ?>
														</select>
													</td>
												</tr>
												<tr>
													<th class="w105">労災組合名</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][workersUnion]" value="<?php echo $this->_tpl_vars['value']['workersUnion']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w105">労災番号</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][compensationInsuranceNumber]" value="<?php echo $this->_tpl_vars['value']['compensationInsuranceNumber']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w105">健康保険名</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][nationalHealthInsurance]" value="<?php echo $this->_tpl_vars['value']['nationalHealthInsurance']; ?>
">
													</td>
												</tr>
												<tr>
													<th class="w105">健康保険番号</th>
													<td>
														<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][nationalHealthInsuranceNumber]" value="<?php echo $this->_tpl_vars['value']['nationalHealthInsuranceNumber']; ?>
">
													</td>
												</tr>
												<?php if ($this->_tpl_vars['view_flg4'] == 1): ?>
													<tr>
														<th class="w105">年金保険種類</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][pensionInsurance]" value="<?php echo $this->_tpl_vars['value']['pensionInsurance']; ?>
">
														</td>
													</tr>
													<tr>
														<th class="w105">年金番号</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][pensionNumber]" value="<?php echo $this->_tpl_vars['value']['pensionNumber']; ?>
">
														</td>
													</tr>
													<tr>
														<th class="w105">雇用保険番号</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][unemploymentInsuranceNumber]" value="<?php echo $this->_tpl_vars['value']['unemploymentInsuranceNumber']; ?>
">
														</td>
													</tr>
													<tr>
														<th class="w105">足場作業者番号</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][scaffoldWorkersNumber]" value="<?php echo $this->_tpl_vars['value']['scaffoldWorkersNumber']; ?>
">
														</td>
													</tr>
												<?php else: ?>
													<input type="hidden" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][pensionInsurance]" value="<?php echo $this->_tpl_vars['value']['pensionInsurance']; ?>
">
													<input type="hidden" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][pensionNumber]" value="<?php echo $this->_tpl_vars['value']['pensionNumber']; ?>
">
													<input type="hidden" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][unemploymentInsuranceNumber]" value="<?php echo $this->_tpl_vars['value']['unemploymentInsuranceNumber']; ?>
">
													<input type="hidden" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][scaffoldWorkersNumber]" value="<?php echo $this->_tpl_vars['value']['scaffoldWorkersNumber']; ?>
">
												<?php endif; ?>
												<?php if ($this->_tpl_vars['view_flg6'] == 1): ?>
													<tr>
														<th class="w105">その他 1</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][other1]" value="<?php echo $this->_tpl_vars['value']['other1']; ?>
">
														</td>
													</tr>
													<tr>
														<th class="w105">その他 2</th>
														<td>
															<input type="text" class="w100p" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][other2]" value="<?php echo $this->_tpl_vars['value']['other2']; ?>
">
														</td>
													</tr>
												<?php else: ?>
													<input type="hidden" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][other1]" value="<?php echo $this->_tpl_vars['value']['other1']; ?>
">
													<input type="hidden" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][other2]" value="<?php echo $this->_tpl_vars['value']['other2']; ?>
">
												<?php endif; ?>
											</table>
											<table class="tableA noTtl">
												<tr>
													<th class="w105">健康診断 <br>最新診断日</th>
													<td colspan="3" class="bdt">
														<ul class="dateSortingArea horizontal">
															<li>
																<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][latestCheckupYear]" class="w105">
																	<option value="">年選択</option>
																	<?php $_from = $this->_tpl_vars['checkupYearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
																		<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['value']['latestCheckupYear'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
年</option>
																	<?php endforeach; endif; unset($_from); ?>
																</select>
																<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][latestCheckupMonth]" class="w72">
																	<option value="">月選択</option>
																	<option value="1"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 1): ?> selected<?php endif; ?>>1月</option>
																	<option value="2"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 2): ?> selected<?php endif; ?>>2月</option>
																	<option value="3"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 3): ?> selected<?php endif; ?>>3月</option>
																	<option value="4"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 4): ?> selected<?php endif; ?>>4月</option>
																	<option value="5"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 5): ?> selected<?php endif; ?>>5月</option>
																	<option value="6"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 6): ?> selected<?php endif; ?>>6月</option>
																	<option value="7"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 7): ?> selected<?php endif; ?>>7月</option>
																	<option value="8"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 8): ?> selected<?php endif; ?>>8月</option>
																	<option value="9"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 9): ?> selected<?php endif; ?>>9月</option>
																	<option value="10"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 10): ?> selected<?php endif; ?>>10月</option>
																	<option value="11"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 11): ?> selected<?php endif; ?>>11月</option>
																	<option value="12"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 12): ?> selected<?php endif; ?>>12月</option>
																</select>
																<select name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][latestCheckupDay]" class="w72">
																	<option value="">日選択</option>
																	<option value="1"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 1): ?> selected<?php endif; ?>>1日</option>
																	<option value="2"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 2): ?> selected<?php endif; ?>>2日</option>
																	<option value="3"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 3): ?> selected<?php endif; ?>>3日</option>
																	<option value="4"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 4): ?> selected<?php endif; ?>>4日</option>
																	<option value="5"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 5): ?> selected<?php endif; ?>>5日</option>
																	<option value="6"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 6): ?> selected<?php endif; ?>>6日</option>
																	<option value="7"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 7): ?> selected<?php endif; ?>>7日</option>
																	<option value="8"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 8): ?> selected<?php endif; ?>>8日</option>
																	<option value="9"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 9): ?> selected<?php endif; ?>>9日</option>
																	<option value="10"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 10): ?> selected<?php endif; ?>>10日</option>
																	<option value="11"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 11): ?> selected<?php endif; ?>>11日</option>
																	<option value="12"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 12): ?> selected<?php endif; ?>>12日</option>
																	<option value="13"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 13): ?> selected<?php endif; ?>>13日</option>
																	<option value="14"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 14): ?> selected<?php endif; ?>>14日</option>
																	<option value="15"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 15): ?> selected<?php endif; ?>>15日</option>
																	<option value="16"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 16): ?> selected<?php endif; ?>>16日</option>
																	<option value="17"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 17): ?> selected<?php endif; ?>>17日</option>
																	<option value="18"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 18): ?> selected<?php endif; ?>>18日</option>
																	<option value="19"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 19): ?> selected<?php endif; ?>>19日</option>
																	<option value="20"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 20): ?> selected<?php endif; ?>>20日</option>
																	<option value="21"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 21): ?> selected<?php endif; ?>>21日</option>
																	<option value="22"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 22): ?> selected<?php endif; ?>>22日</option>
																	<option value="23"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 23): ?> selected<?php endif; ?>>23日</option>
																	<option value="24"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 24): ?> selected<?php endif; ?>>24日</option>
																	<option value="25"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 25): ?> selected<?php endif; ?>>25日</option>
																	<option value="26"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 26): ?> selected<?php endif; ?>>26日</option>
																	<option value="27"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 27): ?> selected<?php endif; ?>>27日</option>
																	<option value="28"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 28): ?> selected<?php endif; ?>>28日</option>
																	<option value="29"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 29): ?> selected<?php endif; ?>>29日</option>
																	<option value="30"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 30): ?> selected<?php endif; ?>>30日</option>
																	<option value="31"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 31): ?> selected<?php endif; ?>>31日</option>
																</select>
															</li>
														</ul>
													</td>
												</tr>
												<tr>
													<th>血圧（上）</th>
													<td>
														<input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][bloodPressureHigher]" class="w100p" value="<?php echo $this->_tpl_vars['value']['bloodPressureHigher']; ?>
">
													</td>
													<th class="w80">血圧（下）</th>
													<td>
														<input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][bloodPressureLower]" class="w100p" value="<?php echo $this->_tpl_vars['value']['bloodPressureLower']; ?>
">
													</td>
												</tr>
												<tr>
													<th>その他</th>
													<td colspan="3">
														<input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][other]" value="<?php echo $this->_tpl_vars['value']['other']; ?>
">
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
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType1_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType1_1']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType1_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType1_2']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][yearsOfExperience1]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience1']; ?>
">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType2_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType2_1']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType2_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType2_2']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][yearsOfExperience2]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience2']; ?>
">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType3_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType3_1']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType3_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType3_2']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][yearsOfExperience3]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience3']; ?>
">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType4_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType4_1']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType4_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType4_2']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][yearsOfExperience4]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience4']; ?>
">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType5_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType5_1']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType5_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType5_2']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][yearsOfExperience5]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience5']; ?>
">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType6_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType6_1']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType6_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType6_2']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][yearsOfExperience6]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience6']; ?>
">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType7_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType7_1']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType7_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType7_2']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][yearsOfExperience7]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience7']; ?>
">年</td>
												</tr>
												<tr>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType8_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType8_1']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][constructionType8_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType8_2']; ?>
"></td>
													<td><input type="text" name="sendForm[<?php echo $this->_tpl_vars['keyno']; ?>
][yearsOfExperience8]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience8']; ?>
">年</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; endif; unset($_from); ?>
					</div>
					<?php if ($this->_tpl_vars['view_flg3'] == 1 || $this->_tpl_vars['view_flg5'] == 1 || $this->_tpl_vars['view_flg7'] == 1): ?>
						<div class="container<?php if (count($this->_tpl_vars['selectBase2']) == 0): ?> disp_none<?php endif; ?>" id="form2button">
							<div class="clearfix">
								<div class="boxRight">
									<button class="btnReload" type="submit">登録・更新する</button>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</form>
			<?php endif; ?>
		<?php else: ?>
			<div class="errorBox">
				<p class="error">工事発注権限がありません。</p>
			</div>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>




<div id="formAreaClone" class="formAreaSubBox disp_none">
	<input type="hidden" name="codeNumber" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
	<input type="hidden" name="officeCode" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
	<input type="hidden" name="sendForm[1][codeNumber]" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
	<input type="hidden" name="sendForm[1][officeCode]" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
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
							<input type="text" name="sendForm[1][registrationNumber]" class="w100p" value="<?php echo $this->_tpl_vars['value']['registrationNumber']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">氏名（漢字）</th>
						<td>
							<input type="text" name="sendForm[1][name_Kanji]" class="w100p" value="<?php echo $this->_tpl_vars['value']['name_Kanji']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">氏名（カナ）</th>
						<td>
							<input type="text" name="sendForm[1][name_Kana]" class="w100p" value="<?php echo $this->_tpl_vars['value']['name_Kana']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">住所／郵便番号</th>
						<td>
							<input type="text" class="w53" id="postcodeFirstHalf" name="sendForm[1][postcodeFirstHalf]" placeholder="000" value="<?php echo $this->_tpl_vars['value']['postcodeFirstHalf']; ?>
">
							ー
							<input type="text" class="w53" id="postcodeLastHalf" name="sendForm[1][postcodeLastHalf]" placeholder="000" value="<?php echo $this->_tpl_vars['value']['postcodeLastHalf']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">住所</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][address]" value="<?php echo $this->_tpl_vars['value']['address']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">建物名 等</th>
						<td>
							<input type="text" name="sendForm[1][buildingName]" class="w100p" value="<?php echo $this->_tpl_vars['value']['buildingName']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">電話番号</th>
						<td>
							<input type="text" class="w53" name="sendForm[1][phoneNumberAreaCode]" placeholder="000" value="<?php echo $this->_tpl_vars['value']['phoneNumberAreaCode']; ?>
">
							ー
							<input type="text" class="w53" name="sendForm[1][phoneNumberFirstHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['phoneNumberFirstHalf']; ?>
">
							ー
							<input type="text" class="w53" name="sendForm[1][phoneNumberLastHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['phoneNumberLastHalf']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">ファックス番号</th>
						<td>
							<input type="text" class="w53" name="sendForm[1][faxNumberAreaCode]" placeholder="000" value="<?php echo $this->_tpl_vars['value']['faxNumberAreaCode']; ?>
">
							ー
							<input type="text" class="w53" name="sendForm[1][faxNumberFirstHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['faxNumberFirstHalf']; ?>
">
							ー
							<input type="text" class="w53" name="sendForm[1][faxNumberLastHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['faxNumberLastHalf']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">メールアドレス</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][eMail]" value="<?php echo $this->_tpl_vars['value']['eMail']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">生年月日</th>
						<td>
							<ul class="dateSortingArea horizontal">
								<li>
									<select name="sendForm[1][dateOfBirthYear]" class="w105">
										<option value="">年選択</option>
										<?php $_from = $this->_tpl_vars['birthYearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
											<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['value']['dateOfBirthYear'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
年</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
									<select name="sendForm[1][dateOfBirthMonth]" class="w72">
										<option value="">月選択</option>
										<option value="1"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 1): ?> selected<?php endif; ?>>1月</option>
										<option value="2"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 2): ?> selected<?php endif; ?>>2月</option>
										<option value="3"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 3): ?> selected<?php endif; ?>>3月</option>
										<option value="4"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 4): ?> selected<?php endif; ?>>4月</option>
										<option value="5"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 5): ?> selected<?php endif; ?>>5月</option>
										<option value="6"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 6): ?> selected<?php endif; ?>>6月</option>
										<option value="7"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 7): ?> selected<?php endif; ?>>7月</option>
										<option value="8"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 8): ?> selected<?php endif; ?>>8月</option>
										<option value="9"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 9): ?> selected<?php endif; ?>>9月</option>
										<option value="10"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 10): ?> selected<?php endif; ?>>10月</option>
										<option value="11"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 11): ?> selected<?php endif; ?>>11月</option>
										<option value="12"<?php if ($this->_tpl_vars['value']['dateOfBirthMonth'] == 12): ?> selected<?php endif; ?>>12月</option>
									</select>
									<select name="sendForm[1][dateOfBirthDay]" class="w72">
										<option value="">日選択</option>
										<option value="1"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 1): ?> selected<?php endif; ?>>1日</option>
										<option value="2"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 2): ?> selected<?php endif; ?>>2日</option>
										<option value="3"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 3): ?> selected<?php endif; ?>>3日</option>
										<option value="4"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 4): ?> selected<?php endif; ?>>4日</option>
										<option value="5"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 5): ?> selected<?php endif; ?>>5日</option>
										<option value="6"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 6): ?> selected<?php endif; ?>>6日</option>
										<option value="7"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 7): ?> selected<?php endif; ?>>7日</option>
										<option value="8"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 8): ?> selected<?php endif; ?>>8日</option>
										<option value="9"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 9): ?> selected<?php endif; ?>>9日</option>
										<option value="10"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 10): ?> selected<?php endif; ?>>10日</option>
										<option value="11"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 11): ?> selected<?php endif; ?>>11日</option>
										<option value="12"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 12): ?> selected<?php endif; ?>>12日</option>
										<option value="13"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 13): ?> selected<?php endif; ?>>13日</option>
										<option value="14"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 14): ?> selected<?php endif; ?>>14日</option>
										<option value="15"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 15): ?> selected<?php endif; ?>>15日</option>
										<option value="16"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 16): ?> selected<?php endif; ?>>16日</option>
										<option value="17"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 17): ?> selected<?php endif; ?>>17日</option>
										<option value="18"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 18): ?> selected<?php endif; ?>>18日</option>
										<option value="19"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 19): ?> selected<?php endif; ?>>19日</option>
										<option value="20"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 20): ?> selected<?php endif; ?>>20日</option>
										<option value="21"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 21): ?> selected<?php endif; ?>>21日</option>
										<option value="22"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 22): ?> selected<?php endif; ?>>22日</option>
										<option value="23"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 23): ?> selected<?php endif; ?>>23日</option>
										<option value="24"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 24): ?> selected<?php endif; ?>>24日</option>
										<option value="25"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 25): ?> selected<?php endif; ?>>25日</option>
										<option value="26"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 26): ?> selected<?php endif; ?>>26日</option>
										<option value="27"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 27): ?> selected<?php endif; ?>>27日</option>
										<option value="28"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 28): ?> selected<?php endif; ?>>28日</option>
										<option value="29"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 29): ?> selected<?php endif; ?>>29日</option>
										<option value="30"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 30): ?> selected<?php endif; ?>>30日</option>
										<option value="31"<?php if ($this->_tpl_vars['value']['dateOfBirthDay'] == 31): ?> selected<?php endif; ?>>31日</option>
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
								<?php $_from = $this->_tpl_vars['ageArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
									<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['value']['age'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
</option>
								<?php endforeach; endif; unset($_from); ?>
							</select>
						</td>
					</tr>
					<tr>
						<th class="w125">血液型</th>
						<td>
							<select name="sendForm[1][bloodType]" class="w63">
								<option value="">選択</option>
								<option value="A"<?php if ($this->_tpl_vars['value']['bloodType'] == 'A'): ?> selected<?php endif; ?>>A</option>
								<option value="B"<?php if ($this->_tpl_vars['value']['bloodType'] == 'B'): ?> selected<?php endif; ?>>B</option>
								<option value="O"<?php if ($this->_tpl_vars['value']['bloodType'] == 'O'): ?> selected<?php endif; ?>>O</option>
								<option value="AB"<?php if ($this->_tpl_vars['value']['bloodType'] == 'AB'): ?> selected<?php endif; ?>>AB</option>
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
							<input type="text" name="sendForm[1][emergencyName_Kanji]" class="w100p" value="<?php echo $this->_tpl_vars['value']['emergencyName_Kanji']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">氏名（カナ）</th>
						<td>
							<input type="text" name="sendForm[1][emergencyName_Kana]" class="w100p" value="<?php echo $this->_tpl_vars['value']['emergencyName_Kana']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w125">続柄</th>
						<td>
							<select name="sendForm[1][relationship]" class="w63">
								<option value="">選択</option>
								<option value="1"<?php if ($this->_tpl_vars['value']['relationship'] == 1): ?> selected<?php endif; ?>>妻</option>
								<option value="2"<?php if ($this->_tpl_vars['value']['relationship'] == 2): ?> selected<?php endif; ?>>夫</option>
								<option value="3"<?php if ($this->_tpl_vars['value']['relationship'] == 3): ?> selected<?php endif; ?>>子</option>
								<option value="4"<?php if ($this->_tpl_vars['value']['relationship'] == 4): ?> selected<?php endif; ?>>孫</option>
								<option value="5"<?php if ($this->_tpl_vars['value']['relationship'] == 5): ?> selected<?php endif; ?>>実兄</option>
								<option value="6"<?php if ($this->_tpl_vars['value']['relationship'] == 6): ?> selected<?php endif; ?>>実弟</option>
								<option value="7"<?php if ($this->_tpl_vars['value']['relationship'] == 7): ?> selected<?php endif; ?>>実姉</option>
								<option value="8"<?php if ($this->_tpl_vars['value']['relationship'] == 8): ?> selected<?php endif; ?>>実妹</option>
								<option value="9"<?php if ($this->_tpl_vars['value']['relationship'] == 9): ?> selected<?php endif; ?>>祖父</option>
								<option value="10"<?php if ($this->_tpl_vars['value']['relationship'] == 10): ?> selected<?php endif; ?>>祖母</option>
								<option value="11"<?php if ($this->_tpl_vars['value']['relationship'] == 11): ?> selected<?php endif; ?>>曽祖父</option>
								<option value="12"<?php if ($this->_tpl_vars['value']['relationship'] == 12): ?> selected<?php endif; ?>>曾祖母</option>
								<option value="13"<?php if ($this->_tpl_vars['value']['relationship'] == 13): ?> selected<?php endif; ?>>従兄弟</option>
								<option value="14"<?php if ($this->_tpl_vars['value']['relationship'] == 14): ?> selected<?php endif; ?>>叔父</option>
								<option value="15"<?php if ($this->_tpl_vars['value']['relationship'] == 15): ?> selected<?php endif; ?>>叔母</option>
								<option value="16"<?php if ($this->_tpl_vars['value']['relationship'] == 16): ?> selected<?php endif; ?>>義父</option>
								<option value="17"<?php if ($this->_tpl_vars['value']['relationship'] == 17): ?> selected<?php endif; ?>>義母</option>
								<option value="18"<?php if ($this->_tpl_vars['value']['relationship'] == 18): ?> selected<?php endif; ?>>義兄</option>
								<option value="19"<?php if ($this->_tpl_vars['value']['relationship'] == 19): ?> selected<?php endif; ?>>義弟</option>
								<option value="20"<?php if ($this->_tpl_vars['value']['relationship'] == 20): ?> selected<?php endif; ?>>義姉</option>
								<option value="21"<?php if ($this->_tpl_vars['value']['relationship'] == 21): ?> selected<?php endif; ?>>義妹</option>
								<option value="22"<?php if ($this->_tpl_vars['value']['relationship'] == 22): ?> selected<?php endif; ?>>義祖父</option>
								<option value="23"<?php if ($this->_tpl_vars['value']['relationship'] == 23): ?> selected<?php endif; ?>>義祖母</option>
								<option value="24"<?php if ($this->_tpl_vars['value']['relationship'] == 24): ?> selected<?php endif; ?>>義叔父</option>
								<option value="25"<?php if ($this->_tpl_vars['value']['relationship'] == 25): ?> selected<?php endif; ?>>義叔母</option>
								<option value="26"<?php if ($this->_tpl_vars['value']['relationship'] == 26): ?> selected<?php endif; ?>>義従兄弟</option>
								<option value="27"<?php if ($this->_tpl_vars['value']['relationship'] == 27): ?> selected<?php endif; ?>>知人／友人</option>
								<option value="28"<?php if ($this->_tpl_vars['value']['relationship'] == 28): ?> selected<?php endif; ?>>同居人</option>
								<option value="29"<?php if ($this->_tpl_vars['value']['relationship'] == 29): ?> selected<?php endif; ?>>その他</option>
							</select>
						</td>
					</tr>
					<tr>
						<th class="w125">電話番号</th>
						<td>
							<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberAreaCode]" placeholder="000" value="<?php echo $this->_tpl_vars['value']['emergencyPhoneNumberAreaCode']; ?>
">
							ー
							<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberFirstHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['emergencyPhoneNumberFirstHalf']; ?>
">
							ー
							<input type="text" class="w53" name="sendForm[1][emergencyPhoneNumberLastHalf]" placeholder="0000" value="<?php echo $this->_tpl_vars['value']['emergencyPhoneNumberLastHalf']; ?>
">
						</td>
					</tr>
				</table>
				<table class="tableA noTtl">
					<tr>
						<th class="w125">備考</th>
						<td class="bdt">
							<textarea name="sendForm[1][remarks]" rows="8" class="w100p"><?php echo $this->_tpl_vars['value']['remarks']; ?>
</textarea>
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
										<?php $_from = $this->_tpl_vars['checkupYearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
											<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['value']['registrationYear'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
年</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
									<select name="sendForm[1][registrationMonth]" class="w72">
										<option value="">月選択</option>
										<option value="1"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 1): ?> selected<?php endif; ?>>1月</option>
										<option value="2"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 2): ?> selected<?php endif; ?>>2月</option>
										<option value="3"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 3): ?> selected<?php endif; ?>>3月</option>
										<option value="4"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 4): ?> selected<?php endif; ?>>4月</option>
										<option value="5"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 5): ?> selected<?php endif; ?>>5月</option>
										<option value="6"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 6): ?> selected<?php endif; ?>>6月</option>
										<option value="7"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 7): ?> selected<?php endif; ?>>7月</option>
										<option value="8"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 8): ?> selected<?php endif; ?>>8月</option>
										<option value="9"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 9): ?> selected<?php endif; ?>>9月</option>
										<option value="10"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 10): ?> selected<?php endif; ?>>10月</option>
										<option value="11"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 11): ?> selected<?php endif; ?>>11月</option>
										<option value="12"<?php if ($this->_tpl_vars['value']['registrationMonth'] == 12): ?> selected<?php endif; ?>>12月</option>
									</select>
									<select name="sendForm[1][registrationDay]" class="w72">
										<option value="">日選択</option>
										<option value="1"<?php if ($this->_tpl_vars['value']['registrationDay'] == 1): ?> selected<?php endif; ?>>1日</option>
										<option value="2"<?php if ($this->_tpl_vars['value']['registrationDay'] == 2): ?> selected<?php endif; ?>>2日</option>
										<option value="3"<?php if ($this->_tpl_vars['value']['registrationDay'] == 3): ?> selected<?php endif; ?>>3日</option>
										<option value="4"<?php if ($this->_tpl_vars['value']['registrationDay'] == 4): ?> selected<?php endif; ?>>4日</option>
										<option value="5"<?php if ($this->_tpl_vars['value']['registrationDay'] == 5): ?> selected<?php endif; ?>>5日</option>
										<option value="6"<?php if ($this->_tpl_vars['value']['registrationDay'] == 6): ?> selected<?php endif; ?>>6日</option>
										<option value="7"<?php if ($this->_tpl_vars['value']['registrationDay'] == 7): ?> selected<?php endif; ?>>7日</option>
										<option value="8"<?php if ($this->_tpl_vars['value']['registrationDay'] == 8): ?> selected<?php endif; ?>>8日</option>
										<option value="9"<?php if ($this->_tpl_vars['value']['registrationDay'] == 9): ?> selected<?php endif; ?>>9日</option>
										<option value="10"<?php if ($this->_tpl_vars['value']['registrationDay'] == 10): ?> selected<?php endif; ?>>10日</option>
										<option value="11"<?php if ($this->_tpl_vars['value']['registrationDay'] == 11): ?> selected<?php endif; ?>>11日</option>
										<option value="12"<?php if ($this->_tpl_vars['value']['registrationDay'] == 12): ?> selected<?php endif; ?>>12日</option>
										<option value="13"<?php if ($this->_tpl_vars['value']['registrationDay'] == 13): ?> selected<?php endif; ?>>13日</option>
										<option value="14"<?php if ($this->_tpl_vars['value']['registrationDay'] == 14): ?> selected<?php endif; ?>>14日</option>
										<option value="15"<?php if ($this->_tpl_vars['value']['registrationDay'] == 15): ?> selected<?php endif; ?>>15日</option>
										<option value="16"<?php if ($this->_tpl_vars['value']['registrationDay'] == 16): ?> selected<?php endif; ?>>16日</option>
										<option value="17"<?php if ($this->_tpl_vars['value']['registrationDay'] == 17): ?> selected<?php endif; ?>>17日</option>
										<option value="18"<?php if ($this->_tpl_vars['value']['registrationDay'] == 18): ?> selected<?php endif; ?>>18日</option>
										<option value="19"<?php if ($this->_tpl_vars['value']['registrationDay'] == 19): ?> selected<?php endif; ?>>19日</option>
										<option value="20"<?php if ($this->_tpl_vars['value']['registrationDay'] == 20): ?> selected<?php endif; ?>>20日</option>
										<option value="21"<?php if ($this->_tpl_vars['value']['registrationDay'] == 21): ?> selected<?php endif; ?>>21日</option>
										<option value="22"<?php if ($this->_tpl_vars['value']['registrationDay'] == 22): ?> selected<?php endif; ?>>22日</option>
										<option value="23"<?php if ($this->_tpl_vars['value']['registrationDay'] == 23): ?> selected<?php endif; ?>>23日</option>
										<option value="24"<?php if ($this->_tpl_vars['value']['registrationDay'] == 24): ?> selected<?php endif; ?>>24日</option>
										<option value="25"<?php if ($this->_tpl_vars['value']['registrationDay'] == 25): ?> selected<?php endif; ?>>25日</option>
										<option value="26"<?php if ($this->_tpl_vars['value']['registrationDay'] == 26): ?> selected<?php endif; ?>>26日</option>
										<option value="27"<?php if ($this->_tpl_vars['value']['registrationDay'] == 27): ?> selected<?php endif; ?>>27日</option>
										<option value="28"<?php if ($this->_tpl_vars['value']['registrationDay'] == 28): ?> selected<?php endif; ?>>28日</option>
										<option value="29"<?php if ($this->_tpl_vars['value']['registrationDay'] == 29): ?> selected<?php endif; ?>>29日</option>
										<option value="30"<?php if ($this->_tpl_vars['value']['registrationDay'] == 30): ?> selected<?php endif; ?>>30日</option>
										<option value="31"<?php if ($this->_tpl_vars['value']['registrationDay'] == 31): ?> selected<?php endif; ?>>31日</option>
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
								<?php $_from = $this->_tpl_vars['selectStaff']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
									<option value="<?php echo $this->_tpl_vars['value']['staffID']; ?>
"<?php if ($this->_tpl_vars['value']['representative'] == $this->_tpl_vars['value']['staffID']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
								<?php endforeach; endif; unset($_from); ?>
							</select>
						</td>
					</tr>
					<tr>
						<th class="w105">労災組合名</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][workersUnion]" value="<?php echo $this->_tpl_vars['value']['workersUnion']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w105">労災番号</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][compensationInsuranceNumber]" value="<?php echo $this->_tpl_vars['value']['compensationInsuranceNumber']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w105">健康保険名</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][nationalHealthInsurance]" value="<?php echo $this->_tpl_vars['value']['nationalHealthInsurance']; ?>
">
						</td>
					</tr>
					<tr>
						<th class="w105">健康保険番号</th>
						<td>
							<input type="text" class="w100p" name="sendForm[1][nationalHealthInsuranceNumber]" value="<?php echo $this->_tpl_vars['value']['nationalHealthInsuranceNumber']; ?>
">
						</td>
					</tr>
					<?php if ($this->_tpl_vars['view_flg4'] == 1): ?>
						<tr>
							<th class="w105">年金保険種類</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][pensionInsurance]" value="<?php echo $this->_tpl_vars['value']['pensionInsurance']; ?>
">
							</td>
						</tr>
						<tr>
							<th class="w105">年金番号</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][pensionNumber]" value="<?php echo $this->_tpl_vars['value']['pensionNumber']; ?>
">
							</td>
						</tr>
						<tr>
							<th class="w105">雇用保険番号</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][unemploymentInsuranceNumber]" value="<?php echo $this->_tpl_vars['value']['unemploymentInsuranceNumber']; ?>
">
							</td>
						</tr>
						<tr>
							<th class="w105">足場作業者番号</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][scaffoldWorkersNumber]" value="<?php echo $this->_tpl_vars['value']['scaffoldWorkersNumber']; ?>
">
							</td>
						</tr>
					<?php else: ?>
						<input type="hidden" name="sendForm[1][pensionInsurance]" value="<?php echo $this->_tpl_vars['value']['pensionInsurance']; ?>
">
						<input type="hidden" name="sendForm[1][pensionNumber]" value="<?php echo $this->_tpl_vars['value']['pensionNumber']; ?>
">
						<input type="hidden" name="sendForm[1][unemploymentInsuranceNumber]" value="<?php echo $this->_tpl_vars['value']['unemploymentInsuranceNumber']; ?>
">
						<input type="hidden" name="sendForm[1][scaffoldWorkersNumber]" value="<?php echo $this->_tpl_vars['value']['scaffoldWorkersNumber']; ?>
">
					<?php endif; ?>
					<?php if ($this->_tpl_vars['view_flg6'] == 1): ?>
						<tr>
							<th class="w105">その他 1</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][other1]" value="<?php echo $this->_tpl_vars['value']['other1']; ?>
">
							</td>
						</tr>
						<tr>
							<th class="w105">その他 2</th>
							<td>
								<input type="text" class="w100p" name="sendForm[1][other2]" value="<?php echo $this->_tpl_vars['value']['other2']; ?>
">
							</td>
						</tr>
					<?php else: ?>
						<input type="hidden" name="sendForm[1][other1]" value="<?php echo $this->_tpl_vars['value']['other1']; ?>
">
						<input type="hidden" name="sendForm[1][other2]" value="<?php echo $this->_tpl_vars['value']['other2']; ?>
">
					<?php endif; ?>
				</table>
				<table class="tableA noTtl">
					<tr>
						<th class="w105">健康診断 <br>最新診断日</th>
						<td colspan="3" class="bdt">
							<ul class="dateSortingArea horizontal">
								<li>
									<select name="sendForm[1][latestCheckupYear]" class="w105">
										<option value="">年選択</option>
										<?php $_from = $this->_tpl_vars['checkupYearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
											<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['value']['latestCheckupYear'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
年</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
									<select name="sendForm[1][latestCheckupMonth]" class="w72">
										<option value="">月選択</option>
										<option value="1"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 1): ?> selected<?php endif; ?>>1月</option>
										<option value="2"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 2): ?> selected<?php endif; ?>>2月</option>
										<option value="3"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 3): ?> selected<?php endif; ?>>3月</option>
										<option value="4"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 4): ?> selected<?php endif; ?>>4月</option>
										<option value="5"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 5): ?> selected<?php endif; ?>>5月</option>
										<option value="6"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 6): ?> selected<?php endif; ?>>6月</option>
										<option value="7"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 7): ?> selected<?php endif; ?>>7月</option>
										<option value="8"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 8): ?> selected<?php endif; ?>>8月</option>
										<option value="9"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 9): ?> selected<?php endif; ?>>9月</option>
										<option value="10"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 10): ?> selected<?php endif; ?>>10月</option>
										<option value="11"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 11): ?> selected<?php endif; ?>>11月</option>
										<option value="12"<?php if ($this->_tpl_vars['value']['latestCheckupMonth'] == 12): ?> selected<?php endif; ?>>12月</option>
									</select>
									<select name="sendForm[1][latestCheckupDay]" class="w72">
										<option value="">日選択</option>
										<option value="1"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 1): ?> selected<?php endif; ?>>1日</option>
										<option value="2"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 2): ?> selected<?php endif; ?>>2日</option>
										<option value="3"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 3): ?> selected<?php endif; ?>>3日</option>
										<option value="4"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 4): ?> selected<?php endif; ?>>4日</option>
										<option value="5"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 5): ?> selected<?php endif; ?>>5日</option>
										<option value="6"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 6): ?> selected<?php endif; ?>>6日</option>
										<option value="7"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 7): ?> selected<?php endif; ?>>7日</option>
										<option value="8"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 8): ?> selected<?php endif; ?>>8日</option>
										<option value="9"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 9): ?> selected<?php endif; ?>>9日</option>
										<option value="10"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 10): ?> selected<?php endif; ?>>10日</option>
										<option value="11"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 11): ?> selected<?php endif; ?>>11日</option>
										<option value="12"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 12): ?> selected<?php endif; ?>>12日</option>
										<option value="13"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 13): ?> selected<?php endif; ?>>13日</option>
										<option value="14"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 14): ?> selected<?php endif; ?>>14日</option>
										<option value="15"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 15): ?> selected<?php endif; ?>>15日</option>
										<option value="16"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 16): ?> selected<?php endif; ?>>16日</option>
										<option value="17"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 17): ?> selected<?php endif; ?>>17日</option>
										<option value="18"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 18): ?> selected<?php endif; ?>>18日</option>
										<option value="19"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 19): ?> selected<?php endif; ?>>19日</option>
										<option value="20"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 20): ?> selected<?php endif; ?>>20日</option>
										<option value="21"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 21): ?> selected<?php endif; ?>>21日</option>
										<option value="22"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 22): ?> selected<?php endif; ?>>22日</option>
										<option value="23"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 23): ?> selected<?php endif; ?>>23日</option>
										<option value="24"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 24): ?> selected<?php endif; ?>>24日</option>
										<option value="25"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 25): ?> selected<?php endif; ?>>25日</option>
										<option value="26"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 26): ?> selected<?php endif; ?>>26日</option>
										<option value="27"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 27): ?> selected<?php endif; ?>>27日</option>
										<option value="28"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 28): ?> selected<?php endif; ?>>28日</option>
										<option value="29"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 29): ?> selected<?php endif; ?>>29日</option>
										<option value="30"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 30): ?> selected<?php endif; ?>>30日</option>
										<option value="31"<?php if ($this->_tpl_vars['value']['latestCheckupDay'] == 31): ?> selected<?php endif; ?>>31日</option>
									</select>
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>血圧（上）</th>
						<td>
							<input type="text" name="sendForm[1][bloodPressureHigher]" class="w100p" value="<?php echo $this->_tpl_vars['value']['bloodPressureHigher']; ?>
">
						</td>
						<th class="w80">血圧（下）</th>
						<td>
							<input type="text" name="sendForm[1][bloodPressureLower]" class="w100p" value="<?php echo $this->_tpl_vars['value']['bloodPressureLower']; ?>
">
						</td>
					</tr>
					<tr>
						<th>その他</th>
						<td colspan="3">
							<input type="text" name="sendForm[1][other]" value="<?php echo $this->_tpl_vars['value']['other']; ?>
">
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
						<td><input type="text" name="sendForm[1][constructionType1_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType1_1']; ?>
"></td>
						<td><input type="text" name="sendForm[1][constructionType1_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType1_2']; ?>
"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience1]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience1']; ?>
">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType2_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType2_1']; ?>
"></td>
						<td><input type="text" name="sendForm[1][constructionType2_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType2_2']; ?>
"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience2]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience2']; ?>
">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType3_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType3_1']; ?>
"></td>
						<td><input type="text" name="sendForm[1][constructionType3_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType3_2']; ?>
"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience3]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience3']; ?>
">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType4_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType4_1']; ?>
"></td>
						<td><input type="text" name="sendForm[1][constructionType4_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType4_2']; ?>
"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience4]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience4']; ?>
">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType5_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType5_1']; ?>
"></td>
						<td><input type="text" name="sendForm[1][constructionType5_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType5_2']; ?>
"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience5]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience5']; ?>
">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType6_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType6_1']; ?>
"></td>
						<td><input type="text" name="sendForm[1][constructionType6_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType6_2']; ?>
"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience6]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience6']; ?>
">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType7_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType7_1']; ?>
"></td>
						<td><input type="text" name="sendForm[1][constructionType7_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType7_2']; ?>
"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience7]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience7']; ?>
">年</td>
					</tr>
					<tr>
						<td><input type="text" name="sendForm[1][constructionType8_1]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType8_1']; ?>
"></td>
						<td><input type="text" name="sendForm[1][constructionType8_2]" class="w100p" value="<?php echo $this->_tpl_vars['value']['constructionType8_2']; ?>
"></td>
						<td><input type="text" name="sendForm[1][yearsOfExperience8]" class="mr5 w120" value="<?php echo $this->_tpl_vars['value']['yearsOfExperience8']; ?>
">年</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>