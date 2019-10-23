<?php

	include("db.php");

	if (isset($_GET['deleteid'])) {
		$id = $_GET['deleteid'];
		$db->deleteListPoint($id);
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>