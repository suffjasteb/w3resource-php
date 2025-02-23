<?php 

function validationPowerOfThree($n) {



    // Assign $n to a variable $x for manipulation
    $x = $n;

    // untuk menghindari input angka negatif atau nol
    if ($x <= 0 ) {
        echo "$x is not power of three";
        return;
    } 

    // Loop untuk cek apakah x bisa dibagi dengan 3 terus hingga 1
    while ($x % 3 == 0) {
        // Divide $x by 3
        $x /= 3;
    }

     // Check if $x is equal to 1 after the loop
     if ($x == 1) {
        echo "$n is power of three\n";
     } else {
        echo "$n is not power of three\n";
     }

}

// yang bilangan pangkat 3 true jadi 1 3 9 27 81 dst

validationPowerOfThree(3);
validationPowerOfThree(9);
validationPowerOfThree(6);
validationPowerOfThree(4);
validationPowerOfThree(1);
validationPowerOfThree(7);
validationPowerOfThree(27); 


?>