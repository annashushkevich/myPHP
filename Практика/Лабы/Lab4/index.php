<?php

function funcEight($arr)
{
    $min = 1000;
    $flag = false;
    $str;
    //проверка кол-ва элементов в массиве
    if (count($arr) <= 100) {
        for ($i = 0; $i < count($arr); $i++) {

            //проверка значений в массиве 
            if (($arr[$i] >= -1000) && ($arr[$i] <= 1000)) {

                //условия задачи
                if ( ($arr[$i] > 0) && (fmod($arr[$i], 10) == 8) && ($arr[$i] <= $min) ) {
                    $min = $arr[$i];
                    $flag = true;
                }

            } else {
                $str = "Ошибка! Некорректный ввод. ";
                $str = $str."Значение как минимум одного из элементов данного массива выходит за пределы [-1000,1000].";
                return;
            }
        };

        if ($flag == true) {
            $str = "Результат: В данном массиве самое маленькое положительное четное число, оканчивающееся цифрой 8 - это $min.";
        }
        else { 
            $str = "Результат: В данном массиве положительного числа, оканчивающегося цифрой 8, нет.";
        }
    } 
    else {
        $str = 'Ошибка! Количество чисел в массиве превышает 100.';
    }

    return $str;
}

$array = explode(" ", $_POST['sequence']);
    for ($i = 0; $i < count($array); $i++){
        $array[$i] = intval($array[$i]);
    }
$result = funcEight($array);
$str = "Рез: ".$result;
echo json_encode($str);



/*if ($_POST['find']){
    $array = explode(" ", $_POST['sequence']);
    for ($i = 0; $i < count($array); $i++){
        $array[$i] = intval($array[$i]);
    }
    funcEight($array);
}

if ($_POST['random']){
    $rand_array = array_fill_rand(10, -1000, 1000);
    echo "Исходный массив ";
    for ($i = 0 ; $i < count($rand_array); $i++){
        echo $rand_array[$i]."  ";
    }
    echo "<br/>";
    funcEight($rand_array);
}*/