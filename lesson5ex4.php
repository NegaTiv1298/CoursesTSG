<?php
// VARIANT 1  (with recursion)//
for ($i = 1; $i < 20; $i++) {
    echo fibo($i) . '<br>';
}
function fibo($n)
{
    if ($n == 0) {
        return 0;
    } elseif ($n == 1 || $n == 2) {
        return 1;
    } else {
        return fibo($n - 1) + fibo($n - 2);
    }
}
// VARIANT 2 (without recursion)//
$n = 20;
fibo2($n);
function fibo2($n)
{
    $num1 = 0;
    $num2 = 1;
    $count = 0;
    for ($i = 0; $i < 20, $count < $n; $i++){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $count++;
    }
}
?>