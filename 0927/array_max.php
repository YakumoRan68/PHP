<?PHP
    header('Content-type:text/html; charset=UTF-8');
    $num = array(85,90,75,100,95);
    $max = 0;
    
    foreach($num as $k => $v) {
        if ($max <= $num[$k]) $max = $num[$k];
    }
    print "최대값 : ".$max;
?>