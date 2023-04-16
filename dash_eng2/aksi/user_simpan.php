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
$proces2 = $_POST['l2'];
$proces3 = $_POST['l3'];
$proces4 = $_POST['l4'];
$proces5 = $_POST['l5'];
$proces6 = $_POST['l6'];
$proces7 = $_POST['l7'];
$proces8 = $_POST['l8'];
$proces9 = $_POST['l9'];
$proces10 = $_POST['l10'];
$proces11 = $_POST['l11'];
$proces12 = $_POST['l12'];
$proces13 = $_POST['l13'];
$proces14 = $_POST['l14'];
$proces15 = $_POST['l15'];
$proces16 = $_POST['l16'];
$proces17 = $_POST['l17'];
$proces18 = $_POST['l18'];
$proces19 = $_POST['l19'];
$proces20 = $_POST['l20'];
$proces21 = $_POST['l21'];
$proces22 = $_POST['l22'];
$proces23 = $_POST['l23'];
$proces24 = $_POST['l24'];
$proces25 = $_POST['l25'];
$proces26 = $_POST['l26'];
$proces27 = $_POST['l27'];
$proces28 = $_POST['l28'];
$proces29 = $_POST['l29'];
$proces30 = $_POST['l30'];
$proces31 = $_POST['l31'];
$proces32 = $_POST['l32'];
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
$currency1 = $_POST['cry1'];
$currency2 = $_POST['cry2'];
// $part_stockJ1 = $_POST['q1']; $part_stockJ2 = $_POST['q2'];
$level = 8;
$keputusan = '';
$pic = $_POST['ea'];
$dept = $_POST['eb'];
$tgleng = $_POST['ec'];
$model = $_POST['ed'];
$tglmkt = '';
$tglspveng = '';
$tglqc = '';
$tglgm = '';
$tglppic = '';
$tglppic2 = '';
$tglit = '';
$tglppic3 = '';
$rawmatppic = '';
$weightconsumnppic = '';
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

mysqli_query($koneksi, "INSERT INTO itembc (part_no, part_name, customer, reason, pic, material_rmcode, rm_stock, rm_stockJ, rm_weight, weight_consum, rm_use, proces1, proces2, proces3, proces4, proces5, proces6, proces7, proces8, proces9, proces10, proces11, proces12, proces13, proces14, proces15, proces16, currency, unit_price, reason_price, part_stock, amalgamasi, part_stockJ, unit_length, item_pcs, std_packing, packing, ct, weight_part, weightconsumn, rawmatppic, dept, model, id_level, lampiran, keputusan, tglmkt, tgleng, tglppic2, tglspveng, tglqc, tglppic, tglgm, tglppic3, tglit, cutoffprod, cutoffsales) VALUES ('$part_no1','$part_name1','$customer1','$reason1','$pic','$material_rmcode1','$rm_stock1','$rm_stockJ1','$rm_weight1','$weight_consum1','$rm_use1','$proces1','$proces3','$proces5','$proces7','$proces9','$proces11','$proces13','$proces15','$proces17','$proces19','$proces21','$proces23','$proces25','$proces27','$proces29','$proces31','$currency1','$unit_price1','$reason_price1','$part_stock1','$amalgamasi1','$part_stockJ1','$unit_length1','$item_pcs1','$std_packing1','$packing1','$ct1','$weight_part1','$weightconsumnppic','$rawmatppic','$dept','$model','$level','$namaFile','$keputusan','$tglmkt','$tgleng','$tglppic2','$tglspveng','$tglqc','$tglppic','$tglgm','$tglppic3','$tglit','$cutoffprod1','$cutoffsales1')");

mysqli_query($koneksi, "INSERT INTO itemac (part_no, part_name, customer, reason, pic, material_rmcode, rm_stock, rm_stockJ, rm_weight, weight_consum, rm_use, proces1, proces2, proces3, proces4, proces5, proces6, proces7, proces8, proces9, proces10, proces11, proces12, proces13, proces14, proces15, proces16, currency, unit_price, reason_price, part_stock, amalgamasi, part_stockJ, unit_length, item_pcs, std_packing, packing, ct, weight_part, weightconsumn, rawmatppic, dept, model, id_level, lampiran, keputusan, tglmkt, tgleng, tglppic2, tglspveng, tglqc, tglppic, tglgm, tglppic3, tglit, cutoffprod, cutoffsales) VALUES ('$part_no2','$part_name2','$customer2','$reason1','$pic','$material_rmcode2','$rm_stock2','$rm_stockJ2','$rm_weight2','$weight_consum2','$rm_use2','$proces2','$proces4','$proces6','$proces8','$proces10','$proces12','$proces14','$proces16','$proces18','$proces20','$proces22','$proces24','$proces26','$proces28','$proces30','$proces32','$currency2','$unit_price2','$reason_price1','$part_stock2','$amalgamasi2','$part_stockJ2','$unit_length2','$item_pcs2','$std_packing2','$packing2','$ct2','$weight_part2','$weightconsumnppic','$rawmatppic','$dept','$model','$level','$namaFile','$keputusan','$tglmkt','$tgleng','$tglppic2','$tglspveng','$tglqc','$tglppic','$tglgm','$tglppic3','$tglit','$cutoffprod2','$cutoffsales2')");
echo "<script>window.alert('Data Berhasil di Input!');
                window.location='../user_tampil1.php'</script>";
