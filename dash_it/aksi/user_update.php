<?php
include "../../assets/config/koneksi.php";

$ItemCode = $_POST['a'];
$ItemName = $_POST['b'];
$SalesUnit = $_POST['c'];
$SalesUnitLength = $_POST['d'];
$ItemPcs = $_POST['e'];
$UnitPrice = $_POST['f'];
$U_MIS_CustName = $_POST['g'];
$U_MIS_JenisItem = $_POST['h'];
$U_MIS_Diameter = $_POST['i'];
$U_MIS_Length = $_POST['j'];
$U_MIS_Spec = $_POST['k'];
$U_MIS_Packing = $_POST['l'];
$U_MIS_Proses1 = $_POST['m'];
$U_MIS_Proses2 = $_POST['n'];
$U_MIS_Proses3 = $_POST['o'];
$U_MIS_Proses4 = $_POST['p'];
$U_MIS_Proses5 = $_POST['q'];
$U_MIS_Proses6 = $_POST['r'];
$U_MIS_Proses7 = $_POST['s'];
$U_MIS_Proses8 = $_POST['t'];
$U_MIS_Proses9 = $_POST['u'];
$U_MIS_Proses10 = $_POST['v'];
$U_MIS_Proses11 = $_POST['w'];
$U_MIS_Proses12 = $_POST['x'];
$U_MIS_Proses13 = $_POST['bb'];
$U_MIS_Proses14 = $_POST['bc'];
$U_MIS_Proses15 = $_POST['bd'];
$U_MIS_Proses16 = $_POST['be'];
$U_MIS_SubCont = $_POST['y'];
$U_MIS_ROSHFree = $_POST['z'];
$U_MIS_RawMat = $_POST['aa'];
$SalesUnitWeight = $_POST['ab'];
$U_MIS_StdPacking = $_POST['ac'];
$U_MIS_CycleTime = $_POST['ad'];
$RMWeightConsume = $_POST['aw'];
$ForeignName = '';
$ItemsGroupCode = '';
$SalesVAT = '';
$Vat = '';
$PurchaseItem = '';
$SalesItem = '';
$InventoryItem = '';
$PurchaseVat = '';
$DefaultWarehouse = '';
$GLMethod = '';
$ManageStockWHS = '';
$WTLiable = '';
$IssueMethod = '';
$InventoryUOM = '';
$PlanningSystem = '';
$ProcurementMethod = '';
$ComponentWarehouse = '';
$InCosRollup = '';
$U_MIS_CustCode = '';
$U_MIS_NextProses = '';
$U_MIS_Proses = '';
$U_MIS_BackNo = '';
$currency = $_POST['cry'];
$level = 2;
$keputusan = $_POST['as'];
$rawmatppic = $_POST['ax'];
// $pic = $_POST['ma'];
// $dept = $_POST['mb'];
// $tglmkt = $_POST['mc'];
// $model = $_POST['md'];
// $nbeng = $_POST['nb'];
// $nbqc = $_POST['nqc'];
// $nbgm = $_POST['ngm'];
// $nbmasbambang = '';

// $namaFile = $_FILES['lampiran']['name'];
// $x = explode('.', $namaFile);
// $ekstensiFile = strtolower(end($x));
// $ukuranFile    = $_FILES['lampiran']['size'];
// $file_tmp = $_FILES['lampiran']['tmp_name'];

// // Lokasi Penempatan file
// $dirUpload = "filemasters/";
// $linkBerkas = $dirUpload . $namaFile;

// // Menyimpan file
// $terupload = move_uploaded_file($file_tmp, $linkBerkas);

date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d");
$time = date("G:i:s");

mysqli_query($koneksi, "UPDATE newitem SET keputusan='$keputusan', 
                                           ItemCode = '$ItemCode', 
                                           ItemName = '$ItemName',
                                           SalesUnit = '$SalesUnit', 
                                           currency = '$currency', 
                                           SalesUnitLength = '$SalesUnitLength',
                                           ItemPcs = '$ItemPcs', 
                                           UnitPrice = '$UnitPrice',
                                           U_MIS_CustName = '$U_MIS_CustName', 
                                           U_MIS_JenisItem = '$U_MIS_JenisItem', 
                                           U_MIS_Diameter = '$U_MIS_Diameter', 
                                           U_MIS_Length = '$U_MIS_Length',
                                           U_MIS_Spec = '$U_MIS_Spec', 
                                           U_MIS_Packing = '$U_MIS_Packing',
                                           U_MIS_Proses1 = '$U_MIS_Proses1',
                                           U_MIS_Proses2 = '$U_MIS_Proses2',
                                           U_MIS_Proses3 = '$U_MIS_Proses3',
                                           U_MIS_Proses4 = '$U_MIS_Proses4',
                                           U_MIS_Proses5 = '$U_MIS_Proses5',
                                           U_MIS_Proses6 = '$U_MIS_Proses6',
                                           U_MIS_Proses7 = '$U_MIS_Proses7',
                                           U_MIS_Proses8 = '$U_MIS_Proses8',
                                           U_MIS_Proses9 = '$U_MIS_Proses9',
                                           U_MIS_Proses10 = '$U_MIS_Proses10',
                                           U_MIS_Proses11 = '$U_MIS_Proses11',
                                           U_MIS_Proses12 = '$U_MIS_Proses12',
                                           U_MIS_Proses13 = '$U_MIS_Proses13',
                                           U_MIS_Proses14 = '$U_MIS_Proses14',
                                           U_MIS_Proses15 = '$U_MIS_Proses15',
                                           U_MIS_Proses16 = '$U_MIS_Proses16', 
                                           U_MIS_SubCont = '$U_MIS_SubCont', 
                                           U_MIS_ROHSFree = '$U_MIS_ROSHFree', 
                                           U_MIS_RawMat = '$U_MIS_RawMat', 
                                           rawmatppic = '$rawmatppic', 
                                           SalesUnitWeight = '$SalesUnitWeight',
                                           U_MIS_StdPacking = '$U_MIS_StdPacking', 
                                           U_MIS_CycleTime = '$U_MIS_CycleTime', 
                                           RMWeightConsume = '$RMWeightConsume', 
                                           id_level = '$level'
                                           WHERE id = '$_POST[id]'");
echo "<script>window.alert('Data Berhasil di Update!');
                window.location='../view-data'</script>";
