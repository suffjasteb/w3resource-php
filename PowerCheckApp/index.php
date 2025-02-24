<?php 

// Write a PHP program to check whether an integer is the power of another integer.

// Input : 16, 2

// Example: For x = 16 and y = 2 the answer is "true", and for x = 12 and y = 2 "false"

// Fungsi untuk memeriksa apakah angka $x adalah pangkat dari angka $y
function is_power($x, $y) {

    // Kita mulai dengan memeriksa apakah $y > 1, karena jika $y = 1, tidak ada angka selain 1 yang bisa menjadi pangkat dari 1
    if ($y == 1) {
        echo "$x is not power of $y\n";
        return;
    }

    // Set $a sama dengan $x (angka yang akan diperiksa) dan $b sama dengan $y (basisnya)
    $a = $x;
    $b = $y;

    // Lakukan loop untuk membagi $a dengan $b sampai hasilnya tidak dapat dibagi lagi
    while ($a % $b == 0) {
        // Jika $a bisa dibagi habis dengan $b, bagi $a dengan $b
        $a /= $b;
    }

    // Jika setelah pembagian berulang kali, $a menjadi 1, berarti $x adalah pangkat dari $y
    if ($a == 1) {
        echo "$x is power of $y\n";
    } else {
        // Jika tidak, berarti $x bukanlah pangkat dari $y
        echo "$x is not power of $y\n";
    }
}

// Contoh penggunaan
is_power(16, 2);  // Output: 16 is power of 2
is_power(9, 3); 

?>
