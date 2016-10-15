<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."client/shiire-keiri.php");

	$page = new Client_Shiire_keiri();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
