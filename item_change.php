<?php
include "assets/config/koneksi.php";
error_reporting(1);

switch ($request) {
  case $me . '192.168.10.176:8012/newitem-changeitem/':
    require "index.php";
    break;
  default:
    http_response_code(404);
    break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Add & Change Item Master</title>
  <link rel="shortcut icon" href="assets/img/logo/logoadd.png">
  <title style="text-transform: uppercase;">Add & Change APP</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/ionicons-2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="assets/dist/js/jquery-2.2.1.min.js"></script>
  <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }

    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      font: 14px arial;
    }

    /* === removing default button style ===*/
    .button {
      margin: -180px;
      height: auto;
      background: transparent;
      padding: 0;
      border: none;
    }

    /* button styling */
    .button {
      --border-right: 6px;
      --text-stroke-color: rgba(255, 255, 255, 1);
      --animation-color: #0101ec;
      --fs-size: 0.7em;
      letter-spacing: 3px;
      text-decoration: none;
      font-size: var(--fs-size);
      font-family: "Arial";
      position: relative;
      text-transform: uppercase;
      color: transparent;
      -webkit-text-stroke: 1px var(--text-stroke-color);
    }

    /* this is the text, when you hover on button */
    .hover-text {
      position: absolute;
      box-sizing: border-box;
      content: attr(data-text);
      color: var(--animation-color);
      width: 0%;
      inset: 0;
      border-right: var(--border-right) solid var(--animation-color);
      overflow: hidden;
      transition: 0.5s;
      -webkit-text-stroke: 1px var(--animation-color);

    }

    /* hover */
    .button:hover .hover-text {
      width: 100%;
      filter: drop-shadow(0 0 23px var(--animation-color))
    }
  </style>
</head>

<body class='hold-transition login-page' style="background-image: url('assets/img/bg/b.png'); background-color: antiquewhite;">
  <div class="preloader" style="background-color: #000;">
    <div class="loading">
      <img src="assets/loader/a.gif" width="150">
    </div>
  </div>
  <div class='login-box' style="margin-top: 10px;">
    <div class='login-logo'>
      <center><img width="65%" src="assets/img/logo/logoadd.png"></center>
      <center><b style="font-size: 26px; color: blue; ">PT NIHON SEIKI INDONESIA</b></center>
      <button data-text="Awesome" class="button">
        <span class="actual-text">&nbsp;MASTER&nbsp;CHANGE&nbsp;ITEM&nbsp;</span>
        <span class="hover-text" aria-hidden="true">&nbsp;MASTER&nbsp;CHANGE&nbsp;ITEM&nbsp;</span>
      </button>
    </div>
    <!-- /.login-logo -->
    <div class='login-box-body' style="border-top: 8px solid #000080;border-bottom: 8px solid #000080;border-right: 4px solid #000080;border-top-left-radius: 16px;border-bottom-left-radius: 16px;box-shadow: 0px 3px 6px 0px #222;">
      <button class='btn bg-black'><a href="index.php"><i class="fa fa-chevron-left" style="color : white; "> BACK</i></a></button>
      <br>
      <br>
      <p class='login-box-msg'>Silahkan Login Untuk Akses System</p>
      <?php
      if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = ($_POST['password']);
        $id_level   = $_POST['id_level'];

        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

        if (mysqli_num_rows($query) == 0) {
          echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
        } else {
          $row = mysqli_fetch_array($query);
          session_start();
          if ($row['id_level'] == 1 && $id_level == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['id_level'] = 'GM HRD IT';
            header("Location: dash_fm2");
          } else if ($row['id_level'] == 2 && $id_level == 2) {
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['id_level'] = 'IT';
            header("Location: dash_it2");
          } else if ($row['id_level'] == 3 && $id_level == 3) {
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['id_level'] = 'GM MKT';
            header("Location: dash_gm2");
          } else if ($row['id_level'] == 4 && $id_level == 4) {
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['id_level'] = 'PPIC2';
            header("Location: dash_ppic04");
          } else if ($row['id_level'] == 6 && $id_level == 6) {
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['id_level'] = 'ASMEN PPIC';
            header("Location: dash_ppic");
          } else if ($row['id_level'] == 7 && $id_level == 7) {
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['id_level'] = 'SPV QC';
            header("Location: dash_spvqc");
          } else if ($row['id_level'] == 8 && $id_level == 8) {
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['id_level'] = 'SPV ENG';
            header("Location: dash_spveng");
          } else if ($row['id_level'] == 11 && $id_level == 11) {
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['id_level'] = 'ENGINEERING';
            header("Location: dash_eng2");
          } else if ($row['id_level'] == 12 && $id_level == 12) {
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['id_level'] = 'MARKETING';
            header("Location: dash_mkt2");
          } else if ($row['id_level'] == 13 && $id_level == 13) {
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['id_level'] = 'PPIC';
            header("Location: dash_ppic03");
          } else {
            echo '<div class="alert alert-danger">Upss...!!! Login Anda gagal. </div>';
          }
        }
      }
      ?>
      <form role="form" action="" method="post" autocomplete="off">
        <div class='form-group has-feedback'>
          <input type="text" class="form-control" placeholder="Masukan Username Anda" aria-describedby="basic-addon1" name="username" required autofocus />
          <span class='glyphicon glyphicon-user form-control-feedback'></span>
        </div>
        <div class='form-group has-feedback'>
          <input type="password" class="form-control" placeholder=" Masukan Password Anda" aria-describedby="basic-addon1" name="password" id="id_password">
          <i class="far fa-eye" id="togglePassword" style="margin-left: 5px; cursor: pointer;"> <i style="font-size: 11px;"> Show Password</i></i>
          <span class='glyphicon glyphicon-lock form-control-feedback'></span>
        </div>
        <div class='form-group has-feedback'>
          <select name="id_level" class="form-control" required>
            <option value="">Pilih Level User</option>
            <option value="1">GM HRD IT</option>
            <option value="2">IT</option>
            <option value="3">GM MKT</option>
            <option value="4">PPIC Approval</option>
            <option value="6">ASMEN PPIC</option>
            <option value="7">SPV QC</option>
            <option value="8">SPV ENG</option>
            <option value="11">ENGINEERING</option>
            <option value="12">MARKETING</option>
            <option value="13">PPIC</option>
          </select>
        </div>
        <a href="lupa-password.php" style="margin-left: 5px;">Lupa Password ?</a>
        <br>
        <br>
        <div class='row'>
          <div class='col-xs-12'>
            <button name="login" type='submit' class='btn bg-black btn-block'><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> M A S U K</button>
          </div>
        </div>
        <script>
          const togglePassword = document.querySelector('#togglePassword');
          const password = document.querySelector('#id_password');

          togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
          });
        </script>
      </form>




      <script>
        $(document).ready(function() {
          $('.preloader').fadeOut();
        })
      </script>
      <footer><br>
        <center>PT.NIHON SEIKI INDONESIA IT Department. <br><i class="fa fa-copyright"></i> 2022 All Rights Reserved.</b>
      </footer>
    </div>

    <script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>

</html>