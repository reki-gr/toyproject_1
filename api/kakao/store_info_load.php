<?
    include $_SERVER["DOCUMENT_ROOT"]."/lib/library_include.php";

    $currentPosition = updateSQ($_GET['current_position']);

    // if(empty($currentPosition)) {
    //     $addQueryStr = " AND  "
    // }

    $infoSql = " SELECT * FROM info_store WHERE 1=1 ";
    $infoResult = mysqli_query($connect, $infoSql);
    $storeInfo = [];
    while($infoRow = mysqli_fetch_assoc($infoResult)) {
        array_push($storeInfo, $infoRow);
    }

    printf(json_encode($storeInfo));
    exit;
?>