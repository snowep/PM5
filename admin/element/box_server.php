<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Daftar Server</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahAset"><i class="fa fa-plus"></i> Tambah Aset</button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
    <?php
        while ($row = $sqlServer->fetch()) {
          $query = $db->query("SELECT * FROM server");
    ?>
      <div class="col-3">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $row['merk']." ".strtoupper($row['tipe_server'])." | ".$row['fungsi_server'] ?>
            </h5>
            <p><?php echo $row['ip_address'] ?></p>
            <span data-toggle="modal" data-target="#detailServer<?php echo $row['id_server'] ?>" >
              <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail Server"><i class="fa fa-layer-group"></i></button>
            </span>
            <span data-toggle="modal" data-target="#hapusServer<?php echo $row['id_server'] ?>" >
              <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Server"><i class="fa fa-trash"></i></button>
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
