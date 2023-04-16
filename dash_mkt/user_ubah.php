<?php include "header.php" ?>
<div class="wrapper">
  <!-- Star menu -->
  <?php include "menu.php";?>
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
                $rr=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM newitem WHERE id='$_GET[id]'"));
                  ?>
                  <input type='hidden' class='form-control' name='id' value="<?php echo $rr['id']; ?>">
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>ItemCode :</label>
                    <div class='col-sm-4'>
                      <input type='text' name='a' class='form-control' value="<?php echo $rr['ItemCode']; ?>">
                    </div>
                    <label class='col-sm-2 control-label'>ItemName :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='b' value="<?php echo $rr['ItemName']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>SalesUnit :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='c' value="<?php echo $rr['SalesUnit']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>SalesUnitLength : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='d' value="<?php echo $rr['SalesUnitLength']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>RM bar/Item Pcs :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='e' value="<?php echo $rr['ItemPcs']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>Unit Price :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='f' value="<?php echo $rr['UnitPrice']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS CustName:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='g' value="<?php echo $rr['U_MIS_CustName']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS JenisItem : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='h' value="<?php echo $rr['U_MIS_JenisItem']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Diameter :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='i' value="<?php echo $rr['U_MIS_Diameter']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Length :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='j' value="<?php echo $rr['U_MIS_Length']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Spec :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='k' value="<?php echo $rr['U_MIS_Spec']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Packing :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='l' value="<?php echo $rr['U_MIS_Packing']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses1 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='m' value="<?php echo $rr['U_MIS_Proses1']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses2 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='n' value="<?php echo $rr['U_MIS_Proses2']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses3 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='o' value="<?php echo $rr['U_MIS_Proses3']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses4 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='p' value="<?php echo $rr['U_MIS_Proses4']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses5 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='q' value="<?php echo $rr['U_MIS_Proses5']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses6 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='r' value="<?php echo $rr['U_MIS_Proses6']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses7 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='s' value="<?php echo $rr['U_MIS_Proses7']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses8 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='t' value="<?php echo $rr['U_MIS_Proses8']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses9 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='u' value="<?php echo $rr['U_MIS_Proses9']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses10 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='v' value="<?php echo $rr['U_MIS_Proses10']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses11 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='w' value="<?php echo $rr['U_MIS_Proses11']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses12 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='x' value="<?php echo $rr['U_MIS_Proses12']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS SubCont : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='y' value="<?php echo $rr['U_MIS_Subcont']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS ROSHFree : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='z' value="<?php echo $rr['U_MIS_ROHSFree']; ?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS RawMat : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='aa' value="<?php echo $rr['U_MIS_RawMat']; ?>">
                  </div>
                  <label class='col-sm-2 control-label'>Lampiran :</label>
                <div class='col-sm-4'>
									<input type="file" name="lampiran" class="input-large">
                </div>
                  <!-- <label class='col-sm-2 control-label'>U MIS Proses1 : </label>
                  <div class='col-sm-4'>
                  <input type='text' class='form-control' name='m'>
                  </div> -->
                </div>

          

                <div class='box-footer'>
                  <label class='col-sm-2 control-label'></label>
                  <div >
                    <button style="width: 200px" type="submit" class="btn btn-flat btn-primary col-sm-5"><i class="glyphicon glyphicon-floppy-save"></i> S I M P A N</button>
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
      
      <?php include "footer.php";?>