<?php
    include "../../assets/config/koneksi.php";
    mysqli_query($koneksi, "DELETE FROM newitem WHERE id ='$_GET[id]'");
    header('location:../view-data');
?>
