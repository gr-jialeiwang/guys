<?php /* Smarty version 2.6.26, created on 2016-10-14 17:28:13
         compiled from keiri/nyukin-shori/nyukin_shori_index_index.tpl */ ?>
<?php echo '
<script language="JavaScript" type="text/javascript">
	function toBilling(obj){
		var office = $(\'#selectedOffice option:selected\'),
			codeNumber = office.val(),
			officeCode = office.attr(\'data-office-code\')
		;
		
		window.location.href = \'/keiri/nyukin-shori/seikyusho/?\' +
				\'codeNumber=\' + codeNumber + 
				\'&officeCode=\' + officeCode;
	}
</script>
'; ?>


<?php if ($this->_tpl_vars['view_paymentProccessBrowse'] == 0): ?>
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<?php else: ?>
<form action="index.php" method="POST">
	<section class="pageTop pb20">
		<div class="container">
			<nav id="subNavTop">
				<ul>
					<li class="leftEnd"><a href="../../keiri/seikyusho/index.php">請求書発行</a></li>
					<li class="currentLink"><a href="index.php">入金処理</a></li>
					<li><a href="../../keiri/nyukin-yotei/index.php">入金予定表</a></li>
					<li><a href="../../keiri/urikake/index.php">売掛情報</a></li>
					<li><a href="../../keiri/uke-seikyu/index.php">受請求書処理</a></li>
					<li><a href="../../keiri/shiharai-shori/index.php">支払処理</a></li>
					<li><a href="../../keiri/shiharai-yotei/index.php">支払予定表</a></li>
					<li><a href="../../keiri/kaikake/index.php">買掛情報</a></li>
					<li><a href="../../keiri/shikakekin/index.php">仕掛金一覧</a></li>
					<li><a href="../../keiri/nyushukkin/index.php">入出金一覧</a></li>
					<li class="rightEnd"><a href="../../keiri/jisha-keihi/index.php">自社経費登録</a></li>
				</ul>
			</nav>
			<div class="pageTitle clearfix">
				<div class="boxLeft mr8">
					<div class="btnBack"><a href="../index.php">戻る</a></div>
				</div>
				<div class="boxLeft mr20">
					<h2>入金処理</h2>
				</div>
			</div>
			<table class="tableA w470">
				<tbody><tr>
					<th class="w80">入金元 選択</th>
					<td class="w210">
						<select id="selectedOffice" name="constructionCategory" class="w210">
							<?php $_from = $this->_tpl_vars['clients']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['client']):
        $this->_foreach['cnt']['iteration']++;
?>
								<option data-office-code="<?php echo $this->_tpl_vars['client']['officeCode']; ?>
" value="<?php echo $this->_tpl_vars['client']['codeNumber']; ?>
">
									<?php echo $this->_tpl_vars['client']['officialName']; ?>
　<?php echo $this->_tpl_vars['client']['office']; ?>

								</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
					<td class="bdl txtCenter">
						<a onclick="toBilling();" href="javascript:void(0)" class="buttonA">表示する</a>
					</td>
				</tr>
				</tbody></table>
		</div>
	</section>
</form>
<?php endif; ?>