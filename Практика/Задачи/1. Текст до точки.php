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














