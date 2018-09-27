<?php
  include '../../koneksi.php';
  $id_switch = $_POST['id_switch'];
  $ip = $_POST['ip'];
  $mac = $_POST['mac'];
  $tahun = $_POST['tahun'];
  $jm_port = $_POST['jm_port'];

  $sql = $db->query("UPDATE switch SET ip_address = '$ip', mac_address = '$mac', tahun = '$tahun', jumlah_port = '$jm_port' WHERE id_switch = '$id_switch'");
  header("location:". $_SERVER['HTTP_REFERER']);
?>
