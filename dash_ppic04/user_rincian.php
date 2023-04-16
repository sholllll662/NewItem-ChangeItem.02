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
                $rr = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM itembc WHERE id='$_GET[id]'"));
                $tglin = date("d - m - Y", strtotime($rr['tgl_input']));
                ?>
                <div class="col-sm-6 table-responsive">
                  <table>
                    <tr>
                      <td class="col-sm-5" style="font-size: 18px;"><b>Nama</b></td>
                      <td style="font-size: 18px;"><b>: <?php echo $rr['pic']; ?></b></td>
                    </tr>
                    <tr>
                      <td class="col-sm-5" style="font-size: 18px;"><b>Departement</b></td>
                      <td style="font-size: 18px;"><b>: <?php echo $rr['dept']; ?></b></td>
                    </tr>
                    <tr><?php
                        $dept = $rr['dept'];
                        if ($dept == 'Engineering') {
                          echo "
                      <td class='col-sm-5' style='font-size: 18px;'><b>Date</b></td>
                      <td style='font-size: 18px;'><b>: $rr[tgleng] </b></td>";
                        } elseif ($dept == 'Marketing') {
                          echo "
                        <td class='col-sm-5' style='font-size: 18px;'><b>Date</b></td>
                        <td style='font-size: 18px;'><b>: $rr[tglmkt] </b></td>";
                        } elseif ($dept == 'PPIC') {
                          echo "
                        <td class='col-sm-5' style='font-size: 18px;'><b>Date</b></td>
                        <td style='font-size: 18px;'><b>: $rr[tglppic2] </b></td>";
                        }
                        ?></tr>
                    <tr>
                      <td class="col-sm-5" style="font-size: 18px;"><b>Status</b></td>
                      <td style="font-size: 18px;"><b>: <?php echo $rr['keputusan']; ?></b></td>
                    </tr>
                    <tr>
                      <td class="col-sm-5">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  <table class="table table-striped table-hover">
                    <center>
                      <div style="font-size: 28px;"><b>BEFORE CHANGE</b></div>
                    </center>
                    <br>
                    <tr>
                      <td class="col-sm-5">PART NO</td>
                      <td>: <?php echo $rr['part_no']; ?></td>
                    </tr>
                    <tr>
                      <td>PART NAME</td>
                      <td>: <?php echo "$rr[part_name]"; ?></td>
                    </tr>
                    <td>CUSTOMER</td>
                    <td>: <?php echo "$rr[customer]"; ?></td>
                    </tr>
                    <tr>
                      <td>REASON CHANGE</td>
                      <td>: <?php echo "$rr[reason]"; ?></td>
                    </tr>
                    <tr>
                      <td>CHANGE REQUEST PIC</td>
                      <td>: <?php echo "$rr[pic]"; ?></td>
                    </tr>
                    <tr>
                      <td>MATERIAL RM CODE</td>
                      <td>: <?php echo "$rr[material_rmcode]"; ?></td>
                    </tr>
                    <?php
                    $rm_stock = $rr['rm_stock'];
                    if ($rm_stock !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM STOCK</td>
                      <td>: $rr[rm_stock]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM STOCK</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $rm_stockJ = $rr['rm_stockJ'];
                    if ($rm_stockJ !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM STOCK JUDGEMENT</td>
                      <td>: $rr[rm_stockJ]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM STOCK JUDGEMENT</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $rm_weight = $rr['rm_weight'];
                    if ($rm_weight !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM WEIGHT</td>
                      <td>: $rr[rm_weight]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM WEIGHT</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $weight_consum = $rr['weight_consum'];
                    if ($weight_consum !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM WEIGHT CONSUMPTION</td>
                      <td>: $rr[weight_consum]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM WEIGHT CONSUMPTION</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $rm_use = $rr['rm_use'];
                    if ($rm_use !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM USE Kg/M</td>
                      <td>: $rr[rm_use]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM USE Kg/M</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <tr><?php
                        $proses1 = $rr['proces1'];
                        $proses2 = $rr['proces2'];
                        $proses3 = $rr['proces3'];
                        $proses4 = $rr['proces4'];
                        $proses5 = $rr['proces5'];
                        $proses6 = $rr['proces6'];
                        $proses7 = $rr['proces7'];
                        $proses8 = $rr['proces8'];
                        $proses9 = $rr['proces9'];
                        $proses10 = $rr['proces10'];
                        $proses11 = $rr['proces11'];
                        $proses12 = $rr['proces12'];
                        $proses13 = $rr['proces13'];
                        $proses14 = $rr['proces14'];
                        $proses15 = $rr['proces15'];
                        $proses16 = $rr['proces16'];
                        if ($proses16 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] ==> $rr[proces12] ==> $rr[proces13] ==> $rr[proces14] ==> $rr[proces15] ==> $rr[proces16] </td>";
                        } elseif ($proses15 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] ==> $rr[proces12] ==> $rr[proces13] ==> $rr[proces14] ==> $rr[proces15] </td>";
                        } elseif ($proses14 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] ==> $rr[proces12] ==> $rr[proces13] ==> $rr[proces14] </td>";
                        } elseif ($proses13 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] ==> $rr[proces12] ==> $rr[proces13] </td>";
                        } elseif ($proses12 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] ==> $rr[proces12] </td>";
                        } elseif ($proses11 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] </td>";
                        } elseif ($proses10 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] </td>";
                        } elseif ($proses9 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] </td>";
                        } elseif ($proses8 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] </td>";
                        } elseif ($proses7 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] </td>";
                        } elseif ($proses6 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] </td>";
                        } elseif ($proses5 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] </td>";
                        } elseif ($proses4 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] </td>";
                        } elseif ($proses3 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] </td>";
                        } elseif ($proses2 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] </td>";
                        } elseif ($proses1 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] </td>";
                        } else {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: - </td>";
                        }
                        ?></tr>
                    <tr>
                      <td class="col-sm-4">UNIT PRICE</td>
                      <td>: <?php echo "$rr[unit_price] $rr[currency]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">REASON CHANGE PRICE</td>
                      <td>: <?php echo "$rr[reason_price]"; ?></td>
                    </tr>
                    <?php
                    $part_stock = $rr['part_stock'];
                    if ($part_stock !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>Part STOCK</td>
                      <td>: $rr[part_stock]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>Part STOCK</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <tr>
                      <td class="col-sm-4">Amalgamasi Stock (By Eng)</td>
                      <td>: <?php echo "$rr[amalgamasi]"; ?></td>
                    </tr>
                    <?php
                    $part_stockJ = $rr['part_stockJ'];
                    if ($part_stockJ !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>Part STOCK JUDGEMENT</td>
                      <td>: $rr[part_stockJ]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>Part STOCK JUDGEMENT</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $unit_length = $rr['unit_length'];
                    if ($unit_length !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>UNIT LENGTH</td>
                      <td>: $rr[unit_length]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>UNIT LENGTH</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $item_pcs = $rr['item_pcs'];
                    if ($item_pcs !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM BAR/ITEM PCS</td>
                      <td>: $rr[item_pcs]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM BAR/ITEM PCS</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $std_packing = $rr['std_packing'];
                    if ($std_packing !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>STD. PACKING</td>
                      <td>: $rr[std_packing]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>STD. PACKING</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <tr>
                      <td class="col-sm-4">C/T</td>
                      <td>: <?php echo "$rr[ct]"; ?></td>
                    </tr>
                    <?php
                    $weight_part = $rr['weight_part'];
                    if ($weight_part !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>WEIGHT PART</td>
                      <td>: $rr[weight_part]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>WEIGHT PART</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                  </table>
                </div>
                <?php
                $rr = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM itemac WHERE id='$_GET[id]'"));
                $tglin = date("d - m - Y", strtotime($rr['tgl_input']));
                ?>
                <div class="col-sm-6 table-responsive">
                  <table>
                    <tr>
                      <td class="col-sm-5">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="col-sm-5">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="col-sm-9" style="font-size: 18px; border: 2px solid black; text-align: center; vertical-align: middle;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Model : <?php echo $rr['model']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                      <td style="font-size: 18px;"><b></b></td>
                    </tr>
                    <tr>
                      <td class="col-sm-5">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="col-sm-5">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  <table class="table table-striped table-hover">
                    <div style="font-size: 9.5px;">
                      &nbsp;
                    </div>
                    <center>
                      <div style="font-size: 28px;"><b>AFTER CHANGE</b></div>
                    </center>
                    <br>
                    <tr>
                      <td class="col-sm-5">PART NO</td>
                      <td>: <?php echo $rr['part_no']; ?></td>
                    </tr>
                    <tr>
                      <td>PART NAME</td>
                      <td>: <?php echo "$rr[part_name]"; ?></td>
                    </tr>
                    <td>CUSTOMER</td>
                    <td>: <?php echo "$rr[customer]"; ?></td>
                    </tr>
                    <tr>
                      <td>REASON CHANGE</td>
                      <td>: <?php echo "$rr[reason]"; ?></td>
                    </tr>
                    <tr>
                      <td>CHANGE REQUEST PIC</td>
                      <td>: <?php echo "$rr[pic]"; ?></td>
                    </tr>
                    <tr>
                      <td>MATERIAL RM CODE</td>
                      <td>: <?php echo "$rr[material_rmcode]"; ?></td>
                    </tr>
                    <?php
                    $rm_stock = $rr['rm_stock'];
                    if ($rm_stock !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM STOCK</td>
                      <td>: $rr[rm_stock]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM STOCK</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $rm_stockJ = $rr['rm_stockJ'];
                    if ($rm_stockJ !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM STOCK JUDGEMENT</td>
                      <td>: $rr[rm_stockJ]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM STOCK JUDGEMENT</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $rm_weight = $rr['rm_weight'];
                    if ($rm_weight !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM WEIGHT</td>
                      <td>: $rr[rm_weight]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM WEIGHT</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $weight_consum = $rr['weight_consum'];
                    if ($weight_consum !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM WEIGHT CONSUMPTION</td>
                      <td>: $rr[weight_consum]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM WEIGHT CONSUMPTION</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $rm_use = $rr['rm_use'];
                    if ($rm_use !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM USE Kg/M</td>
                      <td>: $rr[rm_use]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM USE Kg/M</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <tr><?php
                        $proses1 = $rr['proces1'];
                        $proses2 = $rr['proces2'];
                        $proses3 = $rr['proces3'];
                        $proses4 = $rr['proces4'];
                        $proses5 = $rr['proces5'];
                        $proses6 = $rr['proces6'];
                        $proses7 = $rr['proces7'];
                        $proses8 = $rr['proces8'];
                        $proses9 = $rr['proces9'];
                        $proses10 = $rr['proces10'];
                        $proses11 = $rr['proces11'];
                        $proses12 = $rr['proces12'];
                        $proses13 = $rr['proces13'];
                        $proses14 = $rr['proces14'];
                        $proses15 = $rr['proces15'];
                        $proses16 = $rr['proces16'];
                        if ($proses16 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] ==> $rr[proces12] ==> $rr[proces13] ==> $rr[proces14] ==> $rr[proces15] ==> $rr[proces16] </td>";
                        } elseif ($proses15 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] ==> $rr[proces12] ==> $rr[proces13] ==> $rr[proces14] ==> $rr[proces15] </td>";
                        } elseif ($proses14 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] ==> $rr[proces12] ==> $rr[proces13] ==> $rr[proces14] </td>";
                        } elseif ($proses13 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] ==> $rr[proces12] ==> $rr[proces13] </td>";
                        } elseif ($proses12 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] ==> $rr[proces12] </td>";
                        } elseif ($proses11 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] ==> $rr[proces11] </td>";
                        } elseif ($proses10 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] ==> $rr[proces10] </td>";
                        } elseif ($proses9 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] ==> $rr[proces9] </td>";
                        } elseif ($proses8 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] ==> $rr[proces8] </td>";
                        } elseif ($proses7 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] ==> $rr[proces7] </td>";
                        } elseif ($proses6 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] ==> $rr[proces6] </td>";
                        } elseif ($proses5 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] ==> $rr[proces5] </td>";
                        } elseif ($proses4 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] ==> $rr[proces4] </td>";
                        } elseif ($proses3 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] ==> $rr[proces3] </td>";
                        } elseif ($proses2 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] ==> $rr[proces2] </td>";
                        } elseif ($proses1 !== '') {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: $rr[proces1] </td>";
                        } else {
                          echo "
                      <td class='col-sm-4'>PROCESS</td>
                      <td>: - </td>";
                        }
                        ?></tr>
                    <tr>
                      <td class="col-sm-4">UNIT PRICE</td>
                      <td>: <?php echo "$rr[unit_price] $rr[currency]"; ?></td>
                    </tr>
                    <tr>
                      <td class="col-sm-4">REASON CHANGE PRICE</td>
                      <td>: <?php echo "$rr[reason_price]"; ?></td>
                    </tr>
                    <?php
                    $part_stock = $rr['part_stock'];
                    if ($part_stock !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>Part STOCK</td>
                      <td>: $rr[part_stock]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>Part STOCK</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <tr>
                      <td class="col-sm-4">Amalgamasi Stock (By Eng)</td>
                      <td>: <?php echo "$rr[amalgamasi]"; ?></td>
                    </tr>
                    <?php
                    $part_stockJ = $rr['part_stockJ'];
                    if ($part_stockJ !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>Part STOCK JUDGEMENT</td>
                      <td>: $rr[part_stockJ]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>Part STOCK JUDGEMENT</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $unit_length = $rr['unit_length'];
                    if ($unit_length !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>UNIT LENGTH</td>
                      <td>: $rr[unit_length]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>UNIT LENGTH</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $item_pcs = $rr['item_pcs'];
                    if ($item_pcs !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>RM BAR/ITEM PCS</td>
                      <td>: $rr[item_pcs]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>RM BAR/ITEM PCS</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <?php
                    $std_packing = $rr['std_packing'];
                    if ($std_packing !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>STD. PACKING</td>
                      <td>: $rr[std_packing]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>STD. PACKING</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <tr>
                      <td class="col-sm-4">C/T</td>
                      <td>: <?php echo "$rr[ct]"; ?></td>
                    </tr>
                    <?php
                    $weight_part = $rr['weight_part'];
                    if ($weight_part !== '0') {
                      echo "<tr>
                      <td class='col-sm-4'>WEIGHT PART</td>
                      <td>: $rr[weight_part]</td>
                    </tr>";
                    } else {
                      echo "<tr>
                      <td class='col-sm-4'>WEIGHT PART</td>
                      <td>: - </td>
                    </tr>";
                    }
                    ?>
                    <div class="col-sm-6 table-responsive">
                      <table class="table table-striped table-hover">
                        <div style="font-size: 6px;">
                          &nbsp;
                        </div>
                        <?php
                        $weightcomsumn = $rr['weightconsumn'];
                        if ($weightcomsumn !== '0') {
                          echo "<tr>
                      <td class='col-sm-4'>Weight Consumn From PPIC</td>
                      <td>: $rr[weightconsumn]</td>
                    </tr>";
                        }
                        ?>
                        <?php
                        $rawmat = $rr['rawmatppic'];
                        if ($rawmat !== '') {
                          echo "<tr>
                      <td class='col-sm-4'>RAWMAT FROM PPIC</td>
                      <td>: $rr[rawmatppic]</td>
                    </tr>";
                        }
                        ?>
                      </table>
                    </div>
                    <div class="col-sm-12 table-responsive">
                      <div style="font-size: 6px;">
                        &nbsp;
                      </div>
                      <center>
                        <div style="font-size: 28px;"><b>DATE CUT OFF</b></div>
                      </center>
                      <br>
                    </div>
                    <div class="col-sm-6 table-responsive">
                      <table class="table table-striped table-hover">
                        <tr>
                          <td class="col-sm-4">Prod (By Eng)</td>
                          <td>: <?php echo "$rr[cutoffprod]"; ?></td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-sm-6 table-responsive">
                      <table class="table table-striped table-hover">
                        <tr>
                          <td class="col-sm-4">Sales (By Mkt)</td>
                          <td>: <?php echo "$rr[cutoffsales]"; ?></td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-sm-12 table-responsive">
                      <div class='form-group'>
                        <br>
                        <center>
                          <table>
                            <tr>
                              <td style="font-size: 14px; border: 2px solid black; text-align: center; vertical-align: middle; width: 4cm; height: 3cm;"><b>Prepared By : <br><br> <?php $dept = $rr['dept'];
                                                                                                                                                                                    if ($dept == 'Engineering') {
                                                                                                                                                                                      echo "$rr[tgleng]";
                                                                                                                                                                                    } elseif ($dept == 'Marketing') {
                                                                                                                                                                                      echo "$rr[tglmkt]";
                                                                                                                                                                                    } elseif ($dept == 'PPIC') {
                                                                                                                                                                                      echo "$rr[tglppic2]";
                                                                                                                                                                                    } ?> <br><br> <?php echo $rr['dept']; ?></b></td>
                              <td style="font-size: 14px; border: 2px solid black; text-align: center; vertical-align: middle; width: 4cm; height: 3cm;"><b>Checked By : <br><br> <?php echo $rr['tglspveng']; ?> <br><br> SPV ENG</b></td>
                              <td style="font-size: 14px; border: 2px solid black; text-align: center; vertical-align: middle; width: 4cm; height: 3cm;"><b>Checked By : <br><br> <?php echo $rr['tglqc']; ?> <br><br> SPV QC</b></td>
                              <td style="font-size: 14px; border: 2px solid black; text-align: center; vertical-align: middle; width: 4cm; height: 3cm;"><b>Checked By : <br><br> <?php echo $rr['tglppic']; ?> <br><br> ASMEN PPIC</b></td>
                              <td style="font-size: 14px; border: 2px solid black; text-align: center; vertical-align: middle; width: 4cm; height: 3cm;"><b>Checked By : <br><br> <?php echo $rr['tglgm']; ?> <br><br> GM MKT</b></td>
                              <td style="font-size: 14px; border: 2px solid black; text-align: center; vertical-align: middle; width: 4cm; height: 3cm;"><b>Checked By : <br><br> <?php echo $rr['tglppic3']; ?> <br><br> PPIC</b></td>
                              <td style="font-size: 14px; border: 2px solid black; text-align: center; vertical-align: middle; width: 4cm; height: 3cm;"><b>Register To SAP : <br><br> <?php echo $rr['tglit']; ?> <br><br> IT</b></td>
                              <td style="font-size: 14px; border: 2px solid black; text-align: center; vertical-align: middle; width: 4cm; height: 3cm;"><b>APPROVED : <br><br> <?php $acc = $rr['keputusan'];
                                                                                                                                                                                if ($acc == 'Approved by GM HRD IT') {
                                                                                                                                                                                  echo "$rr[keputusan]";
                                                                                                                                                                                } else {
                                                                                                                                                                                  echo "";
                                                                                                                                                                                } ?> <br><br> GM HRD IT</b></td>
                            </tr>
                          </table>
                        </center>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <style>
            label {
              border: 1 px solid #ccc;
            }
          </style>
    </section>
  </div>
  <?php include "footer.php"; ?>