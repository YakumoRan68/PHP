<?PHP
    header('Content-Type: text/html; charset=UTF-8');
    print "입력한 가로 : ".$_POST["garo"]."<br>" ;
    print "입력한 세로 : " .$_POST["sero"]. "<br><br>" ;

    $area = $_POST["garo"] * $_POST["sero"];
    print "넓이 : ".$area."<br>" ;
?>