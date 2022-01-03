<?php
const M = 1;
const N = 10;

$array = [];
$array[] = range(M, N);

foreach ($array as $elem) {
    foreach ($elem as $subElem) {
        echo $subElem. '<br>';
    }
}