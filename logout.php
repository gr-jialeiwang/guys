<?php
	session_start();
?>
<?php
	require_once("define.php");
	require_once(BASE_DIR."logout.php");

	$page = new Logout();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
