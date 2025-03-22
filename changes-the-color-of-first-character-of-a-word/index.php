<?php 

// Write a PHP script, which changes the color of the first character of a word. 

// Define a text string
$text = 'PHP Tutorial';

// Use regex to wrap the first letter of each word in a span tag
$text = preg_replace('/\b([a-z])/i', '<span style="color:red;">$1</span>', $text);

// Kode ini mencoba menggunakan regular expression (regex) dengan fungsi preg_replace() untuk mengganti huruf pertama setiap kata dengan sesuatu yang berbeda.

//     Regex Pattern (/(\b[a-z])/i)

//         \b → Word boundary (batas awal kata).

//         [a-z] → Huruf pertama setiap kata (huruf kecil dalam rentang a-z).

//         /i → Case-insensitive (agar juga berlaku untuk huruf besar).




// Display the modified text
echo $text;


?>