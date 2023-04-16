<?php include "header.php" ?>
<div class="wrapper">
<?php include "../dash_mkt/DownloadFile.php";?>
  <!-- Star menu -->
  <?php include "menu.php";?>
  <!-- End menu -->

  <!-- Start content -->
  <div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        <small>View Items List</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='home'><i class='fa fa-dashboard'></i> Home</a></li>
        <li class='active'>Tampil Data</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="glyphicon glyphicon-tasks"></i> SEMUA DATA CHANGE ITEMS MASTER</h3>
              <!-- <a href='excel' class="pull-right btn bg-blue"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead class="bg-navy">
                    <tr>
                        <th><Center>No.</Center></th>
                        <th>Lampiran</th>
                        <th>Part No</th>
                        <th>Part Name</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Tanggal Input PIC</th>
                        <th><Center>AKSI</Center></th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php
                  $tampil = mysqli_query($koneksi, "SELECT * FROM itemac ORDER BY id DESC");
                  $no=1;
                  while ($rr=mysqli_fetch_array($tampil))
                  {
                    $dept = $rr['dept'];
                    echo"
                    <tr>
                      <td><center>$no</center></td>";
                      if ($dept=='Marketing') {
                        echo "<td><a href='../dash_mkt2/DownloadFile.php?url=aksi/filemasters/$rr[lampiran]'>Download</a></td>";
                      } elseif ($dept=='Engineering') {
                        echo "<td><a href='../dash_eng2/DownloadFile.php?url=aksi/filemasters/$rr[lampiran]'>Download</a></td>";
                      } elseif ($dept=='PPIC') {
                        echo "<td><a href='../dash_ppic03/DownloadFile.php?url=aksi/filemasters/$rr[lampiran]'>Download</a></td>";
                      } else {echo"";}
                      echo "
                      <td>$rr[part_no]</td>
                      <td>$rr[part_name]</td>
                      <td>$rr[customer]</td>
                      <td>$rr[keputusan]</td>";
                      if ($dept=='Marketing'){
                        echo"<td>$rr[tglmkt]</td>";
                      } elseif ($dept=='Engineering') {
                        echo"<td>$rr[tgleng]</td>";
                      } elseif ($dept=='PPIC') {
                        echo"<td>$rr[tglppic2]</td>";
                      } else {echo"";}
                      echo"
                      <td><center>
                        <a class='btn bg-orange btn-xs' data-toggle='tooltip' title='Lihat Rician Data' href='detail-data?id=$rr[id]'><span class='glyphicon glyphicon-list-alt'></span></a>
                      </td>";
                    $no++; } ?>
                    </tr>
                  </tbody>
                </table></div>
              </div>
            </div>
          </div>  
        </div>
      </section>
    </div>
    <?php include "footer.php";?>
