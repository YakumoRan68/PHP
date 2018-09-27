<title>팩토리얼</title>
<meta charset = "utf-8">
<form method = post action = "factorial.php">
    숫자 : <input type = text name = num>
    <input type = submit value = 전송>
</form>

<?PHP 
    function factorial($x) {
        if ($x > 1) return $x * factorial($x-1);
        else return 1;
    }

    $num = $_POST["num"];

    $result = factorial($num);
    print $result;
?>