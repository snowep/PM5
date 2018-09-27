<?php
  include '../../koneksi.php';
  session_start();

  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $struktural = $_POST['struktural'];

  $sql = $db->query("INSERT INTO pegawai(nip, nama, jabatan, struktural, id_pc)
                      VALUES('$nip','$nama','$jabatan','$struktural', NULL)");

  header("location:". $_SERVER['HTTP_REFERER']);
?>
