<?php

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