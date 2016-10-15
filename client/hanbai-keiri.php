<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."client/hanbai-keiri.php");

	$page = new Client_Hanbai_keiri();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
