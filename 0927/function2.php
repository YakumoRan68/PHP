<?PHP 
    function add($x, $y = 10) {
        $sum = $x + $y;
        return $sum;
    }

    $result = add(3,5);
    print $result."<br>";

    $result = add(10);
    print($result);
?>