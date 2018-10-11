<meta charset = utf-8>
<?PHP
    $str = "Enjoy php program";
    print "문장 : $str";
    print "</br>\n모두 대문자로 : ".strtolower($str);
    print "</br>\n모두 소문자로 : ".strtoupper($str);
    print "</br>\n첫 글자만 대문자로 : ".ucfirst($str);
    print "</br>\n각 단어의 첫글자를 대문자로 : ".ucwords($str);

?>