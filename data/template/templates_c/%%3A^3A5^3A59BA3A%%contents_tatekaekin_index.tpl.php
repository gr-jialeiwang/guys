<?php /* Smarty version 2.6.26, created on 2016-10-14 14:11:13
         compiled from client/tatekae/contents_tatekaekin_index.tpl */ ?>
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

		<form name="form2" action="?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
<?php if ($this->_tpl_vars['tatekaeId'] != ""): ?>&tatekaeId=<?php echo $this->_tpl_vars['selectBase']['tatekaeId']; ?>
<?php endif; ?>" method="POST">
			<input type="hidden" name="mode" id="mode2" value="<?php echo $this->_tpl_vars['editModeBase']; ?>
">
			<input type="hidden" name="codeNumber" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
			<input type="hidden" name="officeCode" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
			<input type="hidden" name="tatekaeId" value="<?php echo $this->_tpl_vars['selectBase']['tatekaeId']; ?>
">
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
						<li><a href="../worker/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">作業員情報</a></li>
						<li class="currentLink rightEnd"><a href="../tatekae/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
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
			<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>

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
													<?php $_from = $this->_tpl_vars['checkupYearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
														<option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['selectBase']['yearStart'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
年</option>
													<?php endforeach; endif; unset($_from); ?>
												</select>
												<select name="monthStart" class="w72">
													<option value="">月選択</option>
													<option value="1"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 1): ?> selected<?php endif; ?>>1月</option>
													<option value="2"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 2): ?> selected<?php endif; ?>>2月</option>
													<option value="3"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 3): ?> selected<?php endif; ?>>3月</option>
													<option value="4"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 4): ?> selected<?php endif; ?>>4月</option>
													<option value="5"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 5): ?> selected<?php endif; ?>>5月</option>
													<option value="6"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 6): ?> selected<?php endif; ?>>6月</option>
													<option value="7"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 7): ?> selected<?php endif; ?>>7月</option>
													<option value="8"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 8): ?> selected<?php endif; ?>>8月</option>
													<option value="9"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 9): ?> selected<?php endif; ?>>9月</option>
													<option value="10"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 10): ?> selected<?php endif; ?>>10月</option>
													<option value="11"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 11): ?> selected<?php endif; ?>>11月</option>
													<option value="12"<?php if ($this->_tpl_vars['selectBase']['monthStart'] == 12): ?> selected<?php endif; ?>>12月</option>
												</select>
												<select name="dayStart" class="w72">
													<option value="">日選択</option>
													<option value="1"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 1): ?> selected<?php endif; ?>>1日</option>
													<option value="2"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 2): ?> selected<?php endif; ?>>2日</option>
													<option value="3"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 3): ?> selected<?php endif; ?>>3日</option>
													<option value="4"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 4): ?> selected<?php endif; ?>>4日</option>
													<option value="5"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 5): ?> selected<?php endif; ?>>5日</option>
													<option value="6"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 6): ?> selected<?php endif; ?>>6日</option>
													<option value="7"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 7): ?> selected<?php endif; ?>>7日</option>
													<option value="8"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 8): ?> selected<?php endif; ?>>8日</option>
													<option value="9"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 9): ?> selected<?php endif; ?>>9日</option>
													<option value="10"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 10): ?> selected<?php endif; ?>>10日</option>
													<option value="11"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 11): ?> selected<?php endif; ?>>11日</option>
													<option value="12"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 12): ?> selected<?php endif; ?>>12日</option>
													<option value="13"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 13): ?> selected<?php endif; ?>>13日</option>
													<option value="14"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 14): ?> selected<?php endif; ?>>14日</option>
													<option value="15"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 15): ?> selected<?php endif; ?>>15日</option>
													<option value="16"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 16): ?> selected<?php endif; ?>>16日</option>
													<option value="17"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 17): ?> selected<?php endif; ?>>17日</option>
													<option value="18"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 18): ?> selected<?php endif; ?>>18日</option>
													<option value="19"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 19): ?> selected<?php endif; ?>>19日</option>
													<option value="20"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 20): ?> selected<?php endif; ?>>20日</option>
													<option value="21"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 21): ?> selected<?php endif; ?>>21日</option>
													<option value="22"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 22): ?> selected<?php endif; ?>>22日</option>
													<option value="23"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 23): ?> selected<?php endif; ?>>23日</option>
													<option value="24"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 24): ?> selected<?php endif; ?>>24日</option>
													<option value="25"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 25): ?> selected<?php endif; ?>>25日</option>
													<option value="26"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 26): ?> selected<?php endif; ?>>26日</option>
													<option value="27"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 27): ?> selected<?php endif; ?>>27日</option>
													<option value="28"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 28): ?> selected<?php endif; ?>>28日</option>
													<option value="29"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 29): ?> selected<?php endif; ?>>29日</option>
													<option value="30"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 30): ?> selected<?php endif; ?>>30日</option>
													<option value="31"<?php if ($this->_tpl_vars['selectBase']['dayStart'] == 31): ?> selected<?php endif; ?>>31日</option>
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
									<?php $_from = $this->_tpl_vars['selectMaster']['cashAdvance']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
										<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['cashAdvance'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
							</td>
							<th class="pr0 w60">金額</th>
							<td>
								<input type="text" name="payment" class="w230 mr7" value="<?php echo $this->_tpl_vars['selectBase']['payment']; ?>
">円
							</td>
							<th class="pr0 w70">出金科目</th>
							<td>
								<select name="numberOfPayment" class="w238">
									<option>選択</option>
									<?php $_from = $this->_tpl_vars['selectMaster']['numberOfPayment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
										<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['numberOfPayment'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
							</td>
						</tr>
						<tr>
							<th class="pr0 w70">備考・詳細</th>
							<td colspan="5">
								<input type="text" name="remarkAndDetail" class="w100p" value="<?php echo $this->_tpl_vars['selectBase']['remarkAndDetail']; ?>
">
							</td>
						</tr>
					</table>
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