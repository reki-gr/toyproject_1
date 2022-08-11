<?php
    include $_SERVER["DOCUMENT_ROOT"].'/lib/library_include.php';

    // 데이터 가공
    foreach($_POST as $key => $val) {
        ${$key} = $val;
    }

    $db = sqlSelect("tbl_member_list", $user_id);
    
    if (!empty($user_id) && !empty($user_password)) {
    }
?>
