<?php
  include '../../koneksi.php';

  $id_kantor  = $_POST['kantor'];
  $id_gedung  = $_POST['gedung'];
  $id_lantai  = $_POST['lantai'];
  $id_ruangan = $_POST['ruangan'];
  $ns         = $_POST['nama_switch'];
  $st         = $_POST['switch_type'];
  $ip         = $_POST['ip_address'];
  $mac        = $_POST['mac_address'];
  $merk       = $_POST['merek'];
  $tahun      = $_POST['tahun'];
  $jp         = $_POST['jumlah_port'];
  $ket        = $_POST['ket'];

  $sql = $db->query("INSERT INTO
    switch(id_kantor, id_gedung, id_lantai, id_ruangan, nama_switch, switch_type, ip_address, mac_address, merk, tahun, jumlah_port, keterangan)
    VALUES('$id_kantor','$id_gedung','$id_lantai','$id_ruangan','$ns','$st','$ip','$mac','$merk','$tahun',$jp,'$ket')");

    header("location:". $_SERVER['HTTP_REFERER']);
?>
