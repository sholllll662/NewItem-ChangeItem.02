<?php include "header.php" ?>
<div class="wrapper">
  <!-- Star menu -->
  <?php include "menu.php"; ?>
  <!-- End menu -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        <small>Item Details</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='home'><i class='fa fa-home'></i> Home</a></li>
        <li class='active'>Item Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title col-sm-10"><i class="glyphicon glyphicon-tasks"></i> RINCIAN DATA ITEM</h3>
              <a href="javascript:history.go(-1)" class="btn bg-orange col-sm-2"><i class="fa fa-chevron-left"></i> K E M B A L I</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class='form-group'>
                <?php
                $rr = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM newitem WHERE id='$_GET[id]'"));
                $tglin = date("d - m - Y", strtotime($rr['tgl_input']));
                ?>
                <div class="col-sm-4 table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <td class="col-sm-5">Nama</td>
                      <td>: <?php echo $rr['pic_mkt']; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-5">Departement</td>
                      <td>: <?php echo $rr['mkt']; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-5">Date</td>
                      <td>: <?php echo $rr['tglinputmkt']; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-5">Customer</td>
                      <td>: <?php echo $rr['U_MIS_CustName']; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-5">Model</td>
                      <td>: <?php echo $rr['model']; ?></td>
                    </tr>
                  </table>
                </div>
                <div class="col-sm-8 table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <td class="col-sm-5">ItemCode</td>
                      <td>: <?php echo $rr['ItemCode']; ?></td>
                    </tr>
                    <tr>
                      <td>ItemName</td>
                      <td>: <?php echo "$rr[ItemName]"; ?></td>
                    </tr>
                    <td>SalesUnit</td>
                    <td>: <?php echo "$rr[SalesUnit]"; ?></td>
                    </tr>
                    <tr>
                      <td>SalesUnitLength</td>
                      <td>: <?php echo "$rr[SalesUnitLength]"; ?></td>
                    </tr>
                    <tr>
                      <td>RM bar/Item Pcs</td>
                      <td>: <?php echo "$rr[ItemPcs]"; ?></td>
                    </tr>
                    <tr>
                      <td>Unit Price</td>
                      <td>: <?php echo "$rr[currency]$rr[UnitPrice]"; ?></td>
                    </tr>
                    <td class="col-sm-4">U_MIS_CustName</td>
                    <td>: <?php echo "$rr[U_MIS_CustName]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_JenisItem</td>
                      <td>: <?php echo "$rr[U_MIS_JenisItem]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Diameter</td>
                      <td>: <?php echo "$rr[U_MIS_Diameter]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Length</td>
                      <td>: <?php echo "$rr[U_MIS_Length]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Spec</td>
                      <td>: <?php echo "$rr[U_MIS_Spec]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Packing</td>
                      <td>: <?php echo "$rr[U_MIS_Packing]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses1</td>
                      <td>: <?php echo "$rr[U_MIS_Proses1]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses2</td>
                      <td>: <?php echo "$rr[U_MIS_Proses2]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses3</td>
                      <td>: <?php echo "$rr[U_MIS_Proses3]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses4</td>
                      <td>: <?php echo "$rr[U_MIS_Proses4]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses5</td>
                      <td>: <?php echo "$rr[U_MIS_Proses5]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses6</td>
                      <td>: <?php echo "$rr[U_MIS_Proses6]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses7</td>
                      <td>: <?php echo "$rr[U_MIS_Proses7]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses8</td>
                      <td>: <?php echo "$rr[U_MIS_Proses8]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses9</td>
                      <td>: <?php echo "$rr[U_MIS_Proses9]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses10</td>
                      <td>: <?php echo "$rr[U_MIS_Proses10]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses11</td>
                      <td>: <?php echo "$rr[U_MIS_Proses11]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Proses12</td>
                      <td>: <?php echo "$rr[U_MIS_Proses12]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Subcont</td>
                      <td>: <?php echo "$rr[U_MIS_Subcont]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_ROHSFree</td>
                      <td>: <?php echo "$rr[U_MIS_ROHSFree]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_RawMat</td>
                      <td>: <?php echo "$rr[U_MIS_RawMat]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">Status</td>
                      <td>: <?php echo "$rr[keputusan]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">Catatan Engineering</td>
                      <td>: <?php echo "$rr[catatan_eng]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">Catatan QC DEPT. HEAD</td>
                      <td>: <?php echo "$rr[catatan_qc]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">Catatan GM</td>
                      <td>: <?php echo "$rr[catatan_gm]"; ?></td>
                    </tr>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
  <?php include "footer.php"; ?>