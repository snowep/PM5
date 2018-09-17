<?php
  session_start();
  $id = $_SESSION['id_lantai'];
  include '../../koneksi.php';

  $nm_ruangan = $_POST['nama_ruangan'];
  echo $id;
  $sql = $db->query("INSERT INTO ruangan(id_lantai, nama_ruangan) VALUES('$id','$nm_ruangan')");

  header("location:../lantai.php?id_lantai=$id");
?>
