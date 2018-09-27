<?php
  session_start();
  include '../koneksi.php';
  if (isset($_SESSION['username'])) {

  } else {
    header("location:../index.php");
  }
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
        SERVER
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Server</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <?php
            $sql = $db->query("SELECT * FROM server
              INNER JOIN kantor ON server.id_kantor = kantor.id_kantor
              INNER JOIN gedung ON server.id_gedung = gedung.id_gedung
              INNER JOIN lantai ON server.id_lantai = lantai.id_lantai
              INNER JOIN ruangan ON server.id_ruangan = ruangan.id_ruangan");
            $count = $sql->rowCount();

            if ($count > 0) {
          ?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Server</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahServer"><i class="fa fa-plus"></i> Tambah Server</button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
              <?php
                  while ($row = $sql->fetch()) {
                    $query = $db->query("SELECT * FROM pegawai");
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
          </div><?php
            } else {
            ?>
      <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Data mengenai Server tidak ditemukan!</h1>
            <p class="lead">Oops! Sepertinya belum ada data Server yang dimasukkan.</p>
            <hr class="my-4">
            <p>Mulai dengan menambah data Server kedalam database.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahServer">Tambah Server</button>
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
    include 'element/modal_server.php';
  ?>

  <?php
  $sql = $db->query("SELECT * FROM server");
  while ($row = $sql->fetch()) {
  ?>
  <div class="modal fade" id="hapusServer<?php echo $row['id_server'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus <?php echo $row['merk']." - ".$row['tipe_server'] ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p style="font-weight:400">Anda yakin menghapus server ini? Server ini digunakan untuk manjalankan <i><?php echo $row['fungsi_server'] ?></i></p>
        </div>

        <div class="modal-footer">
          <a href="process/hapus_server.php?id_server=<?php echo $row['id_server'] ?>" class="btn btn-danger btn-sm">Hapus</a>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
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
<?php include 'ajaxGetData.php'; ?>
</body>
</html>
