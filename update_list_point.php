<?php

	include("db.php");

	if (isset($_GET['status'])) {
		$id = $_GET['updateid'];
		$status = $_GET['status'];
		$db->updateListPointStatus($id, $status);
	}

	if (isset($_POST['text'])) {
		$id = $_GET['updateid'];
		$text = $_POST['text'];
		$db->updateListPointText($id, $text);
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>