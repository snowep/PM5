<?php
  include '../../koneksi.php';
  $id_pc = $_POST['id_pc'];
  $os = $_POST['os'];
  $ip = $_POST['ip'];
  $mac = $_POST['mac'];
  $sn = $_POST['sn'];
  $hdd = $_POST['hdd']." ".$_POST['size'];
  $ram = $_POST['ram'];
  $prcsr = $_POST['processor'];
  $tahun = $_POST['tahun'];

  $sql = $db->query("UPDATE pc SET ip_address = '$ip', mac_address = '$mac', serial_number = '$sn', hard_disk = '$hdd', ram = '$ram', processor = '$prcsr', sistem_operasi = '$os', tahun = '$tahun' WHERE id_pc = '$id_pc'");
  header("location:". $_SERVER['HTTP_REFERER']);
?>
