<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<form method='post' action=#>
<font size='3'><b> 영화 정보 수정 </b></font>
<table border='0' width='400' cellpadding='2' cellspacing='2' font size='2'>
    <tr><td width='100' bgcolor='cccccc'><b>영화코드</b></td>
	<td><p><input type='text' size='12' name=name> * 필수</p></td></tr>
    <tr><td width='100' bgcolor='cccccc'><b>제목</b></td>
	<td><p><input type='text' size='20' name=title> </p> </td></tr>
    <tr><td width='100' bgcolor='cccccc'><b>장르</b></td>
	<td><font size='2'><input type='text' size='12' name=type></font></td></tr>
</table>

<p> <input type = 'reset' value = '다시 작성'> 
    <input type = 'submit' value = '수정'></p>
</form>

<?
    $conn = mysql_connect('localhost', 'root', 'apmsetup');

    $db_status = mysql_select_db('movie');

    if (!$db_status) {    error ("DB_ERROR");    exit;  }
    
    $name = $_POST['name'];
    $title = $_POST['title'];
    $type = $_POST['type'];

    $query = "update 영화 set 제목 = '".$title."', 장르 = '".$type."' where 영화번호 = '$name'";
    echo $query;
    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");

    $result = mysql_query($query);

    if ($result)     print "수정되었습니다.<br>";
    else     print "수정되지 않았습니다.<br>";

    mysql_close($conn);	 
?>

<?
    $conn = mysql_connect('localhost', 'root', 'apmsetup');

    $db_status = mysql_select_db('movie');

    if (!$db_status) {    error ("DB_ERROR");    exit;  }

    $query = "select * from 영화 order by 영화번호";

    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");

    $result = mysql_query ($query);

    print "<table border=1><tr>" . 
        "<th>영화번호</th>" . "<th>제목</th>" . "<th>평점</th>" 
    . "<th>장르</th>" . "<th>제작국가</th>" . "<th>개봉년도</th>". "<th>배우</th></tr>";

    while ($row = mysql_fetch_row($result)) {
    print "<tr><td>" . $row[0] . "</td>" .
          "<td>" . $row[1] . "</td>" . "<td>" . $row[2] . "</td>" .
          "<td>" . $row[3] . "</td>" . "<td>" . $row[4] . "</td>" .
          "<td>" . $row[5] . "</td>". "<td>" . $row[6] . "</td></tr>";
    }
    print "</table>";

    mysql_close($conn);
?>