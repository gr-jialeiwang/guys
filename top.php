<?php
	session_start();
?>
<?php
	require_once("define.php");
	require_once(BASE_DIR."top.php");

	$page = new Top();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
