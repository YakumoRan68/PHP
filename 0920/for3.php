<?PHP
    header('Content-type:text/html; charset=UTF-8');
    
    $num1 = $_POST["num"];
    
    for($i=1, $sum=0; $i<=$num1; $i++) $sum = $sum + $i;
    
    print("1부터 ".$num1."까지의 합 = $sum");
?>