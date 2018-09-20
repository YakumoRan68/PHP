<?PHP
    header('Content-type:text/html; charset=UTF-8');

    $num = $_POST["num"];
	$sum = 0;
	
	while ($num > 0){
		if($num / 10) { 
			$sum = $sum + (int)($num % 10);
			$num = (int)($num / 10);
		}
	}
	print $sum;

?>