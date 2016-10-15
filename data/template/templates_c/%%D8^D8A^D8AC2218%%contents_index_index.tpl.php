<?php /* Smarty version 2.6.26, created on 2016-10-14 15:39:42
         compiled from keiri/contents_index_index.tpl */ ?>
<?php if ($this->_tpl_vars['view'] == 0): ?>
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<?php else: ?>
        <div class="hinbanTtl txtCenter">経理処理</div>
        <div class="topSearchArea topBtnLinks bdn">
                <ul>
                    <?php if ($this->_tpl_vars['view_billingBrowse'] == 1 || $this->_tpl_vars['view_billingEdit'] == 1): ?>
                        <li><a href="/keiri/seikyusho/index.php">請求書発行 </a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['view_paymentProccessBrowse'] == 1 || $this->_tpl_vars['view_paymentProccessEdit'] == 1): ?>
                        <li><a href="/keiri/nyukin-shori/index.php">入金処理</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['view_paymentScheduleBrowse'] == 1 || $this->_tpl_vars['view_paymentScheduleEdit'] == 1): ?>
                        <li><a href="/keiri/nyukin-yotei/index.php">入金予定表</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['view_accountsReceivableBrowse'] == 1 || $this->_tpl_vars['view_accountsReceivableEdit'] == 1): ?>
                        <li><a href="/keiri/urikake/index.php">売掛情報</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['view_invoiceProcessBrowse'] == 1 || $this->_tpl_vars['view_invoiceProcessEdit'] == 1): ?>
                        <li><a href="/keiri/uke-seikyu/index.php">受請求書処理</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['view_paymentProcessBrowse'] == 1 || $this->_tpl_vars['view_paymentProcessEdit'] == 1): ?>
                        <li><a href="/keiri/shiharai-shori/index.php">支払処理</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['view_paymentSchedule2Browse'] == 1 || $this->_tpl_vars['view_paymentSchedule2Edit'] == 1): ?>
                        <li><a href="/keiri/shiharai-yotei/index.php">支払予定表</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['view_accountsPayableBrowse'] == 1 || $this->_tpl_vars['view_accountsPayableEdit'] == 1): ?>
                        <li><a href="/keiri/kaikake/index.php">買掛情報</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['view_workInProcessBrowse'] == 1 || $this->_tpl_vars['view_workInProcessEdit'] == 1): ?>
                        <li><a href="/keiri/shikakekin/index.php">仕掛金一覧</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['view_accountActivityBrowse'] == 1 || $this->_tpl_vars['view_accountActivityEdit'] == 1): ?>
                        <li><a href="/keiri/nyushukkin/index.php">入出金一覧 </a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['view_expensesBrowse'] == 1 || $this->_tpl_vars['view_expensesEdit'] == 1): ?>
                        <li><a href="/keiri/jisha-keihi/index.php">自社経費登録</a></li>
                    <?php endif; ?>
                </ul>
        </div>
<?php endif; ?>