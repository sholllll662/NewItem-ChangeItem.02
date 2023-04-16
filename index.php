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

    .cssbuttons-io {
      position: relative;
      font-family: inherit;
      font-weight: 500;
      font-size: 18px;
      letter-spacing: 0.05em;
      border-radius: 0.8em;
      border: none;
      background: linear-gradient(to right, #000080, #cc90a4, #4a00e0);
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
      background: #000;
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
  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
  </script>
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
        <span class="actual-text">&nbsp;ADD&nbsp;&&nbsp;CHANGE&nbsp;ITEM&nbsp;MASTER&nbsp;APP&nbsp;</span>
        <span class="hover-text" aria-hidden="true">&nbsp;ADD&nbsp;&&nbsp;CHANGE&nbsp;ITEM&nbsp;MASTER&nbsp;APP&nbsp;</span>
      </button>
    </div>
    <!-- /.login-logo -->
    <div class='login-box-body' style="border-top: 8px solid #000080;border-bottom: 8px solid #000080;border-right: 4px solid #000080;border-top-left-radius: 16px;border-bottom-left-radius: 16px;box-shadow: 0px 3px 6px 0px #222;">
      <p class='login-box-msg'>Silahkan Pilih Menu</p>
      <form role="form" href="item_change.php" method="submit">
        <div class='row'>
          <div class='col-xs-12'>
            <center><button class="cssbuttons-io">
                <span><a href="new_item.php" style="color : white; font-size : 20px;"> N E W &nbsp; I T E M S </a></span></button></center>
          </div>
        </div>
        <br>
      </form>
      <form role="form" href="item_change.php" method="submit">
        <div class='row'>
          <div class='col-xs-12'>
            <center><button class="cssbuttons-io">
                <span><a href="item_change.php" style="color : white; font-size : 20px;"> C H A N G E &nbsp; I T E M S </a></span></button></center>
          </div>
        </div>
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