<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method=post action=#>
새로운 부서 정보를 입력해 주세요<br>
<table border=1>
    <tr><td>부서번호</td><td><input type=text name=dno></td></tr>
    <tr><td>부서명</td><td><input type=text name=dname></td></tr>
    <tr><td>위치</td><td><input type=text name=loc></td></tr>
</table>
<input type=submit value="입력">
<input type=reset value="취소">
</form>

<?
    $conn = mysql_connect ('localhost', 'root', 'apmsetup');
    $db_status = mysql_select_db("seoilcorp");

    if (!$db_status) { error ("DB_ERROR");  exit;  }

    $dno = $_POST["dno"];
    $dname = $_POST["dname"];
    $loc = $_POST["loc"];

    $query = "insert into department values('{$dno}', '{$dname}', '{$loc}')";

    echo $query;

    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");

    $result = mysql_query($query);  // $query 실행

    if ($result) print "입력되었습니다.<br>";
    else print "입력되지 않았습니다.<br>";

    mysql_close($conn) ; // 데이터베이스 연결 끊음
?>