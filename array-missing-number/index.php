<?php 

// Write a PHP program to find a missing number(s) from an array.

// Input : 1,2,3,6,7,8

// Define a function named missing_number which takes an array $num_list as input
function missing_number($number_list) {

     // Construct a new array containing the range from the first element to the maximum element in $num_list
    $new_array = range($number_list[0], max($number_list));

     // Use array_diff to find the missing elements by comparing $new_arr with $num_list
    return array_diff($new_array, $number_list);
}

print_r(missing_number(array(1,2,3,4,6,7))); // missing 5
print_r(missing_number(array(1,3,4,5,7,8,9))); // missing 2 and 6
?>