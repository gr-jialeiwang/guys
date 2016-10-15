<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."productNumber/index.php");

	$page = new ProductNumber_Index();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
