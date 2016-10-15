<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."new_koji/index.php");

	$page = new NewKoji_Index();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
