<?php
    echo "Решение квадратного уравнения ax^2 + bx + c = 0 :<br/>";
    echo "  a = ";
    $a = 1;
    echo "$a <br/>";

    echo "  b = ";
    $b = 2;
    echo "$b <br/>";

    echo "  c = ";
    $c = -4;
    echo "$c <br/>";
    
    $D = $b * $b - 4 * $a * $c;
    echo "D = $D <br/>";
    echo "Ответ: <br/>";
    if ($D > 0) {
        $x1 = ( $b + sqrt($D) ) / (2 * $a);
        echo "x1 = $x1<br/>";
        $x2 = ( - $b + sqrt($D) ) / (2 * $a);
        echo "x2 =  $x2";
    } elseif ($D == 0) {
        $x = - $b / (2 * $a);
        echo "корень равен $x";
    } else {
        echo "корней в данном уравнении неет!";
    }
    
    
?>