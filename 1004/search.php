<meta charset = utf-8>
<title>배열 찾기</title>
<form method = post action = "search.php">
    검색 : <input type = text name = var1><br><br>
    <input type = submit value = "전송">
</form>

<?PHP
    $var = trim($_POST["var1"]);
    $arr = array("enjoying", "php", "program", "is", "good");

    if (array_search($var, $arr)) return print "있음"; else return print "없음";
?>