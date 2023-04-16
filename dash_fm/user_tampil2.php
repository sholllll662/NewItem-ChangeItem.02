<?php include "header.php" ?>
<div class="wrapper">
  <!-- Star menu -->
  <?php include "menu.php"; ?>
  <!-- End menu -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo "$i[nama] "; ?>
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">DATA</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <style>
      .cssbuttons-io {
        position: relative;
        font-family: inherit;
        font-weight: 500;
        font-size: 12px;
        letter-spacing: 0.05em;
        border-radius: 0.8em;
        border: none;
        background: linear-gradient(to right, #d1fbd8, #a3ee5b, #66d855, #40ba0f, #188300);
        color: ghostwhite;
        overflow: hidden;
      }

      .cssbuttons-io svg {
        width: 1.2em;
        height: 1.2em;
        margin-right: 0.5em;
      }

      .cssbuttons-io span {
        position: relative;
        z-index: 10;
        transition: color 0.4s;
        display: inline-flex;
        align-items: center;
        padding: 0.8em 1.2em 0.8em 1.05em;
      }

      .cssbuttons-io::before,
      .cssbuttons-io::after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
      }

      .cssbuttons-io::before {
        content: "";
        background: #808080;
        width: 120%;
        left: -10%;
        transform: skew(30deg);
        transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
      }

      .cssbuttons-io:hover::before {
        transform: translate3d(100%, 0, 0);
      }

      .cssbuttons-io:active {
        transform: scale(0.95);
      }
    </style>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <!-- /.box-header -->
            <div class="box-body">
              <form action="update-data2" method="post" class="form-horizontal" role="form">

                <div class="container">
                  <div class="row">
                    <button type="submit" class="btn btn-success" style="margin-right: 15px;" onclick="return confirm('Apa anda yakin untuk Approve data')">
                      <span>
                        <!-- <img src="https://img.icons8.com/color/48/null/visa-stamp.png" style="width: 35px; ">&nbsp;&nbsp; -->
                        <b style="font-family: Arial, Helvetica, sans-serif;">APPROVE</b>
                      </span>
                    </button>
                    <button type="submit" class="btn btn-danger" formaction="update-data3.php" onclick="return confirm('Apa anda yakin untuk DisApprove data?')">
                      <span>
                        <!-- <img src="https://img.icons8.com/color/48/null/visa-stamp.png" style="width: 35px; ">&nbsp;&nbsp; -->
                        <b style="font-family: Arial, Helvetica, sans-serif;">DISAPPROVE</b>
                      </span>
                    </button>
                  </div>
                </div>

                <hr>
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead class="bg-orange">
                      <tr>
                        <th>
                          <Center>No.</Center>
                        </th>
                        <th>Item Code</th>
                        <th>Item Name</th>
                        <th>U_MIS_CustName</th>
                        <th>Status</th>
                        <th>Tanggal Input PIC</th>
                        <th>Lampiran</th>
                        <th>
                          <Center>AKSI</Center>
                        </th>
                        <th>
                          <Center>Pilih</Center>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $tampil = mysqli_query($koneksi, "SELECT * FROM newitem WHERE keputusan IN ('Waiting Approval GM HRD IT') AND id_level IN ('1') ORDER BY id DESC
                      ");
                      $no = 1;
                      while ($r = mysqli_fetch_array($tampil)) {
                        $ti = date("d - m - Y", strtotime($r['waktu_input']));
                        echo "
                        <tr>
                          <td style='text-align:center'>$no.</td>";
                        echo "
                          <td>$r[ItemCode]</td>
                          <td>$r[ItemName]</td>
                          <td>$r[U_MIS_CustName]</td>
                          <td>$r[keputusan]</td>
                          <td>$r[tglinputmkt]</td>
                          <td><a href='../dash_mkt/DownloadFile.php?url=aksi/filemasters/$rr[Lampiran]'>Download</a></td>
                          <td>
                          <center>
                              <a class='btn bg-orange btn-xs' data-toggle='tooltip' title='Lihat Rician Data' href='detail-data?id=$r[id]'><span class='glyphicon glyphicon-list-alt'></span></a>
                          </td>    
                          <td>
                            <center>
                              <input name='selector[]' type='checkbox' name='tandai' class='minimal flat' value='$r[id]'>
                            </center>
                          </td>
                        </tr>";
                        $no++;
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include "footer.php"; ?>