<?php
    include('../lib/library_include.php');
    
    foreach($_POST as $key => $val) {
        $info[$key] = updateSQ($val);
    }
    // print_r($info)."<br>";
    $info['user_phone'] = $info['user_phone_1']."-".$info['user_phone_2']."-".$info['user_phone_3'];
    $info['user_email'] = $info['user_email_1']."@".$info['user_email_2'];
    if ($info['user_check'] == "화명동") {
        $info['user_check'] = true;
    } else {
        // $info['user_check'] = false;
        exit;
    }

    if($info[''])

    $db = sqliInsert("tbl_member_list",
        "
          user_id           = '".$info['user_id']."'
        , user_password     = '".sqliPassword($info['user_password'])."'
        , user_name         = '".$info['user_name']."'
        , user_email        = '".$info['user_email']."'
        , user_phone        = '".$info['user_phone']."'
        , user_check        = '".$info['user_check']."'
        , date_signup       = NOW()
        , date_recent_login = NOW()
        "
    );

    if ($db) {
        echo '
        <script>
            alert("회원가입이 완료되었습니다.");
            location.href="/main/main.php";
        </script>
        ';
    } else {
        echo '
        <sctipt>
            alert("정상적인 방법으로 가입해주세요.");
            location.href="/sign/sign_up.php";
        </sctipt>
        ';
    }

?>