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
              <h3 class="box-title"><i class="glyphicon glyphicon-tasks"></i> DATA ITEMS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead class="bg-yellow">
                      <tr>
                        <th><Center>No.</Center></th>
                        <th>ItemCode</th>
                        <th>ItemName</th>
                        <th>U MIS CustName</th>
                        <th>Tanggal Input PIC</th>
                        <th>Lampiran</th>
                        <th><Center>AKSI</Center></th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php
                  $tampil = mysqli_query($koneksi, "SELECT * FROM newitem WHERE keputusan NOT IN ('Approved by GM MKT', 'Disapproved by GM MKT') AND id_level='5' ORDER BY id DESC");
                  $no=1;
                  while ($rr=mysqli_fetch_array($tampil))
                  {
                    ?>
                    <tr>
                      <td><center><?php echo "$no.";?></center></td>
                      <td><?php echo $rr["ItemCode"];?></td>
                      <td><?php echo $rr["ItemName"];?></td>
                      <td><?php echo $rr["U_MIS_CustName"];?></td>
                      <td><?php echo $rr["tglinputmkt"];?></td>
                      <td><a href="../dash_mkt/DownloadFile.php?url=aksi/filemasters/<?php echo $rr["Lampiran"];?>">Download</a></td>
                      <td><center>
                        <a class='btn bg-orange btn-xs' data-toggle='tooltip' title='Lihat Rician Data' href='detail-data?id=<?php echo $rr["id"];?>'><span class='glyphicon glyphicon-list-alt'></span></a>
                      </td>
                      <?php  $no++; } ?>
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