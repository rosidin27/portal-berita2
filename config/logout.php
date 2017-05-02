<?php
	@session_start();
	@session_destroy();
	echo "<meta http-equiv='refresh' content='0, $GLOBALS[BASE_URL]/home'>";
	exit();
?>