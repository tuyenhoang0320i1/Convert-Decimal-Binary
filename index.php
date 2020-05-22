<?php

$stack = new SplStack();
$number = 10;
while ((floor($number )) > 0)
{
   $stack->unshift($number % 2);
   $number = $number / 2;
}

echo "<pre>";
print_r($stack);
echo "</pre>";



