<title>원 계산</title>
<meta charset = utf-8>
<form method = post action = "circleFunc.php">
    반지름 : <input type = text name = num><br><br>
    <input type = radio name = op value = "+"> 둘레
    <input type = radio name = op value = "*"> 넓이<br><br>
    <input type = submit value = 전송>
</form>

<?PHP
    $num = $_POST["num"];
    $op = $_POST["op"];
        
    function calcCircle($x, $op) {
        switch($op) {
            case '+': return $x * 2 * 3.14;
            case '*': return $x * $x * 3.14;
        }
    }
    
    print "반지름 : $num<br>\n결과 : ".calcCircle($num, $op)
?>