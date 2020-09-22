<?php

//ПИд. Шушкевич. Вариант 1.

function func($x,$y){
$res = ( $y * $y - 1)/( $x * $x + 1);
return "f($x,$y) = $res";
}
echo func(2,2);