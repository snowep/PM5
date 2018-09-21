<?php
  session_start();
  $id_gendung = $_SESSION['id'];
  include '../../koneksi.php';
  $id_lantai = $_GET['id_lantai'];
  $sql = $db->query("DELETE FROM lantai WHERE id_lantai = '$id_lantai'");

  header("location:../gedung.php?id_gedung=$id_gedung");
?>
