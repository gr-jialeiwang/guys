<?php /* Smarty version 2.6.26, created on 2016-10-14 11:06:21
         compiled from staff/contents_index_index.tpl */ ?>
<?php if ($this->_tpl_vars['view_flg1'] == 0): ?>
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<?php else: ?>
	<div class="container">
		<div class="pageTitle clearfix">
			<div class="boxLeft mr8">
				<div class="btnBack"><a href="/">戻る</a></div>
			</div>
			<div class="boxLeft">
				<h2>社員一覧／登録・編集</h2>
			</div>
		</div>
		<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
        <div class="boxRight">
            <a href="edit.php?mode=new" class="btnReload">新規登録</a>
        </div>
		<?php endif; ?>
		<div class="headingB">
			<h3>社員一覧</h3>
		</div>
	</div>
	<div class="container">
		<div class="clearfix pt10">
			<div class="boxRight">
				<div class="pagination">
					<p class="resultStates"><?php echo $this->_tpl_vars['countSelectQuery']; ?>
件中<?php echo $this->_tpl_vars['pagingArr']['start_view']; ?>
〜<?php echo $this->_tpl_vars['pagingArr']['end_view']; ?>
件</p>
					<ul class="paging">
						<?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['rev'] != ""): ?>
							<li class="toFirstPage"><a href="?page=1" >最初へ</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pagingArr']['rev'] != ""): ?>
							<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['rev']; ?>
" >&lt;&lt;</a></li>
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
"><?php echo $this->_sections['i']['index']; ?>
</a></li>
							<?php endif; ?>
						<?php endfor; endif; ?>
						<?php if ($this->_tpl_vars['pagingArr']['next'] != ""): ?>
							<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['next']; ?>
" >&gt;&gt;</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['next'] != ""): ?>
							<li class="toLastPage"><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['p_cnt']; ?>
" >最後へ</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<table class="tableB">
			<thead>
				<tr>
					<th class="w108">社員ID NO.</th>
					<th class="w107">氏名</th>
					<th class="w371">所属</th>
					<th class="w101">役職</th>
					<th class="w115 txtCenter">電話番号</th>
					<th class="w72 txtCenter">ステータス</th>
					<th class="w28">編集</th>
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
						<thead>
							<tr>
								<td class="w108"><?php echo $this->_tpl_vars['value']['staffID']; ?>
</td>
								<td class="w107"><?php echo $this->_tpl_vars['value']['name']; ?>
</td>
								<td class="w371"><?php echo $this->_tpl_vars['value']['department']; ?>
</td>
								<td class="w101"><?php echo $this->_tpl_vars['value']['position']; ?>
</td>
								<td class="w115 txtCenter"><?php echo $this->_tpl_vars['value']['phoneNumerAreaCode']; ?>
-<?php echo $this->_tpl_vars['value']['phoneNumerFirstHalf']; ?>
-<?php echo $this->_tpl_vars['value']['phoneNumerLastHalf']; ?>
</td>
								<td class="w72 txtCenter">
									<?php if ($this->_tpl_vars['value']['state'] == 1): ?>在職<?php endif; ?>
									<?php if ($this->_tpl_vars['value']['state'] == 9): ?>退職<?php endif; ?>
								</td>
								<td class="w28">
									<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
										<p class="iconLink"><a href="edit.php?mode=edit&id=<?php echo $this->_tpl_vars['value']['id']; ?>
"><img src="/img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									<?php endif; ?>
								</td>
							</tr>
						</thead>
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
							<li class="toFirstPage"><a href="?page=1" >最初へ</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pagingArr']['rev'] != ""): ?>
							<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['rev']; ?>
" >&lt;&lt;</a></li>
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
"><?php echo $this->_sections['i']['index']; ?>
</a></li>
							<?php endif; ?>
						<?php endfor; endif; ?>
						<?php if ($this->_tpl_vars['pagingArr']['next'] != ""): ?>
							<li><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['next']; ?>
" >&gt;&gt;</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['next'] != ""): ?>
							<li class="toLastPage"><a href="?page=<?php echo $this->_tpl_vars['pagingArr']['p_cnt']; ?>
" >最後へ</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>