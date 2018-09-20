<?PHP
    header('Content-type:text/html; charset=UTF-8');

    for($i = 1, $sum = 0;$i <= 100; $i++){
        $sum = $sum + $i;
    }

    print "1 ~ 100 까지의 합은 ".$sum;
?>