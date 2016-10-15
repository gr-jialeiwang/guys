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

<script type="text/javascript">//<![CDATA[
function change_linkItemNum(linkItemNum) {
    if (window.confirm('連動品目数を変更しますか？')) {
    	$("#mode").val('changeLinkItemNum');
        $("form[name=form1]").submit();
    } else {
    	$("#linkItemNum").val(linkItemNum);
    	return false;
    }
}
function add_linkItemSub(no) {
    var itemNum = $("#Ren"+no+"_itemNum").val();
    itemNum++;
	$("#mode").val('addLinkItemSub');
    $("#Ren"+no+"_itemNum").val(itemNum);
    $("form[name=form1]").submit();
}
function del_linkItemSub(no, subNo) {

    var itemNum = $("#Ren"+no+"_itemNum").val();
    
	if (itemNum <= 1) {
        $("#Ren"+no+"_Sub1_unitPrice").val('');
        $("#Ren"+no+"_Sub1_orderClient").val('');
        return false;
	}

    $("#mode").val('delLinkItemSub');
    $("#delLinkItemNo").val(no);
    $("#delLinkItemSubNo").val(subNo);
    itemNum--;
    $("#Ren"+no+"_itemNum").val(itemNum);
    $("form[name=form1]").submit();
}


//]]></script>

        <form name="form1" action="?" method="POST">
            <input type="hidden" name="mode" id="mode" value="<!--{$editMode}-->" />
            <input type="hidden" name="id" value="<!--{$id}-->" />
            <input type="hidden" name="delLinkItemNo" id="delLinkItemNo" />
            <input type="hidden" name="delLinkItemSubNo" id="delLinkItemSubNo" />
            <section class="pageTop pb20">
                <div class="container">
                    <div class="pageTitle clearfix">
                        <div class="boxLeft mr8">
                            <div class="btnBack"><a href="index.php">戻る</a></div>
                        </div>
                        <div class="boxLeft">
                            <h2>品番一覧／登録・編集</h2>
                        </div>
                        <!--{if $mode == "edit" || $editMode == "editRegist"}-->
                        <div class="boxRight">
                            <a href="javascript:void(0)" onclick="delete_confirm();"><button class="btnReload" type="button" >削除</button></a>
                        </div>
                        <!--{/if}-->
                    </div>
                    <!--{if $editMode != "delRegistered"}-->
                    <div class="headingB">
                        <!--{if $mode == "new" || $editMode == "newRegist"}-->
                        <h3>品番 新規登録</h3>
                        <!--{elseif $mode == "edit" || $editMode == "editRegist"}-->
                        <h3>品番 編集</h3>
                        <!--{/if}-->
                    </div>
                    <table class="tableA">
                        <tr>
                            <th class="w100">工事カテゴリー</th>
                            <td>
                                <select name="constructionCategory" class="w100p">
                                    <option value="">選択しない</option>
                                    <option value="1" <!--{if $select.constructionCategory == '1'}--> selected<!--{/if}-->>サイディング</option>
                                    <option value="2" <!--{if $select.constructionCategory == '2'}--> selected<!--{/if}-->>屋根・樋</option>
                                    <option value="3" <!--{if $select.constructionCategory == '3'}--> selected<!--{/if}-->>外溝</option>
                                </select>
                            </td>
                            <th class="w100">品番</th>
                            <td>
                                <input type="text" name="productNumber" class="w100p" value="<!--{$select.productNumber}-->">
                            </td>
                            <th class="w87">連動品目数</th>
                            <td>
                                <select name="linkItemNum" id="linkItemNum" class="w100p" onChange="change_linkItemNum('<!--{$select.linkItemNum}-->');">
                                    <option value="1" <!--{if $select.linkItemNum == '1'}--> selected<!--{/if}-->>1</option>
                                    <option value="2" <!--{if $select.linkItemNum == '2'}--> selected<!--{/if}-->>2</option>
                                    <option value="3" <!--{if $select.linkItemNum == '3'}--> selected<!--{/if}-->>3</option>
                                    <option value="4" <!--{if $select.linkItemNum == '4'}--> selected<!--{/if}-->>4</option>
                                    <option value="5" <!--{if $select.linkItemNum == '5'}--> selected<!--{/if}-->>5</option>
                                    <option value="6" <!--{if $select.linkItemNum == '6'}--> selected<!--{/if}-->>6</option>
                                    <option value="7" <!--{if $select.linkItemNum == '7'}--> selected<!--{/if}-->>7</option>
                                    <option value="8" <!--{if $select.linkItemNum == '8'}--> selected<!--{/if}-->>8</option>
                                    <option value="9" <!--{if $select.linkItemNum == '9'}--> selected<!--{/if}-->>9</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th class="w100">タイプ</th>
                            <td>
                                <input type="text" name="type" class="w100p" value="<!--{$select.type}-->">
                            </td>
                            </td>
                            <th class="w100">名称</th>
                            <td>
                                <input type="text" name="productName" class="w100p" value="<!--{$select.productName}-->">
                            </td>
                            <th class="w87">色名</th>
                            <td>
                                <input type="text" name="color" class="w100p" value="<!--{$select.color}-->">
                            </td>
                        </tr>
                        <tr>
                            <th class="w100">単価</th>
                            <td>
                                <input type="text" name="unitPrice" class="w100p" value="<!--{$select.unitPrice}-->">
                            </td>
                            <th class="w100">特色単価</th>
                            <td colspan="3">
                                <input type="text" name="unitPriceColor" class="w100" value="<!--{$select.unitPriceColor}-->">
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
            <!--{if $editMode != "delRegistered"}-->
            <!--{assign var=linkItemNum value=$select.linkItemNum}-->
            <!--{if $linkItemNum < 1}-->
                <!--{assign var=linkItemNum value=1}-->
            <!--{/if}-->
            <!--{if $linkItemNum > 0}-->
            <div class="container">                <!--{section name=linkItem start=0 loop=$linkItemNum step=1}-->
                <!--{assign var=key value=Ren`$smarty.section.linkItem.iteration`_itemNum}-->
                <!--{assign var=itemNum value=$select[$key]}-->
                <!--{if $itemNum < 1}-->
                    <!--{assign var=itemNum value=1}-->
                <!--{/if}-->
                <div class="headingB">
                    <h3>連動品目(<!--{$smarty.section.linkItem.iteration}-->)</h3>
                </div>
                <input type="hidden" name="Ren<!--{$smarty.section.linkItem.iteration}-->_itemNum" id="Ren<!--{$smarty.section.linkItem.iteration}-->_itemNum" value="<!--{$itemNum}-->" />
                <table class="tableA w401">
                    <tbody>
                        <tr>
                            <th class="w40">品名</th>
                            <td>
                                <!--{assign var=key value=Ren`$smarty.section.linkItem.iteration`_productName}-->
                                <input type="text" class="w100p" name="Ren<!--{$smarty.section.linkItem.iteration}-->_productName" value="<!--{$select[$key]}-->">
                            </td>
                            <th class="w40">品番</th>
                            <td>
                                <!--{assign var=key value=Ren`$smarty.section.linkItem.iteration`_productNumber}-->
                                <input type="text" class="w100p" name="Ren<!--{$smarty.section.linkItem.iteration}-->_productNumber" value="<!--{$select[$key]}-->">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="tableA w260 mb10">
                    <tbody>
                        <tr>
                            <th class="w100">デフォルト単価</th>
                            <td class="">
                                <!--{assign var=key value=Ren`$smarty.section.linkItem.iteration`_defaultUnitPrice}-->
                                <input type="text" class="w100p" name="Ren<!--{$smarty.section.linkItem.iteration}-->_defaultUnitPrice" value="<!--{$select[$key]}-->">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="w150 boxLeft txtCenter">
                        ┗発注先 連動単価
                    </div>
                    <div class="boxLeft">
                        <table class="tableA">
	                        <!--{section name=linkItemSub start=0 loop=$itemNum step=1}-->
                            <tr>
                                <th>発注先</th>
                                <td>
                                    <!--{assign var=key value=Ren`$smarty.section.linkItem.iteration`_Sub`$smarty.section.linkItemSub.iteration`_orderClient}-->
                                    <select name="Ren<!--{$smarty.section.linkItem.iteration}-->_Sub<!--{$smarty.section.linkItemSub.iteration}-->_orderClient" id="Ren<!--{$smarty.section.linkItem.iteration}-->_Sub<!--{$smarty.section.linkItemSub.iteration}-->_orderClient">
                                        <option value="">選択しない</option>
	                                    <!--{foreach from=$selectMaster.orderClient item=value name=cnt}-->
	                                    <option value="<!--{$value.masterId}-->"<!--{if $select[$key] == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
	                                    <!--{/foreach}-->
                                    </select>
                                </td>
                                <th>単価</th>
                                <!--{assign var=key value=Ren`$smarty.section.linkItem.iteration`_Sub`$smarty.section.linkItemSub.iteration`_unitPrice}-->
                                <td><input type="text" name="Ren<!--{$smarty.section.linkItem.iteration}-->_Sub<!--{$smarty.section.linkItemSub.iteration}-->_unitPrice" id="Ren<!--{$smarty.section.linkItem.iteration}-->_Sub<!--{$smarty.section.linkItemSub.iteration}-->_unitPrice" value="<!--{$select[$key]}-->"></td>
                                <td class="bdl">
                                    <a href="javascript:void(0)" class="btnDecrease mr7" onclick="del_linkItemSub('<!--{$smarty.section.linkItem.iteration}-->', '<!--{$smarty.section.linkItemSub.iteration}-->');">+</a>
                                    <!--{if $smarty.section.linkItemSub.last}-->
                                    <a href="javascript:void(0)" class="btnIncrease" onclick="add_linkItemSub('<!--{$smarty.section.linkItem.iteration}-->');">+</a>
                                    <!--{/if}-->
                                </td>
                            </tr>
	                        <!--{/section}-->
                        </table>
                    </div>
                </div>
                <hr class="pt20 mb20">
				<!--{/section}-->
                <br />
                <div class="txtCenter">
                    <button class="btnReload" type="submit">登録・更新する</button>
                </div>
            </div>
            <!--{/if}-->
            <!--{/if}-->
        </form>
    <!--{/if}-->
<!--{/if}-->
