<?php
include "../../assets/config/koneksi.php";
mysqli_query($koneksi, "DELETE FROM itembc WHERE id ='$_GET[id]'");
mysqli_query($koneksi, "DELETE FROM itemac WHERE id ='$_GET[id]'");
header('location:../view-data');
echo "<script>window.alert('Data Berhasil di Input!');
                window.location='../view-data'</script>";
