<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Daftar Switch</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahAset"><i class="fa fa-plus"></i> Tambah Aset</button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
    <?php
        while ($row = $sqlSwitch->fetch()) {
          $query = $db->query("SELECT * FROM switch");
    ?>
      <div class="col-3">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $row['merk']." ".strtoupper($row['switch_type'])." | ".$row['nama_switch'] ?>
            </h5>
            <p><?php echo $row['ip_address'] ?></p>
            <span data-toggle="modal" data-target="#detailSwitch<?php echo $row['id_switch'] ?>" >
              <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail Switch"><i class="fa fa-layer-group"></i></button>
            </span>
            <span data-toggle="modal" data-target="#hapusSwitch<?php echo $row['id_switch'] ?>" >
              <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Switch"><i class="fa fa-trash"></i></button>
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
