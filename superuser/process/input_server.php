<?php
      include "../../koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

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
  <body>


    <div class="navbar">
      <div class="navbar-inner">
        <div class="container-fluid">

          <a class="brand" href="index.html"><span>PLN</span></a>

          <div class="nav-no-collapse header-nav">
            <ul class="nav pull-right">
                <!-- start: User Dropdown -->
                <li class="dropdown">
                  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="halflings-icon white user"></i> Pln@123
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-menu-title">
                      <span>Account Settings</span>
                    </li>
                    <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                    <li><a href="../testergabung.php"><i class="halflings-icon off"></i> Logout</a></li>
                  </ul>
                </li>
                <!-- end: User Dropdown -->
              </ul>
            </div>
            <!-- end: Header Menu -->

          </div>
        </div>
        </div>

  <!-- koding sidebar kiri-->
        <!-- start: Header -->

          <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
              <ul class="nav nav-tabs nav-stacked main-menu">
                  <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                  <li>
                    <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Input </span><span class="label label-important"> 4 </span></a>
                    <ul>
                      <li><a class="submenu" href="input_server.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Input Asset Server</span></a></li>
                      <li><a class="submenu" href="input_wifi.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Input Asset Wifi</span></a></li>
                      <li><a class="submenu" href="input_pc.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Input Asset PC</span></a></li>
                      <li><a class="submenu" href="input_switch.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Input Asset Switch</span></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- start: Content -->
            <div id="content" class="span10">


            <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="icon-angle-right"></i>
              </li>
              <li><a href="#">input_Asset_Server</a></li>
            </ul>

            <div class="row-fluid">

              <body>
          	    <div class="ui container">

          	</nav>
          	  </body>
          	</div>
          	</html>

          </div>

          <div class="ui container">

            <div class="ui two column grid">
              <div class="column">
                <form class="ui equal width form" action="tambahku.php" method="post">
                  <div class="ui segment">
                    <div class="ui horizontal divider header">
                      Input Asset Server
                    </div>
                    <div class="fields">
                      <div class="field">

                        <input type="text" name="ip_address" placeholder="IP_Address">
                      </div>
                      <div class="field">

                        <input type="text" name="mac_address" placeholder="Mac_Address">
                      </div>
                    </div>
                    <div class="fields">
                      <div class="field">

                        <input type="text" name="serial_number" placeholder="Serial Number">

                        </div>
                          </div>
    <div class="fields">
                      <div class="field">

                        <input type="text" name="sistem_operasi" placeholder="Sistem operasi">
                      </div>
                      <div class="field">

                        <input type="text" name="hard_disk" placeholder="Hard disk">
                      </div>
                    </div>
                    <div class="fields">
                      <div class="field">

                        <input type="text" name="ram" placeholder="Ram">

                        </div>
                      </div>
<div class="fields">
                      <div class="field">

                        <input type="text" name="cpu_processor" placeholder="Cpu processor">
                      </div>
                        </div>
  <div class="fields">
                      <div class="field">

                        <input type="text" name="tipe_server" placeholder="Tipe server">
                      </div>
                      <div class="field">

                        <input type="text" name="merek" placeholder="Merek">
                      </div>
                    </div>



<div class="fields">
                      <div class="field">

                        <input type="text" name="fungsi_server" placeholder="Fungsi server">
                      </div>

                    </div>
                    <div class="fields">
                      <div class="field">

                        <input type="text" name="tahun" placeholder="Tahun">
                      </div>
                      <div class="field">

                        <input type="text" name="keterangan" placeholder="Keterangan">
                      </div>

                    </div>
                    <div class="fields">
                      <div class="field">
                        <button class="fluid ui green button">Simpan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>




      <div class="ui segment">
        <table class="ui very basic table">
          <thead>
            <tr>
              <th>Ip address</th>
              <th>Mac address</th>
              <th>Serial number</th>
              <th>Sistem operasi</th>
              <th>Hard disk</th>
              <th>Ram</th>
              <th>Cpu processor</th>
              <th>Tipe server</th>
              <th>Merek</th>
              <th>Fungsi server</th>
              <th>Tahun</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
    <?php
    $sql = $db->query("SELECT * FROM server");
    while ($row = $sql->fetch()) {
    ?>
          <tr>
             <td><?php echo $row['ip_address'];?></td>
             <td><?php echo $row['mac_address'];?></td>
             <td><?php echo $row['serial_number'];?></td>
             <td><?php echo $row['sistem_operasi'];?></td>
             <td><?php echo $row['hard_disk'];?></td>
             <td><?php echo $row['ram'];?></td>
             <td><?php echo $row['cpu_processor'];?></td>
             <td><?php echo $row['tipe_server'];?></td>
             <td><?php echo $row['merek'];?></td>
             <td><?php echo $row['fungsi_server'];?></td>
             <td><?php echo $row['tahun'];?></td>
             <td><?php echo $row['keterangan'];?></td>

           <td>
              <div class="ui buttons">
                <a href="hapusdataku.php?ip_address=<?php echo $row['ip_address'] ?>" class="ui red button">Delete</a>
              </div>
            </td>
          </tr>
    <?php
    }
    ?>
          </tbody>
        </table>


  </body>

  <!-- start: JavaScript-->

    <script src="js/jquery-1.9.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src='js/fullcalendar.min.js'></script>

    <script src='js/jquery.dataTables.min.js'></script>

    <script src="js/jquery.sparkline.min.js"></script>

    <script src="js/counter.js"></script>

    <script src="js/retina.js"></script>

    <script src="js/custom.js"></script>
  <!-- end: JavaScript-->
</html>
