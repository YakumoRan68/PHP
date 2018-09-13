<?PHP 
    header('Content-type:text/html; charset=UTF-8');

    print "입력한 숫자".$_POST["num"]."<br><br>";
    if ($_POST["num"] > 0) print "양수";
    else if ($_POST["num"] < 0) print "음수";
    else print "0";
?>