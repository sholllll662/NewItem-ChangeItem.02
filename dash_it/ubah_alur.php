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
                                $rr = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE id='$_GET[id]'"));
                                ?>
                                <input type='hidden' class='form-control' name='id' value="<?php echo $rr['id']; ?>">
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>NIK :</label>
                                    <div class='col-sm-4'>
                                        <input type='text' class='form-control' name='nik'>
                                    </div>
                                    <label class='col-sm-2 control-label'>Created :</label>
                                    <div class='col-sm-4'>
                                        <input type='text' class='form-control' name='b'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>Enginering :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap1' class='form-control' autocomplete="off">
                                            <option value='' selected></option>
                                            <option value='5'>Level 5</option>
                                            <option value='9'>Level 9</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>Quality :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap2' class='form-control' autocomplete="off">
                                            <option value='' selected></option>
                                            <option value='5'>Level 5</option>
                                            <option value='9'>Level 9</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>===============================================================================================================================================</label>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>Approve 3 :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap3' class='form-control' autocomplete="off">
                                            <option value='' selected></option>
                                            <option value='Engginering'>Engginering</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Marketing'>GM Marketing</option>
                                            <option value='Widodo'>Widodo GM</option>
                                        </select>
                                    </div>
                                    <label class='col-sm-2 control-label'>Approve 4 :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap4' class='form-control' autocomplete="off" disabled>
                                            <option value='' selected></option>
                                            <option value='Engginering'>Engginering</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Marketing'>GM Marketing</option>
                                            <option value='Widodo'>Widodo GM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>Approve 5 :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap5' class='form-control' autocomplete="off" disabled>
                                            <option value='' selected></option>
                                            <option value='Engginering'>Engginering</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Marketing'>GM Marketing</option>
                                            <option value='Widodo'>Widodo GM</option>
                                        </select>
                                    </div>
                                    <label class='col-sm-2 control-label'>Approve 6 : </label>
                                    <div class='col-sm-4'>
                                        <select name='ap6' class='form-control' autocomplete="off" disabled>
                                            <option value='' selected></option>
                                            <option value='Engginering'>Engginering</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Marketing'>GM Marketing</option>
                                            <option value='Widodo'>Widodo GM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>Approve 7 :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap7' class='form-control' autocomplete="off" disabled>
                                            <option value='' selected></option>
                                            <option value='Engginering'>Engginering</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Marketing'>GM Marketing</option>
                                            <option value='Widodo'>Widodo GM</option>
                                        </select>
                                    </div>
                                    <label class='col-sm-2 control-label'>Approve 8 :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap8' class='form-control' autocomplete="off" disabled>
                                            <option value='' selected></option>
                                            <option value='Engginering'>Engginering</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Widodo'>GM Marketing</option>
                                            Widodo
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>Approve 9 :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap9' class='form-control' autocomplete="off" disabled>
                                            <option value='' selected></option>
                                            <option value='Engginering'>Engginering</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Eng'>GM Marketing</option>
                                            <option value='Widodo'>Widodo GM</option>
                                        </select>
                                    </div>
                                    <label class='col-sm-2 control-label'>Approve 10 :</label>
                                    <div class='col-sm-4'>
                                        <select name='ap10' class='form-control' autocomplete="off" disabled>
                                            <option value='' selected></option>
                                            <option value='Engginering'>Engginering</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Eng'>GM Marketing</option>
                                            <option value='Widodo'>Widodo GM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='col-sm-2 control-label'>Approve 11 : </label>
                                    <div class='col-sm-4'>
                                        <select name='ap11' class='form-control' autocomplete="off" disabled>
                                            <option value='' selected></option>
                                            <option value='Engginering'>Engginering</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Eng'>GM Marketing</option>
                                            <option value='Widodo'>Widodo GM</option>
                                        </select>
                                    </div>
                                    <label class='col-sm-2 control-label'>Approve 12 : </label>
                                    <div class='col-sm-4'>
                                        <select name='ap12' class='form-control' autocomplete="off" disabled>
                                            <option value='' selected></option>
                                            <option value='Engginering'>Engginering</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Eng'>GM Marketing</option>
                                            <option value='Widodo'>Widodo GM</option>
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