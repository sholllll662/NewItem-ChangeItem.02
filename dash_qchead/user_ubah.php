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
                $rr = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM newitem WHERE id='$_GET[id]'"));
                ?>
                <input type='hidden' class='form-control' name='id' value="<?php echo $rr['id']; ?>">
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>ItemCode :</label>
                  <div class='col-sm-4'>
                    <input type='text' name='a' class='form-control' value="<?php echo $rr['ItemCode']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>ItemName :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='b' value="<?php echo $rr['ItemName']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>SalesUnit :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='c' value="<?php echo $rr['SalesUnit']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>SalesUnitLength : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='d' value="<?php echo $rr['SalesUnitLength']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>RM bar/Item Pcs :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='e' value="<?php echo $rr['ItemPcs']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>Unit Price :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='f' value="<?php echo $rr['UnitPrice']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS CustName:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='g' value="<?php echo $rr['U_MIS_CustName']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS JenisItem : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='h' value="<?php echo $rr['U_MIS_JenisItem']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Diameter :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='i' value="<?php echo $rr['U_MIS_Diameter']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Length :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='j' value="<?php echo $rr['U_MIS_Length']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Spec :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='k' value="<?php echo $rr['U_MIS_Spec']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Packing :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='l' value="<?php echo $rr['U_MIS_Packing']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses1 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='m' value="<?php echo $rr['U_MIS_Proses1']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses2 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='n' value="<?php echo $rr['U_MIS_Proses2']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses3 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='o' value="<?php echo $rr['U_MIS_Proses3']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses4 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='p' value="<?php echo $rr['U_MIS_Proses4']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses5 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='q' value="<?php echo $rr['U_MIS_Proses5']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses6 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='r' value="<?php echo $rr['U_MIS_Proses6']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses7 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='s' value="<?php echo $rr['U_MIS_Proses7']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses8 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='t' value="<?php echo $rr['U_MIS_Proses8']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses9 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='u' value="<?php echo $rr['U_MIS_Proses9']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses10 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='v' value="<?php echo $rr['U_MIS_Proses10']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses11 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='w' value="<?php echo $rr['U_MIS_Proses11']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses12 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='x' value="<?php echo $rr['U_MIS_Proses12']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses13 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='bb' value="<?php echo $rr['U_MIS_Proses13']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses14 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='bc' value="<?php echo $rr['U_MIS_Proses14']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses15 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='bd' value="<?php echo $rr['U_MIS_Proses15']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses16 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='be' value="<?php echo $rr['U_MIS_Proses16']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS SubCont : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='y' value="<?php echo $rr['U_MIS_Subcont']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS ROSHFree : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='z' value="<?php echo $rr['U_MIS_ROHSFree']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS RawMat : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='aa' value="<?php echo $rr['U_MIS_RawMat']; ?>" readonly>
                  </div>
                  <!-- <label class='col-sm-2 control-label'>U MIS Proses1 : </label>
                  <div class='col-sm-4'>
                  <input type='text' class='form-control' name='m'>
                  </div> -->
                  <label class='col-sm-2 control-label'>SalesUnitWeight : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='ab' value="<?php echo $rr['SalesUnitWeight']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS StdPacking : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='ac' value="<?php echo $rr['U_MIS_StdPacking']; ?>" readonly>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS CycleTime : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='ad' value="<?php echo $rr['U_MIS_CycleTime']; ?>" readonly>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>STATUS :</label>
                  <div class='col-sm-4'>
                    <select name='aqc' class='form-control' required autocomplete="off">
                      <option value='' selected></option>
                      <option value='Approved by QC'>Approve</option>
                      <option value='Disapproved by QC'>Disapprove</option>
                    </select>
                  </div>
                  <label class='col-sm-2 control-label'>Catatan QC : </label>
                  <div class='col-sm-4'>
                    <textarea type='text' class='form-control' name='nqc'></textarea>
                  </div>
                </div>
                <div class='form-group'>
                  <!-- <label class='col-sm-2 control-label'>Lampiran :</label>
                  <div class='col-sm-4'>
                    <input type="file" name="lampiran" class="input-large">
                  </div> -->
                </div>



                <div class='box-footer'>
                  <label class='col-sm-2 control-label'></label>
                  <div>
                    <button style="width: 200px" type="submit" class="btn btn-flat btn-primary col-sm-5" onclick="return confirm('Apa anda yakin data sudah benar?')"><i class="glyphicon glyphicon-floppy-save"></i> S I M P A N</button>
                  </div>
                  <a href="view-data" class='col-sm-5'><button style="width: 200px" type="button" class="btn btn-flat btn-danger"><i class="glyphicon glyphicon-floppy-remove"></i> B A T A L</button></a>
                </div>
              </div>
            </form>
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- End content -->

  <?php include "footer.php"; ?>