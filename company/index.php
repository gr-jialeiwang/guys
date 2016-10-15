<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."company/index.php");

	$page = new Company_Index();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
