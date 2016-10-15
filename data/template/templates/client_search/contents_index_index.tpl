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
		<section class="pageTop mb30">
			<div class="container">
				<div class="pageTitle clearfix">
					<div class="boxLeft mr8">
						<div class="btnBack"><a href="/">戻る</a></div>
					</div>
					<div class="boxLeft">
						<h2>取引先／検索結果</h2>
					</div>
				</div>
				<form name="form1" action="?searchClient=<!--{$searchClient}-->" method="POST">
					<input type="hidden" name="mode" id="mode" value="filter" />





                    <table class="tableA">
                        <tr>
                            <th class="w100">取引ステータス</th>
                            <td class="w125" >
	                            <select name="searchState" class="w210">
	                                <option value="">選択しない</option>
	                                <option value="1"<!--{if $searchState == 1}--> selected<!--{/if}-->>継続中</option>
	                                <option value="2"<!--{if $searchState == 2}--> selected<!--{/if}-->>停止</option>
	                            </select>
                            </td>
                            <th class="w100">取引タイプ</th>
                            <td class="w125" >
                                <select name="searchType" class="w220">
                                    <option value="">選択しない</option>
                                    <option value="1"<!--{if $searchType == 1}--> selected<!--{/if}-->>継続取引</option>
                                    <option value="2"<!--{if $searchType == 2}--> selected<!--{/if}-->>単発取引</option>
                                    <option value="3"<!--{if $searchType == 3}--> selected<!--{/if}-->>外注先</option>
                                </select>
                            </td>
                            <td class="bdl txtCenter">
                                <button class="buttonA" type="submit">検索</button>
                            </td>
                        </tr>
                    </table>
				</form>
				<form name="form2" action="?searchClient=<!--{$searchClient}-->" method="POST">
					<input type="hidden" name="mode" value="csv" />
					<input type="hidden" name="searchClient" value="<!--{$searchClient}-->" />
					<input type="hidden" name="searchState" value="<!--{$searchState}-->" />
					<input type="hidden" name="searchType" value="<!--{$searchType}-->" />
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload">CSV出力</button>
						</div>
					</div>
				</form>
			</div>
		</section>
		<div class="container">
			<div class="clearfix">
				<div class="boxRight">
					<div class="pagination">
						<p class="resultStates"><!--{$countSelectQuery}-->件中<!--{$pagingArr.start_view}-->〜<!--{$pagingArr.end_view}-->件</p>
						<ul class="paging">
							<!--{if $pagingArr.p_cnt > 1 && $pagingArr.rev != ""}-->
								<li class="toFirstPage"><a href="?page=1<!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}--><!--{if $searchState != ""}-->&searchState=<!--{$searchState}--><!--{/if}--><!--{if $searchType != ""}-->&searchType=<!--{$searchType}--><!--{/if}-->" >最初へ</a></li>
							<!--{/if}-->
							<!--{if $pagingArr.rev != ""}-->
								<li><a href="?page=<!--{$pagingArr.rev}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}--><!--{if $searchState != ""}-->&searchState=<!--{$searchState}--><!--{/if}--><!--{if $searchType != ""}-->&searchType=<!--{$searchType}--><!--{/if}-->" >&lt;&lt;</a></li>
							<!--{/if}-->
							<!--{section name=i start=$pagingArr.p_start loop=$pagingArr.p_end_plus}-->
								<!--{if $pageNo == $smarty.section.i.index}-->
									<li class="current"><!--{$smarty.section.i.index}--></li>
								<!--{else}-->
									<li><a href="?page=<!--{$smarty.section.i.index}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}--><!--{if $searchState != ""}-->&searchState=<!--{$searchState}--><!--{/if}--><!--{if $searchType != ""}-->&searchType=<!--{$searchType}--><!--{/if}-->"><!--{$smarty.section.i.index}--></a></li>
								<!--{/if}-->
							<!--{/section}-->
							<!--{if $pagingArr.next != ""}-->
								<li><a href="?page=<!--{$pagingArr.next}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}--><!--{if $searchState != ""}-->&searchState=<!--{$searchState}--><!--{/if}--><!--{if $searchType != ""}-->&searchType=<!--{$searchType}--><!--{/if}-->" >&gt;&gt;</a></li>
							<!--{/if}-->
							<!--{if $pagingArr.p_cnt > 1 && $pagingArr.next != ""}-->
								<li class="toLastPage"><a href="?page=<!--{$pagingArr.p_cnt}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}--><!--{if $searchState != ""}-->&searchState=<!--{$searchState}--><!--{/if}--><!--{if $searchType != ""}-->&searchType=<!--{$searchType}--><!--{/if}-->" >最後へ</a></li>
							<!--{/if}-->
						</ul>
					</div>
				</div>
			</div>
			<table class="tableB">
				<thead>
					<tr>
						<th class="w140">企業名</th>
						<th class="w140">事業所名</th>
						<th class="w93">取引ステータス</th>
						<th class="w80">取引種類</th>
						<th class="w80">ガイズ担当者</th>
						<th class="w72">工事受注</th>
						<th class="w72">材料販売</th>
						<th class="w72">材料発注</th>
						<th class="w72">工事発注</th>
						<th class="w25">詳細</th>
					</tr>
				</thead>
			</table>
			<ul class="sortable">
				<!--{foreach from=$select key=key item=value name=cnt}-->
					<li id="<!--{$smarty.foreach.cnt.iteration}-->">
						<table class="tableB">
							<tbody>
								<tr>
									<td class="w140 txtLeft"><!--{$value.clientNameInSystem}--></td>
									<td class="w140 txtLeft"><!--{$value.office}--></td>
									<td class="w93 txtCenter">
										<!--{if $value.clientState == 1}-->継続中<!--{/if}-->
										<!--{if $value.clientState == 2}-->停止<!--{/if}-->
									</td>
									<td class="w80 txtCenter">
										<!--{if $value.dealInfo == 1}-->継続取引<!--{/if}-->
										<!--{if $value.dealInfo == 2}-->単発取引<!--{/if}-->
										<!--{if $value.dealInfo == 3}-->外注先<!--{/if}-->
									</td>
									<td class="w80 txtCenter"><!--{$value.name}--></td>
									<td class="w72 txtCenter"><!--{if $value.takeConstructionOrder == 1}-->○<!--{/if}--></td>
									<td class="w72 txtCenter"><!--{if $value.sellingMaterials == 1}-->○<!--{/if}--></td>
									<td class="w72 txtCenter"><!--{if $value.orderMaterials == 1}-->○<!--{/if}--></td>
									<td class="w72 txtCenter"><!--{if $value.orderConstruction == 1}-->○<!--{/if}--></td>
									<td class="w25 txtCenter">
										<p class="iconLink"><a href="/client/?mode=detail&codeNumber=<!--{$value.codeNumber}-->&officeCode=<!--{$value.officeCode}-->"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
									</td>
								</tr>
							</tbody>
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
								<li class="toFirstPage"><a href="?page=1<!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}--><!--{if $searchState != ""}-->&searchState=<!--{$searchState}--><!--{/if}--><!--{if $searchType != ""}-->&searchType=<!--{$searchType}--><!--{/if}-->" >最初へ</a></li>
							<!--{/if}-->
							<!--{if $pagingArr.rev != ""}-->
								<li><a href="?page=<!--{$pagingArr.rev}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}--><!--{if $searchState != ""}-->&searchState=<!--{$searchState}--><!--{/if}--><!--{if $searchType != ""}-->&searchType=<!--{$searchType}--><!--{/if}-->" >&lt;&lt;</a></li>
							<!--{/if}-->
							<!--{section name=i start=$pagingArr.p_start loop=$pagingArr.p_end_plus}-->
								<!--{if $pageNo == $smarty.section.i.index}-->
									<li class="current"><!--{$smarty.section.i.index}--></li>
								<!--{else}-->
									<li><a href="?page=<!--{$smarty.section.i.index}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}--><!--{if $searchState != ""}-->&searchState=<!--{$searchState}--><!--{/if}--><!--{if $searchType != ""}-->&searchType=<!--{$searchType}--><!--{/if}-->"><!--{$smarty.section.i.index}--></a></li>
								<!--{/if}-->
							<!--{/section}-->
							<!--{if $pagingArr.next != ""}-->
								<li><a href="?page=<!--{$pagingArr.next}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}--><!--{if $searchState != ""}-->&searchState=<!--{$searchState}--><!--{/if}--><!--{if $searchType != ""}-->&searchType=<!--{$searchType}--><!--{/if}-->" >&gt;&gt;</a></li>
							<!--{/if}-->
							<!--{if $pagingArr.p_cnt > 1 && $pagingArr.next != ""}-->
								<li class="toLastPage"><a href="?page=<!--{$pagingArr.p_cnt}--><!--{if $searchClient != ""}-->&searchClient=<!--{$searchClient}--><!--{/if}--><!--{if $searchState != ""}-->&searchState=<!--{$searchState}--><!--{/if}--><!--{if $searchType != ""}-->&searchType=<!--{$searchType}--><!--{/if}-->" >最後へ</a></li>
							<!--{/if}-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!--{/if}-->
<!--{/if}-->
