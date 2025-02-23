<?php

function validationNumber($n) {
    if ($n % 2 == 0) {
        echo "$n is genap\n";
    } else {
        echo "$n is ganjil\n";
    }
}

validationNumber(3);
validationNumber(10);
?>