<?php
  include '../../koneksi.php';

  $nm_kantor = $_POST['nama_kantor'];
  $al_kantor = $_POST['alamat_kantor'];
  $tel_kantor = $_POST['telepon_kantor'];

  $sql = $db->query("INSERT INTO kantor(nama_kantor, alamat, telepon) VALUES('$nm_kantor','$al_kantor','$tel_kantor')");

  header("location:../index.php");
?>
