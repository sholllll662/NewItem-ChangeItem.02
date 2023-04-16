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

        .group {
            position: relative;
        }

        .input {
            font-size: 16px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 315px;
            border: none;
            border-bottom: 1px solid #515151;
            background: transparent;
        }

        .input:focus {
            outline: none;
        }

        label {
            color: #999;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 10px;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .input:focus~label,
        .input:valid~label {
            top: -20px;
            font-size: 14px;
            color: #5264AE;
        }

        .bar {
            position: relative;
            display: block;
            width: 315px;
        }

        .bar:before,
        .bar:after {
            content: '';
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;
            background: #5264AE;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .bar:before {
            left: 50%;
        }

        .bar:after {
            right: 50%;
        }

        .input:focus~.bar:before,
        .input:focus~.bar:after {
            width: 50%;
        }

        .highlight {
            position: absolute;
            height: 60%;
            width: 100px;
            top: 25%;
            left: 25%;
            pointer-events: none;
            opacity: 0.5;
        }

        .input:focus~.highlight {
            animation: inputHighlighter 0.3s ease;
        }

        @keyframes inputHighlighter {
            from {
                background: #5264AE;
            }

            to {
                width: 0;
                background: transparent;
            }
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
                <span class="actual-text">&nbsp;RESET&nbsp;PASSWORD&nbsp;</span>
                <span class="hover-text" aria-hidden="true">&nbsp;RESET&nbsp;PASSWORD&nbsp;</span>
            </button>
        </div>
        <!-- /.login-logo -->
        <div class='login-box-body' style="border-top: 8px solid #000080;border-bottom: 8px solid #000080;border-right: 4px solid #000080;border-top-left-radius: 16px;border-bottom-left-radius: 16px;box-shadow: 0px 3px 6px 0px #222;">
            <button class='btn bg-black'><a href="index.php"><i class="fa fa-chevron-left" style="color : white; "> BACK</i></a></button>
            <br>
            <br>
            <p class='login-box-msg'>FORM RESET PASSWORD</p>
            <form class='form-horizontal' role='form' method=POST action='reset.php' enctype='multipart/form-data'>
                <div class='row'>
                    <div class='col-xs-12'>
                        <div class='group'>
                            <input type="text" class="input" aria-describedby="basic-addon1" name="user" required autofocus>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Username</label>
                        </div>
                        <br>
                        <br>
                        <div class='group'>
                            <input type="text" class="input" aria-describedby="basic-addon1" name="pass" required autofocus>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Password</label>
                        </div>
                        <br>
                        <br>
                        <div class='group'>
                            <input type="text" class="input" aria-describedby="basic-addon1" name="pass1" required autofocus>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Confirm Password</label>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-xs-12'>
                        <button name="reset" type='submit' class='btn bg-red'></i> R E S E T</button>
                    </div>
                </div>
                <br>
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