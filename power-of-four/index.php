<?php 

function validateNumber($n) {
    
    // ambil n jadiin x untuk di manipulasi nanti
    $x = $n;

      // untuk menghindari input angka negatif atau nol
      if ($x <= 0 ) {
        echo "$x is not power of four\n";
        return;
    } 

    // Loop until $x is divisible by 4
    while($x % 4 == 0) {
        // setelah di loop kita pangkat 4
        $x /= 4;
    }

    //  Check if $x is equal to 1 after the loop

    if ($x == 1) {
        echo("$n is power of four\n");
    } else {
        echo("$n is not power of four\n");
    }

}



validateNumber(8); // false
validateNumber(4); // true 4 pangkat 1
validateNumber(16); // true 4 pangkat 2
validateNumber(64); // true 4 pangkat 3
validateNumber(0); // false

?>