<?php

echo "4. Наибольшее кол-во подряд идущих одинаковых элементов в строке.<br/>";
//$S = "ABACADDEE";
$S = "XYZZZZXXXXYYXZYYY";
echo "Строка: $S<br/>";
$len = strlen($S);
$naib = 0;
$x = 1;
$element = "";
if ($len != 0){
    for ($i = 0; $i < $len - 1; $i++){
        if ($S[$i] == $S[$i+1]){
            $x++;
            if ($x > $naib){
                $naib = $x;
                $element = "$S[$i]";
            } elseif ($x == $naib){
                $element.=", $S[$i]";
            }
        } else {
            $x = 1;
        }
    }
} else {
    echo "Пустая строка...";
}
echo "Наибольшее кол-во подряд идущих одинаковых элементов ($element) = $naib<br/>";