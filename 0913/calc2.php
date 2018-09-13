<?PHP
    header('content-type:text/html; charset=UTF-8');
    
    print "현재 가지고 있는 돈 : ".$_POST["money"]."<br><br>";
    print "입력한 가격 : ".$_POST["unit"]."<br>";
    print "입력한 수량 : ".$_POST["count"]."<br>";
    
    $total = $_POST["unit"] * $_POST["count"];
    $change = $_POST["money"] - $total;
    
    print "총액 : ".$total."<br>";
    print "거스름돈 : ".$change."<br>";
?>