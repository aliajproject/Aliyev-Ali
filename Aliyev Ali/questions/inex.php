<?php

echo "Aliyev Ali";

$number = 6;

$one_number = 0;
$two_number = 1;

for ($i = 4; $i < $number; $i++) {
    $other_number = $one_number + $two_number;
    $one_number = $two_number;
    $two_number = $other_number;
}

echo $other_number;
?>