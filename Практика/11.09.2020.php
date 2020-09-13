<?php


echo "1. Текст до точки;<br/>";
$s = "text.text2<br/>";
$l = strlen($s);

for ($i = 0; $i < $l; $i++) 
{
    if ($s[$i]!=".") 
    {
        echo "$s[$i]";  
    } 
    else {
         break;
         }
}

echo "<br/>";

echo "2. Звёздочки;<br/>";
$N = 3;
$S = "";
$i = 1;
while ($i <= $N){
    $i++;
    $S.="*";
    echo "$S<br/>";
}


echo "3. Звёздочки 2.0;<br/>";
$N = 5;
$S = "*";
$probel = "____";
echo "$probel$S<br/>";
$i = 2;
while ($i <= $N) {
    $i++; 
    $probel = substr($probel,0,-1);
    $S.="**";
    echo "$probel$S<br/>";
}

echo "4. Наибольшее кол-во одинаковых элементов в строке.<br/>";
//$S = "ABACADDEE";
$S = "XYZZZZXXXXYYXZYYY";
echo "Строка: $S<br/>";
$len = strlen($S);
$naib = 0;
$x = 1;
$element = "";
if ($len != 0){
    for ($i = 0; $i < $len - 1; $i++){
        if ($S[$i] == $S[$i+1]){
            $x++;
            if ($x > $naib){
                $naib = $x;
                $element = "$S[$i]";
            } elseif ($x == $naib){
                $element.=", $S[$i]";
            }
        } else {
            $x = 1;
        }
    }
} else {
    echo "Пустая строка...";
}
echo "Наибольшее кол-во подряд идущих одинаковых элементов ($element) = $naib<br/>";







