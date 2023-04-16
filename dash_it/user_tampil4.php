<?php include "header.php" ?>
<div class="wrapper">
    <?php include "../dash_mkt/DownloadFile.php"; ?>
    <!-- Star menu -->
    <?php include "menu.php"; ?>
    <!-- End menu -->

    <!-- Start content -->
    <div class='content-wrapper'>
        <!-- Content Header (Page header) -->
        <section class='content-header'>
            <h1>
                <small>View Items List</small>
            </h1>
            <ol class='breadcrumb'>
                <li><a href='home'><i class='fa fa-dashboard'></i> Home</a></li>
                <li class='active'>Tampil Data</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="glyphicon glyphicon-tasks"></i> Alur Approve New Item</h3>
                            <a href="ubah_alur.php" class="pull-right btn bg-purple">Buat Alur</a>
                            <h4>Alur Default = Marketing Create New Item -> Approve Enginering -> Approve Quality -> GM Marketing -> IT</h4>

                            <!-- <a href='create-data' class="pull-right btn bg-blue"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a> -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true"><span class="info-box-number">NEW ALUR APPROVE</span></li>
                                <li class="list-group-item"><span class="info-box-number">- Crate New Item = Section <?php $data = mysqli_query($koneksi, "SELECT nama, section FROM user where id_level = '10'");
                                                                                                                        while ($row = $data->fetch_assoc()) {
                                                                                                                            echo $row['section'], '.  PIC ', $row['nama'];
                                                                                                                        } ?></span></li>
                                <li class="list-group-item"><span class="info-box-number">- Input Raw Material = Section <?php $data = mysqli_query($koneksi, "SELECT nama, section FROM user where id_level = '4'");
                                                                                                                            while ($row = $data->fetch_assoc()) {
                                                                                                                                echo $row['section'], '.  PIC ', $row['nama'];
                                                                                                                            } ?></span></li>
                                <li class="list-group-item"><span class="info-box-number">- APPROVED LEVEL 1 = Section <?php $data = mysqli_query($koneksi, "SELECT nama, section FROM user where id_level = '9'");
                                                                                                                        while ($row = $data->fetch_assoc()) {
                                                                                                                            echo $row['section'], '.  PIC ', $row['nama'];
                                                                                                                        } ?></span></li>
                                <li class="list-group-item"><span class="info-box-number">- APPROVED LEVEL 2 = Section <?php $data = mysqli_query($koneksi, "SELECT nama, section FROM user where id_level = '5'");
                                                                                                                        while ($row = $data->fetch_assoc()) {
                                                                                                                            echo $row['section'], '.  PIC ', $row['nama'];
                                                                                                                        } ?></span></li>
                                <li class="list-group-item"><span class="info-box-number">- APPROVED LEVEL 3 = Section <?php $data = mysqli_query($koneksi, "SELECT nama, section FROM user where id_level = '3'");
                                                                                                                        while ($row = $data->fetch_assoc()) {
                                                                                                                            echo $row['section'], '.  PIC ', $row['nama'];
                                                                                                                        } ?></span></li>
                                <li class="list-group-item"><span class="info-box-number">- APPROVED LEVEL 4 = Section <?php $data = mysqli_query($koneksi, "SELECT nama, section FROM user where id_level = '2'");
                                                                                                                        while ($row = $data->fetch_assoc()) {
                                                                                                                            echo $row['section'], '.  PIC ', $row['nama'];
                                                                                                                        } ?></span></li>
                                <li class="list-group-item"><span class="info-box-number">- APPROVED LEVEL 5 = Section <?php $data = mysqli_query($koneksi, "SELECT nama, section FROM user where id_level = '1'");
                                                                                                                        while ($row = $data->fetch_assoc()) {
                                                                                                                            echo $row['section'], '.  PIC ', $row['nama'];
                                                                                                                        } ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include "footer.php"; ?>