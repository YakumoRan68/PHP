<?PHP
    header('Content-type:text/html; charset=UTF-8');
    $array = array("봄", "여름", "가을", "겨울");
    
    sort($array);
    
    foreach($array as $k => $v) {
        print("$k $v <br>");
    }
?>