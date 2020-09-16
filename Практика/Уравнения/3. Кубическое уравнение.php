<?php
    echo "Решение кубического уравнения a*x^3 + b*x^2 + c*x + d = 0:<br/>";

    $A = 1;
    $B = 1;
    $C = -1;
    $D = -5;
    $a = $B / $A;
    $b = $C / $A;
    $c = $D / $A;

    echo "A = $A <br/>";
    echo "B = $B => a = $a <br/>";
    echo "C = $C => b = $b<br/>";
    echo "D = $D => c = $c<br/>";
    
    $Q = (pow($a,2) - 3*$b) / 9;
    $R = (2*pow($a,3) - 9*$a*$b + 27*$c) / 54;
    $S = pow($Q,3) - pow($R,2);

    echo "Q = $Q<br/>";
    echo "R = $R<br/>";
    echo "S = $S<br/>";

    function sgn($x){
        if ($x > 0) {
            return 1;
        } elseif ($x == 0) {
            return 0;
        } else {
            return -1;
        }
    }

    function ch($x){
        return (exp($x) + exp(-$x)) / 2;
    }

    function sh($x){
        return (exp($x) - exp(-$x)) / 2;
    }

    $div = abs($R) / sqrt( pow($Q,3) ); //частное

    echo "Ответ:<br/>";
    if ($S > 0) {
        $phi = (1/3) * acos($R/sqrt($Q * $Q * $Q));
        $x1 = -2 * sqrt($Q) * cos($phi) - $a / 3;
        $x2 = -2 * sqrt($Q) * cos($phi + 2 * M_PI/3) - $a / 3;
        $x3 = -2 * sqrt($Q) * cos($phi - 2 * M_PI/3) - $a / 3;
        echo "x1 = $x1, x2 = $x2, x3 = $x3";
    } elseif ($S < 0) {
        if ($Q > 0) {
            $phi = 1/3*( log($div + sqrt(pow($div,2) - 1)) );
            echo "$phi<br/>";
            $const = sgn($R) * sqrt($Q) * ch($phi);
            $x = -2 * $const - ($a / 3);
            $mnim = sqrt(3)*sqrt($Q)*sh($phi);
            $res = $const - ($a / 3);
            echo "S < 0 и Q > 0<br/>";
            echo "Действительный корень = $x<br/>";
            echo "Комплексные корни: <br/>";
            echo "x1 = $res + i*$mnim;<br/>";
            echo "x2 = $res - i*$mnim.<br/>";
        } elseif ($Q < 0) {
            $phi = 1/3*( log($div + sqrt(pow($div,2) + 1)) ); 
            $const = sgn($R) * sqrt($Q) * sh($phi);
            $x = -2 * $const - ($a / 3);       //действ корень
            $mnim = sqrt(3)*sqrt($Q)*ch($phi); //мнимая часть
            $res = $const - ($a / 3);          //действ часть
            echo "Действительный корень = $x<br/>";
            echo "Комплексные корни: <br/>";
            echo "x1 = $res + i*$mnim;<br/>";
            echo "x2 = $res - i*$mnim.<br/>";
        } else {
            $x = -pow(($c-(pow($a,3)/27)),(1/3)) - ($a/3);
            echo "Действительный корень = $x<br/>";
            $res = -($a+$x)/2; //действ часть
            $mnim = (1/2)*(sqrt(abs(($a - 3*$x)*($a+$x)-4*$b))); //мнимая часть
            echo "Действительный корень = $x<br/>";
            echo "Комплексные корни: <br/>";
            echo "x1 = $res + i*$mnim;<br/>";
            echo "x2 = $res - i*$mnim.<br/>";
        }
        
    } else {
        $x1 = -2*(pow($R,(1/3)) - ($a/3));
        $x2 = pow($R,(1/3)) - ($a/3);
        echo "2 действительных корня:<br/>";
        echo "x1 = $x1;<br/>";
        echo "x2 = $x2.";
    }

   