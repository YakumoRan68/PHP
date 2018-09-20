<?PHP
    header('Content-type:text/html; charset=UTF-8');
    
    $num1 = $_POST["num"];
    
    print("숫자 : $num1</br>\n짝수 : ");
    for($i=1; $i <= $num1; $i++) {
        if (!($i % 2)) print("$i ");
    }
?>