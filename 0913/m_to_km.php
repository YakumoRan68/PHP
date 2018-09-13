<?php
    header('Content-type:text/html; charset=UTF-8');

    $km = (int)($_POST["m"] / 1000);
    $m = (int)($_POST["m"] % 1000);

    print "입력한 m : ".$_POST["m"]." => ".$km."km ".$m."m";
?>