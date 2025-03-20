<?php 

// Check if the IP is from shared internet

// If it's not empty (meaning the request is coming through a proxy that passes the client's real IP address), the code inside the if block will be executed.
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}

else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}

else  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}

// Check if the IP is from a proxy

// If not from shared internet or proxy, consider it as the remote address

// Display the determined IP address

echo $ip_address;


?>