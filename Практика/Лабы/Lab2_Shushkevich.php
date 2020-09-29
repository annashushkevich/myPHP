<?php

//ПИд 21. Шушкевич

function func($s){
    switch ($s) {
        case 'Шушкевич': echo "Это фамилия!";
    break;
        case 'Анна': echo "Это имя!";
    break;
        case 'Сергеевна': echo "Это отчество!";
    break;
        default: echo "Я не знаю, что это такое...";
    break;
    }
}
echo func("Шушкевич");