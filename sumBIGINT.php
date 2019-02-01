<?php
function sumBIGINT($num1, $num2){
    $rnum1 = strrev($num1);
    $rnum2 = strrev($num2);
    $prev = 0;
    $lenght = strlen($num1) >= strlen($num2) ? strlen($num1) : strlen($num2);
    for ($i = 0; $i < $lenght; $i++) {
        $char1 = isset($rnum1[$i]) ? $rnum1[$i] : 0;
        $char2 = isset($rnum2[$i]) ? $rnum2[$i] : 0;   
        $sum = $char1+$char2+$prev;
        if ($sum >= 10){
            $prev = 1;
            $char_sum .= $sum % 10;
        } else {
            $char_sum .= $sum;
            $prev = 0;
        }
    }
    if ($prev == 1){
        $char_sum .= 1;
    }
    return strrev($char_sum);
}
$num1 = '9122342345245365687876865745245678976986789678768679432999999999999999999999';
$num2 = '36456547647567798890634543454679679789789068234';
var_dump(sumBIGINT($num1, $num2));
echo '<br />';
var_dump(bcadd($num2, $num1));
