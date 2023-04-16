<?php
include "../../assets/config/koneksi.php";

// $ItemCode = $_POST['a'];
// $ItemName = $_POST['b'];
// $ForeignName = '';
// $ItemsGroupCode = '';
// $SalesVAT = '';
// $Vat = '';
// $PurchaseItem = '';
// $SalesItem = '';
// $InventoryItem = '';
// $SalesUnit = $_POST['c'];
// $SalesUnitLength = $_POST['d'];
$SalesUnitWeight = $_POST['ab'];
// $PurchaseVat = '';
// $DefaultWarehouse = '';
// $GLMethod = '';
// $ManageStockWHS = '';
// $WTLiable = '';
// $IssueMethod = '';
// $InventoryUOM = '';
// $PlanningSystem = '';
// $ProcurementMethod = '';
// $ComponentWarehouse = '';
// $InCosRollup = '';
// $ItemPcs = $_POST['e'];
// $UnitPrice = $_POST['f'];
// $RMWeightConsume = '';
// $U_MIS_CustCode = '';
// $U_MIS_CustName = $_POST['g'];
// $U_MIS_JenisItem = $_POST['h'];
// $U_MIS_Diameter = $_POST['i'];
// $U_MIS_Length = $_POST['j'];
// $U_MIS_Spec = $_POST['k'];
$U_MIS_StdPacking = $_POST['ac'];
// $U_MIS_NextProses = '';
// $U_MIS_Packing = $_POST['l'];
// $U_MIS_Proses = '';
// $U_MIS_Proses1 = $_POST['m'];
// $U_MIS_Proses2 = $_POST['n'];
// $U_MIS_Proses3 = $_POST['o'];
// $U_MIS_Proses4 = $_POST['p'];
// $U_MIS_Proses5 = $_POST['q'];
// $U_MIS_Proses6 = $_POST['r'];
// $U_MIS_Proses7 = $_POST['s'];
// $U_MIS_Proses8 = $_POST['t'];
// $U_MIS_Proses9 = $_POST['u'];
// $U_MIS_Proses10 = $_POST['v'];
// $U_MIS_Proses11 = $_POST['w'];
// $U_MIS_Proses12 = $_POST['x'];
// $U_MIS_SubCont = $_POST['y'];
// $U_MIS_ROSHFree = $_POST['z'];
// $U_MIS_RawMat = $_POST['aa'];
$U_MIS_CycleTime = $_POST['ad'];
// $U_MIS_BackNo = '';
$level = 9;
$keputusan = $_POST['ae'];
// $pic = $_POST['ma'];
// $dept = $_POST['mb'];
// $tglmkt = $_POST['mc'];
// $model = $_POST['md'];
$nbeng = $_POST['nb'];
// $nbqc = '';
// $nbgm = '';
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
$tgl = date("Y-m-d H:i:s");

mysqli_query($koneksi, "UPDATE newitem SET SalesUnitWeight ='$SalesUnitWeight', U_MIS_StdPacking ='$U_MIS_StdPacking', U_MIS_CycleTime ='$U_MIS_CycleTime', tglinputeng='$tgl', id_level='$level', catatan_eng='$nbeng', keputusan='$keputusan' WHERE id = '$_POST[id]'");
echo "<script>window.alert('Data Berhasil di Update!');
                window.location='../view-data'</script>";
