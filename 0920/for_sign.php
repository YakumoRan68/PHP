<?PHP
    header('Content-type:text/html; charset=UTF-8');
    
    $num1 = $_POST["num"];
    $char = $_POST["char"];
    
    for($i=1; $i <= $num1; $i++) {
        print($char);
    }
?>