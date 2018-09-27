<?php
  include '../../koneksi.php';
  $id_pegawai = $_POST['id_pegawai'];
  $nama = $_POST['nama'];
  $jbtn = $_POST['jabatan'];
  $struktural = $_POST['struktural'];

  $sql = $db->query("UPDATE pegawai SET nama = '$nama', jabatan = '$jbtn', struktural = '$struktural' WHERE id_pegawai = '$id_pegawai'");
  header("location:". $_SERVER['HTTP_REFERER']);
?>
