<?php
include('../../assets/config/koneksi.php');
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xls;

$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if (isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {

    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);

    if ('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    }

    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);

    $sheetData = $spreadsheet->getActiveSheet()->toArray();
    for ($i = 1; $i < count($sheetData); $i++) {
        $pic = $sheetData[$i]['1'];
        $dept = $sheetData[$i]['2'];
        $customer = $sheetData[$i]['3'];
        $model = $sheetData[$i]['4'];
        $cutoffprod = $sheetData[$i]['5'];
        $cutoffsales = $sheetData[$i]['6'];
        $part_no1 = $sheetData[$i]['7'];
        $part_name1 = $sheetData[$i]['8'];
        $customer1 = $sheetData[$i]['9'];
        $reason1 = $sheetData[$i]['10'];
        $pic1 = $sheetData[$i]['11'];
        $material_rmcode1 = $sheetData[$i]['12'];
        $rm_stock1 = $sheetData[$i]['13'];
        $rm_stockJ1 = $sheetData[$i]['14'];
        $rm_weight1 = $sheetData[$i]['15'];
        $weight_consum1 = $sheetData[$i]['16'];
        $rm_use1 = $sheetData[$i]['17'];
        $proces1bc = $sheetData[$i]['18'];
        $proces2bc = $sheetData[$i]['19'];
        $proces3bc = $sheetData[$i]['20'];
        $proces4bc = $sheetData[$i]['21'];
        $proces5bc = $sheetData[$i]['22'];
        $proces6bc = $sheetData[$i]['23'];
        $proces7bc = $sheetData[$i]['24'];
        $proces8bc = $sheetData[$i]['25'];
        $proces9bc = $sheetData[$i]['26'];
        $proces10bc = $sheetData[$i]['27'];
        $proces11bc = $sheetData[$i]['28'];
        $proces12bc = $sheetData[$i]['29'];
        $proces13bc = $sheetData[$i]['30'];
        $proces14bc = $sheetData[$i]['31'];
        $proces15bc = $sheetData[$i]['32'];
        $proces16bc = $sheetData[$i]['33'];
        $currency1 = $sheetData[$i]['34'];
        $unit_price1 = $sheetData[$i]['35'];
        $reason_price1 = $sheetData[$i]['36'];
        $part_stock1 = $sheetData[$i]['37'];
        $amalgamasi1 = $sheetData[$i]['38'];
        $part_stockJ1 = $sheetData[$i]['39'];
        $unit_length1 = $sheetData[$i]['40'];
        $item_pcs1 = $sheetData[$i]['41'];
        $std_packing1 = $sheetData[$i]['42'];
        $packing1 = $sheetData[$i]['43'];
        $ct1 = $sheetData[$i]['44'];
        $weight_part1 = $sheetData[$i]['45'];
        $part_no2 = $sheetData[$i]['46'];
        $part_name2 = $sheetData[$i]['47'];
        $customer2 = $sheetData[$i]['48'];
        $reason2 = $sheetData[$i]['49'];
        $pic2 = $sheetData[$i]['50'];
        $material_rmcode2 = $sheetData[$i]['51'];
        $rm_stock2 = $sheetData[$i]['52'];
        $rm_stockJ2 = $sheetData[$i]['53'];
        $rm_weight2 = $sheetData[$i]['54'];
        $weight_consum2 = $sheetData[$i]['55'];
        $rm_use2 = $sheetData[$i]['56'];
        $proces1ac = $sheetData[$i]['57'];
        $proces2ac = $sheetData[$i]['58'];
        $proces3ac = $sheetData[$i]['59'];
        $proces4ac = $sheetData[$i]['60'];
        $proces5ac = $sheetData[$i]['61'];
        $proces6ac = $sheetData[$i]['62'];
        $proces7ac = $sheetData[$i]['63'];
        $proces8ac = $sheetData[$i]['64'];
        $proces9ac = $sheetData[$i]['65'];
        $proces10ac = $sheetData[$i]['66'];
        $proces11ac = $sheetData[$i]['67'];
        $proces12ac = $sheetData[$i]['68'];
        $proces13ac = $sheetData[$i]['69'];
        $proces14ac = $sheetData[$i]['70'];
        $proces15ac = $sheetData[$i]['71'];
        $proces16ac = $sheetData[$i]['72'];
        $currency2 = $sheetData[$i]['73'];
        $unit_price2 = $sheetData[$i]['74'];
        $reason_price2 = $sheetData[$i]['75'];
        $part_stock2 = $sheetData[$i]['76'];
        $amalgamasi2 = $sheetData[$i]['77'];
        $part_stockJ2 = $sheetData[$i]['78'];
        $unit_length2 = $sheetData[$i]['79'];
        $item_pcs2 = $sheetData[$i]['80'];
        $std_packing2 = $sheetData[$i]['81'];
        $packing2 = $sheetData[$i]['82'];
        $ct2 = $sheetData[$i]['83'];
        $weight_part2 = $sheetData[$i]['84'];

        $level = 9;
        $keputusan = '';
        $tglppic2 = '';
        $tglspveng = '';
        $tgleng = '';
        $tglqc = '';
        $tglgm = '';
        $tglppic = '';
        $tglit = '';
        $tglppic3 = '';
        $rawmatppic = '';
        $weightconsumnppic = '';
        $namaFile = '';

        date_default_timezone_set('Asia/Jakarta');
        $tglmkt = date("Y-m-d H:i:s");

        mysqli_query($koneksi, "INSERT INTO itembc (pic1,part_no, part_name, customer, reason, pic, material_rmcode, rm_stock, rm_stockJ, rm_weight, weight_consum, rm_use, proces1, proces2, proces3, proces4, proces5, proces6, proces7, proces8, proces9, proces10, proces11, proces12, proces13, proces14, proces15, proces16, currency, unit_price, reason_price, part_stock, amalgamasi, part_stockJ, unit_length, item_pcs, std_packing, packing, ct, weight_part, weightconsumn, rawmatppic, dept, model, id_level, lampiran, keputusan, tglmkt, tgleng, tglppic2, tglspveng, tglqc, tglppic, tglgm, tglppic3, tglit, cutoffprod, cutoffsales) VALUES ('$pic1','$part_no1','$part_name1','$customer1','$reason1','$pic','$material_rmcode1','$rm_stock1','$rm_stockJ1','$rm_weight1','$weight_consum1','$rm_use1','$proces1bc','$proces2bc','$proces3bc','$proces4bc','$proces5bc','$proces6bc','$proces7bc','$proces8bc','$proces9bc','$proces10bc','$proces11bc','$proces12bc','$proces13bc','$proces14bc','$proces15bc','$proces16bc','$currency1','$unit_price1','$reason_price1','$part_stock1','$amalgamasi1','$part_stockJ1','$unit_length1','$item_pcs1','$std_packing1','$packing1','$ct1','$weight_part1','$weightconsumnppic','$rawmatppic','$dept','$model','$level','$namaFile','$keputusan','$tglmkt','$tgleng','$tglppic2','$tglspveng','$tglqc','$tglppic','$tglgm','$tglppic3','$tglit','$cutoffprod','$cutoffsales')");

        mysqli_query($koneksi, "INSERT INTO itemac (pic1,part_no, part_name, customer, reason, pic, material_rmcode, rm_stock, rm_stockJ, rm_weight, weight_consum, rm_use, proces1, proces2, proces3, proces4, proces5, proces6, proces7, proces8, proces9, proces10, proces11, proces12, proces13, proces14, proces15, proces16, currency, unit_price, reason_price, part_stock, amalgamasi, part_stockJ, unit_length, item_pcs, std_packing, packing, ct, weight_part, weightconsumn, rawmatppic, dept, model, id_level, lampiran, keputusan, tglmkt, tgleng, tglppic2, tglspveng, tglqc, tglppic, tglgm, tglppic3, tglit, cutoffprod, cutoffsales) VALUES ('$pic1','$part_no2','$part_name2','$customer2','$reason1','$pic','$material_rmcode2','$rm_stock2','$rm_stockJ2','$rm_weight2','$weight_consum2','$rm_use2','$proces1ac','$proces2ac','$proces3ac','$proces4ac','$proces5ac','$proces6ac','$proces7ac','$proces8ac','$proces9ac','$proces10ac','$proces11ac','$proces12ac','$proces13ac','$proces14ac','$proces15ac','$proces16ac','$currency2','$unit_price2','$reason_price1','$part_stock2','$amalgamasi2','$part_stockJ2','$unit_length2','$item_pcs2','$std_packing2','$packing2','$ct2','$weight_part2','$weightconsumnppic','$rawmatppic','$dept','$model','$level','$namaFile','$keputusan','$tglmkt','$tgleng','$tglppic2','$tglspveng','$tglqc','$tglppic','$tglgm','$tglppic3','$tglit','$cutoffprod','$cutoffsales')");
    }
    echo "<script>window.alert('Data Berhasil di Input!');
            window.location='../view-data1'</script>";
}
