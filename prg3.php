<?php
// 1. array_change_key_case
$var = ["ONE" => 1, "TWO" => 2, "THREE" => 3];
print_r(array_change_key_case($var, CASE_LOWER));
print_r(array_change_key_case($var, CASE_UPPER));

// 2. array_chunk
$months = ["January", "February", "March", "April", "May", "June", "July"];
print_r(array_chunk($months, 3));

// 3. array_count_values
$fruits = ["apple", "banana", "apple", "orange", "banana", "apple"];
print_r(array_count_values($fruits));

// 4. array_combine
$keys = ["a", "b", "c"];
$values = [1, 2, 3];
print_r(array_combine($keys, $values));

// 5. array_pop
$stack = ["first", "second", "third"];
array_pop($stack);
print_r($stack);

// 6. array_push
array_push($stack, "fourth");
print_r($stack);

// 7. array_unshift
array_unshift($stack, "zero");
print_r($stack);

// 8. array_shift
array_shift($stack);
print_r($stack);
?>
