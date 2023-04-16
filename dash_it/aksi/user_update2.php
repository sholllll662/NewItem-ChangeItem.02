<?php
include "../../assets/config/koneksi.php";


$level = 1;
$keputusan = $_POST['agm'];


date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d H:i:s");

mysqli_query($koneksi, "UPDATE newitem SET id_level='$level', tglinputit='$tgl', keputusan='$keputusan' WHERE id = '$_POST[id]'");
echo "<script>window.alert('Data Berhasil di Update!');
                window.location='../view-data1'</script>";
