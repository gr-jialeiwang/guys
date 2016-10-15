<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."stock/index.php");

	$page = new Stock_Index();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
