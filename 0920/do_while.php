<?PHP
    header('Content-type:text/html; charset=UTF-8');
    $i = 1;
    $sum = 0;

    do {
        $sum = $sum + $i;
        $i++;
    } while($i < 101);
    
    print "1~ 100 까지의 합 : ".$sum;
?>