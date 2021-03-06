<?php
	$first = $_POST['first'];
	$last = $_POST['last'];
	$food = $_POST['food'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO w6_user (first_name, last_name, food_type) VALUES (:first, last, 1)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first, $first');
	$statement->bindValue(':last, $last');
	$statement->bindValue(':food, $food');
	$statement->execute();

	
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId

	$userId = $db->lastInsertID("w6_user_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: display.php/?personId=$userId");

die(); 
?>
