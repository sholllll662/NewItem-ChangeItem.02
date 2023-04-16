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
  header("Content-Disposition: attachment; filename=Data Change Item Master.xls");
  ?>

  <center>
    <h1 style="font-family: Helvetica; font: bold;">DATA <br /> CHANGE ITEMS MASTER</h1>
  </center>
  <div class="box-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-hover" style="font-family: Helvetica;">
        <thead class="bg-blue"  style="font-family: Helvetica; font: bold;">
          <tr>
            <th>
              <Center>No.</Center>
            </th>
            <th>Nama</th>
            <th>Departement</th>
            <th>Date</th>
            <th>Customer</th>
            <th>Model</th>
            <th>Prod (By Eng)</th>
            <th>Sales (By Mkt)</th>
            <th>PART NO BC</th>
            <th>PART NAME BC</th>
            <th>CUSTOMER BC</th>
            <th>REASON CHANGE BC</th>
            <th>CHANGE REQUEST PIC BC</th>
            <th>MATERIAL RM CODE BC</th>
            <th>RM STOCK BC</th>
            <th>RM STOCK JUDGEMENT BC</th>
            <th>RM WEIGHT BC</th>
            <th>RM WEIGHT CONSUMPTION BC</th>
            <th>RM USE Kg/M BC</th>
            <th>PROCESS BC</th>
            <th>CURRENCY BC</th>
            <th>UNIT PRICE BC</th>
            <th>REASON CHANGE PRICE BC</th>
            <th>Part STOCK BC</th>
            <th>Amalgamasi Stock (By Eng) BC</th>
            <th>Part STOCK JUDGEMENT BC</th>
            <th>UNIT LENGTH BC</th>
            <th>RM BAR/ITEM PCS BC</th>
            <th>STD. PACKING BC</th>
            <th>C/T BC</th>
            <th>WEIGHT PART BC</th>
            <th>PART NO AC</th>
            <th>PART NAME AC</th>
            <th>CUSTOMER AC</th>
            <th>REASON CHANGE AC</th>
            <th>CHANGE REQUEST PIC AC</th>
            <th>MATERIAL RM CODE AC</th>
            <th>RM STOCK AC</th>
            <th>RM STOCK JUDGEMENT AC</th>
            <th>RM WEIGHT AC</th>
            <th>RM WEIGHT CONSUMPTION AC</th>
            <th>RM USE Kg/M AC</th>
            <th>PROCESS AC</th>
            <th>CURRENCY AC</th>
            <th>UNIT PRICE AC</th>
            <th>REASON CHANGE PRICE AC</th>
            <th>Part STOCK AC</th>
            <th>Amalgamasi Stock (By Eng) AC</th>
            <th>Part STOCK JUDGEMENT AC</th>
            <th>UNIT LENGTH AC</th>
            <th>RM BAR/ITEM PCS AC</th>
            <th>STD. PACKING AC</th>
            <th>C/T AC</th>
            <th>WEIGHT PART AC</th>
            <th>Tgl Approve SPV Eng</th>
            <th>Tgl Approve SPV QC</th>
            <th>Tgl Approve ASMEN PPIC</th>
            <th>Tgl Approve GM</th>
            <th>Tgl Approve PPIC</th>
            <th>WEIGHT CONSUMN FROM PPIC</th>
            <th>RAWMAT FROM PPIC</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $tampil = mysqli_query($koneksi, "SELECT a.part_no as part_nobc, a.part_name as part_namebc, a.customer as customerbc, a.reason as reasonbc, a.pic as picbc, a.material_rmcode as material_rmcodebc, a.rm_stock as rm_stockbc, a.rm_stockJ as rm_stockJbc, a.rm_weight as rm_weightbc, a.weight_consum as weight_consumbc, a.rm_use as rm_usebc, a.proces1 as proces1bc, a.proces2 as proces2bc, a.proces3 as proces3bc, a.proces4 as proces4bc, a.proces5 as proces5bc, a.proces6 as proces6bc, a.proces7 as proces7bc, a.proces8 as proces8bc, a.proces9 as proces9bc, a.proces10 as proces10bc, a.proces11 as proces11bc, a.proces12 as proces12bc, a.proces13 as proces13bc, a.proces14 as proces14bc, a.proces15 as proces15bc, a.proces16 as proces16bc, a.currency as currencybc, a.unit_price as unit_pricebc, a.reason_price as reason_pricebc, a.part_stock as part_stockbc, a.amalgamasi as amalgamasibc, a.part_stockJ as part_stockJbc, a.unit_length as unit_lengthbc, a.item_pcs as item_pcsbc, a.std_packing as std_packingbc, a.ct as ctbc, a.weight_part as weight_partbc, a.weightconsumn as weightconsumnac, a.rawmatppic as rawmatppicac, a.dept as deptbc, a.model as modelbc, a.id_level as id_levelbc, a.lampiran as lampiranbc, a.keputusan as keputusanbc, a.tglmkt as tglmktbc, a.tgleng as tglengbc, a.tglppic2 as tglppic2bc, a.tglspveng as tglspvengbc, a.tglqc as tglqcbc, a.tglppic as tglppicbc, a.tglgm as tglgmbc, a.tglppic3 as tglppic3ac, a.cutoffprod as cutoffprodbc, a.cutoffsales as cutoffsalesbc, c.part_no as part_noac, c.part_name as part_nameac, c.customer as customerac, c.reason as reasonac, c.pic as picac, c.material_rmcode as material_rmcodeac, c.rm_stock as rm_stockac, c.rm_stockJ as rm_stockJac, c.rm_weight as rm_weightac, c.weight_consum as weight_consumac, c.rm_use as rm_useac, c.proces1 as proces1ac, c.proces2 as proces2ac, c.proces3 as proces3ac, c.proces4 as proces4ac, c.proces5 as proces5ac, c.proces6 as proces6ac, c.proces7 as proces7ac, c.proces8 as proces8ac, c.proces9 as proces9ac, c.proces10 as proces10ac, c.proces11 as proces11ac, c.proces12 as proces12ac, c.proces13 as proces13ac, c.proces14 as proces14ac, c.proces15 as proces15ac, c.proces16 as proces16ac, c.currency as currencyac, c.unit_price as unit_priceac, c.reason_price as reason_priceac, c.part_stock as part_stockac, c.amalgamasi as amalgamasiac, c.part_stockJ as part_stockJac, c.unit_length as unit_lengthac, c.item_pcs as item_pcsac, c.std_packing as std_packingac, c.ct as ctac, c.weight_part as weight_partac, c.dept as deptac, c.model as modelac, c.id_level as id_levelac, c.lampiran as lampiranac, c.keputusan as keputusanac, c.tglmkt as tglmktac, c.tgleng as tglengac, c.tglppic2 as tglppic2ac, c.tglspveng as tglspvengac, c.tglqc as tglqcac, c.tglppic as tglppicac, c.tglgm as tglgmac, c.cutoffprod as cutoffprodac, c.cutoffsales as cutoffsalesac FROM itembc a INNER JOIN itemac c ON a.id = c.id WHERE c.keputusan IN ('Approved by GM HRD IT') AND c.id_level IN ('1') ORDER BY c.id DESC");
          $no = 1;
          while ($rr = mysqli_fetch_array($tampil)) {
          ?>
            <tr>
              <td>
                <center><?php echo "$no."; ?></center>
              </td>
              <td><?php echo $rr["picbc"]; ?></td>
              <td><?php echo $rr["deptbc"]; ?></td>
              <td><?php
                        $dept = $rr["deptbc"];
                        if ($dept == 'Engineering') {
                          echo "$rr[tglengbc]";
                        } elseif ($dept == 'Marketing') {
                          echo "$rr[tglmktbc]";
                        } elseif ($dept == 'PPIC') {
                          echo "$rr[tglppic2bc]";
                        }
                        ?></td>
              <td><?php echo $rr["customerbc"]; ?></td>
              <td><?php echo $rr["modelbc"]; ?></td>
              <td><?php echo $rr["cutoffprodac"]; ?></td>
              <td><?php echo $rr["cutoffsalesac"]; ?></td>
              <td><?php echo $rr["part_nobc"]; ?></td>
              <td><?php echo $rr["part_namebc"]; ?></td>
              <td><?php echo $rr["customerbc"]; ?></td>
              <td><?php echo $rr["reasonbc"]; ?></td>
              <td><?php echo $rr["picbc"]; ?></td>
              <td><?php echo $rr["material_rmcodebc"]; ?></td>
              <td><?php echo $rr["rm_stockbc"]; ?></td>
              <td><?php echo $rr["rm_stockJbc"]; ?></td>
              <td><?php echo $rr["rm_weightbc"]; ?></td>
              <td><?php echo $rr["weight_consumbc"]; ?></td>
              <td><?php echo $rr["rm_usebc"]; ?></td>
              <td><?php
                        $proses1bc = $rr['proces1bc'];
                        $proses2bc = $rr['proces2bc'];
                        $proses3bc = $rr['proces3bc'];
                        $proses4bc = $rr['proces4bc'];
                        $proses5bc = $rr['proces5bc'];
                        $proses6bc = $rr['proces6bc'];
                        $proses7bc = $rr['proces7bc'];
                        $proses8bc = $rr['proces8bc'];
                        $proses9bc = $rr['proces9bc'];
                        $proses10bc = $rr['proces10bc'];
                        $proses11bc = $rr['proces11bc'];
                        $proses12bc = $rr['proces12bc'];
                        $proses13bc = $rr['proces13bc'];
                        $proses14bc = $rr['proces14bc'];
                        $proses15bc = $rr['proces15bc'];
                        $proses16bc = $rr['proces16bc'];
                        if ($proses16bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc] ==> $rr[proces7bc] ==> $rr[proces8bc] ==> $rr[proces9bc] ==> $rr[proces10bc] ==> $rr[proces11bc] ==> $rr[proces12bc] ==> $rr[proces13bc] ==> $rr[proces14bc] ==> $rr[proces15bc] ==> $rr[proces16bc]";
                        } elseif ($proses15bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc] ==> $rr[proces7bc] ==> $rr[proces8bc] ==> $rr[proces9bc] ==> $rr[proces10bc] ==> $rr[proces11bc] ==> $rr[proces12bc] ==> $rr[proces13bc] ==> $rr[proces14bc] ==> $rr[proces15bc]";
                        } elseif ($proses14bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc] ==> $rr[proces7bc] ==> $rr[proces8bc] ==> $rr[proces9bc] ==> $rr[proces10bc] ==> $rr[proces11bc] ==> $rr[proces12bc] ==> $rr[proces13bc] ==> $rr[proces14bc]";
                        } elseif ($proses13bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc] ==> $rr[proces7bc] ==> $rr[proces8bc] ==> $rr[proces9bc] ==> $rr[proces10bc] ==> $rr[proces11bc] ==> $rr[proces12bc] ==> $rr[proces13bc]";
                        } elseif ($proses12bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc] ==> $rr[proces7bc] ==> $rr[proces8bc] ==> $rr[proces9bc] ==> $rr[proces10bc] ==> $rr[proces11bc] ==> $rr[proces12bc]";
                        } elseif ($proses11bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc] ==> $rr[proces7bc] ==> $rr[proces8bc] ==> $rr[proces9bc] ==> $rr[proces10bc] ==> $rr[proces11bc]";
                        } elseif ($proses10bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc] ==> $rr[proces7bc] ==> $rr[proces8bc] ==> $rr[proces9bc] ==> $rr[proces10bc]";
                        } elseif ($proses9bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc] ==> $rr[proces7bc] ==> $rr[proces8bc] ==> $rr[proces9bc]";
                        } elseif ($proses8bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc] ==> $rr[proces7bc] ==> $rr[proces8bc]";
                        } elseif ($proses7bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc] ==> $rr[proces7bc]";
                        } elseif ($proses6bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc] ==> $rr[proces6bc]";
                        } elseif ($proses5bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc] ==> $rr[proces5bc]";
                        } elseif ($proses4bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc] ==> $rr[proces4bc]";
                        } elseif ($proses3bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc] ==> $rr[proces3bc]";
                        } elseif ($proses2bc !== '') {
                          echo "$rr[proces1bc] ==> $rr[proces2bc]";
                        } elseif ($proses1bc !== '') {
                          echo "$rr[proces1bc]";
                        } else {
                          echo "-";
                        }
                        ?></td>
              <td><?php echo $rr["currencybc"]; ?></td>
              <td><?php echo $rr["unit_pricebc"]; ?></td>
              <td><?php echo $rr["reason_pricebc"]; ?></td>
              <td><?php echo $rr["part_stockbc"]; ?></td>
              <td><?php echo $rr["amalgamasibc"]; ?></td>
              <td><?php echo $rr["part_stockJbc"]; ?></td>
              <td><?php echo $rr["unit_lengthbc"]; ?></td>
              <td><?php echo $rr["item_pcsbc"]; ?></td>
              <td><?php echo $rr["std_packingbc"]; ?></td>
              <td><?php echo $rr["ctbc"]; ?></td>
              <td><?php echo $rr["weight_partbc"]; ?></td>
              <td><?php echo $rr["part_noac"]; ?></td>
              <td><?php echo $rr["part_nameac"]; ?></td>
              <td><?php echo $rr["customerac"]; ?></td>
              <td><?php echo $rr["reasonac"]; ?></td>
              <td><?php echo $rr["picac"]; ?></td>
              <td><?php echo $rr["material_rmcodeac"]; ?></td>
              <td><?php echo $rr["rm_stockac"]; ?></td>
              <td><?php echo $rr["rm_stockJac"]; ?></td>
              <td><?php echo $rr["rm_weightac"]; ?></td>
              <td><?php echo $rr["weight_consumac"]; ?></td>
              <td><?php echo $rr["rm_useac"]; ?></td>
              <td><?php
                        $proses1ac = $rr['proces1ac'];
                        $proses2ac = $rr['proces2ac'];
                        $proses3ac = $rr['proces3ac'];
                        $proses4ac = $rr['proces4ac'];
                        $proses5ac = $rr['proces5ac'];
                        $proses6ac = $rr['proces6ac'];
                        $proses7ac = $rr['proces7ac'];
                        $proses8ac = $rr['proces8ac'];
                        $proses9ac = $rr['proces9ac'];
                        $proses10ac = $rr['proces10ac'];
                        $proses11ac = $rr['proces11ac'];
                        $proses12ac = $rr['proces12ac'];
                        $proses13ac = $rr['proces13ac'];
                        $proses14ac = $rr['proces14ac'];
                        $proses15ac = $rr['proces15ac'];
                        $proses16ac = $rr['proces16ac'];
                        if ($proses16ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac] ==> $rr[proces7ac] ==> $rr[proces8ac] ==> $rr[proces9ac] ==> $rr[proces10ac] ==> $rr[proces11ac] ==> $rr[proces12ac] ==> $rr[proces13ac] ==> $rr[proces14ac] ==> $rr[proces15ac] ==> $rr[proces16ac]";
                        } elseif ($proses15ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac] ==> $rr[proces7ac] ==> $rr[proces8ac] ==> $rr[proces9ac] ==> $rr[proces10ac] ==> $rr[proces11ac] ==> $rr[proces12ac] ==> $rr[proces13ac] ==> $rr[proces14ac] ==> $rr[proces15ac]";
                        } elseif ($proses14ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac] ==> $rr[proces7ac] ==> $rr[proces8ac] ==> $rr[proces9ac] ==> $rr[proces10ac] ==> $rr[proces11ac] ==> $rr[proces12ac] ==> $rr[proces13ac] ==> $rr[proces14ac]";
                        } elseif ($proses13ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac] ==> $rr[proces7ac] ==> $rr[proces8ac] ==> $rr[proces9ac] ==> $rr[proces10ac] ==> $rr[proces11ac] ==> $rr[proces12ac] ==> $rr[proces13ac]";
                        } elseif ($proses12ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac] ==> $rr[proces7ac] ==> $rr[proces8ac] ==> $rr[proces9ac] ==> $rr[proces10ac] ==> $rr[proces11ac] ==> $rr[proces12ac]";
                        } elseif ($proses11ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac] ==> $rr[proces7ac] ==> $rr[proces8ac] ==> $rr[proces9ac] ==> $rr[proces10ac] ==> $rr[proces11ac]";
                        } elseif ($proses10ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac] ==> $rr[proces7ac] ==> $rr[proces8ac] ==> $rr[proces9ac] ==> $rr[proces10ac]";
                        } elseif ($proses9ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac] ==> $rr[proces7ac] ==> $rr[proces8ac] ==> $rr[proces9ac]";
                        } elseif ($proses8ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac] ==> $rr[proces7ac] ==> $rr[proces8ac]";
                        } elseif ($proses7ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac] ==> $rr[proces7ac]";
                        } elseif ($proses6ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac] ==> $rr[proces6ac]";
                        } elseif ($proses5ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac] ==> $rr[proces5ac]";
                        } elseif ($proses4ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac] ==> $rr[proces4ac]";
                        } elseif ($proses3ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac] ==> $rr[proces3ac]";
                        } elseif ($proses2ac !== '') {
                          echo "$rr[proces1ac] ==> $rr[proces2ac]";
                        } elseif ($proses1ac !== '') {
                          echo "$rr[proces1ac]";
                        } else {
                          echo "-";
                        }
                        ?></td>
              <td><?php echo $rr["currencyac"]; ?></td>         
              <td><?php echo $rr["unit_priceac"]; ?></td>
              <td><?php echo $rr["reason_priceac"]; ?></td>
              <td><?php echo $rr["part_stockac"]; ?></td>
              <td><?php echo $rr["amalgamasiac"]; ?></td>
              <td><?php echo $rr["part_stockJac"]; ?></td>
              <td><?php echo $rr["unit_lengthac"]; ?></td>
              <td><?php echo $rr["item_pcsac"]; ?></td>
              <td><?php echo $rr["std_packingac"]; ?></td>
              <td><?php echo $rr["ctac"]; ?></td>
              <td><?php echo $rr["weight_partac"]; ?></td>
              <td><?php echo $rr["tglspvengac"]; ?></td>
              <td><?php echo $rr["tglqcac"]; ?></td>
              <td><?php echo $rr["tglppicac"]; ?></td>
              <td><?php echo $rr["tglgmac"]; ?></td>
              <td><?php echo $rr["tglppic3ac"]; ?></td>
              <td><?php echo $rr["weightconsumnac"]; ?></td>
              <td><?php echo $rr["rawmatppicac"]; ?></td>
              <?php $no++;
          } ?>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>