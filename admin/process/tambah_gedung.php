<?php
  session_start();
  $id = $_SESSION['id_kantor'];
  include '../../koneksi.php';

  $nm_gedung = $_POST['nama_gedung'];
  $al_gedung = $_POST['alamat_gedung'];
  echo $id;
  $sql = $db->query("INSERT INTO gedung(id_kantor, nama_gedung, alamat) VALUES('$id','$nm_gedung','$al_gedung')");

  header("location:". $_SERVER['HTTP_REFERER']);
?>
