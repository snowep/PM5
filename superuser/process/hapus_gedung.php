<?php
  session_start();
  $id_kantor = $_SESSION['id'];
  include '../../koneksi.php';
  $id_gedung = $_GET['id_gedung'];
  $nm_gedung = $_POST['nama_gedung'];
  $al_gedung = $_POST['alamat_gedung'];
  echo $id;
  $sql = $db->query("DELETE FROM gedung WHERE id_gedung = '$id_gedung'");

  header("location:../kantor.php?id_kantor=$id_kantor");
?>
