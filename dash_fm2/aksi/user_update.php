<?php
    error_reporting(1);
    include "../../assets/config/koneksi.php";

    $part_no1 = $_POST['a1']; $part_no2 = $_POST['a2'];
    $part_name1 = $_POST['b1']; $part_name2 = $_POST['b2'];
    $customer1 = $_POST['c1']; $customer2 = $_POST['c2'];
    $reason1 = $_POST['d1']; $reason2 = $_POST['d1'];
    $pic1 = $_POST['e1']; $pic2 = $_POST['e1'];
    $material_rmcode1 = $_POST['f1']; $material_rmcode2 = $_POST['f2'];
    $rm_stock1 = $_POST['g1']; $rm_stock2 = $_POST['g2'];
    $rm_stockJ1 = $_POST['h1']; $rm_stockJ2 = $_POST['h2'];
    $rm_weight1 = $_POST['i1'];  $rm_weight2 = $_POST['i2'];
    $weight_consum1 = $_POST['j1']; $weight_consum2 = $_POST['j2'];
    $rm_use1 = $_POST['k1']; $rm_use2 = $_POST['k2'];
    $proces1 = $_POST['l1'];
    $unit_price1 = $_POST['m1']; $unit_price2 = $_POST['m2'];
    $currency1 = $_POST['mm1']; $currency2 = $_POST['mm2'];
    $reason_price1 = $_POST['n1']; $reason_price2 = $_POST['n1'];
    $part_stock1 = $_POST['o1']; $part_stock2 = $_POST['o2'];
    $amalgamasi1 = $_POST['p1']; $amalgamasi2 = $_POST['p2'];
    $part_stockJ1 = $_POST['q1']; $part_stockJ2 = $_POST['q2'];
    $unit_length1 = $_POST['r1']; $unit_length2 = $_POST['r2'];
    $item_pcs1 = $_POST['s1']; $item_pcs2 = $_POST['s2'];
    $std_packing1 = $_POST['t1']; $std_packing2 = $_POST['t2'];
    $packing1 = $_POST['t3']; $packing2 = $_POST['t4'];
    $ct1 = $_POST['v1']; $ct2 = $_POST['v2'];
    $weight_part1 = $_POST['w1']; $weight_part2 = $_POST['w2'];
    $cutoffprod1 = $_POST['x1']; $cutoffprod2 = $_POST['x1'];
    $cutoffsales1 = $_POST['x2']; $cutoffsales2 = $_POST['x2'];
    // $part_stockJ1 = $_POST['q1']; $part_stockJ2 = $_POST['q2'];
    $keputusan = $_POST['ae'];
    if($keputusan=='Selesai'){
        $level=2;
    } elseif($keputusan=='Gagal'){
        $level=99;
    } else {
        $level=3;
    }
    $pic = $_POST['ea'];
    $dept = $_POST['eb'];
    $tgleng = $_POST['ec'];
    $model = $_POST['ed'];
    $tglspveng = $tgl;
    $tglqc = '';
    $tglgm = '';
    $tglppic = '';
    // $currency = $_POST['cry'];


	$namaFile = $_FILES['lampiran']['name'];
	$x = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($x));
	$ukuranFile	= $_FILES['lampiran']['size'];
	$file_tmp = $_FILES['lampiran']['tmp_name'];

	// Lokasi Penempatan file
	$dirUpload = "filemasters/";
	$linkBerkas = $dirUpload.$namaFile;

	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkBerkas);
    

    date_default_timezone_set('Asia/Jakarta');
    $tgl = date("Y-m-d");
    $time = date("G:i:s");
    // var_dump($_POST['id']);

    mysqli_query($koneksi, "UPDATE itembc a INNER JOIN itemac c ON a.id = c.id SET a.part_no = '$part_no1', 
                                                                                   a.part_name = '$part_name1',
                                                                                   a.customer = '$customer1', 
                                                                                   a.reason = '$reason1', 
                                                                                   a.material_rmcode = '$material_rmcode1',
                                                                                   a.rm_stock = '$rm_stock1', 
                                                                                   a.rm_stockJ = '$rm_stockJ1',
                                                                                   a.rm_weight = '$rm_weight1', 
                                                                                   a.weight_consum = '$weight_consum1', 
                                                                                   a.rm_use = '$rm_use1', 
                                                                                   a.currency = '$currency1',
                                                                                   a.unit_price = '$unit_price1', 
                                                                                   a.reason_price = '$reason_price1',
                                                                                   a.part_stock = '$part_stock1', 
                                                                                   a.amalgamasi = '$amalgamasi1', 
                                                                                   a.part_stockJ = '$part_stockJ1', 
                                                                                   a.unit_length = '$unit_length1', 
                                                                                   a.item_pcs = '$item_pcs1',
                                                                                   a.std_packing = '$std_packing1', 
                                                                                   a.packing = '$packing1',
                                                                                   a.ct = '$ct1', 
                                                                                   a.weight_part = '$weight_part1', 
                                                                                   a.cutoffprod = '$cutoffprod1', 
                                                                                   a.cutoffsales = '$cutoffsales1', 
                                                                                   a.keputusan = '$keputusan',
                                                                                   a.id_level = '$level',
                                                                                   c.part_no = '$part_no2', 
                                                                                   c.part_name = '$part_name2',
                                                                                   c.customer = '$customer2', 
                                                                                   c.reason = '$reason2', 
                                                                                   c.material_rmcode = '$material_rmcode2',
                                                                                   c.rm_stock = '$rm_stock2', 
                                                                                   c.rm_stockJ = '$rm_stockJ2',
                                                                                   c.rm_weight = '$rm_weight2', 
                                                                                   c.weight_consum = '$weight_consum2', 
                                                                                   c.rm_use = '$rm_use2', 
                                                                                   c.currency = '$currency2',
                                                                                   c.unit_price = '$unit_price2', 
                                                                                   c.reason_price = '$reason_price2',
                                                                                   c.part_stock = '$part_stock2', 
                                                                                   c.amalgamasi = '$amalgamasi2', 
                                                                                   c.part_stockJ = '$part_stockJ2', 
                                                                                   c.unit_length = '$unit_length2', 
                                                                                   c.item_pcs = '$item_pcs2',
                                                                                   c.std_packing = '$std_packing2', 
                                                                                   c.packing = '$packing2', 
                                                                                   c.ct = '$ct2', 
                                                                                   c.weight_part = '$weight_part2', 
                                                                                   c.cutoffprod = '$cutoffprod2', 
                                                                                   c.cutoffsales = '$cutoffsales2', 
                                                                                   c.keputusan = '$keputusan',
                                                                                   c.id_level = '$level'
                                                                                   WHERE a.id = '$_POST[id]' AND c.id = '$_POST[id]'");
        echo "<script>window.alert('Data Berhasil di Input!');
                window.location='../view-data'</script>";
       