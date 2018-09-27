<title>사칙연산</title>
<meta charset = utf-8>
<form method = post action = "calculator.php">
    숫자1 : <input type = text name = num1><br><br>
    연산자 : <input type = radio name = op value = "+"> +
    <input type = radio name = op value = "-"> -
    <input type = radio name = op value = "*"> *
    <input type = radio name = op value = "/"> /<br><br>
    숫자2 : <input type = text name = num2><br><br>
    <input type = submit value = 전송>
</form>

<?PHP
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    function calc($x, $y, $op) {
        //return eval("return $x $op $y;"); 
        //매우 위험한 함수
        
        switch ($op) {
            case '+': return $x + $y;
            case '-': return $x - $y;
            case '*': return $x * $y;
            case '/': return $x / $y;
        }
    }

    $result = calc($num1, $num2, $op);
    print "$num1 $op $num2 = $result";
?>