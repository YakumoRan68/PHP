<?PHP
    header('Content-type:text/html; charset=UTF-8');
    
    $num1 = $_POST["dan"];
    
    for($i=1; $i<= 9; $i++) {
        $sum = $num1 * $i;
        print("$num1 * $i = ".$sum."</br>\n");
    }
?>