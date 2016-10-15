<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Auth_Page.php");
class Keiri_Index_Page extends NK_Auth_Page {
    function init() {
        //請求書発行   billing
        //入金処理     paymentProccess
        //入金予定表    paymentSchedule
        //売掛情報      accountsReceivable
        //受請求書処理   invoiceProcess
        //支払処理      paymentProcess
        //自社経費登録   expenses
        //支払予定表     paymentSchedule2
        //買掛情報       accountsPayable
        //仕掛金情報     workInProcess
        //入手金情報     accountActivity
        $arr_role = array(
            'billing'            => array('Browse', 'Edit'),
            'paymentProccess'    => array('Browse', 'Edit'),
            'paymentSchedule'    => array('Browse', 'Edit'),
            'accountsReceivable' => array('Browse', 'Edit'),
            "invoiceProcess"     => array('Browse', 'Edit'),
            "paymentProcess"     => array('Browse', 'Edit'),
            "expenses"           => array('Browse', 'Edit'),
            "paymentSchedule2"   => array('Browse', 'Edit'),
            "accountsPayable"    => array('Browse', 'Edit'),
            "workInProcess"      => array('Browse', 'Edit'),
            "accountActivity"    => array('Browse', 'Edit')
        );
        parent::init($arr_role);
    }
    
    function process() {
        $this ->showContentsTemplate("keiri", "index");
        parent::process();
    }
    
    protected function getPageTitle() {
        return "経理処理";
    }
}
