<title>절댓값</title>
<meta charset = "utf-8">
<form method = post action = "absolute.php">
    숫자 : <input type = text name = num>
    <input type = submit value = 전송>
</form>

<?PHP 
    function absolabs($x) {
        if ($x < 0) $x *= -1;
        return $x;
    }
    
    $num = $_POST["num"];

    $result = absolabs($num);
    print $result;
?>