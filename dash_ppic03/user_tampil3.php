<?php include "header.php" ?>
<div class="wrapper">
  <!-- Star menu -->
  <?php include "menu.php"; ?>
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
                  <thead class="bg-red">
                    <tr>
                      <th>
                        <Center>No.</Center>
                      </th>
                      <th>Part No</th>
                      <th>Part Name</th>
                      <th>Customer</th>
                      <th>Status</th>
                      <th>Tanggal Input PIC</th>
                      <th>Lampiran</th>
                      <th>
                        <Center>AKSI</Center>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $tampil = mysqli_query($koneksi, "SELECT * FROM itemac WHERE keputusan IN ('Disapproved by SPV Eng', 'Disapproved by SPV QC', 'Disapproved by ASMEN PPIC', 'Disapproved by GM MKT') AND id_level IN ('8', '7', '6', '4', '3', '2', '1') ORDER BY id DESC");
                    $no = 1;
                    while ($rr = mysqli_fetch_array($tampil)) {
                    ?>
                      <tr>
                        <td>
                          <center><?php echo "$no."; ?></center>
                        </td>
                        <td><?php echo $rr["part_no"]; ?></td>
                        <td><?php echo $rr["part_name"]; ?></td>
                        <td><?php echo $rr["customer"]; ?></td>
                        <td><?php echo $rr["keputusan"]; ?></td>
                        <?php
                        $dept=$rr['dept'];
                        if ($dept == 'Marketing') {
                          echo "<td>$rr[tglmkt]</td>";
                        } elseif ($dept == 'Engineering') {
                          echo "<td>$rr[tgleng]</td>";
                        } elseif ($dept == 'PPIC') {
                          echo "<td>$rr[tglppic2]</td>";
                        } else {
                          echo "";
                        }
                        ?>
                        <td><a href="DownloadFile.php?url=aksi/filemasters/<?php echo $rr["Lampiran"]; ?>">Download</a></td>
                        <td>
                          <center>
                            <a class='btn bg-orange btn-xs' data-toggle='tooltip' title='Lihat Rician Data' href='detail-data?id=<?php echo $rr["id"]; ?>'><span class='glyphicon glyphicon-list-alt'></span></a>
                        </td>
                      <?php $no++;
                    } ?>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include "footer.php"; ?>