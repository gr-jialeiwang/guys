<?php
/*** PAGE Class ***/

// ライブラリ読込
require_once(BASE_DIR."NK_Util.php");


class NK_Page {

	var $header_title;
	var $header_tpl;
	var $contents_tpl;
	var $footer_tpl;
	var $navi_tpl;
	var $body_id;
	var $smarty;
	var $params;
	var $err;
	var $imode;

	function init() {

		$this->imode1 = false; // ユーザー
		$this->imode0 = false; // Ajax用

		$this->smarty = new Smarty();

		// テンプレート
		$this->smarty->template_dir = SMARTY_TEMP."templates/";
		$this->smarty->compile_dir  = SMARTY_TEMP."templates_c/";

		$this->smarty->config_dir   = SMARTY_TEMP."configs/";
		$this->smarty->cache_dir    = SMARTY_TEMP."cache/";
		$this->smarty->left_delimiter = '<!--{';
		$this->smarty->right_delimiter = '}-->';

		$this->params = new NK_Util();
		$this->err = array();

	}

	function process() {

		// テンプレート設定
		$this->smarty->assign("header_title", $this->header_title);
		$this->smarty->assign("header_tpl", $this->header_tpl);
		$this->smarty->assign("contents_tpl", $this->contents_tpl);
		$this->smarty->assign("navi_tpl", $this->navi_tpl);
		$this->smarty->assign("footer_tpl", $this->footer_tpl);
		$this->smarty->assign("body_id", $this->body_id);

		if ($this->imode0) {
		} elseif ($this->imode1) {
			$this->smarty->display('common_site.tpl');
		}

	}

	function destroy() {

	}

}
?>
