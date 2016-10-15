<?php /* Smarty version 2.6.26, created on 2016-10-14 15:47:14
         compiled from productNumber/contents_edit_index.tpl */ ?>
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
            <input type="hidden" name="mode" id="mode" value="<?php echo $this->_tpl_vars['editMode']; ?>
" />
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
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
                        <?php if ($this->_tpl_vars['mode'] == 'edit' || $this->_tpl_vars['editMode'] == 'editRegist'): ?>
                        <div class="boxRight">
                            <a href="javascript:void(0)" onclick="delete_confirm();"><button class="btnReload" type="button" >削除</button></a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php if ($this->_tpl_vars['editMode'] != 'delRegistered'): ?>
                    <div class="headingB">
                        <?php if ($this->_tpl_vars['mode'] == 'new' || $this->_tpl_vars['editMode'] == 'newRegist'): ?>
                        <h3>品番 新規登録</h3>
                        <?php elseif ($this->_tpl_vars['mode'] == 'edit' || $this->_tpl_vars['editMode'] == 'editRegist'): ?>
                        <h3>品番 編集</h3>
                        <?php endif; ?>
                    </div>
                    <table class="tableA">
                        <tr>
                            <th class="w100">工事カテゴリー</th>
                            <td>
                                <select name="constructionCategory" class="w100p">
                                    <option value="">選択しない</option>
                                    <option value="1" <?php if ($this->_tpl_vars['select']['constructionCategory'] == '1'): ?> selected<?php endif; ?>>サイディング</option>
                                    <option value="2" <?php if ($this->_tpl_vars['select']['constructionCategory'] == '2'): ?> selected<?php endif; ?>>屋根・樋</option>
                                    <option value="3" <?php if ($this->_tpl_vars['select']['constructionCategory'] == '3'): ?> selected<?php endif; ?>>外溝</option>
                                </select>
                            </td>
                            <th class="w100">品番</th>
                            <td>
                                <input type="text" name="productNumber" class="w100p" value="<?php echo $this->_tpl_vars['select']['productNumber']; ?>
">
                            </td>
                            <th class="w87">連動品目数</th>
                            <td>
                                <select name="linkItemNum" id="linkItemNum" class="w100p" onChange="change_linkItemNum('<?php echo $this->_tpl_vars['select']['linkItemNum']; ?>
');">
                                    <option value="1" <?php if ($this->_tpl_vars['select']['linkItemNum'] == '1'): ?> selected<?php endif; ?>>1</option>
                                    <option value="2" <?php if ($this->_tpl_vars['select']['linkItemNum'] == '2'): ?> selected<?php endif; ?>>2</option>
                                    <option value="3" <?php if ($this->_tpl_vars['select']['linkItemNum'] == '3'): ?> selected<?php endif; ?>>3</option>
                                    <option value="4" <?php if ($this->_tpl_vars['select']['linkItemNum'] == '4'): ?> selected<?php endif; ?>>4</option>
                                    <option value="5" <?php if ($this->_tpl_vars['select']['linkItemNum'] == '5'): ?> selected<?php endif; ?>>5</option>
                                    <option value="6" <?php if ($this->_tpl_vars['select']['linkItemNum'] == '6'): ?> selected<?php endif; ?>>6</option>
                                    <option value="7" <?php if ($this->_tpl_vars['select']['linkItemNum'] == '7'): ?> selected<?php endif; ?>>7</option>
                                    <option value="8" <?php if ($this->_tpl_vars['select']['linkItemNum'] == '8'): ?> selected<?php endif; ?>>8</option>
                                    <option value="9" <?php if ($this->_tpl_vars['select']['linkItemNum'] == '9'): ?> selected<?php endif; ?>>9</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th class="w100">タイプ</th>
                            <td>
                                <input type="text" name="type" class="w100p" value="<?php echo $this->_tpl_vars['select']['type']; ?>
">
                            </td>
                            </td>
                            <th class="w100">名称</th>
                            <td>
                                <input type="text" name="productName" class="w100p" value="<?php echo $this->_tpl_vars['select']['productName']; ?>
">
                            </td>
                            <th class="w87">色名</th>
                            <td>
                                <input type="text" name="color" class="w100p" value="<?php echo $this->_tpl_vars['select']['color']; ?>
">
                            </td>
                        </tr>
                        <tr>
                            <th class="w100">単価</th>
                            <td>
                                <input type="text" name="unitPrice" class="w100p" value="<?php echo $this->_tpl_vars['select']['unitPrice']; ?>
">
                            </td>
                            <th class="w100">特色単価</th>
                            <td colspan="3">
                                <input type="text" name="unitPriceColor" class="w100" value="<?php echo $this->_tpl_vars['select']['unitPriceColor']; ?>
">
                            </td>
                        </tr>
                    </table>
                    <br />
                    <div class="txtCenter">
                        <button class="btnReload" type="submit">登録・更新する</button>
                    </div>
                    <?php endif; ?>
                </div>
            </section>
            <?php if ($this->_tpl_vars['editMode'] != 'delRegistered'): ?>
            <?php $this->assign('linkItemNum', $this->_tpl_vars['select']['linkItemNum']); ?>
            <?php if ($this->_tpl_vars['linkItemNum'] < 1): ?>
                <?php $this->assign('linkItemNum', 1); ?>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['linkItemNum'] > 0): ?>
            <div class="container">                <?php unset($this->_sections['linkItem']);
$this->_sections['linkItem']['name'] = 'linkItem';
$this->_sections['linkItem']['start'] = (int)0;
$this->_sections['linkItem']['loop'] = is_array($_loop=$this->_tpl_vars['linkItemNum']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['linkItem']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['linkItem']['show'] = true;
$this->_sections['linkItem']['max'] = $this->_sections['linkItem']['loop'];
if ($this->_sections['linkItem']['start'] < 0)
    $this->_sections['linkItem']['start'] = max($this->_sections['linkItem']['step'] > 0 ? 0 : -1, $this->_sections['linkItem']['loop'] + $this->_sections['linkItem']['start']);
else
    $this->_sections['linkItem']['start'] = min($this->_sections['linkItem']['start'], $this->_sections['linkItem']['step'] > 0 ? $this->_sections['linkItem']['loop'] : $this->_sections['linkItem']['loop']-1);
if ($this->_sections['linkItem']['show']) {
    $this->_sections['linkItem']['total'] = min(ceil(($this->_sections['linkItem']['step'] > 0 ? $this->_sections['linkItem']['loop'] - $this->_sections['linkItem']['start'] : $this->_sections['linkItem']['start']+1)/abs($this->_sections['linkItem']['step'])), $this->_sections['linkItem']['max']);
    if ($this->_sections['linkItem']['total'] == 0)
        $this->_sections['linkItem']['show'] = false;
} else
    $this->_sections['linkItem']['total'] = 0;
if ($this->_sections['linkItem']['show']):

            for ($this->_sections['linkItem']['index'] = $this->_sections['linkItem']['start'], $this->_sections['linkItem']['iteration'] = 1;
                 $this->_sections['linkItem']['iteration'] <= $this->_sections['linkItem']['total'];
                 $this->_sections['linkItem']['index'] += $this->_sections['linkItem']['step'], $this->_sections['linkItem']['iteration']++):
$this->_sections['linkItem']['rownum'] = $this->_sections['linkItem']['iteration'];
$this->_sections['linkItem']['index_prev'] = $this->_sections['linkItem']['index'] - $this->_sections['linkItem']['step'];
$this->_sections['linkItem']['index_next'] = $this->_sections['linkItem']['index'] + $this->_sections['linkItem']['step'];
$this->_sections['linkItem']['first']      = ($this->_sections['linkItem']['iteration'] == 1);
$this->_sections['linkItem']['last']       = ($this->_sections['linkItem']['iteration'] == $this->_sections['linkItem']['total']);
?>
                <?php $this->assign('key', "Ren".($this->_sections['linkItem']['iteration'])."_itemNum"); ?>
                <?php $this->assign('itemNum', $this->_tpl_vars['select'][$this->_tpl_vars['key']]); ?>
                <?php if ($this->_tpl_vars['itemNum'] < 1): ?>
                    <?php $this->assign('itemNum', 1); ?>
                <?php endif; ?>
                <div class="headingB">
                    <h3>連動品目(<?php echo $this->_sections['linkItem']['iteration']; ?>
)</h3>
                </div>
                <input type="hidden" name="Ren<?php echo $this->_sections['linkItem']['iteration']; ?>
_itemNum" id="Ren<?php echo $this->_sections['linkItem']['iteration']; ?>
_itemNum" value="<?php echo $this->_tpl_vars['itemNum']; ?>
" />
                <table class="tableA w401">
                    <tbody>
                        <tr>
                            <th class="w40">品名</th>
                            <td>
                                <?php $this->assign('key', "Ren".($this->_sections['linkItem']['iteration'])."_productName"); ?>
                                <input type="text" class="w100p" name="Ren<?php echo $this->_sections['linkItem']['iteration']; ?>
_productName" value="<?php echo $this->_tpl_vars['select'][$this->_tpl_vars['key']]; ?>
">
                            </td>
                            <th class="w40">品番</th>
                            <td>
                                <?php $this->assign('key', "Ren".($this->_sections['linkItem']['iteration'])."_productNumber"); ?>
                                <input type="text" class="w100p" name="Ren<?php echo $this->_sections['linkItem']['iteration']; ?>
_productNumber" value="<?php echo $this->_tpl_vars['select'][$this->_tpl_vars['key']]; ?>
">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="tableA w260 mb10">
                    <tbody>
                        <tr>
                            <th class="w100">デフォルト単価</th>
                            <td class="">
                                <?php $this->assign('key', "Ren".($this->_sections['linkItem']['iteration'])."_defaultUnitPrice"); ?>
                                <input type="text" class="w100p" name="Ren<?php echo $this->_sections['linkItem']['iteration']; ?>
_defaultUnitPrice" value="<?php echo $this->_tpl_vars['select'][$this->_tpl_vars['key']]; ?>
">
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
	                        <?php unset($this->_sections['linkItemSub']);
$this->_sections['linkItemSub']['name'] = 'linkItemSub';
$this->_sections['linkItemSub']['start'] = (int)0;
$this->_sections['linkItemSub']['loop'] = is_array($_loop=$this->_tpl_vars['itemNum']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['linkItemSub']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['linkItemSub']['show'] = true;
$this->_sections['linkItemSub']['max'] = $this->_sections['linkItemSub']['loop'];
if ($this->_sections['linkItemSub']['start'] < 0)
    $this->_sections['linkItemSub']['start'] = max($this->_sections['linkItemSub']['step'] > 0 ? 0 : -1, $this->_sections['linkItemSub']['loop'] + $this->_sections['linkItemSub']['start']);
else
    $this->_sections['linkItemSub']['start'] = min($this->_sections['linkItemSub']['start'], $this->_sections['linkItemSub']['step'] > 0 ? $this->_sections['linkItemSub']['loop'] : $this->_sections['linkItemSub']['loop']-1);
if ($this->_sections['linkItemSub']['show']) {
    $this->_sections['linkItemSub']['total'] = min(ceil(($this->_sections['linkItemSub']['step'] > 0 ? $this->_sections['linkItemSub']['loop'] - $this->_sections['linkItemSub']['start'] : $this->_sections['linkItemSub']['start']+1)/abs($this->_sections['linkItemSub']['step'])), $this->_sections['linkItemSub']['max']);
    if ($this->_sections['linkItemSub']['total'] == 0)
        $this->_sections['linkItemSub']['show'] = false;
} else
    $this->_sections['linkItemSub']['total'] = 0;
if ($this->_sections['linkItemSub']['show']):

            for ($this->_sections['linkItemSub']['index'] = $this->_sections['linkItemSub']['start'], $this->_sections['linkItemSub']['iteration'] = 1;
                 $this->_sections['linkItemSub']['iteration'] <= $this->_sections['linkItemSub']['total'];
                 $this->_sections['linkItemSub']['index'] += $this->_sections['linkItemSub']['step'], $this->_sections['linkItemSub']['iteration']++):
$this->_sections['linkItemSub']['rownum'] = $this->_sections['linkItemSub']['iteration'];
$this->_sections['linkItemSub']['index_prev'] = $this->_sections['linkItemSub']['index'] - $this->_sections['linkItemSub']['step'];
$this->_sections['linkItemSub']['index_next'] = $this->_sections['linkItemSub']['index'] + $this->_sections['linkItemSub']['step'];
$this->_sections['linkItemSub']['first']      = ($this->_sections['linkItemSub']['iteration'] == 1);
$this->_sections['linkItemSub']['last']       = ($this->_sections['linkItemSub']['iteration'] == $this->_sections['linkItemSub']['total']);
?>
                            <tr>
                                <th>発注先</th>
                                <td>
                                    <?php $this->assign('key', "Ren".($this->_sections['linkItem']['iteration'])."_Sub".($this->_sections['linkItemSub']['iteration'])."_orderClient"); ?>
                                    <select name="Ren<?php echo $this->_sections['linkItem']['iteration']; ?>
_Sub<?php echo $this->_sections['linkItemSub']['iteration']; ?>
_orderClient" id="Ren<?php echo $this->_sections['linkItem']['iteration']; ?>
_Sub<?php echo $this->_sections['linkItemSub']['iteration']; ?>
_orderClient">
                                        <option value="">選択しない</option>
	                                    <?php $_from = $this->_tpl_vars['selectMaster']['orderClient']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
	                                    <option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['select'][$this->_tpl_vars['key']] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
	                                    <?php endforeach; endif; unset($_from); ?>
                                    </select>
                                </td>
                                <th>単価</th>
                                <?php $this->assign('key', "Ren".($this->_sections['linkItem']['iteration'])."_Sub".($this->_sections['linkItemSub']['iteration'])."_unitPrice"); ?>
                                <td><input type="text" name="Ren<?php echo $this->_sections['linkItem']['iteration']; ?>
_Sub<?php echo $this->_sections['linkItemSub']['iteration']; ?>
_unitPrice" id="Ren<?php echo $this->_sections['linkItem']['iteration']; ?>
_Sub<?php echo $this->_sections['linkItemSub']['iteration']; ?>
_unitPrice" value="<?php echo $this->_tpl_vars['select'][$this->_tpl_vars['key']]; ?>
"></td>
                                <td class="bdl">
                                    <a href="javascript:void(0)" class="btnDecrease mr7" onclick="del_linkItemSub('<?php echo $this->_sections['linkItem']['iteration']; ?>
', '<?php echo $this->_sections['linkItemSub']['iteration']; ?>
');">+</a>
                                    <?php if ($this->_sections['linkItemSub']['last']): ?>
                                    <a href="javascript:void(0)" class="btnIncrease" onclick="add_linkItemSub('<?php echo $this->_sections['linkItem']['iteration']; ?>
');">+</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
	                        <?php endfor; endif; ?>
                        </table>
                    </div>
                </div>
                <hr class="pt20 mb20">
				<?php endfor; endif; ?>
                <br />
                <div class="txtCenter">
                    <button class="btnReload" type="submit">登録・更新する</button>
                </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
        </form>
    <?php endif; ?>
<?php endif; ?>