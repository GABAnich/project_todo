<?php

	include("db.php");

	if (isset($_POST['text'])) {
		$listid = $_GET['listid'];
		$text = $_POST['text'];
		$db->insertListPoint($listid, $text);
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>