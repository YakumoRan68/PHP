<?PHP 
    function absolabs($x) {
        if ($x < 0) $x *= -1;
        return $x;
    }

    $result = absolabs(3);
    print $result;

    $result = absolabs(-10);
    print $result;
?>