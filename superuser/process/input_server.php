<?php
      include "../config.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<title>Input Asset Server</title>
    <meta charset="utf-8">
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <script type="text/javascript" src="../config/jquery.min.js"></script>
  	<script type="text/javascript" src="../components/dropdown.js"></script>
  	<script type="text/javascript" src="../components/transition.js"></script>
  	<script type="text/javascript" src="../components/modal.js"></script>
  	<link rel="stylesheet" type="text/css" href="../components/container.css">
  	<link rel="stylesheet" type="text/css" href="../components/menu.css">
  	<link rel="stylesheet" type="text/css" href="../components/grid.css">
  	<link rel="stylesheet" type="text/css" href="../components/header.css">
  	<link rel="stylesheet" type="text/css" href="../components/segment.css">
  	<link rel="stylesheet" type="text/css" href="../components/divider.css">
  	<link rel="stylesheet" type="text/css" href="../components/form.css">
  	<link rel="stylesheet" type="text/css" href="../components/label.css">
  	<link rel="stylesheet" type="text/css" href="../components/button.css">
  	<link rel="stylesheet" type="text/css" href="../components/table.css">
  	<link rel="stylesheet" type="text/css" href="../components/icon.css">
  	<link rel="stylesheet" type="text/css" href="../components/dropdown.css">
  	<link rel="stylesheet" type="text/css" href="../components/modal.css">
  	<link rel="stylesheet" type="text/css" href="../components/transition.css">
  	<link rel="stylesheet" type="text/css" href="../components/site.css">
  	<link rel="stylesheet" type="text/css" href="../components/semantic.css">
    <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    <title></title>
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
    $sql = $conn->query("SELECT * FROM server");
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
