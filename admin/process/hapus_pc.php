<?php
  include '../../koneksi.php';
  $id_pc = $_GET['id_pc'];
  $sql = $db->query("DELETE FROM pc WHERE id_pc = '$id_pc'");

  header("location:". $_SERVER['HTTP_REFERER']);
?>
