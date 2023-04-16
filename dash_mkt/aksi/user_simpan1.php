<?php
include('../../assets/config/koneksi.php');
require '../../vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
 
$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    }
 
    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
	for($i = 1;$i < count($sheetData);$i++)
	{
        $pic = $sheetData[$i]['1'];
        $dept = $sheetData[$i]['2'];
        $model = $sheetData[$i]['3'];
        $ItemCode = $sheetData[$i]['4'];
        $ItemName = $sheetData[$i]['5'];
        $SalesUnit = $sheetData[$i]['6'];
        $SalesUnitLength = $sheetData[$i]['7'];
        $currency = $sheetData[$i]['8'];
        $UnitPrice = $sheetData[$i]['9'];
        $ItemPcs = $sheetData[$i]['10'];
        $U_MIS_CustName = $sheetData[$i]['11'];
        $U_MIS_JenisItem = $sheetData[$i]['12'];
        $U_MIS_Diameter = $sheetData[$i]['13'];
        $U_MIS_Length = $sheetData[$i]['14'];
        $U_MIS_Spec = $sheetData[$i]['15'];
        $U_MIS_Packing = $sheetData[$i]['16'];
        $U_MIS_Proses1 = $sheetData[$i]['17'];
        $U_MIS_Proses2 = $sheetData[$i]['18'];
        $U_MIS_Proses3 = $sheetData[$i]['19'];
        $U_MIS_Proses4 = $sheetData[$i]['20'];
        $U_MIS_Proses5 = $sheetData[$i]['21'];
        $U_MIS_Proses6 = $sheetData[$i]['22'];
        $U_MIS_Proses7 = $sheetData[$i]['23'];
        $U_MIS_Proses8 = $sheetData[$i]['24'];
        $U_MIS_Proses9 = $sheetData[$i]['25'];
        $U_MIS_Proses10 = $sheetData[$i]['26'];
        $U_MIS_Proses11 = $sheetData[$i]['27'];
        $U_MIS_Proses12 = $sheetData[$i]['28'];
        $U_MIS_Proses13 = $sheetData[$i]['29'];
        $U_MIS_Proses14 = $sheetData[$i]['30'];
        $U_MIS_Proses15 = $sheetData[$i]['31'];
        $U_MIS_Proses16 = $sheetData[$i]['32'];
        $U_MIS_SubCont = $sheetData[$i]['33'];
        $U_MIS_ROSHFree = $sheetData[$i]['34'];
        $U_MIS_RawMat = $sheetData[$i]['35'];

        $level = 10;
        $keputusan = '';
        $namaFile = '';

        date_default_timezone_set('Asia/Jakarta');
        $tglmkt = date("Y-m-d H:i:s");

    mysqli_query($koneksi, "INSERT INTO newitem (ItemCode, ItemName, SalesUnit, SalesUnitLength, currency, UnitPrice, ItemPcs, U_MIS_CustName, U_MIS_JenisItem, U_MIS_Diameter, U_MIS_Length, U_MIS_Spec, U_MIS_Packing, U_MIS_Proses1, U_MIS_Proses2, U_MIS_Proses3, U_MIS_Proses4, U_MIS_Proses5, U_MIS_Proses6, U_MIS_Proses7, U_MIS_Proses8, U_MIS_Proses9, U_MIS_Proses10, U_MIS_Proses11, U_MIS_Proses12, U_MIS_Proses13, U_MIS_Proses14, U_MIS_Proses15, U_MIS_Proses16, U_MIS_Subcont, U_MIS_ROHSFree, U_MIS_RawMat, Lampiran, id_level,  keputusan, tglinputmkt, model, pic_mkt, mkt) VALUES ('$ItemCode', '$ItemName', '$SalesUnit', '$SalesUnitLength', '$currency', '$UnitPrice', '$ItemPcs', '$U_MIS_CustName', '$U_MIS_JenisItem', '$U_MIS_Diameter', '$U_MIS_Length', '$U_MIS_Spec', '$U_MIS_Packing', '$U_MIS_Proses1', '$U_MIS_Proses2', '$U_MIS_Proses3', '$U_MIS_Proses4', '$U_MIS_Proses5', '$U_MIS_Proses6', '$U_MIS_Proses7', '$U_MIS_Proses8', '$U_MIS_Proses9', '$U_MIS_Proses10', '$U_MIS_Proses11', '$U_MIS_Proses12', '$U_MIS_Proses13', '$U_MIS_Proses14', '$U_MIS_Proses15', '$U_MIS_Proses16', '$U_MIS_SubCont', '$U_MIS_ROSHFree', '$U_MIS_RawMat', '$namaFile', '$level', '$keputusan', '$tglmkt', '$model', '$pic', '$dept')");
    }
    echo "<script>window.alert('Data Berhasil di Input!');
            window.location='../view-data1'</script>";
}
