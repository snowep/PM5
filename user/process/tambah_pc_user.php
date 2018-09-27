<?php
  session_start();
  include '../../koneksi.php';

  $id_pegawai = $_POST['pegawai'];

  $sql = $db->query("UPDATE pegawai SET id_pc = '".$_SESSION['id_pc']."' WHERE id_pegawai = '$id_pegawai'");

  header("location:". $_SERVER['HTTP_REFERER']);
?>
