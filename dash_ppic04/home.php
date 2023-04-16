<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <div class="callout callout-danger">
    <h4 style="text-transform: uppercase;">PT. NIHON SEIKI INDONESIA</h4>
    APLIKASI ADD & CHANGE ITEM MASTER
      <strong class="pull-right btn btn-sm bg-yellow" style="margin-top: -20px;"><?php
      $tanggal = date ("d");
      $bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
      $bulan = $bulan[date("n")];
      $tahun = date("Y");
      echo $tanggal ." ". $bulan ." ". $tahun;
      date_default_timezone_set('Asia/Jakarta');
      $jam=date("H:i");
      echo " | ". $jam." "."";
      $a = date ("H");
      if (($a>=1) && ($a<=10)){
        echo ", Selamat Pagi";
      }
      else if(($a>10) && ($a<=13))
      {
        echo ", Selamat Siang";
      }
      else if (($a>13) && ($a<=15))
      {
        echo ", Selamat Sore";
      }
      else if (($a>15) && ($a<=17))
      {
        echo ", Selamat Petang";
      }
      else { echo ", Selamat Malam";
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
      <div class="info-box bg-aqua">
        <span class="info-box-icon"><i class="fa fa-spinner"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">WAITING PPIC to Input Weight Consumn</span>
          <span class="info-box-number"><?php $data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM itemac where id_level='3' ")); echo "$data"; ?> ITEM</span>
          <!-- The progress section is optional -->
          <div class="progress">
            <div class="progress-bar" style="width: 100%"></div>
          </div>
          <span class="progress-description">
          <a href="view-data" class="small-box-footer">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
          </span>
        </div><!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="fa fa-spinner"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Waiting IT Register to SAP</span>
          <span class="info-box-number"><?php $data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM itemac where keputusan IN ('Waiting Register to SAP') AND id_level='2' ")); echo "$data"; ?> ITEM</span>
          <!-- The progress section is optional -->
          <div class="progress">
            <div class="progress-bar" style="width: 100%"></div>
          </div>
          <span class="progress-description">
          <a href="view-data2" class="small-box-footer">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
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
    <!-- ./col -->
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
        <a href="view-data3" class="small-box-footer">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div> 
</section>
</div>
