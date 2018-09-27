<?PHP 
    function factorial($x) {
        if ($x >= 1) return $x * factorial($x--);
        else return 1;
    }
    
    $num = $_POST["num"];

    $result = factorial($num);
    print $result;
?>