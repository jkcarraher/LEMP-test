<?php
$user = "jkcarraher";
$password = "2110Pullman#B";
$database = "sachi_database";
$table = "todo_list";

try {
	$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
	echo "<h2>TODO</h2><ol>";
	foreach($db->query("SELECT content from $table") as $row) {
		echo "<li>" . $row['content'] . "</li>";
	}
	echo "</ol>";
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}
