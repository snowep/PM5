<?php
  include '../../koneksi.php';
  $id_wifi = $_POST['id_wifi'];
  $nm_ap = $_POST['nama_ap'];
  $ip = $_POST['ip'];
  $mac = $_POST['mac'];
  $kap = $_POST['kapasitas'];
  $tahun = $_POST['tahun'];

  $sql = $db->query("UPDATE wifi SET nama_ap = '$nm_ap', ip_address = '$ip', mac_address = '$mac', kapasitas = '$kap', tahun = '$tahun' WHERE id_wifi = '$id_wifi'");
  header("location:". $_SERVER['HTTP_REFERER']);
?>
