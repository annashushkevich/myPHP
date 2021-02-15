<?php

function funcEight($arr)
{
    $min = 1000;
    $flag = false;

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
                echo "Ошибка! Некорректный ввод.</br>";
                echo "Значение как минимум одного из элементов данного массива выходит за пределы [-1000,1000].";
                return;
            }
        };

        if ($flag == true) {
            echo "Результат:</br>";
            echo "В данном массиве самое маленькое положительное четное число, оканчивающееся цифрой 8 - это $min.";
        }
        else { 
            echo "Результат:</br>";
            echo "В данном массиве положительного числа, оканчивающегося цифрой 8, нет.";
        }
    } 
    else 
    echo 'Ошибка! Количество чисел в массиве превышает 100.';
}

//случайный ввод
function array_fill_rand($limit, $min, $max)
{
    $limit = (int)$limit;
    $min = (int)$min;
    $max = (int)$max;

    $array = array();

    for ($i = 0; $i < $limit; $i++) {
        $array[$i] = rand($min, $max);
    }

    return $array;
}

if ($_POST['find']){
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
}