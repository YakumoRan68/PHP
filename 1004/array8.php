<meta charset = utf-8>
<title>배열 생성</title>
<?PHP
    // array range ( mixed $start , mixed $end [, number $step = 1 ] )
    $numbers = range(1, 10); 
    $odd = range(1, 10, 2);
    $letters = range('a', 'g');

    foreach ($numbers as $key => $value) print "$value <br>"; print "<br>";
    foreach ($odd as $key => $value) print "$value <br>"; print "<br>";
    foreach ($letters as $key => $value) print "$value <br>"; print "<br>";
    
?>

