<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method='post' action=#>
<font size='3'><b> 영화 정보 입력 </b></font>             
<table border='0' width='400' cellpadding='2' cellspacing='2' font size='2'>
    <tr><td width='100' bgcolor='cccccc'><b>영화코드</b> </td>
    <td><p><input type='text' size='12' name=code > * 필수</p></td></tr>
    <tr><td width='100' bgcolor='cccccc'><b>제목</b></td>
    <td><p><input type='text' size='20' name=title> </p> </td></tr>
    <tr><td width='100' bgcolor='cccccc'><b>평점</b></td>
    <td><font size='2'><input type='text' size='12' name=grade></font></td></tr>
    <input Type = 'Reset' Value = '다시 작성'> <input Type = 'Submit' Value = '등록'>
</table>
</form>
<FORM Method='post' Action="movie_list.php" >

<?
    $conn = mysql_connect('localhost', 'root', 'apmsetup');
    $db_status = mysql_select_db('movie');
    
    $code = $_POST['code'];
    $title = $_POST['title'];
    $grade = $_POST['grade'];

    $query = "insert into 영화(영화번호,제목,평점) value('$code','".$title."',".$grade.")";

    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");
    
    if ($result)      print "입력되었습니다.<br>";
    else     print "입력되지 않았습니다.<br>";


    mysql_close($conn);
?>
    
<input type=submit value="리스트">