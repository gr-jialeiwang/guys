<?php
/**
 * 請求書発行画面
 */
session_start();
require_once("../../define.php");
require_once(BASE_DIR."keiri/seikyusho/index.php");

$page = new Seikyusho_Index();
register_shutdown_function(array($page, "destroy"));
$page->init();
$page->process();


