<?php
$i = 1;
echo "Perulangan Ganjil 1-100:<br>";

while ($i <= 100) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
    $i++;
}