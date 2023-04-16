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
                        <form class='form-horizontal' role='form' method=POST action='aksi/update_alur.php' enctype='multipart/form-data'>
                            <div class='box-body'>
                                <?php
                                $rr = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user_change WHERE id='$_GET[id]'"));
                                ?>
                                <input type='hidden' class='form-control' name='id' value="<?php echo $rr['id']; ?>">

                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>Level 1 :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap1' class='form-control' autocomplete="off">
                                            <option value='' selected></option>
                                            <option value='8'>SPV Enginering</option>
                                            <option value='7'>SPV QC</option>
                                            <option value='6'>Asmen PPIC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>Level 2 :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap2' class='form-control' autocomplete="off">
                                            <option value='' selected></option>
                                            <option value='8'>SPV Enginering</option>
                                            <option value='7'>SPV QC</option>
                                            <option value='6'>Asmen PPIC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>Level 3 :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap3' class='form-control' autocomplete="off">
                                            <option value='' selected></option>
                                            <option value='8'>SPV Enginering</option>
                                            <option value='7'>SPV QC</option>
                                            <option value='6'>Asmen PPIC</option>
                                        </select>
                                    </div>
                                </div>


                                <div class='box-footer'>
                                    <label class='col-sm-2 control-label'></label>
                                    <div>
                                        <button style="width: 200px" type="submit" class="btn btn-flat btn-primary col-sm-5"><i class="glyphicon glyphicon-floppy-save"></i> S I M P A N</button>
                                    </div>
                                    <a href="user_tampil4.php" class='col-sm-5'><button style="width: 200px" type="button" class="btn btn-flat btn-danger"><i class="glyphicon glyphicon-floppy-remove"></i> B A T A L</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- End content -->

    <?php include "footer.php"; ?>