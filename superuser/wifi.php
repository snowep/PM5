<?php
  session_start();
  include '../koneksi.php';
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
        Wifi
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Wifi</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <?php
            $sql = $db->query("SELECT * FROM wifi
              INNER JOIN kantor ON wifi.id_kantor = kantor.id_kantor
              INNER JOIN gedung ON wifi.id_gedung = gedung.id_gedung
              INNER JOIN lantai ON wifi.id_lantai = lantai.id_lantai
              INNER JOIN ruangan ON wifi.id_ruangan = ruangan.id_ruangan");
            $count = $sql->rowCount();

            if ($count > 0) {
          ?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Wifi</h3>



              <div class="box-tools pull-right">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahWifi"><i class="fa fa-plus"></i> Tambah Wifi</button>
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
                        <?php echo strtoupper($row['nama_ap'])." | ".$row['merk'] ?>
                      </h5>
                      <small>
                        <span class="badge badge-secondary"><?php echo $row['nama_kantor'] ?></span>
                        <span class="badge badge-primary"><?php echo $row['nama_gedung'] ?></span>
                        <span class="badge badge-primary"><?php echo $row['nama_lantai'] ?></span>
                        <span class="badge badge-primary"><?php echo $row['nama_ruangan'] ?></span>
                      </small>
                      <p><?php echo $row['ip_address'] ?></p>
                      <a href="aset.php?id_pc=<?php echo $row['id_pc'] ?>" class="btn btn-primary btn-sm">Lihat Aset</a>
                      <a href="pc_detail.php?id_pc=<?php echo $row['id_pc'] ?>" class="btn btn-primary btn-sm">Detail PC</a>
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
            <h1 class="display-4">Data mengenai Wifi tidak ditemukan!</h1>
            <p class="lead">Oops! Sepertinya belum ada data Wifi yang dimasukkan.</p>
            <hr class="my-4">
            <p>Mulai dengan menambah data Wifi kedalam database.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahWifi">Tambah Wifi</button>
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

  <div class="modal fade" id="tambahWifi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Wifi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="process/tambah_wifi.php" method="post">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Pilih Kantor</label>
                  <?php
                    $sql = $db->query("SELECT * FROM kantor");
                    $count = $sql->rowCount();
                  ?>
                  <select class="form-control" id="kantor" name="kantor">
                    <option value="">Pilih Kantor</option>
                    <?php
                      if ($count > 0) {
                        while ($row = $sql->fetch()) {
                          echo '<option value="'.$row['id_kantor'].'">'.$row['nama_kantor'].'</option>';
                        }
                      } else {
                        echo '<option value="">Belum ada Data Kantor</option>';
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Pilih Gedung</label>
                  <select class="form-control" id="gedung" name="gedung">
                    <option value="">Pilih Kantor Dahulu</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Pilih Lantai</label>
                  <select class="form-control" id="lantai" name="lantai">
                    <option value="">Pilih Gedung Dahulu</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Pilih Ruangan</label>
                  <select class="form-control" id="ruangan" name="ruangan">
                    <option value="">Pilih Lantai Dahulu</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Nama Access Point</label>
                  <input type="text" class="form-control" name="nama_ap" placeholder="PLN_Disjaya">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>IP Address</label>
                  <input type="text" class="form-control" name="ip_address" placeholder="192.168.10.5">
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>MAC Address</label>
                  <input type="text" class="form-control" name="mac_address" placeholder="00-E0-4D-B9-5C-47">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Merek</label>
                  <input type="text" class="form-control" name="merek" placeholder="Aruba">
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Tipe</label>
                  <input type="text" class="form-control" name="tipe" placeholder="105">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Tahun</label>
                  <input type="text" class="form-control" placeholder="2018" aria-label="tahun" name="tahun">
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Kapasitas</label>
                  <input type="text" class="form-control" name="kapasitas" placeholder="">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
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
<script type="text/javascript">
  $(document).ready(function() {
    $('#kantor').on('change', function() {
      var idKantor = $(this).val();
      if (idKantor) {
        $.ajax({
          type: 'POST',
          url:  'ajaxData.php',
          data: 'id_kantor='+idKantor,
          success:function(html) {
            $('#gedung').html(html);
            $('#lantai').html('<option value="">Pilih Gedung Dahulu</option>')
          }
        })
      }
    });

    $('#gedung').on('change', function() {
      var idGedung = $(this).val();
      if (idGedung) {
        $.ajax({
          type: 'POST',
          url:  'ajaxData.php',
          data: 'id_gedung='+idGedung,
          success:function(html) {
            $('#lantai').html(html);
            $('#ruangan').html('<option value="">Pilih Lantai Dahulu</option>')
          }
        })
      }
    });

    $('#lantai').on('change', function() {
      var idLantai = $(this).val();
      if (idLantai) {
        $.ajax({
          type: 'POST',
          url:  'ajaxData.php',
          data: 'id_lantai='+idLantai,
          success:function(html) {
            $('#ruangan').html(html);
          }
        })
      }
    });
  })
</script>
</body>
</html>
