<?php

	require("db.php");

	function printPoints($id) {
		global $db;
		$points = $db->selectListPointsByListid($id);
		if ($points->num_rows > 0) {
			while ($point = $points->fetch_assoc()) {
				if ($point['status']) {
					echo "<li class='done'>";
				}
				else {
					echo "<li>";
				}
				echo $point['text'];
				echo "<a href='update_list_point.php?updateid=" . $point['id'] . "&status=1'>Done</a>";
				echo "<a href='update_list_point.php?updateid=" . $point['id'] . "&status=0'>Undone</a>";
				echo "<a href='' onclick='edit_list_buttons_onclick(event, this);'>Edit</a>";
				echo "<a href='delete_list_point.php?deleteid=" . $point['id'] . "'>Delete</a>";
				echo "</li>";

				echo "<div class='nodisplay'>";
				echo "<form action='update_list_point.php?updateid=" . $point['id'] . "' method='post'>";
				echo "<input type='text' name='text'>";
				echo "<input type='submit' value='Update'>";
				echo "</form>";
				echo "</div>";
			}
		} else {
			echo "<p>There no list points</p>";
		}
	}

	function printLists() {
		global $db;
		$lists = $db->selectLists();
		if ($lists->num_rows > 0) {
			while ($row = $lists->fetch_assoc()) {
				$id = $row['id'];

				echo "<div class='list_header'>";		
				echo "<h2>" . $row['name'] . "</h2>";
				echo "<a href='' onclick='edit_list_buttons_onclick(event, this);'>Edit</a>";
				echo "<a href='delete_list.php?deleteid=" . $id . "'>Delete</a>";
				echo "</div>";

				echo "<div class='nodisplay'>";
				echo "<form action='update_list.php?updateid=" . $id . "' method='post'>";
				echo "<input type='text' name='name'>";
				echo "<input type='submit' value='Update'>";
				echo "</form>";
				echo "</div>";
				
				echo "<ul>";
				printPoints($id);

				echo "<li>";
				echo "<form action='insert_list_point.php?listid=" . $id . "' method='post'>";
				echo "<input type='text' name='text'>";
				echo "<input type='submit' value='Create point'>";	
				echo "</form>";
				echo "</li>";

				echo "</ul>";
			}
		} else {
			echo "<p>There no lists</p>";
		}
	}

?>