<header class="main-header">

  <!-- Logo -->
  <a href="index.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>S</b>I</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Sistem</b>Inventaris</span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" style="height: 51px;">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <i class="fa fa-bars"></i>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="user user-menu">
          <a href="../logout.php">
            Sign Out
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="float-left image">
        <img src="../dist/img/user2-160x160.jpg" class="rounded-circle" alt="User Image">
      </div>
      <div class="float-left info">
        <p> <?php echo $_SESSION['nama'] ?> </p>
        <a href="#"><i class="fa fa-circle text-success"></i> User</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Navigation</li>
    <?php
      $sql = $db->query("SELECT * FROM user INNER JOIN kantor ON user.id_kantor = kantor.id_kantor WHERE user.id_user = '".$_SESSION['id_user']."'");
      $count = $sql->rowCount();
      if ($count > 0) {
        $row = $sql->fetch();
    ?>
      <li><a href="kantor.php?id_kantor=<?php echo $row['id_kantor'] ?>"><i class="fa fa-building"></i> <span><?php echo $row['nama_kantor'] ?></span></a></li>
      <?php
        }
      ?>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-box"></i>
          <span>Aset</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left float-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="PC.php"><i class="fa fa-desktop"></i> PC</a></li>
          <li><a href="server.php"><i class="fa fa-server"></i> Server</a></li>
          <li><a href="switch.php"><i class="fa fa-microchip"></i> Switch</a></li>
          <li><a href="wifi.php"><i class="fa fa-wifi"></i> WiFi</a></li>
        </ul>
      </li>
      <li><a href="daftar_pegawai.php"><i class="fa fa-users"></i> <span>Daftar Pegawai</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
