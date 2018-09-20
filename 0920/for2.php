<?PHP
    header('Content-type:text/html; charset=UTF-8');
    
    for ($i = 1, $sum = 0; $i <= 10; $i++) {
        if ($i % 2) $sum = $sum + $i;
    }

    print ("1부터 10까지의 합(홀수) : ").$sum;
?>