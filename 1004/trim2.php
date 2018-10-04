<?PHP
    /* 
    string substr ( string $string , int $start [, int $length ] )
    
    string
    The input string. Must be one character or longer.

    start
    If start is non-negative, the returned string will start at the start'th position in string, counting from zero. For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth.

    If start is negative, the returned string will start at the start'th character from the end of string.

    If string is less than start characters long, FALSE will be returned. 
    
    start는 String 배열의 인덱스 번호임에 주의(0부터 카운트)
    
    length
    If length is given and is positive, the string returned will contain at most length characters beginning from start (depending on the length of string).

    If length is given and is negative, then that many characters will be omitted from the end of string (after the start position has been calculated when a start is negative). 
    
    And If start denotes the position of this truncation or beyond, FALSE will be returned.

    If length is given and is 0, FALSE or NULL, an empty string will be returned.

    If length is omitted, the substring starting from start until the end of the string will be returned.*/

    $str = "Love yourself";

    $str1 = substr($str, 1);
    $str2 = substr($str, 2, 5);
    $str3 = substr($str, -8, -3);
    $err = substr($str, -1, -5); 
    print $str."</br>\n</br>\n".$str1."</br>\n".$str2."</br>\n".$str3."</br>\n";
    
    var_dump($err);
?>