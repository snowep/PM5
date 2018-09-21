<?php
  session_start();
  include '../koneksi.php';
  $id_kantor = $_GET['id_kantor'];

  $_SESSION['id_kantor'] = $id_kantor;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
    include 'element/navbar.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php
          $sql = $db->query("SELECT * FROM kantor WHERE id_kantor = '$id_kantor'");
          $row = $sql->fetch();
          echo $row['nama_kantor'];
        ?>
        <small>
          <?php echo $row['telepon'] ?>
          <a href="aset_kantor.php?id_kantor=<?php echo $id_kantor ?>" class="btn btn-primary btn-sm">Lihat Aset</a>
          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusKantor<?php echo $id_kantor ?>"><i class="fa fa-trash"></i></button>
        </small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active"><?php echo $row['nama_kantor']; ?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <?php
        include 'element/statistic_box_kantor.php';
      ?>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <?php
            $sql = $db->query("SELECT * FROM gedung WHERE id_kantor = '$id_kantor'");
            $count = $sql->rowCount();

            if ($count > 0) {
          ?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Gedung</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahGedung"><i class="fa fa-plus"></i> Tambah Gedung</button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
              <?php
                  while ($row = $sql->fetch()) {
              ?>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row['nama_gedung'] ?></h5>
                      <p><?php echo $row['alamat'] ?></p>
                      <a href="aset_gedung.php?id_gedung=<?php echo $row['id_gedung'] ?>" class="btn btn-primary btn-sm">Lihat Aset</a>
                      <a href="gedung.php?id_gedung=<?php echo $row['id_gedung'] ?>" class="btn btn-primary btn-sm">Detail Gedung</a>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusGedung<?php echo $row['id_gedung'] ?>"><i class="fa fa-trash"></i></button>
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
          </div><?php
            } else {
            ?>
      <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Data gedung tidak ditemukan!</h1>
            <p class="lead">Oops! Sepertinya belum ada data gedung yang dimasukkan.</p>
            <hr class="my-4">
            <p>Mulai dengan menambah data gedung kedalam database.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahGedung">Tambah Gedung</button>
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
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include 'element/footer.php';
  ?>

  <div class="modal fade" id="tambahGedung" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Gedung</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="process/tambah_gedung.php" method="post">
            <div class="form-group">
              <label>Nama Gedung</label>
              <input type="text" class="form-control" name="nama_gedung" placeholder="Nama Gedung">
            </div>
            <div class="form-group">
              <label>Alamat Gedung</label>
              <textarea class="form-control" name="alamat_gedung" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  $sql = $db->query("SELECT * FROM gedung WHERE id_kantor = '$id_kantor'");
  while ($row = $sql->fetch()) {
  ?>
  <div class="modal fade" id="hapusGedung<?php echo $row['id_gedung'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus <?php echo $row['nama_gedung'] ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p style="font-weight:400">Anda yakin menghapus gedung ini? Semua data yang bersangkutan dengan gedung ini akan ikut <b>terhapus</b> dan <b>TIDAK BISA</b> dikembalikan lagi!</p>
        </div>

        <div class="modal-footer">
          <a href="process/hapus_gedung.php?id_gedung=<?php echo $row['id_gedung'] ?>" class="btn btn-danger btn-sm">Hapus</a>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<div class="modal fade" id="hapusKantor<?php echo $id_kantor ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <?php $sql = $db->query("SELECT * FROM kantor WHERE id_kantor = '$id_kantor'"); $row = $sql->fetch(); ?>
        <h5 class="modal-title">Hapus <?php echo $row['nama_kantor'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p style="font-weight:400">Anda yakin menghapus kantor ini? Semua data yang bersangkutan dengan kantor ini akan ikut <b>terhapus</b> dan <b>TIDAK BISA</b> dikembalikan lagi!</p>
      </div>

      <div class="modal-footer">
        <a href="process/hapus_kantor.php?id_kantor=<?php echo $id_kantor ?>" class="btn btn-danger btn-sm">Hapus</a>
      </div>
    </div>
  </div>
</div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
