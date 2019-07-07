<?php
  //1. buat koneksi ke database
  $link = mysqli_connect("127.0.0.1", "root", "", "db_test");

  //cek koneksi
  if (!$link) 
  {
      echo "Maaf Koneksi gagal";
      exit;
  }
  
  //2. Lakukan query untuk ambil data event
  $query = mysqli_query($link, "SELECT * FROM event ORDER BY event_id desc");
          
  
  //3. tampilkan dalam tabel
?>  

<!DOCTYPE html>
<html>

<head>
  <title>LAYAR EVENT</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  
</head>

<body>
<div class="header-top">
  <div class="container">
    <div class="col-sm-6 col-md-offset-2  header-login">
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
        <h2 align="center"><u>TAMPILAN EVENT</u></h2>
        <br>
      </div>
      <div class="w3_services_grids"> 
        <form action="" method="POST">
        <!-- LOOPING -->
        <?php
        $query = mysqli_query($link, "SELECT * FROM event ORDER BY event_id desc");

        while($res = mysqli_fetch_array($query)) { ?>
        <div class="col-md-6 item-grid simpleCart_shelfItem">
          <div class="mid-pop">
            <h3><p align="center"><b><u><?php  echo $res['event_title']; ?></u></b></p><br></h3>
            <h4>
                Date : <?php echo $res['event_date']; ?><br><br>
                Speaker : <?php echo $res['event_speaker']; ?><br><br>
                Location : <?php echo $res['event_location']; ?><br><br>
                Description : <br><?php echo $res['event_description']; ?>
              </h4>
              <br>
            </div>
        </div>
          <?php }?>
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

<?php
  //4. tutup koneksi ke database
    mysqli_close($link);
?>  