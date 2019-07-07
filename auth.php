<?php
	$dbconnect = new mysqli("localhost", "root", "", "db_test");
 	if ($dbconnect->connect_error){
 		die('Connection Error (' . $dbconnect->connect_errno . ') ' . $dbconnect->connect_errno);
 	} // if nothing are displayed then connection success!!!

// step 2 take data from table 
 	$username = $_POST['username'];
 	$password = md5($_POST['password']);

 	$queryshow = "SELECT * FROM user WHERE user_name='$username' AND user_pass='$password' AND user_status ='Active' ";
 	$hasil = $dbconnect->query($queryshow);
 	$datarow = $hasil->fetch_array();
 	if ($hasil -> num_rows > 0){
 		session_start();
 		$_SESSION['user_id'] = $datarow['user_id'];
 		$_SESSION['user_name'] = $datarow['user_name'];
 		$_SESSION['user_role'] = $datarow['user_role'];

 		if($_SESSION['user_role'] == "Admin"){
 			header('location:admin/index.php');
 		}
 		else if($_SESSION['user_role'] == "UserNews"){
 		header('location:News/index.php');
 		}
 		else if($_SESSION['user_role'] == "UserEvent"){
 		header('location:Event/index.php');
 		}
 	}else{
 		echo "something's wrong with your account";
 		exit();
 	}

 	$dbconnect->close();
 	
?>