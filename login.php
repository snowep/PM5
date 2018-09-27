<?php
  include 'koneksi.php';

  session_start();
  $_SESSION['username'] = $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = $db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
  $count = $sql->rowCount();

  if ($count > 0) {
    $row = $sql->fetch();
    if ($row['hak_akses'] == '0') {
      header("location:superuser");
    } elseif ($row['hak_akses'] == '1') {
      header("location:admin");
    } else {
      header("location:user");
    }
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['id_kantor'] = $row['id_kantor'];
  } else {
    header("location:index.php");
  }

?>
