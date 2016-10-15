<!--{if $view == 0}-->
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<!--{else}-->
        <div class="hinbanTtl txtCenter">経理処理</div>
        <div class="topSearchArea topBtnLinks bdn">
                <ul>
                    <!--{if $view_billingBrowse == 1 || $view_billingEdit == 1}-->
                        <li><a href="/keiri/seikyusho/index.php">請求書発行 </a></li>
                    <!--{/if}-->
                    <!--{if $view_paymentProccessBrowse == 1 || $view_paymentProccessEdit == 1}-->
                        <li><a href="/keiri/nyukin-shori/index.php">入金処理</a></li>
                    <!--{/if}-->
                    <!--{if $view_paymentScheduleBrowse == 1 || $view_paymentScheduleEdit == 1}-->
                        <li><a href="/keiri/nyukin-yotei/index.php">入金予定表</a></li>
                    <!--{/if}-->
                    <!--{if $view_accountsReceivableBrowse == 1 || $view_accountsReceivableEdit == 1}-->
                        <li><a href="/keiri/urikake/index.php">売掛情報</a></li>
                    <!--{/if}-->
                    <!--{if $view_invoiceProcessBrowse == 1 || $view_invoiceProcessEdit == 1}-->
                        <li><a href="/keiri/uke-seikyu/index.php">受請求書処理</a></li>
                    <!--{/if}-->
                    <!--{if $view_paymentProcessBrowse == 1 || $view_paymentProcessEdit == 1}-->
                        <li><a href="/keiri/shiharai-shori/index.php">支払処理</a></li>
                    <!--{/if}-->
                    <!--{if $view_paymentSchedule2Browse == 1 || $view_paymentSchedule2Edit == 1}-->
                        <li><a href="/keiri/shiharai-yotei/index.php">支払予定表</a></li>
                    <!--{/if}-->
                    <!--{if $view_accountsPayableBrowse == 1 || $view_accountsPayableEdit == 1}-->
                        <li><a href="/keiri/kaikake/index.php">買掛情報</a></li>
                    <!--{/if}-->
                    <!--{if $view_workInProcessBrowse == 1 || $view_workInProcessEdit == 1}-->
                        <li><a href="/keiri/shikakekin/index.php">仕掛金一覧</a></li>
                    <!--{/if}-->
                    <!--{if $view_accountActivityBrowse == 1 || $view_accountActivityEdit == 1}-->
                        <li><a href="/keiri/nyushukkin/index.php">入出金一覧 </a></li>
                    <!--{/if}-->
                    <!--{if $view_expensesBrowse == 1 || $view_expensesEdit == 1}-->
                        <li><a href="/keiri/jisha-keihi/index.php">自社経費登録</a></li>
                    <!--{/if}-->
                </ul>
        </div>
<!--{/if}-->
