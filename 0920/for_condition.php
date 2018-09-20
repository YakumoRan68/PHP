<?PHP
    header('Content-type:text/html; charset=UTF-8');

    $linecnt = 0;

    for($i=1; $i <= 100; $i++) {
        if (!($i % 3)) {
            print"$i ";
            $linecnt++;
            if (!($linecnt % 5)){
                print("</br>\n");
                $linecnt = 0;
            } 
        }
        
    }
?>