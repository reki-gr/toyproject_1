<?php
    echo "Utility";
    
    $mysqli_host = "localhost";
    $mysqli_user = "reki";
    $mysqli_password = "1513";
    $mysqli_db = "reki_project_1";

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
        if ($textToFilter != null)
        {
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
?>
