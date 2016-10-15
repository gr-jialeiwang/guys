<?php
	session_start();
?>
<?php
	require_once("../define.php");
	require_once(BASE_DIR."master-edit/index02_101_.php");

	$page = new Master_edit_Index02_101();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
