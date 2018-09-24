<?php
  include '../../koneksi.php';

  $id_kantor  = $_POST['kantor'];
  $id_gedung  = $_POST['gedung'];
  $id_lantai  = $_POST['lantai'];
  $id_ruangan = $_POST['ruangan'];
  $na         = $_POST['nama_ap'];
  $ip         = $_POST['ip_address'];
  $mac        = $_POST['mac_address'];
  $merk       = $_POST['merek'];
  $tipe       = $_POST['tipe'];
  $tahun      = $_POST['tahun'];
  $kapasitas  = $_POST['kapasitas'];


  $sql = $db->query("INSERT INTO
    wifi(id_kantor, id_gedung, id_lantai, id_ruangan, nama_ap, ip_address, mac_address, merk, tipe, tahun, kapasitas)
    VALUES($id_kantor,$id_gedung,$id_lantai,$id_ruangan,'$na','$ip','$mac','$merk','$tipe','$tahun','$kapasitas')");

    header("location:". $_SERVER['HTTP_REFERER']);
?>
