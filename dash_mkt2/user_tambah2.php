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
            <form class='form-horizontal' role='form' method=POST action='aksi/user_simpan1.php' enctype='multipart/form-data'>
              <div class='box-body'>
                <div class='form-group'>
                  <a style="margin-left: 140px; font-size: 18px; text-align: center; vertical-align: middle;" href='../assets/master/Master File Change Items.xls'>Download File Master</a>
                </div>
                <br>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>Upload File :</label>
                  <div class='col-sm-4'>
                    <input type="file" name="berkas_excel" class="input-large">
                  </div>
                </div>
              </div>


              <div class='box-footer'>
                <label class='col-sm-2 control-label'></label>
                <div class='col-sm-10'>
                  <button style='width: 150px;' type="submit" class="btn btn-flat btn-primary"><i class="glyphicon glyphicon-floppy-save"></i> S I M P A N</button>
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

  <?php include "footer.php"; ?>