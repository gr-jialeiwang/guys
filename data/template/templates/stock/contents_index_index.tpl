<!--{if $view_flg1 == 0}-->
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<!--{else}-->
        <form name="form" action="?" method="GET">
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
                        <div class="boxRight">
                            <a href="edit.php?mode=new" class="btnReload">新規登録</a>
                        </div>
                    </div>
                    <table class="tableA w663">
                        <tr>
                            <th class="w87">在庫金額累計</th>
                            <td class="txtRight"><!--{$stockPriceTotal|number_format}--></td>
                            <th class="w100">品名・品番検索</th>
                            <td class="w175" ><input type="text" class="w175" name="searchWord" value="<!--{$searchWord}-->"></td>
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
                            <li class="toFirstPage"><a href="?searchWord=<!--{$searchWord}-->&page=1" >最初へ</a></li>
                        <!--{/if}-->
                        <!--{if $pagingArr.rev != ""}-->
                            <li><a href="?searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.rev}-->" >&lt;&lt;</a></li>
                        <!--{/if}-->
                        <!--{section name=i start=$pagingArr.p_start loop=$pagingArr.p_end_plus}-->
                            <!--{if $pageNo == $smarty.section.i.index}-->
                                <li class="current"><!--{$smarty.section.i.index}--></li>
                            <!--{else}-->
                                <li><a href="?searchWord=<!--{$searchWord}-->&page=<!--{$smarty.section.i.index}-->"><!--{$smarty.section.i.index}--></a></li>
                            <!--{/if}-->
                        <!--{/section}-->
                        <!--{if $pagingArr.next != ""}-->
                            <li><a href="?searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.next}-->" >&gt;&gt;</a></li>
                        <!--{/if}-->
                        <!--{if $pagingArr.p_cnt > 1 && $pagingArr.next != ""}-->
                            <li class="toLastPage"><a href="?searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.p_cnt}-->" >最後へ</a></li>
                        <!--{/if}-->
                    </ul>
                </div>
            </div>
        </div>
        <table class="tableB">
            <thead>
                <tr>
                    <th class="w75">登録日</th>
                    <th class="w75">更新日</th>
                    <th class="w196">品名</th>
                    <th>仕様・規格・摘要</th>
                    <th class="w124">品番</th>
                    <th class="w53">在庫数<br>単位</th>
                    <th class="w70">単価</th>
                    <th class="w70">在庫金額</th>
                    <th class="w53">編集</th>
                </tr>
            </thead>
        </table>
        <ul class="sortable">
            <!--{foreach from=$select key=key item=value name=cnt}-->
                <li id="<!--{$smarty.foreach.cnt.iteration}-->">
                    <table class="tableB">
                        <thead>
                            <tr>
                                <td class="w75 txtCenter"><!--{$value.regist_date|date_format:"%Y/%m/%d"}--></td>
                                <td class="w75 txtCenter"><!--{$value.update_date|date_format:"%Y/%m/%d"}--></td>
                                <td class="w196"><!--{$value.productName}--></td>
                                <td><!--{$value.summary}--></td>
                                <td class="w124 txtCenter"><!--{$value.productNumber}--></td>
                                <td class="w53 txtCenter"><!--{$value.stock|number_format}--><br><!--{$value.unitName}--></td>
                                <td class="w70 txtRight"><!--{$value.unitPrice|number_format}--></td>
                                <td class="w70 txtRight"><!--{$value.stockPrice|number_format}--></td>
                                <td class="w53 txtCenter"">
                                    <!--{if $view_flg2 == 1}-->
                                        <p class="iconLink"><a href="edit.php?mode=edit&stockId=<!--{$value.stockId}-->"><img src="/img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
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
                            <li class="toFirstPage"><a href="?searchWord=<!--{$searchWord}-->&page=1" >最初へ</a></li>
                        <!--{/if}-->
                        <!--{if $pagingArr.rev != ""}-->
                            <li><a href="?searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.rev}-->" >&lt;&lt;</a></li>
                        <!--{/if}-->
                        <!--{section name=i start=$pagingArr.p_start loop=$pagingArr.p_end_plus}-->
                            <!--{if $pageNo == $smarty.section.i.index}-->
                                <li class="current"><!--{$smarty.section.i.index}--></li>
                            <!--{else}-->
                                <li><a href="?searchWord=<!--{$searchWord}-->&page=<!--{$smarty.section.i.index}-->"><!--{$smarty.section.i.index}--></a></li>
                            <!--{/if}-->
                        <!--{/section}-->
                        <!--{if $pagingArr.next != ""}-->
                            <li><a href="?searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.next}-->" >&gt;&gt;</a></li>
                        <!--{/if}-->
                        <!--{if $pagingArr.p_cnt > 1 && $pagingArr.next != ""}-->
                            <li class="toLastPage"><a href="?searchWord=<!--{$searchWord}-->&page=<!--{$pagingArr.p_cnt}-->" >最後へ</a></li>
                        <!--{/if}-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!--{/if}-->
