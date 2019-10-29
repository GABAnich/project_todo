<?php
    require("controller.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Design</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./vanila.css">
</head>
    <body>
        <div id="header">
			<h1>Project ToDo</h1>
        </div>

        <div id="body">

			<?php
				printLists();
			?>

			<br>
			<form action="insert_list.php" method="post">
				<input type="text" name="name">
				 <input type="submit" value="Create list">
			</form>
		<br>

        </div>

        <div id="footer">
			<h2>Rostyslav Bornitskyi | Test task</h2>
        </div>

    </body>
</html>

<script type="text/javascript" src="script.js"></script>
