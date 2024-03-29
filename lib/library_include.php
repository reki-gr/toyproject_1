<?php
    // echo "Utility";
    
    $mysqli_host = "localhost";
    $mysqli_user = "root";
    $mysqli_password = "";
    $mysqli_db = "reki";

    $connect = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_password, $mysqli_db);
    mysqli_set_charset($connect, 'utf8mb4');
    $GLOBALS["connect"];
    include('../lib/mysql_utility.php');

    // MySQL Injection Block
    function updateSQ($textToFilter) {
        //a = &#97;
        //e = &#101;
        //i = &#105;
        //o = &#111;
        //u  = &#117;

        //A = &#65;
        //E = &#69;
        //I = &#73;
        //O = &#79;
        //U = &#85;
        if ($textToFilter != null) {
            $textToFilter = str_replace('insert '	,'ins&#101rt ',$textToFilter);
            $textToFilter = str_replace('select '	,'s&#101lect ',$textToFilter);
            $textToFilter = str_replace('values'	,' valu&#101s',$textToFilter);
            $textToFilter = str_replace(' where '	,' wher&#101 ',$textToFilter);
            $textToFilter = str_replace(' order '	,' ord&#101r ',$textToFilter);
            $textToFilter = str_replace(' into '	,' int&#111 ',$textToFilter);
            $textToFilter = str_replace('drop '		,'dr&#111p ',$textToFilter);
            $textToFilter = str_replace('delete '	,'delet&#101 ',$textToFilter);
            $textToFilter = str_replace('update '	,'updat&#101 ',$textToFilter);
            $textToFilter = str_replace(' set'		,' s&#101t',$textToFilter);
            $textToFilter = str_replace('flush'		,'fl&#117sh',$textToFilter);
            $textToFilter = str_replace("'","&#39",$textToFilter);
            $textToFilter = str_replace('"',"&#34",$textToFilter);
            $textToFilter = str_replace('>',"&gt;",$textToFilter);
            $textToFilter = str_replace('<',"&lt;",$textToFilter);
            $textToFilter = str_replace('script','scr&#105pt',$textToFilter);
        //	$textToFilter = nl2br($textToFilter);
            $filterInputOutput = $textToFilter;
            return trim($filterInputOutput);
        }

    }

    // 이메일 도메인
    function emailDomain ($inputName, $inputId=false, $inputClass=false) {
        $domain         = ['선택', 'naver.com', 'gmail.com', 'hanmail.net', '직접입력'];
        $domainValue    = ['', 'naver.com', 'gmail.com', 'hanmail.net', 'direct'];

        $selectBox = '<select name="'.$inputName.'" id="'.$inputId.'" class="'.$inputClass.'" onchange="emailDirectInput();">';
        for($i = 0; $i < count($domain); $i++) {
                $selectBox .= ' <option value="'.$domainValue[$i].'">'.$domain[$i].'</option>';
        }
        $selectBox .= '</select>';

        return $selectBox;
    }

    // 휴대폰 앞자리
    function firstMobileNumber ($inputName, $inputId=false, $inputClass=false) {
        $mobileNumber = ['010', '011', '016', '017', '019'];

        $selectBox = '<select name="'.$inputName.'" id="'.$inputId.'" class="'.$inputClass.'">';
        for($i = 0; $i < count($mobileNumber); $i++) {
            $selectBox .= ' <option value='.$mobileNumber[$i].'>'.$mobileNumber[$i].'</option> ';
        }
        $selectBox .= '</select>';

        return $selectBox;
    }

    // PHP 경고창 + 헤더 로케이션
    function alertMsg($msg, $url="") {
        global $HTTP_REFERER, $g_dir, $g_homepage_index;
    
        if ($url == "")
        {
            $url_go = "history.go(-1)";
        }
        elseif ($url == "close"){
         $url_go = "window.close()";
        }
    
        else{
            $url_go = "document.location.href = '$url'";
        }
    
        if ($msg != "")
            echo "<script language='javascript'>alert('$msg');$url_go;</script>";
        else
            echo "<script language='javascript'>$url_go;</script>";
        exit;
    }
?>
