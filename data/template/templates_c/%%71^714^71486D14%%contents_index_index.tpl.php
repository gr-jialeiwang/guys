<?php /* Smarty version 2.6.26, created on 2016-10-14 11:48:46
         compiled from client_search/contents_index_index.tpl */ ?>
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
		<section class="pageTop mb30">
			<div class="container">
				<div class="pageTitle clearfix">
					<div class="boxLeft mr8">
						<div class="btnBack"><a href="/">戻る</a></div>
					</div>
					<div class="boxLeft">
						<h2>取引先／検索結果</h2>
					</div>
				</div>
				<form name="form1" action="?searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
" method="POST">
					<input type="hidden" name="mode" id="mode" value="filter" />





                    <table class="tableA">
                        <tr>
                            <th class="w100">取引ステータス</th>
                            <td class="w125" >
	                            <select name="searchState" class="w210">
	                                <option value="">選択しない</option>
	                                <option value="1"<?php if ($this->_tpl_vars['searchState'] == 1): ?> selected<?php endif; ?>>継続中</option>
	                                <option value="2"<?php if ($this->_tpl_vars['searchState'] == 2): ?> selected<?php endif; ?>>停止</option>
	                            </select>
                            </td>
                            <th class="w100">取引タイプ</th>
                            <td class="w125" >
                                <select name="searchType" class="w220">
                                    <option value="">選択しない</option>
                                    <option value="1"<?php if ($this->_tpl_vars['searchType'] == 1): ?> selected<?php endif; ?>>継続取引</option>
                                    <option value="2"<?php if ($this->_tpl_vars['searchType'] == 2): ?> selected<?php endif; ?>>単発取引</option>
                                    <option value="3"<?php if ($this->_tpl_vars['searchType'] == 3): ?> selected<?php endif; ?>>外注先</option>
                                </select>
                            </td>
                            <td class="bdl txtCenter">
                                <button class="buttonA" type="submit">検索</button>
                            </td>
                        </tr>
                    </table>
				</form>
				<form name="form2" action="?searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
" method="POST">
					<input type="hidden" name="mode" value="csv" />
					<input type="hidden" name="searchClient" value="<?php echo $this->_tpl_vars['searchClient']; ?>
" />
					<input type="hidden" name="searchState" value="<?php echo $this->_tpl_vars['searchState']; ?>
" />
					<input type="hidden" name="searchType" value="<?php echo $this->_tpl_vars['searchType']; ?>
" />
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload">CSV出力</button>
						</div>
					</div>
				</form>
			</div>
		</section>
		<div class="container">
			<div class="clearfix">
				<div class="boxRight">
					<div class="pagination">
						<p class="resultStates"><?php echo $this->_tpl_vars['countSelectQuery']; ?>
件中<?php echo $this->_tpl_vars['pagingArr']['start_view']; ?>
〜<?php echo $this->_tpl_vars['pagingArr']['end_view']; ?>
件</p>
						<ul class="paging">
							<?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['rev'] != ""): ?>
								<li class="toFirstPage"><a href="?page=1<?php if ($this->_tpl_vars['searchClient'] != ""): ?>&searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchState'] != ""): ?>&searchState=<?php echo $this->_tpl_vars['searchState']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchType'] != ""): ?>&searchType=<?php echo $this->_tpl_vars['searchType']; ?>
<?php endif; ?>" >最初へ</a></li>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['rev'] != ""): ?>
								<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['rev']; ?>
<?php if ($this->_tpl_vars['searchClient'] != ""): ?>&searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchState'] != ""): ?>&searchState=<?php echo $this->_tpl_vars['searchState']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchType'] != ""): ?>&searchType=<?php echo $this->_tpl_vars['searchType']; ?>
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
<?php if ($this->_tpl_vars['searchClient'] != ""): ?>&searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchState'] != ""): ?>&searchState=<?php echo $this->_tpl_vars['searchState']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchType'] != ""): ?>&searchType=<?php echo $this->_tpl_vars['searchType']; ?>
<?php endif; ?>"><?php echo $this->_sections['i']['index']; ?>
</a></li>
								<?php endif; ?>
							<?php endfor; endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['next'] != ""): ?>
								<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['next']; ?>
<?php if ($this->_tpl_vars['searchClient'] != ""): ?>&searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchState'] != ""): ?>&searchState=<?php echo $this->_tpl_vars['searchState']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchType'] != ""): ?>&searchType=<?php echo $this->_tpl_vars['searchType']; ?>
<?php endif; ?>" >&gt;&gt;</a></li>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['next'] != ""): ?>
								<li class="toLastPage"><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['p_cnt']; ?>
<?php if ($this->_tpl_vars['searchClient'] != ""): ?>&searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchState'] != ""): ?>&searchState=<?php echo $this->_tpl_vars['searchState']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchType'] != ""): ?>&searchType=<?php echo $this->_tpl_vars['searchType']; ?>
<?php endif; ?>" >最後へ</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<table class="tableB">
				<thead>
					<tr>
						<th class="w140">企業名</th>
						<th class="w140">事業所名</th>
						<th class="w93">取引ステータス</th>
						<th class="w80">取引種類</th>
						<th class="w80">ガイズ担当者</th>
						<th class="w72">工事受注</th>
						<th class="w72">材料販売</th>
						<th class="w72">材料発注</th>
						<th class="w72">工事発注</th>
						<th class="w25">詳細</th>
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
									<td class="w140 txtLeft"><?php echo $this->_tpl_vars['value']['clientNameInSystem']; ?>
</td>
									<td class="w140 txtLeft"><?php echo $this->_tpl_vars['value']['office']; ?>
</td>
									<td class="w93 txtCenter">
										<?php if ($this->_tpl_vars['value']['clientState'] == 1): ?>継続中<?php endif; ?>
										<?php if ($this->_tpl_vars['value']['clientState'] == 2): ?>停止<?php endif; ?>
									</td>
									<td class="w80 txtCenter">
										<?php if ($this->_tpl_vars['value']['dealInfo'] == 1): ?>継続取引<?php endif; ?>
										<?php if ($this->_tpl_vars['value']['dealInfo'] == 2): ?>単発取引<?php endif; ?>
										<?php if ($this->_tpl_vars['value']['dealInfo'] == 3): ?>外注先<?php endif; ?>
									</td>
									<td class="w80 txtCenter"><?php echo $this->_tpl_vars['value']['name']; ?>
</td>
									<td class="w72 txtCenter"><?php if ($this->_tpl_vars['value']['takeConstructionOrder'] == 1): ?>○<?php endif; ?></td>
									<td class="w72 txtCenter"><?php if ($this->_tpl_vars['value']['sellingMaterials'] == 1): ?>○<?php endif; ?></td>
									<td class="w72 txtCenter"><?php if ($this->_tpl_vars['value']['orderMaterials'] == 1): ?>○<?php endif; ?></td>
									<td class="w72 txtCenter"><?php if ($this->_tpl_vars['value']['orderConstruction'] == 1): ?>○<?php endif; ?></td>
									<td class="w25 txtCenter">
										<p class="iconLink"><a href="/client/?mode=detail&codeNumber=<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['value']['officeCode']; ?>
"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
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
								<li class="toFirstPage"><a href="?page=1<?php if ($this->_tpl_vars['searchClient'] != ""): ?>&searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchState'] != ""): ?>&searchState=<?php echo $this->_tpl_vars['searchState']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchType'] != ""): ?>&searchType=<?php echo $this->_tpl_vars['searchType']; ?>
<?php endif; ?>" >最初へ</a></li>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['rev'] != ""): ?>
								<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['rev']; ?>
<?php if ($this->_tpl_vars['searchClient'] != ""): ?>&searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchState'] != ""): ?>&searchState=<?php echo $this->_tpl_vars['searchState']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchType'] != ""): ?>&searchType=<?php echo $this->_tpl_vars['searchType']; ?>
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
<?php if ($this->_tpl_vars['searchClient'] != ""): ?>&searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchState'] != ""): ?>&searchState=<?php echo $this->_tpl_vars['searchState']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchType'] != ""): ?>&searchType=<?php echo $this->_tpl_vars['searchType']; ?>
<?php endif; ?>"><?php echo $this->_sections['i']['index']; ?>
</a></li>
								<?php endif; ?>
							<?php endfor; endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['next'] != ""): ?>
								<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['next']; ?>
<?php if ($this->_tpl_vars['searchClient'] != ""): ?>&searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchState'] != ""): ?>&searchState=<?php echo $this->_tpl_vars['searchState']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchType'] != ""): ?>&searchType=<?php echo $this->_tpl_vars['searchType']; ?>
<?php endif; ?>" >&gt;&gt;</a></li>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['next'] != ""): ?>
								<li class="toLastPage"><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['p_cnt']; ?>
<?php if ($this->_tpl_vars['searchClient'] != ""): ?>&searchClient=<?php echo $this->_tpl_vars['searchClient']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchState'] != ""): ?>&searchState=<?php echo $this->_tpl_vars['searchState']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['searchType'] != ""): ?>&searchType=<?php echo $this->_tpl_vars['searchType']; ?>
<?php endif; ?>" >最後へ</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>