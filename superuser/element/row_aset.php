<div class="row">
  <div class="col-md-12">
  <?php
    if ($page == 'aset_ruangan') {
      $sqlPc = $db->query("SELECT * FROM pc WHERE id_ruangan = '$id_ruangan' ORDER BY INET_ATON(ip_address)");
      $sqlServer = $db->query("SELECT * FROM server WHERE id_ruangan = '$id_ruangan'");
      $sqlSwitch = $db->query("SELECT * FROM switch WHERE id_ruangan = '$id_ruangan'");
      $sqlWifi = $db->query("SELECT * FROM wifi WHERE id_ruangan = '$id_ruangan'");
    } elseif ($page == 'aset_lantai') {
      $sqlPc = $db->query("SELECT * FROM pc WHERE id_lantai = '$id_lantai' ORDER BY INET_ATON(ip_address)");
      $sqlServer = $db->query("SELECT * FROM server WHERE id_lantai = '$id_lantai'");
      $sqlSwitch = $db->query("SELECT * FROM switch WHERE id_lantai = '$id_lantai'");
      $sqlWifi = $db->query("SELECT * FROM wifi WHERE id_lantai = '$id_lantai'");
    } elseif ($page == 'aset_gedung') {
      $sqlPc = $db->query("SELECT * FROM pc WHERE id_gedung = '$id_gedung' ORDER BY INET_ATON(ip_address)");
      $sqlServer = $db->query("SELECT * FROM server WHERE id_gedung = '$id_gedung'");
      $sqlSwitch = $db->query("SELECT * FROM switch WHERE id_gedung = '$id_gedung'");
      $sqlWifi = $db->query("SELECT * FROM wifi WHERE id_gedung = '$id_gedung'");
    } else {
      $sqlPc = $db->query("SELECT * FROM pc WHERE id_kantor = '$id_kantor' ORDER BY INET_ATON(ip_address)");
      $sqlServer = $db->query("SELECT * FROM server WHERE id_kantor = '$id_kantor'");
      $sqlWifi = $db->query("SELECT * FROM wifi WHERE id_kantor = '$id_kantor'");
      $sqlSwitch = $db->query("SELECT * FROM switch WHERE id_kantor = '$id_kantor'");
    }
      $countPc = $sqlPc->rowCount();
      $countServer = $sqlServer->rowCount();
      $countSwitch = $sqlSwitch->rowCount();
      $countWifi = $sqlWifi->rowCount();

    if ($countPc > 0) { //cek data pc
      include 'box_pc.php'; //jika ada tampilkan pc
      if ($countServer > 0) { //cek data server
        include 'box_server.php'; //jika ada tampilkan server
        if ($countSwitch > 0) { //cek data switch
          include 'box_switch.php'; //jika ada tampilkan switch
          if ($countWifi > 0) { //cek data wifi
            include 'box_wifi.php'; //jika ada tampilkan wifi
          }
        } else { //jika switch tidak ada
          if ($countWifi > 0) { //cek data wifi
            include 'box_wifi.php'; //jika ada tampilkan wifi
          }
        } //selesai else switch
      } else {
        if ($countSwitch > 0) { //cek data switch
          include 'box_switch.php'; //jika ada tampilkan switch
          if ($countWifi > 0) { //cek data wifi
            include 'box_wifi.php'; //jika ada tampilkan wifi
          } else { //jika wifi tidak ada
            include 'box_aset_tidak_ada.php'; //tampilkan
          } //selesai else wifi
        } else { //jika switch tidak ada
          if ($countWifi > 0) { //cek data wifi
            include 'box_wifi.php'; //jika ada tampilkan wifi
          } else { //jika wifi tidak ada
            include 'box_aset_tidak_ada.php'; //tampilkan
          } //selesai else wifi
        } //selesai else switch
      }
    } else { //jika pc tidak ada
      if ($countServer > 0) { //cek data server
        include 'box_server.php'; //jika ada tampilkan server
        if ($countSwitch > 0) { //cek data switch
          include 'box_switch.php'; //jika ada tampilkan switch
          if ($countWifi > 0) { //cek data wifi
            include 'box_wifi.php'; //jika ada tampilkan wifi
          }
        } else { //jika switch tidak ada
          if ($countWifi > 0) { //cek data wifi
            include 'box_wifi.php'; //jika ada tampilkan wifi
          }
        } //selesai else switch
      } else {
        if ($countSwitch > 0) { //cek data switch
          include 'box_switch.php'; //jika ada tampilkan switch
          if ($countWifi > 0) { //cek data wifi
            include 'box_wifi.php'; //jika ada tampilkan wifi
          }
        } else { //jika switch tidak ada
          if ($countWifi > 0) { //cek data wifi
            include 'box_wifi.php'; //jika ada tampilkan wifi
          }
        } //selesai else switch
      }
      include 'box_aset_tidak_ada.php'; //tampilkan
    }
  ?>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
