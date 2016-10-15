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
				<!--{if $view_flg2 == 1}-->
					<li><a href="template/index.php">見積書・テンプレートマスタ</a></li>
				<!--{/if}-->
				<li><a href="index08_107_.php">支払系マスタ</a></li>
				<li><a href="index04_103_.php">原価計算項目マスタ</a></li>
				<li><a href="index06_105_.php">請求系マスタ</a></li>
			</ul>
		</div>
	<!--{/if}-->
<!--{/if}-->
