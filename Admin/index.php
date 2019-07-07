<?php  

// step 1 create connection to database
  $dbconnect = new mysqli("localhost", "root", "", "db_test");
  if ($dbconnect->connect_error){
    die('Connection Error (' . $dbconnect->connect_errno . ') ' . $dbconnect->connect_errno);
  } // if nothing are displayed then connection success!!!

// step 2 take data from table 
  $queryresultlect = $dbconnect->query("SELECT * FROM user");
  session_start();

  if($_SESSION['user_name'] == ""){
    header('location:../../login.php');
  }

?>
<!DOCTYPE html>
<html>

<head>
	<title>DASHBOARD</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
</head>

<body>
<div class="header-top">
	<div class="container">
		<div class="col-sm-9 col-md-offset-2  header-login">
	        <ul class="nav navbar-nav nav_1">
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="event.php">EVENT</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a href="../index.php">LOGOUT</a></li>
          </ul>
	    </div>
	</div>
</div>	
<div id="event">
  <div class="services">
    <div class="container">
      <div class="w3layouts_header">
        <h2 align="center"><u>TAMPILAN USER</u></h2>
        <br>
      </div>
      <div class="w3_services_grids"> 
        <form action="" method="POST">
        <!-- LOOPING -->
        <table class="table table-striped table-hover">
                        <tr>
                          <th>No</th>
                          <th>User Name</th>
                          <th>Status</th>
                          <th>Role</th>
                          <th></th>
                        </tr>
                      
                    <?php
                    // step 3 display data in array form
                      $no=1;
                      while($row = $queryresultlect->fetch_array(MYSQLI_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $row['user_name'] . "</td>";
                      
                        echo "<td>" . $row['user_status'] . "</td>";
                        echo "<td>" . $row['user_role'] . "</td>";
                        echo "<td>
                            <a href='edit_user.php?id=$row[user_id]'> Edit </a> |
                            <a href='system/delete_user.php?id=$row[user_id]'> Delete </a>
                          </td>"; // Delete Function
                        echo "</tr>";
                        $no++;
                      }
                    ?>
                    </table>
        </form> 
      </div>
    </div>
  </div>
</div>	


<div class="footer">
	<div class="footer-bottom">
		<div class="container">
			<p class="footer-class">&copy; 2016 Shopin. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

</body>
</html>
