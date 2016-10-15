<?php
//add by 王 2016.10.13
//upd by nakanishi 2016.10.13
//upd by 王 2016.10.13 
//  ・init()引数変更

// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");
class NK_Auth_Page extends NK_Page {
    protected $xml;
    protected $arrRoleContainer = array();
    
    function init($arr_role = array()) {
            parent::init();
            $this->initCommonTemplate();
            $this->xmlInit();
            // ログインチェック
            $this -> loginCheck();
            $this -> roleCheck($arr_role);
    }

    /*** User Function ***/

    function getManage() {
        $xml = new NK_Xml();
        $xml->init("manage", true);
        $managelist = $xml->getManageList();
        return $managelist;
    }

    function xmlInit($xml_name = "index") {
        $this->xml = new NK_Xml();
        $this->xml->init($xml_name, false);
        $navi1 = $this->xml->createNavi();
        $this->smarty->assign("navi1", $navi1);
        $navi2 = $this->xml->createNavi();
        $this->smarty->assign("navi2", $navi2);
    }

    function selectTable($sql, $data = array(), $order="") {
        $db = new NK_Database();
        $db->init();
        $db->connect();
        if (count($data) > 0) {
            foreach ($data as $key => $val) {
                if (strcmp($key, "mode") != 0) {
                    $sql .= " AND ".$key."='".$val."' ";
                }
            }
        }
        $arrRet = $db->query($sql . $order);
        $db->disconnect();
        return $arrRet;

    }

    function selectTable2($sql, $data) {
        $db = new NK_Database();
        $db->init();
        $db->connect();
        $arrRet = $db->query($sql, $data);
        $db->disconnect();
        return $arrRet;
    }

    function execTable($sql, $data) {
        $db = new NK_Database();
        $db->init();
        $db->connect();
        $ret = $db->sqlexec($sql, $data);
        $db->disconnect();
        return $ret;
    }

    function execTableNull($sql, $data) {
        $db = new NK_Database();
        $db->init();
        $db->connect();
        $ret = $db->sqlexec_null($sql, $data);
        $db->disconnect();
        return $ret;
    }

    function insertTable($sql, $data) {
        $db = new NK_Database();
        $db->init();
        $db->connect();
        $ret = $db->insert($sql, $data);
        $db->disconnect();
        return $ret;
    }

    function insertTableNull($sql, $data) {
        $db = new NK_Database();
        $db->init();
        $db->connect();
        $ret = $db->insert_null($sql, $data);
        $db->disconnect();
        return $ret;
    }
    
    protected function initCommonTemplate() {
        // ページモード
        $this->imode1 = true;
        // タイトル・パーツテンプレート設定
        $this->header_title = $this -> getPageTitle();
        $this->header_tpl = "common_header.tpl";
        $this->footer_tpl = "common_footer.tpl";
    }
    
    protected function getPageTitle() {
        return "ホーム";
    }
    
    protected function showContentsTemplate($tableName, $tmplType) {
        $this->contents_tpl = $this->xml->getTemplate($tableName, $tmplType);
    }
    
    protected  function loginCheck() {
        // ログインチェック
        if (!$_SESSION['LOGIN_STATUS']) {
                if (!empty($_COOKIE['guys_auto_login'])) {
                        $auto_login_key = $_COOKIE['guys_auto_login'];

                        $sql = $this->xml->getSql("common", "check_loginsession");
                        $queryArr = array();
                        $queryArr[] = $auto_login_key;
                        $select = $this->selectTable2($sql, $queryArr);

                        if (count($select) > 0) {
                                // セッション投入
                                session_regenerate_id();
                                $_SESSION['LOGIN_STATUS'] = true;
                                $_SESSION['staffID'] = $select[0]['staffID'];
                                $_SESSION['systemID'] = $select[0]['systemID'];
                        } else {
                                // ログインページへリダイレクト
                                header("Location: ".SITE_URL."index.php");

                                exit();
                        }
                } else {
                        // ログインページへリダイレクト
                        header("Location: ".SITE_URL."index.php");

                        exit();
                }
        }
    }

    /**
     * 権限チェック
     * @param $arr_role = array(
     *     'shiireKeiri' => array('Browse', 'Edit')
     * );
     * 
     */
    protected function roleCheck($arr_role) {
        foreach ($arr_role as $role_key => $authorities) {
            foreach ($authorities as $authority) {
                // 権限チェック
                $role = $role_key . $authority;
                $sql = $this->xml->getSql("common", "status_{$role}");
                $queryArr = array();
                $queryArr[] = $_SESSION['staffID'];
                $selectStatus = $this->selectTable2($sql, $queryArr);
                $view_flg = 0;
                if ($selectStatus[0]['cnt'] == 1) {
                    $view_flg = 1;
                }
                $this -> arrRoleContainer["view_{$role}"] = $view_flg;
                $this->smarty->assign("view_{$role}", $view_flg);
            }
        }
        
        if (!$this -> isPageShowable()) {
            $this->smarty->assign("view", 0);
        } else {
            $this->smarty->assign("view", 1);
        }
    }
    
    /***
     * 権限があるかをチェック
     */
    protected function isPageShowable() {
        foreach ($this -> arrRoleContainer as $role => $view_flg) {
            if ($view_flg == 1) {
                return TRUE;
            }
        }
        return FALSE;
    }
}
