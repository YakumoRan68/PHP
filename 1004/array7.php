<meta charset = utf-8>
<title>배열 생성</title>
<?PHP
    $season1 = array("봄", "여름", "가을", "겨울");
    //$season2 = ["봄" => 1, "여름" => 2]; PHP 5.4.2 이상버전부터
    $season3 = $season1;

    foreach($season1 as $key => $value) print "$value<br>";
    print "<br>";
    //foreach($season2 as $key => $value) print "$value<br>";
    foreach($season3 as $key => $value) print "$value<br>";
?>

