<?PHP
    header('Content-Type: text/html; charset=UTF-8');
        
    print "입력한 단가 : ".$_POST["unit"]."<br>";
    print "입력한 수량 : ".$_POST["count"]."<br>";
    $total = ($_POST["count"] >= 10)?($_POST["unit"] * $_POST["count"])*0.9:($_POST["unit"] * $_POST["count"]);
    print "총액 : ".$total;
?>