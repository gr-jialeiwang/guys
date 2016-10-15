<?php
	session_start();
?>
<?php
	require_once("../../define.php");
	require_once(BASE_DIR."client/tatekae/index.php");

	$page = new Client_Tatekae_Index();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
