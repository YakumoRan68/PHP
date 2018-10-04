<meta charset = utf-8>
<title>문자열 길이</title>
<?PHP
    $arr = array("enjoy", "php", "program");
    for ($i = 0; $i <= end(array_keys($arr)); $i++) $len[$i] = strlen($arr[$i]);

    $max_len = $len[0];
    $key= 0;

    for($i = 0; $i <= end(array_keys($len)); $i++) {
        if ($max_len < $len[$i]) {
            $max_len = $len[$i];
            $key = $i;   
        }
    }
    
    print ("가장 긴 문자열 : ".$arr[$key].", 길이 : ".$max_len);
?>