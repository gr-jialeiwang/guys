<?php /* Smarty version 2.6.26, created on 2016-10-14 11:50:02
         compiled from master-edit/contents_index_index.tpl */ ?>
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
		<div class="container">
			<div class="pageTitle clearfix">
				<div class="boxLeft mr8">
					<div class="btnBack"><a href="/">戻る</a></div>
				</div>
				<div class="boxLeft mr20">
					<h2>各種マスタ編集</h2>
				</div>
			</div>
		</div>
		<div class="topBtnLinks bdn" id="masterEdit">
			<ul>
				<li><a href="index02_101_.php">共通系・その他マスタ</a></li>
				<li><a href="index05_104_.php">見積系マスタ</a></li>
				<li><a href="index07_106_.php">発注系マスタ</a></li>
				<li><a href="index03_102_.php">各種ステータスマスタ</a></li>
				<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
					<li><a href="template/index.php">見積書・テンプレートマスタ</a></li>
				<?php endif; ?>
				<li><a href="index08_107_.php">支払系マスタ</a></li>
				<li><a href="index04_103_.php">原価計算項目マスタ</a></li>
				<li><a href="index06_105_.php">請求系マスタ</a></li>
			</ul>
		</div>
	<?php endif; ?>
<?php endif; ?>