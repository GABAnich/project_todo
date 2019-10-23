<?php

	$db = new Db();

	class Db {

		private $conn;

		function __construct() {
			$server = "localhost";
			$db = "todo";
			$user = "root";
			$password = "1286432168422";

			$this->conn = new mysqli($server, $user, $password, $db);

			if ($this->conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
		}

		function __destruct() {
			$this->conn->close();
		}

		function insert($sql) {
			if ($result = $this->conn->query($sql) === TRUE) {
				echo "New record inserted successfully\n";
			} else {
				echo "Error: " . $this->conn->error;
			}
		}

		function update($sql) {
			if ($this->conn->query($sql) === TRUE) {
				echo "Record updated successfully\n";
			} else {
				echo "Error: " . $this->conn->error;
			}
		}

		function delete($sql) {
			if ($this->conn->query($sql) === TRUE) {
				echo "Record deleted successfully\n";
			} else {
				echo "Error: " . $this->conn->error;
			}
		}

		function insertList($name) {
			$sql = "INSERT INTO lists (name) VALUES ('$name');";
			$this->insert($sql);
		}

		function selectLists() {
			$sql = "SELECT * FROM lists;";
			return $this->conn->query($sql);
		}

		function updateList($id, $name) {
			$sql = "UPDATE lists SET name = '$name' WHERE id = $id;";
			$this->update($sql);
		}

		function deleteList($id) {
			$sql = "DELETE FROM lists WHERE id = $id";
			$this->delete($sql);
		}

		function insertListPoint($listid, $text) {
			$sql = "INSERT INTO listPoints (listid, text) VALUES ('$listid', '$text');";
			$this->insert($sql);
		}

		function selectListPoints() {
			$sql = "SELECT * FROM listPoints;";
			return $this->conn->query($sql);
		}

		function selectListPointsByListid($listid) {
			$sql = "SELECT * FROM listPoints WHERE listid = $listid;";
			return $this->conn->query($sql);
		}

		function updateListPoint($id, $text, $status) {
			$sql = "UPDATE listPoints SET text = '$text', status = '$status' WHERE id = $id;";
			$this->update($sql);
		}

		function updateListPointText($id, $text) {
			$sql = "UPDATE listPoints SET text = '$text' WHERE id = $id;";
			$this->update($sql);
		}

		function updateListPointStatus($id, $status) {
			$sql = "UPDATE listPoints SET status = '$status' WHERE id = $id;";
			$this->update($sql);
		}

		function deleteListPoint($id) {
			$sql = "DELETE FROM listPoints WHERE id = $id";
			$this->delete($sql);
		}

		function selectListsAndListPoints() {
			$sql = "SELECT * FROM lists_and_listPoints;";
			return $this->conn->query($sql);
		}

	}

?>