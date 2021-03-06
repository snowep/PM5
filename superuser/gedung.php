<?php
  session_start();
  include '../koneksi.php';
  if (isset($_SESSION['username'])) {

  } else {
    header("location:../index.php");
  }
  $id_gedung = $_GET['id_gedung'];

  $_SESSION['id_gedung'] = $id_gedung;
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
          $sql = $db->query("SELECT * FROM gedung INNER JOIN kantor ON gedung.id_kantor = kantor.id_kantor WHERE id_gedung = '$id_gedung'");
          $row = $sql->fetch();
          echo $row['nama_gedung'];
        ?>
        <small><?php echo $row['nama_kantor']; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a href="kantor.php?id_kantor=<?php echo $_SESSION['id_kantor'] ?>"> <?php echo $row['nama_kantor']; ?></a></li>
        <li class="breadcrumb-item active"><?php echo $row['nama_gedung']; ?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <?php
            $sql = $db->query("SELECT * FROM lantai WHERE id_gedung = '$id_gedung'");
            $count = $sql->rowCount();

            if ($count > 0) {
          ?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Lantai</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahLantai"><i class="fa fa-plus"></i> Tambah Lantai</button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
              <?php
                  while ($row = $sql->fetch()) {
                    $query = $db->query("SELECT * FROM ruangan WHERE id_lantai = '".$row['id_lantai']."'");
                    $rowCount = $query->rowCount();
              ?>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row['nama_lantai'] ?></h5>
                      <ul class="list-group">
                      <?php
                        if ($rowCount > 0) {
                          while ($data = $query->fetch()) {
                      ?>
                        <li class="list-group-item"><a href="aset_ruangan.php?id_ruangan=<?php echo $data['id_ruangan'] ?>"><?php echo $data['nama_ruangan'] ?></a></li>
                    <?php }
                        }
                    ?>
                    <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#tambahRuangan">Tambah Ruangan</a></li>

                      </ul>
                      <br>
                      <a href="aset_lantai.php?id_lantai=<?php echo $row['id_lantai'] ?>" class="btn btn-light btn-sm" data-toggle="tooltip" data-placement="bottom" title="Lihat Aset Lantai"><i class="fa fa-eye"></i></a>
                      <span data-toggle="modal" data-target="#hapusLantai<?php echo $row['id_lantai'] ?>" >
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Lantai"><i class="fa fa-trash"></i></button>
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
          </div><?php
            } else {
            ?>
      <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Data lantai tidak ditemukan!</h1>
            <p class="lead">Oops! Sepertinya belum ada data lantai yang dimasukkan.</p>
            <hr class="my-4">
            <p>Mulai dengan menambah data lantai kedalam database.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahLantai">Tambah Lantai</button>
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

  <div class="modal fade" id="tambahLantai" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Lantai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="process/tambah_lantai.php" method="post">
            <div class="form-group">
              <label>Nama Lantai</label>
              <input type="text" class="form-control" name="nama_lantai" placeholder="Nama Lantai">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  $sql = $db->query("SELECT * FROM lantai WHERE id_gedung = '$id'");
  while ($row = $sql->fetch()) {
  ?>
  <div class="modal fade" id="hapusLantai<?php echo $row['id_lantai'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus <?php echo $row['nama_lantai'] ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p style="font-weight:400">Anda yakin menghapus lantai ini? Semua data yang bersangkutan dengan lantai ini akan ikut <b>terhapus</b> dan <b>TIDAK BISA</b> dikembalikan lagi?</p>
        </div>

        <div class="modal-footer">
          <a href="process/hapus_lantai.php?id_lantai=<?php echo $row['id_lantai'] ?>" class="btn btn-danger btn-sm">Hapus</a>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>

<div class="modal fade" id="tambahRuangan" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Ruangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="process/tambah_ruangan.php" method="post">
          <div class="form-group">
            <label>Nama Ruangan</label>
            <input type="text" class="form-control" name="nama_ruangan" placeholder="Nama Ruangan">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

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
<script src="../bower_components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="../bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
