<?php include "../assets/config/koneksi.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <title>DATA NEW ITEMS MASTER</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <style type="text/css">
    body {
      font-family: sans-serif;
    }

    table {
      margin: 20px auto;
      border-collapse: collapse;
    }

    table th,
    table td {
      border: 1px solid #3c3c3c;
      padding: 3px 8px;

    }

    a {
      background: blue;
      color: #fff;
      padding: 8px 10px;
      text-decoration: none;
      border-radius: 2px;
    }
  </style>

  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data New Item Master.xls");
  ?>

  <center>
    <h1 style="font-family: Helvetica; font: bold;">DATA <br /> NEW ITEMS MASTER</h1>
  </center>
  <div class="box-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-hover" style="font-family: Helvetica;">
        <thead class="bg-blue" style="font-family: Helvetica; font: bold;">
          <tr>
            <th>
              <Center>No.</Center>
            </th>
            <th>Nama</th>
            <th>Departement</th>
            <th>Date</th>
            <th>Status</th>
            <th>Customer</th>
            <th>Model</th>
            <th>ItemCode</th>
            <th>ItemName</th>
            <th>ForeignName</th>
            <th>ItemsGroupCode</th>
            <th>SalesVATGroup</th>
            <th>VatLiable</th>
            <th>PurchaseItem</th>
            <th>SalesItem</th>
            <th>InventoryItem</th>
            <th>SalesUnit</th>
            <th>SalesUnitLength</th>
            <th>SalesUnitWeight</th>
            <th>PurchaseVatGroup</th>
            <th>DefaultWarehouse</th>
            <th>GLMethod</th>
            <th>ManageStockByWarehouse</th>
            <th>WTLiable</th>
            <th>IssueMethod</th>
            <th>InventoryUOM</th>
            <th>PlanningSystem</th>
            <th>ProcurementMethod</th>
            <th>ComponentWarehouse</th>
            <th>InCosRollup</th>
            <th>ItemPcs</th>
            <th>UnitPrice</th>
            <th>RMWeightConsume</th>
            <th>U_MIS_CustCode</th>
            <th>U_MIS_CustName</th>
            <th>U_MIS_JenisItem</th>
            <th>U_MIS_Diameter</th>
            <th>U_MIS_Length</th>
            <th>U_MIS_Spec</th>
            <th>U_MIS_StdPacking</th>
            <th>U_MIS_NextProses</th>
            <th>U_MIS_Packing</th>
            <th>U_MIS_Proses</th>
            <th>U_MIS_Proses1</th>
            <th>U_MIS_Proses2</th>
            <th>U_MIS_Proses3</th>
            <th>U_MIS_Proses4</th>
            <th>U_MIS_Proses5</th>
            <th>U_MIS_Proses6</th>
            <th>U_MIS_Proses7</th>
            <th>U_MIS_Proses8</th>
            <th>U_MIS_Proses9</th>
            <th>U_MIS_Proses10</th>
            <th>U_MIS_Proses11</th>
            <th>U_MIS_Proses12</th>
            <th>U_MIS_Proses13</th>
            <th>U_MIS_Proses14</th>
            <th>U_MIS_Proses15</th>
            <th>U_MIS_Proses16</th>
            <th>U_MIS_Subcont</th>
            <th>U_MIS_ROHSFree</th>
            <th>U_MIS_CycleTime</th>
            <th>U_MIS_RawMat</th>
            <th>U_MIS_BackNo</th>
            <th>Tgl Input Eng</th>
            <th>Tgl Input QC</th>
            <th>Tgl Input GM</th>
            <th>Tgl Input PPIC</th>
            <th>Tgl Input IT</th>
            <th>Catatan Engineering</th>
            <th>Catatan QC</th>
            <th>Catatan GM MKT</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $tampil = mysqli_query($koneksi, "SELECT * FROM newitem WHERE rawmatppic ='' ORDER BY id DESC");
          $no = 1;
          while ($rr = mysqli_fetch_array($tampil)) {
          ?>
            <tr>
              <td>
                <center><?php echo "$no."; ?></center>
              </td>
              <td><?php echo $rr["pic_mkt"]; ?></td>
              <td><?php echo $rr["mkt"]; ?></td>
              <td><?php echo $rr["tglinputmkt"]; ?></td>
              <td><?php echo $rr["keputusan"]; ?></td>
              <td><?php echo $rr["U_MIS_CustName"]; ?></td>
              <td><?php echo $rr["model"]; ?></td>
              <td><?php echo $rr["ItemCode"]; ?></td>
              <td><?php echo $rr["ItemName"]; ?></td>
              <td><?php echo $rr["ForeignName"]; ?></td>
              <td><?php echo $rr["ItemsGroupCode"]; ?></td>
              <td><?php echo $rr["SalesVATGroup"]; ?></td>
              <td><?php echo $rr["VatLiable"]; ?></td>
              <td><?php echo $rr["PurchaseItem"]; ?></td>
              <td><?php echo $rr["SalesItem"]; ?></td>
              <td><?php echo $rr["InventoryItem"]; ?></td>
              <td><?php echo $rr["SalesUnit"]; ?></td>
              <td><?php echo $rr["SalesUnitLength"]; ?></td>
              <td><?php echo $rr["SalesUnitWeight"]; ?> Kg</td>
              <td><?php echo $rr["PurchaseVatGroup"]; ?></td>
              <td><?php echo $rr["DefaultWarehouse"]; ?></td>
              <td><?php echo $rr["GLMethod"]; ?></td>
              <td><?php echo $rr["ManageStockByWarehouse"]; ?></td>
              <td><?php echo $rr["WTLiable"]; ?></td>
              <td><?php echo $rr["IssueMethod"]; ?></td>
              <td><?php echo $rr["InventoryUOM"]; ?></td>
              <td><?php echo $rr["PlanningSystem"]; ?></td>
              <td><?php echo $rr["ProcurementMethod"]; ?></td>
              <td><?php echo $rr["ComponentWarehouse"]; ?></td>
              <td><?php echo $rr["InCosRollup"]; ?></td>
              <td><?php echo $rr["ItemPcs"]; ?></td>
              <td><?php echo $rr["currency"]; ?> <?php echo $rr["UnitPrice"]; ?></td>
              <td><?php echo $rr["RMWeightConsume"]; ?> Kg/pcs</td>
              <td><?php echo $rr["U_MIS_CustCode"]; ?></td>
              <td><?php echo $rr["U_MIS_CustName"]; ?></td>
              <td><?php echo $rr["U_MIS_JenisItem"]; ?></td>
              <td><?php echo $rr["U_MIS_Diameter"]; ?></td>
              <td><?php echo $rr["U_MIS_Length"]; ?></td>
              <td><?php echo $rr["U_MIS_Spec"]; ?></td>
              <td><?php echo $rr["U_MIS_StdPacking"]; ?> pcs</td>
              <td><?php echo $rr["U_MIS_NextProses"]; ?></td>
              <td><?php echo $rr["U_MIS_Packing"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses1"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses2"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses3"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses4"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses5"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses6"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses7"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses8"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses9"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses10"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses11"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses12"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses13"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses14"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses15"]; ?></td>
              <td><?php echo $rr["U_MIS_Proses16"]; ?></td>
              <td><?php echo $rr["U_MIS_Subcont"]; ?></td>
              <td><?php echo $rr["U_MIS_ROHSFree"]; ?></td>
              <td><?php echo $rr["U_MIS_CycleTime"]; ?></td>
              <td><?php echo $rr["U_MIS_RawMat"]; ?></td>
              <td><?php echo $rr["U_MIS_BackNo"]; ?></td>
              <td><?php echo $rr["tglinputeng"]; ?></td>
              <td><?php echo $rr["tglinputqc"]; ?></td>
              <td><?php echo $rr["tglinputgm"]; ?></td>
              <td><?php echo $rr["tglinputppic"]; ?></td>
              <td><?php echo $rr["tglinputit"]; ?></td>
              <td><?php echo $rr["catatan_eng"]; ?></td>
              <td><?php echo $rr["catatan_qc"]; ?></td>
              <td><?php echo $rr["catatan_gm"]; ?></td>
            <?php $no++;
          } ?>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>