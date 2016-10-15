<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."keiri/Keiri_Index_Page.php");
	$page = new Keiri_Index_Page();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
