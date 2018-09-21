<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
      <?php
        $sql = $db->query("SELECT * FROM pegawai INNER JOIN pc ON pegawai.id_pc = pc.id_pc INNER JOIN ruangan ON pc.id_ruangan = ruangan.id_ruangan WHERE ruangan.id_ruangan = '$id_ruangan'");
        $count = $sql->rowCount();
      ?>
      <div class="info-box-content">
        <span class="info-box-text">Pegawai</span>
        <span class="info-box-number"><?php echo $count ?><small> Orang</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <?php
    $sql = $db->query("SELECT * FROM pc INNER JOIN ruangan ON pc.id_ruangan = ruangan.id_ruangan WHERE ruangan.id_ruangan = '$id_ruangan'");
    $countPC = $sql->rowCount();
    $sql = $db->query("SELECT * FROM server INNER JOIN ruangan ON server.id_ruangan = ruangan.id_ruangan WHERE ruangan.id_ruangan = '$id_ruangan'");
    $countServer = $sql->rowCount();
    $sql = $db->query("SELECT * FROM switch INNER JOIN ruangan ON switch.id_ruangan = ruangan.id_ruangan WHERE ruangan.id_ruangan = '$id_ruangan'");
    $countSwitch = $sql->rowCount();
    $sql = $db->query("SELECT * FROM wifi INNER JOIN ruangan ON wifi.id_ruangan = ruangan.id_ruangan WHERE ruangan.id_ruangan = '$id_ruangan'");
    $countWifi = $sql->rowCount();

    $countTot = $countPC + $countWifi + $countServer + $countSwitch;
  ?>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-wifi"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Access Point</span>
        <span class="info-box-number"><?php echo $countWifi ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="fa fa-server"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Server</span>
        <span class="info-box-number"><?php echo $countServer ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-box"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total Asset</span>
        <span class="info-box-number"><?php echo $countTot ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
