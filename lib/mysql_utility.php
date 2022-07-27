<?php

    function mysqliSelect ($fromTable, $firstQuery="*", $whereColumn="1=1", $subQuery=null) {
        global $connect;

        $sql        = " SELECT {$firstQuery} FROM {$fromTable} WHERE {$whereColumn} {$subQuery} ";
        print_r($sql);
        $result     = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        $row        = mysqli_fetch_assoc($result);
        
        return $row;
    }

    function mysqliInsert ($insertTable, $setData) {
        global $connect;

        $sql        = " INSERT INTO {$insertTable} SET {$setData} ";
        print_r($sql);
        mysqli_query($connect, $sql) or die(mysqli_error($connect));
    }

    function mysqliUpdate ($updateTable, $setData, $whereColumn) {
        global $connect;

        $sql        = " UPDATE {$updateTable} SET {$setData} WHERE {$whereColumn} ";

        mysqli_query($connect, $sql) or die(mysqli_error($connect));
    }

?>