<?php

function validationNumber($n) {
    if ($n > 0 && ($n & ($n - 1)) == 0) {
        echo "$n is power of 2\n";
    } else {
        echo "$n is not power of 2\n";
    }
}


validationNumber(3);  // 3 is not power of 2
validationNumber(4);  // 4 is power of 2
validationNumber(10); // 10 is not power of 2
validationNumber(16); // 16 is power of 2
validationNumber(32); // 32 is power of 2
validationNumber(60);
?>
