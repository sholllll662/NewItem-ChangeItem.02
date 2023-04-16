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
              <h3 class='box-title'><i class='fa fa-edit'></i> FORM ADD ITEM MASTER</h3>
            </div>
            <form class='form-horizontal' role='form' method=POST action='aksi/user_simpan.php' enctype='multipart/form-data'>
              <div class='box-body'>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>Nama PIC :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='ma' autofocus required autocomplete="off">
                  </div>
                  <label class='col-sm-2 control-label'>Departement :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='mb' autofocus required autocomplete="off">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>Tanggal Input :</label>
                  <div class='col-sm-4'>
                    <input type='datetime-local' class='form-control' name='mc' id='mc' readonly>
                  </div>
                  <label class='col-sm-2 control-label'>Model :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='md' autofocus required autocomplete="off">
                  </div>
                </div>
                <div>
                  <br>
                  <br>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>ItemCode :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='a' autofocus required autocomplete="off">
                  </div>
                  <label class='col-sm-2 control-label'>ItemName :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='b' autofocus required autocomplete="off">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>SalesUnit :</label>
                  <div class='col-sm-4'>
                    <!-- <input type='text' class='form-control' name='c' value="Pcs" autofocus required autocomplete="off"> -->
                    <select name='c' class='form-control' autofocus required autocomplete="off">
                      <option value='Pcs'>Pcs</option>
                      <option value=''></option>
                      <option value=''></option>
                    </select>
                  </div>
                  <label class='col-sm-2 control-label'>SalesUnitLength : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='d' autofocus required autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <label class='col-sm-2 control-label'>Currency :</label>
                  <div class='col-sm-2'>
                    <select name='cry' class='form-control'>
                      <?php
                      //$conn = new mysqli($servername, $username, $password, $dbname);
                      $sql = "SELECT * FROM currency ORDER BY id ASC";
                      $result = $koneksi->query($sql);

                      while ($row = mysqli_fetch_assoc($result)) { ?>

                        <option value="<?php echo $row['mata_uang']; ?>" <?php if ($id == $row['id']) echo 'selected'; ?>>
                          <?php
                          echo $row['mata_uang'];

                          ?>
                        </option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>Unit Price :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='f' autofocus required autocomplete="off">
                  </div>
                  <label class='col-sm-2 control-label'>RM bar/Item Pcs :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='e' autofocus required autocomplete="off">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS CustName:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='g' autofocus required autocomplete="off">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS JenisItem : </label>
                  <div class='col-sm-2'>
                    <select name='h' class='form-control' autofocus required autocomplete="off">
                      <option value=''>Select Jenis Item</option>
                      <option value='SMALL PART'>SMALL PART</option>
                      <option value='LONG PART'>LONG PART</option>
                    </select>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Diameter :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='i' autofocus required autocomplete="off">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Length :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='j' autofocus required autocomplete="off">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Spec :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='k' autofocus required autocomplete="off">
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Packing :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='l' autofocus required autocomplete="off">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses1 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='m'>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses2 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='n'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses3 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='o'>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses4 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='p'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses5 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='q'>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses6 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='r'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses7 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='s'>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses8 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='t'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses9 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='u'>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses10 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='v'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses11 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='w'>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses12 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='x'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses13 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='ab'>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses14 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='ac'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS Proses15 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='ad'>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS Proses16 : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='ae'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS SubCont : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='y'>
                  </div>
                  <label class='col-sm-2 control-label'>U MIS ROSHFree : </label>
                  <div class='col-sm-4'>
                    <!-- <input type='text' class='form-control' name='z' value="Yes"> -->
                    <select name='z' class='form-control' autofocus required autocomplete="off">
                      <option value='Yes'>Yes</option>
                      <option value='No'>No</option>
                    </select>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>U MIS RawMat : </label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' name='aa' autofocus required autocomplete="off">
                  </div>
                  <label class='col-sm-2 control-label'>Lampiran :</label>
                  <div class='col-sm-4'>
                    <input type="file" name="lampiran" class="input-large">
                  </div>
                  <!-- <label class='col-sm-2 control-label'>U MIS Proses1 : </label>
                  <div class='col-sm-4'>
                  <input type='text' class='form-control' name='m' autofocus required autocomplete="off">
                  </div> -->
                </div>


                <div class='box-footer'>
                  <label class='col-sm-2 control-label'></label>
                  <div class='col-sm-10'>
                    <button style='width: 150px;' type="submit" class="btn btn-flat btn-primary" onclick="return confirm('Apa anda yakin data sudah benar?')"><i class="glyphicon glyphicon-floppy-save"></i> S I M P A N</button>
                    <a style='width: 150px;' href="view-data1" type="button" class="btn btn-flat btn-danger"><i class="glyphicon glyphicon-floppy-remove"></i> B A T A L</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- End content -->
  <script>
    function updateTime() {
      var now = new Date();
      var year = now.getFullYear();
      var month = ('0' + (now.getMonth() + 1)).slice(-2);
      var day = ('0' + now.getDate()).slice(-2);
      var hours = ('0' + now.getHours()).slice(-2);
      var minutes = ('0' + now.getMinutes()).slice(-2);
      var seconds = ('0' + now.getSeconds()).slice(-2);
      var dateTime = year + '-' + month + '-' + day + 'T' + hours + ':' + minutes + ':' + seconds;
      document.getElementById('mc').value = dateTime;
    }

    setInterval(updateTime, 1000); // Memperbarui setiap detik
  </script>
  <?php include "footer.php"; ?>