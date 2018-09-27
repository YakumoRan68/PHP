<?PHP
    header('Content-type:text/html; charset=UTF-8');
    $num = array(85,90,75,100,95);
    $sum = 0;
    
    foreach($num as $k => $v) {
        $sum += $num[$k];
    }
    print "총합 : ".$sum."</br>\n평균 : ".$sum/count($num);
?>