<?php
  session_start();
  $id = $_SESSION['id_gedung'];
  include '../../koneksi.php';

  $nm_lantai = $_POST['nama_lantai'];
  echo $id;
  $sql = $db->query("INSERT INTO lantai(id_gedung, nama_lantai) VALUES('$id','$nm_lantai')");

  header("location:../gedung.php?id_gedung=$id");
?>
