<?php
// step 1 create connection to database
 	$dbconnect = new mysqli("localhost", "root", "", "db_test");
 	if ($dbconnect->connect_error){
 		die('Connection Error (' . $dbconnect->connect_errno . ') ' . $dbconnect->connect_errno);
 	} // if nothing are displayed then connection success!!!
// step 2 perform query store data
 	$query = "DELETE FROM user WHERE user_id = $_GET[id]";

 	//query executing
 	$dbconnect->query($query);

 	$dbconnect->close();
 	// redirect user to home page
 	header('location:../index.php');


?>