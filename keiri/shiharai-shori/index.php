<?php
/**
 * Add : nakanishi 2016/10/13
 */

session_start();
require_once("../../define.php");
require_once(BASE_DIR."keiri/shiharai-shori/index.php");

$page = new Shiharai_Shori_Index();
register_shutdown_function(array($page, "destroy"));
$page->init();
$page->process();

