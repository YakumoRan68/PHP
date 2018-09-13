<?PHP 
    header('Content-type:text/html; charset=UTF-8');

    print "큰 값은 ";
    echo ($_POST["num1"] > $_POST["num2"])?$_POST["num1"]:$_POST["num2"]."이다.";
?>