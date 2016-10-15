<?php

require_once(BASE_DIR."NK_Auth_Page.php");

/**
 * 
 */
class Seikyusho_Index extends NK_Auth_Page
{
    var $xml,
    $xml_name     = 'index_temp2',
    $table_group  = 'keiri/shiharai-shori',
    $template     = 'shiharai_shori_index',
    $function_key = 'paymentProccess';

    protected function getPageTitle()
    {
        return "請求書発行";
    }

    function init()
    {
        /*
         * 権限情報を渡す
         */
        parent::init(array(
            $this->function_key => array('Browse')
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

        // SQL作成
        $sqlWhere = " WHERE client.status = '?' ";
        $sqlSort = " ORDER BY client.codeNumber, client.officeCode ";

        // 在庫一覧取得（count）
        $sql = $this->xml->getSql($this->table_group, "select_clients");
        $sql .= $sqlWhere . $sqlSort;

        $queryArr[] = 1;
        $selectQuery = $this->selectTable2($sql, $queryArr);

        // テンプレート
        $this->smarty->assign('clients', $selectQuery);
    }
}


