<meta charset = utf-8>
<title>배열 출력</title>
<?PHP
    //array array_slice ( array $array , int $offset [, int $length [, bool $preserve_keys ]] )
    $arr = array("봄", "여름", "가을", "겨울");
    $last_key = key( array_slice( $arr, -1, 1, TRUE ) ); //end(array_keys($arr))

    for ($i = 0; $i <= $last_key; $i++) print( $arr[$i]." " ); print "<br>\n";
    foreach($arr as $k => $v) print "$v "
?>