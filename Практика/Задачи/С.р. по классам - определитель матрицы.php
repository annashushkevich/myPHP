<?php

echo "Посчитать определитель данной матрицы.";
class Test
{
    public function f1($arr)
    {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        $x = $arr[0][0] * $arr[1][1] * $arr[2][2] +
            $arr[0][1] * $arr[1][2] * $arr[2][0] +
            $arr[1][0] * $arr[2][1] * $arr[0][2] -
            $arr[0][2] * $arr[1][1] * $arr[2][0] -
            $arr[0][1] * $arr[1][0] * $arr[2][2] -
            $arr[0][0] * $arr[1][2] * $arr[2][1];
        return "Определитель матрицы равен $x";
    }
}

$arr = array(
    array(1, 4, 7),
    array(2, 5, 8),
    array(3, 6, 9)
);

$test = new Test;
echo $test->f1($arr);
