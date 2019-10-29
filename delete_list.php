<?php

	include("db.php");

	if (isset($_GET['deleteid'])) {
		$id = $_GET['deleteid'];
		$db->deleteList($id);
	}

    include("page_reload.html");

?>
