<meta charset = utf-8>
<title>iteration</title>
<?PHP
    $num1 = array('a', 'b', 'c');
    $num2 = array('a', 'b', 'c');
    $num3 = array('b', 'c', 'a');
    $num4 = array('a', 'b', 'd');
    $num5 = $num1 + $num2; //$b의 결과 뒤에 $a추가, 인덱스가 같으면 추가되지 않음
    
    print $num1."과".$num2."의 연산 결과 : ";
    foreach ($num5 as $k => $v) print $v;   print "</br>\n";
    
    if ($num1 == $num2) print"num1 == num2 <br>"; // 모든요소가 같으면
    if ($num1 === $num2) print "num1 === num2 <br>"; // 요소, 타입, 순서모두 같으면
    if ($num1 === $num3) print "x";
    if ($num1 != $num3) print "num1 != num3 <br>"; 
    if ($num1 <> $num3) print "num1 <> num3 <br>"; // != 와 같음
    if ($num1 !== $num4) print "num1 !== num4 <br>"; // 요소, 타입, 순서중 하나라도 다르면
?>