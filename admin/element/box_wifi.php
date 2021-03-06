<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Daftar WiFi</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahAset"><i class="fa fa-plus"></i> Tambah Aset</button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
    <?php
        while ($row = $sqlWifi->fetch()) {
          $query = $db->query("SELECT * FROM wifi");
    ?>
      <div class="col-3">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $row['merk']." ".strtoupper($row['tipe'])." | ".$row['nama_ap'] ?>
            </h5>
            <p><?php echo $row['ip_address'] ?></p>
            <span data-toggle="modal" data-target="#detailWifi<?php echo $row['id_wifi'] ?>" >
              <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail Wifi"><i class="fa fa-layer-group"></i></button>
            </span>
            <span data-toggle="modal" data-target="#hapusWifi<?php echo $row['id_wifi'] ?>" >
              <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Wifi"><i class="fa fa-trash"></i></button>
            </span>
          </div>
        </div>
      </div>
          <?php
              }
          ?>
    </div>
  </div>
  <!-- /.box-header -->
  <!-- ./box-body -->
</div>
