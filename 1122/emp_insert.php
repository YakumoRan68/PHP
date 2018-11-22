<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method=post action=#>
    새로운 직원 정보를 입력해 주세요<br>
    <table border=1>
        <tr><td>직원번호</td><td><input type=text name=eno></td></tr>
        <tr><td>이름</td><td><input type=text name=ename></td></tr>
        <tr><td>직급</td><td><input type=text name=position></td></tr>
    </table>
    <input type=submit value="입력">
    <input type=reset value="취소">
</form>

<?
    $conn = mysql_connect('localhost', 'root', 'apmsetup');
    $db_status = mysql_select_db("seoilcorp");
    
    if (!$db_status) { error ("DB_ERROR");  exit;  }

    $eno = $_POST["eno"];
    $ename = $_POST["ename"];
    $position = $_POST["position"];

    $query = "INSERT INTO EMPLOYEE(eno, ename, position) VALUES({$eno}, '{$ename}', '{$position}')";
    echo $query;
    
    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");

    $result = mysql_query($query);

    if ($result) print "입력되었습니다.<br>";
    else print "입력되지 않았습니다.<br>";

    mysql_close($conn);
?>