<section>
	<form name="form1" action="?" method="POST" id="loginForm">
		<!--{if is_array($arrForm.err_msg)}-->
			<div class="errorBox">
				<!--{foreach from=$arrForm.err_msg key=key item=value name=cnt}-->
					<p class="error"><!--{$value}--></p>
				<!--{/foreach}-->
			</div>
		<!--{/if}-->
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
