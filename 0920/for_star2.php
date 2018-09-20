<?PHP
    for($i = 1; $i <= 5; $i++) {
        for($j = 5 - $i; $j >= 1; $j--) print("&nbsp");
        for($k = 1; $k <= $i; $k++) print("*"); 
        print("</br>\n");
    }
?>