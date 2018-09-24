<?php
  include '../../koneksi.php';

  $id_kantor  = $_POST['kantor'];
  $id_gedung  = $_POST['gedung'];
  $id_lantai  = $_POST['lantai'];
  $id_ruangan = $_POST['ruangan'];
  $jenis      = $_POST['jenis'];
  $os         = $_POST['sistem_operasi'];
  $ip         = $_POST['ip_address'];
  $mac        = $_POST['mac_address'];
  $sn         = $_POST['serial_number'];
  $proc       = $_POST['processor'];
  $hdd        = $_POST['hdd'];
  $ram        = $_POST['ram'];
  $thn        = $_POST['tahun'];
  $ket        = $_POST['ket'];
  $size       = $_POST['size'];

  $hdds = $hdd." ".$size;
  $sql = $db->query("INSERT INTO
    pc(id_kantor, id_gedung, id_lantai, id_ruangan, jenis, ip_address, mac_address, serial_number, hard_disk, ram, processor, sistem_operasi, tahun)
    VALUES('$id_kantor','$id_gedung','$id_lantai','$id_ruangan','$jenis','$ip','$mac','$sn','$hdds','$ram','$proc','$os','$thn')");

    header("location:". $_SERVER['HTTP_REFERER']);
?>
