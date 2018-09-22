<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Daftar PC</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahAset"><i class="fa fa-plus"></i> Tambah Aset</button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="card-columns">
    <?php
        while ($row = $sqlPc->fetch()) {
    ?>
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">
              <?php if ($row['jenis'] == 'pc') { echo strtoupper($row['jenis'])." | ".$row['processor']; } else { echo ucfirst($row['jenis'])." | ".$row['processor']; } ?>
            </h5>
            <p><?php echo $row['ip_address'] ?></p>
            <?php
              $query = $db->query("SELECT * FROM pegawai WHERE id_pc = '".$row['id_pc']."'");
              $data = $query->fetch();
              if ($data['id_pc'] !== $row['id_pc']) {
            ?>
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahUser<?php echo $row['id_pc'] ?>"><i class="fa fa-user"></i> Belum ada User</button>
            <?php
              }
            ?>
            <span data-toggle="modal" data-target="#detailPC<?php echo $row['id_pc'] ?>" >
              <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail <?php if ($row['jenis'] == 'pc') { echo strtoupper($row['jenis']); } else { echo ucfirst($row['jenis']); } ?>"><i class="fa fa-layer-group"></i></button>
            </span>
            <span data-toggle="modal" data-target="#hapusPC<?php echo $row['id_pc'] ?>" >
              <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus <?php if ($row['jenis'] == 'pc') { echo strtoupper($row['jenis']); } else { echo ucfirst($row['jenis']); } ?>"><i class="fa fa-trash"></i></button>
            </span>
          </div>
        </div>
          <?php
              }
          ?>

        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <!-- ./box-body -->
</div>
