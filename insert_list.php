<?php

	include("db.php");

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$db->insertList($name);
	}

    include("page_reload.html");

?>
