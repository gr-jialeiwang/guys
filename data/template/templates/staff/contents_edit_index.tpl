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

		<form name="form1" action="?" method="POST">
            <input type="hidden" name="mode" id="mode" value="<!--{$editMode}-->" />
            <input type="hidden" name="id" value="<!--{$id}-->" />
			<input type="hidden" name="FN_staffIDOrg" value="<!--{$staffID}-->" />
			<input type="hidden" name="FN_systemIDOrg" value="<!--{$systemID}-->" />
			<section class="pageTop pb20">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>社員一覧／登録・編集</h2>
						</div>
                        <!--{if $mode == "edit" || $editMode == "editRegist"}-->
                        <div class="boxRight">
                            <a href="#" onclick="delete_confirm();"><button class="btnReload" type="button" >削除</button></a>
                        </div>
                        <!--{/if}-->
					</div>
                    <!--{if $editMode != "delRegistered"}-->
					<div class="headingB">
						<h3>基本情報</h3>
					</div>
					<table class="tableA">
						<tr>
							<th class="w87">社員ID No</th>
							<td>
								<input type="text" name="staffID" class="w100p" value="<!--{$select.staffID}-->">
							</td>
							<th class="w63">所属</th>
							<td><input type="text" name="department" class="w100p" value="<!--{$select.department}-->"></td>
							<th class="w105">ステータス</th>
							<td>
								<select name="state" class="w120">
									<option value="">選択</option>
									<option value="1"<!--{if $select.state == 1}--> selected<!--{/if}-->>在籍</option>
									<option value="9"<!--{if $select.state == 9}--> selected<!--{/if}-->>退職</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>氏名</th>
							<td><input type="text" name="name" class="w100p" value="<!--{$select.name}-->"></td>
							<th>役職</th>
							<td><input type="text" name="position" class="w100p" value="<!--{$select.position}-->"></td>
							<th>社員職人 時間給</th>
							<td><input type="text" name="hourlyWage" class="mr7" value="<!--{$select.hourlyWage}-->">円</td>
						</tr>
						<tr>
							<th>読みカナ分類</th>
							<td>
								<select name="kana" class="w100">
									<option value="ア"<!--{if $select.kana == "ア"}--> selected<!--{/if}-->>ア</option>
									<option value="カ"<!--{if $select.kana == "カ"}--> selected<!--{/if}-->>カ</option>
									<option value="サ"<!--{if $select.kana == "サ"}--> selected<!--{/if}-->>サ</option>
									<option value="タ"<!--{if $select.kana == "タ"}--> selected<!--{/if}-->>タ</option>
									<option value="ナ"<!--{if $select.kana == "ナ"}--> selected<!--{/if}-->>ナ</option>
									<option value="ハ"<!--{if $select.kana == "ハ"}--> selected<!--{/if}-->>ハ</option>
									<option value="マ"<!--{if $select.kana == "マ"}--> selected<!--{/if}-->>マ</option>
									<option value="ヤ"<!--{if $select.kana == "ヤ"}--> selected<!--{/if}-->>ヤ</option>
									<option value="ラ"<!--{if $select.kana == "ラ"}--> selected<!--{/if}-->>ラ</option>
									<option value="ワ"<!--{if $select.kana == "ワ"}--> selected<!--{/if}-->>ワ</option>
								</select>
							</td>
							<th>電話番号</th>
							<td colspan="3">
								<input type="text" class="w53" name="phoneNumerAreaCode" placeholder="000" value="<!--{$select.phoneNumerAreaCode}-->">
								ー
								<input type="text" class="w53" name="phoneNumerFirstHalf" placeholder="0000" value="<!--{$select.phoneNumerFirstHalf}-->">
								ー
								<input type="text" class="w53" name="phoneNumerLastHalf" placeholder="0000" value="<!--{$select.phoneNumerLastHalf}-->">
							</td>
						</tr>
					</table>
					<!--{/if}-->
				</div>
				<!--{if $editMode != "delRegistered"}-->
		        <br />
		        <div class="txtCenter">
		            <button class="btnReload" type="submit">登録・更新する</button>
		        </div>
                <!--{/if}-->
			</section>
			<!--{if $editMode != "delRegistered"}-->
			<div class="container">
				<div class="headingB">
					<h3>システムID／パスワード</h3>
				</div>
				<table class="tableA w470">
					<tr>
						<th class="w30">ID</th>
						<td class="w147"><input type="text" name="systemID" class="w100p" value="<!--{$select.systemID}-->"></td>
						<th class="w75">パスワード</th>
						<td><input type="password" name="password" class="w100p" value=""></td>
					</tr>
				</table>
				<div class="clearfix mb20">
	                <br />
	                <div class="txtCenter">
	                    <button class="btnReload" type="submit">登録・更新する</button>
	                </div>
				</div>
				<hr>
				<div class="headingB mb10">
					<h3>システム権限設定</h3>
				</div>
				<div class="clearfix">
					<div class="boxLeft w470">
						<input type="hidden" name="staffListBrowse" value="0">
						<input type="hidden" name="staffListEdit" value="0">
						<input type="hidden" name="companyList" value="0">
						<input type="hidden" name="companyListEdit" value="0">
						<input type="hidden" name="orderDataBrowse" value="0">
						<input type="hidden" name="orderDataEdit" value="0">
						<input type="hidden" name="advanceOrderDataBrowse" value="0">
						<input type="hidden" name="advanceOrderDataEdit" value="0">
						<input type="hidden" name="materialSellingDataBrowse" value="0">
						<input type="hidden" name="materialSellingDataEdit" value="0">
						<input type="hidden" name="stockDataBrowse" value="0">
						<input type="hidden" name="stockDataEdit" value="0">
						<input type="hidden" name="productNumberBrowse" value="0">
						<input type="hidden" name="productNumberEdit" value="0">
						<input type="hidden" name="deliverySlipBrowse" value="0">
						<input type="hidden" name="deliverySlipEdit" value="0">
						<input type="hidden" name="clientPageEdit" value="0">
						<input type="hidden" name="constructionPageEdit" value="0">
						<input type="hidden" name="constructionPageCopyEdit" value="0">
						<input type="hidden" name="constructionPageDeleteEdit" value="0">
						<input type="hidden" name="constructionSearchEdit" value="0">
						<input type="hidden" name="clientSearchEdit" value="0">
						<input type="hidden" name="aggregatedDataEdit" value="0">
						<input type="hidden" name="masterDataEdit" value="0">
						<input type="hidden" name="estimateEdit" value="0">
						<input type="hidden" name="personApplicableEdit" value="0">
						<input type="hidden" name="administratorEdit" value="0">
						<input type="hidden" name="basicInfomationListBrowse" value="0">
						<input type="hidden" name="basicInfomationListEdit" value="0">
						<input type="hidden" name="sellAccountingBrowse" value="0">
						<input type="hidden" name="sellAccountingEdit" value="0">
						<input type="hidden" name="purchaseAcconuntingBrowse" value="0">
						<input type="hidden" name="purchaseAcconuntingEdit" value="0">
						<input type="hidden" name="purchaseOrderBrowse" value="0">
						<input type="hidden" name="purchaseOrderEdit" value="0">
						<input type="hidden" name="staffDataBrowse" value="0">
						<input type="hidden" name="staffDataEdit" value="0">
						<input type="hidden" name="staffDataLv2Browse" value="0">
						<input type="hidden" name="staffDataLv2Edit" value="0">
						<input type="hidden" name="staffDataLv3Browse" value="0">
						<input type="hidden" name="staffDataLv3Edit" value="0">
						<input type="hidden" name="advanceMoneyBrowse" value="0">
						<input type="hidden" name="advanceMoneyEdit" value="0">
						<input type="hidden" name="orderRequestBrowse" value="0">
						<input type="hidden" name="orderRequestEdit" value="0">
						<input type="hidden" name="billBrowse" value="0">
						<input type="hidden" name="billEdit" value="0">
						<input type="hidden" name="accountsReceivablePriceBrowse" value="0">
						<input type="hidden" name="accountsReceivablePriceEdit" value="0">
						<input type="hidden" name="unpaidBrowse" value="0">
						<input type="hidden" name="unpaidEdit" value="0">
						<input type="hidden" name="orderHistoryBrowse" value="0">
						<input type="hidden" name="orderHistoryEdit" value="0">
						<input type="hidden" name="accountsPayablePriceBrowse" value="0">
						<input type="hidden" name="accountsPayablePriceEdit" value="0">
						<input type="hidden" name="constructionInfoBrowse" value="0">
						<input type="hidden" name="constructionInfoEdit" value="0">
						<input type="hidden" name="constructionEstimateBrowse" value="0">
						<input type="hidden" name="constructionEstimateEdit" value="0">
						<input type="hidden" name="integrationDataBrowse" value="0">
						<input type="hidden" name="integrationDataEdit" value="0">
						<input type="hidden" name="integrationFormBrowse" value="0">
						<input type="hidden" name="integrationFormEdit" value="0">
						<input type="hidden" name="expectedCostBrowse" value="0">
						<input type="hidden" name="expectedCostEdit" value="0">
						<input type="hidden" name="constructionOrderBrowse" value="0">
						<input type="hidden" name="constructionOrderEdit" value="0">
						<input type="hidden" name="reportListBrowse" value="0">
						<input type="hidden" name="reportListEdit" value="0">
						<input type="hidden" name="constructionCostBrowse" value="0">
						<input type="hidden" name="constructionCostEdit" value="0">
						<input type="hidden" name="executionCostBrowse" value="0">
						<input type="hidden" name="executionCostEdit" value="0">
						<input type="hidden" name="billingBrowse" value="0">
						<input type="hidden" name="billingEdit" value="0">
						<input type="hidden" name="paymentProccessBrowse" value="0">
						<input type="hidden" name="paymentProccessEdit" value="0">
						<input type="hidden" name="paymentScheduleBrowse" value="0">
						<input type="hidden" name="paymentScheduleEdit" value="0">
						<input type="hidden" name="accountsReceivableBrowse" value="0">
						<input type="hidden" name="accountsReceivableEdit" value="0">
						<input type="hidden" name="invoiceProcessBrowse" value="0">
						<input type="hidden" name="invoiceProcessEdit" value="0">
						<input type="hidden" name="paymentProcessBrowse" value="0">
						<input type="hidden" name="paymentProcessEdit" value="0">
						<input type="hidden" name="expensesBrowse" value="0">
						<input type="hidden" name="expensesEdit" value="0">
						<input type="hidden" name="paymentSchedule2Browse" value="0">
						<input type="hidden" name="paymentSchedule2Edit" value="0">
						<input type="hidden" name="accountsPayableBrowse" value="0">
						<input type="hidden" name="accountsPayableEdit" value="0">
						<input type="hidden" name="workInProcessBrowse" value="0">
						<input type="hidden" name="workInProcessEdit" value="0">
						<input type="hidden" name="accountActivityBrowse" value="0">
						<input type="hidden" name="accountActivityEdit" value="0">

						<ul class="horizontal">
							<li class="mr10">
								<div class="checkBox">
									<input type="checkbox" id="checkAllPermission1" class="checkAll" name="FN_checkAllPermission1">
									<label for="checkAllPermission1">全てに権限にチェックを入れる</label>
								</div>
							</li>
							<li>
								<div class="checkBox">
									<input type="checkbox" id="checkBrowsePermission1" class="checkBlowseAll" name="FN_checkBrowsePermission1">
									<label for="checkBrowsePermission1">閲覧権限のみ、全てにチェックを入れる</label>
								</div>
							</li>
						</ul>
						<table class="tableB">
							<tr>
								<th></th>
								<th class="w48">閲覧権限</th>
								<th class="w84">操作／編集権限</th>
							</tr>
							<tr>
								<td>社員一覧</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="staffListBrowse" class="checkBlowse checkOrder" name="staffListBrowse" value="1"<!--{if $select.staffListBrowse == 1}--> checked<!--{/if}-->>
										<label for="staffListBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="staffListEdit" class="checkOrder" name="staffListEdit" value="1"<!--{if $select.staffListEdit == 1}--> checked<!--{/if}-->>
										<label for="staffListEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>企業一覧</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="companyListBrowse" class="checkBlowse checkOrder" name="companyList" value="1"<!--{if $select.companyList == 1}--> checked<!--{/if}-->>
										<label for="companyListBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="companyListEdit" class="checkOrder" name="companyListEdit" value="1"<!--{if $select.companyListEdit == 1}--> checked<!--{/if}-->>
										<label for="companyListEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>自社発注情報</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="orderDataBrowse" class="checkBlowse checkOrder" name="orderDataBrowse" value="1"<!--{if $select.orderDataBrowse == 1}--> checked<!--{/if}-->>
										<label for="orderDataBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="orderDataEdit" class="checkOrder" name="orderDataEdit" value="1"<!--{if $select.orderDataEdit == 1}--> checked<!--{/if}-->>
										<label for="orderDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>先行発注情報</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="advanceOrderDataBrowse" class="checkOrder checkBlowse" name="advanceOrderDataBrowse" value="1"<!--{if $select.advanceOrderDataBrowse == 1}--> checked<!--{/if}-->>
										<label for="advanceOrderDataBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="advanceOrderDataEdit" class="checkOrder" name="advanceOrderDataEdit" value="1"<!--{if $select.advanceOrderDataEdit == 1}--> checked<!--{/if}-->>
										<label for="advanceOrderDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>材料販売情報</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="materialSellingDataBrowse" class="checkOrder checkBlowse" name="materialSellingDataBrowse" value="1"<!--{if $select.materialSellingDataBrowse == 1}--> checked<!--{/if}-->>
										<label for="materialSellingDataBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="materialSellingDataEdit" class="checkOrder" name="materialSellingDataEdit" value="1"<!--{if $select.materialSellingDataEdit == 1}--> checked<!--{/if}-->>
										<label for="materialSellingDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>在庫情報</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="stockDataBrowse" class="checkBlowse checkOrder" name="stockDataBrowse" value="1"<!--{if $select.stockDataBrowse == 1}--> checked<!--{/if}-->>
										<label for="stockDataBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="stockDataEdit" class="checkOrder" name="stockDataEdit" value="1"<!--{if $select.stockDataEdit == 1}--> checked<!--{/if}-->>
										<label for="stockDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>品番登録</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="productNumberBrowse" class="checkBlowse checkOrder" name="productNumberBrowse" value="1"<!--{if $select.productNumberBrowse == 1}--> checked<!--{/if}-->>
										<label for="productNumberBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="productNumberEdit" class="checkOrder" name="productNumberEdit" value="1"<!--{if $select.productNumberEdit == 1}--> checked<!--{/if}-->>
										<label for="productNumberEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>材料納品書照合</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="deliverySlipBrowse" class="checkBlowse checkOrder" name="deliverySlipBrowse" value="1"<!--{if $select.deliverySlipBrowse == 1}--> checked<!--{/if}-->>
										<label for="deliverySlipBrowse"></label>
									</div>
								</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="deliverySlipEdit" class="checkOrder" name="deliverySlipEdit" value="1"<!--{if $select.deliverySlipEdit == 1}--> checked<!--{/if}-->>
										<label for="deliverySlipEdit"></label>
									</div>
								</td>
							</tr>
						</table>
						<ul class="horizontal noTtl">
							<li class="mr10">
								<div class="checkBox">
									<input type="checkbox" id="checkAllPermission2" class="checkAll" name="FN_checkAllPermission2">
									<label for="checkAllPermission2">全てに権限にチェックを入れる</label>
								</div>
							</li>
						</ul>
						<table class="tableB">
							<tr>
								<th></th>
								<th class="w145">権限</th>
							</tr>
							<tr>
								<td>取引先ページ 新規登録・編集権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="clientPageEdit" class="checkOrder" name="clientPageEdit" value="1"<!--{if $select.clientPageEdit == 1}--> checked<!--{/if}-->>
										<label for="clientPageEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>工事ページ　新規登録・編集権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="constructionPageEdit" class="checkOrder" name="constructionPageEdit" value="1"<!--{if $select.constructionPageEdit == 1}--> checked<!--{/if}-->>
										<label for="constructionPageEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>工事ページ　複製権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="constructionPageCopyEdit" class="checkOrder" name="constructionPageCopyEdit" value="1"<!--{if $select.constructionPageCopyEdit == 1}--> checked<!--{/if}-->>
										<label for="constructionPageCopyEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>工事ページ　削除権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="constructionPageDeleteEdit" class="checkOrder" name="constructionPageDeleteEdit" value="1"<!--{if $select.constructionPageDeleteEdit == 1}--> checked<!--{/if}-->>
										<label for="constructionPageDeleteEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>工事情報　検索権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="constructionSearchEdit" class="checkOrder" name="constructionSearchEdit" value="1"<!--{if $select.constructionSearchEdit == 1}--> checked<!--{/if}-->>
										<label for="constructionSearchEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>取引先 検索権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="clientSearchEdit" class="checkOrder" name="clientSearchEdit" value="1"<!--{if $select.clientSearchEdit == 1}--> checked<!--{/if}-->>
										<label for="clientSearchEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>各種数値情報 集計権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="aggregatedDataEdit" class="checkOrder" name="aggregatedDataEdit" value="1"<!--{if $select.aggregatedDataEdit == 1}--> checked<!--{/if}-->>
										<label for="aggregatedDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>各種マスタ情報 編集権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="masterDataEdit" class="checkOrder" name="masterDataEdit" value="1"<!--{if $select.masterDataEdit == 1}--> checked<!--{/if}-->>
										<label for="masterDataEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>見積マスタ登録 編集権限</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="estimateEdit" class="checkOrder" name="estimateEdit" value="1"<!--{if $select.estimateEdit == 1}--> checked<!--{/if}-->>
										<label for="estimateEdit"></label>
									</div>
								</td>
							</tr>
						</table>
						<table class="tableB">
							<tr>
								<th></th>
								<th class="w145">権限</th>
							</tr>
							<tr>
								<td>労務申請 「申請」 対象者</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="personApplicableEdit" class="checkOrder" name="personApplicableEdit" value="1"<!--{if $select.personApplicableEdit == 1}--> checked<!--{/if}-->>
										<label for="personApplicableEdit"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>労務申請 「承認」 権限者</td>
								<td class="txtCenter">
									<div class="checkBox">
										<input type="checkbox" id="administratorEdit" class="checkOrder" name="administratorEdit" value="1"<!--{if $select.administratorEdit == 1}--> checked<!--{/if}-->>
										<label for="administratorEdit"></label>
									</div>
								</td>
							</tr>
						</table>
						<ul class="pt20">
							<li class="mb10">※「閲覧権限」<br>　　対象のページを見る、アクセスすることができます。</li>
							<li>※「操作／編集権限」 <br>　　対象のページにおいて、入力・更新・登録・編集・削除などの操作ができます。</li>
						</ul>
					</div>
					<div class="boxRight w470">
						<ul class="horizontal">
							<li class="mr10">
								<div class="checkBox">
									<input type="checkbox" id="checkAllPermission3" class="checkAll" name="FN_checkAllPermission3">
									<label for="checkAllPermission3">全てに権限にチェックを入れる</label>
								</div>
							</li>
							<li>
								<div class="checkBox">
									<input type="checkbox" id="checkBrowsePermission2" class="checkBlowseAll" name="FN_checkBrowsePermission2">
									<label for="checkBrowsePermission2">閲覧権限のみ、全てにチェックを入れる</label>
								</div>
							</li>
						</ul>
						<table class="tableB">
							<tbody>
								<tr>
									<th></th>
									<th class="w210 bdln"></th>
									<th class="w48">閲覧権限</th>
									<th class="w84">操作／編集権限</th>
								</tr>
								<tr>
									<td rowspan="14" class="txtCenter">取引先情報</td>
									<td class="">基本情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="basicInfomationListBrowse" class="checkOrder checkBlowse" name="basicInfomationListBrowse" value="1"<!--{if $select.basicInfomationListBrowse == 1}--> checked<!--{/if}-->>
											<label for="basicInfomationListBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="basicInfomationListEdit" class="checkOrder" name="basicInfomationListEdit" value="1"<!--{if $select.basicInfomationListEdit == 1}--> checked<!--{/if}-->>
											<label for="basicInfomationListEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>販売系 経理情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="sellAccountingBrowse" class="checkBlowse checkOrder" name="sellAccountingBrowse" value="1"<!--{if $select.sellAccountingBrowse == 1}--> checked<!--{/if}-->>
											<label for="sellAccountingBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="sellAccountingEdit" class="checkOrder" name="sellAccountingEdit" value="1"<!--{if $select.sellAccountingEdit == 1}--> checked<!--{/if}-->>
											<label for="sellAccountingEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>仕入系 経理情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="purchaseAcconuntingBrowse" class="checkOrder checkBlowse" name="purchaseAcconuntingBrowse" value="1"<!--{if $select.purchaseAcconuntingBrowse == 1}--> checked<!--{/if}-->>
											<label for="purchaseAcconuntingBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="purchaseAcconuntingEdit" class="checkOrder" name="purchaseAcconuntingEdit" value="1"<!--{if $select.purchaseAcconuntingEdit == 1}--> checked<!--{/if}-->>
											<label for="purchaseAcconuntingEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>発注書設定</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="purchaseOrderBrowse" class="checkBlowse checkOrder" name="purchaseOrderBrowse" value="1"<!--{if $select.purchaseOrderBrowse == 1}--> checked<!--{/if}-->>
											<label for="purchaseOrderBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="purchaseOrderEdit" class="checkOrder" name="purchaseOrderEdit" value="1"<!--{if $select.purchaseOrderEdit == 1}--> checked<!--{/if}-->>
											<label for="purchaseOrderEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>作業員情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataBrowse" class="checkBlowse checkOrder" name="staffDataBrowse" value="1"<!--{if $select.staffDataBrowse == 1}--> checked<!--{/if}-->>
											<label for="staffDataBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataEdit" class="checkOrder" name="staffDataEdit" value="1"<!--{if $select.staffDataEdit == 1}--> checked<!--{/if}-->>
											<label for="staffDataEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>作業員情報 閲覧ＬＥＶＥＬ2</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataLv2Browse" class="checkBlowse checkOrder" name="staffDataLv2Browse" value="1"<!--{if $select.staffDataLv2Browse == 1}--> checked<!--{/if}-->>
											<label for="staffDataLv2Browse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataLv2Edit" class="checkOrder" name="staffDataLv2Edit" value="1"<!--{if $select.staffDataLv2Edit == 1}--> checked<!--{/if}-->>
											<label for="staffDataLv2Edit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>作業員情報 閲覧ＬＥＶＥＬ3</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataLv3Browse" class="checkBlowse checkOrder" name="staffDataLv3Browse" value="1"<!--{if $select.staffDataLv3Browse == 1}--> checked<!--{/if}-->>
											<label for="staffDataLv3Browse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="staffDataLv3Edit" class="checkOrder" name="staffDataLv3Edit" value="1"<!--{if $select.staffDataLv3Edit == 1}--> checked<!--{/if}-->>
											<label for="staffDataLv3Edit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>立替金情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="advanceMoneyBrowse" class="checkBlowse checkOrder" name="advanceMoneyBrowse" value="1"<!--{if $select.advanceMoneyBrowse == 1}--> checked<!--{/if}-->>
											<label for="advanceMoneyBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="advanceMoneyEditEdit" class="checkOrder" name="advanceMoneyEdit" value="1"<!--{if $select.advanceMoneyEdit == 1}--> checked<!--{/if}-->>
											<label for="advanceMoneyEditEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>依頼／受注履歴</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="orderRequestBrowse" class="checkBlowse checkOrder" name="orderRequestBrowse" value="1"<!--{if $select.orderRequestBrowse == 1}--> checked<!--{/if}-->>
											<label for="orderRequestBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="orderRequestEdit" class="checkOrder" name="orderRequestEdit" value="1"<!--{if $select.orderRequestEdit == 1}--> checked<!--{/if}-->>
											<label for="orderRequestEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>請求書一覧</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="billBrowse" class="checkOrder checkBlowse" name="billBrowse" value="1"<!--{if $select.billBrowse == 1}--> checked<!--{/if}-->>
											<label for="billBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="billEdit" class="checkOrder" name="billEdit" value="1"<!--{if $select.billEdit == 1}--> checked<!--{/if}-->>
											<label for="billEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>売掛金情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsReceivablePriceBrowse" class="checkOrder checkBlowse" name="accountsReceivablePriceBrowse" value="1"<!--{if $select.accountsReceivablePriceBrowse == 1}--> checked<!--{/if}-->>
											<label for="accountsReceivablePriceBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsReceivablePriceEdit" class="checkOrder" name="accountsReceivablePriceEdit" value="1"<!--{if $select.accountsReceivablePriceEdit == 1}--> checked<!--{/if}-->>
											<label for="accountsReceivablePriceEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>未入金・不足工事 一覧</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="unpaidBrowse" class="checkBlowse checkOrder" name="unpaidBrowse" value="1"<!--{if $select.unpaidBrowse == 1}--> checked<!--{/if}-->>
											<label for="unpaidBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="unpaidEdit" class="checkOrder" name="unpaidEdit" value="1"<!--{if $select.unpaidEdit == 1}--> checked<!--{/if}-->>
											<label for="unpaidEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>仕入／発注履歴</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="orderHistoryBrowse" class="checkBlowse checkOrder" name="orderHistoryBrowse" value="1"<!--{if $select.orderHistoryBrowse == 1}--> checked<!--{/if}-->>
											<label for="orderHistoryBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="orderHistoryEdit" class="checkOrder" name="orderHistoryEdit" value="1"<!--{if $select.orderHistoryEdit == 1}--> checked<!--{/if}-->>
											<label for="orderHistoryEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>買掛金情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsPayablePriceBrowse" class="checkOrder checkBlowse" name="accountsPayablePriceBrowse" value="1"<!--{if $select.accountsPayablePriceBrowse == 1}--> checked<!--{/if}-->>
											<label for="accountsPayablePriceBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsPayablePriceEdit" class="checkOrder" name="accountsPayablePriceEdit" value="1"<!--{if $select.accountsPayablePriceEdit == 1}--> checked<!--{/if}-->>
											<label for="accountsPayablePriceEdit"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<ul class="horizontal noTtl">
							<li class="mr10">
								<div class="checkBox">
									<input type="checkbox" id="checkAllPermission4" class="checkAll" name="FN_checkAllPermission4">
									<label for="checkAllPermission4">全てに権限にチェックを入れる</label>
								</div>
							</li>
							<li>
								<div class="checkBox">
									<input type="checkbox" id="checkBrowsePermission3" class="checkBlowseAll" name="FN_checkBrowsePermission3">
									<label for="checkBrowsePermission3">閲覧権限のみ、全てにチェックを入れる</label>
								</div>
							</li>
						</ul>
						<table class="tableB">
							<tbody>
								<tr>
									<th></th>
									<th class="bdln w210"></th>
									<th class="w48">閲覧権限</th>
									<th class="w84">操作／編集権限</th>
								</tr>
								<tr>
									<td rowspan="9" class="txtCenter">工事情報</td>
									<td>基本情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionInfoBrowse" class="checkOrder checkBlowse" name="constructionInfoBrowse" value="1"<!--{if $select.constructionInfoBrowse == 1}--> checked<!--{/if}-->>
											<label for="constructionInfoBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionInfoEdit" class="checkOrder" name="constructionInfoEdit" value="1"<!--{if $select.constructionInfoEdit == 1}--> checked<!--{/if}-->>
											<label for="constructionInfoEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>見積情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionEstimateBrowse" class="checkOrder checkBlowse" name="constructionEstimateBrowse" value="1"<!--{if $select.constructionEstimateBrowse == 1}--> checked<!--{/if}-->>
											<label for="constructionEstimateBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionEstimateEdit" class="checkOrder" name="constructionEstimateEdit" value="1"<!--{if $select.constructionEstimateEdit == 1}--> checked<!--{/if}-->>
											<label for="constructionEstimateEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>初期積算データ</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="integrationDataBrowse" class="checkOrder checkBlowse" name="integrationDataBrowse" value="1"<!--{if $select.integrationDataBrowse == 1}--> checked<!--{/if}-->>
											<label for="integrationDataBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="integrationDataEdit" class="checkOrder" name="integrationDataEdit" value="1"<!--{if $select.integrationDataEdit == 1}--> checked<!--{/if}-->>
											<label for="integrationDataEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>積算データ成形</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="integrationFormBrowse" class="checkOrder checkBlowse" name="integrationFormBrowse" value="1"<!--{if $select.integrationFormBrowse == 1}--> checked<!--{/if}-->>
											<label for="integrationFormBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="integrationFormEdit" class="checkOrder" name="integrationFormEdit" value="1"<!--{if $select.integrationFormEdit == 1}--> checked<!--{/if}-->>
											<label for="integrationFormEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>見込原価情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="expectedCostBrowse" class="checkBlowse checkOrder" name="expectedCostBrowse" value="1"<!--{if $select.expectedCostBrowse == 1}--> checked<!--{/if}-->>
											<label for="expectedCostBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="expectedCostEdit" class="checkOrder" name="expectedCostEdit" value="1"<!--{if $select.expectedCostEdit == 1}--> checked<!--{/if}-->>
											<label for="expectedCostEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>発注</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionOrderBrowse" class="checkOrder checkBlowse" name="constructionOrderBrowse" value="1"<!--{if $select.constructionOrderBrowse == 1}--> checked<!--{/if}-->>
											<label for="constructionOrderBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionOrderEdit" class="checkOrder" name="constructionOrderEdit" value="1"<!--{if $select.constructionOrderEdit == 1}--> checked<!--{/if}-->>
											<label for="constructionOrderEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>見積・発注・完了報告書 一覧</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="reportListBrowse" class="checkBlowse checkOrder" name="reportListBrowse" value="1"<!--{if $select.reportListBrowse == 1}--> checked<!--{/if}-->>
											<label for="reportListBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="reportListEdit" class="checkOrder" name="reportListEdit" value="1"<!--{if $select.reportListEdit == 1}--> checked<!--{/if}-->>
											<label for="reportListEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>工事経費情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionCostBrowse" class="checkOrder checkBlowse" name="constructionCostBrowse" value="1"<!--{if $select.constructionCostBrowse == 1}--> checked<!--{/if}-->>
											<label for="constructionCostBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="constructionCostEdit" class="checkOrder" name="constructionCostEdit" value="1"<!--{if $select.constructionCostEdit == 1}--> checked<!--{/if}-->>
											<label for="constructionCostEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>実行原価情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="executionCostBrowse" class="checkBlowse checkOrder" name="executionCostBrowse" value="1"<!--{if $select.executionCostBrowse == 1}--> checked<!--{/if}-->>
											<label for="executionCostBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="executionCostEdit" class="checkOrder" name="executionCostEdit" value="1"<!--{if $select.executionCostEdit == 1}--> checked<!--{/if}-->>
											<label for="executionCostEdit"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<ul class="horizontal noTtl">
							<li class="mr10">
								<div class="checkBox">
									<input type="checkbox" id="checkAllPermission5" class="checkAll" name="FN_checkAllPermission5">
									<label for="checkAllPermission5">全てに権限にチェックを入れる</label>
								</div>
							</li>
							<li>
								<div class="checkBox">
									<input type="checkbox" id="checkBrowsePermission5" class="checkBlowseAll" name="FN_checkBrowsePermission5">
									<label for="checkBrowsePermission5">閲覧権限のみ、全てにチェックを入れる</label>
								</div>
							</li>
						</ul>
						<table class="tableB">
							<tbody>
								<tr>
									<th></th>
									<th class="bdln w210"></th>
									<th class="w48">閲覧権限</th>
									<th class="w84">操作／編集権限</th>
								</tr>
								<tr>
									<td rowspan="11" class="txtCenter">経理処理</td>
									<td>請求書発行</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="billingBrowse" class="checkOrder checkBlowse" name="billingBrowse" value="1"<!--{if $select.billingBrowse == 1}--> checked<!--{/if}-->>
											<label for="billingBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="billingEdit" class="checkOrder" name="billingEdit" value="1"<!--{if $select.billingEdit == 1}--> checked<!--{/if}-->>
											<label for="billingEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>入金処理</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentProccessBrowse" class="checkOrder checkBlowse" name="paymentProccessBrowse" value="1"<!--{if $select.paymentProccessBrowse == 1}--> checked<!--{/if}-->>
											<label for="paymentProccessBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentProccessEdit" class="checkOrder" name="paymentProccessEdit" value="1"<!--{if $select.paymentProccessEdit == 1}--> checked<!--{/if}-->>
											<label for="paymentProccessEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>入金予定表</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentScheduleBrowse" class="checkOrder checkBlowse" name="paymentScheduleBrowse" value="1"<!--{if $select.paymentScheduleBrowse == 1}--> checked<!--{/if}-->>
											<label for="paymentScheduleBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentScheduleEdit" class="checkOrder" name="paymentScheduleEdit" value="1"<!--{if $select.paymentScheduleEdit == 1}--> checked<!--{/if}-->>
											<label for="paymentScheduleEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>売掛情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsReceivableBrowse" class="checkOrder checkBlowse" name="accountsReceivableBrowse" value="1"<!--{if $select.accountsReceivableBrowse == 1}--> checked<!--{/if}-->>
											<label for="accountsReceivableBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsReceivableEdit" class="checkOrder" name="accountsReceivableEdit" value="1"<!--{if $select.accountsReceivableEdit == 1}--> checked<!--{/if}-->>
											<label for="accountsReceivableEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>受請求書処理</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="invoiceProcessBrowse" class="checkBlowse checkOrder" name="invoiceProcessBrowse" value="1"<!--{if $select.invoiceProcessBrowse == 1}--> checked<!--{/if}-->>
											<label for="invoiceProcessBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="invoiceProcessEdit" class="checkOrder" name="invoiceProcessEdit" value="1"<!--{if $select.invoiceProcessEdit == 1}--> checked<!--{/if}-->>
											<label for="invoiceProcessEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>支払処理</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentProcessBrowse" class="checkBlowse checkOrder" name="paymentProcessBrowse" value="1"<!--{if $select.paymentProcessBrowse == 1}--> checked<!--{/if}-->>
											<label for="paymentProcessBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentProcessEdit" class="checkOrder" name="paymentProcessEdit" value="1"<!--{if $select.paymentProcessEdit == 1}--> checked<!--{/if}-->>
											<label for="paymentProcessEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>自社経費登録</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="expensesBrowse" class="checkBlowse checkOrder" name="expensesBrowse" value="1"<!--{if $select.expensesBrowse == 1}--> checked<!--{/if}-->>
											<label for="expensesBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="expensesEdit" class="checkOrder" name="expensesEdit" value="1"<!--{if $select.expensesEdit == 1}--> checked<!--{/if}-->>
											<label for="expensesEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>支払予定表</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentSchedule2Browse" class="checkOrder checkBlowse" name="paymentSchedule2Browse" value="1"<!--{if $select.paymentSchedule2Browse == 1}--> checked<!--{/if}-->>
											<label for="paymentSchedule2Browse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="paymentSchedule2Edit" class="checkOrder" name="paymentSchedule2Edit" value="1"<!--{if $select.paymentSchedule2Edit == 1}--> checked<!--{/if}-->>
											<label for="paymentSchedule2Edit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>買掛情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsPayableBrowse" class="checkOrder checkBlowse" name="accountsPayableBrowse" value="1"<!--{if $select.accountsPayableBrowse == 1}--> checked<!--{/if}-->>
											<label for="accountsPayableBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountsPayableEditEdit" class="checkOrder" name="accountsPayableEdit" value="1"<!--{if $select.accountsPayableEdit == 1}--> checked<!--{/if}-->>
											<label for="accountsPayableEditEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>仕掛金情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="workInProcessBrowse" class="checkBlowse checkOrder" name="workInProcessBrowse" value="1"<!--{if $select.workInProcessBrowse == 1}--> checked<!--{/if}-->>
											<label for="workInProcessBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="workInProcessEditEdit" class="checkOrder" name="workInProcessEdit" value="1"<!--{if $select.workInProcessEdit == 1}--> checked<!--{/if}-->>
											<label for="workInProcessEditEdit"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td>入手金情報</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountActivityBrowse" class="checkOrder checkBlowse" name="accountActivityBrowse" value="1"<!--{if $select.accountActivityBrowse == 1}--> checked<!--{/if}-->>
											<label for="accountActivityBrowse"></label>
										</div>
									</td>
									<td class="txtCenter">
										<div class="checkBox">
											<input type="checkbox" id="accountActivityEdit" class="checkOrder" name="accountActivityEdit" value="1"<!--{if $select.accountActivityEdit == 1}--> checked<!--{/if}-->>
											<label for="accountActivityEdit"></label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
            <br />
            <div class="txtCenter">
                <button class="btnReload" type="submit">登録・更新する</button>
            </div>
			<!--{/if}-->
		</form>
	<!--{/if}-->
<!--{/if}-->
