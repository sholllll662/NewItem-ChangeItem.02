<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="callout callout-danger">
      <h4 style="text-transform: uppercase;">PT. NIHON SEIKI INDONESIA</h4>
      APLIKASI CHANGE ITEM MASTER
      <strong class="pull-right btn btn-sm bg-yellow" style="margin-top: -20px;"><?php
                                                                                  $tanggal = date("d");
                                                                                  $bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                                                                  $bulan = $bulan[date("n")];
                                                                                  $tahun = date("Y");
                                                                                  echo $tanggal . " " . $bulan . " " . $tahun;
                                                                                  date_default_timezone_set('Asia/Jakarta');
                                                                                  $jam = date("H:i");
                                                                                  echo " | " . $jam . " " . "";
                                                                                  $a = date("H");
                                                                                  if (($a >= 1) && ($a <= 10)) {
                                                                                    echo ", Selamat Pagi";
                                                                                  } else if (($a > 10) && ($a <= 13)) {
                                                                                    echo ", Selamat Siang";
                                                                                  } else if (($a > 13) && ($a <= 15)) {
                                                                                    echo ", Selamat Sore";
                                                                                  } else if (($a > 15) && ($a <= 17)) {
                                                                                    echo ", Selamat Petang";
                                                                                  } else {
                                                                                    echo ", Selamat Malam";
                                                                                  }
                                                                                  ?></strong>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Apply any bg-* class to to the info-box to color it -->
    <!-- /.info-box -->
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-4">
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="fa fa-spinner"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">WAITING PPIC Input RM CODE</span>
            <span class="info-box-number"><?php $data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM itemac where material_rmcode ='' AND id_level IN ('9') "));
                                          echo "$data"; ?> ITEM</span>
            <!-- The progress section is optional -->
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <a href="view-data1" class="small-box-footer" style="color: white;">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
            </span>
          </div><!-- /.info-box-content -->
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="fa fa-check"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">APPROVED</span>
            <span class="info-box-number"><?php $data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM itemac where keputusan IN ('Approved by GM HRD IT') AND id_level IN ('1') "));
                                          echo "$data"; ?> ITEM</span>
            <!-- The progress section is optional -->
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <a href="view-data2" class="small-box-footer" style="color: white;">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
            </span>
          </div><!-- /.info-box-content -->
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-box bg-red">
          <span class="info-box-icon"><i class="fa fa-times"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">DISAPPROVED</span>
            <span class="info-box-number"><?php $data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM itemac where keputusan IN ('Disapproved by SPV Eng', 'Disapproved by SPV QC', 'Disapproved by ASMEN PPIC', 'Disapproved by GM MKT') AND id_level IN ('8', '7', '6', '4', '3', '2', '1') "));
                                          echo "$data"; ?> ITEM</span>
            <!-- The progress section is optional -->
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <a href="view-data3" class="small-box-footer" style="color: white;">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
            </span>
          </div><!-- /.info-box-content -->
        </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="box box-solid">

        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h4>
            TAMBAH DATA
          </h4>
          <p>Item Master</p>
        </div>
        <div class="icon">
          <i class="fa fa-user-plus"></i>
        </div>
        <a href="create-data" class="small-box-footer">Tambah Sekarang <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h4>
            Tambah Data
          </h4>
          <p>IMPORT EXCEL</p>
        </div>
        <div class="icon">
          <i class="fa fa-user-plus"></i>
        </div>
        <a href="create-data2" class="small-box-footer">Tambah Sekarang <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-blue">
        <div class="inner">
          <h4>
            LIHAT SEMUA DATA
          </h4>
          <p>Change Item Master</p>
          <span class="info-box-number"><?php $data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM itemac"));
                                        echo "$data"; ?> ITEM</span>
        </div>
        <div class="icon">
          <i class="fa fa-list-alt"></i>
        </div>
        <a href="view-data" class="small-box-footer" style="color: white;">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <!-- <div class="col-lg-3 col-xs-6"> -->
    <!-- small box -->
    <!-- <div class="small-box bg-green">
        <div class="inner">
          <h4>
            LIHAT DATA
          </h4>
          <p>Item Master</p>
        </div>
        <div class="icon">
          <i class="fa fa-list-alt"></i>
        </div>
        <a href="view-data" class="small-box-footer">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div> -->
  </section>
  <script>
    $(document).ready(function() {
      //menampilkan notifikasi
      function showNotification(title, message) {
        if (Notification.permission !== "granted") {
          Notification.requestPermission();
          <?php $data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM itemac where material_rmcode ='' AND id_level IN ('9') ")); ?>
        } else {
          var notification = new Notification(title, {
            body: message
          });
        }
      }


      //memanggil fungsi showNotification
      showNotification('Notifikasi', '<?php echo "$data"; ?> Data Tersedia');

      setTimeout(function() {
        location.reload();
      }, 18000000);

    });
  </script>
</div>