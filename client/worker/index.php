<?php
	session_start();
?>
<?php
	require_once("../../define.php");
	require_once(BASE_DIR."client/worker/index.php");

	$page = new Client_Worker_Index();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
