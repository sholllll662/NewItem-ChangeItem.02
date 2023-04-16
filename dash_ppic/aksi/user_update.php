<?php
error_reporting(1);
include "../../assets/config/koneksi.php";

$part_no1 = $_POST['a1'];
$part_no2 = $_POST['a2'];
$part_name1 = $_POST['b1'];
$part_name2 = $_POST['b2'];
$customer1 = $_POST['c1'];
$customer2 = $_POST['c2'];
$reason1 = $_POST['d1'];
$reason2 = $_POST['d2'];
$pic1 = $_POST['e1'];
$pic2 = $_POST['e2'];
$material_rmcode1 = $_POST['f1'];
$material_rmcode2 = $_POST['f2'];
$rm_stock1 = $_POST['g1'];
$rm_stock2 = $_POST['g2'];
$rm_stockJ1 = $_POST['h1'];
$rm_stockJ2 = $_POST['h2'];
$rm_weight1 = $_POST['i1'];
$rm_weight2 = $_POST['i2'];
$weight_consum1 = $_POST['j1'];
$weight_consum2 = $_POST['j2'];
$rm_use1 = $_POST['k1'];
$rm_use2 = $_POST['k2'];
$proces1 = $_POST['l1'];
$unit_price1 = $_POST['m1'];
$unit_price2 = $_POST['m2'];
$reason_price1 = $_POST['n1'];
$reason_price2 = $_POST['n2'];
$part_stock1 = $_POST['o1'];
$part_stock2 = $_POST['o2'];
$amalgamasi1 = $_POST['p1'];
$amalgamasi2 = $_POST['p2'];
$part_stockJ1 = $_POST['q1'];
$part_stockJ2 = $_POST['q2'];
$unit_length1 = $_POST['r1'];
$unit_length2 = $_POST['r2'];
$item_pcs1 = $_POST['s1'];
$item_pcs2 = $_POST['s2'];
$std_packing1 = $_POST['t1'];
$std_packing2 = $_POST['t2'];
$packing1 = $_POST['t3'];
$packing2 = $_POST['t4'];
$ct1 = $_POST['v1'];
$ct2 = $_POST['v2'];
$weight_part1 = $_POST['w1'];
$weight_part2 = $_POST['w2'];
$cutoffprod1 = $_POST['x1'];
$cutoffprod2 = $_POST['x1'];
$cutoffsales1 = $_POST['x2'];
$cutoffsales2 = $_POST['x2'];
// $part_stockJ1 = $_POST['q1']; $part_stockJ2 = $_POST['q2'];
$level = 4;
$keputusan = $_POST['ae'];
$pic = $_POST['ea'];
$dept = $_POST['eb'];
$tgleng = $_POST['ec'];
$model = $_POST['ed'];
$catatan_asmenppic = $_POST['cct'];
$tglspveng = $tgl;
$tglqc = '';
$tglgm = '';
$tglppic = '';
// $currency = $_POST['cry'];


$namaFile = $_FILES['lampiran']['name'];
$x = explode('.', $namaFile);
$ekstensiFile = strtolower(end($x));
$ukuranFile    = $_FILES['lampiran']['size'];
$file_tmp = $_FILES['lampiran']['tmp_name'];

// Lokasi Penempatan file
$dirUpload = "filemasters/";
$linkBerkas = $dirUpload . $namaFile;

// Menyimpan file
$terupload = move_uploaded_file($file_tmp, $linkBerkas);


date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d H:i:s");
// $time = date("G:i:s");

mysqli_query($koneksi, "UPDATE itembc a INNER JOIN itemac c ON a.id = c.id SET a.tglppic = '$tgl', 
                                                                                   a.keputusan = '$keputusan', 
                                                                                   a.id_level = '$level',
                                                                                   a.catatan_asmenppic = '$catatan_asmenppic',
                                                                                   c.catatan_asmenppic = '$catatan_asmenppic',
                                                                                   c.tglppic = '$tgl', 
                                                                                   c.keputusan = '$keputusan', 
                                                                                   c.id_level = '$level' 
                                                                                   WHERE a.id = '$_POST[id]' AND c.id = '$_POST[id]'");
echo "<script>window.alert('Data Berhasil di Input!');
                window.location='../view-data'</script>";
        // var_dump($id,$level,$keputusan);
