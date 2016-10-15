<?php /* Smarty version 2.6.26, created on 2016-10-14 17:47:10
         compiled from contents_index_index.tpl */ ?>
<section>
	<form name="form1" action="?" method="POST" id="loginForm">
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
		<?php endif; ?>
		<dl>
			<dt>ログインID</dt>
			<dd><input type="text" name="loginId" id="loginId" class="inputType01" required></dd>
			<dt>パスワード</dt>
			<dd><input type="password" name="loginPassowrd" id="loginPassowrd" minlength="5" class="inputType01" required></dd>
		</dl>
		<div class="clearfix">
			<div class="checkBox boxleft">
				<input type="checkbox" id="loginCheck" name="keepMeSignedIn" value="1">
				<label for="loginCheck">ログイン状態を記憶する</label>
			</div>
			<div class="boxRight">
				<input type="hidden" id="mode" name="mode" value="login">
				<button class="btnLogin">ログイン</button>
			</div>
		</div>
	</form>
</section>