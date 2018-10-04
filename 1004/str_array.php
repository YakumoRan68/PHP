<meta charset = utf-8>
<title>문자열 길이</title>
<?PHP
    //strlen() returns the number of bytes rather than the number of characters in a string.
    $arr = array("봄", "summer", "fall", "겨울");
    for ($i = 0; $i < 4; $i++) $len[$i] = strlen($arr[$i]);

    for ($i = 0; $i < 4; $i++) print $arr[$i]."의 길이 : ".$len[$i]."</br>\n";
?>