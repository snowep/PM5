<?php
  session_start();
  $id_lantai = $_SESSION['id'];
  include '../../koneksi.php';
  $id_ruangan = $_GET['id_ruangan'];
  $sql = $db->query("DELETE FROM ruangan WHERE id_ruangan = '$id_ruangan'");

  header("location:../lantai.php?id_lantai=$id_lantai");
?>
