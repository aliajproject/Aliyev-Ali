<?php

$included = 1;

// daxil ediləcək rəqəm.
$number = 6;

for ($i = 1; $i < $number; $i++) {
    $included *=$i;
}

echo $included." Factorial qiyməti !";

?>