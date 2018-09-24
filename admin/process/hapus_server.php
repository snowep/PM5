<?php
  include '../../koneksi.php';
  $id_server = $_GET['id_server'];
  $sql = $db->query("DELETE FROM server WHERE id_server = '$id_server'");

  header("location:". $_SERVER['HTTP_REFERER']);
?>
