<?php

	include("db.php");

	if (isset($_POST['text'])) {
		$listid = $_GET['listid'];
		$text = $_POST['text'];
		$db->insertListPoint($listid, $text);
	}

    include("page_reload.html");

?>
