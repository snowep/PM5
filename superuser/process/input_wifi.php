<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<title>Input Asset Wifi</title>
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
              <li><a href="#">Input_Asset_Wifi</a></li>
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
                <form class="ui equal width form" action="tambah.php" method="post">
                  <div class="ui segment">
                    <div class="ui horizontal divider header">
                      Input Asset Wifi
                    </div>
                    <div class="fields">
                                          <div class="field">

                                            <input type="text" name="nama_ap" placeholder="Nama Access Point">
                                          </div>

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

                        <input type="text" name="merek" placeholder="Merek">
                      </div>
                    </div>



<div class="fields">
                      <div class="field">

                        <input type="text" name="tipe" placeholder="Tipe">
                      </div>

                    </div>
                    <div class="fields">
                      <div class="field">

                        <input type="text" name="tahun" placeholder="Tahun">
                      </div>
                      <div class="field">

                        <input type="text" name="kapasitas" placeholder="kapasitas">
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


              <div class="column">
      ------->>>>>>   OUTPUT SQL   <<<<<<

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
