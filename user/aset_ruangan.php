<?php
  session_start();
  include '../koneksi.php';
  if (isset($_SESSION['username'])) {

  } else {
    header("location:../index.php");
  }
  $id_ruangan = $_GET['id_ruangan'];
  $page = 'aset_ruangan';
  $_SESSION['id_ruangan'] = $id_ruangan;
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
          $sql = $db->query("SELECT * FROM ruangan INNER JOIN lantai ON ruangan.id_lantai = lantai.id_lantai INNER JOIN gedung ON lantai.id_gedung = gedung.id_gedung INNER JOIN kantor ON gedung.id_kantor = kantor.id_kantor WHERE ruangan.id_ruangan = '$id_ruangan'");
          $row = $sql->fetch();
          echo $row['nama_ruangan'];
        ?>
        <small>
          <?php echo $row['nama_lantai'] ?>
        </small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a href="kantor.php?id_kantor=<?php echo $_SESSION['id_kantor'] ?>"><?php echo $row['nama_kantor']; ?></a></li>
        <li class="breadcrumb-item"><a href="gedung.php?id_gedung=<?php echo $_SESSION['id_gedung'] ?>"><?php echo $row['nama_gedung']; ?></a></li>
        <li class="breadcrumb-item"><a href="lantai.php?id_lantai=<?php echo $_SESSION['id_lantai'] ?>"><?php echo $row['nama_lantai']; ?></a></li>
        <li class="breadcrumb-item active"><?php echo $row['nama_ruangan']; ?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <?php
        include 'element/statistic_box_aset_ruangan.php';
        include 'element/row_aset.php';
      ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <?php
      include 'element/footer.php';
      include 'element/modal_pc.php';
      include 'element/modal_server.php';
      include 'element/modal_switch.php';
      include 'element/modal_wifi.php';
    ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="../dist/js/adminlte.min.js"></script>
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
