<?php /* Smarty version 2.6.26, created on 2016-10-14 17:28:16
         compiled from keiri/nyukin-shori/seikyusho/seikyusho_index_index.tpl */ ?>
<?php echo '
<script language="JavaScript" type="text/javascript">
	
</script>
'; ?>


<?php if ($this->_tpl_vars['view_paymentProccessBrowse'] == 0): ?>
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<?php else: ?>
	<?php if ($this->_tpl_vars['err_msg']): ?>
	<div class="errorBox">
		<p class="error"><?php echo $this->_tpl_vars['err_msg']; ?>
</p>
	</div>
	<?php else: ?>
	<form action="index.php" method="POST">
		<section class="pageTop pb20">
			<div class="container">
				<nav id="subNavTop">
					<ul>
						<li class="leftEnd"><a href="../../../keiri/seikyusho/index.php">請求書発行</a></li>
						<li class="currentLink"><a href="../index.php">入金処理</a></li>
						<li><a href="../../../keiri/nyukin-yotei/index.php">入金予定表</a></li>
						<li><a href="../../../client/urikake/index.php">売掛情報</a></li>
						<li><a href="../../../keiri/uke-seikyu/index.php">受請求書処理</a></li>
						<li><a href="../../../keiri/shiharai-shori/index.php">支払処理</a></li>
						<li><a href="../../../keiri/shiharai-yotei/index.php">支払予定表</a></li>
						<li><a href="../../../keiri/kaikake/index.php">買掛情報</a></li>
						<li><a href="../../../keiri/shikakekin/index.php">仕掛金一覧</a></li>
						<li><a href="../../../koji_search/nyushukkin/index.php">入出金一覧</a></li>
						<li class="rightEnd"><a href="../../../keiri/jisha-keihi/index.php">自社経費登録</a></li>
					</ul>
				</nav>
				<div class="pageTitle clearfix">
					<div class="boxLeft mr8">
						<div class="btnBack"><a href="../../index.php">戻る</a></div>
					</div>
					<div class="boxLeft mr20">
						<h2>入金処理</h2>
					</div>
				</div>
				<table class="tableA">
					<tbody><tr>
						<th class="w51">入金元</th>
						<td class="w196"><?php echo $this->_tpl_vars['client']['officialName']; ?>
　<?php echo $this->_tpl_vars['client']['office']; ?>
</td>
						<th class="w63">請求合計</th>
						<td>00,000,000</td>
						<th class="w115">支払（回収）方法</th>
						<td>集金（現金50%／手形50%）</td>
					</tr>
					</tbody></table>
			</div>
		</section>
		<div class="container">
			<?php if ($this->_tpl_vars['view_paymentProccessEdit'] == 0): ?>
			<div class="noTtl">
				<p>「編集」権限はありません</p>
			</div>
			<?php else: ?>
			<div class="noTtl">
				<a href="shori-gamen.php" class="buttonA">チェックした請求書を処理する</a>
			</div>
			<?php endif; ?>
			<div class="tableStripe">
				<table class="tableB">
					<thead>
					<tr>
						<th class="w25">選択</th>
						<th class="w90">発行日<br>請求書No</th>
						<th class="w102">処理者</th>
						<th class="w108">請求金額</th>
						<th class="w108">書仕入相殺合計</th>
						<th class="w135">その他相殺見込み 合計</th>
						<th class="w108">売上値引</th>
						<th class="w95">実入金見込金額</th>
						<th>不足</th>
					</tr>
					</thead>
				</table>
				<table class="tableB">
					<tbody>
					<tr>
						<td class="w25 txtCenter">
							<div class="checkBox">
								<input type="checkbox" name="order1" class="checkOrder" id="order1">
								<label for="order1"></label>
							</div>
						</td>
						<td class="w90 txtCenter">0000/00/00<br>0000000</td>
						<td class="w102 txtCenter">小林太郎</td>
						<td class="w108 txtCenter">0,000,000</td>
						<td class="w108 txtRight">0,000,000</td>
						<td class="w135 txtRight">0,000,000</td>
						<td class="w108 txtRight">00,000</td>
						<td class="w95 txtRight">0,000,000</td>
						<td class=" txtRight">0,000,000</td>
					</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
					<tr>
						<td class="w25 txtCenter">
							<div class="checkBox">
								<input type="checkbox" name="order2" class="checkOrder" id="order2">
								<label for="order2"></label>
							</div>
						</td>
						<td class="w90 txtCenter">0000/00/00<br>0000000</td>
						<td class="w102 txtCenter">小林太郎</td>
						<td class="w108 txtCenter">0,000,000</td>
						<td class="w108 txtRight">0,000,000</td>
						<td class="w135 txtRight">0,000,000</td>
						<td class="w108 txtRight">00,000</td>
						<td class="w95 txtRight">0,000,000</td>
						<td class=" txtRight">0,000,000</td>
					</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
					<tr>
						<td class="w25 txtCenter">
							<div class="checkBox">
								<input type="checkbox" name="order3" class="checkOrder" id="order3">
								<label for="order3"></label>
							</div>
						</td>
						<td class="w90 txtCenter">0000/00/00<br>0000000</td>
						<td class="w102 txtCenter">小林太郎</td>
						<td class="w108 txtCenter">0,000,000</td>
						<td class="w108 txtRight">0,000,000</td>
						<td class="w135 txtRight">0,000,000</td>
						<td class="w108 txtRight">00,000</td>
						<td class="w95 txtRight">0,000,000</td>
						<td class=" txtRight">0,000,000</td>
					</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
					<tr>
						<td class="w25 txtCenter">
							<div class="checkBox">
								<input type="checkbox" name="order4" class="checkOrder" id="order4">
								<label for="order4"></label>
							</div>
						</td>
						<td class="w90 txtCenter">0000/00/00<br>0000000</td>
						<td class="w102 txtCenter">小林太郎</td>
						<td class="w108 txtCenter">0,000,000</td>
						<td class="w108 txtRight">0,000,000</td>
						<td class="w135 txtRight">0,000,000</td>
						<td class="w108 txtRight">00,000</td>
						<td class="w95 txtRight">0,000,000</td>
						<td class=" txtRight">0,000,000</td>
					</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
					<tr>
						<td class="w25 txtCenter">
							<div class="checkBox">
								<input type="checkbox" name="order5" class="checkOrder" id="order5">
								<label for="order5"></label>
							</div>
						</td>
						<td class="w90 txtCenter">0000/00/00<br>0000000</td>
						<td class="w102 txtCenter">小林太郎</td>
						<td class="w108 txtCenter">0,000,000</td>
						<td class="w108 txtRight">0,000,000</td>
						<td class="w135 txtRight">0,000,000</td>
						<td class="w108 txtRight">00,000</td>
						<td class="w95 txtRight">0,000,000</td>
						<td class=" txtRight">0,000,000</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</form>
	<?php endif; ?>
<?php endif; ?>