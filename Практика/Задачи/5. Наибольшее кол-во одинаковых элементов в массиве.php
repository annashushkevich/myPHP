<?php

echo "4. Наибольшее кол-во подряд идущих одинаковых элементов в массиве.<br/>";
$arr = array(1,2,3,5,1,2,2,2);
echo "<pre>"; 
print_r($arr);
echo "</pre>";
$max_x = 1;
for ($i = 0; $i < count($arr); $i++){
    $x = 1;
    for ($j = $i + 1; $j < count($arr); $j++){
        if ($arr[$i]==$arr[$j]) {
            $x++;
        }
    }
    if ($x > $max_x){
        $max_x = $x;
        $element = $arr[$i];
    }
}
echo "Наибольшее кол-во подряд идущих одинаковых элементов в данном массиве ($element) = $max_x<br/>";