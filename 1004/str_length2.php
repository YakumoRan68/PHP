<meta charset = utf-8>
<title>문자열 길이</title>
<?PHP
    $arr = array("enjoying", "php", "program", "is", "good");
    for ($i = 0; $i <= end(array_keys($arr)); $i++) $len[$i] = strlen($arr[$i]);

    $average = array_sum($len) / count($len);
    $keys = array();

    for($i = 0; $i <= end(array_keys($len)); $i++) {
        if ($average < $len[$i]) $keys[] = $i;   
    }
    
    print ("평균보다 긴 문자열 : ");
    foreach($keys as $k => $v) print "$arr[$v] "; print("</br>\n");

    print ("그것의 길이 : ");
    foreach($keys as $k => $v) print strlen($arr[$v])." ";
?>