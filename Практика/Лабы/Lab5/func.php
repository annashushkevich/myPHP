<?php

function funcEight($arr)
{
    $min = 1000;
    $flag = false;
    $str = '';
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