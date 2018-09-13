<?PHP 
    header('Content-type:text/html; charset=UTF-8');

    print "입력한 숫자는 ";
    echo ($_POST["num"] % 2)?"홀수":"짝수";
?>