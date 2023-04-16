<?php
include "../../NewItem-ChangeItem/assets/config/koneksi.php";

$keputusan = 'Disapproved by GM HRD IT';



date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d");
$time = date("G:i:s");
$id = $_POST['selector'];

if ($id == null) {
    echo "<script onscreen>alert('HARAP UNTUK MEMILIH DATA YANG INGIN DI DISAPPROVE!')</script>";
    echo "<center><a href='view-data2' onclick='return confirm('Are you sure?');'> KEMBALI </a><center>";
} else {
    $id = $_POST['selector'];
    $N = count($id);
    for ($i = 0; $i < $N; $i++) {
        mysqli_query($koneksi, "UPDATE itemac SET keputusan='$keputusan' WHERE id='$id[$i]'");
    }
    echo "<script>window.alert('Data Berhasil di Update!');
                window.location='view-data2'</script>";
}
