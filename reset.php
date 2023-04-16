<?php
    error_reporting(1);
    include "assets/config/koneksi.php";
    
    $username = $_POST['user'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    while ($rr = mysqli_fetch_array($tampil))
    $user = $rr['username'];
    $pass = $_POST['pass'];
    $pass1 = $_POST['pass1'];

    if ($username !== $user){
        echo "<script>window.alert('USER TIDAK DITEMUKAN!');
        window.location='lupa-password.php'</script>";
    } elseif ($pass !== $pass1) {
        echo "<script>window.alert('PASSWORD TIDAK SAMA!');
        window.location='lupa-password.php'</script>";
    } else {
        mysqli_query($koneksi, "UPDATE user SET password = '$pass' WHERE username = '$username'");
        echo "<script>window.alert('RESET PASSWORD BERHASIL, SILAHKAN LOGIN!');
                window.location='index.php'</script>";
    }
