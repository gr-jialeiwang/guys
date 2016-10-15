<?php
	session_start();
?>
<?php
	require_once("../../define.php");
	require_once(BASE_DIR."keiri/nyukin-shori/index.php");

	$page = new Nyukin_Shori_Index();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
