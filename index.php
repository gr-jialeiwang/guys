<?php
	session_start();
?>
<?php
	require_once("define.php");
	require_once(BASE_DIR."index.php");

	$page = new Index();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
