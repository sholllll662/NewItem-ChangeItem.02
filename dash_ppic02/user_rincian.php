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
                    <tr>
                      <td class="col-sm-4">Status</td>
                      <td>: <?php echo "$rr[keputusan]"; ?></td>
                    </tr>
                    <?php
                    $tgleng = $rr['tglinputeng'];
                    if ($tgleng !== '0000-00-00 00:00:00') {
                      echo "<tr>
                 <td class='col-sm-4'>Tanggal Aprroved Eng</td>
                  <td>: $rr[tglinputeng]</td>
                </tr>";
                    }
                    ?>
                    <?php
                    $tglqc = $rr['tglinputqc'];
                    if ($tglqc !== '0000-00-00 00:00:00') {
                      echo "<tr>
                 <td class='col-sm-4'>Tanggal Aprroved QC</td>
                  <td>: $rr[tglinputqc]</td>
                </tr>";
                    }
                    ?>
                    <?php
                    $tglgm = $rr['tglinputgm'];
                    if ($tglgm !== '0000-00-00 00:00:00') {
                      echo "<tr>
                 <td class='col-sm-4'>Tanggal Aprroved GM MKT</td>
                  <td>: $rr[tglinputgm]</td>
                </tr>";
                    }
                    ?>
                    <?php
                    $tglppic = $rr['tglinputppic'];
                    if ($tglppic !== '0000-00-00 00:00:00') {
                      echo "<tr>
                 <td class='col-sm-4'>Tanggal Input Weight Consumn & RAWMAT from PPIC</td>
                  <td>: $rr[tglinputppic]</td>
                </tr>";
                    }
                    ?>
                    <?php
                    $tglit = $rr['tglinputit'];
                    if ($tglit !== '0000-00-00 00:00:00') {
                      echo "<tr>
                 <td class='col-sm-4'>Register to SAP by IT</td>
                  <td>: $rr[tglinputit]</td>
                </tr>";
                    }
                    ?>
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
                    <?php
                    $SalesUnitLength = $rr['SalesUnitLength'];
                    if ($SalesUnitLength !== '0') {
                      echo "<tr>
                 <td class='col-sm-4'>SalesUnitLength</td>
                  <td>: $rr[SalesUnitLength]</td>
                </tr>";
                    }
                    ?>
                    <?php
                    $SalesUnitWeight = $rr['SalesUnitWeight'];
                    if ($SalesUnitWeight !== '0') {
                      echo "<tr>
                 <td class='col-sm-4'>SalesUnitWeight</td>
                  <td>: $rr[SalesUnitWeight] Kg</td>
                </tr>";
                    }
                    ?>
                    <tr>
                      <td>RM bar/Item Pcs</td>
                      <td>: <?php echo "$rr[ItemPcs]"; ?></td>
                    </tr>
                    <tr>
                      <td>Unit Price</td>
                      <td>: <?php echo "$rr[UnitPrice] $rr[currency]"; ?></td>
                    </tr>
                    <?php
                    $RMWeightConsume = $rr['RMWeightConsume'];
                    if ($RMWeightConsume !== '0') {
                      echo "<tr>
                 <td class='col-sm-4'>RMWeightConsume</td>
                  <td>: $rr[RMWeightConsume] Kg/Pcs</td>
                </tr>";
                    }
                    ?>
                    <td class="col-sm-4">U_MIS_CustName</td>
                    <td>: <?php echo "$rr[U_MIS_CustName]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_JenisItem</td>
                      <td>: <?php echo "$rr[U_MIS_JenisItem]"; ?></td>
                    </tr>
                    <?php
                    $U_MIS_Diameter = $rr['U_MIS_Diameter'];
                    if ($U_MIS_Diameter !== '0') {
                      echo "<tr>
                 <td class='col-sm-4'>U_MIS_Diameter</td>
                  <td>: $rr[U_MIS_Diameter]</td>
                </tr>";
                    }
                    ?>
                    <tr>
                      <td class="col-sm-4">U_MIS_Length</td>
                      <td>: <?php echo "$rr[U_MIS_Length]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U_MIS_Spec</td>
                      <td>: <?php echo "$rr[U_MIS_Spec]"; ?></td>
                    </tr>
                    <?php
                    $U_MIS_StdPacking = $rr['U_MIS_StdPacking'];
                    if ($U_MIS_StdPacking !== '0') {
                      echo "<tr>
                 <td class='col-sm-4'>U_MIS_StdPacking</td>
                  <td>: $rr[U_MIS_StdPacking] pcs</td>
                </tr>";
                    }
                    ?>
                    <tr>
                      <td class="col-sm-4">U_MIS_Packing</td>
                      <td>: <?php echo "$rr[U_MIS_Packing]"; ?></td>
                    </tr>
                    <?php
                    $proses1 = $rr['U_MIS_Proses1'];
                    $proses2 = $rr['U_MIS_Proses2'];
                    $proses3 = $rr['U_MIS_Proses3'];
                    $proses4 = $rr['U_MIS_Proses4'];
                    $proses5 = $rr['U_MIS_Proses5'];
                    $proses6 = $rr['U_MIS_Proses6'];
                    $proses7 = $rr['U_MIS_Proses7'];
                    $proses8 = $rr['U_MIS_Proses8'];
                    $proses9 = $rr['U_MIS_Proses9'];
                    $proses10 = $rr['U_MIS_Proses10'];
                    $proses11 = $rr['U_MIS_Proses11'];
                    $proses12 = $rr['U_MIS_Proses12'];
                    $proses13 = $rr['U_MIS_Proses13'];
                    $proses14 = $rr['U_MIS_Proses14'];
                    $proses15 = $rr['U_MIS_Proses15'];
                    $proses16 = $rr['U_MIS_Proses16'];
                    if ($proses16 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses7</td><td>: $rr[U_MIS_Proses7]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses8</td><td>: $rr[U_MIS_Proses8]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses9</td><td>: $rr[U_MIS_Proses9]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses10</td><td>: $rr[U_MIS_Proses10]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses11</td><td>: $rr[U_MIS_Proses11]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses12</td><td>: $rr[U_MIS_Proses12]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses13</td><td>: $rr[U_MIS_Proses13]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses14</td><td>: $rr[U_MIS_Proses14]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses15</td><td>: $rr[U_MIS_Proses15]</td></tr>
                 <tr><td class='col-sm-4'>U_MIS_Proses16</td><td>: $rr[U_MIS_Proses16]</td></tr>";
                    } elseif ($proses15 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses7</td><td>: $rr[U_MIS_Proses7]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses8</td><td>: $rr[U_MIS_Proses8]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses9</td><td>: $rr[U_MIS_Proses9]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses10</td><td>: $rr[U_MIS_Proses10]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses11</td><td>: $rr[U_MIS_Proses11]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses12</td><td>: $rr[U_MIS_Proses12]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses13</td><td>: $rr[U_MIS_Proses13]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses14</td><td>: $rr[U_MIS_Proses14]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses15</td><td>: $rr[U_MIS_Proses15]</td></tr>";
                    } elseif ($proses14 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses7</td><td>: $rr[U_MIS_Proses7]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses8</td><td>: $rr[U_MIS_Proses8]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses9</td><td>: $rr[U_MIS_Proses9]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses10</td><td>: $rr[U_MIS_Proses10]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses11</td><td>: $rr[U_MIS_Proses11]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses12</td><td>: $rr[U_MIS_Proses12]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses13</td><td>: $rr[U_MIS_Proses13]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses14</td><td>: $rr[U_MIS_Proses14]</td></tr>";
                    } elseif ($proses13 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses7</td><td>: $rr[U_MIS_Proses7]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses8</td><td>: $rr[U_MIS_Proses8]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses9</td><td>: $rr[U_MIS_Proses9]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses10</td><td>: $rr[U_MIS_Proses10]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses11</td><td>: $rr[U_MIS_Proses11]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses12</td><td>: $rr[U_MIS_Proses12]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses13</td><td>: $rr[U_MIS_Proses13]</td></tr>";
                    } elseif ($proses12 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses7</td><td>: $rr[U_MIS_Proses7]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses8</td><td>: $rr[U_MIS_Proses8]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses9</td><td>: $rr[U_MIS_Proses9]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses10</td><td>: $rr[U_MIS_Proses10]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses11</td><td>: $rr[U_MIS_Proses11]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses12</td><td>: $rr[U_MIS_Proses12]</td></tr>";
                    } elseif ($proses11 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses7</td><td>: $rr[U_MIS_Proses7]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses8</td><td>: $rr[U_MIS_Proses8]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses9</td><td>: $rr[U_MIS_Proses9]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses10</td><td>: $rr[U_MIS_Proses10]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses11</td><td>: $rr[U_MIS_Proses11]</td></tr>";
                    } elseif ($proses10 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses7</td><td>: $rr[U_MIS_Proses7]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses8</td><td>: $rr[U_MIS_Proses8]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses9</td><td>: $rr[U_MIS_Proses9]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses10</td><td>: $rr[U_MIS_Proses10]</td></tr>";
                    } elseif ($proses9 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses7</td><td>: $rr[U_MIS_Proses7]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses8</td><td>: $rr[U_MIS_Proses8]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses9</td><td>: $rr[U_MIS_Proses9]</td></tr>>";
                    } elseif ($proses8 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses7</td><td>: $rr[U_MIS_Proses7]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses8</td><td>: $rr[U_MIS_Proses8]</td></tr>";
                    } elseif ($proses7 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses7</td><td>: $rr[U_MIS_Proses7]</td></tr>";
                    } elseif ($proses6 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses6</td><td>: $rr[U_MIS_Proses6]</td></tr>";
                    } elseif ($proses5 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses5</td><td>: $rr[U_MIS_Proses5]</td></tr>";
                    } elseif ($proses4 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses4</td><td>: $rr[U_MIS_Proses4]</td></tr>";
                    } elseif ($proses3 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses3</td><td>: $rr[U_MIS_Proses3]</td></tr>";
                    } elseif ($proses2 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>
                  <tr><td class='col-sm-4'>U_MIS_Proses2</td><td>: $rr[U_MIS_Proses2]</td></tr>";
                    } elseif ($proses1 !== '') {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses1</td><td>: $rr[U_MIS_Proses1]</td></tr>";
                    } else {
                      echo "<tr><td class='col-sm-4'>U_MIS_Proses</td><td>: - </td></tr>";
                    }
                    ?>
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

                    <?php
                    $rawmat = $rr['rawmatppic'];
                    if ($rawmat !== '') {
                      echo "<tr>
                 <td class='col-sm-4'>RAWMAT FROM PPIC</td>
                  <td>: $rr[rawmatppic]</td>
                </tr>";
                    }
                    ?>
                    <?php
                    $catataneng = $rr['catatan_eng'];
                    if ($catataneng !== '') {
                      echo "<tr>
                 <td class='col-sm-4'>Catatan Engineering</td>
                  <td>: $rr[catatan_eng]</td>
                </tr>";
                    }
                    ?>
                    <?php
                    $catatanqc = $rr['catatan_qc'];
                    if ($catatanqc !== '') {
                      echo "<tr>
                 <td class='col-sm-4'>Catatan QC DEPT. HEAD</td>
                  <td>: $rr[catatan_qc]</td>
                </tr>";
                    }
                    ?>
                    <?php
                    $catatangm = $rr['catatan_gm'];
                    if ($catatangm !== '') {
                      echo "<tr>
                 <td class='col-sm-4'>Catatan GM</td>
                  <td>: $rr[catatan_gm]</td>
                </tr>";
                    }
                    ?>
                    <tr>
                      <td class="col-sm-4">RM Weight Consume </td>
                      <td>: <?php echo "$rr[RMWeightConsume]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">RAWMAT FROM PPIC </td>
                      <td>: <?php echo "$rr[rawmatppic]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">Sales Unit Weight </td>
                      <td>: <?php echo "$rr[SalesUnitWeight]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U MIS StdPacking </td>
                      <td>: <?php echo "$rr[U_MIS_StdPacking]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">U MIS CycleTime </td>
                      <td>: <?php echo "$rr[U_MIS_CycleTime]"; ?></td>
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