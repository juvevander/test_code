<?php
  $dbconnect = new mysqli("localhost", "root", "", "db_test");
  if ($dbconnect->connect_error){
    die('Connection Error (' . $dbconnect->connect_errno . ') ' . $dbconnect->connect_errno);
  } // if nothing are displayed then connection success!!!

// step 2 take data from table 
  $queryshow = "SELECT * FROM user WHERE user_id='$_GET[id]' ";
  $result = $dbconnect->query($queryshow);
  $sub = $result->fetch_array(MYSQLI_ASSOC);
    session_start();

    if($_SESSION['user_name'] == ""){
      header('location:../index.php');
    }

?>
<!DOCTYPE html>
<html>

<head>
  <title>EDIT USER</title>
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
        <h2 align="center"><u>EDIT USER</u></h2>
        <br>
      </div>
      <div class="w3_services_grids"> 
        <form action="system/edit_user.php" method="POST">
          <div class="panel panel-default">
            <div class="panel-body">
              <input type="hidden" name="user_id" value="<?php echo $sub['user_id']; ?>">
              <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name="user_name" value="<?php echo $sub['user_name']; ?>">
              </div>
              <div class="form-group">
                <label>User Role</label>
                <input type="text" class="form-control" name="user_role" value="<?php echo $sub['user_role']; ?>">
              </div>
              <div class="form-group">
                <label for="sub_credit">Status</label>
                <input type="text" class="form-control" id="user_status" name="user_status" value="<?php echo $sub['user_status']; ?>">
              </div>
              <input type="submit" class="btn btn-default" value="Edit User">
            </div>
          </div>
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