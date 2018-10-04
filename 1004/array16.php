<meta charset = utf-8>
<title>정렬</title>
<?PHP
    $arr = array("봄", "여름", "가을", "겨울");
    sort($arr); //대문자가 소문자보다 먼저
    foreach ($arr as $k => $v) print "$v "; print("</br>\n");
    
    rsort($arr); //내림차순
    foreach ($arr as $k => $v) print "$v ";
?>