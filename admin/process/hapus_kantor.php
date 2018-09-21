<?php
  include '../../koneksi.php';
  $id_kantor = $_GET['id_kantor'];
  $sql = $db->query("DELETE FROM kantor WHERE id_kantor = '$id_kantor'");

  header("location:../index.php");
?>
