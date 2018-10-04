<meta charset = utf-8>
<title>배열 키 함수</title>
<?PHP
    $arr = array("봄", "여름", "가을", "겨울");
    foreach ($arr as $k => $v) print "$v ";

    reset($arr); //배열포인터 초기화
    //$key = key($arr); 
    //var_dump($key); 변수 덤핑(디버그? 비슷한)

    print "</br>\n</br>\ncurrent : ".current($arr)."<br>"; 
    //구버전에선 current()의 초깃값이 배열의 첫번째 요소로 초기화되지 않음

    $v = next($arr); //다음 value 반환
    print "next : ".$v."</br>\n";

    $v = end($arr);
    print "end : ".$v."</br>\n";

    $v = prev($arr);
    print "prev : ".$v."</br>\n";
?>