<?php
  include '../../koneksi.php';
  $id_wifi = $_GET['id_wifi'];
  $sql = $db->query("DELETE FROM wifi WHERE id_wifi = '$id_wifi'");

  header("location:". $_SERVER['HTTP_REFERER']);
?>
