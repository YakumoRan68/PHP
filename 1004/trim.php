<meta charset = utf-8>
<title>trim 함수</title>
<form method = post action = "trim.php">
    계절 1 : <input type = text name = arr1><br><br>
    계절 2 : <input type = text name = arr2><br><br>
    계절 3 : <input type = text name = arr3><br><br>
    <input type = submit value = "전송">
</form>

<?PHP
    $s0 = $_POST["arr1"];
    $s1 = trim($_POST["arr1"]); //공백제거
    $s2 = ltrim($_POST["arr2"]);
    $s3 = rtrim($_POST["arr3"]); // chop()함수랑 똑같음

    print "<".$s0."> </br>\n";
    print "<".$s1."> </br>\n";
    print "<".$s2."> </br>\n";
    print "<".$s3."> </br>\n";
?>