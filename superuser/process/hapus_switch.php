<?php
  include '../../koneksi.php';
  $id_switch = $_GET['id_switch'];
  $sql = $db->query("DELETE FROM switch WHERE id_switch = '$id_switch'");

  header("location:". $_SERVER['HTTP_REFERER']);
?>
