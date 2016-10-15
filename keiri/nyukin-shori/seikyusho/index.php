<?php
/**
 * Add : nakanishi 2016/10/13
 */

session_start();
require_once("../../../define.php");
require_once(BASE_DIR."keiri/nyukin-shori/seikyusho/index.php");

$page = new Nyukin_Shori_Seikyusho_Index();
register_shutdown_function(array($page, "destroy"));
$page->init();
$page->process();

