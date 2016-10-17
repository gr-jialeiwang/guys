<?php /* Smarty version 2.6.26, created on 2016-10-15 13:18:50
         compiled from company/contents_index_index.tpl */ ?>
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
		<form name="form1" action="?" method="POST">
			<input type="hidden" name="mode" id="mode" value="<?php echo $this->_tpl_vars['editMode']; ?>
">
			<input type="hidden" name="FN_codeNumberOrg" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
			<input type="hidden" name="FN_codeNumberDel" value="">
			<section class="pageTop pb20 mb30">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="/">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>企業名 新規登録/編集</h2>
						</div>
						<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
							<div class="boxRight disp_none" id="company_del_single">
								<p class="textAnchor resetClientData"><a href="#" onclick="company_del_single();">この取引先を削除する</a></p>
							</div>
						<?php endif; ?>
					</div>
					<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
						<table class="tableA">
							<tr>
								<th class="w130">正式名称</th>
								<td>
									<input type="text" name="officialName" class="w335" value="<?php echo $this->_tpl_vars['arrForm']['officialName']; ?>
">
								</td>
								<th class="w70">コードNo</th>
								<td>
									<input type="text" id="codeNumberText" class="w145" name="codeNumber" value="<?php echo $this->_tpl_vars['arrForm']['codeNumber']; ?>
">
								</td>
								<th>読みカナ分類</th>
								<td>
									<select name="constructionStates" class="w154">
										<option value="ア"<?php if ($this->_tpl_vars['arrForm']['constructionStates'] == "ア"): ?> selected<?php endif; ?>>ア</option>
										<option value="カ"<?php if ($this->_tpl_vars['arrForm']['constructionStates'] == "カ"): ?> selected<?php endif; ?>>カ</option>
										<option value="サ"<?php if ($this->_tpl_vars['arrForm']['constructionStates'] == "サ"): ?> selected<?php endif; ?>>サ</option>
										<option value="タ"<?php if ($this->_tpl_vars['arrForm']['constructionStates'] == "タ"): ?> selected<?php endif; ?>>タ</option>
										<option value="ナ"<?php if ($this->_tpl_vars['arrForm']['constructionStates'] == "ナ"): ?> selected<?php endif; ?>>ナ</option>
										<option value="ハ"<?php if ($this->_tpl_vars['arrForm']['constructionStates'] == "ハ"): ?> selected<?php endif; ?>>ハ</option>
										<option value="マ"<?php if ($this->_tpl_vars['arrForm']['constructionStates'] == "マ"): ?> selected<?php endif; ?>>マ</option>
										<option value="ヤ"<?php if ($this->_tpl_vars['arrForm']['constructionStates'] == "ヤ"): ?> selected<?php endif; ?>>ヤ</option>
										<option value="ラ"<?php if ($this->_tpl_vars['arrForm']['constructionStates'] == "ラ"): ?> selected<?php endif; ?>>ラ</option>
										<option value="ワ"<?php if ($this->_tpl_vars['arrForm']['constructionStates'] == "ワ"): ?> selected<?php endif; ?>>ワ</option>
									</select>
								</td>
							</tr>
						</table>
						<table class="tableA">
							<tr>
								<th class="w130">システム内 表示社名</th>
								<td class="w238"><input type="text" name="clientNameInSystem" class="w234" value="<?php echo $this->_tpl_vars['arrForm']['clientNameInSystem']; ?>
"></td>
								<th class="w45">備考</th>
								<td colspan="3"><input type="text" name="note" class="w100p" value="<?php echo $this->_tpl_vars['arrForm']['note']; ?>
"></td>
							</tr>
						</table>
						<table class="tableA">
							<tr>
								<td class="txtCenter"><button class="buttonA buttonALarge" type="submit">上記で登録(修正)する</button></td>
							</tr>
						</table>
					<?php endif; ?>
				</div>
			</section>
		</form>
		<form name="form2" action="?" method="GET">
			<div class="container">
				<div class="searchFocusArea">
					<table class="tableA">
						<tr>
							<th>企業名検索</th>
							<td>
								<input type="text" name="searchClientName" class="inputType01 w238 mr7" value="<?php echo $this->_tpl_vars['searchClientName']; ?>
"><button class="btnSearch" type="submit">検索</button>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</form>
		<div class="container">

			<div class="headingB clearfix">
				<h3 class="boxLeft">登録済み企業名</h3>
				<div class="boxRight">
					<div class="pagination">
						<p class="resultStates"><?php echo $this->_tpl_vars['countSelectQuery']; ?>
件中<?php echo $this->_tpl_vars['pagingArr']['start_view']; ?>
〜<?php echo $this->_tpl_vars['pagingArr']['end_view']; ?>
件</p>
						<ul class="paging">
							<?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['rev'] != ""): ?>
								<li class="toFirstPage"><a href="?page=1<?php if ($this->_tpl_vars['searchClientName'] != ""): ?>&searchClientName=<?php echo $this->_tpl_vars['searchClientName']; ?>
<?php endif; ?>" >最初へ</a></li>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['rev'] != ""): ?>
								<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['rev']; ?>
<?php if ($this->_tpl_vars['searchClientName'] != ""): ?>&searchClientName=<?php echo $this->_tpl_vars['searchClientName']; ?>
<?php endif; ?>" >&lt;&lt;</a></li>
							<?php endif; ?>
							<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)$this->_tpl_vars['pagingArr']['p_start'];
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['pagingArr']['p_end_plus']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
								<?php if ($this->_tpl_vars['pageNo'] == $this->_sections['i']['index']): ?>
									<li class="current"><?php echo $this->_sections['i']['index']; ?>
</li>
								<?php else: ?>
									<li><a href="?page=<?php echo $this->_sections['i']['index']; ?>
<?php if ($this->_tpl_vars['searchClientName'] != ""): ?>&searchClientName=<?php echo $this->_tpl_vars['searchClientName']; ?>
<?php endif; ?>"><?php echo $this->_sections['i']['index']; ?>
</a></li>
								<?php endif; ?>
							<?php endfor; endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['next'] != ""): ?>
								<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['next']; ?>
<?php if ($this->_tpl_vars['searchClientName'] != ""): ?>&searchClientName=<?php echo $this->_tpl_vars['searchClientName']; ?>
<?php endif; ?>" >&gt;&gt;</a></li>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['next'] != ""): ?>
								<li class="toLastPage"><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['p_cnt']; ?>
<?php if ($this->_tpl_vars['searchClientName'] != ""): ?>&searchClientName=<?php echo $this->_tpl_vars['searchClientName']; ?>
<?php endif; ?>" >最後へ</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<table class="tableB">
				<thead>
					<tr>
						<th class="w75">登録日<br>最終更新日</th>
						<th class="w75">登録者<br>最終更新者</th>
						<th class="w66">コードNo</th>
						<th class="w238">正式名称</th>
						<th class="w154">システム内 表示社名</th>
						<th class="w238">備考</th>
						<th class="w28">編集</th>
						<th class="w28">削除</th>
					</tr>
				</thead>
			</table>
			<ul class="sortable">
				<?php $_from = $this->_tpl_vars['select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
					<li id="<?php echo $this->_foreach['cnt']['iteration']; ?>
">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w75 txtCenter">
										<?php echo $this->_tpl_vars['value']['regist_date_format']; ?>
<br><?php echo $this->_tpl_vars['value']['update_date_format']; ?>

										<input type="hidden" id="FN_codeNumber_<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
" value="<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
">
										<input type="hidden" id="FN_officialName_<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
" value="<?php echo $this->_tpl_vars['value']['officialName']; ?>
">
										<input type="hidden" id="FN_constructionStates_<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
" value="<?php echo $this->_tpl_vars['value']['constructionStates']; ?>
">
										<input type="hidden" id="FN_clientNameInSystem_<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
" value="<?php echo $this->_tpl_vars['value']['clientNameInSystem']; ?>
">
										<input type="hidden" id="FN_note_<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
" value="<?php echo $this->_tpl_vars['value']['note']; ?>
">
									</td>
									<td class="w75 txtCenter"><?php echo $this->_tpl_vars['value']['regist_name']; ?>
<br><?php echo $this->_tpl_vars['value']['update_name']; ?>
</td>
									<td class="w66 txtCenter"><?php echo $this->_tpl_vars['value']['codeNumber']; ?>
</td>
									<td class="w238"><?php echo $this->_tpl_vars['value']['officialName']; ?>
</td>
									<td class="w154"><?php echo $this->_tpl_vars['value']['clientNameInSystem']; ?>
</td>
									<td class="w238"><?php echo $this->_tpl_vars['value']['note']; ?>
</td>
									<td class="w28 txtCenter">
										<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
											<p class="iconLink"><a href="#" onclick="company_list_edit('<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
');"><img src="/img/common/icon_detail02.png" height="28" width="28" alt="編集"></a></p>
										<?php endif; ?>
									</td>
									<td class="w28 txtCenter">
										<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
											<p class="iconLink"><a href="#" onclick="company_del('<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
');"><img src="/img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
										<?php endif; ?>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			<div class="clearfix pt10">
				<div class="boxRight">
					<div class="pagination">
						<p class="resultStates"><?php echo $this->_tpl_vars['countSelectQuery']; ?>
件中<?php echo $this->_tpl_vars['pagingArr']['start_view']; ?>
〜<?php echo $this->_tpl_vars['pagingArr']['end_view']; ?>
件</p>
						<ul class="paging">
							<?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['rev'] != ""): ?>
								<li class="toFirstPage"><a href="?page=1<?php if ($this->_tpl_vars['searchClientName'] != ""): ?>&searchClientName=<?php echo $this->_tpl_vars['searchClientName']; ?>
<?php endif; ?>" >最初へ</a></li>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['rev'] != ""): ?>
								<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['rev']; ?>
<?php if ($this->_tpl_vars['searchClientName'] != ""): ?>&searchClientName=<?php echo $this->_tpl_vars['searchClientName']; ?>
<?php endif; ?>" >&lt;&lt;</a></li>
							<?php endif; ?>
							<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)$this->_tpl_vars['pagingArr']['p_start'];
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['pagingArr']['p_end_plus']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
								<?php if ($this->_tpl_vars['pageNo'] == $this->_sections['i']['index']): ?>
									<li class="current"><?php echo $this->_sections['i']['index']; ?>
</li>
								<?php else: ?>
									<li><a href="?page=<?php echo $this->_sections['i']['index']; ?>
<?php if ($this->_tpl_vars['searchClientName'] != ""): ?>&searchClientName=<?php echo $this->_tpl_vars['searchClientName']; ?>
<?php endif; ?>"><?php echo $this->_sections['i']['index']; ?>
</a></li>
								<?php endif; ?>
							<?php endfor; endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['next'] != ""): ?>
								<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['next']; ?>
<?php if ($this->_tpl_vars['searchClientName'] != ""): ?>&searchClientName=<?php echo $this->_tpl_vars['searchClientName']; ?>
<?php endif; ?>" >&gt;&gt;</a></li>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['next'] != ""): ?>
								<li class="toLastPage"><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['p_cnt']; ?>
<?php if ($this->_tpl_vars['searchClientName'] != ""): ?>&searchClientName=<?php echo $this->_tpl_vars['searchClientName']; ?>
<?php endif; ?>" >最後へ</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>