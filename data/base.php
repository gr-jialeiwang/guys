<?php
// タイムゾーン設定
date_default_timezone_set('Asia/Tokyo');

// 文字コード
mb_internal_encoding("UTF-8");

// エラー出力
error_reporting(0); // エラー出力しない
// error_reporting(E_ALL | E_STRICT); // 全てのエラーを出力

// ベースDIR設定
$require_base_php_dir = realpath(dirname( __FILE__));

// サイトURL
define("SITE_URL", "http://www.guys-system.net/");
define("SITE_HOST", "www.guys-system.net");
define("USER_URL", SITE_URL);

// Smarty用定義
define("BASE_DIR", $require_base_php_dir."/");
define("SMARTY_DIR", BASE_DIR."Smarty/libs/");
define("SMARTY_TEMP", BASE_DIR."template/");

// XML定義
define("XML_DIR", BASE_DIR."xml/");

// Database項目
define("DB_NAME", "guys");
define("DB_USER", "sqlguys");
define("DB_PASS", "xM4ikajqw");
define("DB_SERVER", "172.31.27.160");

// ログイン保持時間
define("KEEP_LOGIN_TIME", 3600 * 24 * 7);

// メール項目
define("FROM_MAIL", "akinori.hata@gmail.com");

// メール送信ウェイト時間（秒）
define("MAIL_WAIGHT_TIME", 10);

// メール送信ウェイト送信数
define("MAIL_WAIGHT_COUNT", 3);

// 検索結果一覧数
define("PAGING_NO", 2);

// ライブラリ読込
require_once(SMARTY_DIR."Smarty.class.php");
require_once(BASE_DIR."NK_Xml.php");
?>
