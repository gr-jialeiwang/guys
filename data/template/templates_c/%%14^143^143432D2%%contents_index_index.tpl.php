<?php /* Smarty version 2.6.26, created on 2016-10-14 15:47:12
         compiled from productNumber/contents_index_index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'productNumber/contents_index_index.tpl', 123, false),)), $this); ?>
<?php if ($this->_tpl_vars['view_flg1'] == 0): ?>
    <div class="errorBox">
        <p class="error">権限がありません。</p>
    </div>
<?php else: ?>
    <?php if (is_array ( $this->_tpl_vars['arrForm']['err_msg'] )): ?>
        <div class="errorBox">
            <?php $_from = $this->_tpl_vars['arrForm']['err_msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
                <p class="error"><?php echo $this->_tpl_vars['value']; ?>
</p>
            <?php endforeach; endif; unset($_from); ?>
        </div>
    <?php else: ?>
        <?php if (is_array ( $this->_tpl_vars['arrForm']['err_msg2'] )): ?>
            <div class="errorBox">
                <?php $_from = $this->_tpl_vars['arrForm']['err_msg2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
                    <p class="error"><?php echo $this->_tpl_vars['value']; ?>
</p>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        <?php endif; ?>
        <form name="form" action="?" method="GET">
            <input type="hidden" name="mode" id="mode" value="<?php echo $this->_tpl_vars['mode']; ?>
" />
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
                                    <option value="1" <?php if ($this->_tpl_vars['arrForm']['searchCategory'] == '1'): ?> selected<?php endif; ?>>サイディング</option>
                                    <option value="2" <?php if ($this->_tpl_vars['arrForm']['searchCategory'] == '2'): ?> selected<?php endif; ?>>屋根・樋</option>
                                    <option value="3" <?php if ($this->_tpl_vars['arrForm']['searchCategory'] == '3'): ?> selected<?php endif; ?>>外溝</option>
	                            </select>
	                            </td>
                            <th class="w100">品名・品番検索</th>
                            <td class="w200" ><input type="text" class="w200" name="searchProduct" value="<?php echo $this->_tpl_vars['arrForm']['searchProduct']; ?>
"></td>
                            <th class="w100">テキスト検索</th>
                            <td class="w200" ><input type="text" class="w200" name="searchWord" value="<?php echo $this->_tpl_vars['arrForm']['searchWord']; ?>
"></td>
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
                    <p class="resultStates"><?php echo $this->_tpl_vars['countSelectQuery']; ?>
件中<?php echo $this->_tpl_vars['pagingArr']['start_view']; ?>
〜<?php echo $this->_tpl_vars['pagingArr']['end_view']; ?>
件</p>
                    <ul class="paging">
                        <?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['rev'] != ""): ?>
                            <li class="toFirstPage"><a href="?searchCategory=<?php echo $this->_tpl_vars['searchCategory']; ?>
&searchProduct=<?php echo $this->_tpl_vars['searchProduct']; ?>
&searchWord=<?php echo $this->_tpl_vars['searchWord']; ?>
&page=1" >最初へ</a></li>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['pagingArr']['rev'] != ""): ?>
                            <li><a href="?searchCategory=<?php echo $this->_tpl_vars['searchCategory']; ?>
&searchProduct=<?php echo $this->_tpl_vars['searchProduct']; ?>
&searchWord=<?php echo $this->_tpl_vars['searchWord']; ?>
&page=<?php echo $this->_tpl_vars['pagingArr']['rev']; ?>
" >&lt;&lt;</a></li>
                        <?php endif; ?>
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)$this->_tpl_vars['pagingArr']['p_start'];
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['pagingArr']['p_end_plus']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                            <?php if ($this->_tpl_vars['pageNo'] == $this->_sections['i']['index']): ?>
                                <li class="current"><?php echo $this->_sections['i']['index']; ?>
</li>
                            <?php else: ?>
                                <li><a href="?searchCategory=<?php echo $this->_tpl_vars['searchCategory']; ?>
&searchProduct=<?php echo $this->_tpl_vars['searchProduct']; ?>
&searchWord=<?php echo $this->_tpl_vars['searchWord']; ?>
&page=<?php echo $this->_sections['i']['index']; ?>
"><?php echo $this->_sections['i']['index']; ?>
</a></li>
                            <?php endif; ?>
                        <?php endfor; endif; ?>
                        <?php if ($this->_tpl_vars['pagingArr']['next'] != ""): ?>
                            <li><a href="?searchCategory=<?php echo $this->_tpl_vars['searchCategory']; ?>
&searchProduct=<?php echo $this->_tpl_vars['searchProduct']; ?>
&searchWord=<?php echo $this->_tpl_vars['searchWord']; ?>
&page=<?php echo $this->_tpl_vars['pagingArr']['next']; ?>
" >&gt;&gt;</a></li>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['next'] != ""): ?>
                            <li class="toLastPage"><a href="?searchCategory=<?php echo $this->_tpl_vars['searchCategory']; ?>
&searchProduct=<?php echo $this->_tpl_vars['searchProduct']; ?>
&searchWord=<?php echo $this->_tpl_vars['searchWord']; ?>
&page=<?php echo $this->_tpl_vars['pagingArr']['p_cnt']; ?>
" >最後へ</a></li>
                        <?php endif; ?>
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
            <?php $_from = $this->_tpl_vars['select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
                <li id="<?php echo $this->_foreach['cnt']['iteration']; ?>
">
                    <table class="tableB">
                        <thead>
                            <tr>
                                <td class="w98 txtCenter">
                                    <?php if ($this->_tpl_vars['value']['constructionCategory'] == 1): ?>サイディング<?php endif; ?>
                                    <?php if ($this->_tpl_vars['value']['constructionCategory'] == 2): ?>屋根・樋<?php endif; ?>
                                    <?php if ($this->_tpl_vars['value']['constructionCategory'] == 3): ?>外溝<?php endif; ?>
                                </td>
                                <td><?php echo $this->_tpl_vars['value']['productNumber']; ?>
</td>
                                <td class="w120"><?php echo $this->_tpl_vars['value']['type']; ?>
</td>
                                <td class="w120"><?php echo $this->_tpl_vars['value']['productName']; ?>
</td>
                                <td class="w120"><?php echo $this->_tpl_vars['value']['color']; ?>
</td>
                                <td class="w70 txtCenter"><?php echo $this->_tpl_vars['value']['linkItemNum']; ?>
</td>
                                <td class="w80 txtCenter"><?php echo ((is_array($_tmp=$this->_tpl_vars['value']['update_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d")); ?>
</td>
                                <td class="w80 txtCenter"><?php echo $this->_tpl_vars['value']['update_staffName']; ?>
</td>
                                <td class="w25 txtCenter">
                                <?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
                                    <p class="iconLink"><a href="edit.php?mode=edit&id=<?php echo $this->_tpl_vars['value']['id']; ?>
"><img src="/img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
                                <?php endif; ?>
                                </td>
                                <td class="w25 txtCenter">
                                <?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
                                    <p class="iconLink"><a href="#" onclick="confirm_submit('delRegist', '<?php echo $this->_tpl_vars['value']['id']; ?>
', 'form', '登録品番（<?php echo $this->_tpl_vars['value']['productNumber']; ?>
）を削除しますか？');"><img src="/img/common/icon_reset-data.png" height="14" width="14" alt="削除"></a></p>
                                <?php endif; ?>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
        <div class="clearfix pt10">
            <div class="boxRight">
                <div class="pagination">
                    <p class="resultStates"><?php echo $this->_tpl_vars['countSelectQuery']; ?>
件中<?php echo $this->_tpl_vars['pagingArr']['start_view']; ?>
〜<?php echo $this->_tpl_vars['pagingArr']['end_view']; ?>
件</p>
                    <ul class="paging">
                        <?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['rev'] != ""): ?>
                            <li class="toFirstPage"><a href="?searchCategory=<?php echo $this->_tpl_vars['searchCategory']; ?>
&searchProduct=<?php echo $this->_tpl_vars['searchProduct']; ?>
&searchWord=<?php echo $this->_tpl_vars['searchWord']; ?>
&page=1" >最初へ</a></li>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['pagingArr']['rev'] != ""): ?>
                            <li><a href="?searchCategory=<?php echo $this->_tpl_vars['searchCategory']; ?>
&searchProduct=<?php echo $this->_tpl_vars['searchProduct']; ?>
&searchWord=<?php echo $this->_tpl_vars['searchWord']; ?>
&page=<?php echo $this->_tpl_vars['pagingArr']['rev']; ?>
" >&lt;&lt;</a></li>
                        <?php endif; ?>
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)$this->_tpl_vars['pagingArr']['p_start'];
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['pagingArr']['p_end_plus']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                            <?php if ($this->_tpl_vars['pageNo'] == $this->_sections['i']['index']): ?>
                                <li class="current"><?php echo $this->_sections['i']['index']; ?>
</li>
                            <?php else: ?>
                                <li><a href="?searchCategory=<?php echo $this->_tpl_vars['searchCategory']; ?>
&searchProduct=<?php echo $this->_tpl_vars['searchProduct']; ?>
&searchWord=<?php echo $this->_tpl_vars['searchWord']; ?>
&page=<?php echo $this->_sections['i']['index']; ?>
"><?php echo $this->_sections['i']['index']; ?>
</a></li>
                            <?php endif; ?>
                        <?php endfor; endif; ?>
                        <?php if ($this->_tpl_vars['pagingArr']['next'] != ""): ?>
                            <li><a href="?searchCategory=<?php echo $this->_tpl_vars['searchCategory']; ?>
&searchProduct=<?php echo $this->_tpl_vars['searchProduct']; ?>
&searchWord=<?php echo $this->_tpl_vars['searchWord']; ?>
&page=<?php echo $this->_tpl_vars['pagingArr']['next']; ?>
" >&gt;&gt;</a></li>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['pagingArr']['p_cnt'] > 1 && $this->_tpl_vars['pagingArr']['next'] != ""): ?>
                            <li class="toLastPage"><a href="?searchCategory=<?php echo $this->_tpl_vars['searchCategory']; ?>
&searchProduct=<?php echo $this->_tpl_vars['searchProduct']; ?>
&searchWord=<?php echo $this->_tpl_vars['searchWord']; ?>
&page=<?php echo $this->_tpl_vars['pagingArr']['p_cnt']; ?>
" >最後へ</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php endif; ?>