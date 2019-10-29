<?php

	include("db.php");

	if (isset($_GET['deleteid'])) {
		$id = $_GET['deleteid'];
		$db->deleteListPoint($id);
	}

    include("page_reload.html");

?>
