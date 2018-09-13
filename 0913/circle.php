<?PHP
    header('Content-Type: text/html; charset=UTF-8');
    print "입력한 반지름 : ".$_POST["radius"]."<br>" ;

    $area = 3.14 * $_POST["radius"] * $_POST["radius"];
    print "넓이 : ".$area."<br>" ;
?>