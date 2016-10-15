<!--{if $view_flg1 == 0}-->
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<!--{else}-->
	<div class="container">
		<div class="pageTitle clearfix">
			<div class="boxLeft mr8">
				<div class="btnBack"><a href="/">戻る</a></div>
			</div>
			<div class="boxLeft">
				<h2>社員一覧／登録・編集</h2>
			</div>
		</div>
		<!--{if $view_flg2 == 1}-->
        <div class="boxRight">
            <a href="edit.php?mode=new" class="btnReload">新規登録</a>
        </div>
		<!--{/if}-->
		<div class="headingB">
			<h3>社員一覧</h3>
		</div>
	</div>
	<div class="container">
		<div class="clearfix pt10">
			<div class="boxRight">
				<div class="pagination">
					<p class="resultStates"><!--{$countSelectQuery}-->件中<!--{$pagingArr.start_view}-->〜<!--{$pagingArr.end_view}-->件</p>
					<ul class="paging">
						<!--{if $pagingArr.p_cnt > 1 && $pagingArr.rev != ""}-->
							<li class="toFirstPage"><a href="?page=1" >最初へ</a></li>
						<!--{/if}-->
						<!--{if $pagingArr.rev != ""}-->
							<li><a href="?page=<!--{$pagingArr.rev}-->" >&lt;&lt;</a></li>
						<!--{/if}-->
						<!--{section name=i start=$pagingArr.p_start loop=$pagingArr.p_end_plus}-->
							<!--{if $pageNo == $smarty.section.i.index}-->
								<li class="current"><!--{$smarty.section.i.index}--></li>
							<!--{else}-->
								<li><a href="?page=<!--{$smarty.section.i.index}-->"><!--{$smarty.section.i.index}--></a></li>
							<!--{/if}-->
						<!--{/section}-->
						<!--{if $pagingArr.next != ""}-->
							<li><a href="?page=<!--{$pagingArr.next}-->" >&gt;&gt;</a></li>
						<!--{/if}-->
						<!--{if $pagingArr.p_cnt > 1 && $pagingArr.next != ""}-->
							<li class="toLastPage"><a href="?page=<!--{$pagingArr.p_cnt}-->" >最後へ</a></li>
						<!--{/if}-->
					</ul>
				</div>
			</div>
		</div>
		<table class="tableB">
			<thead>
				<tr>
					<th class="w108">社員ID NO.</th>
					<th class="w107">氏名</th>
					<th class="w371">所属</th>
					<th class="w101">役職</th>
					<th class="w115 txtCenter">電話番号</th>
					<th class="w72 txtCenter">ステータス</th>
					<th class="w28">編集</th>
				</tr>
			</thead>
		</table>
		<ul class="sortable">
			<!--{foreach from=$select key=key item=value name=cnt}-->
				<li id="<!--{$smarty.foreach.cnt.iteration}-->">
					<table class="tableB">
						<thead>
							<tr>
								<td class="w108"><!--{$value.staffID}--></td>
								<td class="w107"><!--{$value.name}--></td>
								<td class="w371"><!--{$value.department}--></td>
								<td class="w101"><!--{$value.position}--></td>
								<td class="w115 txtCenter"><!--{$value.phoneNumerAreaCode}-->-<!--{$value.phoneNumerFirstHalf}-->-<!--{$value.phoneNumerLastHalf}--></td>
								<td class="w72 txtCenter">
									<!--{if $value.state == 1}-->在職<!--{/if}-->
									<!--{if $value.state == 9}-->退職<!--{/if}-->
								</td>
								<td class="w28">
									<!--{if $view_flg2 == 1}-->
										<p class="iconLink"><a href="edit.php?mode=edit&id=<!--{$value.id}-->"><img src="/img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
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
							<li class="toFirstPage"><a href="?page=1" >最初へ</a></li>
						<!--{/if}-->
						<!--{if $pagingArr.rev != ""}-->
							<li><a href="?page=<!--{$pagingArr.rev}-->" >&lt;&lt;</a></li>
						<!--{/if}-->
						<!--{section name=i start=$pagingArr.p_start loop=$pagingArr.p_end_plus}-->
							<!--{if $pageNo == $smarty.section.i.index}-->
								<li class="current"><!--{$smarty.section.i.index}--></li>
							<!--{else}-->
								<li><a href="?page=<!--{$smarty.section.i.index}-->"><!--{$smarty.section.i.index}--></a></li>
							<!--{/if}-->
						<!--{/section}-->
						<!--{if $pagingArr.next != ""}-->
							<li><a href="?page=<!--{$pagingArr.next}-->" >&gt;&gt;</a></li>
						<!--{/if}-->
						<!--{if $pagingArr.p_cnt > 1 && $pagingArr.next != ""}-->
							<li class="toLastPage"><a href="?page=<!--{$pagingArr.p_cnt}-->" >最後へ</a></li>
						<!--{/if}-->
					</ul>
				</div>
			</div>
		</div>
	</div>
<!--{/if}-->
