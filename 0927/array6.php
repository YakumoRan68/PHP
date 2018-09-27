<?PHP
    header('Content-type:text/html; charset=UTF-8');
    $array = array("봄1", "2여름", "가3을", "겨울4");
    
    natsort($array); 
    
    foreach($array as $k => $v) {
        print("$k $v <br>");
    }
?>