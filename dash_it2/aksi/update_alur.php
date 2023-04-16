<?php
error_reporting(1);
include "../../assets/config/koneksi.php";

$nik = $_POST['nik'];
$created = $_POST['b'];
$approve1 = $_POST['ap1'];
$approve2 = $_POST['ap2'];
$approve3 = $_POST['ap3'];


$approve4 = $_POST['ap4'];
$approve5 = $_POST['ap5'];
$approve6 = $_POST['ap6'];
$approve7 = $_POST['ap7'];
$approve8 = $_POST['ap8'];
$approve9 = $_POST['ap9'];
$approve10 = $_POST['ap10'];
$approve11 = $_POST['ap11'];
$approve12 = $_POST['ap12'];


date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d");
$time = date("G:i:s");

$spveng =  
mysqli_query($koneksi, "UPDATE user_change SET id_level='$approve1' WHERE id = '13'");
mysqli_query($koneksi, "UPDATE user_change SET id_level='$approve2' WHERE id = '12'");
mysqli_query($koneksi, "UPDATE user_change SET id_level='$approve3' WHERE id = '11'");


// mysqli_query($koneksi, "INSERT INTO alur (nik, created, approve3, approve4, approve5, approve6, approve7, approve8, approve9, approve10, approve11, approve12)
//                         VALUES ('$nik','$created', '$approve3', '$approve4', '$approve5', '$approve6', '$approve7', '$approve8', '$approve9', '$approve10', '$approve11', '$approve12' )");

// mysqli_query($koneksi, "INSERT alur SET 
//                                             approve3='$approve3',
//                                             approve4='$approve4',
//                                             approve5='$approve5',
//                                             approve6='$approve6',
//                                             approve7='$approve7',
//                                             approve8='$approve8',
//                                             approve9='$approve9',
//                                             approve10='$approve10',
//                                             approve11='$approve11',
//                                             approve12='$approve12',
//                                             WHERE id = '$_POST[id]'");
echo "<script>window.alert('Data Berhasil di Update!');
window.location='/NewItem-ChangeItem/dash_it2/user_tampil4.php'</script>";
