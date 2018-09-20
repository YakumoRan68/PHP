<?PHP
    header('Content-type:text/html; charset=UTF-8');
    $i = 1;
    $sum = 0;

    while ($i <= 100) {
        $sum = $sum + $i;
        $i++;
    }
                    
    print "1부터 100까지의 합은 ".$sum;
?>