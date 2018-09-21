<div class="row">
  <div class="col-md-12">
    <?php
    if ($page == 'aset_ruangan') {
      $sql = $db->query("SELECT * FROM pc WHERE id_ruangan = '$id_ruangan'");
    } elseif ($page == 'aset_lantai') {
      $sql = $db->query("SELECT * FROM pc WHERE id_lantai = '$id_lantai'");
    } elseif ($page == 'aset_gedung') {
      $sql = $db->query("SELECT * FROM pc WHERE id_gedung = '$id_gedung'");
    } else {
      $sql = $db->query("SELECT * FROM pc WHERE id_kantor = '$id_kantor'");
    }
      $count = $sql->rowCount();

      if ($count > 0) {
    ?>
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Daftar PC</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahAset"><i class="fa fa-plus"></i> Tambah Aset</button>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
        <?php
            while ($row = $sql->fetch()) {
        ?>
          <div class="col-sm-12 col-md-6 col-lg-2">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo strtoupper($row['jenis'])." | ".$row['processor'] ?>
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
                <a href="pc_detail.php?id_pc=<?php echo $row['id_pc'] ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail Gedung"><i class="fa fa-layer-group"></i></a>
                <span data-toggle="modal" data-target="#hapusPC<?php echo $row['id_pc'] ?>" >
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Gedung"><i class="fa fa-trash"></i></button>
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
    <?php
      } else {
    ?>
    <div class="col-md-12">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Data aset tidak ditemukan!</h1>
          <p class="lead">Oops! Sepertinya belum ada data aset yang dimasukkan.</p>
          <hr class="my-4">
          <p>Mulai dengan menambah data aset kedalam database.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahAset">Tambah Aset</button>
        </div>
      </div>
    </div>
    <?php
      }
    ?>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
