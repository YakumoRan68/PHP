<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
    $conn = mysql_connect('localhost', 'root', 'apmsetup');
    $db_status = mysql_select_db('movie');

    $query = 'select 영화번호,제목,평점,장르,제작국가,개봉년도,배우 from 영화 order by 영화번호';

    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");

    $result = mysql_query($query);

    print "<table border=1><tr>" . 
          "<th>영화번호</th>" . "<th>제목</th>" . "<th>평점</th>" .
	      "<th>장르</th>" . "<th>제작국가</th>" . "<th>개봉년도</th>" . "<th>배우</th></tr>";

    while ($row = mysql_fetch_row($result)) {
        print "<tr><td>" . $row[0] . "</td>" .
          "<td>" . $row[1] . "</td>" . "<td>" . $row[2] . "</td>" .
          "<td>" . $row[3] . "</td>" . "<td>" . $row[4] . "</td>" .
          "<td>" . $row[5] . "</td>". "<td>" . $row[6] . "</td></tr>";
        
    }
    print "</table>";

    mysql_close($conn);
?>
