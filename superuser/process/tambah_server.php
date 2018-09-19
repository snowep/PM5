<?php
  include '../../koneksi.php';

  $id_kantor  = $_POST['kantor'];
  $id_gedung  = $_POST['gedung'];
  $id_lantai  = $_POST['lantai'];
  $id_ruangan = $_POST['ruangan'];
  $ip         = $_POST['ip_address'];
  $mac        = $_POST['mac_address'];
  $sn         = $_POST['serial_number'];
  $os         = $_POST['sistem_operasi'];
  $hdd        = $_POST['hdd'];
  $ram        = $_POST['ram'];
  $proc       = $_POST['processor'];
  $tips        = $_POST['tipe_server'];
  $merk        = $_POST['merek'];
  $fs        = $_POST['fungsi_server'];
  $thn        = $_POST['tahun'];
  $ket        = $_POST['ket'];

  $sql = $db->query("INSERT INTO
    server(id_kantor, id_gedung, id_lantai, id_ruangan, ip_address, mac_address, serial_number, sistem_operasi, hard_disk, ram, cpu_processor, tipe_server, merk, fungsi_server, tahun, keterangan)
    VALUES('$id_kantor','$id_gedung','$id_lantai','$id_ruangan','$ip','$mac','$sn','$os','$hdd','$ram','$proc','$tips','$merk','$fs','$thn','$ket')");

  //header("location:../server.php");
?>
