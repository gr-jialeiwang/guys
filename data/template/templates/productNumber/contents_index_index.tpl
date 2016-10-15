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
        <form name="form" action="?" method="GET">
            <input type="hidden" name="mode" id="mode" value="<!--{$mode}-->" />
            <input type="hidden" name="id" id="id" value="" />
            <section class="pageTop pb20">
                <div class="container">
                    <div class="pageTitle clearfix">
                        <div class="boxLeft mr8">
                            <div class="btnBack"><a href="index.php">戻る</a></div>
                        </div>
                        <div class="boxLeft">
                            <h2>品番一覧／登録・編集</h2>
                        </div>
                        <div class="boxRight">
                            <a href="edit.php?mode=new" class="btnReload">新規登録</a>
                        </div>
                    </div>
                    <div class="headingB">
                        <h3>表示選択／絞込み</h3>
                    </div>
                    <table class="tableA">
                        <tr>
                            <th class="w100">工事カテゴリー</th>
                                <td class="w125" >
	                            <select name="searchCategory" class="w105">
	                                <option value="">選択しない</option>
                                    <option value="1" <!--{if $arrForm.searchCategory == '1'}--> selected<!--{/if}-->>サイディング</option>
                                    <option value="2" <!--{if $arrForm.searchCategory == '2'}--> selected<!--{/if}-->>屋根・樋</option>
                                    <option value="3" <!--{if $arrForm.searchCategory == '3'}--> selected<!--{/if}-->>外溝</option>
	                            </select>
	                            </td>
                            <th class="w100">品名・品番検索</th>
                            <td class="w200" ><input type="text" class="w200" name="searchProduct" value="<!--{$arrForm.searchProduct}-->"></td>
                            <th class="w100">テキスト検索</th>
                            <td class="w200" ><input type="text" class="w200" name="searchWord" value="<!--{$arrForm.searchWord}-->"></td>
                            <td class="bdl txtCenter">
                                <button class="buttonA" type="submit">検索</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>
        </form>
    <div class="container">
        <div class="clearfix pt10">
            <div class="boxRight">
                <div class="pagination">
                    <p class="resultStates"><!--{$countSelectQuery}-->件中<!--{$pagingArr.start_view}-->〜<!--{$pagingArr.end_view}-->件</p>
                    <ul class="paging">
                        <!--{if $pagingArr.p_cnt > 1 && $pagingArr.rev != ""}-->
                            <li class="toFirstPage"><a href="?searchCategory=<!--{$searchCategory}-->&searchProduct=<!--{$searchProduct}-->&searchWord=<!--{$searchWord}-->&page=1" >最初へ</a></li>
                        <!--{/if}-->
                        <!--{if $pagingArr.rev != ""}-->
                            <li><a href="?searchCategory=<!--{$searchCategory}-->&searchProduct=<!--{$searchProduct}-->&searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.rev}-->" >&lt;&lt;</a></li>
                        <!--{/if}-->
                        <!--{section name=i start=$pagingArr.p_start loop=$pagingArr.p_end_plus}-->
                            <!--{if $pageNo == $smarty.section.i.index}-->
                                <li class="current"><!--{$smarty.section.i.index}--></li>
                            <!--{else}-->
                                <li><a href="?searchCategory=<!--{$searchCategory}-->&searchProduct=<!--{$searchProduct}-->&searchWord=<!--{$searchWord}-->&page=<!--{$smarty.section.i.index}-->"><!--{$smarty.section.i.index}--></a></li>
                            <!--{/if}-->
                        <!--{/section}-->
                        <!--{if $pagingArr.next != ""}-->
                            <li><a href="?searchCategory=<!--{$searchCategory}-->&searchProduct=<!--{$searchProduct}-->&searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.next}-->" >&gt;&gt;</a></li>
                        <!--{/if}-->
                        <!--{if $pagingArr.p_cnt > 1 && $pagingArr.next != ""}-->
                            <li class="toLastPage"><a href="?searchCategory=<!--{$searchCategory}-->&searchProduct=<!--{$searchProduct}-->&searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.p_cnt}-->" >最後へ</a></li>
                        <!--{/if}-->
                    </ul>
                </div>
            </div>
        </div>
        <table class="tableB">
            <thead>
                <tr>
	                <th class="w98">工事カテゴリー</th>
	                <th>品番登録</th>
	                <th class="w120">タイプ</th>
	                <th class="w120">名称</th>
	                <th class="w120">色名</th>
	                <th class="w70">連動品目数</th>
	                <th class="w80">登録・更新日</th>
	                <th class="w80">登録・更新者</th>
	                <th class="w25">詳細</th>
	                <th class="w25">削除</th>
                </tr>
            </thead>
        </table>
        <ul class="sortable">
            <!--{foreach from=$select key=key item=value name=cnt}-->
                <li id="<!--{$smarty.foreach.cnt.iteration}-->">
                    <table class="tableB">
                        <thead>
                            <tr>
                                <td class="w98 txtCenter">
                                    <!--{if $value.constructionCategory == 1}-->サイディング<!--{/if}-->
                                    <!--{if $value.constructionCategory == 2}-->屋根・樋<!--{/if}-->
                                    <!--{if $value.constructionCategory == 3}-->外溝<!--{/if}-->
                                </td>
                                <td><!--{$value.productNumber}--></td>
                                <td class="w120"><!--{$value.type}--></td>
                                <td class="w120"><!--{$value.productName}--></td>
                                <td class="w120"><!--{$value.color}--></td>
                                <td class="w70 txtCenter"><!--{$value.linkItemNum}--></td>
                                <td class="w80 txtCenter"><!--{$value.update_date|date_format:"%Y/%m/%d"}--></td>
                                <td class="w80 txtCenter"><!--{$value.update_staffName}--></td>
                                <td class="w25 txtCenter">
                                <!--{if $view_flg2 == 1}-->
                                    <p class="iconLink"><a href="edit.php?mode=edit&id=<!--{$value.id}-->"><img src="/img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
                                <!--{/if}-->
                                </td>
                                <td class="w25 txtCenter">
                                <!--{if $view_flg2 == 1}-->
                                    <p class="iconLink"><a href="#" onclick="confirm_submit('delRegist', '<!--{$value.id}-->', 'form', '登録品番（<!--{$value.productNumber}-->）を削除しますか？');"><img src="/img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
                                <!--{/if}-->
                                </td>
                            </tr>
                        </thead>
                    </table>
                </li>
            <!--{/foreach}-->
        </ul>
        <div class="clearfix pt10">
            <div class="boxRight">
                <div class="pagination">
                    <p class="resultStates"><!--{$countSelectQuery}-->件中<!--{$pagingArr.start_view}-->〜<!--{$pagingArr.end_view}-->件</p>
                    <ul class="paging">
                        <!--{if $pagingArr.p_cnt > 1 && $pagingArr.rev != ""}-->
                            <li class="toFirstPage"><a href="?searchCategory=<!--{$searchCategory}-->&searchProduct=<!--{$searchProduct}-->&searchWord=<!--{$searchWord}-->&page=1" >最初へ</a></li>
                        <!--{/if}-->
                        <!--{if $pagingArr.rev != ""}-->
                            <li><a href="?searchCategory=<!--{$searchCategory}-->&searchProduct=<!--{$searchProduct}-->&searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.rev}-->" >&lt;&lt;</a></li>
                        <!--{/if}-->
                        <!--{section name=i start=$pagingArr.p_start loop=$pagingArr.p_end_plus}-->
                            <!--{if $pageNo == $smarty.section.i.index}-->
                                <li class="current"><!--{$smarty.section.i.index}--></li>
                            <!--{else}-->
                                <li><a href="?searchCategory=<!--{$searchCategory}-->&searchProduct=<!--{$searchProduct}-->&searchWord=<!--{$searchWord}-->&page=<!--{$smarty.section.i.index}-->"><!--{$smarty.section.i.index}--></a></li>
                            <!--{/if}-->
                        <!--{/section}-->
                        <!--{if $pagingArr.next != ""}-->
                            <li><a href="?searchCategory=<!--{$searchCategory}-->&searchProduct=<!--{$searchProduct}-->&searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.next}-->" >&gt;&gt;</a></li>
                        <!--{/if}-->
                        <!--{if $pagingArr.p_cnt > 1 && $pagingArr.next != ""}-->
                            <li class="toLastPage"><a href="?searchCategory=<!--{$searchCategory}-->&searchProduct=<!--{$searchProduct}-->&searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.p_cnt}-->" >最後へ</a></li>
                        <!--{/if}-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--{/if}-->
<!--{/if}-->