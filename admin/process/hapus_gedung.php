<?php
  session_start();
  $id_kantor = $_SESSION['id'];
  include '../../koneksi.php';
  $id_gedung = $_GET['id_gedung'];
  $sql = $db->query("DELETE FROM gedung WHERE id_gedung = '$id_gedung'");

  header("location:". $_SERVER['HTTP_REFERER']);
?>
