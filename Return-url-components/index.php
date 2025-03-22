<?php 

// di bedah
// Fungsi parse_url() di PHP digunakan untuk mengurai (parse) string URL menjadi komponen-komponennya seperti skema, host, path, query, dan fragment. Ini sangat berguna untuk memproses dan menganalisis URL secara terstruktur.
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';

// Parse the URL and store its components in the $url variable
$url = parse_url($url);
// display the scheme (protocol) of the parsed URL
echo "Scheme : " . $url['scheme'] . "\n";
// display domain
echo "Host : " . $url['host'] . "\n";
// Display the path of the parsed URL
echo "path : " . $url['path'] . "\n";

?>