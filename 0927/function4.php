<?PHP 
    function absolabs($x) {
        if ($x < 0) $x *= -1;
        return $x;
    }
    
    $num = $_POST["num"];

    $result = absolabs($num);
    print $result;
?>