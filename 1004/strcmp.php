<meta charset = utf-8>
<title>문자열 비교</title>

<?PHP
    $str1 = "봄";
    $str2 = "여름";
    /* 문자열1 == 문자열2 : 0
    문자열1 > 문자열2 : 양수
    문자열1 < 문자열2 : 음수 */
    $var1 = strcmp($str1, $str2); 
    $var2 = strcmp($str2, $str1);

    print "strcmp(".$str1.", ".$str2.") = ".$var1."</br>\n";
    print "strcmp(".$str2.", ".$str1.") = ".$var2;
?>