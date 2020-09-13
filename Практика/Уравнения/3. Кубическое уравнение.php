<?php
    echo "Решение кубического уравнения ax^3 + bx^2 + cx + d = 0:<br/>";
    $a1 = 1;
    echo "a = $a1 <br/>";

    $b1 = 5;
    echo "b = $b1 <br/>";

    $c1 = -1;
    echo "c = $c1 <br/>";

    $d1 = -5;
    echo "d = $d1 <br/>";
    
    $a = $b1 / $a1;
    $b = $c1 / $a1;
    $c = $d1 / $a1;
    $Q = (pow($a,2) - 3*$b) / 9;
    $R = (2*pow($a,3) - 9*$a*$b + 27*$c) / 54;
    $S = pow($Q,3) - pow($R,2);
    echo "Ответ:  ";
    if ($S > 0) {
        $phi = (1/3) * acos($R/sqrt($Q * $Q * $Q));
        $x1 = -2 * sqrt($Q) * cos($phi) - $a / 3;
        $x2 = -2 * sqrt($Q) * cos($phi + 2 * M_PI/3) - $a / 3;
        $x3 = -2 * sqrt($Q) * cos($phi - 2 * M_PI/3) - $a / 3;
        echo "x1 = $x1, x2 = $x2, x3 = $x3";
    } elseif ($S < 0) {
        echo "Я с комплексными числами не работаю... ";
        
    }

   