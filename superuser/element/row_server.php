<div class="row">
  <div class="col-md-12">
    <?php
    if ($page == 'aset_ruangan') {
      $sql = $db->query("SELECT * FROM server WHERE id_ruangan = '$id_ruangan'");
    } elseif ($page == 'aset_lantai') {
      $sql = $db->query("SELECT * FROM server WHERE id_lantai = '$id_lantai'");
    } elseif ($page == 'aset_gedung') {
      $sql = $db->query("SELECT * FROM server WHERE id_gedung = '$id_gedung'");
    } else {
      $sql = $db->query("SELECT * FROM server WHERE id_kantor = '$id_kantor'");
    }

    $count = $sql->rowCount();

      if ($count > 0) {
    ?>
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
            while ($row = $sql->fetch()) {
              $query = $db->query("SELECT * FROM server");
        ?>
          <div class="col-3">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $row['merk']." ".strtoupper($row['tipe_server'])." | ".$row['fungsi_server'] ?>
                </h5>
                <p><?php echo $row['ip_address'] ?></p>
                <a href="server_detail.php?id_server=<?php echo $row['id_server'] ?>" class="btn btn-primary btn-sm">Detail Server</a>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusServer<?php echo $row['id_server'] ?>"><i class="fa fa-trash"></i></button>
              </div>
            </div>
          </div>
              <?php
                  }
                }
              ?>
        </div>
      </div>
      <!-- /.box-header -->
      <!-- ./box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
