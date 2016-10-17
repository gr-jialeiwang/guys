<?php

require_once(BASE_DIR."NK_Auth_Page.php");

/**
 * 
 */
class Seikyusho_Index extends NK_Auth_Page
{
    public $xml;
    public $function_key = 'billing';
    public $table_group  = 'keiri/seikyusho';
    public $template     = 'index';
        
    protected function getPageTitle()
    {
        return "請求書発行";
    }

    function init()
    {
        parent::init(array('billing'=> array('Browse', 'Edit')));
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
        $this->xmlInit();
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


