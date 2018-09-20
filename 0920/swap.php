<?PHP
    $num = $_POST["num"];
    $i = 0;

	while ($num > 0) {
		if($num / 10) { 
			$digit[$i] = (int)($num % 10);
			$num = (int)($num / 10);
            $i++;
		}
	}

    $max = 0;
    while(true) {
        if ($digit[$max] == NULL) break;
        $max++;
    }

    for ($i = 0; $i < $max; $i++) {
        print($digit[$i]);
    }

?>