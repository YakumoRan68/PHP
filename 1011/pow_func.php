<meta charset = utf-8>
<form method=post action="pow_func.php">
    숫자 1 : <input type = "text" name = "var1"><br>
    숫자 2 : <input type = "text" name = "var2">
    <input type = submit value = "제출">
</form>

<?PHP
    $num1 = $_POST["var1"];
    $num2 = $_POST["var2"];
    
    function Power($x, $y) {
        if (empty($x) or empty($y)) return;
        $result = $x;
        for ($i = 1; $i <= $y; $i++) $result *= $x;
        return $result;
    }

    $result = Power($num1, $num2);
    print $num1."의 ".$num2."승은 ".$result;
?>