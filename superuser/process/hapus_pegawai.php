<?php
  session_start();
  include '../../koneksi.php';
  $id_pegawai = $_GET['id_pegawai'];
  $sql = $db->query("DELETE FROM pegawai WHERE id_pegawai = '$id_pegawai'");

  header("location:../daftar_pegawai.php");
?>
