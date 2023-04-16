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
        <li class='active'>Change Item</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class='content'>
      <div class='row'>
        <div class='col-md-12'>
          <div class='box box-success'>
            <div class='box-header with-border'>
              <h3 class='box-title'><i class='glyphicon glyphicon-edit'></i> FORM UBAH DATA</h3>
            </div>
            <form class='form-horizontal' role='form' method=POST action='aksi/user_update.php' enctype='multipart/form-data'>
              <div class='box-body'>
                <?php
                $rr = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.part_no as part_nobc, a.part_name as part_namebc, a.customer as customerbc, a.reason as reasonbc, a.pic as picbc, a.material_rmcode as material_rmcodebc, a.rm_stock as rm_stockbc, a.rm_stockJ as rm_stockJbc, a.rm_weight as rm_weightbc, a.weight_consum as weight_consumbc, a.rm_use as rm_usebc, a.proces1 as proces1bc, a.proces2 as proces2bc, a.proces3 as proces3bc, a.proces4 as proces4bc, a.proces5 as proces5bc, a.proces6 as proces6bc, a.proces7 as proces7bc, a.proces8 as proces8bc, a.proces9 as proces9bc, a.proces10 as proces10bc, a.proces11 as proces11bc, a.proces12 as proces12bc, a.proces13 as proces13bc, a.proces14 as proces14bc, a.proces15 as proces15bc, a.proces16 as proces16bc, a.currency as currencybc, a.unit_price as unit_pricebc, a.reason_price as reason_pricebc, a.part_stock as part_stockbc, a.amalgamasi as amalgamasibc, a.part_stockJ as part_stockJbc, a.unit_length as unit_lengthbc, a.item_pcs as item_pcsbc, a.std_packing as std_packingbc, a.packing as packingbc, a.ct as ctbc, a.weight_part as weight_partbc, a.dept as deptbc, a.model as modelbc, a.id_level as id_levelbc, a.lampiran as lampiranbc, a.keputusan as keputusanbc, a.tglmkt as tglmktbc, a.tgleng as tglengbc, a.tglppic2 as tglppic2bc, a.tglppic3 as tglppic3bc, a.tglspveng as tglspvengbc, a.tglqc as tglqcbc, a.tglppic as tglppicbc, a.tglgm as tglgmbc, a.cutoffprod as cutoffprodbc, a.cutoffsales as cutoffsalesbc, c.part_no as part_noac, c.part_name as part_nameac, c.customer as customerac, c.reason as reasonac, c.pic as picac, c.material_rmcode as material_rmcodeac, c.rm_stock as rm_stockac, c.rm_stockJ as rm_stockJac, c.rm_weight as rm_weightac, c.weight_consum as weight_consumac, c.rm_use as rm_useac, c.proces1 as proces1ac, c.proces2 as proces2ac, c.proces3 as proces3ac, c.proces4 as proces4ac, c.proces5 as proces5ac, c.proces6 as proces6ac, c.proces7 as proces7ac, c.proces8 as proces8ac, c.proces9 as proces9ac, c.proces10 as proces10ac, c.proces11 as proces11ac, c.proces12 as proces12ac, c.proces13 as proces13ac, c.proces14 as proces14ac, c.proces15 as proces15ac, c.proces16 as proces16ac, c.currency as currencyac, c.unit_price as unit_priceac, c.reason_price as reason_priceac, c.part_stock as part_stockac, c.amalgamasi as amalgamasiac, c.part_stockJ as part_stockJac, c.unit_length as unit_lengthac, c.item_pcs as item_pcsac, c.std_packing as std_packingac, c.packing as packingac, c.ct as ctac, c.weight_part as weight_partac, c.dept as deptac, c.model as modelac, c.id_level as id_levelac, c.lampiran as lampiranac, c.keputusan as keputusanac, c.tglmkt as tglmktac, c.tgleng as tglengac, c.tglppic2 as tglppic2ac, c.tglppic3 as tglppic3ac, c.tglspveng as tglspvengac, c.tglqc as tglqcac, c.tglppic as tglppicac, c.tglgm as tglgmac, c.cutoffprod as cutoffprodac, c.cutoffsales as cutoffsalesac FROM itembc a INNER JOIN itemac c ON a.id = c.id WHERE c.id='$_GET[id]'"));
                $rr1 = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM itemac WHERE id='$_GET[id]'"));
                $rr2 = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM itembc WHERE id='$_GET[id]'"));
                ?>
                <input class='form-control' name='id' value="<?php echo $_GET['id']; ?>" type="hidden">
                <div style="border: 2px solid black;">
                  <br>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Nama PIC :</label>
                    <div class='col-sm-4'>
                      <input type='text' name='ea' class='form-control' value="<?php echo $rr['picbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>Departement :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='eb' value="<?php echo $rr['deptbc']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Tanggal Input :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='ec' value="<?php
                                                                                $dept = $rr['deptbc'];
                                                                                if ($dept == 'Engineering') {
                                                                                  echo date("$rr[tglengbc]");
                                                                                } elseif ($dept == 'Marketing') {
                                                                                  echo "$rr[tglmktbc]";
                                                                                } elseif ($dept == 'PPIC') {
                                                                                  echo "$rr[tglppic2bc]";
                                                                                }
                                                                                ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>Model : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='ed' value="<?php echo $rr['modelbc']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>STATUS :</label>
                    <div class='col-sm-4'>
                      <select name='ae' class='form-control' required autocomplete="off" readonly>
                        <option value='' selected></option>
                        <option value='Approved By SPV Eng'>Approve</option>
                        <option value='Disapproved By SPV Eng'>Disapprove</option>
                      </select>
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
                      <input type='text' class='form-control' name='a1' value="<?php echo $rr['part_nobc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>PART NO :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='a2' value="<?php echo $rr['part_noac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PART NAME : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='b1' value="<?php echo $rr['part_namebc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>PART NAME : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='b2' value="<?php echo $rr['part_nameac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>COSTUMER :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='c1' value="<?php echo $rr['customerbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>COSTUMER :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='c2' value="<?php echo $rr['customerac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>REASON CHANGE :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='d1' value="<?php echo $rr['reasonbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>REASON CHANGE :</label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='d2' value="<?php echo $rr['reasonac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>CHANGE REQUEST PIC : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='e1' value="<?php echo $rr['picbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>CHANGE REQUEST PIC : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='e2' value="<?php echo $rr['picac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>MATERIAL RM CODE : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='f1' value="<?php echo $rr['material_rmcodebc']; ?>">
                    </div>
                    <label class='col-sm-2 control-label'>MATERIAL RM CODE : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='f2' value="<?php echo $rr['material_rmcodeac']; ?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>RM STOCK : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='g1' value="<?php echo $rr['rm_stockac']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>RM STOCK : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='g2' value="<?php echo $rr['rm_stockbc']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>RM STOCK JUDGEMENT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='h1' value="<?php echo $rr['rm_stockJac']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>RM STOCK JUDGEMENT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='h2' value="<?php echo $rr['rm_stockJbc']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>RM WEIGHT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='i1' value="<?php echo $rr['rm_weightac']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>RM WEIGHT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='i2' value="<?php echo $rr['rm_weightbc']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label' style="font-size: 13px;">RM Weight Consumption : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='j1' value="<?php echo $rr['weight_consumbc']; ?>">
                    </div>
                    <label class='col-sm-2 control-label' style="font-size: 13px;">RM Weight Consumption : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='j2' value="<?php echo $rr['weight_consumac']; ?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>RM USE Kg/M : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='k1' value="<?php echo $rr['rm_useac']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>RM USE Kg/M : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='k2' value="<?php echo $rr['rm_usebc']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PROSES : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l1' value="<?php
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
                                                                                ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>PROSES : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='l2' value="<?php
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
                                                                                ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>CURRENCY : </label>
                    <div class='col-sm-1'>
                      <input type='text' class='form-control' name='m1' value="<?php echo $rr['currencybc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label' style="margin-left: -7cqmax;">UNIT PRICE : </label>
                    <div class='col-sm-2'>
                      <input type='text' class='form-control' style="margin-left: -1cqmax;" name='m1' value="<?php echo $rr['unit_pricebc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>CURRENCY : </label>
                    <div class='col-sm-1'>
                      <input type='text' class='form-control' name='m1' value="<?php echo $rr['currencyac']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label' style="margin-left: -7cqmax;">UNIT PRICE : </label>
                    <div class='col-sm-2'>
                      <input type='text' class='form-control' style="margin-left: -1cqmax;" name='m2' value="<?php echo $rr['unit_priceac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>REASON CHANGE PRICE : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='n1' value="<?php echo $rr['reason_pricebc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>REASON CHANGE PRICE : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='n2' value="<?php echo $rr['reason_priceac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Part STOCK : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='o1' value="<?php echo $rr['part_stockbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>Part STOCK : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='o2' value="<?php echo $rr['part_stockac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Amalgamasi Stock (By Eng) : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='p1' value="<?php echo $rr['amalgamasibc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>Amalgamasi Stock (By Eng) : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='p2' value="<?php echo $rr['amalgamasiac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>Part STOCK JUDGEMENT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='q1' value="<?php echo $rr['part_stockJbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>Part STOCK JUDGEMENT : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='q2' value="<?php echo $rr['part_stockJac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>UNIT LENGTH : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='r1' value="<?php echo $rr['unit_lengthbc']; ?>">
                    </div>
                    <label class='col-sm-2 control-label'>UNIT LENGTH : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='r2' value="<?php echo $rr['unit_lengthac']; ?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>RM BAR/ITEM PCS : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='s1' value="<?php echo $rr['item_pcsbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>RM BAR/ITEM PCS : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='s2' value="<?php echo $rr['item_pcsac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>STD. PACKING : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='t1' value="<?php echo $rr['std_packingbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>STD. PACKING : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='t2' value="<?php echo $rr['std_packingac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>PACKING : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='t3' value="<?php echo $rr['packingbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>PACKING : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='t4' value="<?php echo $rr['packingac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>C/T : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='v1' value="<?php echo $rr['ctbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>C/T : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='v2' value="<?php echo $rr['ctac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>WEIGHT PART : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='w1' value="<?php echo $rr['weight_partbc']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>WEIGHT PART : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='w2' value="<?php echo $rr['weight_partac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>

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
                      <input type='text' class='form-control' name='x1' value="<?php echo $rr['cutoffprodac']; ?>" readonly>
                    </div>
                    <label class='col-sm-2 control-label'>Sales (By Mkt) : </label>
                    <div class='col-sm-4'>
                      <input type='text' class='form-control' name='x2' value="<?php echo $rr['cutoffsalesac']; ?>" readonly>
                    </div>
                  </div>
                  <div class='form-group'>
                    <!-- <label class='col-sm-2 control-label'>Lampiran :</label>
                    <div class='col-sm-4'>
                      <input type="file" name="lampiran" class="input-large">
                    </div> -->
                  </div>
                </div>



                <div class='box-footer'>
                  <label class='col-sm-2 control-label'></label>
                  <div>
                    <button style="width: 200px" type="submit" class="btn btn-flat btn-primary col-sm-5" onclick="return confirm('Apa anda yakin data sudah benar?')"><i class="glyphicon glyphicon-floppy-save"></i> S I M P A N</button>
                  </div>
                  <a href="view-data4" class='col-sm-5'><button style="width: 200px" type="button" class="btn btn-flat btn-danger"><i class="glyphicon glyphicon-floppy-remove"></i> B A T A L</button></a>
                </div>
              </div>
            </form>
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

  <?php include "footer.php"; ?>