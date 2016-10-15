<?php
/**
 * Add : nakanishi 2016/10/13
 */
// ライブラリ読込
require_once(BASE_DIR."NK_Auth_Page.php");

class Nyukin_Shori_Seikyusho_Index extends NK_Auth_Page
{

	var $xml,
		$xml_name = 'index_temp2',
		$table_group = 'keiri/nyukin-shori',
		$template = 'nyukin_shori_seikyusho_index',
		$function_key = 'paymentProccess' // Typoだけど、権限のカラムがこうなってるから、もうこのままでいっちゃいますね。。。
	;

	protected function getPageTitle()
	{
		return "入金処理";
	}

	function init()
	{
		/*
		 * 権限情報を渡す
		 */
		parent::init(array(
			$this->function_key => array('Browse', 'Edit')
		));
		$this->body_id = "";
	}

	function process()
	{

		// ページモード
		$mode = "index";
		if ($_REQUEST['mode']) {
			$mode = $_REQUEST['mode'];
		}

		// ページモードで処理を切り替え
		switch ($mode) {
			case "index":
				$this->page_index();
				break;
			default:
				break;
		}

		parent::process();

	}

	function page_index()
	{
		// メインテンプレート読み込み
		$this->xmlInit($this->xml_name);
		$this->showContentsTemplate($this->table_group, $this->template);

        // 入金元のクライアント情報を取得してSmartyに渡す
        $this->client();
        
        // ここから先はお任せしますっ！
	}

    private function client()
    {
        // パラメータチェック
        if (isset($_GET['codeNumber']) && isset($_GET['officeCode'])) {
            // SQL作成
            $sqlWhere = " WHERE client.status = '?' ";
            $sqlWhere .= "AND client.codeNumber = '?' ";
            $sqlWhere .= "AND client.officeCode = '?' ";

            $queryArr[] = 1;
            $queryArr[] = $_GET['codeNumber'];
            $queryArr[] = $_GET['officeCode'];

            $sqlSort = " ORDER BY client.codeNumber, client.officeCode ";

            // 在庫一覧取得（count）
            $sql = $this->xml->getSql($this->table_group, "select_clients");
            $sql .= $sqlWhere . $sqlSort;

            $selectQuery = $this->selectTable2($sql, $queryArr);

            if (!empty($selectQuery)) {
                $this->smarty->assign('client', array_shift($selectQuery));
            } else {
                $this->smarty->assign('err_msg', 'このクライアントは存在しません。');
            }
        } else {
            $this->smarty->assign('err_msg', '必須パラメータが不足しています。');
        }
    }
}
