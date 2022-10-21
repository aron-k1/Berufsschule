<?php
function compare(&$num1, &$num2) {
    $max=max($num1,$num2);
    $min=min($num2,$num1);
    $num1=$min;
    $num2=$max;
}