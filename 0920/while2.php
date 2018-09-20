<?PHP
    header('Content-type:text/html; charset=UTF-8');
    
    $sum = 0;
    $count = 1;
    while ($count <= 10) {
        if($count % 2) $sum = $sum + $count;
        $count++;
    }
    print ("홀수 총 합 (1 ~ 10) : ").$sum;
?>