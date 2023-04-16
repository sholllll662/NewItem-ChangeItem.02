<?php
// Koneksi ke database
$servername = "sapbi2";
$database = "SBO_NSI_USD_LIVE";
$uid = "sa";
$pass = "P@ssw0rd";

$connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
];

$conn = sqlsrv_connect($servername, $connection);

if (!$conn)
    die(print_r(sqlsrv_errors(), true));

// Mengambil data dari database berdasarkan Item Code yang dikirimkan melalui parameter GET
$itemCode = $_GET["itemCode"];
// $tsql = "SELECT * FROM OITM WHERE [ItemCode] = ?";
$tsql = "SELECT DISTINCT T0.[ItemCode] as 'Part No', 
T0.[ItemName], 
T0.[U_MIS_CustName], 
T0.[U_MIS_RawMat], 
T2.[Code], 
T0.[U_MIS_ItemWeight], 
T2.[Quantity], 
T2.[Warehouse], 
T0.[U_MIS_Proses1], 
T0.[U_MIS_Proses2], 
T0.[U_MIS_Proses3], 
T0.[U_MIS_Proses4], 
T0.[U_MIS_Proses5], 
T0.[U_MIS_Proses6], 
T0.[U_MIS_Proses7], 
T0.[U_MIS_Proses8], 
T0.[U_MIS_Proses9], 
T0.[U_MIS_Proses10], 
T0.[U_MIS_Proses11], 
T0.[U_U_MIS_Proses12], 
T3.[Currency], 
T3.[Price], 
T0.[SLength1], 
T0.[SWeight1], 
T0.[U_MIS_PiecePerBar], 
T0.[U_MIS_StdPacking], 
T0.[U_MIS_Packing], 
T0.[U_MIS_CycleTime] 
FROM OITM T0  INNER JOIN OITT T1 ON T0.[ItemCode] = T1.[Code] 
INNER JOIN ITT1 T2 ON T1.[Code] = T2.[Father] 
INNER JOIN ITM1 T3 ON T0.[ItemCode] = T3.[ItemCode] 

WHERE (T0.[ItmsGrpCod] = 110 or
T0.[ItmsGrpCod]=111)
and
T3.PriceList = 1
AND T3.PriceList = 1
AND T0.[ItemCode] = ?
ORDER BY T0.[ItemCode]";
$params = array($itemCode);
$stmt = sqlsrv_query($conn, $tsql, $params);

if ($stmt == false) {
    echo 'Error';
}

// Mengirimkan data dalam format JSON
if ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $data = array(
        "ItemName" => $obj["ItemName"],
        "U_MIS_CustName" => $obj["U_MIS_CustName"],
        "U_MIS_RawMat" => $obj["U_MIS_RawMat"],
        "U_MIS_ItemWeight" => $obj["U_MIS_ItemWeight"],
        "U_MIS_Proses1" => $obj["U_MIS_Proses1"],
        "U_MIS_Proses2" => $obj["U_MIS_Proses2"],
        "U_MIS_Proses3" => $obj["U_MIS_Proses3"],
        "U_MIS_Proses4" => $obj["U_MIS_Proses4"],
        "U_MIS_Proses5" => $obj["U_MIS_Proses5"],
        "U_MIS_Proses6" => $obj["U_MIS_Proses6"],
        "U_MIS_Proses7" => $obj["U_MIS_Proses7"],
        "U_MIS_Proses8" => $obj["U_MIS_Proses8"],
        "U_MIS_Proses9" => $obj["U_MIS_Proses9"],
        "U_MIS_Proses10" => $obj["U_MIS_Proses10"],
        "U_MIS_Proses11" => $obj["U_MIS_Proses11"],
        "U_U_MIS_Proses12" => $obj["U_U_MIS_Proses12"],
        "Currency" => $obj["Currency"],
        "Price" => $obj["Price"],
        "U_MIS_StdPacking" => $obj["U_MIS_StdPacking"],
        "U_MIS_Packing" => $obj["U_MIS_Packing"],
        "SLength1" => $obj["SLength1"],
        "U_MIS_PiecePerBar" => $obj["U_MIS_PiecePerBar"],
        "U_MIS_CycleTime" => $obj["U_MIS_CycleTime"],
        "SWeight1" => $obj["SWeight1"],
    );
    echo json_encode($data);
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
