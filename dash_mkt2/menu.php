<div class="wrapper"> <header class="main-header">
  <!-- Logo -->
  <a href="home" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b></b><img src="../assets/img/logo/logonsi.png" width="30px" width="50px"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg" style="margin-left: -15px;"><img src="../assets/img/logo/logonsi.png" width="50px"></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" style="background-image: url('../assets/img/bg/b.png');">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span> 
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li><a href="#" style="text-transform: uppercase;"><strong>ADD & CHANGE ITEM MASTER</strong></a></li>
        <li class="bg-navy">
          <a href="logout" onclick="return confirm('Yakin Anda Akan Logout?')">
            <i class="fa fa-power-off"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<div style="border-top: 3px solid #FFFFFF;"></div>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar"><div style="border-top: 3px solid #FFFFFF;"></div>

  <div class="user-panel" style="padding-bottom: 20px;">
      <div class="pull-left image"><?php $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");?>
      <img src="../assets/img/user/<?php if (trim($_SESSION['gambar']) == ''){ echo "blank.png"; }else{ echo $_SESSION['gambar']; } ?>" class="img-rounded" alt="User Image">
    </div>
    <div class="pull-left info">
      <p style="margin-top: 4px;"><span><?php echo $_SESSION['nama']; ?></span></p><p><span><?php echo $_SESSION['username']; ?></span></p>
      <p></p>
    </div>
  </div>

  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header bg-red"><i class="fa fa-home"></i> MENU NAVIGASI</li>
    <li class="treeview">
      <a href="home">
        <i class="fa fa-folder"></i>
        <span>DASHBOARD</span>
      </a>
    </li>
    <li class="treeview">
      <a href="create-data">
        <i class="fa fa-plus-square"></i> <span>TAMBAH DATA</span>
      </a>
    </li>
    <li class="treeview">
      <!-- <a href="view-data">
        <i class="fa fa-list-ol"></i> <span>LIHAT DATA</span>
      </span>
    </a> -->
  
  <li>
    <a href="logout" onclick="return confirm('Yakin Anda Akan Logout?')">
      <i class="fa fa-power-off"></i> <span>KELUAR</span>
    </a>
  </li>
</ul>
</section>
<!-- /.sidebar -->
</aside>



  
  <div class="preloader" style="background-color: #000;">
    <div class="loading">
      <img src="../assets/loader/a.gif" width="150">
    </div>
  </div>