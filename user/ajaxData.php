<?php
  include '../koneksi.php';

  if (!empty($_POST['id_gedung'])) {
    $sql = $db->query("SELECT * FROM lantai WHERE id_gedung = '".$_POST['id_gedung']."'");

    $count = $sql->rowCount();

    if ($count > 0) {
      echo '<option value="">Pilih Lantai</option>';
      while ($row = $sql->fetch()) {
        echo '<option value="'.$row['id_lantai'].'">'.$row['nama_lantai'].'</option>';
      }
    } else {
      echo '<option value="">Lantai tidak tersedia</option>';
    }
  } elseif (!empty($_POST['id_lantai'])) {
    $sql = $db->query("SELECT * FROM ruangan WHERE id_lantai = '".$_POST['id_lantai']."'");

    $count = $sql->rowCount();

    if ($count > 0) {
      echo '<option value="">Pilih Ruangan</option>';
      while ($row = $sql->fetch()) {
        echo '<option value="'.$row['id_ruangan'].'">'.$row['nama_ruangan'].'</option>';
      }
    } else {
      echo '<option value="">Ruangan tidak tersedia</option>';
    }
  }
?>
