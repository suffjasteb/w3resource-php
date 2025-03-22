<?php 

// Retrieves the base name of the currently executed PHP script file using basename($_SERVER['PHP_SELF']) and stores it in the variable $current_file_name.

$current_file_name = basename($_SERVER['PHP_SELF']);

echo $current_file_name;

?>