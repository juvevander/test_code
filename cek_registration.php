<?php
  //1. buat koneksi ke database
  $link = mysqli_connect("localhost", "root", "", "db_test");

  //cek koneksi
  if (!$link) 
  {
      echo "Maaf Koneksi gagal";
  }else {
    //2. ambil data yang di input user dari formulir
    $user_name = $_POST['user_name'];
    $user_pass = md5($_POST['user_pass']);

    // $event_id = $_POST['event_id_siswa'];
  }
    $query = "INSERT INTO
                user(
                  user_name,
                  user_pass,
                  user_role,
                  user_status)
                Values(
                  '$user_name',
                  '$user_pass',
                  'UserEvent',
                  'Active')";
    $runQuery = mysqli_query($link, $query);
    if (!$runQuery) {
      echo "SQL SYNTAX ERROR. CHECK AGAIN";
    }else {
        // 4. redirect ke halaman daftar events
        header('location:index.php');
    }
      // 5. tutup koneksi ke database
      mysqli_close($link);
?>