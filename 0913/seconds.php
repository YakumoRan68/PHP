<?PHP
    header('Content-type : text/html; charset=UTF-8');
    
    $hours = $_POST["hours"];
    $minutes = $_POST["minutes"];
    $seconds = $_POST["seconds"];

    $tosecond = $hours*3600 + $minutes*60 + $seconds;
    print $hours."시 ".$minutes."분 ".$seconds."초 => ".$tosecond."초";
?>