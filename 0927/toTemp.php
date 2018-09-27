<title>온도 변환</title>
<meta charset = utf-8>
<form method = post action = "function6.php">
    섭씨 : <input type = text name = num>
    <input type = submit value = 전송>
</form>

<?PHP
    $num = $_POST["num"];

    function toF($x) {
        return ($x * 1.8 + 32);
    }
    print toF($num);
?>