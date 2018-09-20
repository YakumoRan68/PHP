<?PHP
    header('Content-type:text/html; charset=UTF-8');
    
    $num1 = $_POST["num"];
    $count = 0;
    
    print("숫자 : $num1</br>\n짝수 : ");

    for($i=1; $i <= $num1; $i++) {
        if (!($i % 2)) {
            $count++; 
            print("$i ");
        }
    }
    print("</br>\n합 : $count")
?>