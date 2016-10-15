<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."staff/index.php");

	$page = new Staff_Index();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
