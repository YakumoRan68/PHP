<?PHP
    header('Content-type:text/html; charset=UTF-8');

    $num = (int)$_POST["num"];
    //if (gettype($num) != "integer") print("올바르지 않은 입력입니다.");
    //else if ($num < 0 || $num > 10000) print("1부터 10000까지의 숫자를 입력해주세요");
    //else {
        $sum = 0;
        
        while ($num > 0){
            if($num / 10) { 
                $sum = $sum + $num / 10;
                $num = $num / 10;
            }
        }
        print $sum;
    //}
?>