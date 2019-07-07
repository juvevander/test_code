<?php
  //1. konek kedatabase
  $link = mysqli_connect("localhost", "root", "", "db_sheshe");

  //1a. Cek Koneksi berhasil atau tidak
  if (!$link) {
      echo "Sorry, Connection Failed" .PHP_EOL;
      exit;
    }
    $reg = mysqli_query($link, "SELECT r.event_id_siswa event_id_siswa, r.fullname_siswa fullname_siswa, r.nim_siswa nim_siswa, r.email_siswa email_siswa, r.date_siswa date_siswa, e.ev_title ev_title FROM registration r JOIN events e ON r.event_id_siswa = e.ev_id");

    $event = mysqli_query($link,"SELECT * FROM events");
    // 5. tutup koneksi ke database
?>

<!DOCTYPE html>
<html>
<head>
  <title>REGISTRASI</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  

  <div class="header-top">  
    <h2 align="center" style="color: #FFF"><u>REGISTRASI</u></h2>
  </div>    
  <br>
</head>
<body>

<div class="services">
  <div class="container">
    <div class="col-md-4 col-md-offset-4">
      <form action="cek_registration.php" method="POST">
        <div class="form-group">
          <label>User Name</label>
          <input class="form-control" type="text" name="user_name" required="">
          <br>
          <label>User Pass</label>
          <input class="form-control" type="password" name="user_pass" required="">
          <br>
          <input type="submit" value="Regist" class="btn btn-danger">
        </div>      
      </form>
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