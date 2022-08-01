<?php
    include('../lib/library_include.php');
    
    // 데이터 가공
    foreach($_POST as $key => $val) {
        $info[$key] = trim(updateSQ($val));
    }
    
    $info['user_phone'] = $info['user_phone_1']."-".$info['user_phone_2']."-".$info['user_phone_3'];
    $info['user_email'] = $info['user_email_1']."@".$info['user_email_2'];

    // 회원인증 체크
    if ($info['user_check'] == "화명동") {
        $userCheck = true;
    } else {
        $userCheck = false;
    }

    // DB 정보 삽입
    if ($userCheck) {
        $db = sqliInsert("tbl_member_list",
            "
              user_id           = '".$info['user_id']."'
            , user_password     = '".sqliPassword($info['user_password'])."'
            , user_name         = '".$info['user_name']."'
            , user_email        = '".$info['user_email']."'
            , user_phone        = '".$info['user_phone']."'
            , user_check        = '".$userCheck."'
            , date_signup       = NOW()
            , date_recent_login = NOW()
            "
        );

        alertMsg("회원가입이 완료되었습니다.", "/main/main.php");
    } else {
        alertMsg("정상적인 방법으로 가입해주세요.");
    }
?>