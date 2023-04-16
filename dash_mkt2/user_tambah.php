<?php include "header.php" ?>
<div class="wrapper">
  <!-- Star menu -->
  <?php include "menu.php"; ?>
  <!-- End menu -->
  <?php date_default_timezone_set('Asia/Jakarta'); ?>
  <!-- Start content -->
  <div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        <small>Add & Change Items Master</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='home'><i class='fa fa-home'></i> Home</a></li>
        <li class='active'>Add Item</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class='content'>
      <div class='row'>
        <div class='col-md-12'>
          <div class='box box-success'>
            <div class='box-header with-border'>
              <h3 class='box-title'><i class='fa fa-edit'></i> FORM CHANGE ITEM MASTER</h3>
            </div>
            <form class='form-horizontal' role='form' method=POST action='aksi/user_simpan.php' enctype='multipart/form-data'>
              <div class='box-body'>
                <div style="border: 2px solid black;">
                  <br>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Nama PIC :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='ea' autofocus required autocomplete="off">
                    </div>
                    <label class='col-sm-2 control-label'>Departement :</label>
                    <div class='col-sm-4'>
                      <select name='eb' class='form-control' autofocus required autocomplete="off">
                        <?php
                        //$conn = new mysqli($servername, $username, $password, $dbname);
                        $sql = "SELECT nama_dept FROM departement ORDER BY id ASC";
                        $result = $koneksi->query($sql);

                        while ($row = mysqli_fetch_assoc($result)) { ?>

                          <option value="<?php echo $row['nama_dept']; ?>" <?php if ($id == $row['id']) echo 'selected'; ?>>
                            <?php
                            echo $row['nama_dept'];

                            ?>
                          </option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Tanggal Input :</label>
                    <div class='col-sm-4'>
                      <input type='datetime-local' class='form-control' name='ec' id="ec" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>Model :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='ed' autofocus required autocomplete="off">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Lampiran :</label>
                    <div class='col-sm-4'>
                      <input type="file" name="lampiran" class="input-large">
                    </div>
                  </div>
                </div>
                <br>
                <div style="border: 2px solid black;">
                  <div>
                    <br>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'></label>
                    <label class='col-sm-2 control-label' style="font-size: 18px; border: 2px solid black; text-align: center; vertical-align: middle;">BEFORE CHANGE</label>
                    <label class='col-sm-2 control-label'></label>
                    <label class='col-sm-2 control-label'></label>
                    <label class='col-sm-2 control-label' style="font-size: 18px; border: 2px solid black; text-align: center; vertical-align: middle;">AFTER CHANGE</label>
                  </div>
                  <div class='form-group'>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PART NO :</label>
                    <div class='col-sm-4'>
                      <select class="select2" id="select2" name="a1" style='width: 300px;'>
                        <option value=""> </option>

                        <!-- koneksi ke server SAP -->
                        <?php
                        // Koneksi ke database server
                        $servername = "sapbi2";
                        $database = "SBO_NSI_USD_LIVE";
                        $uid = "sa";
                        $pass = "P@ssw0rd";

                        $connection = [
                          "Database" => $database,
                          "Uid" => $uid,
                          "PWD" => $pass
                        ];

                        $conn = sqlsrv_connect($servername, $connection);

                        if (!$conn)
                          die(print_r(sqlsrv_errors(), true));

                        $tsql = "SELECT DISTINCT T0.[ItemCode] as 'Part No', 
                T0.[ItemName], 
                T0.[U_MIS_CustName], 
                T0.[U_MIS_RawMat], 
                T2.[Code], 
                T0.[U_MIS_ItemWeight], 
                T2.[Quantity], 
                T2.[Warehouse], 
                T0.[U_MIS_Proses1], 
                T0.[U_MIS_Proses2], 
                T0.[U_MIS_Proses3], 
                T0.[U_MIS_Proses4], 
                T0.[U_MIS_Proses5], 
                T0.[U_MIS_Proses6], 
                T0.[U_MIS_Proses7], 
                T0.[U_MIS_Proses8], 
                T0.[U_MIS_Proses9], 
                T0.[U_MIS_Proses10], 
                T0.[U_MIS_Proses11], 
                T0.[U_U_MIS_Proses12], 
                T3.[Currency], 
                T3.[Price], 
                T0.[SLength1], 
                T0.[SWeight1], 
                T0.[U_MIS_PiecePerBar], 
                T0.[U_MIS_StdPacking], 
                T0.[U_MIS_Packing], 
                T0.[U_MIS_CycleTime] 
                FROM OITM T0  INNER JOIN OITT T1 ON T0.[ItemCode] = T1.[Code] 
                INNER JOIN ITT1 T2 ON T1.[Code] = T2.[Father] 
                INNER JOIN ITM1 T3 ON T0.[ItemCode] = T3.[ItemCode] 

                WHERE T0.[ItmsGrpCod] = 110 
                
                and
                T3.PriceList = 1

                ORDER BY T0.[ItemCode]";

                        $stmt = sqlsrv_query($conn, $tsql);

                        if ($stmt == false) {
                          echo 'Error';
                        }

                        while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                          // echo "<option value='" . $obj['Part No'] . "'>" . $obj['Part No'] . "</option>";
                          echo "<option value='" . $obj['Part No'] . "'>" . $obj['Part No'] . "</option>";
                        }
                        sqlsrv_free_stmt($stmt);

                        ?>

                      </select>
                      <!-- <input type='text' class='form-control' name='a1' autofocus required autocomplete="off"> -->
                    </div>
                    <label class='col-sm-2 control-label'>PART NO :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='a2' autofocus required autocomplete="off">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PART NAME :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='b1' id="b1" autofocus required autocomplete="off">
                    </div>
                    <label class='col-sm-2 control-label'>PART NAME : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='b2' autofocus required autocomplete="off">
                    </div>
                  </div>
                  <!-- <div class="form-group">
                <label class='col-sm-2 control-label'>Currency :</label>
                  <div class='col-sm-1'>
                  <select name='cry' class='form-control'>
                  <option value='$' selected>USD</option>
                  <option value='Rp' >IDR</option>
                  </select>
                  </div>
                  <label class='col-sm-2 control-label' style="margin-left: -112px;">Unit Price :</label>
                  <div class='col-sm-2'>
                    <input type='text' class='form-control' name='f' autofocus required autocomplete="off">
                  </div>
                  <label class='col-sm-2 control-label'>RM bar/Item Pcs :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='e' autofocus required autocomplete="off">
                  </div>
                </div> -->
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>COSTUMER:</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='c1' id="c1" autofocus required autocomplete="off">
                    </div>
                    <label class='col-sm-2 control-label'>COSTUMER : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='c2' autofocus required autocomplete="off">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>REASON CHANGE :</label>
                    <div class='col-sm-10'>
                      <input type='text' class='form-control' name='d1' autofocus required autocomplete="off">
                    </div>
                    <!-- <label class='col-sm-2 control-label'>REASON CHANGE :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='d2' autofocus required autocomplete="off">
                    </div> -->
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>CHANGE REQUEST PIC :</label>
                    <div class='col-sm-10'>
                      <input type='text' class='form-control' name='e1' autofocus required autocomplete="off">
                    </div>
                    <!-- <label class='col-sm-2 control-label'>CHANGE REQUEST PIC :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='e2' autofocus required autocomplete="off">
                    </div> -->
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>MATERIAL RM CODE : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='f1' id="f1">
                    </div>
                    <label class='col-sm-2 control-label'>MATERIAL RM CODE : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='f2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>RM STOCK : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='g1'>
                    </div>
                    <label class='col-sm-2 control-label'>RM STOCK : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='g2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>RM STOCK JUDGEMENT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='h1'>
                    </div>
                    <label class='col-sm-2 control-label'>RM STOCK JUDGEMENT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='h2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>RM WEIGHT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='i1' id="i1">
                    </div>
                    <label class='col-sm-2 control-label'>RM WEIGHT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='i2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label' style="font-size: 13px;">RM Weight Consumption : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='j1'>
                    </div>
                    <label class='col-sm-2 control-label' style="font-size: 13px;">RM Weight Consumption : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='j2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>RM USE Kg/M : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='k1'>
                    </div>
                    <label class='col-sm-2 control-label'>RM USE Kg/M : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='k2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 1 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l1' id="l1">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 1 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 2 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l3' id="l3">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 2 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l4'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 3 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l5' id="l5">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 3 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l6'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 4 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l7' id="l7">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 4 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l8'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 5 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l9' id="l9">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 5 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l10'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 6 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l11' id="l11">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 6 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l12'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 7 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l13' id="l13">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 7 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l14'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 8 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l15' id="l15">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 8 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l16'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 9 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l17' id="l17">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 9 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l18'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 10 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l19' id="l19">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 10 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l20'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 11 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l21' id="l21">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 11 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l22'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 12 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l23' id="l23">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 12 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l24'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 13 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l25' id="l25">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 13 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l26'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 14 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l27' id="l27">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 14 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l28'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 15 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l29' id="l29">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 15 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l30'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROCESS 16 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l31' id="l31">
                    </div>
                    <label class='col-sm-2 control-label'>PROCESS 16 : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l32'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Currency :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='cry1' id="cry1">
                    </div>
                    <label class='col-sm-2 control-label'>Currency :</label>
                    <div class='col-sm-4'>
                      <select name='cry2' class='form-control'>
                        <option value=""> </option>
                        <?php
                        //$conn = new mysqli($servername, $username, $password, $dbname);
                        $sql = "SELECT * FROM currency ORDER BY id ASC";
                        $result = $koneksi->query($sql);

                        while ($row = mysqli_fetch_assoc($result)) { ?>

                          <option value="<?php echo $row['mata_uang']; ?>" <?php if ($id == $row['id']) echo 'selected'; ?>>
                            <?php
                            echo $row['mata_uang'];

                            ?>
                          </option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>

                    <!-- <label class='col-sm-2 control-label'>U MIS Proses1 : </label>
                  <div class='col-sm-4'>
                  <input type='text' class='form-control' name='m' autofocus required autocomplete="off">
                  </div> -->
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Unit Price :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='m1' id="m1">
                      <!-- <input type="number" name='m1' id="m1" placeholder="0.00" required name="price" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                      this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
                      "> -->
                    </div>
                    <label class='col-sm-2 control-label'>Unit Price :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='m2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>REASON CHANGE PRICE : </label>
                    <div class='col-sm-10'>
                      <input type='text' class='form-control' name='n1'>
                    </div>
                    <!-- <label class='col-sm-2 control-label'>REASON CHANGE PRICE : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='n2'>
                    </div> -->
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Part STOCK : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='o1'>
                    </div>
                    <label class='col-sm-2 control-label'>Part STOCK : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='o2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Amalgasi Stock (By Eng) : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='p1'>
                    </div>
                    <label class='col-sm-2 control-label'>Amalgasi Stock (By Eng) : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='p2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Part STOCK JUDGEMENT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='q1'>
                    </div>
                    <label class='col-sm-2 control-label'>Part STOCK JUDGEMENT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='q2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>UNIT LENGTH : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='r1' id="r1">
                    </div>
                    <label class='col-sm-2 control-label'>UNIT LENGTH : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='r2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>RM BAR/ITEM PCS : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='s1' id="s1">
                    </div>
                    <label class='col-sm-2 control-label'>RM BAR/ITEM PCS : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='s2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>STD. PACKING : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='t1' id="t1">
                    </div>
                    <label class='col-sm-2 control-label'>STD. PACKING : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='t2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PACKING : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='t3' id="t3">
                    </div>
                    <label class='col-sm-2 control-label'>PACKING : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='t4'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>C/T : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='v1' id="v1">
                    </div>
                    <label class='col-sm-2 control-label'>C/T : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='v2'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>WEIGHT PART : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='w1' id="w1">
                    </div>
                    <label class='col-sm-2 control-label'>WEIGHT PART : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='w2'>
                    </div>
                  </div>
                </div>
                <br>
                <div style="border: 2px solid black;">
                  <br>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label' style=" left: 40%; font-size: 18px; border: 2px solid black; text-align: center; vertical-align: middle;">DATE CUT OFF</label>
                  </div>
                  <br>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Prod (By Eng) : </label>
                    <div class='col-sm-4'>
                      <input type='date' class='form-control' name='x1'>
                    </div>
                    <label class='col-sm-2 control-label'>Sales (By Mkt) : </label>
                    <div class='col-sm-4'>
                      <input type='date' class='form-control' name='x2'>
                    </div>
                  </div>
                </div>


                <div class='box-footer'>
                  <label class='col-sm-2 control-label'></label>
                  <div class='col-sm-10'>
                    <button style='width: 150px;' type="submit" class="btn btn-flat btn-primary" onclick="return confirm('Apa anda yakin data sudah benar?')"><i class="glyphicon glyphicon-floppy-save"></i> S I M P A N</button>
                    <a style='width: 150px;' href="home" type="button" class="btn btn-flat btn-danger"><i class="glyphicon glyphicon-floppy-remove"></i> B A T A L</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <style>
          label {
            border: 1 px solid #ccc;
          }
        </style>
    </section>
    <!-- /.content -->
  </div>
  <!-- End content -->
  <script>
    function updateTime() {
      var now = new Date();
      var year = now.getFullYear();
      var month = ('0' + (now.getMonth() + 1)).slice(-2);
      var day = ('0' + now.getDate()).slice(-2);
      var hours = ('0' + now.getHours()).slice(-2);
      var minutes = ('0' + now.getMinutes()).slice(-2);
      var seconds = ('0' + now.getSeconds()).slice(-2);
      var dateTime = year + '-' + month + '-' + day + 'T' + hours + ':' + minutes + ':' + seconds;
      document.getElementById('ec').value = dateTime;
    }

    setInterval(updateTime, 1000); // Memperbarui setiap detik
  </script>
  <script>
    $(document).ready(function() {
      $('.select2').select2();

      // Merekam perubahan pada dropdown
      $("#select2").on("change", function() {
        var itemCode = $(this).val();

        // Mengambil data dari server berdasarkan Item Code
        $.ajax({
          type: "GET",
          url: "aksi/get_data.php",
          data: {
            itemCode: itemCode
          },
          dataType: "json",
          success: function(response) {
            // Mengisi nilai pada input field "Item Name" dan "Price"
            $("#b1").val(response.ItemName);
            $("#c1").val(response.U_MIS_CustName);
            $("#f1").val(response.U_MIS_RawMat);
            $("#i1").val(parseFloat(response.U_MIS_ItemWeight).toFixed(3));
            $("#l1").val(response.U_MIS_Proses1);
            $("#l3").val(response.U_MIS_Proses2);
            $("#l5").val(response.U_MIS_Proses3);
            $("#l7").val(response.U_MIS_Proses4);
            $("#l9").val(response.U_MIS_Proses5);
            $("#l11").val(response.U_MIS_Proses6);
            $("#l13").val(response.U_MIS_Proses7);
            $("#l15").val(response.U_MIS_Proses8);
            $("#l17").val(response.U_MIS_Proses9);
            $("#l19").val(response.U_MIS_Proses10);
            $("#l21").val(response.U_MIS_Proses11);
            $("#l23").val(response.U_U_MIS_Proses12);
            $("#cry1").val(response.Currency);
            $("#m1").val(parseFloat(response.Price).toFixed(3));
            $("#t1").val(parseFloat(response.U_MIS_StdPacking).toFixed(3));
            $("#t3").val(response.U_MIS_Packing);
            $("#r1").val(parseFloat(response.SLength1).toFixed(3));
            $("#s1").val(response.U_MIS_PiecePerBar);
            $("#v1").val(response.U_MIS_CycleTime);
            $("#w1").val(parseFloat(response.SWeight1).toFixed(3));
          }
        });
      });
    });
  </script>
  <?php include "footer.php"; ?>