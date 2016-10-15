<?php
	session_start();
?>
<?php
	require_once("../../define.php");
	require_once(BASE_DIR."client/tatekae/tatekaekin.php");

	$page = new Client_Tatekae_Tatekaekin();
	register_shutdown_function(array($page, "destroy"));
	$page->init();
	$page->process();
?>
