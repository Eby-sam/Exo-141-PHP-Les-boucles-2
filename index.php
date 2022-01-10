<?php

// exo 1

$i = 0;
while ($i < 11) {
    echo "la variable i vaut : $i <br>";
    $i++;
}

$x = 0;
$y = 50;

while ($x < 20) {
    echo $x * $y ."<br>";
    $x++;
}

$z = 100;
$a = 2;


$exo4 = 1;

while ($exo4 < 10) {
    $exo4+= ($exo4/2);
    echo $exo4 . "<br>";
}

for ($exo5 = 1; $exo5 < 16; $exo5++) {
    echo "$exo5 on y arrive presque <br>";
}

for ($exo6 = 20; $exo6 > -1; $exo6--) {
    echo "$exo6 c'est presque bon <br>";
}

for ($exo7 = 1; $exo7 < 100; $exo7+=15) {
    echo "$exo7 on tient le bon bout <br>";
}
for ($exo8 = 200; $exo8 > 0; $exo8-=12) {
    echo "$exo8 Enfin ! <br>";
}
?>