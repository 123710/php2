   <?php
function reverseString($str){
    $len = strlen($str);
    if($len == 1){
        return $str;
    }
    else{
        return strrev($str);
    }
}
$str = "hoi";
echo (reverseString($str));
?>
