<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?PHP
    $conn = mysql_connect('localhost', 'root', 'apmsetup');

    $db_status = mysql_select_db('seoilcorp');

    if (!$db_status) {  error ("DB_ERROR");  exit;  }

    $query = "select ename, position, salary from employee";  // 부서의 모든 정보 검색 SQL

    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");

    $result = mysql_query($query);  // $query 실행

    print "<table border=1><tr>" . 
    "<th>직원명</th>" . "<th>직위</th>" . "<th>급여</th></tr>";

    while ($row = mysql_fetch_row($result)) {  // 한행씩 가져옴
    print "<tr><td>" . $row[0] . "</td>" .
        "<td>" . $row[1] . "</td>" .
        "<td>" . $row[2]  . "</td></tr>";
    }
    print "</table>";

    mysql_close($conn);// 데이터베이스 연결 끊음
?>