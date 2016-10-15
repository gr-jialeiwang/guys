<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."client_search/index.php");

	$page = new Client_search_Index();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
