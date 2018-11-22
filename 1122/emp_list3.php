<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method = post action = #>
    직 급 : <input type=radio name=pos value="사원"> 사원
              <input type=radio name= pos value="대리"> 대리
	 <input type=radio name=pos value="과장"> 과장
   	 <input type=radio name=pos value="차장"> 차장
   	 <input type=radio name=pos value="부장"> 부장 <br><br>
    <input type=submit value="OK">
</form>

<?
    $conn = mysql_connect('localhost', 'root', 'apmsetup');

    $db_status = mysql_select_db('seoilcorp');  // 데이터베이스 선택

    if (!$db_status) {   error ("DB_ERROR");    exit;  }

    $pos = $_POST["pos"];

    $query = "select ename, position, salary from employee where position = '".$pos."'";

    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");

    $result = mysql_query($query);  // $query 실행

    print "<table border=1><tr>" . 
        "<th>직원명</th>" . "<th>직급</th>" . "<th>급여</th></tr>";

    while ($row = mysql_fetch_row($result)) {  // 한행씩 가져옴
    print "<tr><td>".$row[0]."</td>" .
          "<td>".$row[1]."</td>" .
          "<td>".$row[2]."</td></tr>";
    }
    print "</table>";

    mysql_close($conn);  // 데이터베이스 연결 끊음
?>