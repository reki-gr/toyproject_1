<?php
    include('../lib/library_include.php');
    
    foreach($_POST as $key => $val) {
        $info[$key] = updateSQ($val);
    }

    // print_r($info);
    foreach($info as $key => $val) {
        $user = $key. " = " . $val . ", ";
    }

    $sql = mysqliInsert(
        "tbl_member",
        foreach ($variable as $key => $value) {
            # code...
        }
    );

?>