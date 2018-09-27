<?php
  include '../../koneksi.php';
  $id_server = $_POST['id_server'];
  $fungsi = $_POST['fungsi'];
  $os = $_POST['os'];
  $ip = $_POST['ip'];
  $mac = $_POST['mac'];
  $sn = $_POST['sn'];
  $hdd = $_POST['hdd']." ".$_POST['size'];
  $ram = $_POST['ram'];
  $prcsr = $_POST['processor'];
  $tahun = $_POST['tahun'];

  $sql = $db->query("UPDATE server SET ip_address = '$ip', mac_address = '$mac', serial_number = '$sn', hard_disk = '$hdd', ram = '$ram', cpu_processor = '$prcsr', sistem_operasi = '$os', tahun = '$tahun', fungsi_server = '$fungsi' WHERE id_server = '$id_server'");
  header("location:". $_SERVER['HTTP_REFERER']);
?>
