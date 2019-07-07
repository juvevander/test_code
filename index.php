<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	

	<div class="header-top">	
		<h2 align="center" style="color: #FFF"><u>USER LOGIN</u></h2>
	</div>		
	<br>
</head>
<body>
    <section id="main">
	    <div class="container">
	       	<div class="row">
	         	<div class="col-md-4 col-md-offset-4">
	                <form id="login" action="auth.php" method="POST" class="well">
	                
	                <div class="form-group">
	                    <label>Username</label>
	                    <input name="username" type="text" class="form-control" placeholder="Enter Username">
	                </div>
	                <div class="form-group">
	                    <label>Password</label>
	                    <input name="password" type="password" class="form-control" placeholder="Password">
	                </div>
	                  <button  type="submit" class="btn btn-default btn-block">Login</button>
	                  <h5 align="middle">Belum punya akun ? <a href="register.php">Register!</a></h5>
	              </form>
	          	</div>
	        </div>
	    </div>
    </section>
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