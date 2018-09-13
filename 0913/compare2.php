<?PHP 
    header('Content-type:text/html; charset=UTF-8');

    print "가장큰수는 ";
    if ($_POST["num1"] > $_POST["num2"]) echo ($_POST["num1"] > $_POST["num3"])?$_POST["num1"]:$_POST["num3"];
    else echo ($_POST["num2"] > $_POST["num3"])?$_POST["num2"]:$_POST["num3"];
?>