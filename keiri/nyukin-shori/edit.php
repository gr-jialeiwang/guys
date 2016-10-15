<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."stock/edit.php");

	$page = new Stock_Edit();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
