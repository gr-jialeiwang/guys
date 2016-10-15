<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."productNumber/edit.php");

	$page = new ProductNumber_Edit();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
