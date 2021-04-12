<?php
require_once 'Stack.php';

$stack = new Stack(100);
$decimal = 101;

do {
    $i = $decimal % 2;
    $stack->push($i);
    $decimal = floor($decimal / 2);
} while ($decimal != 0);

$result = "";

while (!$stack->isEmpty()) {
    $result = $result . $stack->pop();
}

echo $result;
