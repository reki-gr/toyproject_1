<?php

    function sqliSelect ($fromTable, $firstQuery="*", $whereColumn="1=1", $subQuery=null) {
        global $connect;

        $sql        = " SELECT {$firstQuery} FROM {$fromTable} WHERE {$whereColumn} {$subQuery} ";
        $result     = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        $row        = mysqli_fetch_assoc($result);
        
        return $row;
    }

    function sqliInsert ($insertTable, $setData) {
        global $connect;

        $sql        = " INSERT INTO {$insertTable} SET {$setData} ";
        print_r($sql);
        mysqli_query($connect, $sql) or die(mysqli_error($connect));
    }

    function sqliUpdate ($updateTable, $setData, $whereColumn) {
        global $connect;

        $sql        = " UPDATE {$updateTable} SET {$setData} WHERE {$whereColumn} ";

        mysqli_query($connect, $sql) or die(mysqli_error($connect));
    }

    function sqliPassword ($value) {
        global $connect;

        $sql        = " SELECT sha2('$value', 512) as password ";
        $result     = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        $row        = mysqli_fetch_assoc($result);

        return $row['password'];
    }

?>