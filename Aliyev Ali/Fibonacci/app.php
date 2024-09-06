<?php
// Copyright reserved by Aliyev Ali!
// Aliyev Ali terefinde müəlliflik hüququ qorunur!
// Авторские права принадлежат Алиеву Али!

// Daxil edəcəyiniz rəqəmş
$number = 12;

// İlk number.
$one_number = 0;
$two_number = 1;

// Fibonacci 3-ə qədər qiymeti 1 olduqu üçün $i-nin qiymətini 3-dən başladırıq !
for ($i = 3; $i < $number; $i++) {
    $other_number = $one_number + $two_number;
    $one_number = $two_number;
    $two_number = $other_number;
}

// Toplam əməliyyatı.
$null_number_one = $one_number + $two_number;
$null_number = $two_number + $null_number_one;

// пörüntü.
echo '<h1>Fibonacci Hesablayıcı </h1>'.$null_number." Fibonacci qiyməti !";
?>