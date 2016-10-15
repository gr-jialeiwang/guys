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
            <input type="hidden" name="stockId" value="<!--{$stockId}-->" />
			<section class="pageTop pb20">
				<div class="container">
                    <nav id="subNavTop" class="navKoji">
                        <ul>
                            <li class="leftEnd"><a href="../new_koji/index.php">新規工事登録</a></li>
                            <li><a href="../koji_search/index.php">工事情報</a></li>
                            <li><a href="../romu-shinsei/index.php">労務申請・承認</a></li>
                            <li><a href="../material-hanbai/index.php">材料販売登録</a></li>
                            <li class="currentLink"><a href="index.php">在庫一覧/登録</a></li>
                            <li class="rightEnd"><a href="../material-nohinsho/index.php">材料納品書照合</a></li>
                        </ul>
                    </nav>
				
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>在庫一覧／登録・編集</h2>
						</div>
                        <!--{if $mode == "edit" || $editMode == "editRegist"}-->
                        <div class="boxRight">
                            <a href="#" onclick="delete_confirm();"><button class="btnReload" type="button" >削除</button></a>
                        </div>
                        <!--{/if}-->
					</div>
                    <!--{if $editMode != "delRegistered"}-->
					<div class="headingB">
                        <!--{if $mode == "new" || $editMode == "newRegist"}-->
                        <h3>在庫 新規登録</h3>
                        <!--{elseif $mode == "edit" || $editMode == "editRegist"}-->
                        <h3>在庫 編集</h3>
				        <!--{/if}-->
					</div>
                    <table class="tableA">
                        <tr>
                            <th class="w51">品名</th>
                            <td>
                                <input type="text" name="productName" class="w100p" value="<!--{$select.productName}-->">
                            </td>
                            <th class="w111">仕様／規格／摘要</th>
                            <td>
                                <input type="text" name="summary" class="w100p" value="<!--{$select.summary}-->">
                            </td>
                            <th class="w40">品番</th>
                            <td>
                                <input type="text" name="productNumber" class="w100p" value="<!--{$select.productNumber}-->">
                            </td>
                        </tr>
                    </table>
                    <table class="tableA">
                        <tr class="bdt">
                            <th class="w51">在庫数</th>
                            <td class="w111">
                                <input type="text" name="stock" class="w111" value="<!--{$select.stock}-->">
                            </td>
                            <th class="w40">単位</th>
                            <td class="w105">
                                <select name="unit" class="w105">
                                    <option value="">選択</option>
                                    <!--{foreach from=$selectMaster.unit key=key item=value name=cnt}-->
                                    <option value="<!--{$value.masterId}-->"<!--{if $select.unit == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
                                    <!--{/foreach}-->
                                </select>
                            </td>
                            <th class="w40">単価</th>
                            <td>
                                <input type="text" name="unitPrice" class="w140" value="<!--{$select.unitPrice}-->">
                            </td>
                        </tr>
                    </table>
                    <br />
                    <div class="txtCenter">
                        <button class="btnReload" type="submit">登録・更新する</button>
                    </div>
                    <!--{/if}-->
				</div>
			</section>
		</form>
	<!--{/if}-->
<!--{/if}-->
