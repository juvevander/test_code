<?php
// step 1 create connection to database
 	$dbconnect = new mysqli("localhost", "root", "", "db_test");
 	if ($dbconnect->connect_error){
 		die('Connection Error (' . $dbconnect->connect_errno . ') ' . $dbconnect->connect_errno);
 	} // if nothing are displayed then connection success!!!
// step 2 perform query store data
 	$query = "UPDATE user SET
 		user_name = '$_POST[user_name]',
 		user_status = '$_POST[user_status]',
 		user_role = '$_POST[user_role]'
 		WHERE user_id = '$_POST[user_id]'
 		";

 	//query executing
 	$dbconnect->query($query);

 	$dbconnect->close();
 	// redirect user to home page
 	header('location: ../index.php');


?>